<!-- cek valid data & permission login -->
<?php
    session_start();

    if (!isset($_SESSION['profesi']) == "Dokter Umum"){
      echo "<script>alert('Anda tidak memiliki akses pada halaman ini')</script>";
      
      header("location: ../login.php");
    }

    include "header.php";

    //ambil id dari query string
    $id = $_GET['id'];

    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM db_pasien_umum where id_umum = $id ORDER BY tanggalinput desc;";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
?>

<title>Update Data Pasien Dokter Umum</title>

<div class="container">
    <div class="page-heading">
        <div class="page-title">
            <br>
            <h3>Ubah Data Pasien Dokter Umum</h3>
            <p class="text-subtitle text-muted">Anda dapat mengubah data pasien Dokter Umum disini</p>
        </div>
        <br>

        <div class="card w-100">
            <div class="card-content">
                <div class="card-body">
                    <div class="container text-start">
                        <form class="form form-horizontal" action="../controller/aksi.php?aksi=edit-umum" method="post">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Layanan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input value="Dokter Umum" name="layanan" type="text" class="form-control" id="disabledInput" placeholder="Dokter Umum"
                                        disabled >
                                    </div>
                                    <div class="col-md-4">
                                        <label>No. Formulir</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input value="<?= $row['id_umum'] ?>" name="ID" type="number" class="form-control" id="readonlyInput" readonly="readonly" placeholder="<?= $row['id_umum'] ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Nama Lengkap</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="namalengkap" class="form-control" name="nama"
                                            placeholder="Nama Lengkap Anda" value="<?= $row['nama'] ?>">
                                        <input style="display: none;" type="text" name="namaSebelumnya" value="<?= $row['nama'] ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Kota</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="kota" class="form-control" name="kota"
                                            placeholder="Kota Anda" value="<?= $row['kota'] ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="date" id="tanggallahir" class="form-control" name="tanggallahir"
                                            placeholder="Tanggal Lahir Anda" value="<?= $row['tanggallahir'] ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="email" id="email" class="form-control" name="email"
                                            placeholder="Email" value="<?= $row['email'] ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label>No. HP</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="number" id="hp" class="form-control" name="notelp"
                                            placeholder="No. HP Anda" value="<?= $row['no_telp'] ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Keluhan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keluhan"><?= $row['keluhan'] ?></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Kondisi</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                    <?php $kondisi = $row['kondisi']; ?>
                                        <select class="form-select" name="kondisi" required>
                                            <option <?= ($kondisi == 'Perlu Tindakan') ? "selected": "" ?> value="Perlu Tindakan">Perlu Tindakan</option>
                                            <option <?= ($kondisi == 'Dirawat') ? "selected": "" ?> value="Dirawat" >Dirawat</option>
                                            <option <?= ($kondisi == 'Selesai') ? "selected": "" ?> value="Selesai" >Selesai</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <input class="btn btn-primary" type="submit" value="Ubah" name="submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelector('#dataPasien').classList.add('active');
    document.querySelector('#perluTindakan').classList.add('active');
</script>

<?php include "footer.php"; ?>