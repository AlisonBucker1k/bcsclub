<div class="page-header">
    <h4 class="page-title">Editar Comentário</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Comentário</li>
    </ol>
</div>

<div class="row row-cards">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Editar Comentário</div>
            </div>
            <div class="card-body">
                <?php if(isset($msg)):?>
                    <div class="alert alert-success"><?php echo $msg;?></div>
                <?php endif;?>

                <form method="POST">
                    <?php if(isset($commentData['name'])):?>
                        <div class="form-group ">
                            <label class="form-label">Nome</label>
                            <input type="text" class="form-control w-100" placeholder="Enter Title here" name="name" autofocus value="<?php echo $commentData['name'];?>">
                        </div>
                    <?php else:?>
                        <div class="form-group ">
                            <label class="form-label">Nome</label>
                            <input type="text" class="form-control w-100" placeholder="Enter Title here" name="name" autofocus>
                        </div>
                    <?php endif;?>

                    <?php if(isset($commentData['email'])):?>
                        <div class="form-group ">
                            <label class="form-label">Titulo da Categoria</label>
                            <input type="email" class="form-control w-100" placeholder="Enter Title here" name="email" autofocus value="<?php echo $commentData['email'];?>">
                        </div>
                    <?php else:?>
                        <div class="form-group ">
                            <label class="form-label">Titulo da Categoria</label>
                            <input type="email" class="form-control w-100" placeholder="Enter Title here" name="email" autofocus>
                        </div>
                    <?php endif;?>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Editar</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>