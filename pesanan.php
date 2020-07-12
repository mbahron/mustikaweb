<html>
	
	<?php include 'header.php'?>

    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Halaman</a></span> <span>Pesanan</span></p>
            <h1 class="mb-0 bread">Pesanan Saya</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12">
				<form action="pesanan.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="InputEmail1">Nama</label>
						<input style="text-align: left;" type="name" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Masukkan nama anda">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Nomor HP</label>
						<input type="text" style="text-align: left;" class="form-control" id="nohp" name="nohp" placeholder="Masukkan nomor anda">
					</div>
					<div class="form-group">
						<label for="InputEmail1">Alamat</label>
						<input style="text-align: left;" type="name" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" placeholder="Masukkan alamat anda">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">DP Barang anda</label>
						<input type="text" style="text-align: left;" class="form-control" id="dpbarang" name="dpbarang" placeholder="Masukkan DP anda">
					</div>
					<div class="form-group">
						<label for="InputEmail1">Jumlah Pesanan</label>
						<input style="text-align: left;" type="name" class="form-control" id="jumlahpesanan" name="jumlahpesanan" aria-describedby="emailHelp" placeholder="Masukkan nama anda">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Tipe Pengiriman</label>
						<input type="text" style="text-align: left;" class="form-control" id="pengiriman" name="pengiriman" placeholder="Masukkan nomor anda">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Barang Pesanan</label>
						<input type="text" style="text-align: left;" class="form-control" id="barangpesanan" name="barangpesanan" placeholder="Masukkan barang pesanan">
					</div>
					<button type="submit" style="border-radius: 2px; width: 100%;" name="tambah" class="btn btn-primary">Submit</button>
				</form>

				<?php

				if(isset($_POST["tambah"])){
					$nama = $_POST["nama"];
					$nohp = $_POST["nohp"];
					$alamat = $_POST["alamat"];
					$dpbarang = $_POST["dpbarang"];
					$jumlahpesanan = $_POST["jumlahpesanan"];
					$pengiriman = $_POST["pengiriman"];
					$barangpesanan = $_POST["barangpesanan"];

					$result = mysqli_query($mysqli, "INSERT INTO tb_transaksi(nama,no_hp,alamat,dp_barang,jumlah_pesanan,tipe_pengiriman,barang_pesanan)
					VALUES('$nama','$nohp','$alamat','$dpbarang','$jumlahpesanan','$pengiriman','$barangpesanan')");

					echo "User added successfully. <a href='index.php'>View Users</a>";
				}

				?>

    			</div>
    		</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Jika anda mempunyai keluhan</h2>
          	<span>Kirim keluhan anda disini</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Masukkan email anda disini">
                <input type="submit" value="Kirim" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
	
	<?php include 'footer.php'?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>