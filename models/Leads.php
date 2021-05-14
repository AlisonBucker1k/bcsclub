<?php
class Leads extends Model {
    public function addLeads($lead, $type){
        $ip = $_SERVER['REMOTE_ADDR'];
        $s_o = $_SERVER['HTTP_USER_AGENT'];
        
        if(strstr($_SERVER['HTTP_USER_AGENT'], "Linux")) {
                
            $s_o = "Linux"; // Linux

        } elseif(strstr($_SERVER['HTTP_USER_AGENT'], "Windows")) {
                    
                    $s_o = "Windows"; //Windows

        } else {
                    
                    $s_o = "UNDEFINED"; //Nao identificado
        }
        
        $sql = "INSERT INTO leads SET email = :lead, s_o = :s_o, ip = :ip, type = :type";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':lead', $lead);
        $sql->bindValue(':s_o', $s_o);
        $sql->bindValue(':ip', $ip);
        $sql->bindValue(':type', $type);
        $sql->execute();
        
        return true;
    }

    public function getListLeads(){
        $array = array();

        $sql = "SELECT * FROM leads WHERE status = :status AND type = 1";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':status', 0);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getListLeadsListen($type){
        $array = array();

        $sql = "SELECT * FROM leads WHERE status = 1 AND type = :type";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':type', $type);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }

    public function updateStatus($id, $status){
        $sql = "UPDATE leads SET status = :status WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':status', $status);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    public function getListNewsLetter(){
        $array = array();

        $sql = "SELECT * FROM leads WHERE status = :status AND type = 2";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':status', 0);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }
}