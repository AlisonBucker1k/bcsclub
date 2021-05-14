<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/blog/css/jquery-te-1.4.0.css">
<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/blog/css/style.css">

<form method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-8">
            <div class="block-card mb-4">
                <div class="block-card-header">
                    <h2 class="widget-title">Adicionar novo estabelecimento</h2>
                    <div class="stroke-shape"></div>
                </div><!-- end block-card-header -->
                    <div class="block-card-body">
                        
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Nome do Comércio</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <input class="form-control" type="text" name="title" placeholder="Nome do Comércio">
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Desconto%</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <input class="form-control" type="text" name="discount" placeholder="Porcentagem de desconto para clientes do bcs">
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Comercio em destaque?</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <select name="featured" class="form-control" id="">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Detalhes do Comércio</label>
                                    <div class="form-group">
                                        <textarea class="message-control form-control user-text-editor" name="body" placeholder="Insira os detalhes sobre o comércio"></textarea>
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Site do Comércio</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <input class="form-control" type="text" name="link" placeholder="Porcentagem de desconto para clientes do bcs">
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Email do Comércio</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <input class="form-control" type="text" name="email" placeholder="Porcentagem de desconto para clientes do bcs">
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Telefone</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <input class="form-control" type="text" name="phone" placeholder="Porcentagem de desconto para clientes do bcs">
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Cidade do Comércio</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <input class="form-control" type="text" name="local" placeholder="Cidade">
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Estado do Comércio</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <select id="estado" name="estado" class="form-control w-100">
                                            <option value="Acre">Acre</option>
                                            <option value="Alagoas">Alagoas</option>
                                            <option value="Amapá">Amapá</option>
                                            <option value="Amazonas">Amazonas</option>
                                            <option value="Bahia">Bahia</option>
                                            <option value="Ceará">Ceará</option>
                                            <option value="Distrito Federaç">Distrito Federal</option>
                                            <option value="Espírito Santo" selected="">Espírito Santo</option>
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
                                        </select>
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Google Maps</label>
                                    <div class="form-group">
                                        <!-- <span class="la la-briefcase form-icon"></span> -->
                                        <input class="form-control" type="text" name="map" placeholder="Link do google Maps">
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
                                    <option value="<?php echo $item['id']?>"><?php echo $item['title']?></option>
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
                        <span class="file-upload-text"><i class="la la-upload mr-2"></i>Upload image</span>
                    </div>
                </div><!-- end block-card-body -->
            </div><!-- end block-card -->
            
        </div><!-- end col-lg-4 -->
    </div><!-- end row -->

</form>

<script src="<?php echo BASE_URL;?>assets/blog/js/jquery-2.2.4.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/jquery-ui.js"></script>
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