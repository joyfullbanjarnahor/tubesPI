<?php
require 'PHPMailer/src/PHPMailer.php' ;
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
 
$koneksi = mysqli_connect('db','root','example','donasi');; //memulai koneksi ke database
// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
$result = mysqli_query($koneksi, "SELECT * From donasi");
// Mengambil semua data email dalam bentuk array
$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
 
foreach ($result as $key => $value) { //mengirim email untuk setiap baris data
    $mail =  new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP();
    $mail->IsHTML(true);
    $mail->SMTPAuth     = true;
    $mail->Host         = "nugrohoprayogo.com";
    $mail->Port         = 465;
    $mail->SMTPSecure   = "ssl";
    $mail->Username     = "cs@nugrohoprayogo.com";   //username SMTP
    $mail->Password     = "xxxxxxxxx";                //password SMTP
    $mail->From         = "cs@nugrohoprayogo.com";   //email pengirim
    $mail->FromName     = "Nugroho";                  //nama  pengirim
    $mail->AddAddress($value['email'], $value['nama']);//email dan nama penerima
    $mail->Subject      =  $value['alamat']; //judul email
    $mail->Body         =  "<b>Alamat :</b>".$value['alamat']; //isi   email
    $mail->AddAttachment("cpanel.png", "filesaya");
    if ($mail->Send()) {
        echo "Email sent successfully<br>";
    } else {
        echo "Email failed to send";
    }
}
mysqli_close($koneksi);