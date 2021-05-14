<?php
class searchController extends Controller {
    public function index(){
        $dados = array();

        $a = new Admin();
        // $s = new Search();
        
        if(isset($_POST['keyword']) && !empty($_POST['keyword']) || isset($_POST['category']) && !empty($_POST['category']) || isset($_POST['local']) && !empty($_POST['local'])){
            $keyword = addslashes($_POST['keyword']);
            $local = addslashes($_POST['local']);
            $category = addslashes($_POST['category']);

            $dados['postByTherm'] = $a->search($keyword, $local, $category);
        }else{
            header('Location: '.BASE_URL);
        }
        
        $dados['listCategories'] = $a->listCategories();
        $dados['title'] = "Pesquisa";

        $this->loadTemplate('search', $dados);
    }
}