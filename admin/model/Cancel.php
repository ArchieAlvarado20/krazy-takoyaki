<?php
/**
 * Category Class
 */
class Cancel extends Model
{

                protected $table = "tblcancel";
                protected $allowed_columns = [
                    'id',
                    't_id',	'p_id',	'void_by',	'cancel_request',	'action',	'c_qty',	'reason',	'date',	'time',
                ]; 
              //  id	t_id	p_id	void_by	cancel_request	action	qty	reason	date	time
                public function validate($data, $id = null){
                    $error = [];
                    
                            if(empty($data['void_by'])){
                                $error['void_by'] = "Admin is required";
                            }
                            if(empty($data['cancel_request'])){
                                $error['cancel_request'] = "Cashier is required";
                            }
                            if(empty($data['c_qty'])){
                                $error['c_qty'] = "Qty is required";
                            }
                            return $error;
                        }
}
