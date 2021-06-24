<div class="container-fluid dashboard-inner-body-container">
    
    <div class="row">
        
        <div class="col-lg-3 col-md-6">
            <div class="card-item dashboard-stat">
                <div class="card-content">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="card-title font-size-40"><?php echo $countComercios;?></h2>
                            <p class="card-sub font-size-18 line-height-24">Comerciantes</p>
                        </div>
                        <div class="col-auto font-size-60">
                            <i class="la la-map-marked text-primary"></i>
                        </div>
                    </div><!-- end row -->
                </div><!-- end card-content -->
            </div><!-- end card-item -->
        </div><!-- end col-lg-3 -->
        <div class="col-lg-3 col-md-6">
            <div class="card-item dashboard-stat">
                <div class="card-content">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="card-title font-size-40"><?php echo $countCat;?></h2>
                            <p class="card-sub font-size-18 line-height-24">Categorias</p>
                        </div>
                        <div class="col-auto font-size-60">
                            <i class="la la-line-chart text-success"></i>
                        </div>
                    </div><!-- end row -->
                </div><!-- end card-content -->
            </div><!-- end card-item -->
        </div><!-- end col-lg-3 -->
        <div class="col-lg-3 col-md-6">
            <div class="card-item dashboard-stat">
                <div class="card-content">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="card-title font-size-40"><?php echo $leadsCount;?></h2>
                            <p class="card-sub font-size-18 line-height-24">Contatos</p>
                        </div>
                        <div class="col-auto font-size-60">
                            <i class="la la-star-o text-info"></i>
                        </div>
                    </div><!-- end row -->
                </div><!-- end card-content -->
            </div><!-- end card-item -->
        </div><!-- end col-lg-3 -->
        <div class="col-lg-3 col-md-6">
            <div class="card-item dashboard-stat">
                <div class="card-content">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="card-title font-size-40">0</h2>
                            <p class="card-sub font-size-18 line-height-24">Marcados</p>
                        </div>
                        <div class="col-auto font-size-60">
                            <i class="la la-bookmark text-warning"></i>
                        </div>
                    </div><!-- end row -->
                </div><!-- end card-content -->
            </div><!-- end card-item -->
        </div><!-- end col-lg-3 -->
        <div class="col-lg-7">
            <div class="block-card dashboard-card mb-4">
                <div class="block-card-header d-flex flex-wrap align-items-center justify-content-between">
                    <div id="myChartLegend">
                        <ul class="0-legend d-flex align-items-center">
                            <li class="btn-gray mr-2"><span></span>Listings Views</li>
                            <li class="btn-gray"><span></span>Bookings</li>
                        </ul>
                    </div>
                    <div class="user-chosen-select-container">
                        <select class="user-chosen-select">
                            <option value="1">Today</option>
                            <option value="2">Week</option>
                            <option value="3" selected>Month</option>
                            <option value="4">This Year</option>
                        </select>
                    </div>
                </div>
                <div class="block-card-body">
                    <div class="chart-block">
                        <canvas id="lineChart"></canvas>
                    </div>
                </div><!-- end block-card-body -->
            </div><!-- end block-card -->
        </div><!-- end col-lg-7 -->
        <div class="col-lg-5">
            <div class="block-card dashboard-card mb-4">
                <div class="block-card-header">
                    <h2 class="widget-title pb-0">Contatos Recentes</h2>
                </div>
                <div class="block-card-body">
                    <?php foreach($lastContact as $item):?>
                        <div class="generic-list-card d-flex align-items-center justify-content-between">
                            <div class="generic-list-card-content d-flex align-items-center mr-2">
                                <span class="icon-element bg-3 mr-2 after-none"><i class="la la-star-o"></i></span>
                                <span class="font-weight-medium font-size-15"><?php echo $item['email']?> <a href="#" class="generic-link">Entrou em contato</a> <a href="<?php echo BASE_URL.'admin/contactView/'.$item['id'];?>">VER</a></span>
                            </div>
                            <a href="javascript:void(0)" class="generic-close"><i class="la la-times"></i></a>
                        </div><!-- end generic-list-card -->
                    <?php endforeach;?>
                </div><!-- end block-card-body -->
            </div><!-- end block-card -->
        </div><!-- end col-lg-5 -->
        
    </div><!-- end row -->
</div><!-- end dashboard-inner-body-container -->