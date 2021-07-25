<?php
class destaquesController extends Controller{
    public function index(){
        $a = new Admin();

        $offset = 0;
        $limit = 2;
        $total = count($a->getFeaturedsPosts());
        $dados['p'] = ceil($total/$limit);


        $dados['paginaAtual'] = (!empty($_GET['p'])?intval($_GET['p']):1);

        $offset = ($dados['paginaAtual'] * $limit) - $limit;

        $dados['title'] = "Comércios recomendados pela BCS Club!";
        // $dados['listPostFeatured'] = $a->getFeaturedsPosts();
        $dados['listPostFeaturedWPagination'] = $a->listPostFeaturedWPagination($offset, $limit);
        $dados['listCategories'] = $a->listCategories();
        

        $this->loadTemplate('destaques', $dados);
    }
}