<?php
class Uploader extends Model {

    public function move_files($arquivos, $id_post, $to = 'posts'){
        $array = array();

        $a = new Admin();

        // echo "<pre>";
        // print_r($arquivos);exit;

        for($q=0;$q<count($arquivos['images']['tmp_name']);$q++){
            // echo $arquivos['images']['type'][$q].'<br>';
            switch($arquivos['images']['type'][$q]){
                case 'image/jpeg':
                    $type = '.jpg';
                    break;
                case 'image/jpeg':
                    $type = '.jpg';
                    break;
                case 'application/pdf':
                    $type = '.pdf';
                    break;
                case 'image/gif':
                    $type = '.gif';
                    break;
                default:
                    return true;
                    break;
            }

            $hashFile = md5(rand(1111,99999).date('d/m/y').rand(111,9999999)).$type;
            move_uploaded_file($arquivos['images']['tmp_name'][$q], PATH_SITE.'/media/'.$to.'/'.$hashFile);

            if($to == 'posts'){
                $sql = "INSERT INTO posts_images SET id_post = :id_post, urlf = :urlf";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':id_post', $id_post);
                $sql->bindValue(':urlf', $hashFile);
                $sql->execute();
            }elseif($to == 'categories'){
               $sql = $this->db->prepare("UPDATE categories SET icon = :icon WHERE id = :id");
               $sql->bindValue(':icon', $hashFile);
               $sql->bindValue(':id', $id_post);
               $sql->execute();
            }
        }
        return true;
    }

    public function upload($images, $id, $to){
        //Manipular Imagens

        $allowed_images = array(
            'image/jpeg',
            'image/jpg',
            'image/png'
        );

        
        for($q=0;$q<count($images['name']);$q++){
            $tmp_name = $images['tmp_name'][$q];
            $type = $images['type'][$q];

            move_uploaded_file();

            // if(in_array($type, $allowed_images)){

            //     if($to == "post"){
            //         $this->addPostImages($id, $tmp_name, $type);
            //     }elseif($to == 'category'){
            //         $this->addCategoryImages($id, $tmp_name, $type);
            //     }

            // }
        }
    }

    public function addPostImages($id, $tmp_name, $type){
        switch($type){
            case 'image/jpeg':
            case 'image/jpg':
                $o_img = imagecreatefromjpeg($tmp_name);
                break;
            case 'image/png':
                $o_img = imagecreatefrompng($tmp_name);
        }

        if(!empty($o_img)){
            // 930 x 620
            $width = 930;
            $height = 620;
            $ratio = $width / $height;

            list($o_width, $o_height) = getImageSize($tmp_name);

            $o_ratio = $o_width / $o_height;

            if($ratio > $o_ratio){
                $img_w = $height * $o_ratio;
                $img_h = $height;
            }else{
                $img_h = $width / $o_ratio;
                $img_w = $width;
            }

            if($img_w < $width){
                $img_w = $width;
                $img_h = $img_w / $o_ratio;
            }

            if($img_h < $height){
                $img_h = $height;
                $img_w = $img_h * $o_ratio;
            }

            $px = 0;
            $py = 0;

            if($img_w > $width){
                $px = ($img_w - $width) / 2;
            }

            if($img_h > $height){
                $py = ($img_h - $height) / 2;
            }
            
            $img = imagecreatetruecolor($width, $height);
            imagecopyresampled($img, $o_img, -$px, -$py, 0, 0, $img_w, $img_h, $o_width, $o_height);

            $filename = md5(time().rand(0, 9999).rand(0,9999)).'.jpg';

            imagejpeg($img, PATH_SITE.'posts/'.$filename);

            $sql = "INSERT INTO posts_images SET id_post = :id_post, urlf = :urlf";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id_post', $id);
            $sql->bindValue(':urlf', $filename);
            $sql->execute();
        }
    }

    public function addCategoryImages($id, $tmp_name, $type){
        switch($type){
            case 'image/jpeg':
            case 'image/jpg':
                $o_img = imagecreatefromjpeg($tmp_name);
                break;
            case 'image/png':
                $o_img = imagecreatefrompng($tmp_name);
        }

        if(!empty($o_img)){
            // 930 x 620
            $width = 60;
            $height = 60;
            $ratio = $width / $height;

            list($o_width, $o_height) = getImageSize($tmp_name);

            $o_ratio = $o_width / $o_height;

            if($ratio > $o_ratio){
                $img_w = $height * $o_ratio;
                $img_h = $height;
            }else{
                $img_h = $width / $o_ratio;
                $img_w = $width;
            }

            if($img_w < $width){
                $img_w = $width;
                $img_h = $img_w / $o_ratio;
            }

            if($img_h < $height){
                $img_h = $height;
                $img_w = $img_h * $o_ratio;
            }

            $px = 0;
            $py = 0;

            if($img_w > $width){
                $px = ($img_w - $width) / 2;
            }

            if($img_h > $height){
                $py = ($img_h - $height) / 2;
            }
            
            $img = imagecreatetruecolor($width, $height);
            imagecopyresampled($img, $o_img, -$px, -$py, 0, 0, $img_w, $img_h, $o_width, $o_height);

            $filename = md5(time().rand(0, 9999).rand(0,9999)).'.png';

            imagejpeg($img, PATH_SITE.'categories/'.$filename);

            $sql = "UPDATE categories SET icon = :icon WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->bindValue(':icon', $filename);
            $sql->execute();
        }
    }
}