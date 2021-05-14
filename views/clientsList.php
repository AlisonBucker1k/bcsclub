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
        

        <?php if(isset($_GET['s']) && $_GET['s'] == 'success'):?>
            <div class="alert alert-success">Cliente Atualizado</div>
        <?php endif;?>
        

        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active " id="tab1">
                        
                    <table class="table card-table table-bordered table-hover table-vcenter text-nowrap display" id="listClients">
                        <thead>
                            <tr>
                                <th class="w-1">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </th>
                                <th scope="col" class="w-1">#</th>
                                <th scope="col" class="">Nome</th>
                                <th scope="col" class="">cpf</th>
                                <th scope="col" class="">Data de Cadastro</th>
                                <th>Saldo a receber</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($clientList as $item):?> 
                            <tr>
                                <th>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </th>
                                <td><a href="#" class="btn-link">#<?php echo $item['id'];?></a>
                                </td>
                                <td><?php echo $item['nome'];?></td>
                                <td max-width="200px"><?= $item['cpf'];?></td>
                                <td><?= date('d/m/Y', strtotime($item['date_cadastro'])) .' às '.date('H:i:s', strtotime($item['date_cadastro']));?></td>
                                <td><?= number_format($item['saldo'],2, ',', '.');?></td>
                                <td>
                                    <a href="<?php echo BASE_URL."admin/editCliente/".$item['id'];?>" class="btn btn-info">Editar</a>

                                    <?php if($item['status'] == 0):?>
                                        <a href="<?php echo BASE_URL."admin/updateStatusCliente/".$item['id'];?>" class="btn btn-success">Desbloquear</a>
                                    <?php elseif($item['status'] == 1):?>
                                        <a href="<?php echo BASE_URL."admin/updateStatusCliente/".$item['id'];?>" class="btn btn-warning">Bloquear</a>
                                    <?php endif;?>

                                    <a href="<?php echo BASE_URL."admin/deleteCliente/".$item['id'];?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esse cliente?')">excluir</a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                        </table>

                        <div class="table-responsive border-top">
                            
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