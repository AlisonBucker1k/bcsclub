<div class="page-header">
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


