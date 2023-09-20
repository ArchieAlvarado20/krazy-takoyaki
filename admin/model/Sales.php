<?php
/**
 * Sales Class
 */
class Sales extends Model
{

                protected $table = "vw_sales";
                protected $allowed_columns = [
                    'barcode',
                    'transno',
                    'description',
                    'pcode',
                    'qty',
                    'price',
                    'total',
                    'sdate',
                    'user_id',
                    'p_id'
                ];	
               
        public function validate($data, $id = null){
            $error = [];
            
                    //check username
                    if(empty($data['description'])){
                        $error['description'] = "Product description is required";
                    }
                    // if(!preg_match("/[a-zA-Z _\-\&\(\)]/",$data['description'])){
                    //     $error['description'] = "Only letters are allowed in description";
                    // }
                     //check qty
                    if(empty($data['qty'])){
                        $error['qty'] = "Product quantity is required";
                    }else
                    if(!preg_match("/^[0-9]+$/",$data['qty'])){
                     $error['qty'] = "Quantity must be number";
                    }
                    //check price
                    if(empty($data['price'])){
                        $error['price'] = "Product price is required";
                    }else
                    if(!preg_match("/^[0-9.]+$/",$data['price'])){
                     $error['price'] = "Price must be number";
                    }
                    //check price
                   $max_size = 4;//mbs
                   $size = $max_size * (1024 *1024);
                  //show($data['image']);die;
                   if(!$id || ($id && !empty($data['image']))){
                        if(empty($data['image'])){
                            $error['image'] = "Product image is required";
                        }else
                        if(!($data['image']['type'] == "image/jpeg" || $data['image']['type'] == "image/jpg" || $data['image']['type'] == "image/png")){
                        $error['image'] = "File must be jpeg or png";
                        }else
                        if($data['image']['error'] > 0){
                            $error['image'] = "The image is failed to upload. Error No.".$data['image']['error'];
                        }else
                        if($data['image']['size'] > $size){
                            $error['image'] = "The imga must be lower than " .$max_size."Mb";
                        }
                   }
                   
                   
                //search for more validation...
            return $error;
    }
    public function generate_barcode(){
        return "2222" . rand(1000, 999999999);
    }
    public function generate_filename($ext = "jpg" || "jpeg" || "png" || "gif"){
        return hash("sha1",rand(1000, 999999999))."_".rand(1000,9999).".".$ext;
    }
}
