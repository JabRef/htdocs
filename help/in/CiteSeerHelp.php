<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="in" xml:lang="in">
<?php
  header('Content-type: application/xhtml+xml; charset=utf-8');
?>
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>Impor entri dari CiteSeer</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">Kembali ke Daftar Isi</a>


    <h1>Impor entri dari CiteSeer</h1>

    <p>CiteSeer adalah sumber pustaka dijital saintifik
    serta mesin pencarian yang berfokus pada bidang sains komputer
    dan teknolofi informasi.</p>

    <h2>Mengimpor entri dari CiteSeer</h2>

    <p>JabRef dapat memuaturun
    informasi acuan langsung dari basisdata CiteSeer.
    Untuk memulai proses muaturun, anda perlu menambahkan entri
    dalam basisdata anda dan menulis bidang citeseerurl dengan
    tautan halaman web CiteSeer. Bidang citeseerurl harus dalam bentuk
    salah satu format berikut:</p>

    <p>http://citeseer.ist.psu.edu/DDDDDD[.html], atau<br />
    oai:CiteSeerPSU:DDDDDD, atau<br />
    DDDDDD</p>

    <p>dimana DDDDD adalah angka urutan. Untuk memperoleh angka
    urutan (DDDDD) untuk entri CiteSeer, anda perlu ke halaman
    dokumen dengan format http://citeseer.ist.psu.edu/<i>namaTahunJudul</i>.html 
    kemudian klik tombol tautan (Perbarui) utuk acuan. Nama URL untuk tautan
    Perbarui berisi angka ID untuk acuan ini.</p>

    <p>Setelah anda menambahkan bidang citeseerurl, anda bisa memuaturun
    bidang CiteSeer dengan memilih <b>BibTex -&gt;
    Impor Bidang dari CiteSeer</b>. Pastikan anda sudah memilih
    baris entri yang ingin diperbarui.</p>

    <h2>Membuat Basisdata Acuan</h2>

    <p>Dengan memberikan referensi, anda aka dapat membuat daftar
    dalam dokumen anda yang mengacu pada referensi. Agar dapat menggunakan
    fitur ini, setiap acuan dalam basisdata harus mempunyai bidang 
    citeseerurl dengan format seperti ditulis di subbab 
    <b>Mengimpor entri dari CiteSeer</b> diatas. Untuk menggunakan
    fitur ini, pilih <b>Pencarian Web -&gt; 
    Ambil data acuan dari CiteSeer</b>.</p>

    <h2>Menggunakan Proxy Server</h2>

    <p>Apabila anda ingin menggunakan proxy
    server http, tuliskan nama server dan nomor port ke java saat
    menjalankan program.</p>

    <p><code>java -Dhttp.proxyHost="hostname"
    -Dhttp.proxyPort="portnumber"</code></p>

    <p>Pengaturan tersebut didokumentasikan di 
    <a href="http://java.sun.com/j2se/1.4.2/docs/guide/net/properties.html">Sun J2SE documentation</a>.</p>

  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
