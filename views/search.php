<!-- ================================
    START BREADCRUMB AREA
================================= -->

<section class="breadcrumb-area bread-bg bread-overlay overflow-hidden" style="background-image: url('<?php echo BASE_URL."media/categories/{$dadosCategory['icon']}";?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                    <div class="section-heading">
                        <h2 class="sec__title text-white font-size-40 mb-0">Resultados da pesquisa:</h2>
                    </div>
                    <ul class="list-items bread-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Pesquisa</li>
                        <li>Resultados</li>
                    </ul>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="bread-svg">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="50px" viewBox="0 0 1200 150" preserveAspectRatio="none">
            <g><path fill-opacity="0.2" d="M0,150 C600,100 1000,50 1200,-1.13686838e-13 C1200,6.8027294 1200,56.8027294 1200,150 L0,150 Z"></path></g><g class="pix-waiting animated" data-anim-type="fade-in-up" data-anim-delay="300"><path fill="rgba(255,255,255,0.8)" d="M0,150 C600,120 1000,80 1200,30 C1200,36.8027294 1200,76.8027294 1200,150 L0,150 Z"></path></g><path fill="#fff" d="M0,150 C600,136.666667 1000,106.666667 1200,60 C1200,74 1200,104 1200,150 L0,150 Z"></path><defs></defs>
        </svg>
    </div><!-- end bread-svg -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START CARD AREA
================================= -->
<section class="card-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="filter-bar d-flex flex-wrap justify-content-between align-items-center margin-bottom-30px">
                    <p class="result-text font-weight-medium">Exibindo <?php echo count($postByTherm);?> resultado<?php echo (count($postByTherm) == 1)?'':'s';?> </p>
                    <div class="filter-bar-action d-flex flex-wrap align-items-center">
                        <!-- <a href="#" class="search-filter" data-toggle="modal" data-target="#searchFilterModal">
                            <i class="la la-sliders mr-1"></i>Detailed Search
                        </a> -->
                        <!-- <form method="POST">
                            <div class="user-chosen-select-container ml-3">
                                <select class="user-chosen-select" onchange="submit(this)" name="filter01">
                                <option value="">Listar por</option>
                                <option value="1">Novas</option>
                                <option value="2">Antigas</option>
                                <option value="3">Menor Desconto</option>
                                <option value="4">Maior Desconto</option>
                                </select>
                            </div>
                        </form>
                        <ul class="filter-nav ml-1">
                            <li><a href="listing-grid.html" data-toggle="tooltip" data-placement="top" title="Grid View"><span class="la la-th-large"></span></a></li>
                            <li><a href="listing-list.html" data-toggle="tooltip" data-placement="top" title="List View" class="active"><span class="la la-list"></span></a></li>
                        </ul> -->
                    </div><!-- end filter-bar-action -->
                </div><!-- end filter-bar -->
            </div><!-- end col-lg-12 -->
            <div class="col-lg-8">

            <?php 
                foreach($postByTherm as $item){
                    $this->loadView('itens/listComercioView', $item);
                }
            ?>
                
                    
                <!--<div class="row">
                    <div class="col-lg-12 pt-3 text-center">
                        <div class="pagination-wrapper d-inline-block">
                            <div class="section-pagination">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination flex-wrap justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true"><i class="la la-angle-left"></i></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link page-link-active" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true"><i class="la la-angle-right"></i></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- end section-pagination 
                            <ul class="pagination-simple d-flex align-items-center justify-content-center pt-3">
                                <li class="mr-4">
                                    <a href="#" class="pagination-simple-nav first-nav"><i class="la la-long-arrow-left mr-1"></i>First</a>
                                </li>
                                <li>
                                    <a href="#" class="pagination-simple-nav last-nav active">Last<i class="la la-long-arrow-right ml-1"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- end col-lg-12
                </div><!-- end row -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar mb-0">
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Pesquisar</h3>
                        <div class="stroke-shape mb-4"></div>
                        <form method="POST" class="form-box" action="<?php echo BASE_URL."search";?>">
                            <div class="form-group">
                                <span class="la la-search form-icon"></span>
                                <input class="form-control" type="search" placeholder="O que você procura?" name="keyword"> 
                            </div>
                            <div class="form-group user-chosen-select-container">
                                <select class="user-chosen-select" name="local">
                                <option value="">Selecione um Estado</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                                 
                                </select>
                            </div><!-- end form-group -->
                            <div class="form-group user-chosen-select-container">
                                <select class="user-chosen-select" name="category">
                                    <option value="">Selecione uma categoria</option>
                                    <?php foreach($listCategories as $item):?>
                                        <option data-select2-id="" value="<?php echo $item['id'];?>"><?php echo $item['title'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div><!-- end form-group 
                            <div class="form-group user-chosen-select-container">
                                <select class="user-chosen-select">
                                    <option value="0">Price Range</option>
                                    <option value="1">$ Inexpensive</option>
                                    <option value="2">$$ Moderate</option>
                                    <option value="3">$$$ Pricey</option>
                                    <option value="4">$$$$ Ultra High</option>
                                </select>
                            </div><!-- end form-group -->
                            <div class="btn-box">
                                <!-- <a href="#" class="btn-gray btn-gray-lg open-filter-btn w-100"><i class="la la-clock mr-2"></i>Now Open</a> -->
                                <button type="submit" class="theme-btn gradient-btn border-0 w-100 mt-3">
                                    <i class="la la-search mr-2"></i>Pesquisar
                                </button>
                            </div><!-- end btn-box -->
                        </form>
                    </div><!-- end sidebar-widget -->
                    
                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end card-area -->
<!-- ================================
    END CARD AREA
================================= -->