<?php
    session_start();

    if (!isset($_SESSION['profesi']) == "admin_poliklinik"){
      echo "<script>alert('Anda tidak memiliki akses pada halaman ini')</script>";
      
      header("location: ../login.php");
    }

    include "header.php";
?>

<title>Pasien Dirawat - Dokter poliklinik </title>

<?php
    $sql = "SELECT * FROM db_pasien_poliklinik where kondisi = 'Dirawat' ORDER BY tanggalinput desc;";
    $query = mysqli_query ($conn, $sql);
    $rowcount = mysqli_num_rows($query);
?>
<h4>Data Pasien Dirawat (Total : <?= $rowcount; ?>)</h4>
<br>
<section class="section">
    <?php
        while ($row = mysqli_fetch_array($query))
        {
    ?>
    <div class="card">
        <div class="card-body">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#A<?= $row['id_poliklinik']; ?>" aria-expanded="false" aria-controls="A<?= $row['id_poliklinik']; ?>">
                            <?= $row['nama'].' - '.$row['tanggalinput']; ?>
                        </button>
                    </h2>

                    <div id="A<?= $row['id_poliklinik']; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="container text-start">
                                <div class="row text-black">
                                    <div class="col-md-4">
                                        <label>Tanggal Input</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <p> <?= $row['tanggalinput']; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Nama Lengkap</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <p> <?= $row['nama']; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Kota</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <p> <?= $row['kota']; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <p> <?= $row['tanggallahir']; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <p> <?= $row['email']; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <label>No. HP</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <p> <?= $row['no_telp']; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Jenis Klinik</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <p> <?= $row['jenis_klinik']; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Kondisi</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <span class="badge bg-warning"><?= $row['kondisi']; ?></span>
                                    </div>
                                    <br><br>
                                    <center>
                                        <div class="buttons">
                                            <a href="update-poliklinik.php?id=<?= $row['id_poliklinik']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="../controller/aksi.php?aksi=hapus-poliklinik&id=<?= $row['id_poliklinik']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                                        </div>
                                    </center> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</section> 

<script>
    document.querySelector('#dataPasien').classList.add('active');
    document.querySelector('#dirawatPoliklinik').classList.add('active');
    document.querySelector('#dashboardLink').href = "index-poliklinik.php";
</script>

<?php include "footer.php"; ?>
