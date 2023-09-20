<?php
/**
 * Category Class
 */
class Reference extends Model
{

                protected $table = "tblreference";
                protected $allowed_columns = [
                    'id',	
                    'refno',	
                    'stock_by',	
                    'stock_at',	
                    'supplier',	
                    'status',	
                    'tsdate',
                ]; 

                public function validate($data, $id = null){
                    $error = [];
                    
                            if(empty($data['refno'])){
                                $error['refno'] = "Reference number is required";
                            }
                            if(empty($data['stock_by'])){
                                $error['stock_by'] = "Receiving Personnel is required";
                            }
                            if(empty($data['supplier'])){
                                $error['supplier'] = "Supplier name is required";
                            }
                            return $error;
                        }
}
