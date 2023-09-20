<?php

class Model extends Database
{
    
    protected function get_allowed_columns($data){
            if(!empty($this->allowed_columns)){
                foreach($data as $key => $value){
                if(!in_array($key, $this->allowed_columns)){
                    unset($data[$key]);
                }
            }
        }
        return $data;
    }
    public function insert($data){
        $clean_array = $this->get_allowed_columns($data, $this->table);
        $keys = array_keys($clean_array);
        $qry = "INSERT INTO $this->table ";
        $qry .= "(".implode(",",$keys) .") values ";
        $qry .= "(:".implode(",:",$keys) .")";

        $db = new Database();
        $db->query($qry,$clean_array);    
        }

        public function update($id,$data){

            $clean_array = $this->get_allowed_columns($data, $this->table);
            $keys = array_keys($clean_array);
            $qry = "UPDATE $this->table set ";
            foreach ($keys as $column){
                $qry .= $column . "=:" .$column .",";
            }
            $qry = trim($qry,",");
            $qry .= " where id = :id";
            $clean_array['id'] = $id;
    
            $db = new Database();
            $db->query($qry,$clean_array);    
            }

            
        public function delete($id){

            $qry = "delete from $this->table ";
            $qry .= "where id = :id limit 1";
            $clean_array['id'] = $id;
    
            $db = new Database();
            $db->query($qry,$clean_array);    
            }
    

        public function where($data,$limit = 10, $offset = 0)
        {
            $keys = array_keys($data);
            $qry = "SELECT * FROM $this->table WHERE ";

            foreach ($keys as $key){
                //code...
                $qry .= "$key = :$key && ";
            }

            $qry = trim($qry,"&& ");
            $qry .= " limit $limit offset $offset";
            $db = new Database();
            return $db->query($qry,$data);    
        }

        public function getAll($limit = 1000, $offset = 0, $order = "asc", $order_column = "id")
        {
            $qry = "SELECT * FROM $this->table order by $order_column $order limit $limit offset $offset";

            $db = new Database();
            return $db->query($qry);    
        }

        public function get_one($data)
        {
            $keys = array_keys($data);
            $qry = "SELECT * FROM $this->table WHERE ";

            foreach ($keys as $key){
                //code...
                $qry .= "$key = :$key && ";
            }

            $qry = trim($qry,"&& ");
            
            $db = new Database();
            if($res =  $db->query($qry,$data)){
                return $res[0];
            }    
            return false;
        }

}
