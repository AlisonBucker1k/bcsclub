<?php 
    $a = new Admin();
    
    $dadosCategory = $a->getDadosFromCategory($id_category);
    $images = $a->getImagesByProductId($id);
?>

<div class="row">
        <div class="col-lg-12">
            <div class="card-item card-item-list">
                <div class="card-image">
                    <a href="<?php echo BASE_URL."showcase/index/".$id;?>" class="d-block">
                    <?php if(!empty($images[0]['urlf'])):?>
                        <img src="<?php echo BASE_URL."media/posts/{$images[0]['urlf']}";?>" class="card__img" alt="<?php echo $title?>">  
                    <?php else:?>
                        <img src="<?php echo BASE_URL."assets/blog/images/4243275ad9ae9683fffa91531e297de18b52ed21_hq.gif";?>" style="max-width: 368; min-height: 294.41px;" class="card__img" alt="">  
                    <?php endif;?>
                        <span class="badge">Desconto <?php echo $discount;?>%</span>
                    </a>
                    <span class="bookmark-btn" data-toggle="tooltip" data-placement="top" title="Save">
                        <i class="la la-bookmark"></i>
                    </span>
                </div>
                <div class="card-content">
                    <!-- <a href="#" class="user-thumb d-inline-block" data-toggle="tooltip" data-placement="top" title="TechyDevs">
                        <img src="<?php echo BASE_URL."media/posts/".$images[0]['urlf'];?>" alt="author-img">
                    </a> -->
                    <h4 class="card-title pt-3">
                        <a href="<?php echo BASE_URL."showcase/index/".$id;?>"><?php echo $title;?></a>
                        <i class="la la-check-circle ml-1" data-toggle="tooltip" data-placement="top" title="Claimed"></i>
                    </h4>
                    <p class="card-sub"><a href="#"><i class="la la-map-marker mr-1 text-color-2"></i><?php echo "{$rua}, {$bairro},  {$localizacao}, {$estado}";?></a></p>
                    <ul class="listing-meta d-flex align-items-center">
                        <li class="d-flex align-items-center">
                            <span class="rate flex-shrink-0">5.0</span>
                            <!-- <span class="rate-text">5 Ratings</span> -->
                        </li>
                        <li>
                        <!-- <span class="price-range" data-toggle="tooltip" data-placement="top" title=""> -->
                            <!-- <strong class="font-weight-medium">$</strong> -->
                            <!-- <strong class="font-weight-medium">$</strong>
                            <strong class="font-weight-medium">$</strong> -->
                        <!-- </span> -->
                        </li>
                        <li class="d-flex align-items-center">
                            <i class=" <?php echo (!empty($dadosCategory['la-icon']))?$dadosCategory['la-icon']:'la la-cutlery';?> mr-1 listing-icon"></i><a href="<?php echo BASE_URL."categories/index/{$dadosCategory['id']}"?>" class="listing-cat-link"><?php echo $dadosCategory['title'];?></a>
                        </li>
                    </ul>
                    <ul class="info-list padding-top-20px">
                    <?php if(!empty($link)):?>
                        <li>
                            <span class="<?php echo (!empty($link))?'la la-link icon':'icon';?>"></span>
                            <a href="<?php echo 'https://'.$link;?>" target="_blank"> <?php echo 'www.'.$link;?></a>
                        </li>
                    <?php endif;?>
                    <?php if(!empty($telefone)):?>
                        <li>
                            <span class="<?php echo (!empty($link))?'la la-phone icon':'icon';?>"></span>
                            <a href="<?php echo "tel: {$telefone}";?>" target="_blank"> <?php echo $telefone;?></a>
                        </li>
                    <?php endif;?>
                        <!-- <li><span class="la la-calendar-check-o icon"></span>
                            Opened 1 month ago
                        </li> -->
                    </ul>
                </div>
            </div><!-- end card-item -->
        </div><!-- end col-lg-12 -->
    </div><!-- end row -->