
<div class="card-item border border-color">
<div class="card-image" style="min-width: 368px; min-height: 294.41px;">
    <a href="<?php echo BASE_URL."";?>" class="d-block">
        <img src="<?php echo BASE_URL."assets/geral/images/494529-middle.png";?>" style="max-width: 368; min-height: 294.41px;" class="card__img" alt="">  

        
        <!-- <span class="badge">now open</span> -->
    </a>
    
</div>
<div class="card-content">
    <!-- <a href="#" class="user-thumb d-inline-block" data-toggle="tooltip" data-placement="top" title="TechyDevs">
        <img src="<?php echo BASE_URL.'assets/blog/';?>images/listing-logo.jpg" alt="author-img">
    </a> -->
    <h4 class="card-title pt-3">
        <a href="<?php echo BASE_URL."showcase/index/";?>">VER MAIS</a>
        <i class="la la-check-circle ml-1" data-toggle="tooltip" data-placement="top" title="Recomendamos!"></i>
    </h4>
    <!-- <p class="card-sub"><a href="#"><i class="la la-map-marker mr-1 text-color-2"></i><?php echo "{$rua}, {$bairro} ".(!empty($numero)?'Nº':'')." {$numero},  {$localizacao}, {$estado}";?></a></p> -->
    <ul class="listing-meta d-flex align-items-center">
        <li class="d-flex align-items-center">
            <!-- <span class="rate flex-shrink-0">4.7</span>
            <span class="rate-text">5 Ratings</span> -->
        </li>
        <li>
            <!-- <span class="price-range" data-toggle="tooltip" data-placement="top" title="Melhores Descontos">
                <strong class="font-weight-medium">$</strong>
                <strong class="font-weight-medium">$</strong>
                <strong class="font-weight-medium">$</strong>
            </span> -->
        </li>
        <li class="d-flex align-items-center">
            <!-- <i class=" <?php echo (!empty($categoryName['laicon']))?$categoryName['laicon']:'la la-cutlery';?> mr-1 listing-icon"></i><a href="<?php echo BASE_URL."categories/index/{$categoryName['id']}"?>" class="listing-cat-link"><?php echo $categoryName['title'];?></a> -->
        </li>
    </ul>
    <ul class="info-list padding-top-20px">
        <!-- <?php if(!empty($link)):?>
            <li>
                <span class="<?php echo (!empty($link))?'la la-link icon':'icon';?>"></span>
                <a href="<?php echo 'https://'.$link;?>" target="_blank"> <?php echo 'www.'.substr($link, 0, 27);?><?php echo (strlen($link) >= 27? '...':'')?></a>
            </li>
        <?php endif;?>
        <?php if(!empty($telefone)):?>
            <li>
                <span class="<?php echo (!empty($link))?'la la-phone icon':'icon';?>"></span>
                <a href="<?php echo "tel: {$telefone}";?>" target="_blank"> <?php echo $telefone;?></a>
            </li>
        <?php endif;?> -->
        <!-- <li><span class="la la-calendar-check-o icon"></span>
            Opened 1 month ago
        </li> -->
    </ul>
</div>
</div><!-- end card-item -->