<?php
class Comments extends Model {
    public function insertComment($name, $email, $msg, $id){
        $sql = "INSERT INTO posts_comments SET id_post = :id_post, name = :name, email = :email, comment = :comment";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_post', $id);
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':comment', $msg);
        $sql->execute();

        return true;
    }

    public function getListOfComments(){
        $array = array();

        $sql = "SELECT * FROM posts_comments";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getCommentsFromPostId($id){
        $array = array();

        $sql = "SELECT * FROM posts_comments WHERE id_post = :id_post";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_post', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }
}