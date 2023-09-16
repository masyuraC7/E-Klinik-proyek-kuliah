<!-- cek permission login -->
<?php
    session_start();

    if (!isset($_SESSION['profesi']) == "admin") {
      echo "<script>alert('Anda tidak memiliki akses pada halaman ini')</script>";

      header("location: ../login.php");
    }

    include "header.php";
?>

<title>E-Klinik Dashboard - Admin </title>

<div class="page-heading">
    <h2>Dashboard - Admin</h2>
    <br>
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Pasien Poliklinik</h5>
                        <h6 class="text-muted font-semibold">
                            <?php
                                $sql = "SELECT * FROM db_pasien_terbaru where layanan = 'Poliklinik';";
                                $query = mysqli_query($conn, $sql);
                                $rowcount = mysqli_num_rows($query);
                                echo $rowcount;
                            ?>
                        </h6>
                        <a href="poliklinik-admin.php" class="btn btn-primary">Lihat Data</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Pasien Umum</h5>
                        <h6 class="text-muted font-semibold">
                            <?php
                                $sql = "SELECT * FROM db_pasien_terbaru where layanan = 'Dokter Umum';";
                                $query = mysqli_query($conn, $sql);
                                $rowcount = mysqli_num_rows($query);
                                echo $rowcount;
                            ?>
                        </h6>
                        <a href="index-umum.php" class="btn btn-primary">Lihat Data</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Pasien</h5>
                        <h6 class="text-muted font-semibold">
                            <?php
                                $sql = "SELECT * FROM db_pasien_terbaru;";
                                $query = mysqli_query($conn, $sql);
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
</div>

<h4>Data Pendaftar Terbaru</h4>
<br>
<section class="section">
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="tablefilter">
                <div class="row mb-3">
                    <div class="col-sm-3 col-md-3">
                        <iframe id="txtArea1" style="display:none"></iframe>
                        <button class="btn btn-success" id="btnExport" onclick="fnExcelReport();"> Download Laporan </button>
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
                        <th>Layanan</th>
                        <th>No. Telp</th>
                        <th>Kota</th>
                        <th>Tanggal Lahir</th>
                        <th>Tanggal Input</th>
                    </tr>
                </thead>
                <tbody id="dataTable1">
                      <?php
                          $sql = "SELECT * FROM db_pasien_terbaru ORDER BY tanggalinput desc;";
                          $query = mysqli_query($conn, $sql);
                          while ($row = mysqli_fetch_array($query)) {
                      ?>
                      <tr>
                          <td><?= $row['nama']; ?></td>
                          <td><?= $row['layanan']; ?></td>
                          <td><?= $row['no_telp']; ?></td>
                          <td><?= $row['kota']; ?></td>
                          <td><?= $row['tanggallahir']; ?></td>
                          <td><?= $row['tanggalinput']; ?></td>
                      </tr>
                      <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<script src="../assets/extensions/jquery/jquery.min.js"></script>
<script src="../assets/js/datatables.min.js"></script>
<script src="../assets/js/pages/datatables.js"></script>
<!-- Need: Apexcharts -->
<script src="../assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="../assets/js/pages/dashboard.js"></script>
<script>
    document.querySelector('#dashboard').classList.add('active');

    function fnExcelReport(){
        var tab_text = "<table border='2px'> <tr bgcolor='#87AFC6'>";
        var textRange, j = 0;

        tab = document.getElementById('table1'); // id of table

        for(j = 0 ; j < tab.rows.length ; j++) 
        {     
            tab_text = tab_text + tab.rows[j].innerHTML + "</tr>";
        }

        tab_text = tab_text+"</table>";
        tab_text = tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
        tab_text = tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
        tab_text = tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // removes input params

        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE "); 

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
        {
            txtArea1.document.open("txt/html", "replace");
            txtArea1.document.write(tab_text);
            txtArea1.document.close();
            txtArea1.focus();

            sa = txtArea1.document.execCommand("SaveAs", true, "Laporan.xlsx");
        }
        //other browser not tested on IE 11
        else sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));

        return (sa);
    }
</script>

<?php include "footer.php"; ?>