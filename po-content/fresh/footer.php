<?php if ($mod==""){
	header('location:../../404.php');
}else{
?>
		<!-- Site Footer -->
		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<a href="#"><img src="<?=$website_url;?>/po-content/<?=$folder;?>/assets/images/logo.png" /></a>
					</div>
					<div class="col-sm-3">
						<h5 style="color:#fff">Address</h5>
						<p>Jln. Bukit Jarian No. 40 Ciumbuleuit<br />Bandung, Jawa Barat<br />Indonesia</p>
					</div>
					<div class="col-sm-4">
						<h5 style="color:#fff">Contact</h5>
						<p>Customer Service: <br />&nbsp &nbsp +62 22 203 4446 / 22 203 1427<br />SMS Center:<br />&nbsp &nbsp +62 8112294595<br />e-mail:<br />&nbsp &nbsp rsp_bandung@yahoo.co.id</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6" style="color:#fff">
						Copyright © 2015 RS Paru Dr. H. A. Rotinsulu - All Rights Reserved. 
					</div>
				</div>
			</div>
		</footer>
	</div>

    <!-- JavaScript -->
	<script src="<?=$website_url;?>/po-content/<?=$folder;?>/assets/js/gsap/main-gsap.js"></script>
	<script src="<?=$website_url;?>/po-content/<?=$folder;?>/assets/js/bootstrap.js"></script>
	<script src="<?=$website_url;?>/po-content/<?=$folder;?>/assets/js/joinable.js"></script>
	<script src="<?=$website_url;?>/po-content/<?=$folder;?>/assets/js/resizeable.js"></script>
	<script src="<?=$website_url;?>/po-content/<?=$folder;?>/assets/js/neon-slider.js"></script>
	<script src="<?=$website_url;?>/po-content/<?=$folder;?>/assets/js/neon-custom.js"></script>
</body>
</html>
<?php } ?>