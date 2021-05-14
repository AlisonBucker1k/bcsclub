<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<div class="page-header">
    <h4 class="page-title">Lista de Comentarios</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Lista de Comentarios</li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div>
                <div class="user-tabs mb-4">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs">
                        <li class=""><a href="#tab1" class="active" data-toggle="tab">All (452)</a></li>
                        <li><a href="#tab2" data-toggle="tab">Mine (30)</a></li>
                        <li><a href="#tab3" data-toggle="tab">Published (20)</a></li>
                        <li><a href="#tab4" data-toggle="tab">Pending (20)</a></li>
                        <li><a href="#tab5" data-toggle="tab">Trash (20)</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active " id="tab1">
                        
                        <div class="table-responsive border-top">

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
                                        <th class="">Nome</th>
                                        <th class="">Post</th>
                                        <th class="">Comentario</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($commentList as $item):?>
                                        <?php 
                                            $a = new Admin();
                                            $dataPost = $a->getPostData($item['id_post']);    
                                        ?>
                                        <tr>
                                            <th>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                    <span class="custom-control-label"></span>
                                                </label>
                                            </th>
                                            <td><a href="#" class="btn-link">#<?php echo $item['id'];?></a>
                                            </td>
                                            <td><?php echo $item['name'];?></td>
                                            <td max-width="200px"><a href="<?php echo BASE_URL."showcase/index/".$item['id_post'];?>" target="_blank"><?php echo $dataPost['title'];?></a></td>
                                            <td><?php echo $item['comment'];?></td>
                                            <td>
                                                <a href="<?php echo BASE_URL."admin/editComment/".$item['id'];?>" class="btn btn-info">Editar</a>
                                                <a href="<?php echo BASE_URL."admin/deleteComment/".$item['id'];?>" class="btn btn-danger">excluir</a>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="mail-option mb-0 mt-4">
                            <div class="chk-all">
                                <div class="btn-group">
                                    <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                        Bulk Actions
                                        <i class="fa fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Bulk Action</a></li>
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#">Move to Trash</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group hidden-phone">
                                <a href="#" class="btn" aria-expanded="false">
                                    Check For Spam
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="pagination mb-5">
            <li class="page-item page-prev disabled">
                <a class="page-link" href="#" tabindex="-1">Prev</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item page-next">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </div>
</div>

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    
    $('#listClients').DataTable();
</script>