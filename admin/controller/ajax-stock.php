<?php
defined("ABSPATH") ? "" : die();

//capture ajax data
$raw_data = file_get_contents("php://input");
        $limit = 1000;

        if(!empty($raw_data))
        {
            $obj = json_decode($raw_data, true);
            if(is_array($obj))
            {
                if($obj['data_type'] == "search")
                {
                    $productClass = new Product();
            
                    if($obj['text']){
                        //search
                        $barcode = $obj['text'];
                        $text = "%".$obj['text']."%";
                        $qry = "select * from tblproduct where category = 0 && description like :find || barcode = :barcode order by p_name asc limit 20";
                        $row = $productClass->query($qry,['find'=>$text,'barcode'=>$barcode]); 
                    }else{
                        //get all
                        $row = $productClass->query("select * from tblproduct where category = 0 order by p_name asc");
                    }
         
            if($row){
                       
                foreach($row as $key => $rows) {

                    $row[$key]['description'] = strtoupper($rows['description']);
                    $row[$key]['p_name'] = strtoupper($rows['p_name']);

                }

                $info['data_type'] = "search";
                $info['data'] = $row;

                echo json_encode($info);

            } 
         }else
         if($obj['data_type'] == 'stocked')
         {
             $data    = ($obj['text']);
             $user_id = auth('id');
             $date    = date("Y-m-d H:i:s");
             $refno = $_SESSION['refno'];

             $db = new Database();

             //fetch tblcart
             foreach ($data as $row){
                 $arr = [];
                 $arr['id'] = $row['id'];
                 $qry = "select * from tblproduct where id = :id limit 1";
                 $check = $db->query($qry,$arr);

                 if(is_array($check)){

                     $check = $check[0];
                     //save to database
                     $arr = [];
                     $arr['ref_id'] = $refno;
                     $qty1 = $row['qty'];
                     $arr['qty'] = $row['qty'];
                     $arr['p_id'] = $row['id'];
                     $qry = "insert into tblstock(p_id,qty,ref_id)values(:p_id,:qty,:ref_id)";
                    $db->query($qry,$arr);
                     $qry = "update tblproduct set qty = qty + '$qty1' where id = :id limit 1";                     
                     $db->query($qry,['id'=>$check['id']]);
                }
            }             
            //	barcode	refno	description	qty	amount	total	date	user_id	
             $info['data_type'] = "stocked";            
             $info['data'] = "Payment rendered successfully";             
             echo json_encode($info);
        }
    }
}



