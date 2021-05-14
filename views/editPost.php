<div class="page-header">
    <h4 class="page-title">Editar Post</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Settings</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Post</li>
    </ol>
</div>
<div class="row row-cards">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Editar Post</div>
            </div>
            <div class="card-body">

                <?php if(isset($msg)):?>
                    <div class="alert alert-success"><?php echo $msg;?></div>
                <?php endif;?>
                
                <?php if(isset($_GET['status']) && $_GET['status'] == "success"):?>
                    <div class="alert alert-success">Anúncio Criado, agora você pode edita-lo</div>
                <?php endif;?>

                <form method="POST" enctype="multipart/form-data">
                    <?php if(isset($dataPost['title'])):?>
                        <div class="form-group ">
                            <label class="form-label">Titulo do Post</label>
                            <input type="text" class="form-control w-100"  placeholder="Enter Title here" name="title" value="<?php echo $dataPost['title'];?>">
                        </div>
                    <?php else:?>
                        <div class="form-group ">
                            <label class="form-label">Titulo do Post</label>
                            <input type="text" class="form-control w-100"  placeholder="Enter Title here" name="title">
                        </div>
                    <?php endif;?>

                    <?php if(isset($dataPost['description'])):?>
                        <div class="form-group ">
                            <label class="form-label">Descrição</label>
                            <input type="text" class="form-control w-100"  placeholder="Enter Title here" name="description" value="<?php echo $dataPost['description'];?>">
                        </div>
                    <?php else:?>
                        <div class="form-group ">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control w-100"  placeholder="Enter Title here" name="description">
                        </div>
                    <?php endif;?>

                    <?php if(isset($dataPost['discount'])):?>
                        <div class="form-group ">
                            <label class="form-label">Desconto</label>
                            <input type="text" class="form-control w-100"  placeholder="Desconto" name="discount" value="<?php echo $dataPost['discount'];?>">
                        </div>
                    <?php else:?>
                        <div class="form-group ">
                            <label class="form-label">Desconto</label>
                            <input type="text" class="form-control w-100"  placeholder="Desconto" name="discount">
                        </div>
                    <?php endif;?>
                    
                    <div class="form-group">
                        <label class="form-label">Categoria do Post</label>
                        <select class="form-control" data-placeholder="Choose Browser" name="category">
                            <?php foreach($listCategories as $item):?>
                                <option value="<?php echo $item['id'];?>" <?php echo ($dataPost['id_category'] == $item['id'])?'selected':'';?>><?php echo $item['title'];?></option>
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
                    

                    <?php if(isset($dataPost['body'])):?>
                        <div class="form-group ">
                            <label class="form-label">Corpo do Post</label>
                            <textarea name="body" id="editor" class="form-control w-100 editor" cols="30" rows="10"><?php echo $dataPost['body'];?></textarea>
                        </div>
                    <?php else:?>
                        <div class="form-group ">
                            <label class="form-label">Corpo do Post</label>
                            <textarea name="body" id="editor" class="form-control w-100 editor" cols="30" rows="10"></textarea>
                        </div>
                    <?php endif;?>
                    
                    <?php if(isset($dataPost['author'])):?>
                        <div class="form-group ">
                            <label class="form-label">Nome do Autor</label>
                            <input type="text" class="form-control w-100"  placeholder="Enter Title here" name="author_name" value="<?php echo $dataPost['author'];?>">
                        </div>
                    <?php else:?>
                        <div class="form-group ">
                            <label class="form-label">Nome do Autor</label>
                            <input type="text" class="form-control w-100"  placeholder="Enter Title here" name="author_name">
                        </div>
                    <?php endif;?>

                    <?php if(isset($dataPost['link'])):?>
                        <div class="form-group ">
                            <label class="form-label">Link</label>
                            <input type="text" class="form-control w-100"  placeholder="Enter Title here" name="link" value="<?php echo $dataPost['link'];?>">
                        </div>
                    <?php else:?>
                        <div class="form-group ">
                            <label class="form-label">Link</label>
                            <input type="text" class="form-control w-100"  placeholder="Enter Title here" name="link">
                        </div>
                    <?php endif;?>

                    <?php if(isset($dataPost['email'])):?>
                        <div class="form-group ">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control w-100"  placeholder="Email do anunciante" name="email" <?php echo $dataPost['email'];?>>
                    </div>
                    <?php else:?>
                        <div class="form-group ">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control w-100"  placeholder="Email do anunciante" name="email">
                        </div>
                    <?php endif;?>

                    
                    <?php if(isset($dataPost['telefone'])):?>
                        <div class="form-group ">
                            <label class="form-label">Telefone</label>
                            <input type="text" class="form-control w-100"  placeholder="Telefone do anunciante" name="phone" value="<?php echo $dataPost['telefone'];?>">
                        </div>
                    <?php else:?>
                        <div class="form-group ">
                            <label class="form-label">telefone</label>
                            <input type="text" class="form-control w-100"  placeholder="Email do anunciante" name="email">
                        </div>
                    <?php endif;?>

                    <div class="form-group ">
                        <label class="form-label">Localização</label>
                        <?php echo (isset($dataPost['localizacao']))?'<input type="text" class="form-control w-100"  placeholder="Telefone do anunciante" name="local" value="'.$dataPost['localizacao'].'">':'';?>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Estado</label>
                        <select id="estado" name="estado" class="form-control w-100">
                            <option value="Acre" <?php echo ($dataPost['estado'] == 'Acre')?'selected':'';?>>Acre</option>
                            <option value="Alagoas" <?php echo ($dataPost['estado'] == 'Alagoas')?'selected':'';?>>Alagoas</option>
                            <option value="Amapá" <?php echo ($dataPost['estado'] == 'Amapá')?'selected':'';?>>Amapá</option>
                            <option value="Amazonas" <?php echo ($dataPost['estado'] == 'Amazonas')?'selected':'';?>>Amazonas</option>
                            <option value="Bahia" <?php echo ($dataPost['estado'] == 'Bahia')?'selected':'';?>>Bahia</option>
                            <option value="Ceará" <?php echo ($dataPost['estado'] == 'Ceará')?'selected':'';?>>Ceará</option>
                            <option value="Distrito Federal" <?php echo ($dataPost['estado'] == 'Distrito Federal')?'selected':'';?>>Distrito Federal</option>
                            <option value="Espírito Santo"  <?php echo ($dataPost['estado'] == 'Espírito Santo')?'selected':'';?>>Espírito Santo</option>
                            <option value="Goias" <?php echo ($dataPost['estado'] == 'Goias')?'selected':'';?>>Goiás</option>
                            <option value="Maranhão" <?php echo ($dataPost['estado'] == 'Maranhão')?'selected':'';?>>Maranhão</option>
                            <option value="Mato Grosso" <?php echo ($dataPost['estado'] == 'Mato Grosso')?'selected':'';?>>Mato Grosso</option>
                            <option value="Mato grosso do Sul" <?php echo ($dataPost['estado'] == 'Mato grosso do Sul')?'selected':'';?>>Mato Grosso do Sul</option>
                            <option value="Minas Gerais" <?php echo ($dataPost['estado'] == 'Minas Gerais')?'selected':'';?>>Minas Gerais</option>
                            <option value="Pará" <?php echo ($dataPost['estado'] == 'Pará')?'selected':'';?>>Pará</option>
                            <option value="Paraíba" <?php echo ($dataPost['estado'] == 'Paraíba')?'selected':'';?>>Paraíba</option>
                            <option value="Paraná" <?php echo ($dataPost['estado'] == 'Paraná')?'selected':'';?>>Paraná</option>
                            <option value="Pernambuco" <?php echo ($dataPost['estado'] == 'Pernambuco')?'selected':'';?>>Pernambuco</option>
                            <option value="Piauí" <?php echo ($dataPost['estado'] == 'Piauí')?'selected':'';?>>Piauí</option>
                            <option value="Rio de Janeiro" <?php echo ($dataPost['estado'] == 'Rio de Janeiro')?'selected':'';?>>Rio de Janeiro</option>
                            <option value="Rio Grande do Norte" <?php echo ($dataPost['estado'] == 'Rio Grande do Norte')?'selected':'';?>>Rio Grande do Norte</option>
                            <option value="Rio Grande do Sul" <?php echo ($dataPost['estado'] == 'Rio Grande do Sul')?'selected':'';?>>Rio Grande do Sul</option>
                            <option value="Rondônia" <?php echo ($dataPost['estado'] == 'Rondônia')?'selected':'';?>>Rondônia</option>
                            <option value="Roraima" <?php echo ($dataPost['estado'] == 'Roraima')?'selected':'';?>>Roraima</option>
                            <option value="Santa Catarina" <?php echo ($dataPost['estado'] == 'Santa Catarina')?'selected':'';?>>Santa Catarina</option>
                            <option value="São Paulo" <?php echo ($dataPost['estado'] == 'São Paulo')?'selected':'';?>>São Paulo</option>
                            <option value="Sergipe" <?php echo ($dataPost['estado'] == 'Sergipe')?'selected':'';?>>Sergipe</option>
                            <option value="Tocantins" <?php echo ($dataPost['estado'] == 'Tocantins')?'selected':'';?>>Tocantins</option>
                            <option value="Ex" <?php echo ($dataPost['estado'] == 'Ex')?'selected':'';?>>Estrangeiro</option>
                        </select>
                    </div>

                    <?php if(isset($dataPost['map'])):?>
                        <div class="form-group ">
                            <label class="form-label">Mapa</label>
                            <input type="text" class="form-control w-100"  placeholder="Insira o link do mapa" name="map" value="<?php echo $dataPost['map'];?>">
                        </div>
                    <?php else:?>
                        <div class="form-group ">
                            <label class="form-label">Mapa</label>
                            <input type="text" class="form-control w-100"  placeholder="Email do anunciante" name="map">
                        </div>
                    <?php endif;?>

                    <div class="form-group">
                        <label class="form-label">Anuncio em destaque?</label>
                        <select class="form-control" data-placeholder="Choose Browser" name="featured">
                            <option value="0" <?php echo ($dataPost['featured'] == 0)?'selected':'';?>>Não</option>
                            <option value="1" <?php echo ($dataPost['featured'] == 1)?'selected':'';?>>Sim</option>
                        </select>
                    </div>

                    <div class="card-title">Imagens do Anuncio</div>
                    
                    <div class="image_area">
                        <?php foreach($dataPost['images'] as $id_image => $url):?>
                           
                            <div class="p_image" style="width: 100px;">
                                <img src="<?php echo BASE_URL."media/posts/".$url;?>" alt="">
                                <a href="<?php  echo BASE_URL."admin/delImages/".$url;?>">[ deletar ]</a>
                                <input type="hidden" name="c_images[]" value="<?php echo $url;?>">
                            </div>
                        <?php endforeach;?>
                    </div>

                    
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Publicar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?php echo BASE_URL;?>assets/blog/js/vendors/jquery-3.2.1.min.js"></script>
<!--Select2 js -->
<script src="<?php echo BASE_URL;?>assets/blog/plugins/select2/select2.full.min.js"></script>

<!-- WYSIWYG Editor js -->
<script src="<?php echo BASE_URL;?>assets/blog/plugins/wysiwyag/jquery.richtext.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/formeditor.js"></script>

<!-- Select2 Plugin -->
<link href="<?php echo BASE_URL;?>assets/blog/plugins/select2/select2.min.css" rel="stylesheet" />

<!-- WYSIWYG Editor css -->
<link href="<?php echo BASE_URL;?>assets/blog/plugins/wysiwyag/richtext.css" rel="stylesheet" />

<script>
    $('.p_image a').on('click', function(){
        $(this).parent().remove();
    });
</script>

