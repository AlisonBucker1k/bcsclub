<?php
class adminController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function login(){
        $dados = array();
        $a = new Admin();

        if(isset($_POST['login']) && !empty($_POST['login'])){
            $login = addslashes($_POST['login']);
            $pass = $_POST['pass'];

            if($a->login($login, $pass)){
                header("Location: ".BASE_URL."admin");
            }else{
                $dados['login_error'] = "O login e/ou a senha estão errados";
            }
        }
        

        $this->loadView('loginAdm', $dados);
    }

    public function logout(){
        unset($_SESSION['login_adm_bsb']);
        header("Location: ".BASE_URL."admin");
    }

    public function index() {
        $dados = array();

        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $a = new Admin();
            $dash = new Dashboard();
            
            $dados['leadsCount'] = $dash->countLeads();
            $dados['countComercios'] = $dash->countComercios();
            $dados['countCat'] = $dash->countCat();
            
            $dados['montlyRevenue'] = $dash->getMontlyRevenue();
            $dados['clinicsBalance'] = $dash->getClinicsBalance();
            $dados['clientsBalance'] = 0;//$dash->getClientsBalance();
            $dados['listCategories'] = $a->listCategories();

            $dados['lastContact'] = $dash->getLastContact(5);

            if(isset($_POST['title']) && !empty($_POST['title'])){
                
                $title = addslashes($_POST['title']);
                $description = '';// addslashes($_POST['description']);
                $category = addslashes($_POST['category']);
                $body = addslashes($_POST['body']);
                $althor_name = '';//addslashes($_POST['althor_name']);
                $link = addslashes($_POST['link']);
                $featured = addslashes($_POST['featured']);
                $email = addslashes($_POST['email']);
                $phone = addslashes($_POST['phone']);
                $map = addslashes($_POST['map']);

                $cep = addslashes($_POST['cep']);
                $bairro = addslashes($_POST['bairro']);

                $localizacao = addslashes($_POST['local']);
                $estado = addslashes($_POST['estado']);

                $discount = addslashes($_POST['discount']);

                // $images = (!empty($_FILES['images']))?$_FILES['images']:array();

                $idPost = $a->insertPost($title, $category, $body, $description, $althor_name, $link, $featured, $email, $phone, $map, $localizacao, $estado, $_FILES, $discount, $cep, $bairro);
                if($idPost){
                    header('Location: '.BASE_URL."admin/editPost/".$idPost."/?status=success");
                }
            }

        }else{
            header("Location: ".BASE_URL."admin/login");
        }
        
        $this->loadTemplateAdm('dashboard', $dados);
    }

    // POSTS

    public function insertPost(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();

            $dados['listCategories'] = $a->listCategories();
            
            if(isset($_POST['title']) && !empty($_POST['title'])){
                
                $title = addslashes($_POST['title']);
                $description = '';// addslashes($_POST['description']);
                $category = addslashes($_POST['category']);
                $body = addslashes($_POST['body']);
                $althor_name = '';//addslashes($_POST['althor_name']);
                $link = addslashes($_POST['link']);
                $featured = addslashes($_POST['featured']);
                $email = addslashes($_POST['email']);
                $phone = addslashes($_POST['phone']);
                $map = addslashes($_POST['map']);

                $cep = addslashes($_POST['cep']);
                $bairro = addslashes($_POST['bairro']);
                $rua = addslashes($_POST['rua']);

                $numero = addslashes($_POST['numero']);

                $localizacao = addslashes($_POST['local']);
                $estado = addslashes($_POST['estado']);

                $discount = addslashes($_POST['discount']);

                // $images = (!empty($_FILES['images']))?$_FILES['images']:array();

                $idPost = $a->insertPost($title, $category, $body, $description, $althor_name, $link, $featured, $email, $phone, $map, $localizacao, $estado, $_FILES, $discount, $cep, $bairro, $rua, $numero);
                if($idPost){
                    header('Location: '.BASE_URL."admin/editPost/".$idPost."/?status=success");
                }
            }


            $this->loadTemplateAdm('insertPost', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function listPost(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();

            $dados['listPost'] = $a->listPost();

            $this->loadTemplateAdm('listPost', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function editPost($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();

            if(isset($_POST['title']) && !empty($_POST['title'])){
                $title = addslashes($_POST['title']);
                $description = '';
                $category = addslashes($_POST['category']);
                $body = addslashes($_POST['body']);
                $author = '';
                $link = addslashes($_POST['link']);
                $featured = addslashes($_POST['featured']);
                $email = addslashes($_POST['email']);
                $phone = addslashes($_POST['phone']);
                $map = addslashes($_POST['map']);

                $cep = addslashes($_POST['cep']);
                $bairro = addslashes($_POST['bairro']);
                $rua = addslashes($_POST['rua']);

                $numero = addslashes($_POST['numero']);

                $localizacao = addslashes($_POST['local']);
                $estado = addslashes($_POST['estado']);

                $discount = addslashes($_POST['discount']);

                // $images = (!empty($_FILES))?$_FILES['images']:array();
                
                if($a->editPost($title, $description, $category, $body, $author, $link, $featured, $email, $phone, $map, $localizacao, $estado, $_FILES, $discount, $id, $cep, $bairro, $rua, $numero)){
                    $dados['msg'] = "Post Editado"; 
                }
            }

            $dados['dataPost'] = $a->getPostData($id);
            $dados['listCategories'] = $a->listCategories();

            $this->loadTemplateAdm('editPost', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function deletePost($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();

            if($a->deletePost($id)){
                header('Location: '.BASE_URL.'admin/listPost/?status=success');
            }else{
                header('Location: '.BASE_URL.'admin/listPost/?status=error');
            }
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    // Categorias
    public function insertCategory(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();

            if(isset($_POST['title']) && !empty($_POST['title'])){
                $title = addslashes($_POST['title']);
                $icon = addslashes($_POST['icon']);
                $back_position = addslashes($_POST['back-position']);
                
                if($a->insertNewCat($title, $icon, $_FILES, $back_position)){
                    $dados['msg'] = "Categoria Adicionada!";
                }
            }

            $this->loadTemplateAdm('insertCategory', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function listCategories(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();

            $dados['listcategories'] = $a->listCategories();

            $this->loadTemplateAdm('listCategories', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function editCategory($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();

            if(isset($_POST['title']) && !empty($_POST['title'])){
                $title = addslashes($_POST['title']);
                $icon = addslashes($_POST['icon']);
                $back_position = addslashes($_POST['back-position']);
                
                if($a->editCategory($title, $icon, $_FILES, $id, $back_position)){
                    $dados['msg'] = "Categoria Adicionada!";
                }
            }

            $dados['dataCategory'] = $a->getDadosFromCategory($id);

            $this->loadTemplateAdm('editCategory', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function deleteCategory($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();

            if($a->deleteCategory($id)){
                header('Location: '.BASE_URL.'admin/listCategories/?status=success');
            }else{
                header('Location: '.BASE_URL.'admin/listCategories/?status=error');
            }
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function delImages($url, $id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();

            if($a->deleteImages($url)){
                header('Location: '.BASE_URL.'admin/editPost/'.$id);
            }else{
                header('Location: '.BASE_URL.'admin/listCategories/?status=error');
            }
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    // Leads

    public function listLeads(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $l = new Leads();
            
            $dados['listLeads'] = $l->getListLeads();

            $this->loadTemplateAdm('listLeads', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function contactLead($id, $page){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $a = new Admin();
            $l = new Leads();
            
            $l->updateStatus($id, 1);

            header("Location: ".BASE_URL."admin/".$page);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function listLeadsListen(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $l = new Leads();
            
            $dados['listLeads'] = $l->getListLeadsListen(1);

            $this->loadTemplateAdm('listLeadsListen', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function listNewsLetterLeads(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $l = new Leads();
            
            $dados['listLeads'] = $l->getListNewsLetter();

            $this->loadTemplateAdm('listNewsLetterLeads', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function listNewsLetterLeadsListen(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $l = new Leads();
            
            $dados['listLeads'] = $l->getListLeadsListen(2);

            $this->loadTemplateAdm('listLeadsNewsLetterListen', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function contacts(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $c = new Contacts();
            
            $dados['listContacts'] = $c->getNewContacts();

            $this->loadTemplateAdm('contacts', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function contactView($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $c = new Contacts();
            
            $dados['contactData'] = $c->getDataFromContact($id);

            $this->loadTemplateAdm('contactsView', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function readContact($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $a = new Admin();
            $c = new Contacts();

            if($c->readContact($id)){
                $dados['msg'] = "Marcado como lido";
            }
            
            header("Location: ".BASE_URL."admin/contactView/".$id);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function contactsRead(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $c = new Contacts();

            $dados['listReadContacts'] = $c->getListReadContacts();

            $this->loadTemplateAdm('contactsRead', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function comments(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $c = new Comments();

            $dados['commentList'] = $c->getListOfComments();

            $this->loadTemplateAdm('comments', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function editComment($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $c = new Comments();

            $dados['commentData'] = $c->getCommentsFromPostId($id);

            $this->loadTemplateAdm('editComment', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    // ----------------------------------------------------------------------------------------------------------------------------
    // BSB MEDICAL

    public function addClient(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $c = new Clientes();

            if(isset($_POST['nome']) && !empty($_POST['nome'])){
                $nome = addslashes($_POST['nome']);
                $cpf = addslashes($_POST['cpf']);
                $rg = addslashes($_POST['rg']);
                $nome_mae = addslashes($_POST['nome_mae']);
                $cep = addslashes($_POST['cep']);
                $rua = addslashes($_POST['rua']);
                $numero = addslashes($_POST['numero']);
                $complemento = addslashes($_POST['complemento']);
                $bairro = addslashes($_POST['bairro']);
                $cidade = addslashes($_POST['cidade']);
                $estado = addslashes($_POST['estado']);
                $telefone = addslashes($_POST['telefone']);
                $email = addslashes($_POST['email']);
                $senha = $_POST['senha'];

                if($c->add($nome, $cpf, $rg, $nome_mae, $cep, $rua, $numero, $bairro, $complemento, $cidade, $estado, $telefone, $email, $senha)){
                    $dados['info'] = array(
                        'type'=>'success',
                        'msg'=>'Usuario Cadastrado com sucesso'
                    );
                }else{
                    $dados['info'] = array(
                        'type'=>'error',
                        'msg'=>'Alguns dados deste usuario já foi cadastrado. Favor revisa-los (Email ou CPF)'
                    );
                }
            }

            $this->loadTemplateAdm('addCliente', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function clients(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $c = new Clientes();

            $dados['clientList'] = $c->getClientList();

            $this->loadTemplateAdm('clientsList', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function editCliente($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $c = new Clientes();

            if(isset($_POST['nome']) && !empty($_POST['nome'])){
                $nome = addslashes($_POST['nome']);
                $cpf = addslashes($_POST['cpf']);
                $rg = addslashes($_POST['rg']);
                $nome_mae = addslashes($_POST['nome_mae']);
                $cep = addslashes($_POST['cep']);
                $rua = addslashes($_POST['rua']);
                $numero = addslashes($_POST['numero']);
                $complemento = addslashes($_POST['complemento']);
                $bairro = addslashes($_POST['bairro']);
                $cidade = addslashes($_POST['cidade']);
                $estado = addslashes($_POST['estado']);
                $telefone = addslashes($_POST['telefone']);
                $email = addslashes($_POST['email']);

                if($c->edit($nome, $cpf, $rg, $nome_mae, $cep, $rua, $numero, $bairro, $complemento, $cidade, $estado, $telefone, $email, '', $id)){
                    $dados['info'] = array(
                        'type'=>'success',
                        'msg'=>'Cliente Editado'
                    );
                }else{
                    $dados['info'] = array(
                        'type'=>'error',
                        'msg'=>'Alguns dados deste usuario já foi cadastrado. Favor revisa-los (Email ou CPF)'
                    );
                }
            }

            $dados['clientData'] = $c->getClientData($id);

            $this->loadTemplateAdm('editCliente', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function deleteCliente($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $c = new Clientes();

            $c->delete($id);
            header('location: '.BASE_URL.'admin/clients?s=success');
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function updateStatusCliente($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $c = new Clientes();

            $c->updateStatus($id);
            header('location: '.BASE_URL.'admin/clients?s=success');
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function addClinica(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $c = new Clinicas();

            if(isset($_POST['raz_soc']) && !empty($_POST['raz_soc'])){
                $raz_soc = addslashes($_POST['raz_soc']);
                $nome_fant = addslashes($_POST['nome_fantasia']);
                $cnpj = addslashes($_POST['cnpj']);
                $nome_resp = addslashes($_POST['nome_resp']);
                $cpf_resp = addslashes($_POST['cpf_resp']);
                $cep = addslashes($_POST['cep']);
                $rua = addslashes($_POST['rua']);
                $numero = addslashes($_POST['numero']);
                $bairro = addslashes($_POST['bairro']);
                $complemento = '';
                $cidade = addslashes($_POST['cidade']);
                $estado = addslashes($_POST['estado']);
                $latitude = addslashes($_POST['latitude']);
                $longitude = addslashes($_POST['longitude']);
                $telefone = addslashes($_POST['telefone']);
                $email = addslashes($_POST['email']);
                $senha = $_POST['senha'];

                if($c->add($raz_soc, $nome_fant, $cnpj, $nome_resp, $cpf_resp, $cep, $rua, $numero, $bairro, $complemento, $cidade, $estado, $latitude, $longitude, $telefone, $email, $senha)){
                    $dados['info'] = array(
                        'type'=>'success',
                        'msg'=>'Clinica Cadastrada'
                    );
                }else{
                    $dados['info'] = array(
                        'type'=>'error',
                        'msg'=>'Alguns dados desta clinica já foi cadastrado. Favor revisa-los (Email ou CNPJ)'
                    );
                }
            }

            $this->loadTemplateAdm('addClinica', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function clinicas(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $c = new Clinicas();

            $dados['clinicasList'] = $c->getClinicasList();

            $this->loadTemplateAdm('clinicasList', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function editClinica($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $c = new Clinicas(); 

            if(isset($_POST['raz_soc']) && !empty($_POST['raz_soc'])){
                $raz_soc = addslashes($_POST['raz_soc']);
                $nome_fant = addslashes($_POST['nome_fantasia']);
                $cnpj = addslashes($_POST['cnpj']);
                $nome_resp = addslashes($_POST['nome_resp']);
                $cpf_resp = addslashes($_POST['cpf_resp']);
                $cep = addslashes($_POST['cep']);
                $rua = addslashes($_POST['rua']);
                $numero = addslashes($_POST['numero']);
                $bairro = addslashes($_POST['bairro']);
                $cidade = addslashes($_POST['cidade']);
                $estado = addslashes($_POST['estado']);
                $latitude = addslashes($_POST['latitude']);
                $longitude = addslashes($_POST['longitude']);
                $telefone = addslashes($_POST['telefone']);
                $email = addslashes($_POST['email']);

                if($c->edit($raz_soc, $nome_fant, $cnpj, $nome_resp, $cpf_resp, $cep, $rua, $numero, $bairro, $cidade, $estado, $latitude, $longitude, $telefone, $email, $id)){
                    $dados['info'] = array(
                        'type'=>'success',
                        'msg'=>'Clinica Editada'
                    );
                }else{
                    $dados['info'] = array(
                        'type'=>'error',
                        'msg'=>'Este CNPJ já está em uso'
                    );
                }
            }

            $dados['dataClinica'] = $c->getClinicaDate($id);

            $this->loadTemplateAdm('editClinica', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function deleteClinica($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $c = new Clinicas();

            $c->delete($id);
            header('location: '.BASE_URL.'admin/clinicas?s=success');
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function updateStatusClinica($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $c = new Clinicas();

            $c->updateStatus($id);
            header('location: '.BASE_URL.'admin/clinicas?s=success');
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function addConsultaClinica($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $c = new Clinicas();

            if(isset($_POST['proc']) && !empty($_POST['proc'])){
                $proc = addslashes($_POST['proc']);
                $val_coust = addslashes($_POST['val_coust']);
                $val_sell = addslashes($_POST['val_sell']);
                $val_direct = addslashes($_POST['val_direct']);

                if($c->addConsulta($proc, $val_coust, $val_sell, $val_direct, $id)){

                    $dados['info'] = array(
                        'type'=>'success',
                        'msg'=>'Consulta Adicionada'
                    );
                }else{
                    $dados['info'] = array(
                        'type'=>'error',
                        'msg'=>'Não consegui adicionar a consulta'
                    );
                }
            }

            $dados['dataClinica'] = $c->getClinicaDate($id);
            $dados['serviceList'] = $c->getConsultaList($id);

            $this->loadTemplateAdm('addConsultaClinica', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function editConsultaClinica($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $a = new Admin();
            $c = new Clinicas(); 

            if(isset($_POST['proc']) && !empty($_POST['proc'])){
                $proc = addslashes($_POST['proc']);
                $val_coust = addslashes($_POST['val_coust']);
                $val_sell = addslashes($_POST['val_sell']);
                $val_direct = addslashes($_POST['val_direct']);

                if($c->editConsulta($proc, $val_coust, $val_sell, $val_direct, $id)){
                    $dados['info'] = array(
                        'type'=>'success',
                        'msg'=>'Consulta Editada'
                    );
                }else{
                    $dados['info'] = array(
                        'type'=>'error',
                        'msg'=>'Este CNPJ já está em uso'
                    );
                }
            }

            $dados['dataConsulta'] = $c->getConsultaData($id);

            $this->loadTemplateAdm('editConsultaClinica', $dados);
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function updateStatusConsultaClinica($id){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $c = new Clinicas();

            $id_clinica = $c->updateStatusConsulta($id);
            header('location: '.BASE_URL.'admin/addConsultaClinica/'.$id_clinica.'?s=success');
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function newsAppointments(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $c = new Clinicas();
            $consultas = new Consultas();

            $dados['newAppointments'] = $consultas->getNewAppointments();

            $this->loadTemplateAdm('newsAppointments', $dados);
            
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function appointments(){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $c = new Clinicas();
            $consultas = new Consultas();

            $dados['appointments'] = $consultas->getAllAppointments();

            $this->loadTemplateAdm('allAppointments', $dados);
            
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }

    public function makeAppointment($id_consulta){
        if(isset($_SESSION['login_adm_bsb']) && !empty($_SESSION['login_adm_bsb'])){
            $dados = array();

            $c = new Clinicas();
            $clientes = new Clientes();
            $consultas = new Consultas();

            $e = new Email();

            $dados_consulta = $consultas->getAppointmentMaked($id_consulta);
            $dados_clinica = $c->getClinicaDate($dados_consulta['id_clinica']);
            $dados_cliente = $clientes->getClientData($dados_consulta['id_cliente']);

            if(isset($_POST['data']) && !empty($_POST['data'])){
                $data = addslashes($_POST['data']);
                $hora = addslashes($_POST['hora']);
                $minutos = addslashes($_POST['minutos']);

                // echo "<pre>";
                // var_dump($_POST); echo "<br>";

                if($consultas->makeAppointment($data, $hora, $minutos, $id_consulta)){
                    $dados['msg'] = array(
                        'type'=>'success',
                        'message'=>'Consulta agendada!'
                    );

                    if($e->send($data, $hora, $minutos, $dados_consulta, $dados_cliente, $dados_clinica)){
                        $dados['email'] = true;
                    }
                }
            }

            $dados['clinicas'] = $c->getClinicaDate($dados_consulta['id_clinica']);
            $dados['clientes'] = $clientes->getClientData($dados_consulta['id_cliente']);
            $dados['consultas'] = $dados_consulta;
            

            $this->loadTemplateAdm('makeNewAppointment', $dados);
            
        }else{
            header("Location: ".BASE_URL."admin/login");
        }
    }
}