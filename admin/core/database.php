<?php
class Database{

    public function dbcon(){

        $host = "localhost";
        $dbname = "crazy-takoyaki-db";
        $user = "root";
        $pass = "";
        $driver = "mysql";

        // $host = "fdb1033.awardspace.net";
        // $dbname = "4373961_idats";
        // $user = "4373961_idats";
        // $pass = "Ellengay1";
        // $driver = "mysql";
    
    
        try{
           
        $con = new PDO("$driver:host=$host;dbname=$dbname",$user,$pass);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
       return $con;
    }

    public function query($qry,$data = array()){
        $con = $this->dbcon();
        $stmt = $con->prepare($qry);
        $check = $stmt->execute($data);
    
        if($check)
        {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            if(is_array($result) && count($result) > 0){
                return $result;
            }
        }
        return false;
    }
}
