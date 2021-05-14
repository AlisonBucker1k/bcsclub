<?php
class Dashboard extends Model{
    public function countLeads(){
        $array = array();

        $sql = "SELECT count(*) as c FROM leads WHERE status = 0";
        $sql = $this->db->query($sql);
        
        $array = $sql->fetch();

        return $array['c'];
    }

    public function countClinicas(){
        $array = array();

        $sql = "SELECT count(*) as c FROM clinicas WHERE status = 1";
        $sql = $this->db->query($sql);
        
        $array = $sql->fetch();

        return $array['c'];
    }

    public function countAppointmentMarkeds(){
        $qt = 0;

        $sql = "SELECT COUNT(*) as c FROM consultas_marcadas WHERE status_marcado = 1 AND status_pay = 1";
        $sql = $this->db->query($sql);

        $sql = $sql->fetch();

        $qt = $sql['c'];

        return $qt;
    }

    public function getMontlyRevenue(){
        $revenue = 0;
        $data = date('m');
        $sql = "SELECT * FROM consultas_marcadas WHERE status_pay = 1 AND MONTH(data_marcado) = $data";
        $sql = $this->db->prepare($sql);
        // $sql->bindValue(':date', date('m'));
        // $sql->bindValue(':data02', date('Y-m-d', strtotime("-1 week")));
        $sql->execute();

        if($sql->rowCount() > 0){
            foreach($sql->fetchAll() as $item){
                $revenue += $item['val_sell'];
            }
        }

        return $revenue;
    }

    public function getClinicsBalance(){
        $saldo = 0;

        $sql = "SELECT * FROM clinicas WHERE status = 1";
        $sql = $this->db->prepare($sql);
        $sql->execute();

        if($sql->rowCount() > 0){
            foreach($sql->fetchAll() as $item){
                $saldo += $item['saldo'];
            }
        }

        return $saldo;
    }

    public function getClientsBalance(){
        $saldo = 0;

        $sql = "SELECT * FROM clientes WHERE status = 1";
        $sql = $this->db->prepare($sql);
        $sql->execute();

        if($sql->rowCount() > 0){
            foreach($sql->fetchAll() as $item){
                $saldo += $item['saldo'];
            }
        }

        return $saldo;
    }
}