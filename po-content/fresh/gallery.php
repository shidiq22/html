<?php if ($mod==""){
    header('location:../../404.php');
}else{
?>
<!-- 
*******************************************************
    Include Header Template
******************************************************* 
-->
<?php include_once "po-content/$folder/header.php"; ?>


<!-- 
*******************************************************
    Main Content Template
******************************************************* 
-->
    <section class="album-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slides">
                    <?php
                        $tableslider = new PoTable('gallery');
                        $sliders = $tableslider->findAll(id_gallery, DESC);
                        foreach($sliders as $slider){
                    ?>
                        <!-- Slide -->
                        <div class="slide">
                            <div class="slide-content">
                                <h2><?=$slider->title;?></h2>
                            </div>
                            <div class="slide-image">
                                <a href="<?=$website_url;?>/po-content/po-upload/<?=$slider->picture;?>">
                                    <img src="<?=$website_url;?>/po-content/po-upload/<?=$slider->picture;?>" class="img-responsive" />
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                        <!-- Slider navigation -->
                        <div class="slides-nextprev-nav">
                            <a href="#" class="prev"><i class="entypo-left-open-mini"></i></a>
                            <a href="#" class="next"><i class="entypo-right-open-mini"></i></a>
                        </div>
                    </div>
                </div>

               <!--  <div class="col-md-12">
                    <?php
                    $tablegal = new PoTable('gallery');
                    $gallerys = $tablegal->findAllRand();
                    foreach($gallerys as $gallery){
                        $idalb = $gallery->id_album;
                        $tablecalb = new PoTable('album');
                        $currentCalb = $tablecalb->findBy(id_album, $idalb);
                        $currentCalb = $currentCalb->current();
                        if ($currentCalb->active == 'Y'){
                        ?>
                        <div class="col-sm-4">
                            <div class="portfolio-item">
                                <a href="<?=$website_url;?>/po-content/po-upload/<?=$gallery->picture;?>" title="<?=$gallery->title;?>" rel="prettyPhoto">
                                <img width="200" height="150" src="<?=$website_url;?>/po-content/po-upload/<?=$gallery->picture;?>" alt="<?=$gallery->title;?>" /></a>
                                <h3 class="gal-title"><a href="#" title="<?=$gallery->title;?>" rel="bookmark"><?=$gallery->title;?></a></h3>
                            </div>
                        </div>
                        <?php
                        }
                    }
                    ?>
                    </div>
                <div class="clearfix"></div> -->
            </div>
        </div>
    </section>

<!-- 
*******************************************************
    Include Footer Template
******************************************************* 
-->
<?php include_once "po-content/$folder/footer.php"; ?>
<?php } ?>