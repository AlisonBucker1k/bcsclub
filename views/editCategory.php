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
                        <label class="form-label">Icone da Categoria</label>
                        <div class="form-group">
                            <input type="text" class="form-control w-100" name="icon" value="<?php echo (!empty($dataCategory['la_icon']))?$dataCategory['la_icon']:'';?>">
                            <label class="custom-file-label"> Icone</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Icone da Categoria</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="images[]">
                            <label class="custom-file-label"> Icone</label>
                        </div>
                    </div>
                    
                    <!-- <div class="form-group">
                        <label class="form-label">Upload do Icone da Categoria</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="example-file-input-custom">
                            <label class="custom-file-label">Upload Icone</label>
                        </div>
                    </div> -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Inserir</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>