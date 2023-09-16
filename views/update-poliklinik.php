<?php
    session_start();

    if (!isset($_SESSION['profesi']) == "admin_poliklinik"){
      echo "<script>alert('Anda tidak memiliki akses pada halaman ini')</script>";
      
      header("location: ../login.php");
    }

    include "header.php";

    //ambil id dari query string
    $id = $_GET['id'];

    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM db_pasien_Poliklinik where id_poliklinik = '$id' ORDER BY tanggalinput desc;";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
?>
<title>Update Data Pasien Poliklinik</title>

<div class="container">
    <div class="page-heading">
        <div class="page-title">
            <br>
            <h3>Ubah Data Pasien Poliklinik</h3>
            <p class="text-subtitle text-muted">Anda dapat mengubah data pasien Poliklinik disini</p>
        </div>
        <br>

        <div class="card w-100">
            <div class="card-content">
                <div class="card-body">
                    <div class="container text-start">
                        <form class="form form-horizontal" action="../controller/aksi.php?aksi=ubah-poliklinik" method="post">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Layanan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input value="Poliklinik" name="layanan" type="text" class="form-control" id="disabledInput" placeholder="Poliklinik"
                                        disabled >
                                    </div>
                                    <div class="col-md-4">
                                        <label>No. Formulir</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input value="<?php echo $row['id_poliklinik'] ?>" name="ID" type="number" class="form-control" id="readonlyInput" readonly="readonly" placeholder="<?php echo $row['id_poliklinik'] ?>" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Nama Lengkap</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="namalengkap" class="form-control" name="nama"
                                            placeholder="Nama Lengkap Anda" value="<?php echo $row['nama'] ?>" required>
                                        <input type="text" name="namaSebelumnya" value="<?php echo $row['nama'] ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Kota</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="kota" class="form-control" name="kota"
                                            placeholder="Kota Anda" value="<?php echo $row['kota'] ?>" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="date" id="tanggallahir" class="form-control" name="tanggallahir"
                                            placeholder="Tanggal Lahir Anda" value="<?php echo $row['tanggallahir'] ?>" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="email" id="email" class="form-control" name="email"
                                            placeholder="Email" value="<?php echo $row['email'] ?>" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>No. HP</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="number" id="hp" class="form-control" name="notelp"
                                            placeholder="No. HP Anda" value="<?php echo $row['no_telp'] ?>" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Jenis Klinik</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                    <?php $klinik = $row['jenis_klinik']; ?>
                                        <select class="form-select" name="klinik" required>
                                            <option <?php echo ($klinik == 'Klinik Mata') ? "selected": "" ?> value="Klinik Mata">Klinik Mata</option>
                                            <option <?php echo ($klinik == 'Klinik THT') ? "selected": "" ?>value="Klinik THT" >Klinik THT</option>
                                            <option <?php echo ($klinik == 'Klinik Gigi dan Mulut') ? "selected": "" ?>value="Klinik Gigi dan Mulut" >Klinik Gigi dan Mulut</option>
                                            </select>
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

<script>
    document.querySelector('#dataPasien').classList.add('active');
    document.querySelector('#tindakanPoliklinik').classList.add('active');
    document.querySelector('#dashboardLink').href = "index-poliklinik.php";
</script>

<?php include "footer.php"; ?>