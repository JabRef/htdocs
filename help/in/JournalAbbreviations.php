<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="in" xml:lang="in">
<?php
  header('Content-type: application/xhtml+xml; charset=utf-8');

  // DO NOT EDIT BY HAND
  // This file is generated from jabref/src/help.
  // Run generate-htdocs-help-from-jabref-src-help.pl in the root directory
  // of the JabRef repository to regenerate the htdocs out of JabRef's help.
?>
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>Singkatan nama jurnal</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">Kembali ke Daftar Isi</a>

    <h1>Singkatan nama jurnal</h1>

    <p>Fitur ini dapat diatur melalui
    menu <b>Pengaturan -&gt; Pengaturan singkatan jurnal</b>.</p>

    <p>JabRef dapat secara otomatis merubah dari bentuk
    singkatan ke nama penuh dan sebaliknya, selama nama jurnal
    dan singkatannya ada dalam daftar anda. Anda bisa menggunakan
    memperoleh daftar singkatan dari beberapa berkas yang ada 
    dalam cakra padat anda.</p>

    <h2>Penggunaan fitur ini</h2>

    <p>Pengubahan nama jurnal dapat dilakukan dari penyunting entri
    atau dari menu <b>AlatBantuan</b>. Jika anda berada di 
    di bagian <i>Jurnal</i> dalam penyunting entri, untuk merubah ke
    bentuk singkatan, tekan tombol <i>Gunakan
    singkatan</i>. Setelah tombol ini anda tekan maka anda akan
    diberikan tiga pilihan:</p>

    <ul>
        <li>Nama penuh, misalnya "Aquacultural Engineering"</li>

        <li>Singkatan ISO, misalnya "Aquacult. Eng."</li>

        <li>Singkatan MEDLINE, misalnya "Aquacult Eng"</li>
    </ul>
    <p>Jika nama jurnal tidak ada dalam daftar, maka nama jurnal
    tidak akan berubah sama sekali.</p>

    <p>Untuk merubah nama jurnal bersamaan, anda dapat memilih
    beberapa entri yang ingin anda ubah nama jurnalnya, kemudian
    dari menu <b>AlatBantuan -&gt;
    Singkatan nama jurnal (ISO)</b>, <b>AlatBantuan -&gt; Singkatan
    nama jurnal (MEDLINE)</b> atau <b>AlatBantuan -&gt; Tidak
    menyingkat nama jurnal</b>. Ketiga perintah tersebut dapat
    menyingkat atau menggunakan nama lengkap dari entri pilihan dimana
    nama jurnal ada dalam daftar jurnal.</p>

    <h2>Membuat daftar nama jurnal</h2>

    <p>Anda boleh menggunakan beberapa
    berkas daftar jurnal yang kesemuanya dapat ditautkan dari JabRef.
    Berkas daftar jurnal yang utama dapat disunting dari dalam JabRef.</p>

    <h3>Daftar singkatan jurnal pribadi</h3>

    <p>Pengaturan dan pengeloaan daftar singkatan jurnal pribadi
    ada di bagian atas jendela <b>Singkatan nama jurnal</b>.
    Untuk memulai membangun daftar jurnal pribadi, pilih 
    <i>Berkas baru</i>, tulis nama berkas atau gunakan
    tombol <i>Jelajah</i>. Apabila anda sudah mempunyai berkas
    daftar nama jurnal sebelumnya dan ingin anda gunakan
    pilih <i>Berkas yang ada</i>, dan tekan
    tombol <i>Jelajah</i> untuk memilih berkas. Tabel di kotak
    bawahnya akan menampilkan isi daftar jurnal dari berkas
    yang anda pilih.</p>

    <p>Tabel serta tombol bantuan disebelah kanan akan membantu anda
    untuk menambah, menghapus dan menyunting nama jurnal serta 
    singkatannya. Pada setiap entri, anda harus menuliskan nama
    lengkap dari jurnal serta nama singkatan ISO (misalnya
    "Aquacultural Engineering" dan "Aquacult. Eng."). Untuk
    menyunting entri, klik-ganda entri pada tabel.</p>

    <p>Apabila anda sudah memilih berkas dan entri tabel
    memiliki paling tidak satu entri, kemudian anda menekan tombol
    <i>OK</i>, maka semuanya entri dalam tabel akan
    disimpan ke berkas yang dipilih, dan daftar jurnal yang ada
    di JabRef akan diperbarui.</p>

    <h3>Daftar jurnal eksternal</h3>

    <p>Sebagai tambahan dari daftar jurnal pribadi,
    anda juga dapat mengkaitkan dengan beberapa berkas daftar jurnal
    eksternal. Definisi tautan ke berkas eksternal ada di bagian bawah
    dari jendela <b>Singkatan nama jurnal</b>. 
    Daftar jurnal eksternal mempunyai format yang sama dengan daftar
    jurnal pribadi - perbedaanya hanya JabRef tidak memberikan
    fasilitas antarmuka untuk penyuntingan penyuntingan berkas
    eksternal.</p>

    <p>Apabila perlu, untuk menambah daftar berkas eksternal baru, 
    klik tombol <b>+</b> di bagian kotak bawah. Setelah itu anda
    bisa menekan tombol <i>Jelajah</i> atau tombol <i>Muaturun</i> 
    yang terletak di sebelah kanan dari kotak berkas eksternal pada
    kotak bagian bawah jendela. Untuk melihat isi dari berkas
    anda bisa menggunakan tombol <i>Pratampilan</i>.</p>

    <ul>
        <li>Tombol <i>Jelajah</i> membantu anda untuk memilih
        berkas daftar jurnal yang anda miliki yang berada
        di salah satu direktori dalam komputer anda.</li>

        <li>Tombol <i>Muaturun</i> berfungsi untuk muaturun berkas
        yang ada di tautan internet dengan cara menuliskan alamat
        URL. Anda perlu memberi nama baru dan menyimpan ke lokal
        komputer. Selanutnya JabRef akan mengenalinya sebagai berkas
        daftar jurnal eksternal. Ketika anda menekan tombol 
        <i>Muaturun</i>, dalam alamat URL anda akan lihat alamat URL
        bawaan dari situs JabRef yang berisi daftar jurnal serta
        singkatannya. Namun demikian daftar yang ada tidak lengkap
        sekali, anda bis melengkapinya sendiri.</li>

        <li>Tombol <i>Pratampilan</i> akan menampilkan isi daftar 
        dari berkas internal yang anda pilih</li>
    </ul>

    Setiap entri yang anda miliki dari daftar jurnal pribadi akan
    menindih informasi dari nama jurnal yang sama dari berkas
    eksternal. Pada eksternal jurnal, urutan tautan akan menentukan
    prioritas yang dipakai.
  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
