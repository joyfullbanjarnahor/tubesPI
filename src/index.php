<?php
extract($_POST);
$con=mysqli_connect('db','root','example','donasi');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Alumni Berbagi</title>

<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="img/logo-title.png">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='style.css' rel='stylesheet' type='text/css'>
	<link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
<script type="text/javascript" src="js/jQuery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
<style type="text/css">
	* { margin: 0; padding: 0; }
	img { 
		max-width: 100%;
	 }
	.cycle-slideshow {
		width: 100%;
		max-width: 100%;
		display: block;
		position: relative;
		overflow: hidden;
	}
	.cycle-prev, .cycle-next {
		font-size: 200%;
		color: #fff;
		display: block;
		position: absolute;
		top: 50%;
		z-index: 9999;
		cursor: pointer;
		margin-top: -16px;
	}
	.cycle-prev { left: 62px; }
	.cycle-next { right: 62px; }
	.cycle-pager {
		position: absolute;
		width: 100%;
		height: 10px;
		bottom: 10px;
		z-index: 9999;
		text-align: center;
	}
	.cycle-pager span {
		text-indent: 100%;
		top: 100px;
		width: 10px;
		height: 10px;
		display: inline-block;
		border: 1px solid #fff;
		border-radius: 50%;
		margin: 0 10px;
		white-space: nowrap;
		cursor: pointer;
	}
	.cycle-pager-active { background-color: #fff; }
</style>

<a name="ancre"></a>
<div class="cache"></div>

<!-- HEADER -->

<div id="wrapper-header" style="background-color:#a0ff99;">
	<div id="main-header" class="object">
		<div class="logo"><img src="img/logoheader.png"></div>
   </div>

   <a class="logo2" href="donasisekarang.php"><img width="100px;" src="img/donasinow.png"></a>
</div>

<div class="cycle-slideshow" style="background-color: #e2ffff;">
	<span class="cycle-prev">&#9001;</span> <!-- Untuk membuat tanda panah di kiri slider -->
	<span class="cycle-next">&#9002;</span> <!-- Untuk membuat tanda panah di kanan slider -->
	<span class="cycle-pager"></span>  <!-- Untuk membuat tanda bulat atau link pada slider -->
	<?php
	$query=mysqli_query($con,"select * from carousel");
	while($data=mysqli_fetch_array($query))
	{
	?>
	<img src="img/carousel/<?php echo $data[3] ?>">
	<?php } ?>
</div>

<div id="wrapper-container">

	<div class="container object">
		<table>
			<tr>
				<td width="600px" style="padding-left: 100px;">
					<h1>Apa itu Alumni Berbagi?</h1><br><br>
					<p style="font-size: 20px;">Sebuah situs donasi yang didirikan oleh HIMATIF sebagai penghubung para alumni untuk membantu mahasiswa yang kurang mampu.<br><br>Berdiri sejak tahun 2021 serta mendapatkan izin dari Universitas, Alumni Berbagi dipercaya ribuan alumni dan berbagai fakultas lainnya sebagai jembatan kebaikan.</p>
				</td>
				<td align="center">
					<img width="400px;" src="img/joymarbun.png" style="padding-left: 100px;">
				</td>
			</tr>
			<tr>
				<td>
					<br><br><br><br>
				</td>
			</tr>
			<tr>
				<td align="center">
					<img width="500px;" src="img/alumni.jpeg" style="padding-left: 100px; border-radius: 20px;">
				</td>
				<td width="600px" style="padding-left: 100px;">
					<h1>Program CSR yang Kami Jalankan</h1><br><br>
					<p style="font-size: 20px;">Supaya jembatan ini semakin kuat, kolaborasi adalah kunci agar kebaikan terus tersalurkan. 
						<br><br>
						Sudah lebih dari 15 fakultas yang bekerja sama dengan Alumni Berbagi dan banyak mahasiswa mendapatkan bantuan.

Apa saja yang bisa BenihBaik tawarkan?</p>
				</td>
			</tr>
		</table>
	</div>
</div>

<div id="wrapper-thank">
    	<div class="thank">
        	<div class="thank-text"><center><span style="font-size:40px; font-style: bold; font-family: Cambria; color:#000;">TERIMA KASIH PADA ALUMNI YANG SUDAH BERDONASI</span></center></div>
    	</div>
	</div>

	<div id="wrapper-container">
		<div class="container object">
				<div id="main-container-image">
							<?php
         					$query=mysqli_query($con,"SELECT * from donasi where status='Sudah Diterima' or status='Sudah Diterima' ORDER BY id DESC");
          					while($a=mysqli_fetch_array($query)) {
           				?>

						<section class="work">
						<figure class="white">
							<a href="#" style="pointer-events: none; cursor: default;">
								<img src="img/donasi/<?php echo $a[6] ?>" alt="" style="height:200px;" />
									<dl>
										<dt>Barang yang di donasi</dt>
										<dd><?php echo $a[3] ?></dd>	
									</dl>
							</a>
				    			<div id="wrapper-part-info">
				       			<div class="part-info-image"></div>
				       				<div id="part-info"><?php echo $a[2] ?></div>
								</div>
						</figure>	
						</section>   
						<?php } ?>
				</div>	
		</div> 

	<div id="wrapper-thank2">
    	<div class="thank">
        	<div class="thank-text"><span style="letter-spacing:-5px;"></span></div>
    	</div>
	</div>
	    
	<div id="main-container-footer">
		<div class="container-footer">
        	
            <div id="row-1f">
            	<div class="text-row-1f"><br>
            		<center><h1 style="font-size: 35px; color: #124; ">Yuk Donasi Sekarang!</h1>
            		<p style="width: 500px; font-size: 17px; padding-top: 20px; color: #124;">Bergabung dengan ribuan alumni yang telah menggunakan Alumni Berbagi untuk membantu yang membutuhkan bantuan</p></center>
            	</div>
            </div>

            <div id="row-1f">
            	<div class="text-row-1f">
            		<table style="padding-left: 100px;">
            			<tr>
            				<td><a href="donasisekarang.php"><img width="200px;" src="img/donasinow.png"></a></td>
            				<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            				<td><a href="donasisekarang.php"><img width="200px;" src="img/logoheader.png"></td>
            				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            				<td><a href="donasisekarang.php"><img width="200px;" src="img/usu.png"></td>
            			</tr>
            		</table>
            	</div>
            </div>
            
		</div>
	</div>
    
    
    <div id="wrapper-copyright">
		<div class="copyright">
    		<div class="copy-text object">2021 © Universitas Sumatera Utara</div>
    	</div>
    </div>

</div>
<!-- SCRIPT -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
    <script type="text/javascript" src="js/jquery-animate-css-rotate-scale.js"></script>
	<script type="text/javascript" src="js/fastclick.min.js"></script>
	<script type="text/javascript" src="js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" src="js/jquery.animate-shadow-min.js"></script>    
	<script type="text/javascript" src="js/main.js"></script>
	<script>

function preloader() {
	if (document.images) {
		var img1 = new Image();

		img1.src = "img/logoheader.png";
	}
}
function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			if (oldonload) {
				oldonload();
			}
			func();
		}
	}
}
addLoadEvent(preloader);
</script>
</body>
</html>