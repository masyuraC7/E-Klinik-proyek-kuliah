<?php
    session_start();

    if (!isset($_SESSION['profesi']) == "admin_poliklinik"){
      echo "<script>alert('Anda tidak memiliki akses pada halaman ini')</script>";
      
      header("location: ../login.php");
    }

    include "header.php";
?>

<title>E-Klinik Dashboard - Poliklinik </title>

<div class="page-heading">
    <h2>Dashboard - Poliklinik</h2>
    <br>
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pasien Perlu Tindakan</h5>
                        <h6 class="text-muted font-semibold">
                            <?php
                                $sql = "SELECT * FROM db_pasien_poliklinik where kondisi = 'Perlu Tindakan';";
                                $query = mysqli_query ($conn, $sql);
                                $rowcount = mysqli_num_rows($query);
                                echo $rowcount;
                            ?>
                        </h6>
                        <a href="ppt-poliklinik.php" class="btn btn-primary">Lihat Data</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pasien Dirawat</h5>
                        <h6 class="text-muted font-semibold">
                            <?php
                                $sql = "SELECT * FROM db_pasien_poliklinik where kondisi = 'Dirawat';";
                                $query = mysqli_query ($conn, $sql);
                                $rowcount = mysqli_num_rows($query);
                                echo $rowcount;
                            ?>
                        </h6>
                        <a href="dirawat-poliklinik.php" class="btn btn-primary">Lihat Data</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pasien Sembuh</h5>
                            <h6 class="text-muted font-semibold">
                                <?php
                                    $sql = "SELECT * FROM db_pasien_poliklinik where kondisi = 'Sembuh';";
                                    $query = mysqli_query ($conn, $sql);
                                    $rowcount = mysqli_num_rows($query);
                                    echo $rowcount;
                                ?>
                            </h6>
                        <a href="selesai-poliklinik.php" class="btn btn-primary">Lihat Data</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Pasien Poliklinik</h5>
                            <h6 class="text-muted font-semibold">
                                <?php
                                    $sql = "SELECT * FROM db_pasien_poliklinik";
                                    $query = mysqli_query ($conn, $sql);
                                    $rowcount = mysqli_num_rows($query);
                                    echo $rowcount;
                                ?>
                            </h6>
                        <a href="#" class="btn btn-primary">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4>Pasien Perlu Tindakan</h4>
    <br>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="tablefilter">
                    <div class="row mb-3">
                        <div class="col-sm-3 col-md-3">
                            <iframe id="txtArea1" style="display:none"></iframe>
                            <button class="btn btn-success" id="btnExport" onclick="fnExcelReport('table1');"> Download Laporan </button>
                        </div>
                        <div class="col-sm-9 col-md-9">
                            <div class="btn-group submitter-group" style="float: right;">
                                <div class="input-group-prepend">
                                    <div class="input-group-text text-bg-primary">Filter Waktu</div>
                                </div>
                                <select class="form-control status-dropdown">
                                    <option value="">Semua</option>
                                    <option value="week">Minggu Ini</option>
                                    <option value="month">Bulan Ini</option>
                                    <input class="d-none" type="text" id="typeFilter" value="">
                                    <input class="d-none" type="text" id="filterWaktu" value="">
                                </select>
                            </div>
                        </div>
                    </div>
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Jenis Klinik</th>
                            <th>No. Telp</th>
                            <th>Kota</th>
                            <th>Tanggal Lahir</th>
                            <th>Tanggal Input</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql = "SELECT * FROM db_pasien_poliklinik where kondisi = 'Perlu Tindakan' ORDER BY tanggalinput desc;";
                            $query = mysqli_query ($conn, $sql);

                            while ($row = mysqli_fetch_array($query))
                            {
                        ?>
                        <tr>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['jenis_klinik']; ?></td>
                            <td><?= $row['no_telp']; ?></td>
                            <td><?= $row['kota']; ?></td>
                            <td><?= $row['tanggallahir']; ?></td>
                            <td><?= $row['tanggalinput']; ?></td>
                            <td>
                                <span class="badge bg-danger">Perlu Tindakan</span>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <h4>Pasien Dirawat</h4>
    <br>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="tablefilter2">
                    <div class="row mb-3">
                        <div class="col-sm-3 col-md-3">
                            <iframe id="txtArea1" style="display:none"></iframe>
                            <button class="btn btn-success" id="btnExport" onclick="fnExcelReport('table1');"> Download Laporan </button>
                        </div>
                        <div class="col-sm-9 col-md-9">
                            <div class="btn-group submitter-group" style="float: right;">
                                <div class="input-group-prepend">
                                    <div class="input-group-text text-bg-primary">Filter Waktu</div>
                                </div>
                                <select class="form-control status-dropdown2">
                                    <option value="">Semua</option>
                                    <option value="week">Minggu Ini</option>
                                    <option value="month">Bulan Ini</option>
                                    <input class="d-none" type="text" id="typeFilter" value="">
                                    <input class="d-none" type="text" id="filterWaktu" value="">
                                </select>
                            </div>
                        </div>
                    </div>
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Jenis Klinik</th>
                            <th>No. Telp</th>
                            <th>Kota</th>
                            <th>Tanggal Lahir</th>
                            <th>Tanggal Input</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql = "SELECT * FROM db_pasien_poliklinik where kondisi = 'Dirawat' ORDER BY tanggalinput desc;";
                            $query = mysqli_query ($conn, $sql);

                            while ($row = mysqli_fetch_array($query))
                            {
                        ?>
                        <tr>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['jenis_klinik']; ?></td>
                            <td><?= $row['no_telp']; ?></td>
                            <td><?= $row['kota']; ?></td>
                            <td><?= $row['tanggallahir']; ?></td>
                            <td><?= $row['tanggalinput']; ?></td>
                            <td>
                                <span class="badge bg-warning"><?= $row['kondisi']; ?></span>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <h4>Riwayat Pasien Selesai</h4>
    <br>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="tablefilter3">
                    <div class="row mb-3">
                        <div class="col-sm-3 col-md-3">
                            <iframe id="txtArea1" style="display:none"></iframe>
                            <button class="btn btn-success" id="btnExport" onclick="fnExcelReport('table1');"> Download Laporan </button>
                        </div>
                        <div class="col-sm-9 col-md-9">
                            <div class="btn-group submitter-group" style="float: right;">
                                <div class="input-group-prepend">
                                    <div class="input-group-text text-bg-primary">Filter Waktu</div>
                                </div>
                                <select class="form-control status-dropdown3">
                                    <option value="">Semua</option>
                                    <option value="week">Minggu Ini</option>
                                    <option value="month">Bulan Ini</option>
                                    <input class="d-none" type="text" id="typeFilter" value="">
                                    <input class="d-none" type="text" id="filterWaktu" value="">
                                </select>
                            </div>
                        </div>
                    </div>
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Jenis Klinik</th>
                            <th>No. Telp</th>
                            <th>Kota</th>
                            <th>Tanggal Lahir</th>
                            <th>Tanggal Input</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql = "SELECT * FROM db_pasien_poliklinik where kondisi = 'Sembuh' ORDER BY tanggalinput desc;";
                            $query = mysqli_query ($conn, $sql);

                            while ($row = mysqli_fetch_array($query))
                            {
                        ?>
                        <tr>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['jenis_klinik']; ?></td>
                            <td><?= $row['no_telp']; ?></td>
                            <td><?= $row['kota']; ?></td>
                            <td><?= $row['tanggallahir']; ?></td>
                            <td><?= $row['tanggalinput']; ?></td>
                            <td>
                                <span class="badge bg-success">Sembuh</span>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<script src="../assets/extensions/jquery/jquery.min.js"></script>
<script src="../assets/js/datatables.min.js"></script>
<script src="../assets/js/pages/datatables.js"></script>
<script>
    document.querySelector('#dashboard').classList.add('active');
    document.querySelector('#dashboardLink').href = "index-poliklinik.php";
</script>

<?php include "footer.php"; ?>