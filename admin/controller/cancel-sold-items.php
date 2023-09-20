<?php
$tab = $_GET['pg'] ?? 'product-delete';
$error = [];
$id = $_GET['id'] ?? null;
$sales = new Sales;
$row = $sales->get_one(['id'=>$id]);
$qty =  $sales->query("select qty from tblcart where id = '$id'");
$db = new Database;
$void = $db->query("select * from tblusers where role = 'admin' order by id desc");
$request = $db->query("select * from tblusers where role = 'cashier' order by id desc");
if($_SERVER['REQUEST_METHOD'] == "POST" && $row){

           
            // show($_POST['t_qty']);
            // die;
            date_default_timezone_set("Asia/Manila");
            $cancel = new Cancel();
            $_POST['date'] = date('Y-m-d');
            $_POST['time'] = date('H:i:sa');
            $p_id = $_POST['p_id'];
            $c_qty = $_POST['c_qty'];
            $error = $cancel->validate($_POST);
            if($_POST['t_qty'] == $_POST['c_qty']){
             
                          if(empty($error)){
                       
                            $db = new Database;
                            $db->query("update tblcart set status = 'Cancelled' where id = '$id' limit 1");
                            
                            if($_POST['action'] == 'Yes')
                            {
                            $db->query("update tblproduct set qty = qty + '$c_qty' where id = '$p_id' limit 1");
                            
                            $cancel->insert($_POST); 
                            redirect('sold-items');
                              
                            }else{
                              $cancel->insert($_POST); 
                              redirect('sold-items');
                            }
              }
             
            }else{
              $error['c_qty'] = "Quantity should be equal to transaction quantity.";
            }
      
           
             
               
        
             
}
require view_path('sales/cancel-sold-items');