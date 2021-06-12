<?php
extract($_POST);
$con=mysqli_connect('db','root','example','donasi');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Alumni Berbagi</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='style.css' rel='stylesheet' type='text/css'>
</head>

<script type="text/javascript" src="js/jQuery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
<body>
<div align="center">
    <?php
        if(isset($_POST['simpan']))
            { 
                $getId=mysqli_fetch_row(mysqli_query($con,"select max(id) from donasi")); 
                if(!empty($_FILES['foto']['tmp_name']))
                    { 
                        $ext=strtolower(substr($_FILES['foto']['name'],-3));
                        if($ext=='gif')
                        $ext=".gif";
                            else
                                $ext=".png";
                                move_uploaded_file($_FILES['foto']['tmp_name'], "img/donasi/" . basename(($getId[0]+1).$ext));
                    }
                                
            mysqli_query($con,"insert into donasi values('','3','$nama','$namabarang','$email','$motivasi','".($getId[0]+1).$ext."','$telepon','','','Belum Diterima')");
                    echo "
                        <script>
                        location.assign('index.php');
                        </script>
                        ";
            }
                if(isset($_GET['pesan'])=='true');
                ?>

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">MARI DONASI SEKARANG</h2>
                </div>
                <div class="card-body" align="left">
                    <form action="" method="POST" enctype="multipart/form-data" >
                        <div class="form-row">
                            <div class="name">Nama</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" id="nama" name="nama" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Barang Donasi</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" id="namabarang" name="namabarang" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" id="email" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nomor Telepon</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="phone" id="telepon" name="telepon" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Motivasi</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5"  name="motivasi" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Foto Barang</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" id="foto" name="foto"  required>
                                </div>
                            </div>
                        </div>
                        <?php
                                $query=mysqli_query($con,"select * from alamat");
                                while($a=mysqli_fetch_array($query)) {
                                ?>

                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" name="alamatadmin" class="form-control no-resize" readonly><?php echo $a[1] ?></textarea>
                                    </div>
                                </div>
                                <?php } ?>
                        <div style="padding-left: 190px;">
                            <button class="btn btn--radius-2 btn--red" name="simpan" type="submit">DONASI SEKARANG</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="wrapper-copyright">
        <div class="copyright">
            <center><div class="copy-text object">2021 © Universitas Sumatera Utara</div></center>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>