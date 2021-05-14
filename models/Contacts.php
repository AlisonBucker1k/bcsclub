<?php
class Contacts extends Model {
    public function insertContact($name, $email, $phone, $msg){
        $sql = "INSERT INTO contact_form SET name = :name, email = :email, phone = :phone, message = :message";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':phone', $phone);
        $sql->bindValue(':message', $msg);
        $sql->execute();

        return true;
    }

    public function getNewContacts(){
        $array = array();

        $sql = "SELECT * FROM contact_form WHERE status = 0";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getDataFromContact($id){
        $array = array();

        $sql = "SELECT * FROM contact_form WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function getListReadContacts(){
        $array = array();

        $sql = "SELECT * FROM contact_form WHERE status = 1";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }

    public function readContact($id){
        $sql = "UPDATE contact_form SET status = 1 WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        return true;
    }
}