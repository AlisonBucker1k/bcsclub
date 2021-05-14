<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<div class="page-header">
    <h4 class="page-title">Adicionar Consulta</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Adicionar Consulta</li>
    </ol>

    </div>
    <div class="row ">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Dados da clinica</h3>

            </div>
            <div class="card-body">
                <form >
                    <div class="row mb-2">
                        <div class="col-auto">
                            <div class="avatar brround avatar-xl">
                                <?php echo substr($dataClinica['nome_fant'], 0, 3);?>
                            </div>
                        </div>
                        <div class="col">
                            <h2 class="mb-1"><?php echo $dataClinica['nome_fant'];?></h2>
                            <h3 class="mb-2 "><?php echo $dataClinica['nome_resp'];?></h3>
                            <p class="mb-4 "><?php echo $dataClinica['cnpj'];?></p>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label class="form-label">Bio</label>
                        <textarea class="form-control" rows="5">On the other hand, we denounce with righteous indignation</textarea>
                    </div> -->
                    <div class="form-group">
                        <label class="form-label">Saldo A Receber</label>
                        <input class="form-control" disabled value="R$<?php echo number_format($dataClinica['saldo'],2, ',', '.');?>"/>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Rua</label>
                        <input class="form-control" disabled value="<?php echo $dataClinica['rua'];?>"/>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Numero</label>
                        <input class="form-control" disabled value="<?php echo $dataClinica['numero'];?>"/>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Bairro</label>
                        <input class="form-control" disabled value="<?php echo $dataClinica['bairro'];?>"/>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Cidade</label>
                        <input class="form-control" disabled value="<?php echo $dataClinica['cidade'];?>"/>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Estado</label>
                        <input class="form-control" disabled value="<?php echo $dataClinica['estado'];?>"/>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <form class="card" method="POST">
            <div class="card-header">
                <h3 class="card-title">Adicionar Serviços</h3>

            </div>
            <div class="card-body">
                <?php if(isset($info) && $info['type'] == 'success'):?>
                    <div class="alert alert-success"><?= $info['msg'];?></div>
                <?php endif;?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Procedimento</label>
                            <input type="text" class="form-control"  placeholder="Consulta" name="proc">
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label class="form-label">Valor de Custo (R$00.00)</label>
                            <input type="text" class="form-control price" placeholder="R$" name="val_coust">
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label class="form-label">Valor de Venda (R$00.00)</label>
                            <input type="text" class="form-control price" placeholder="R$" name="val_sell">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label class="form-label">Valor Pela clinica (R$00.00)</label>
                            <input type="text" class="form-control price" placeholder="R$" name="val_direct">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Adicionar Serviço</button>
            </div>
        </form>
    </div>
    <div class="col-md-12" id="consultas">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Lista de serviços prestados</h3>

            </div>
            <div class="table-responsive">
                <div class="container">
                    <?php if(isset($_GET['s'])):?>
                        <div class="alert alert-success">Status Atualizado</div>
                    <?php endif;?>
                    <table class="table card-table table-vcenter text-nowrap display" id="listClients">
                        <thead>
                            <tr>
                                <th>Procedimento</th>
                                <th>Valor de custo</th>
                                <th>Valor de Venda</th>
                                <th>Data adicionado</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($serviceList as $item):?>
                                <tr>
                                    <td><a href="" class="text-inherit"><?php echo $item['procedimento'];?></a></td>
                                    <td><?php echo 'R$'.number_format($item['val_coust'], 2, ',', '.');?></td>
                                    <td><?php echo 'R$'.number_format($item['val_sell'], 2, ',', '.');?></td>
                                    <td><?php echo date('d/m/Y', strtotime($item['data_add'])).' às '.date('H:i:s', strtotime($item['data_add']));?></td>
                                    <td>
                                        <?php if($item['status'] == 1):?>
                                            <span class="status-icon bg-success"></span> Ativo
                                            <?php elseif($item['status'] == 0):?>
                                                <span class="status-icon bg-default"></span> Inativo
                                        <?php endif;?>
                                    </td>
                                    <td class="text-right">
                            
                                        <a href="<?php echo BASE_URL;?>admin/editConsultaClinica/<?php echo $item['id'];?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Editar</a>
                                                
                                        <?php if($item['status'] == 1):?>
                                            <a href="<?php echo BASE_URL;?>admin/updateStatusConsultaClinica/<?php echo $item['id'];?>" class="btn btn-dark btn-sm"><i class="fa fa-link"></i> Bloquear</a>
                                            <?php elseif($item['status'] == 0):?>
                                                <a href="<?php echo BASE_URL;?>admin/updateStatusConsultaClinica/<?php echo $item['id']?>" class="btn btn-info btn-sm"><i class="fa fa-link"></i> Desbloquear</a>
                                        <?php endif;?>
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

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    
    $('#listClients').DataTable();
</script>