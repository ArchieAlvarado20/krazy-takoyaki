<?php
defined("ABSPATH") ? "" : die();

//capture ajax data
$raw_data = file_get_contents("php://input");
if(!empty($raw_data))
{
    $obj = json_decode($raw_data, true);
    if(is_array($obj))
    {
        if($obj['data_type'] == "search")
        {
            $productClass = new Product();
            $limit = 1000;
            $rows = [];

            if($obj['text']){
                //search
                $barcode = $obj['text'];
                $text = "%".$obj['text']."%";
                $qry = "select * from tblproduct where category = '0' && description like :find || p_name = :p_name order by p_name asc";
                $row = $productClass->query($qry,['find'=>$text,'p_name'=>$barcode]); 
            }else{
                //get all
                $row = $productClass->query("select * from tblproduct where category = '0' order by p_name asc");
            }
           

            if($row){

                foreach($row as $key => $rows) {

                    $row[$key]['description'] = strtoupper($rows['description']);
                    $row[$key]['image'] = crop($rows['image']);
                }
                $info['data_type'] = "search";
                $info['data'] = $row;
                echo json_encode($info);
            } 
        }else
        if($obj['data_type'] == 'checkout')
        {
            date_default_timezone_set("Asia/Manila");
            $data    = ($obj['text']);
            $trans_count   = get_trans_count();
            $user_id = auth('id');
            $date    = date("Y-m-d");
            $time = date("H:i:sa");
            $date_tr = date("Ymd-His");
            $status = "Raw";
        
            $db = new Database();

            //fetch tblcart
            foreach ($data as $row){
                $arr = [];
                $arr['id'] = $row['id'];
                $qry = "select * from tblproduct where id = :id limit 1";
                $check = $db->query($qry,$arr);

                if(is_array($check)){
                        // show($check);
                        // die;
                    $check = $check[0];
                    //save to database
                    $arr = [];
                    $arr['status'] = $status;
                    $arr['p_id'] = $row['id'];
                    $arr['qty'] = $row['qty'];
                    $arr['cost'] = $check['cost'];
                    $arr['total'] = $row['qty'] * $check['cost'];
                    $arr['transno'] = $date_tr;
                    $arr['sdate'] = $date;
                    $arr['stime'] = $time;
                    $arr['user_id'] = $user_id;
                    $arr['trans_count'] = $trans_count;


                    $qry = "insert into tblcart(transno,qty,cost,total,sdate,stime,user_id,p_id,status,trans_count)values(:transno,:qty,:cost,:total,:sdate,:stime,:user_id,:p_id,:status,:trans_count)";
                    $db->query($qry,$arr);

                    $qry = "update tblproduct set view = view + 1 where id = :id limit 1";
                    $db->query($qry,['id'=>$check['id']]);

                    $qty = $arr['qty'];
                    $p_id = $arr['p_id'];
                    $db->query("update tblproduct set qty = qty - '$qty' where id = '$p_id' limit 1");
                }
            }
            //	barcode	refno	description	qty	amount	total	date	user_id	

            $info['data_type'] = "checkout";
            $info['data'] = "Payment rendered successfully";
            echo json_encode($info);
        }
    }
}



