<?php
include_once('connection.php'); // My connection is here
class Database extends Connection{
    public function __construct(){
        parent::__construct();//put this is naay constructor and class nai iya ge extendnan para ma apil sad
        //above code copy the default constructor of the class extended
        if(session_status() ==PHP_SESSION_NONE)
        {
            session_start(); //start session if session not start
        }
    }//endDefaultConstructor
    //disconnect is in the parent class connection.php
    //get row
    public function getRow($query,$params =[]){
        try{
            $stmt = $this->datab->prepare($query);
            $stmt->execute($params);
            return $stmt->fetch();
        }catch(PDOException $e){
            throw new Exception($e->getMessage());
        }
    }//end getRow
//get rows
public function getRows($query,$params = []){
    try{
        $stmt = $this->datab->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }catch(PDOException $e){
        throw new Exception($e->getMessage());
    }
}//end getRows
//insertRow
public function insertRow($query,$params = []){
    try{
        $stmt = $this->datab->prepare($query);
        $stmt->execute($params);
        return TRUE;
    }catch(PDOException $e){
        throw new Exception($e->getMessage());
    }
}//end insertRow
//Update row
public function updateRow($query,$params = []){
    $this->insertRow($query, $params);
    return true;
}//end updateRow
//delete row
public function deleteRow($query,$params = []){
    $this->insertRow($query, $params);
    return true;
}//end deleteRow
//get the last inserted ID
}
?>