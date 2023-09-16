<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

    <div class="d-flex justify-content-between align-items-center">
        <h2>Form Pendaftaran ke Poliklinik</h2>
        <ol>
        <li><a href="index.php">Home</a></li>
        <li>Daftar Pelayanan</li>
        <li>Form Pendaftaran ke Poliklinik</li>
        </ol>
    </div>

    </div>
</section>
<!-- End Breadcrumbs -->

<div class="container mb-5">
    <div class="page-heading">
        <div class="page-title text-center">
            <br>
            <h3>Formulir Pendaftaran Poliklinik</h3>
            <p class="text-subtitle text-muted">Anda dapat mengisi formulir pendaftaran Poliklinik disini</p>
        </div>
        <br>
        <div class="card w-75 mx-auto">
            <div class="card-content">
                <div class="card-body">
                    <div class="container text-start">
                        <form class="form form-horizontal" action="controller/aksi.php?aksi=poliklinik" method="post">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Layanan</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-2">
                                        <input value="Poliklinik" name="layanan" type="text" class="form-control" id="disabledInput" placeholder="Poliklinik"
                                        disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Nama Lengkap</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-2">
                                        <input type="text" id="namalengkap" class="form-control" name="nama"
                                            placeholder="Nama Lengkap Anda" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Kota</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-2">
                                        <input type="text" id="kota" class="form-control" name="kota"
                                            placeholder="Kota Anda"  required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-2">
                                        <input type="date" id="tanggallahir" class="form-control" name="tanggallahir"
                                            placeholder="Tanggal Lahir Anda"  required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-2">
                                        <input type="email" id="email" class="form-control" name="email"
                                            placeholder="Email"  required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Jenis Klinik</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-2">
                                        <select class="form-select" name="klinik"  required>
                                            <option selected>Pilih Klinik</option>
                                            <option value="Klinik Mata">Klinik Mata</option>
                                            <option value="Klinik THT">Klinik THT</option>
                                            <option value="Klinik Gigi dan Mulut">Klinik Gigi dan Mulut</option>
                                            </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>No. HP</label>
                                    </div>
                                    <div class="col-md-8 form-group mb-2">
                                        <input type="number" id="hp" class="form-control" name="notelp"
                                            placeholder="No. HP Anda" required>
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset"
                                            class="btn btn-light-secondary btn-outline-danger me-1 mb-1">Reset</button>
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