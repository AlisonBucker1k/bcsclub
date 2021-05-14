<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<div class="page-header">
    <h4 class="page-title">Lista de Contatos Marcados Como Lidos</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Lista de Contatos Lidos</li>
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
                        <div class="mail-option">
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
                            <div class="chk-all">
                                <div class="btn-group">
                                    <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                        All dates
                                        <i class="fa fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">January, 2019</a></li>
                                        <li><a href="#">December, 2018</a></li>
                                        <li><a href="#">November, 2018</a></li>
                                        <li><a href="#">October, 2018</a></li>
                                        <li><a href="#">September, 2018</a></li>
                                        <li><a href="#">August, 2018</a></li>
                                        <li><a href="#">July, 2018</a></li>
                                        <li><a href="#">June, 2018</a></li>
                                        <li><a href="#">May, 2018</a></li>
                                        <li><a href="#">April, 2018</a></li>
                                        <li><a href="#">March, 2018</a></li>
                                        <li><a href="#">February, 2018</a></li>
                                        <li><a href="#">January, 2018</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group hidden-phone">
                                <a href="#" class="btn" aria-expanded="false">
                                    Apply
                                </a>
                            </div>
                            <div class="btn-group hidden-phone">
                                <a href="#" class="btn" aria-expanded="false">
                                    Filter
                                </a>
                            </div>
                            <ul class="unstyled inbox-pagination">
                                <li><span>1-10 of 452 items</span></li>
                                <li>
                                    <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                </li>
                            </ul>
                        </div>
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
                                        <th class="">Email</th>
                                        <th class="">Status</th>
                                        
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($listReadContacts as $item):?>
                                        <tr>
                                            <th>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                    <span class="custom-control-label"></span>
                                                </label>
                                            </th>
                                            <td><a href="#" class="btn-link">#<?php echo $item['id'];?></a>
                                            </td>
                                            <td><?php echo $item['email'];?></td>
                                            <td>
                                                <?php if($item['status'] == 0):?>
                                                    <div class="alert alert-warning">Não Visualisado</div>
                                                <?php elseif($item['status'] == 1):?>
                                                    <div class="alert alert-info">Visualisado</div>
                                                <?php endif;?>
                                            </td>
                                            <td>
                                                <a href="<?php echo BASE_URL."admin/contactView/".$item['id'];?>" class="btn btn-info">Visualisar</a>
                                                <!-- <a href="<?php echo BASE_URL."admin/deleteLead/".$item['id'];?>" class="btn btn-danger">excluir</a> -->
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