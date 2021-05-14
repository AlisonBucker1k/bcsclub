<?php
class showcaseController extends Controller {
    public function index($id){
        $dados = array();

        $a = new Admin();
        $c = new Comments();

        if(isset($_POST['name1']) && !empty($_POST['name1'])){
            $name = addslashes($_POST['name1']);
            $email = addslashes($_POST['email']);
            $msg = addslashes($_POST['msg']);

            if($c->insertComment($name, $email, $msg, $id)){
                $dados['msg'] = "O Comentario Foi Adicionado!";
            }
        }

        $dados['dataPost'] = $a->getPostData($id);
        $dados['comments'] = $c->getCommentsFromPostId($id);
        $dados['getCategory'] = $a->getDadosFromCategory($dados['dataPost']['id_category']);
        $dados['imagesPost'] = $a->getImagesByProductId($id);
        $dados['title'] = $dados['dataPost']['title'];
        $dados['bg-color'] = '#4d586b';
        $dados['listCategories'] = $a->listCategories();

        $this->loadTemplate('showcase', $dados);
    }
}