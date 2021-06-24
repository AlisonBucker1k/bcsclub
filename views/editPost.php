<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/blog/css/jquery-te-1.4.0.css">
<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/blog/css/style.css">
<?php if(isset($msg)):?>
    <div class="alert alert-success"><?php echo $msg;?></div>
<?php endif;?>

<?php if(isset($_GET['status']) && $_GET['status'] == "success"):?>
    <div class="alert alert-success">Anúncio Criado, agora você pode edita-lo</div>
<?php endif;?>

<form method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-8">
            <div class="block-card mb-4">
                <div class="block-card-header">
                    <h2 class="widget-title">Editar estabelecimento</h2>
                    <div class="stroke-shape"></div>
                </div><!-- end block-card-header -->
                    <div class="block-card-body">
                        
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Nome do Comércio</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <input class="form-control" type="text" name="title" placeholder="Nome do Comércio" value="<?php echo (!empty($dataPost['title']))?$dataPost['title']:'';?>">
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Desconto%</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <input class="form-control" type="text" name="discount" placeholder="Porcentagem de desconto para clientes do bcs" value="<?php echo (!empty($dataPost['discount']))?$dataPost['discount']:'';?>">
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Comercio em destaque?</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <select name="featured" class="form-control" id="">
                                            <option value="0" <?php echo ($dataPost['featured'] == 0)?'selected':'';?>>Não</option>
                                            <option value="1" <?php echo ($dataPost['featured'] == 1)?'selected':'';?>>Sim</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Detalhes do Comércio</label>
                                    <div class="form-group">
                                        <textarea class="message-control form-control user-text-editor" name="body" placeholder="Insira os detalhes sobre o comércio">
                                            <?php echo $dataPost['body'];?> 
                                        </textarea>
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Site do Comércio</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <input class="form-control" type="text" name="link" placeholder="Site do comerciante" value="<?php echo (!empty($dataPost['link']))?$dataPost['link']:'';?>">
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Email do Comércio</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <input class="form-control" type="text" name="email" placeholder="Porcentagem de desconto para clientes do bcs" value="<?php echo (!empty($dataPost['email']))?$dataPost['email']:'';?>">
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Telefone</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <input class="form-control" type="text" name="phone" placeholder="Porcentagem de desconto para clientes do bcs" value="<?php echo (!empty($dataPost['telefone']))?$dataPost['telefone']:'';?>">
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">CEP</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <input class="form-control" id="cep" type="text" name="cep" placeholder="99999-999" onblur="pesquisacep(this.value)" value="<?php echo (!empty($dataPost['cep']))?$dataPost['cep']:'';?>">
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Rua</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <input class="form-control" type="text" name="rua" placeholder="Av Geronimo Monteiro" id="rua" value="<?php echo (!empty($dataPost['rua']))?$dataPost['rua']:'';?>">
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Bairro</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <input class="form-control" type="text" name="bairro" placeholder="Jacaraípe" id="bairro" value="<?php echo (!empty($dataPost['bairro']))?$dataPost['bairro']:'';?>">
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Cidade do Comércio</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <input class="form-control" type="text" name="local" placeholder="Cidade" value="<?php echo (!empty($dataPost['localizacao']))?$dataPost['localizacao']:'';?>" id="cidade">
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Estado do Comércio</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <select id="estado" name="estado" class="form-control w-100">
                                            <option value="">Selecione um Estado</option>
                                            <option value="AC" <?php echo ($dataPost['estado'] == 'AC')?'selected':'';?>>Acre</option>
                                            <option value="AL" <?php echo ($dataPost['estado'] == 'AL')?'selected':'';?>>Alagoas</option>
                                            <option value="AP" <?php echo ($dataPost['estado'] == 'AP')?'selected':'';?>>Amapá</option>
                                            <option value="AM" <?php echo ($dataPost['estado'] == 'AM')?'selected':'';?>>Amazonas</option>
                                            <option value="BA" <?php echo ($dataPost['estado'] == 'BA')?'selected':'';?>>Bahia</option>
                                            <option value="CE" <?php echo ($dataPost['estado'] == 'CE')?'selected':'';?>>Ceará</option>
                                            <option value="DF" <?php echo ($dataPost['estado'] == 'DF')?'selected':'';?>>Distrito Federal</option>
                                            <option value="ES" <?php echo ($dataPost['estado'] == 'ES')?'selected':'';?>>Espírito Santo</option>
                                            <option value="GO" <?php echo ($dataPost['estado'] == 'GO')?'selected':'';?>>Goiás</option>
                                            <option value="MA" <?php echo ($dataPost['estado'] == 'MA')?'selected':'';?>>Maranhão</option>
                                            <option value="MT" <?php echo ($dataPost['estado'] == 'MT')?'selected':'';?>>Mato Grosso</option>
                                            <option value="MS" <?php echo ($dataPost['estado'] == 'MS')?'selected':'';?>>Mato Grosso do Sul</option>
                                            <option value="MG" <?php echo ($dataPost['estado'] == 'MG')?'selected':'';?>>Minas Gerais</option>
                                            <option value="PA" <?php echo ($dataPost['estado'] == 'PA')?'selected':'';?>>Pará</option>
                                            <option value="PB" <?php echo ($dataPost['estado'] == 'PB')?'selected':'';?>>Paraíba</option>
                                            <option value="PR" <?php echo ($dataPost['estado'] == 'PR')?'selected':'';?>>Paraná</option>
                                            <option value="PE" <?php echo ($dataPost['estado'] == 'PE')?'selected':'';?>>Pernambuco</option>
                                            <option value="PI" <?php echo ($dataPost['estado'] == 'PI')?'selected':'';?>>Piauí</option>
                                            <option value="RJ" <?php echo ($dataPost['estado'] == 'RJ')?'selected':'';?>>Rio de Janeiro</option>
                                            <option value="RN" <?php echo ($dataPost['estado'] == 'RN')?'selected':'';?>>Rio Grande do Norte</option>
                                            <option value="RS" <?php echo ($dataPost['estado'] == 'RS')?'selected':'';?>>Rio Grande do Sul</option>
                                            <option value="RO" <?php echo ($dataPost['estado'] == 'RO')?'selected':'';?>>Rondônia</option>
                                            <option value="RR" <?php echo ($dataPost['estado'] == 'RR')?'selected':'';?>>Roraima</option>
                                            <option value="SC" <?php echo ($dataPost['estado'] == 'SC')?'selected':'';?>>Santa Catarina</option>
                                            <option value="SP" <?php echo ($dataPost['estado'] == 'SP')?'selected':'';?>>São Paulo</option>
                                            <option value="SE" <?php echo ($dataPost['estado'] == 'SE')?'selected':'';?>>Sergipe</option>
                                            <option value="TO" <?php echo ($dataPost['estado'] == 'TO')?'selected':'';?>>Tocantins</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Google Maps</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <input class="form-control" type="text" name="map" placeholder="Link do google Maps" value="<?php echo ($dataPost['map'])?$dataPost['map']:'';?>">
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->
                        
                    </div><!-- end block-card-body -->
            </div><!-- end block-card -->
            <div class="submit-wrap pt-4">
                <div class="btn-box">
                    <button type="submit" class="theme-btn gradient-btn border-0" >Adicionar Comércio <i class="la la-arrow-right ml-1"></i></button>
                </div><!-- end btn-box -->
            </div><!-- end submit-wrap -->
        </div><!-- end col-lg-8 -->
        <div class="col-lg-4">
            <div class="block-card mb-4">
                <div class="block-card-header">
                    <h2 class="widget-title">Categoria</h2>
                    <div class="stroke-shape"></div>
                </div><!-- end block-card-header -->
                <div class="block-card-body">
                    
                    <div class="input-box">
                        <label class="label-text">Categoria de comércio</label>
                        <div class="form-group">
                            <span class="la la-briefcase form-icon"></span>
                            <select name="category" class="form-control" id="">
                                <option value="">Selecionar Categoria</option>
                                <?php foreach($listCategories as $item):?>
                                    <option value="<?php echo $item['id']?>" <?php echo ($dataPost['id_category'] == $item['id'])?'selected':'';?>><?php echo $item['title']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                    
                </div><!-- end block-card-body -->
            </div><!-- end block-card -->
            
            <div class="block-card">
                <div class="block-card-header">
                    <h2 class="widget-title">Imagens do Estabelecimento</h2>
                    <div class="stroke-shape"></div>
                </div><!-- end block-card-header -->
                <div class="block-card-body">
                    <div class="file-upload-wrap file-upload-wrap-4">
                        <input type="file" name="images[]" class="multi file-upload-input with-preview" multiple >

                        <?php for($q=0;$q<count($dataPost['images']);$q++):?>
                            <div class="MultiFile-list" id="MultiFile1_list">
                                <div class="MultiFile-label">
                                    <a href="<?php  echo BASE_URL."admin/delImages/".$dataPost['images'][$q]['urlf'];?>/<?php echo $dataPost['id'];?>" class="MultiFile-remove">X</a>
                                    <span>
                                        <span class="MultiFile-label" title="Selecionado">
                                            <span class="MultiFile-title">Titulo</span>
                                            <img class="MultiFile-preview" style="max-height:100px; max-width:100px;" src="<?php echo BASE_URL."media/posts/".$dataPost['images'][$q]['urlf'];?>">
                                        </span>
                                    </span>
                                </div>
                            </div>
                        <?php endfor;?>

                        <?php foreach($dataPost['images'] as $id_image => $url):?>

                            
                       <?php endforeach;?>
                        <span class="file-upload-text"><i class="la la-upload mr-2"></i>Upload image</span>
                    </div>
                </div><!-- end block-card-body -->
            </div><!-- end block-card -->
            
        </div><!-- end col-lg-4 -->
    </div><!-- end row -->

</form>



<script src="<?php echo BASE_URL;?>assets/blog/js/jquery-2.2.4.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/popper.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/bootstrap.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/owl.carousel.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/jquery.fancybox.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/animated-headline.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/chosen.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/datedropper.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/waypoints.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/jquery.counterup.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/jquery-te-1.4.0.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/jquery.MultiFile.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/main.js"></script>

<script>
    $('#cep').mask('99999-999');
    $('#telefone').mask('(99) 99999-9999');
</script>

<script>
  function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    // $("#estado").val("").change();
    // document.getElementById('ibge').value=("");
}

function meu_callback(conteudo) {
if (!("erro" in conteudo)) {
    //Atualiza os campos com os valores.
    document.getElementById('rua').value=(conteudo.logradouro);
    document.getElementById('bairro').value=(conteudo.bairro);
    document.getElementById('cidade').value=(conteudo.localidade);
    // document.getElementById('uf').value=(conteudo.uf);
    $("#estado").val(conteudo.uf).change();

    // document.getElementById('ibge').value=(conteudo.ibge);
} //end if.
else {
    //CEP não Encontrado.
    limpa_formulário_cep();
    alert("CEP não encontrado.");
}
}

function pesquisacep(valor) {

//Nova variável "cep" somente com dígitos.
var cep = valor.replace(/\D/g, '');

//Verifica se campo cep possui valor informado.
if (cep != "") {

    //Expressão regular para validar o CEP.
    var validacep = /^[0-9]{8}$/;

    //Valida o formato do CEP.
    if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById('rua').value="...";
        document.getElementById('bairro').value="...";
        document.getElementById('cidade').value="...";
        // document.getElementById('uf').value="";
        // document.getElementById('ibge').value="...";

        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

    } //end if.
    else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
    }
} //end if.
else {
    //cep sem valor, limpa formulário.
    limpa_formulário_cep();
}
};
</script>


<!-- <div class="page-header">
    <h4 class="page-title">Inserir Post</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Settings</a></li>
        <li class="breadcrumb-item active" aria-current="page">New Ad</li>
    </ol>
</div>
<div class="row row-cards">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Inserir Post</div>
            </div>
            <div class="card-body">

                <?php if(isset($msg)):?>
                    <div class="alert alert-success"><?php echo $msg;?></div>
                <?php endif;?>

                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label class="form-label">Titulo do Post</label>
                        <input type="text" class="form-control w-100"  placeholder="Insira o titulo do Anúncio aqui" name="title">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Descrição</label>
                        <input type="text" class="form-control w-100"  placeholder="Coloque a descrição do Anúncio aqui" name="description">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Desconto  %</label>
                        <input type="text" class="form-control w-100"  placeholder="Desconto" name="discount">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Selecionar Categoria</label>
                        <select class="form-control" data-placeholder="Choose Browser" name="category">
                            <?php foreach($listCategories as $item):?>
                                <option value="<?php echo $item['id'];?>"><?php echo $item['title'];?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Upload Imagens do Slider</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="images[]" multiple>
                            <label class="custom-file-label">Upload Imagens</label>
                        </div>
                    </div>
                    
                    <div class="form-group ">
                        <label class="form-label">Corpo do Post</label>
                        <textarea name="body" id="editor" class="form-control w-100 editor" cols="30" rows="10"></textarea>
                    </div>
                    
                    <div class="form-group ">
                        <label class="form-label">Nome do Autor</label>
                        <input type="text" class="form-control w-100"  placeholder="Nome do autor" name="althor_name">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Link</label>
                        <input type="text" class="form-control w-100"  placeholder="Link do anúncio" name="link">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control w-100"  placeholder="Email do anunciante" name="email">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Telefone</label>
                        <input type="text" class="form-control w-100"  placeholder="Telefone do anunciante" name="phone">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Localização</label>
                        <input type="text" class="form-control w-100"  placeholder="Telefone do anunciante" name="local">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Estado</label>
                        <select id="estado" name="estado" class="form-control w-100">
                            <option value="Acre">Acre</option>
                            <option value="Alagoas">Alagoas</option>
                            <option value="Amapá">Amapá</option>
                            <option value="Amazonas">Amazonas</option>
                            <option value="Bahia">Bahia</option>
                            <option value="Ceará">Ceará</option>
                            <option value="Distrito Federaç">Distrito Federal</option>
                            <option value="Espírito Santo" selected>Espírito Santo</option>
                            <option value="Goias">Goiás</option>
                            <option value="Maranhão">Maranhão</option>
                            <option value="Mato Grosso">Mato Grosso</option>
                            <option value="Mato grosso do Sul">Mato Grosso do Sul</option>
                            <option value="Minas Gerais">Minas Gerais</option>
                            <option value="Pará">Pará</option>
                            <option value="Paraíba">Paraíba</option>
                            <option value="Paraná">Paraná</option>
                            <option value="Pernambuco">Pernambuco</option>
                            <option value="Piauí">Piauí</option>
                            <option value="Rio de Janeiro">Rio de Janeiro</option>
                            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                            <option value="Rndônia">Rondônia</option>
                            <option value="Roraima">Roraima</option>
                            <option value="Santa Catarina">Santa Catarina</option>
                            <option value="São Paulo">São Paulo</option>
                            <option value="Sergipe">Sergipe</option>
                            <option value="Tocantins">Tocantins</option>
                            <option value="Ex">Estrangeiro</option>
                        </select>
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Mapa</label>
                        <input type="text" class="form-control w-100"  placeholder="Insira o link do mapa" name="map">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Anuncio em destaque?</label>
                        <select class="form-control" data-placeholder="Choose Browser" name="featured">
                            <option value="0">Não</option>
                            <option value="1">Sim</option>
                        </select>
                    </div>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Publicar</button>
                </div>
            </form>
        </div>
    </div>
</div>

 -->

