<?php 
// definisi interface waktuinterface
interface WaktuInterface{
	public function get_waktu();
}

// definisi interface ucapaninterface
interface UcapanInterface{
	public function get_ucapan();
}
 
// abstract class 
abstract class PembagianWaktu
{
	private $waktu;
 
	public function set_waktu($waktu){
		$this->waktu = $waktu;
	}
 
	public function get_waktu()
	{
		return $this->waktu;
	}
}
// class pagi
class pagi extends PembagianWaktu implements WaktuInterface, UcapanInterface{
	public function get_ucapan()
	{
		return 'Selamat Pagi (04.00 - 10.00)';
	}
}
// class siang
class siang extends PembagianWaktu implements WaktuInterface, UcapanInterface{
	public function get_ucapan()
	{
		return 'Selamat Siang (10.00 - 14.00)';
	}
}
// class sore
class sore extends PembagianWaktu implements WaktuInterface, UcapanInterface{
	public function get_ucapan()
	{
		return 'Selamat Sore (14.00 - 18.30)';
	}
}
// class malam
class malam extends PembagianWaktu implements WaktuInterface, UcapanInterface{
	public function get_ucapan()
	{
		return 'Selamat Malam (18.30 - 04.00)';
	}
}
 
// buat objek dari class pagi
$pagi = new pagi();
$pagi->set_waktu('Pagi');
// buat objek dari class siang
$siang = new siang();
$siang->set_waktu('Siang');
// buat objek dari class sore
$sore = new sore();
$sore->set_waktu('Sore');
// buat objek dari class malam
$malam = new malam();
$malam->set_waktu('Malam');
?>

<html lang="en">
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <title>Praktikum 1 OOP PEMWEB LANJUTAN</title>
 </head>
 <body>

 <div class="container text-center">
 	<h1>Pembagian Waktu</h1>
 		<div class="row justify-content-md-center mt-5">
 			<div class="col-auto">
 				<div class="card">
 					<div class="card-body rounded-circle">
 						<h5 class="card-title"><?php echo $pagi->get_waktu(); ?></h5>
						<h5 class="card-title"><?php echo $pagi->get_ucapan(); ?></h5>
 					</div>
 				</div>
 			</div>
			 <div class="col-auto">
 				<div class="card">
 					<div class="card-body rounded-circle">
 						<h5 class="card-title"><?php echo $siang->get_waktu(); ?></h5>
						<h5 class="card-title"><?php echo $siang->get_ucapan(); ?></h5>
 					</div>
 				</div>
 			</div>
			 <div class="col-auto">
 				<div class="card">
 					<div class="card-body rounded-circle">
 						<h5 class="card-title"><?php echo $sore->get_waktu(); ?></h5>
						 <h5 class="card-title"><?php echo $sore->get_ucapan(); ?></h5>
 					</div>
 				</div>
 			</div>
			 <div class="col-auto">
 				<div class="card">
 					<div class="card-body rounded-circle">
 						<h5 class="card-title"><?php echo $malam->get_waktu(); ?></h5>
						 <h5 class="card-title"><?php echo $malam->get_ucapan(); ?></h5>
 					</div>
 				</div>
 			</div>
 		</div>
		<div class="tombol">
			<a href="/oop1/class.pdf" alt="Download button" class="btn btn-primary profile-button btn btn-danger" style="margin:30px;">Download Laporan (PDF)
			<i class="fa-solid fa-cloud-arrow-down"></i>
			</a>
		</div>

		<footer class="bg-light text-center text-white fixed-bottom">
  			<div class="container p-4 pb-0">
    			<section class="mb-4">
     				 <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="https://github.com/shabianay?tab=repositories" role="button"> Visit My Github <i class="fab fa-github"></i></a>
    			</section>
  			</div>
		</footer>
 </div>
 
 <script src="https://kit.fontawesome.com/5a5f1555f8.js" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </body>
 </html>