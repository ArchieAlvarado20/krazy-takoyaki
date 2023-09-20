<?php
/**
 * Category Class
 */
class Category extends Model
{

                protected $table = "tblcategory";
                protected $allowed_columns = [
                    'id',
                    'category'
                ]; 

                public function validate($data, $id = null){
                    $error = [];
                    
                            if(empty($data['category'])){
                                $error['category'] = "Category is required";
                            }
                            return $error;
                        }
}
