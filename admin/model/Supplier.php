<?php
/**
 * Category Class
 */
class Supplier extends Model
{

                protected $table = "tblsupplier";
                protected $allowed_columns = [
                  
                    'id',	
                    'supplier'	,
                    'contact_person',	
                    'phone'	,
                    'email'	,
                    'address'
                ]; 

                public function validate($data, $id = null){
                    $error = [];
                    
                            if(empty($data['supplier'])){
                                $error['supplier'] = "Supplier name is required";
                            }
                            if(empty($data['email'])){
                                $error['email'] = "Email is required";
                            }else
                            if(filter_var($data['email'],FILTER_VALIDATE_EMAIL) == false){
                                $error['email'] = "Email is not valid";
                            }
                            if(empty($data['phone'])){
                                $error['phone'] = "Phone is required";
                            }
                            if(empty($data['contact_person'])){
                                $error['contact_person'] = "Contact Person is required";
                            }
                            if(empty($data['address'])){
                                $error['address'] = "Address is required";
                            }
                            return $error;
                        }
}
