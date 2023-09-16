<?php
    session_start();

    if (!isset($_SESSION['profesi']) == "Dokter Umum"){
      echo "<script>alert('Anda tidak memiliki akses pada halaman ini')</script>";
      
      header("location: ../login.php");
    }

    include "header.php";
?>

<title>Perlu Tindakan - Dokter Umum </title>

<?php
    $sql = "SELECT * FROM db_pasien_umum where kondisi = 'Perlu Tindakan' ORDER BY tanggalinput desc;";
    $query = mysqli_query ($conn, $sql);
    $rowcount = mysqli_num_rows($query);
?>
<h4>Data Pasien (Total : <?= $rowcount; ?>)</h4>
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
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#A<?= $row['id_umum']; ?>" aria-expanded="false" aria-controls="collapseOne">
                            <?= $row['nama'].'  -  '.$row['tanggalinput']; ?>
                        </button>
                    </h2>

                    <div id="A<?= $row['id_umum']; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="container text-start">
                                <div class="row text-black">
                                    <div class="col-md-4">
                                        <label>Tanggal Input</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <p><?= $row['tanggalinput']; ?></p>
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
                                        <label>Keluhan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <p> <?= $row['keluhan']; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Kondisi</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <span class="badge bg-danger"><?= $row['kondisi']; ?></span>
                                    </div>
                                    <br><br>
                                    <center>
                                        <div class="buttons">
                                            <a href="update-umum.php?id=<?= $row['id_umum']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="../controller/aksi.php?aksi=hapus-umum&id=<?= $row['id_umum']; ?>" class="btn btn-danger btn-sm">Hapus</a>
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
    document.querySelector('#perluTindakan').classList.add('active');
    document.querySelector('#dashboardLink').href = "index-umum.php";
</script>

<?php include "footer.php"; ?>