<h1 align="center">Donasi Alumni Universitas Sumatera Utara</h1><br><br>

            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                        <!--Proses-->
                        <?php
                                $query=mysqli_query($con,"SELECT * from donasi where status='Belum Diterima'");
                                $jumlah=mysqli_num_rows($query);
                                while($a=mysqli_fetch_array($query)) {
                         } ?>
                        <!--END Proses-->
                            <div class="text">BELUM DITERIMA</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlah ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                        <!--Proses-->
                        <?php
                                $query=mysqli_query($con,"SELECT * from donasi where status='Sudah Diterima'");
                                $jumlah=mysqli_num_rows($query);
                                while($a=mysqli_fetch_array($query)) {
                         } ?>
                        <!--END Proses-->
                            <div class="text">SUDAH DITERIMA</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlah ?>" data-speed="15" data-fresh-interval="20"></div>    
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">shopping_cart</i>
                        </div>
                        <div class="content">
                        <!--Proses-->
                        <?php
                                $query=mysqli_query($con,"SELECT * from donasi");
                                $jumlah=mysqli_num_rows($query);
                                while($a=mysqli_fetch_array($query)) {
                         } ?>
                        <!--END Proses-->
                            <div class="text">JUMLAH DONASI</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlah ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
