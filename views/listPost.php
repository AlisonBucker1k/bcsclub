<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<div class="page-header">
    <h4 class="page-title">Ads</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Settings</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ads</li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active " id="tab1">
                        <?php if(isset($_GET['status']) && $_GET['status'] == 'success'):?>
                            <div class="alert alert-success">Post Excluido</div>
                        <?php elseif(isset($_GET['status']) && $_GET['status'] == 'error'):?>
                            <div class="alert alert-danger">Ocorreu um erro inesperado</div>
                        <?php endif;?>
                        
                        <div class="table-responsive">

                            <table class="table card-table table-bordered table-hover table-vcenter text-nowrap display" id="listClients">
                                <thead>
                                    <tr>
                                        <th class="w-1">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                <span class="custom-control-label"></span>
                                            </label>
                                        </th>
                                        <th class="w-1">#</th>
                                        <th class="">Titulo</th>
                                        <th class="">Categoria</th>
                                        <th>Autor</th>
                                        <th>Data</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($listPost as $item):?>
                                        <tr>
                                            <th>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                    <span class="custom-control-label"></span>
                                                </label>
                                            </th>
                                            <td><a href="#" class="btn-link">#<?php echo $item['id'];?></a>
                                            </td>
                                            <td><?php echo $item['title'];?></td>
                                            <td><?php echo $item['id_category'];?></td>
                                            <td><?php echo $item['author'];?></td>
                                            <td><?php echo $item['date_added'];?></td>
                                            <td>
                                                <a href="<?php echo BASE_URL."admin/editPost/".$item['id'];?>" class="btn btn-info">editar</a>
                                                <a href="<?php echo BASE_URL."admin/deletePost/".$item['id'];?>" class="btn btn-danger">excluir</a>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    
    $('#listClients').DataTable();
</script>