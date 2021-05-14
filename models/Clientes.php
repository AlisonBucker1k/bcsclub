<?php 
class Clientes extends Model{
    public function add($nome, $cpf, $rg, $nome_mae, $cep, $rua, $numero, $bairro, $complemento, $cidade, $estado, $telefone, $email, $senha){
        $sql = "SELECT id FROM clientes WHERE cpf = :cpf or email = :email";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            return false;
        }else{
            $sql = "INSERT INTO clientes SET nome = :nome, nome_mae = :nome_mae, cpf = :cpf, rg = :rg, rua = :rua, bairro = :bairro, complemento = :complemento, numero = :numero, cep = :cep, cidade = :cidade, estado = :estado, telefone = :telefone, email = :email, senha = :senha";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':nome_mae', $nome_mae);
            $sql->bindValue(':cpf', $cpf);
            $sql->bindValue(':rg', $rg);
            $sql->bindValue(':rua', $rua);
            $sql->bindValue(':bairro', $bairro);
            $sql->bindValue(':complemento', $complemento);
            $sql->bindValue(':numero', $numero);
            $sql->bindValue(':cep', $cep);
            $sql->bindValue(':cidade', $cidade);
            $sql->bindValue(':estado', $estado);
            $sql->bindValue(':telefone', $telefone);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':senha', md5($senha));
            $sql->execute();

            return true;
        }
    }

    public function getClientList(){
        $array = array();

        $sql = "SELECT * FROM clientes";
        $sql = $this->db->prepare($sql);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getClientData($id){
        $array = array();

        $sql = "SELECT * FROM clientes WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function edit($nome, $cpf, $rg, $nome_mae, $cep, $rua, $numero, $bairro, $complemento, $cidade, $estado, $telefone, $email, $senha, $id){
        $sql = "UPDATE clientes SET nome = :nome, cpf = :cpf, rg = :rg, nome_mae = :nome_mae, cep = :cep, rua = :rua, numero = :numero, bairro = :bairro, complemento = :complemento, cidade = :cidade, estado = :estado, telefone = :telefone, email = :email WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':rg', $rg);
        $sql->bindValue(':nome_mae', $nome_mae);
        $sql->bindValue(':cep', $cep);
        $sql->bindValue(':rua', $rua);
        $sql->bindValue(':numero', $numero);
        $sql->bindValue(':bairro', $bairro);
        $sql->bindValue(':complemento', $complemento);
        $sql->bindValue(':cidade', $cidade);
        $sql->bindValue(':estado', $estado);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':id', $id);
        $sql->execute();

        return true;
    }

    public function delete($id){
        $sql = "DELETE FROM clientes WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        return true;
    }

    public function updateStatus($id){
        $sql = "SELECT status FROM clientes WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $info = $sql->fetch();

            if($info['status'] == 1){
                $sql = "UPDATE clientes SET status = :status WHERE id = :id";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':status', 0);
                $sql->bindValue(':id', $id);
                $sql->execute();

                return true;
            }elseif($info['status'] == 0){
                $sql = "UPDATE clientes SET status = :status WHERE id = :id";
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