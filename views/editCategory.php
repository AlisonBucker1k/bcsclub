<div class="page-header">
    <h4 class="page-title">Editar Categoria</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Categoria</li>
    </ol>
</div>

<div class="row row-cards">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Editar Categoria</div>
            </div>
            <div class="card-body">
                <?php if(isset($msg)):?>
                    <div class="alert alert-success"><?php echo $msg;?></div>
                <?php endif;?>

                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label class="form-label">Titulo da Categoria</label>
                        <input type="text" class="form-control w-100" placeholder="Enter Title here" name="title" autofocus value="<?php echo (!empty($dataCategory['title']))?$dataCategory['title']:'';?>">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Icone da Categoria <a href="https://icons8.com/line-awesome" target="_blank">Lista de icones</a></label>
                        <div class="form-group">
                            <input type="text" class="form-control w-100" name="icon" value="<?php echo (!empty($dataCategory['laicon']))?$dataCategory['laicon']:'';?>">
                            <label class="custom-file-label"> Icone</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Imagem da Categoria</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="images[]">
                            <label class="custom-file-label"> Imagem de fundo</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Posição da imagem</label>
                        <select name="back-position" class="form-control">
                            <option <?php echo ($dataCategory['back_pos'] == "top")?'selected':'';?> value="top">Parte de cima</option>
                            <option <?php echo ($dataCategory['back_pos'] == "center")?'selected':'';?> value="center">Meio</option>
                            <option <?php echo ($dataCategory['back_pos'] == "bottom")?'selected':'';?> value="bottom">Parte de baixo</option>
                        </select>
                    </div>

                    <!-- <div class="form-group">
                        <label class="form-label">Upload do Icone da Categoria</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="example-file-input-custom">
                            <label class="custom-file-label">Upload Icone</label>
                        </div>
                    </div> -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>