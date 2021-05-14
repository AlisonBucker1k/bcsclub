<div class="page-header">
        <h4 class="page-title">Visualisar Contato</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Visualisar Contrato</li>
        </ol>
    </div>

    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Por: <?php echo $contactData['name'];?> no dia <?php echo date('d/m/Y', strtotime($contactData['date_contact']));?> às <?php echo date('H:i:s', strtotime($contactData['date_contact']));?></h3>
                    <div class="card-options">
                        <?php if($contactData['status'] == 0):?>
                            <a href="<?php echo BASE_URL."admin/readContact/".$contactData['id'];?>" class="btn btn-sm btn-pink mr-2"><i class="icon icon-check"></i> Marcar como lido</a>
                            <?php elseif($contactData['status'] ==1):?>
                                <a href="#" class="btn btn-sm btn-green mr-2"><i class="icon icon-check"></i> Lido</a>
                        <?php endif;?>
                    </div>
                </div>
                <div class="card-body">
                
                    <div class="jumbotron">
                    <?php echo $contactData['message'];?>
                    </div>
                    <p class="text-muted text-center"></p>
                </div>
            </div>
        </div>
    </div>