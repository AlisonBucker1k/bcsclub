<?php
class Admin extends Model {
    public function login($login, $pass){
        $array = array();

        $sql = "SELECT * FROM admin WHERE login = :login AND passwd = :passwd";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':login', $login);
        $sql->bindValue(':passwd', md5($pass));
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();

            $_SESSION['login_adm_bsb'] = $array['id'];

            return true;
        }else{
            return false;
        }
    }

    // POSTS

    public function insertPost($title, $category, $body, $description, $althor, $link, $featured, $email, $phone, $map, $localizacao, $estado, $images, $discount, $cep, $bairro, $rua, $numero){
        
        $sql = "INSERT INTO posts SET id_admin = :id_admin, id_category = :id_category, title = :title, body = :body, author = :author_name, description = :description, featured = :featured, email = :email, telefone = :telefone, map = :map, localizacao = :localizacao, estado = :estado, link = :link, discount = :discount, cep = :cep, bairro = :bairro, rua = :rua, numero = :numero";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_admin', $_SESSION['login_adm_bsb']);
        $sql->bindValue(':id_category', $category);
        $sql->bindValue(':title', $title);
        $sql->bindValue(':body', $body);
        $sql->bindValue(':author_name', $althor);
        $sql->bindValue(':description', $description);
        $sql->bindValue(':featured', $featured);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':telefone', $phone);
        $sql->bindValue(':map', $map);
        $sql->bindValue(':localizacao', $localizacao);
        $sql->bindValue(':estado', $estado);
        $sql->bindValue(':link', $link);
        $sql->bindValue(':discount', $discount);
        $sql->bindValue(':cep', $cep);
        $sql->bindValue(':bairro', $bairro);
        $sql->bindValue(':rua', $rua);
        $sql->bindValue(':numero', $numero);
        $sql->execute();

        $idPost = $this->db->lastInsertId();

        $u = new Uploader();

        $u->move_files($images, $idPost);

        return $idPost;
    }

    public function getPostData($id){
        $array = array();
        
        $sql = "SELECT * FROM posts WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
            $array['images'] = $this->getImagesProduct($id);
        }

        return $array;
    }

    public function getImagesProduct($id){
        $array = array();

        $sql = "SELECT urlf FROM posts_images WHERE id_post = :id_post";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_post', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function listPost($id_category = ''){
        $array = array();

        if($id_category != ''){
            $sql = "SELECT * FROM posts WHERE id_category = :id_category";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id_category', $id_category);
            $sql->execute();
        }else{
            $sql = "SELECT * FROM posts";
            $sql = $this->db->query($sql);
        }

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getFeaturedsPosts(){
        $array = array();

        $sql = "SELECT * FROM posts WHERE featured = :featured";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':featured', 1);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
            
            foreach($array as $key => $item){
                $array[$key]['images'] = $this->getImagesByProductId($item['id']);
            }
        }

        return $array;
    }

    public function listPostFeaturedWPagination($offset, $limit){
        $sql = "SELECT * FROM posts WHERE featured = :featured LIMIT $offset, $limit";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':featured', 1);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
            
            foreach($array as $key => $item){
                $array[$key]['images'] = $this->getImagesByProductId($item['id']);
            }
        }

        return $array;
    }

    public function getImagesByProductId($id){
        $array = array();

        $sql = "SELECT urlf FROM posts_images WHERE id_post = :id_post";
        $sql =$this->db->prepare($sql);
        $sql->bindValue(':id_post', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        

        return $array;
    }

    
    public function editPost($title, $description, $category, $body, $author, $link, $featured, $email, $phone, $map, $localizacao, $estado, $images, $discount, $id, $cep, $bairro, $rua, $numero){
        $u = new Uploader();

        $sql = "UPDATE posts SET title = :title, description = :description, id_category = :category, body = :body, author = :author, link = :link, featured = :featured, email = :email, telefone =:phone, map = :map, localizacao = :localizacao, estado = :estado, discount = :discount, cep = :cep, bairro = :bairro, rua = :rua, numero = :numero WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':title', $title);
        $sql->bindValue(':description', $description);
        $sql->bindValue(':category', $category);
        $sql->bindValue(':body', $body);
        $sql->bindValue(':author', $author);
        $sql->bindValue(':link', $link);
        $sql->bindValue(':featured', $featured);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':phone', $phone);
        $sql->bindValue(':map', $map);
        $sql->bindValue(':localizacao', $localizacao);
        $sql->bindValue(':estado', $estado);
        $sql->bindValue(':discount', $discount);
        $sql->bindValue(':id', $id);
        $sql->bindValue(':cep', $cep);
        $sql->bindValue(':bairro', $bairro);
        $sql->bindValue(':rua', $rua);
        $sql->bindValue(':numero', $numero);
        $sql->execute();

        $u->move_files($images, $id);
        
        return true;
    }

    public function deletePost($id){
        $sql = "DELETE FROM posts WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        return true;
    }

    // CATEGORIES
    public function countCatById($id){
        $total = 0;
        $sql = "SELECT * FROM posts WHERE id_category = :id_category";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_category', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $total = $sql->rowCount();
        }

        return $total;
    }
    public function insertNewCat($title, $icon, $images, $back_position){
        $sql = "INSERT INTO categories SET title = :title, laicon = :la, back_pos = :back_pos";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':title', $title);
        $sql->bindValue(':la', $icon);
        $sql->bindValue(':back_pos', $back_position);
        $sql->execute();

        $idCat = $this->db->lastInsertId();

        $u = new Uploader();

        // $u->upload($icon, $idCat, 'category');
        $u->move_files($images, $idCat, 'categories');

        return true;
    }

    public function listCategories(){
        $array = array();
        $sql = "SELECT * FROM categories ORDER BY title";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getDadosFromCategory($id){
        $array = array();

        $sql = "SELECT * FROM categories WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function editCategory($title, $icon, $images, $id, $back_position){
        $sql = "UPDATE categories SET title = :title, laicon = :laicon, back_pos = :back_pos WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':title', $title);
        $sql->bindValue(':laicon', $icon);
        $sql->bindValue(':id', $id);
        $sql->bindValue(':back_pos', $back_position);
        $sql->execute();

        $u = new Uploader();

        $u->move_files($images, $id, 'categories');

        return true;
    }

    public function deleteCategory($id){
        $sql = "DELETE FROM categories WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        return true;
    }

    public function deleteImages($url){
        $sql = "DELETE FROM posts_images WHERE urlf = :urlf";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':urlf', $url);
        $sql->execute();

        return true;
    }

    // Filtros

    public function listPostFiltred01($filter01, $id_category, $searchCatPage){
        $array = array();

        switch($filter01){
            case 1:
                if(isset($searchCatPage) && !empty($searchCatPage)){
                    $sql = "SELECT * FROM posts WHERE id_category = :id_category AND title LIKE :title ORDER BY id DESC";
                    break;
                }else{
                    $sql = "SELECT * FROM posts WHERE id_category = :id_category ORDER BY id DESC";
                    break;
                }
                
            case 2:
                if(isset($searchCatPage) && !empty($searchCatPage)){
                    $sql = "SELECT * FROM posts WHERE id_category = :id_category AND title LIKE :title ORDER BY id ASC";
                    break;
                }else{
                    $sql = "SELECT * FROM posts WHERE id_category = :id_category ORDER BY id ASC";
                    break;
                }
            case 3:
                if(isset($searchCatPage) && !empty($searchCatPage)){
                    $sql = "SELECT * FROM posts WHERE id_category = :id_category AND title LIKE :title ORDER BY discount ASC";
                    break;
                }else{
                    $sql = "SELECT * FROM posts WHERE id_category = :id_category ORDER BY discount ASC";
                    break;
                }
            case 4:
                if(isset($searchCatPage) && !empty($searchCatPage)){
                    $sql = "SELECT * FROM posts WHERE id_category = :id_category AND title LIKE :title ORDER BY discount DESC";
                    break;
                }else{
                    $sql = "SELECT * FROM posts WHERE id_category = :id_category ORDER BY discount DESC";
                    break;
                }
            default:
            if(isset($searchCatPage) && !empty($searchCatPage)){
                $sql = "SELECT * FROM posts WHERE id_category = :id_category AND title LIKE :title ORDER BY id DESC";
            }else{
                $sql = "SELECT * FROM posts WHERE id_category = :id_category ORDER BY id DESC";
            }
        }

        $sql = $this->db->prepare($sql);
        if(isset($searchCatPage) && !empty($searchCatPage)){
            $sql->bindValue(':title', '%'.$searchCatPage.'%');
        }
        $sql->bindValue(':id_category', $id_category);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function search($keyword = '', $local = '', $category = ''){
        $array = array();

        if(isset($keyword) && !empty($keyword) && isset($local) && !empty($local) && empty($category)){
            $sql = "SELECT * FROM posts WHERE title LIKE :title AND localizacao LIKE :localizacao or estado LIKE :localizacao";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':title', '%'.$keyword.'%');
            $sql->bindValue(':localizacao', '%'.$local.'%');
            $sql->execute();
            
        }

        // if(isset($local) && !empty($local) && isset($category) && !empty($category)){
        //     $sql = "SELECT * FROM posts WHERE localizacao LIKE :localizacao AND id_category = :id_category";
        //     $sql = $this->db->prepare($sql);
        //     $sql->bindValue(':localizacao', '%'.$local.'%');
        //     $sql->bindValue(':id_category', $category);
        //     $sql->execute();
        //     print_r($sql);exit;
        //     // print_r($sql->fetchAll());exit;
        // }

        if(isset($keyword) && !empty($keyword) && isset($local) && !empty($local) && isset($category) && !empty($category)){
            $sql = "SELECT * FROM posts WHERE title LIKE :title or description LIKE :title AND localizacao LIKE :localizacao or estado LIKE :localizacao AND id_category = :id_category";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':title', '%'.$keyword.'%');
            $sql->bindValue(':localizacao', '%'.$local.'%');
            $sql->bindValue(':id_category', $category);
            $sql->execute();
            
        }

        if(isset($keyword) && !empty($keyword) && isset($category) && !empty($category) && empty($local)){
            $sql = "SELECT * FROM posts WHERE title LIKE :title or description LIKE :title AND id_category = :id_category";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':title', '%'.$keyword.'%');
            $sql->bindValue(':id_category', $category);
            $sql->execute();
            
        }

        if(isset($local) && !empty($local) && isset($category) && !empty($category)){
            $sql = "SELECT * FROM posts WHERE localizacao LIKE :local AND id_category = :id_category";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':local', '%'.$local.'%');
            $sql->bindValue(':id_category', $category);
            $sql->execute();
            
        }

        if(isset($keyword) && !empty($keyword)){
            $sql = "SELECT * FROM posts WHERE title LIKE :title or description LIKE :title";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':title', '%'.$keyword.'%');
            $sql->execute();
            
        }

        if(isset($local) && !empty($local)){
            $sql = "SELECT * FROM posts WHERE localizacao LIKE :localizacao or estado LIKE :localizacao";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':localizacao', '%'.$local.'%');
            $sql->execute();
            
        }

        if(isset($category) && !empty($category) && empty($local)){
            $sql = "SELECT * FROM posts WHERE id_category = :id_category";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id_category', $category);
            $sql->execute();
            
        }
        
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;

    }
}