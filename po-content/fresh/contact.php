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
		<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript">
			function initialize()
			{
				var mapDiv = document.getElementById('map');
				var map = new google.maps.Map(mapDiv, {
					center: new google.maps.LatLng(-6.878376, 107.606620),
					zoom: 16,
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					scrollwheel: false
				});
				new google.maps.Marker({
					position: new google.maps.LatLng(-6.241783, 106.836029),
					map: map
				});
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>

		<section class="contact-map" id="map"></section>

		<section class="contact-container">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 sep">
						<h4>Untuk berhungungan dengan kami, kirim kami e-mail!</h4>
						<form class="contact-form" role="form" action="<?=$website_url;?>/contact.php" method="post">
							<div class="form-group">
								<input type="text" name="name_contact" class="form-control" placeholder="Name" />
							</div>
							<div class="form-group">
								<input type="text" name="email_contact" class="form-control" placeholder="E-mail" />
							</div>
							<div class="form-group">
								<input type="text" name="subject_contact" class="form-control" placeholder="Subject" />
							</div>
							<div class="form-group">
								<textarea class="form-control" name="message_contact" placeholder="Message" rows="6"></textarea>
							</div>
							<div class="form-group text-right">
								<button class="btn btn-primary" name="send">Kirim</button>
							</div>
						</form>
					</div>
					<div class="col-sm-offset-1 col-sm-5">
						<div class="info-entry">
							<h4>Customer Service (022-203 4446)</h4>
							<p>Pelayanan Customer Service mulai pukul 07.00 - 15.00 WIB</p>
						</div>
						<div class="info-entry">
							<h4>SMS Center (0811 2294 595)</h4>
							<p>1. Jadwal pelayanan poliklinik ketik:<br/>&nbsp &nbsp &nbsp<strong>jadwal poli</strong></p>
							<p>2. Informasi pelayanan ketik:<br/>&nbsp &nbsp &nbsp<strong>info layanan</strong></p>
							<p>3. Informasi ketersediaan tempat tidur kelas VIP ketik:<br/>&nbsp &nbsp &nbsp<strong>info bed vip</strong></p>
							<p>4. Informasi ketersediaan tempat tidur kelas 1 ketik:<br/>&nbsp &nbsp &nbsp<strong>info bed 1</strong></p>
							<p>5. Informasi ketersediaan tempat tidur kelas 2 ketik:<br/>&nbsp &nbsp &nbsp<strong>info bed 2</strong></p>
							<p>6. Informasi ketersediaan tempat tidur kelas 3 ketik:<br/>&nbsp &nbsp &nbsp<strong>info bed 3</strong></p>
							<p>7. Informasi ketersediaan tempat tidur ruang ICU ketik:<br/>&nbsp &nbsp &nbsp<strong>info bed icu</strong></p>
							<p>8. Jika anda ingin mengirimkan saran dan keluhan, ketik:<br/>&nbsp &nbsp &nbsp<strong>saran</strong>&nbsp isi saran (uraian saran yang akan dikirim)</p>
							<p>9. Jika anda ingin mengirimkan pertanyaan terkait pelayanan, ketik:<br/>&nbsp &nbsp &nbsp<strong>tanya</strong>&nbsp isi pertanyaan (uraian pertanyaan yang akan dikirim)</p>
							<h4>Kirim format di atas ke 0811 2294 595</h4>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="content-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
					</div>
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