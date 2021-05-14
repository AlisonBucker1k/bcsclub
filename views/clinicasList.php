<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

<div class="page-header">
    <h4 class="page-title">Lista de Clinicas</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Lista de Clinicas</li>
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

        <?php if(isset($_GET['s']) && $_GET['s'] == 'success'):?>
            <div class="alert alert-success">Clinica Atualizada</div>
        <?php endif;?>
        

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
                                        <th class="">Nome</th>
                                        <th class="">cnpj</th>
                                        <th class="">Data de Cadastro</th>
                                        <th width="50px">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($clinicasList as $item):?>
                                        <tr>
                                            <th>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                    <span class="custom-control-label"></span>
                                                </label>
                                            </th>
                                            <td><a href="#" class="btn-link">#<?php echo $item['id'];?></a>
                                            </td>
                                            <td><?php echo $item['nome_fant'];?></td>
                                            <td max-width="200px"><?= $item['cnpj'];?></td>
                                            <td><?= date('d/m/Y', strtotime($item['date_cadastro'])) .' às '.date('H:i:s', strtotime($item['date_cadastro']));?></td>
                                            <td>
                                                <a href="<?php echo BASE_URL."admin/editClinica/".$item['id'];?>" class="btn btn-info">Editar</a>

                                                <?php if($item['status'] == 0):?>
                                                    <a href="<?php echo BASE_URL."admin/updateStatusClinica/".$item['id'];?>" class="btn btn-success">Desbloquear</a>
                                                <?php elseif($item['status'] == 1):?>
                                                    <a href="<?php echo BASE_URL."admin/updateStatusClinica/".$item['id'];?>" class="btn btn-warning">Bloquear</a>
                                                <?php endif;?>

                                                <a href="<?php echo BASE_URL;?>admin/addConsultaClinica/<?php echo $item['id'];?>" class="btn btn-dark">Adicionar Consulta <i class="fa fa-upload fa-spin ml-2"></i></a>

                                                <a href="<?php echo BASE_URL;?>admin/addConsultaClinica/<?php echo $item['id'];?>#consultas" class="btn btn-indigo">Ver Serviços <i class="fa fa-chrome fa-spin ml-2"></i></a>

                                                <a href="<?php echo BASE_URL."admin/deleteClinica/".$item['id'];?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir essa clinica?')">excluir</a>
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