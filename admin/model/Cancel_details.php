<?php
/**
 * Category Class
 */
class Cancel_details extends Model
{

                protected $table = "vw_cancel";
                protected $allowed_columns = [
                   
                        'id',	
                        't_id',	
                        'p_id',	
                        'transno',	
                        'price',	
                        'total',	
                        't_qty',	
                        'sdate',	
                        'stime',	
                        'status',	
                        'pcode',	
                        'description',	
                        'void_by',	
                        'cancel_request',	
                        'c_qty',	
                        'action',	
                        'reason',	
                        'date',	
                        'time',
                ]; 
              //  id	t_id	p_id	void_by	cancel_request	action	qty	reason	date	time
                public function validate($data, $id = null){
                    $error = [];
                    
                            if(empty($data['category'])){
                                $error['category'] = "Category is required";
                            }
                            return $error;
                        }
}
