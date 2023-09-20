<?php
/**
 * Category Class
 */
class Stocks extends Model
{

                protected $table = "vw_stock";
                protected $allowed_columns = [
                    'id',
                    'p_id',
                	'ref_id',
                	'qty',
                	'status',
                	'pcode',
                	'barcode',
                	'description',
                	'refno',
                	'stock_by',
                	'stock_at',
                	'supplier', 	
                ]; 
                
                


                public function validate($data, $id = null){
                    $error = [];
                    
                            if(empty($data['refno'])){
                                $error['refno'] = "Reference number is required";
                            }
                            return $error;
                        }
}
