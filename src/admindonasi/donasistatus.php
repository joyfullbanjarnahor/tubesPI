    <!-- Page Loader -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h1>
                                STATUS DONASI
                            </h1>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Nama Pendonasi</th>
                                        <th>Nama Barang</th>
                                        <th>Email</th>
                                        <th>Diterima Oleh</th>
                                        <th>Tanggal Kirim</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nama Pendonasi</th>
                                        <th>Nama Barang</th>
                                        <th>Email</th>
                                        <th>Diterima Oleh</th>
                                        <th>Tanggal Kirim</th>
                                        <th>Status</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <!--proses-->
                                    <?php
                                        $id=$_SESSION['kosong'];
                                        $query=mysqli_query($con,"SELECT * from donasi where iduser='$id' order by id desc");
                                        while($a=mysqli_fetch_array($query)) {
                                        ?>
                                    <tr>
                                        <td><a href="index.php?halaman=penerima&id=<?php echo $a[0] ?>"><?php echo $a[2] ?></td>
                                        <td><?php echo $a[3] ?></td>
                                        <td><?php echo $a[4] ?></td>
                                        <td><?php echo $a[8] ?></td>
                                        <td><?php echo $a[9] ?></td>
                                        <td><?php echo $a[10] ?></td>
                                    </tr>
                                    <?php } ?>
                                    <!--END Proses-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="js/pages/tables/jquery-datatable.js"></script>