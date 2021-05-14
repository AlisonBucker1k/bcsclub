<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<div class="page-header">
    <h4 class="page-title">Lista de Leads (Receba Novidades)</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Lista de Leads</li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active " id="tab1">
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
                                    <?php foreach($listLeads as $item):?>
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
                                                    <a href="<?php echo BASE_URL."admin/contactLead/".$item['id'].'/listNewsLetterLeads';?>" class="btn btn-info">Ok</a>
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