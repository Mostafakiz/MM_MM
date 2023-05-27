<?php
require_once __DIR__ .'/BaseModels.php';
class UserModel extends BaseModel{
    public int $id;
    public string $name_user;
    public string $email_user;
    public function __construct(){
        parent::__construct();
    }
    public function _add($tabel_name,$name_user,$email_user){
        $query="INSERT INTO users (name_user,email_user) VALUES 
        ('$name_user','$email_user')";
        $res=$this->connection->query($query);
    }
}

?>