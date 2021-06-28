<div class="page-header">
    <h4 class="page-title">Inserir Categoria</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Inserir Categoria</li>
    </ol>
</div>

<div class="row row-cards">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Inserir Categoria</div>
            </div>
            <div class="card-body">
                <?php if(isset($msg)):?>
                    <div class="alert alert-success"><?php echo $msg;?></div>
                <?php endif;?>
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label class="form-label">Titulo da Categoria</label>
                        <input type="text" class="form-control w-100" placeholder="Enter Title here" name="title" autofocus>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Icone da Categoria <a href="https://icons8.com/line-awesome" target="_blank">Lista de icones</a></label>
                        <div class="form-group">
                            <input type="text" class="form-control w-100" name="icon">
                            <label class="custom-file-label"> Icone</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Imagem da Categoria </label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="images[]">
                            <label class="custom-file-label"> Imagem de fundo</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Posição da imagem</label>
                        <div class="custom-file">
                            <select name="back-position" class="custom-file-input">
                                <option value="top">Parte de cima</option>
                                <option value="center">Meio</option>
                                <option value="bottom">Parte de baixo</option>
                            </select>
                            <label class="custom-file-label">Posição da Imagem de fundo</label>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Inserir</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>