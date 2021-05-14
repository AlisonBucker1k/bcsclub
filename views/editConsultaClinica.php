<div class="page-header">
    <h4 class="page-title">Editar Consulta</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Consulta</li>
    </ol>
</div>

<div class="row row-cards">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Editar Consulta</div>
            </div>
            <div class="card-body">
                <?php if(isset($info) && $info['type'] == 'success'):?>
                    <div class="alert alert-success"><?php echo $info['msg'];?></div>
                    <?php elseif(isset($info) && $info['type'] == 'error'):?>
                        <div class="alert alert-danger"><?php echo $info['msg'];?></div>
                <?php endif;?>

                <form method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Procedimento</label>
                                <input type="text" class="form-control"  placeholder="Consulta" name="proc" value="<?= $dataConsulta['procedimento'];?>">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-label">Valor de Custo (R$00.00)</label>
                                <input type="text" class="form-control price" placeholder="R$" name="val_coust" value="<?= $dataConsulta['val_coust'];?>">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-label">Valor de Venda (R$00.00)</label>
                                <input type="text" class="form-control price" placeholder="R$" name="val_sell" value="<?= $dataConsulta['val_sell'];?>">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-label">Valor Pela clinica (R$00.00)</label>
                                <input type="text" class="form-control price" placeholder="R$" name="val_direct" value="<?= $dataConsulta['val_direct'];?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                </form>
            </div>
            
        </div>
    </div>
</div>