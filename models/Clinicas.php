<?php
class Clinicas extends Model{
    public function add($raz_soc, $nome_fant, $cnpj, $nome_resp, $cpf_resp, $cep, $rua, $numero, $bairro, $complemento, $cidade, $estado, $latitude, $longitude, $telefone, $email, $senha){

        $sql = "SELECT * FROM clinicas WHERE cnpj = :cnpj";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':cnpj', $cnpj);
        $sql->execute();

        if($sql->rowCount() > 0){
            return false;
        }else{
            $sql = "INSERT INTO clinicas SET raz_soc = :raz_soc, nome_fant = :nome_fant, cnpj = :cnpj, nome_resp = :nome_resp, cpf_resp = :cpf_resp, rua = :rua, bairro = :bairro, numero = :numero, cidade = :cidade, estado = :estado, latitude = :latitude, longitude = :longitude, cep = :cep, telefone = :telefone, email = :email, senha = :senha";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':raz_soc', $raz_soc);
            $sql->bindValue(':nome_fant', $nome_fant);
            $sql->bindValue(':cnpj', $cnpj);
            $sql->bindValue(':nome_resp', $nome_resp);
            $sql->bindValue(':cpf_resp', $cpf_resp);
            $sql->bindValue(':rua', $rua);
            $sql->bindValue(':bairro', $bairro);
            $sql->bindValue(':numero', $numero);
            $sql->bindValue(':cidade', $cidade);
            $sql->bindValue(':estado', $estado);
            $sql->bindValue(':latitude', $latitude);
            $sql->bindValue(':longitude', $longitude);
            $sql->bindValue(':cep', $cep);
            $sql->bindValue(':telefone', $telefone);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':senha', md5($senha));
            $sql->execute();

            return true;
        }
    }

    public function getClinicasList(){
        $array = array();

        $sql = "SELECT * FROM clinicas";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getClinicaDate($id){
        $array = array();

        $sql = "SELECT * FROM clinicas WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function edit($raz_soc, $nome_fant, $cnpj, $nome_resp, $cpf_resp, $cep, $rua, $numero, $bairro, $cidade, $estado, $latitude, $longitude, $telefone, $email, $id){
        $sql = "UPDATE clinicas SET raz_soc = :raz_soc, nome_fant = :nome_fant, cnpj = :cnpj, nome_resp = :nome_resp, cpf_resp = :cpf_resp, rua = :rua, bairro = :bairro, numero = :numero, cidade = :cidade, estado = :estado, latitude = :latitude, longitude = :longitude, cep = :cep, telefone = :telefone, email = :email WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':raz_soc', $raz_soc);
        $sql->bindValue(':nome_fant', $nome_fant);
        $sql->bindValue(':cnpj', $cnpj);
        $sql->bindValue(':nome_resp', $nome_resp);
        $sql->bindValue(':cpf_resp', $cpf_resp);
        $sql->bindValue(':rua', $rua);
        $sql->bindValue(':bairro', $bairro);
        $sql->bindValue(':numero', $numero);
        $sql->bindValue(':cidade', $cidade);
        $sql->bindValue(':estado', $estado);
        $sql->bindValue(':latitude', $latitude);
        $sql->bindValue(':longitude', $longitude);
        $sql->bindValue(':cep', $cep);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':id', $id);
        $sql->execute();

        return true;
    }

    public function delete($id){
        $sql = "DELETE FROM clinicas WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        return true;
    }

    public function updateStatus($id){
        $sql = "SELECT status FROM clinicas WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $info = $sql->fetch();

            if($info['status'] == 1){
                $sql = "UPDATE clinicas SET status = :status WHERE id = :id";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':status', 0);
                $sql->bindValue(':id', $id);
                $sql->execute();

                return true;
            }elseif($info['status'] == 0){
                $sql = "UPDATE clinicas SET status = :status WHERE id = :id";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':status', 1);
                $sql->bindValue(':id', $id);
                $sql->execute();

                return true;
            }
        }else{
            return false;
        }
    }

    public function addConsulta($proc, $val_coust, $val_sell, $val_direct, $id){
        $sql = "INSERT INTO consultas SET id_clinica = :id_clinica, procedimento = :procedimento, val_coust = :val_coust, val_sell = :val_sell, val_direct = :val_direct";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_clinica', $id);
        $sql->bindValue(':procedimento', $proc);
        $sql->bindValue(':val_coust', $val_coust);
        $sql->bindValue(':val_sell', $val_sell);
        $sql->bindValue(':val_direct', $val_direct);
        $sql->execute();

        return true;
    }

    public function getConsultaList($id){
        $array = array();

        $sql = "SELECT * FROM consultas WHERE id_clinica = :id_clinica";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_clinica', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getConsultaData($id){
        $array = array();

        $sql = "SELECT * FROM consultas WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function editConsulta($proc, $val_coust, $val_sell, $val_direct, $id){
        $sql = "UPDATE consultas SET procedimento = :procedimento, val_coust = :val_coust, val_sell = :val_sell, val_direct = :val_direct WHERE id = :id_clinica";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':procedimento', $proc);
        $sql->bindValue(':val_coust', $val_coust);
        $sql->bindValue(':val_sell', $val_sell);
        $sql->bindValue(':val_direct', $val_direct);
        $sql->bindValue(':id_clinica', $id);
        $sql->execute();

        return true;
    }

    public function updateStatusConsulta($id){
        $sql = "SELECT * FROM consultas WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $info = $sql->fetch();

            if($info['status'] == 1){
                $sql = "UPDATE consultas SET status = :status WHERE id = :id";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':status', 0);
                $sql->bindValue(':id', $id);
                $sql->execute();

                return $info['id_clinica'];
            }elseif($info['status'] == 0){
                $sql = "UPDATE consultas SET status = :status WHERE id = :id";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':status', 1);
                $sql->bindValue(':id', $id);
                $sql->execute();

                return true;
            }
        }else{
            return false;
        }
    }
}