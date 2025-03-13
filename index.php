<?php
include "config.php";

$instansi = mysqli_query($koneksi, "SELECT * FROM instansi");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- FAVICON -->
  <link href="public/img/logoptpn.svg" rel="icon">

  <!-- BOOTSTRAP CSS-->
  <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600&display=swap" rel="stylesheet">



  <!-- MAIN CSS -->
  <link rel="stylesheet" href="public/css/style.css">

  <title>PTPN4 Magang</title>

</head>

<body>
  <div class="fluid-container">
    <!-- NAVBAR -->
    <?php include "navbar.php"; ?>

    <div class="row">
      <!-- HERO -->
      <div class="col-12" id="hero">
        <div class="hero">
          <div class="text-white text-center hero-text">
            <h3 class="fw-bold">SELAMAT DATANG</h3>
            <p>PTPN IV Regional I membuka kesempatan bagi mahasiswa / pelajar yang bermaksud untuk melaksanakan program Magang dan (Praktek Kerja Lapangan / PKL).</p>
            <a href="#daftar" class="btn btn-primary fw-bold py-1 px-4">Daftar</a>
          </div>
        </div>
      </div>

      <!-- VISI MISI -->
      <div class="bg-light col-12 visi" id="visi">
        <div class="container">
          <div class="row mt-5 pt-2">
            <div class="col-6 py-5">
              <img src="public/img/visimisi.svg" alt="visi & misi" width="70%">
            </div>
            <div class="col-6 py-5" style="text-align: justify;">
              <h2 class="fw-bold text-center">VISI & MISI</h2>
              <hr>
              <h4 class="fw-bold" style="color: #efe62f;">Visi</h4>
              <p>Menjadi perusahaan produsen minyak kelapa sawit berkelanjutan terbesar di dunia, yang turut memastikan penghidupan bagi masyarakat dan menciptakan nilai bagi pemegang saham.</p>
              <h4 class="fw-bold" style="color: #efe62f;">Misi</h4>
              <ul>
                <li>Menjadi produsen minyak kelapa sawit terbesar di dunia dengan praktik operasional perkebunan terbaik yang berbasis digital dan industri hilir yang terintegrasi.</li>
                <li>Mendukung ketahanan pangan nasional, meningkatkan kesejahteraan petani plasma dan masyarakat lokal.</li>
                <li>Meningkatkan kapabilitas dan potensi karyawan melalui program pengembangan yang berkelanjutan.</li>
                <li>Memelihara lingkungan hidup dan sosial dengan mengimplentasikan praktik keberlanjutan.</li>
                <li>Menjunjung standar etika yang tinggi melalui implementasi dari tata kelola perusahaan yang baik.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- PERSYRATAN UMUM -->
      <div class="col-12 text-white syarat" id="syarat" style="background-color: #008739;">
        <div class="container mt-3">
          <div class="row">
            <div class="col-6 py-5" style="text-align: justify;">
              <h2 class="fw-bold text-center">PERSYARATAN UMUM</h2>
              <hr>
              <span class="fw-bold" style="color: #efe62f;">Jenjang Pendidikan</span>
              <ul>
                <li>Peserta magang D3/D4/S1</li>
                <li>Peserta PKL: Sekolah Menengah Kejuruan (SMK)</li>
              </ul>
              <span class="fw-bold" style="color: #efe62f;">Tingkat Pendidikan</span>
              <ul>
                <li>Peserta magang minimal semester 6</li>
                <li>Peserta PKL minimal kelas XI</li>
              </ul>
              <span class="fw-bold" style="color: #efe62f;">Bidang Studi</span>
              <ul>
                <li>Peserta magang : Semua jurusan yang tersedia</li>
                <li>Peserta PKL: Semua jurusan yang tersedia di SMK</li>
              </ul>
              <span class="fw-bold" style="color: #efe62f;">Syarat Tambahan</span>
              <ul>
                <li>Follow Instagram : @n4r1_mediacorporate</li>
                <li>Subscribe Youtube : PT Perkebunsn Nusantara IV Regional I</li>
                <li>Follow Tiktok : @ptpn4_regional1</li>
              </ul>
            </div>
            <div class="col-6 mt-2 py-5">
              <img src="public/img/persyaratan.svg" alt="syarat" width="100%" class="mt-5 ms-2">
            </div>
          </div>
        </div>
      </div>

      <!-- DAFTAR -->
      <div class="bg-light col-12" id="daftar">
        <div class="container">
          <div class="row">
            <div class="col-6 py-5">
              <img src="public/img/pendaftaran.svg" alt="daftar" width="70%">
            </div>
            <div class="col-6 py-5" style="text-align: justify;">
              <h2 class="fw-bold mt-5 text-center">PENDAFTARAN PKL</h2>
              <hr>
              <p>
                Untuk daftar Magang / PKL, silahkan isi form di bawah. <br>
                1. Asal kampus / sekolah. <br>
                2. Ajukan surat permohonan resmi PKL dari kampus / sekolah. <span class="text-danger">(Format PDF)</span> <br>
                3. No. Telpon yang dapat dihubungi. <br>
                4. Setelah mengisi form, tunggu konfirmasi balasan dari pihak kami. <br>
                5. Magang / PKL dapat dilaksanakan dengan jangka waktu minimal 1 bulan dan maksimal 2 bulan.
              </p>
              <form action="prosesdaftar.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="instansi" class="mb-3" list="daftar-instansi" style="width: 100%; height: 30px;" required="required" placeholder="Masukkan Nama Instansi">
                <datalist id="daftar-instansi">
                  <?php foreach ($instansi as $row) { ?>
                    <option value="<?php echo $row['nama_instansi']; ?>">
                    <?php } ?>
                </datalist>
                <br>
                <input type="file" class="mb-3 p-1" name="file" style="width: 100%; border: 1px solid #4F4F4F;" required="required"> <br>
                <input type="number" class="mb-3" name="nohp" placeholder="No. Telp" style="width: 100%; height: 30px;" required="required"> <br>
                <button class="btn btn-primary" name="daftar" value="daftar" style="width: 100%;">KIRIM</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- KESAN PESAN -->
      <div class="col-12 kesan" id="kesan" style="background-color: #008739;">
        <div class="container text-light mt-4 pt-1">
          <h2 class="fw-bold mt-5 text-center">KESAN & PESAN</h2>
          <hr class="m-auto my-3" style="width: 60%;">
          <p class="text-center">Ungkapkan kesan & pesan anda selama melaksanakan PKL di PTPN IV REGIONAL I</p>
          <form action="proseskesan.php" method="POST" class="m-5 text-center">
            <input type="number" class="mb-3" name="nim" placeholder="masukkan NIM / NIS anda" style="width: 40%; height: 30px;" required="required"> <br>
            <textarea class="mb-3" name="kesan" id="kesan" placeholder="Kesan anda" style="width: 40%; height: 100px;" required="required"></textarea> <br>
            <textarea class="mb-3" name="pesan" id="pesan" placeholder="Pesan anda" style="width: 40%; height: 100px;" required="required"></textarea> <br>
            <button class="btn btn-primary" name="kirim" value="kirim" style="width: 40%;">KIRIM</button>
          </form>
        </div>
      </div>

      <!-- MAKALAH -->
      <div class="bg-light col-12 makalah" id="makalah">
        <div class="container makalah-form">
          <h2 class="fw-bold mt-5 text-center">UPLOAD MAKALAH</h2>
          <hr class="m-auto my-3" style="width: 60%;">
          <p class="text-center">Upload makalah PKL anda</p>
          <form action="prosesmakalah.php" method="POST" enctype="multipart/form-data" class="mt-5 text-center">
            <input type="number" class="mb-3" name="nim" placeholder="masukkan NIM / NIS anda" style="width: 40%; height: 30px;" required="required"> <br>
            <input type="file" class="mb-3 p-1" name="file" style="width: 40%; border: 1px solid #4F4F4F;" required="required"> <br>
            <button class="btn btn-primary" name="upload" value="upload" style="width: 40%;">UPLOAD</button>
          </form>
        </div>
      </div>

    </div>
  </div>

  <!-- BOOTSTRAP JS -->
  <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>