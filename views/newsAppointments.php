<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<div class="page-header">
    <h4 class="page-title">Novas Consultas Pagas</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Novas Consultas Pagas</li>
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
                                        
                                        <th class="w-1">#</th>
                                        <th class="">Cliente</th>
                                        <th class="">Clinica</th>
                                        <th class="">Procedimento</th>
                                        <th class="">Data de pagamento</th>
                                        <th class="">Metodo de pagamento</th>
                                        <th class="">Valor Pago</th>
                                        <!-- <th class="">Status de pagamento</th> -->
                                        <th class="">Status de agen.</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($newAppointments as $item):?>
                                        <tr>
                                            
                                            <th class="w-1">#<?php echo $item['id'];?></th>
                                            <th class=""><a href="<?php echo BASE_URL;?>admin/editCliente/<?php echo $item['clientes']['id'];?>" class="text-blue"><?php echo $item['clientes']['nome'];?></a></th>
                                            <th class=""><a href="<?php echo BASE_URL;?>admin/editClinica/<?php echo $item['clinicas']['id'];?>" class="text-blue"><?php echo $item['clinicas']['nome_fant'];?></a></th>
                                            <th class=""><?php echo $item['consulta']['procedimento'];?></th>
                                            <th class=""><?php echo date('d/m/Y', strtotime($item['data_pay'])).' às '.date('H:i', strtotime($item['data_pay']));?></th>
                                            <th class=""><?php echo $item['payment_type'];?></th>
                                            <th class="">R$<?php echo number_format($item['val_sell'],2, ',', '.');?></th>
                                            <!-- <th class=""> <span class="text-green">Pago</span> </th> -->
                                            <th class="">
                                                <?php if($item['status_marcado'] == 0):?>
                                                    <span class="text-red">Não Marcado</span>
                                                <?php elseif($item['status_marcado'] == 1):?>
                                                    <span class="text-blue">Marcado para o dia <?php echo date('d/m/Y', strtotime($item['data_pay'])).' às '.date('H:i', strtotime($item['data_pay']));?></span>
                                                <?php endif;?>
                                            </th>
                                            <td>
                                                <a href="<?php echo BASE_URL."admin/makeAppointment/".$item['id'];?>" class="btn btn-info">Marcar Consulta</a>
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