 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container">


		<form action="" method="POST" class="" >
	<!-- 	Menampilkan Nama Bulan dalam Bahasa Indonesia	 -->
			<label for="">Click Tombol Tampilkan Untuk menampilkan Bulan</label>
			<label for="" name="bulan" ></label>
			<br>
			<button class="btn btn-primary" name="tampilkan">Tampilkan</button>

			<?php 
			$bulan = date('m');
			switch ($bulan) {
				case '01' : $bulan = "Januari"; break;
				case '02' : $bulan = "Februari"; break;
				case '03' : $bulan = "Maret"; break;
				case '04' : $bulan = "April"; break;
				case '05' : $bulan = "Mei"; break;
				case '06' : $bulan = "Juni"; break;
				case '07' : $bulan = "Juli"; break;
				case '08' : $bulan = "Agustus"; break;
				case '09' : $bulan = "September"; break;
				case '10' : $bulan = "Oktober"; break;
				case '11' : $bulan = "November"; break;
				case '12' : $bulan = "Desember"; break;

			}
			if(isset($_POST['tampilkan'])){
				echo "<label class=''> Bulan : $bulan </label>";

			}
			?>
		<!-- 	Akhir Tampilkan bulan -->
		<hr>
	
	<!-- 	Menampilkan Bilangan Ganjil dan Genap	 -->
			<div class="form-group">
				<label for="" >Masukkan Angka Bilangan</label>
				<input type="text" class="form-control" style="width:200px;" name="angka">
			</div>
			<button class="btn btn-primary" name="ganjil">Ganjil</button>
			<button class="btn btn-primary" name="genap">Genap</button><br>
	
			<?php 
			
			if(isset($_POST['ganjil'])){
				$ganjil = $_POST['angka'];
				$angka = 1;
				for($angka =1; $angka <= $ganjil; $angka+=2){
					echo "<label class=''>$angka</label>";
				}		
			}elseif(isset($_POST['genap'])){
				$ganjil = $_POST['angka'];
				$angka = 1;
				for($angka =2; $angka <= $ganjil; $angka+=2){
					echo "<label class='text-center' style='width'>$angka</label>";
				}		
			}
		 ?> 
		<!-- 	Akhir menampilkan bilangan ganjil dan genap	-->
		 <hr>
		<!--	Biodata  -->
		 	<div class="row">
		 		<div class="col-4">
		 			<div class="card bg-primary  my-5 text-center" style="width:;">
		 	
				 	<div class="card-body">
				 		<h1 class="card-title" style="color: white;">Biodata</h1>
				 		<div class="form-group">
				 			<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
				 		</div>
				 		<div class="form-group">
				 			<input type="text" class="form-control" placeholder="Nama Panggilan" name="panggilan">
				 		</div>
				 		<div class="form-group">
				 			<input type="text" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir">
				 		</div>
				 		<div class="form-group">
				 			<input type="text" class="form-control" placeholder="Jenis Kelamin"
				 			name="jk">
				 		</div>
				 		<div class="form-group">
				 			<input type="text" class="form-control" placeholder="Kota" name="kota">
				 		</div>
				 		<div class="form-group">
				 			<input type="text" class="form-control" placeholder="No Telp" name="telp">
				 		</div>
				 		<div class="form-group">
				 			<input type="text" class="form-control" placeholder="Alamat" name="alamat">
				 		</div>
				 		<button class="btn btn-light btn-outline-success" name="biodata">Simpan</button>
				 		

				 		
				 	</div>

		 	
		 </div>
		 		</div>
		 		<div class="col-8">
		 			<table class="table my-5">
		 				<thead>
		 					  <tr>
							      <th scope="col">Nama Lengkap</th>
							      <th scope="col">Nama Panggilan</th>
							      <th scope="col">Tanggal Lahir</th>
							      <th scope="col">Jenis Kelamin</th>
							      <th scope="col">Kota</th>
							      <th scope="col">No Telpon</th>
							      <th scope="col">Alamat</th>
							   </tr>
		 				</thead>

		 				<tbody>	
						<?php 	
							if(isset($_POST['biodata'])){
								$nama = $_POST['nama'];
								$panggilan = $_POST['panggilan'];
								$tanggal_lahir = $_POST['tanggal_lahir'];
								$jk = $_POST['jk'];
								$kota = $_POST['kota'];
								$telp = $_POST['telp'];
								$alamat = $_POST['alamat'];
							    $biodata = array(
							    	"nama" => $nama,
							    	"panggilan" => $panggilan,
							    	"tanggal_lahir" => $tanggal_lahir,
							    	"jk" => $jk,
							    	"kota" => $kota,
							    	"telp" => $telp,
							    	"alamat" => $alamat,



								);
                                
                                echo "<tr>
                                <th>".$biodata['nama']."</th>".
                                "<th>". $biodata['panggilan']."</th>".
                                "<th>". $biodata['tanggal_lahir']."</th>".
                                "<th>". $biodata['jk']."</th>".
                                "<th>". $biodata['kota']."</th>".
                                "<th>". $biodata['telp']."</th>".    
                                "<th>". $biodata['alamat']."</th>"
                                  
                                
                                ."</tr>";

							}
						 ?>

<!--
								<tr>	
									<th><?php  echo $biodata['nama']?></th>
									<th><?php  echo $biodata['panggilan']?></th>
									<th><?php  echo $biodata['tanggal_lahir']?></th>
									<th><?php  echo $biodata['jk']?></th>
									<th><?php  echo $biodata['kota']?></th>
									<th><?php  echo $biodata['telp']?></th>
									<th><?php  echo $biodata['alamat']?></th>
								</tr>		
-->
		 				</tbody>
		 			</table>
		 		</div>
		 	</div>
			<!-- 	Akhir Menampilkan Biodata	 -->

		 	<hr>	
		<!-- 	Menampilkan Hari dan tanggal dalam bahasa indonesia	 -->

		 	 <button class="btn btn-primary" name="fungsi_tanggal">Tampilkan fungsi tanggal</button>
		 	 <?php 	
		 	function hari_tanggal()
		 	{
		 			$bulan = date('m');
					switch ($bulan) {
						case '01' : $bulan = "Januari"; break;
						case '02' : $bulan = "Februari"; break;
						case '03' : $bulan = "Maret"; break;
						case '04' : $bulan = "April"; break;
						case '05' : $bulan = "Mei"; break;
						case '06' : $bulan = "Juni"; break;
						case '07' : $bulan = "Juli"; break;
						case '08' : $bulan = "Agustus"; break;
						case '09' : $bulan = "September"; break;
						case '10' : $bulan = "Oktober"; break;
						case '11' : $bulan = "November"; break;
						case '12' : $bulan = "Desember"; break;

						}

					$hari = date('D');
					switch ($hari) {
						case 'Mon' : $hari = "Senin"; break;
						case 'Tue' : $hari = "Selasa"; break;
						case 'Wed' : $hari = "Rabu"; break;
						case 'Thu' : $hari = "Kamis"; break;
						case 'Fri' : $hari = "Jumat"; break;
						case 'Sat' : $hari = "Sabtu"; break;
						case 'Sun' : $hari = "Minggu"; break;

						}
					$tanggal = date('d');
					$tahun = date('Y');

		 			$tanggal  = "$hari, ". $tanggal." ". $bulan." ".$tahun  ;
		 			echo $tanggal;
		 		}

		 		if(isset($_POST['fungsi_tanggal'])){
		 			echo "<label class='text-center'>".hari_tanggal()."</label>";
		 		}else{
                  
                }
		 		
		 	 ?>
			
		<!-- 	Akhir Menampilkan hari dan tanggal dalam bahasa indonesia	-->
		</form>
	</div>  	
	
</body>
</html>









