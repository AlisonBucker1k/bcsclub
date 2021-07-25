<!-- ================================
    START FULL SCREEN SLIDER
================================= -->
<section class="full-screen-slider-area" style="margin-top: 130px; ">
    <div class="full-screen-slider owl-trigger-action owl-trigger-action-2">
        <?php foreach($imagesPost as $q => $img):?>
            <a href="<?php echo BASE_URL."media/posts/".$img['urlf'];?>" class="fs-slider-item d-block" data-fancybox="gallery" data-caption="<?php echo $dataPost['title'];?>">
                <img src="<?php echo BASE_URL."media/posts/".$img['urlf'];?>" alt="single listing image" height="325px">
            </a><!-- end fs-slider-item -->
        <?php endforeach;?>
        
    </div>
</section><!-- end full-screen-slider-area -->
<!-- ================================
    END FULL SCREEN SLIDER
================================= -->

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bg-gradient-gray py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content breadcrumb-content-2 d-flex flex-wrap align-items-end justify-content-between">
                    <div class="section-heading">
                        <ul class="list-items bread-list bread-list-2 bg-transparent rounded-0 p-0">
                            <li><a href="<?php echo BASE_URL;?>">Home</a></li>
                            <li><a href="<?php echo BASE_URL.'categories/index/'.$getCategory['id'];?>"><?php echo $getCategory['title'];?></a></li>
                            <li><?php echo $dataPost['title'];?></li>
                        </ul>
                        <div class="d-flex align-items-center pt-1">
                            <h2 class="sec__title mb-0"><?php echo $dataPost['title'];?></h2>
                            <div class="hover-tooltip-box ml-2 pt-2">
                                <span class="text-color"><i class="la la-check-circle mr-1 text-color-4"></i></span>
                                <!-- <div class="hover-tooltip">
                                    <p>This business has been claimed by the owner or a representative. <a href="#">Learn more</a></p>
                                </div> -->
                            </div>
                        </div>
                        <p class="sec__desc py-2 font-size-17"><i class="la la-map-marker mr-1 text-color-2"></i><?php echo "{$dataPost['rua']}, {$dataPost['localizacao']}, {$dataPost['estado']}";?></p>
                        <p class="sec__desc py-2 font-size-17"><i class="la <?php echo (!empty($getCategory['la-icon']))?$getCategory['la-icon']:'la la-cutlery'?> text-color-2"></i><?php echo $getCategory['title'];?></p>
                        <p class="pb-2 font-weight-medium">
                            <!-- <span class="price-range mr-1 text-color font-size-16" data-toggle="tooltip" data-placement="top" title="Moderate">
                                <strong class="font-weight-medium">$</strong>
                                <strong class="font-weight-medium ml-n1">$</strong>
                            </span> -->
                            <!-- <span class="category-link"> -->
                                <!-- <a href="#">Categoria</a>, -->
                                <!-- <a href="<?php echo BASE_URL.'categories/index/'.$getCategory['id'];?>">
                                    <span class="<?php echo (!empty($getCategory['la-icon']))?$getCategory['la-icon']:'la la-cutlery'?>"></span> <?php echo $getCategory['title'];?>
                                </a> -->
                            <!-- </span> -->
                        </p>
                        <!-- <div class="d-flex flex-wrap align-items-center">
                            <div class="star-rating-wrap d-flex align-items-center">
                                <div class="star-rating text-color-5 font-size-18">
                                    <span><i class="la la-star"></i></span>
                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                    <span class="ml-n1"><i class="la la-star"></i></span>
                                </div>
                                <p class="font-size-14 pl-2 font-weight-medium">1348 reviews</p>
                            </div>
                            <div class="timestamp font-weight-medium ml-3 pl-3 border-left border-left-color line-height-20">
                                <span class="text-color-4 mr-2">Open:</span>
                                <span>11:00 AM - 8:00 PM</span>
                            </div>
                        </div> -->
                        <!-- <div class="btn-box pt-3">
                            <a href="#review" class="btn-gray mr-1"><i class="la la-star mr-1"></i>Write a Review</a>
                            <a href="#" class="btn-gray mr-1"><i class="la la-bookmark mr-1"></i>Save</a>
                            <a href="#" class="btn-gray" data-toggle="modal" data-target="#shareModal"><i class="la la-external-link mr-1"></i>Share</a>
                        </div> -->
                    </div>
                    <!-- <div class="btn-box d-flex align-items-center">
                        <span class="btn-gray mr-2"><i class="la la-eye mr-1"></i>Viewed - 255</span>
                        <span class="btn-gray mr-2"><i class="la la-heart mr-1"></i>Saved - 124</span>
                        <div class="dropdown dot-action-wrap">
                            <button class="dot-action-btn dropdown-toggle after-none border-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#reportModal"><i class="la la-flag mr-1"></i>Report</a>
                            </div>
                        </div>
                    </div> -->
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START LISTING DETAIL AREA
================================= -->
<section class="listing-detail-area padding-top-60px padding-bottom-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="listing-detail-wrap">
                    
                    <div class="block-card mb-4">
                       <div class="block-card-header">
                           <h2 class="widget-title">Descrição</h2>
                           <div class="stroke-shape"></div>
                       </div><!-- end block-card-header -->
                        <div class="block-card-body">
                            <!-- <p class="pb-3 font-weight-medium line-height-30">
                                Nemo ucxqui officia voluptatem accu santium doloremque laudantium,
                                totam rem ape dicta sunt dose explicabo. Nemo enim ipsam voluptatem quia voluptas.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa kequi
                                officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                                unde omnis iste natus error sit voluptatem accusan tium dolorem
                                que laudantium, totam rem aperiam the eaque ipsa quae abillo
                                was inventore veritatis keret quasi aperiam architecto beatae vitae dicta sunt explicabo.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                            <div class="collapse collapse-content" id="showMoreOptionCollapse">
                                <p class="font-weight-medium line-height-30 pb-3">
                                    Porpoise uncritical gosh and much and this haughtily broadcast goodness ponderous squid darn in sheepish yet the slapped mildly and adventurously sincere less dalmatian assentingly wherever left ethereal the underneath oh lustily arduously that a groggily some vexedly broadcast sheepish yet the slapped.
                                </p>
                            </div> -->
                            <?php echo $dataPost['body'];?>
                            <!-- <a class="collapse-btn" data-toggle="collapse" href="#showMoreOptionCollapse" role="button" aria-expanded="false" aria-controls="showMoreOptionCollapse">
                                <span class="collapse-btn-hide">Read More <i class="la la-plus ml-1"></i></span>
                                <span class="collapse-btn-show">Read Less <i class="la la-minus ml-1"></i></span>
                            </a> -->
                        </div><!-- end block-card-body -->
                    </div><!-- end block-card --
                    <div class="block-card mb-4">
                        <div class="block-card-header">
                            <h2 class="widget-title">Amenities</h2>
                            <div class="stroke-shape"></div>
                        </div><!-- end block-card-header --
                        <div class="block-card-body">
                            <ul class="list-items row">
                                <li class="col-lg-4"><i class="la la-cutlery text-color-2 mr-2 font-size-18"></i> Instant Burgers</li>
                                <li class="col-lg-4"><i class="la la-wifi text-color-2 mr-2 font-size-18"></i> Wireless Internet</li>
                                <li class="col-lg-4"><i class="la la-smoking text-color-2 mr-2 font-size-18"></i> Smoking Allowed</li>
                                <li class="col-lg-4"><i class="la la-smile text-color-2 mr-2 font-size-18"></i> Friendly workspace</li>
                                <li class="col-lg-4"><i class="la la-biking text-color-2 mr-2 font-size-18"></i> Free parking on street</li>
                                <li class="col-lg-4"><i class="la la-credit-card text-color-2 mr-2 font-size-18"></i> Accepts Credit cards</li>
                                <li class="col-lg-4"><i class="la la-shopping-cart text-color-2 mr-2 font-size-18"></i> Online Ordering</li>
                                <li class="col-lg-4"><i class="la la-paw text-color-2 mr-2 font-size-18"></i> Pet Friendly</li>
                                <li class="col-lg-4"><i class="la la-air-freshener text-color-2 mr-2 font-size-18"></i> Air Conditioned</li>
                                <li class="col-lg-12">
                                    <ul class="collapse collapse-content row" id="showMoreOptionCollaps2">
                                        <li class="col-lg-4"><i class="la la-umbrella text-color-2 mr-2 font-size-18"></i> Outdoor Seating</li>
                                        <li class="col-lg-4"><i class="la la-users text-color-2 mr-2 font-size-18"></i> Good for Groups</li>
                                        <li class="col-lg-4"><i class="la la-cutlery text-color-2 mr-2 font-size-18"></i> Good for Lunch, Dinner</li>
                                        <li class="col-lg-4"><i class="la la-baby text-color-2 mr-2 font-size-18"></i> Good For Kids</li>
                                        <li class="col-lg-4"><i class="la la-glass text-color-2 mr-2 font-size-18"></i> Beer & Wine Only</li>
                                        <li class="col-lg-4"><i class="la la-coffee text-color-2 mr-2 font-size-18"></i> Happy Hour Specials</li>
                                    </ul>
                                </li>
                            </ul>
                            <a class="collapse-btn" data-toggle="collapse" href="#showMoreOptionCollaps2" role="button" aria-expanded="false" aria-controls="showMoreOptionCollaps2">
                                <span class="collapse-btn-hide">Show More <i class="la la-plus ml-1"></i></span>
                                <span class="collapse-btn-show">Show Less <i class="la la-minus ml-1"></i></span>
                            </a>
                        </div><!-- end block-card-body --
                    </div><!-- end block-card --
                    <div class="block-card mb-4">
                        <div class="block-card-header">
                            <h2 class="widget-title">Promo Video</h2>
                            <div class="stroke-shape"></div>
                        </div><!-- end block-card-header --
                        <div class="block-card-body">
                            <div class="video-box">
                                <img class="lazy" src="images/img-loading.png" data-src="images/single-listing-img7.jpg" alt="video image">
                                <div class="video-content">
                                    <a class="icon-element icon-element-lg icon-element-white hover-scale mx-auto" href="https://www.youtube.com/watch?v=GlrxcuEDyF8" data-fancybox="" title="Play Video">
                                        <i class="la la-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!-- end block-card-body --
                    </div><!-- end block-card -->
                    
                    <div class="block-card mb-4">
                        <div class="block-card-header">
                            <h2 class="widget-title">Localização</h2>
                            <div class="stroke-shape"></div>
                        </div><!-- end block-card-header -->
                        <div class="block-card-body" >
                            <div class="map-container height-400" >
                                <div id="map">
                                <iframe src="<?php echo $dataPost['map'];?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                            <ul class="list-items list--items list-items-style-2 py-4">

                                <?php if(!empty($dataPost['estado'])):?>
                                    <li><span class="text-color"><i class="la la-map mr-2 text-color-2 font-size-18"></i>Endereço:</span> <?php echo "{$dataPost['rua']}, {$dataPost['localizacao']}, {$dataPost['estado']}, CEP: {$dataPost['cep']}";?></li>
                                <?php endif;?>

                                <?php if(!empty($dataPost['telefone'])):?>
                                    <li><span class="text-color"><i class="la la-phone mr-2 text-color-2 font-size-18"></i>Telefone:</span><a href="tel: <?php echo $dataPost['telefone']?>"><?php echo "{$dataPost['telefone']}";?></a></li>
                                <?php endif;?>

                                <?php if(!empty($dataPost['link'])):?>
                                    <li><span class="text-color"><i class="la la-globe mr-2 text-color-2 font-size-18"></i>Website:</span><a target="_blank" href="<?php echo 'https://'.$dataPost['link'];?>"><?php echo "www.{$dataPost['link']}";?></a></li>
                                <?php endif;?>
                                <!-- <li><span class="text-color"><i class="la la-envelope mr-2 text-color-2 font-size-18"></i>Email:</span><a href="#">listhub@gmail.com</a></li> -->
                                

                            </ul>
                            <!-- <ul class="social-profile social-profile-styled">
                                <li><a href="#" class="facebook-bg" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#" class="twitter-bg" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#" class="instagram-bg" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="lab la-instagram"></i></a></li>
                                <li><a href="#" class="youtube-bg" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="la la-youtube"></i></a></li>
                                <li><a href="#" class="behance-bg" data-toggle="tooltip" data-placement="top" title="Behance"><i class="la la-behance"></i></a></li>
                                <li><a href="#" class="dribbble-bg" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="la la-dribbble"></i></a></li>
                            </ul> -->
                        </div><!-- end block-card-body -->
                    </div><!-- end block-card -->
                    

                    
                </div><!-- end listing-detail-wrap -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar mb-0">
                    
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Informações Gerais</h3>
                        <div class="stroke-shape mb-4"></div>
                        <ul class="list-items list-items-style-2">
                            <?php if(!empty($dataPost['link'])):?>
                                <li><i class="la la-external-link mr-2 text-color-2 font-size-18"></i><a target="_blank" href="<?php echo "https://{$dataPost['link']}"?>"><?php echo "www.{$dataPost['link']}";?></a></li>
                            <?php endif;?>
                            <?php if(!empty($dataPost['telefone'])):?>
                                <li><i class="la la-phone mr-2 text-color-2 font-size-18"></i><a href="tel: <?php echo $dataPost['telefone']?>"><?php echo "{$dataPost['telefone']}";?></a></li>    
                            <?php endif;?>
                            <?php if(!empty($dataPost['localizacao'])):?>
                                <li><i class="la la-map-signs mr-2 text-color-2 font-size-18"></i><a href=""><?php echo "{$dataPost['rua']} {$dataPost['numero']},git  {$dataPost['localizacao']}, {$dataPost['estado']}, {$dataPost['cep']}";?></a></li>
                            <?php endif;?>

                            <!-- <li><i class="la la-cutlery mr-2 text-color-2 font-size-18"></i><a href="#">Full menu <i class="la la-external-link ml-1"></i></a></li>
                            <li><i class="la la-comment mr-2 text-color-2 font-size-18"></i><a href="#" data-toggle="modal" data-target="#messageModal">Message the Business</a></li> -->
                        </ul>
                    </div><!-- end sidebar-widget -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end listing-detail-area -->
<!-- ================================
    END LISTING DETAIL  AREA
================================= -->

<!-- ================================
    START CARD AREA
================================= --
<section class="card-area bg-gradient-gray section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title font-size-24 line-height-30">People Also Viewed</h2>
                </div><!-- end section-heading --
            </div><!-- end col-lg-8 --
        </div><!-- end row --
        <div class="row pt-1">
            <div class="col-lg-12">
                <div class="card-carousel owl-trigger-action">
                    <div class="card-item border border-color">
                        <div class="card-image">
                            <a href="listing-details.html" class="d-block">
                                <img src="images/img4.jpg" class="card__img" alt="">
                                <span class="badge">now open</span>
                            </a>
                            <span class="bookmark-btn" data-toggle="tooltip" data-placement="top" title="Save">
                                <i class="la la-bookmark"></i>
                            </span>
                        </div>
                        <div class="card-content">
                            <a href="#" class="user-thumb d-inline-block" data-toggle="tooltip" data-placement="top" title="TechyDevs">
                                <img src="images/listing-logo.jpg" alt="author-img">
                            </a>
                            <h4 class="card-title pt-3">
                                <a href="listing-details.html">Favorite Place Food Bank</a>
                                <i class="la la-check-circle ml-1" data-toggle="tooltip" data-placement="top" title="Claimed"></i>
                            </h4>
                            <p class="card-sub"><a href="#"><i class="la la-map-marker mr-1 text-color-2"></i>Bishop Avenue, New York</a></p>
                            <ul class="listing-meta d-flex align-items-center">
                                <li class="d-flex align-items-center">
                                    <span class="rate flex-shrink-0">4.7</span>
                                    <span class="rate-text">5 Ratings</span>
                                </li>
                                <li>
                                    <span class="price-range" data-toggle="tooltip" data-placement="top" title="Pricey">
                                        <strong class="font-weight-medium">$</strong>
                                        <strong class="font-weight-medium">$</strong>
                                        <strong class="font-weight-medium">$</strong>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="la la-cutlery mr-1 listing-icon"></i><a href="#" class="listing-cat-link">Restaurant</a>
                                </li>
                            </ul>
                            <ul class="info-list padding-top-20px">
                                <li><span class="la la-link icon"></span>
                                    <a href="#"> www.techydevs.com</a>
                                </li>
                                <li><span class="la la-calendar-check-o icon"></span>
                                    Opened 1 month ago
                                </li>
                            </ul>
                        </div>
                    </div><!-- end card-item --
                    <div class="card-item border border-color">
                        <div class="card-image">
                            <a href="listing-details.html" class="d-block">
                                <img src="images/img5.jpg" class="card__img" alt="">
                                <span class="badge bg-10">closed</span>
                            </a>
                            <span class="bookmark-btn" data-toggle="tooltip" data-placement="top" title="Save">
                                <i class="la la-bookmark"></i>
                            </span>
                        </div>
                        <div class="card-content">
                            <a href="#" class="user-thumb d-inline-block" data-toggle="tooltip" data-placement="top" title="TechyDevs">
                                <img src="images/listing-logo2.jpg" alt="author-img">
                            </a>
                            <h4 class="card-title pt-3">
                                <a href="listing-details.html">Beach Blue Boardwalk</a>
                            </h4>
                            <p class="card-sub"><a href="#"><i class="la la-map-marker mr-1 text-color-2"></i>Bishop Avenue, New York</a></p>
                            <ul class="listing-meta d-flex align-items-center">
                                <li class="d-flex align-items-center">
                                    <span class="rate flex-shrink-0">4.7</span>
                                    <span class="rate-text">5 Ratings</span>
                                </li>
                                <li>
                                    <span class="price-range" data-toggle="tooltip" data-placement="top" title="Moderate">
                                        <strong class="font-weight-medium">$</strong>
                                        <strong class="font-weight-medium">$</strong>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="la la-plane mr-1 listing-icon"></i><a href="#" class="listing-cat-link">Travel</a>
                                </li>
                            </ul>
                            <ul class="info-list padding-top-20px">
                                <li><span class="la la-link icon"></span>
                                    <a href="#"> www.techydevs.com</a>
                                </li>
                                <li><span class="la la-calendar-check-o icon"></span>
                                    Opened 1 month ago
                                </li>
                            </ul>
                        </div>
                    </div><!-- end card-item --
                    <div class="card-item border border-color">
                        <div class="card-image">
                            <a href="listing-details.html" class="d-block">
                                <img src="images/img6.jpg" class="card__img" alt="">
                                <span class="badge">Now Open</span>
                            </a>
                            <span class="bookmark-btn" data-toggle="tooltip" data-placement="top" title="Save">
                                <i class="la la-bookmark"></i>
                            </span>
                        </div>
                        <div class="card-content">
                            <a href="#" class="user-thumb d-inline-block" data-toggle="tooltip" data-placement="top" title="TechyDevs">
                                <img src="images/listing-logo3.jpg" alt="author-img">
                            </a>
                            <h4 class="card-title pt-3">
                                <a href="listing-details.html">Hotel Govendor</a>
                            </h4>
                            <p class="card-sub"><a href="#"><i class="la la-map-marker mr-1 text-color-2"></i>Bishop Avenue, New York</a></p>
                            <ul class="listing-meta d-flex align-items-center">
                                <li class="d-flex align-items-center">
                                    <span class="rate flex-shrink-0">4.7</span>
                                    <span class="rate-text">5 Ratings</span>
                                </li>
                                <li>
                                    <span class="price-range" data-toggle="tooltip" data-placement="top" title="Inexpensive">
                                        <strong class="font-weight-medium">$</strong>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="la la-hotel mr-1 listing-icon"></i><a href="#" class="listing-cat-link">Hotels</a>
                                </li>
                            </ul>
                            <ul class="info-list padding-top-20px">
                                <li><span class="la la-link icon"></span>
                                    <a href="#"> www.techydevs.com</a>
                                </li>
                                <li><span class="la la-calendar-check-o icon"></span>
                                    Opened 1 month ago
                                </li>
                            </ul>
                        </div>
                    </div><!-- end card-item --
                    <div class="card-item border border-color">
                        <div class="card-image">
                            <a href="listing-details.html" class="d-block">
                                <img src="images/img7.jpg" class="card__img" alt="">
                                <span class="badge">now open</span>
                            </a>
                            <span class="bookmark-btn" data-toggle="tooltip" data-placement="top" title="Save">
                                <i class="la la-bookmark"></i>
                            </span>
                        </div>
                        <div class="card-content">
                            <a href="#" class="user-thumb d-inline-block" data-toggle="tooltip" data-placement="top" title="TechyDevs">
                                <img src="images/anywhere.png" alt="author-img">
                            </a>
                            <h4 class="card-title pt-3">
                                <a href="listing-details.html">Sticky band party</a>
                                <i class="la la-check-circle ml-1" data-toggle="tooltip" data-placement="top" title="Claimed"></i>
                            </h4>
                            <p class="card-sub"><a href="#"><i class="la la-map-marker mr-1 text-color-2"></i>Bishop Avenue, New York</a></p>
                            <ul class="listing-meta d-flex align-items-center">
                                <li class="d-flex align-items-center">
                                    <span class="rate flex-shrink-0">4.7</span>
                                    <span class="rate-text">5 Ratings</span>
                                </li>
                                <li>
                                    <span class="price-range" data-toggle="tooltip" data-placement="top" title="Pricey">
                                        <strong class="font-weight-medium">$</strong>
                                        <strong class="font-weight-medium">$</strong>
                                        <strong class="font-weight-medium">$</strong>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="la la-music mr-1 listing-icon"></i><a href="#" class="listing-cat-link">Event</a>
                                </li>
                            </ul>
                            <ul class="info-list padding-top-20px">
                                <li><span class="la la-link icon"></span>
                                    <a href="#"> www.techydevs.com</a>
                                </li>
                                <li><span class="la la-calendar-check-o icon"></span>
                                    Opened 1 month ago
                                </li>
                            </ul>
                        </div>
                    </div><!-- end card-item --
                </div><!-- end card-carousel --
            </div><!-- end col-lg-12 --
        </div><!-- end row --
    </div><!-- end container --
</section><!-- end card-area --
<!-- ================================
    END CARD AREA
================================= -->