<?php

    include "../koneksi.php";

    $aksi = $_GET['aksi'];

    // add data umum.
    if ($aksi == "umum") {
        $nama = $_POST["nama"];
        $tanggallahir = $_POST["tanggallahir"];
        $kota = $_POST["kota"];
        $notelp = $_POST["notelp"];
        $keluhan = $_POST["keluhan"];
        $email = $_POST["email"];

        function formulir_umum($nama, $keluhan, $tanggallahir, $kota, $notelp, $email, $conn) {
            $layanan = "Dokter Umum";

            $sql = "INSERT INTO db_pasien_terbaru (nama, layanan, no_telp, kota, tanggallahir, tanggalinput, kondisi) VALUES ('$nama', '$layanan', '$notelp', '$kota', '$tanggallahir', current_timestamp(), 'Perlu Tindakan');";
            mysqli_query($conn, $sql);

            $sql = "INSERT INTO db_pasien_umum (nama, keluhan, no_telp, email, kota, tanggallahir, tanggalinput, kondisi) VALUES ('$nama', '$keluhan', '$notelp', '$email', '$kota', '$tanggallahir', current_timestamp(), 'Perlu Tindakan');";
            mysqli_query($conn, $sql);
        }

        formulir_umum($nama, $keluhan, $tanggallahir, $kota, $notelp, $email, $conn);

        header("Location: ../form-pendaftaran.php?status=sukses");
    // add poliklinik.
    }else if ($aksi == "poliklinik") {
        $nama = $_POST["nama"];
        $tanggallahir = $_POST["tanggallahir"];
        $kota = $_POST["kota"];
        $notelp = $_POST["notelp"];
        $email = $_POST["email"];
        $jenis_klinik = $_POST["klinik"];

        function formulir_poliklinik($nama, $jenis_klinik, $tanggallahir, $kota, $notelp, $email, $conn) {
            $layanan = "Poliklinik";

            $sql = 
            "INSERT INTO db_pasien_terbaru (nama, layanan, no_telp, kota, tanggallahir, tanggalinput, kondisi) VALUES ('$nama', '$layanan', '$notelp', '$kota', '$tanggallahir', current_timestamp(), 'Perlu Tindakan');";    
            mysqli_query($conn, $sql);

            $sql =
            "INSERT INTO db_pasien_poliklinik (nama, jenis_klinik, no_telp, email, kota, tanggallahir, tanggalinput, kondisi) VALUES ('$nama', '$jenis_klinik', '$notelp', '$email', '$kota', '$tanggallahir', current_timestamp(), 'Perlu Tindakan');";
            mysqli_query($conn, $sql);
        }

        formulir_poliklinik($nama, $jenis_klinik, $tanggallahir, $kota, $notelp, $email, $conn);

        header("Location: ../form-pendaftaran.php?status=sukses");
    }else if ($aksi == "login") {
        session_start();

        // jika tidak null.
        if (isset($_POST['uname']) && isset($_POST['password'])) {
            function validate($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);

                return $data;
            }

            $uname = validate($_POST['uname']);
            $pass = validate($_POST['password']);
            
            $sql = "SELECT * FROM login WHERE username='$uname' AND password = '$pass'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);

                if ($row['username'] === $uname && $row['password'] === $pass && $row['profesi'] === 'Dokter Umum') {
                    echo "Logged in!";

                    $_SESSION['username'] = $row['username'];
                    $_SESSION['profesi'] = $row['profesi'];
                    $_SESSION['id'] = $row['id'];

                    header("Location: ../views/index-umum.php");

                    exit();
                }elseif($row['username'] === $uname && $row['password'] === $pass && $row['profesi'] === 'admin') {
                    echo "Logged in!";

                    $_SESSION['username'] = $row['username'];
                    $_SESSION['profesi'] = $row['profesi'];
                    $_SESSION['id'] = $row['id'];

                    header("Location: ../views/index-admin.php");

                    exit();
                }elseif ($row['username'] === $uname && $row['password'] === $pass && $row['profesi'] === 'poliklinik') {
                    echo "Logged in!";

                    $_SESSION['username'] = $row['username'];
                    $_SESSION['profesi'] = $row['profesi'];
                    $_SESSION['id'] = $row['id'];

                    header("Location: ../views/index-poliklinik.php");

                    exit();
                }
            }else{
                echo 'Username atau Password anda salah!';

                exit();
            }
        }
    }elseif ($aksi == "logout") {
        session_start();
        session_destroy();

        header("location: ../login.php");
    }elseif ($aksi == "edit-umum") {
        // cek apakah tombol simpan sudah diklik atau blum?
        if(isset($_POST['submit'])){
            // ambil data dari formulir
            $id = $_POST['ID'];
            $nama = $_POST['namaSebelumnya'];
            $namaTerbaru = $_POST['nama'];
            $kota = $_POST['kota'];
            $tanggallahir = $_POST['tanggallahir'];
            $email = $_POST['email'];
            $no_telp = $_POST['notelp'];
            $keluhan = $_POST['keluhan'];
            $kondisi = $_POST['kondisi'];

            $sql = "SELECT * FROM db_pasien_terbaru where nama = '$nama';";
            $query = mysqli_query ($conn, $sql);
            $row = mysqli_fetch_assoc($query);
            $id_terbaru = $row['ID'];

            // buat query update
            $sql = "UPDATE db_pasien_umum SET nama='$namaTerbaru', kota='$kota', tanggallahir='$tanggallahir', email='$email', no_telp='$no_telp', keluhan='$keluhan', kondisi='$kondisi' WHERE ID_umum = $id";
            $query = mysqli_query($conn, $sql);


            $ubah = "UPDATE db_pasien_terbaru SET nama='$namaTerbaru', kota='$kota', tanggallahir='$tanggallahir', no_telp='$no_telp', kondisi='$kondisi' WHERE ID = $id_terbaru";
            $query = mysqli_query($conn, $ubah);

            // apakah query update berhasil?
            if( $query ) {
                header('Location: ../views/index-umum.php?status=sukses');

            } else {
                // kalau gagal tampilkan pesan
                header('Location: ../views/index-umum.php?status=failed');
            }
        } else {
            die("Akses dilarang...");
        }
    }elseif ($aksi == "hapus-umum") {
        // ambil id dari query string
        $id = $_GET['id'];

        //memperoleh data tabel db umum
        $sql = "SELECT * FROM db_pasien_umum where id_umum = $id;";
        $query = mysqli_query ($conn, $sql);
        $row = mysqli_fetch_assoc($query);
        $nama = $row['nama'];

        //memperoleh data tabel db terbaru
        $sql = "SELECT * FROM db_pasien_terbaru where nama = '$nama';";
        $query = mysqli_query ($conn, $sql);
        $row = mysqli_fetch_assoc($query);
        $id_terbaru = $row['ID'];

        // buat query hapus
        $sql = "DELETE FROM db_pasien_umum WHERE id_umum = $id";
        $query = mysqli_query($conn, $sql);

        $sql = "DELETE FROM db_pasien_terbaru WHERE ID = $id_terbaru";
        $query = mysqli_query($conn, $sql);

        header('Location: ../views/index-umum.php?status=sukses');
    }elseif ($aksi == "hapus-poliklinik") {
        // ambil id dari query string
        $id = $_GET['id'];

        //memperoleh data tabel db poliklinik
        $sql = "SELECT * FROM db_pasien_poliklinik where id_poliklinik = $id;";
        $query = mysqli_query ($conn, $sql);
        $row = mysqli_fetch_assoc($query);
        $nama = $row['nama'];

        //memperoleh data tabel db terbaru
        $sql = "SELECT * FROM db_pasien_terbaru where nama = '$nama';";
        $query = mysqli_query ($conn, $sql);
        $row = mysqli_fetch_assoc($query);
        $id_terbaru = $row['ID'];

        // buat query hapus
        $sql = "DELETE FROM db_pasien_poliklinik WHERE id_poliklinik = $id";
        $query = mysqli_query($conn, $sql);

        $sql = "DELETE FROM db_pasien_terbaru WHERE ID = $id_terbaru";
        $query = mysqli_query($conn, $sql);

        header('Location: ../views/index-poliklinik.php?status=sukses');
    }elseif ($aksi == "ubah-poliklinik") {
        // cek apakah tombol simpan sudah diklik atau belum?
        if(isset($_POST['submit'])){
            // ambil data dari formulir
            $id = $_POST['ID'];
            $namaTerbaru = $_POST['nama'];
            $nama = $_POST['namaSebelumnya'];
            $kota = $_POST['kota'];
            $tanggallahir = $_POST['tanggallahir'];
            $email = $_POST['email'];
            $no_telp = $_POST['notelp'];
            $jenis_klinik = $_POST['klinik'];
            $kondisi = $_POST['kondisi'];

            $sql = "SELECT * FROM db_pasien_terbaru where nama = '$nama';";
            $query = mysqli_query ($conn, $sql);
            $row = mysqli_fetch_array($query);
            $id_terbaru = $row['ID'];

            // buat query update
            $sql = "UPDATE db_pasien_poliklinik SET nama='$namaTerbaru', kota='$kota', tanggallahir='$tanggallahir', email='$email', no_telp='$no_telp', jenis_klinik='$jenis_klinik', kondisi='$kondisi' WHERE id_poliklinik = $id";
            $query = mysqli_query($conn, $sql);


            $ubah = "UPDATE db_pasien_terbaru SET nama='$namaTerbaru', kota='$kota', tanggallahir='$tanggallahir', no_telp='$no_telp', kondisi='$kondisi' WHERE ID = $id_terbaru";
            $query = mysqli_query($conn, $ubah);

            // apakah query update berhasil?
            if( $query ) {
                header('Location: ../views/index-poliklinik.php?status=sukses');

            } else {
                // kalau gagal tampilkan pesan
                header('Location: ../views/index-poliklinik.php?status=failed');
            }
        } else {
            die("Akses dilarang...");
        }
    }
?>