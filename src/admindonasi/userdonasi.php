<!-- Image Gallery -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h1>
                                Alumni Yang Sudah Berdonasi
                            </h1>
                        </div>

                        <!--Proses-->
                        <?php
                            $halaman = 6;
                            $page = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
                            $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                            $query=mysqli_query($con,"select * from donasi where status='Sudah Diterima' or status='Sudah Diterima'");
                            $total=mysqli_num_rows($query);
                            $pages = ceil($total/$halaman); 
                            ?>
                        <!--END Proses-->
                        <div class="body">
                        
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                            <!--Proses tampil-->
                        <?php
                                $query = mysqli_query($con,"select * from donasi where status='Sudah Diterima' or status='Sudah Diterima' LIMIT $mulai, $halaman");
                                $no =$mulai+1;
                                while($a=mysqli_fetch_array($query)) {
                        ?>
                        <!--END Proses Tampil-->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../img/donasi/<?php echo $a[6] ?>" data-sub-html="Dari : <?php echo $a[2] ?> Nama/Jenis Barang : <?php echo $a[3] ?> Doa : <?php echo $a[5] ?> ">
                                        <img class="img-responsive thumbnail" src="../img/donasi/<?php echo $a[6] ?>" style="height:200px; width:200px;">
                                    </a>
                                    <b style="padding-left: 20px;"><?php echo $a[2] ?></b>
                                </div>
                        <?php } ?>
                            </div>

                            <ul class="pagination">         
                            <?php for ($i=1; $i<=$pages ; $i++){ ?>
                              <p>Halaman <a href="?halaman=daftar-donasi&page=<?php echo $i; ?>"><?php echo $i; ?></a></p>
                             
                              <?php } ?>                     
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Light Gallery Plugin Js -->
    <script src="plugins/light-gallery/js/lightgallery-all.js"></script>

    <!-- Custom Js -->
    <script src="js/pages/medias/image-gallery.js"></script>