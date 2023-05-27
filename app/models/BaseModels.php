<?php
require_once __DIR__ ."/../../database/connection.php";
class BaseModel{
    public $connection;
    public function __construct(){
        $db=new Connection();
        $this->connection=$db->getConnection();
    }
    public function all($table_name,$args){
        $query='SELECT '.$args.' FROM '.$table_name;
        $res=$this->connection->query($query);
        return $res;
    }
    public function _modify($_new,$old,$table_name,$args){
        $query='UPDATE '.$table_name.' SET '."$args='$_new'".' WHERE '."$args='$old'";
        $res=$this->connection->query($query);
    }
    public function _delete($old,$table_name,$args){
        $query='DELETE FROM '.$table_name.' WHERE '."$args='$old'";
        $res=$this->connection->query($query);
    }
} 
?>