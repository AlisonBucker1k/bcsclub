<?php
class categoriesController extends Controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index($id_category) {
        $dados = array();

        $a = new Admin();
        $filter01 = '';
        $searchCatPage = '';

        if(isset($_POST['filter01']) && !empty($_POST['filter01'])){
            $filter01 = addslashes($_POST['filter01']);
            
        }

        if(isset($_POST['searchCatPage']) && !empty($_POST['searchCatPage'])){
            $searchCatPage = addslashes($_POST['searchCatPage']);
        }
        $dados['title'] = "Categorias";
        $dados['listPost'] = $a->listPost($id_category);
        $dados['categories'] = $a->listCategories();

        $dados['listPost'] = $a->listPostFiltred01($filter01, $id_category, $searchCatPage);

        $dados['id_category'] = $id_category;
        $dados['listCategories'] = $a->listCategories();

        
        if(empty($dados['listPost'])){
            $dados['msg'] = "Ainda não existe nada nesta categoria";
        }

        $this->loadTemplate('categories', $dados);
    }
}