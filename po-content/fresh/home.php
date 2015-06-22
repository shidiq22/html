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
		<!-- Main Slider -->
		<section class="slider-container" style="background-image: url(<?=$website_url;?>/po-content/<?=$folder;?>/assets/images/testimonials-bg.png);">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="slides">
						<?php
							$tableslider = new PoTable('post');
							$sliders = $tableslider->findAllLimitByAnd(id_post, active, headline, 'Y', 'Y', DESC, '3');
							foreach($sliders as $slider){
						?>
							<!-- Slide -->
							<div class="slide">
								<div class="slide-content">
									<h2><?=$slider->title;?></h2>
									<p><?=cuthighlight('post', $slider->content, '200');?>...</p>
								</div>
								<div class="slide-image">
									<a href="<?php echo "$website_url/detailpost/$slider->seotitle"; ?>">
										<img src="<?=$website_url;?>/po-content/po-upload/medium/medium_<?=$slider->picture;?>" class="img-responsive" width="500" />
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
				</div>
			</div>
		</section>

		<!-- Event Blocks -->
		<section class="features-blocks">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="text-center">
							<h1>EVENT RS PARU DR. H. A. ROTINSULU</h1>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-sm-12">
									<div class="row-content">
										<?php
											$tableconc = new PoTable('post');
											$concs = $tableconc->findAllLimitByAnd(id_post, id_category, active, '5', 'Y', DESC, '2');
											foreach($concs as $conc){
										?>
										<div class="col-sm-6">
											<!-- Portfolio Item in Widget -->
											<div class="portfolio-item">
												<a href="<?php echo "$website_url/detailpost/$conc->seotitle"; ?>" class="image">
													<img src="<?=$website_url;?>/po-content/po-upload/medium/medium_<?=$conc->picture;?>" class="img-rounded" />
													<span class="hover-zoom"></span>
												</a>
												<h4><a href="<?php echo "$website_url/detailpost/$conc->seotitle"; ?>" class="name"><?=cuthighlight('title', $conc->title, '30');?>...</a></h4>
												<div class="categories"><?=cuthighlight('post', $conc->content, '100');?>...</div>
											</div>
										</div>
										<?php } ?>
									</div>
								</div>
							</div>
							<p>&nbsp;</p>
						</div>
					</div>
				</div>
				<!-- Separator -->
				<div class="row">
					<div class="col-md-12">
						<hr />
					</div>
				</div>
			</div>
		</section>

		<!-- Category -->
		<section class="portfolio-widget">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="portfolio-info text-center">
							<h3 class="title-arkes">
								<a href="<?=$website_url;?>/category/artikel-kesehatan">
									<span>ARTIKEL KESEHATAN</span>
								</a>
							</h3>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="row-content">
									<?php
										$tableconc = new PoTable('post');
										$concs = $tableconc->findAllLimitByAnd(id_post, id_category, active, '3', 'Y', DESC, '2');
										foreach($concs as $conc){
									?>
									<div class="col-sm-6">
										<!-- Portfolio Item in Widget -->
										<div class="portfolio-item">
											<a href="<?php echo "$website_url/detailpost/$conc->seotitle"; ?>" class="image">
												<img src="<?=$website_url;?>/po-content/po-upload/medium/medium_<?=$conc->picture;?>" class="img-rounded" />
												<span class="hover-zoom"></span>
											</a>
											<h4><a href="<?php echo "$website_url/detailpost/$conc->seotitle"; ?>" class="name"><?=cuthighlight('title', $conc->title, '30');?>...</a></h4>
											<div class="categories"><?=cuthighlight('post', $conc->content, '100');?>...</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
						<p>&nbsp;</p>
					</div>
					<div class="col-md-6">
						<div class="portfolio-info text-center">
							<h3 class="title-rotup">
								<a href="<?=$website_url;?>/category/rotinsulu-update">
									<span>ROTINSULU UPDATE</span>
								</a>
							</h3>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="row-content">
									<?php
										$tablecond = new PoTable('post');
										$conds = $tablecond->findAllLimitByAnd(id_post, id_category, active, '4', 'Y', DESC, '2');
										foreach($conds as $cond){
									?>
									<div class="col-sm-6">
										<!-- Portfolio Item in Widget -->
										<div class="portfolio-item">
											<a href="<?php echo "$website_url/detailpost/$cond->seotitle"; ?>" class="image">
												<img src="<?=$website_url;?>/po-content/po-upload/medium/medium_<?=$cond->picture;?>" class="img-rounded" />
												<span class="hover-zoom"></span>
											</a>
											<h4><a href="<?php echo "$website_url/detailpost/$cond->seotitle"; ?>" class="name"><?=cuthighlight('title', $cond->title, '30');?>...</a></h4>
											<div class="categories"><?=cuthighlight('post', $cond->content, '100');?>...</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Category 2 -->
		<section class="portfolio-widget">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="portfolio-info text-center">
							<h3 class="title-karir">
								<a href="<?=$website_url;?>/category/karir">
									<span>KARIR</span>
								</a>
							</h3>
						</div>
						<div class="row-content">
							<div class="col-sm-12">
								<div class="row">
									<?php
										$tablecona = new PoTable('post');
										$conas = $tablecona->findAllLimitByAnd(id_post, id_category, active, '1', 'Y', DESC, '2');
										foreach($conas as $cona){
									?>
									<div class="col-sm-6">
										<!-- Portfolio Item in Widget -->
										<div class="portfolio-item">
											<a href="<?php echo "$website_url/detailpost/$cona->seotitle"; ?>" class="image">
												<img src="<?=$website_url;?>/po-content/po-upload/medium/medium_<?=$cona->picture;?>" class="img-rounded" />
												<span class="hover-zoom"></span>
											</a>
											<h4><a href="<?php echo "$website_url/detailpost/$cona->seotitle"; ?>" class="name"><?=cuthighlight('title', $cona->title, '30');?>...</a></h4>
											<div class="categories"><?=cuthighlight('post', $cona->content, '100');?>...</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
						<p>&nbsp;</p>
					</div>
					<div class="col-md-6">
						<div class="portfolio-info text-center">
							<h3 class="title-pbj">
								<a href="<?=$website_url;?>/category/pengadaan-barang-dan-jasa">
									<span>PENGADAAN BARANG DAN JASA</span>
								</a>
							</h3>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="row-content">
									<?php
										$tableconb = new PoTable('post');
										$conbs = $tableconb->findAllLimitByAnd(id_post, id_category, active, '2', 'Y', DESC, '2');
										foreach($conbs as $conb){
									?>
									<div class="col-sm-6">
										<!-- Portfolio Item in Widget -->
										<div class="portfolio-item">
											<a href="<?php echo "$website_url/detailpost/$conb->seotitle"; ?>" class="image">
												<img src="<?=$website_url;?>/po-content/po-upload/medium/medium_<?=$conb->picture;?>" class="img-rounded" />
												<span class="hover-zoom"></span>
											</a>
											<h4><a href="<?php echo "$website_url/detailpost/$conb->seotitle"; ?>" class="name"><?=cuthighlight('title', $conb->title, '30');?>...</a></h4>
											<div class="categories"><?=cuthighlight('post', $conb->content, '100');?>...</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Call for Action Button -->
		<!-- <div class="container">
			<div class="row vspace">
				<div class="col-md-12">
					<div class="callout-action">
						<h2>Get touch and contact us</h2>
						<div class="callout-button">
							<a href="<?=$website_url;?>/contact" class="btn btn-secondary">Contact Us</a>
						</div>
					</div>
				</div>
			</div>
		</div> -->


<!-- 
*******************************************************
	Include Footer Template
******************************************************* 
-->
<?php include_once "po-content/$folder/footer.php"; ?>
<?php } ?>