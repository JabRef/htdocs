<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="in">
<?php
  header('Content-type: application/xhtml+xml; charset=utf-8');
?>
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <title>Jendela utama JabRef</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="container">
    <?php include("../../navigation.php"); ?>
    <a href="Contents.php">Back to contents</a>


    <h1>Jendela utama JabRef</h1>

    <p><em>Catatan:</em> sebagian besar perintah yang
    dituliskan dibawah ini mempunyai pintasan menggunakan papan ketik,
    beberapa perintah lain dari kotak bantuan. Pintasan dapat dilihat
    dari ketika menggunakan menu utama.</p>

    <p>Ini adalah jendela utama untuk bekerja pada basisdata
    anda. Dibawah kotak menu dana kotak bantuan ada ruang yang mempuyai tab 
    untuk menampilkan basis data yang anda buka.
    Ketika anda memilih salah satu tab, tabel yang berisi semua entri
    basisdata anda akan muncul, demikian pula isi masing-masing bidang
    yang bisa anda ubah datanya.</p>

    <ul>
        <li>Untuk merubah bidang apa saja yang dimunculkan pada kolom tabel,
        anda dapat mengaturnya dari dialog
        <strong>Preferensi</strong>.</li>

        <li>Untuk menyunting entri basisdata di salah satu baris, 		anda perlu klik-ganda di baris tersebut. Anda bisa melihat isi
	basisdata di tiap baris atau navigasi dengan menggunakan tombol panah
	naik/turun.</li>

        <li>Kolom tabel diurutkan menurut urutan pada bidang yang anda pilih.
	Cara pengurutan bawaan dapat dirubah dari
        <strong>Preferensi -&gt; Tabel entri</strong>, tetapi
        cara yang lebih cepat untuk merubah urutan, klik pada judul kolom
	yang anda pilih sebagai kriteria utama, atau membalik urutan jika
	sudah ditentukan urutan. Jika di klik lagi, akan melepaskan sebagai
	pilihan kriteria utama urutan. Tekan dan tahan tombol
	<b>Ctrl</b> serta klik salah satu kolom untuk tambah kriteria,
	membalik urutan atau menghapus sub-kriteria. Anda bisa menambah
	beberapa sub-kriteria, tetapi hanya dibatasi sampai tiga
	sub-kriteria yang disimpan ketika menjalankan ulang JabRef.</li>

        <li>Untuk mengatur lebar kolom, anda dapat menyeret pada batas judul
	kolom yang anda inginkan.</li>

        <li>
            Tanda warna dapat diubah sesuai keinginan melalui
            dialog <strong>Preferensi</strong>, sehingga membantu mengenali
            tampilan dan makna basisdata anda dengan melihat
            warna sel sebagai berikut:

            <ul>
                <li>Warna <font color="red">merah</font> di sel
                kolom paling kiri menunjukkan entri tidak lengkap.</li>

                <li>Warna <font color="#909000">kuning</font> di sel
                kolom palingkiri menunjukkan entri yang tidak didefinisikan
		semua bidangnya, tetapi mengandung referensi-silang.</li>

                <li>Warna sel <font color="blue">biru</font> menunjukkan
                bidang utama yang diperlukan.</li>

                <li>Warna sel <font color="green">hijau</font> menunjukkan
                bidang sel tambahan.</li>

                <li>Sel tanpa warna menunjukkan bidang yang tidak digunakan
		program <em>bibtex</em> untuk tipe entri ini.
                Bidang ini dapat masih disunting dalam JabRef.</li>
            </ul>
        </li>
    </ul>

    <h2>Menambah entri baru</h2>

    <p>Ada beberapa cara untuk menambah entri baru.
    Perintah menu <strong>BibTeX -&gt; Entri baru</strong> menampilkan
    dialog pilihan untuk memilih satu tipe entri dari yang ada. Jika anda
    tidak menginginkan menampilkan dialog ini, tersedia beberapa menu tersendiri
    untuk menggunakan tipe entri tertentu. Demikian juga ada pintasan
    langsung ke tipe yang umum digunakan.</p>

    <p>Ketika entri baru ditambahkan,
    <a href="EntryEditorHelp.php">penyunting entri</a> akan
    muncul. Bagaimana munculnya penyunting entri ini
    dapat diatur dari menu <strong>Preferensi-&gt; Penyunting Entri</strong>.</p>

    <p><em>Catatan:</em> Kami menyarankan anda mempelajari pintasan
    untuk menambah entri untuk berbagai tipe yang paling sering digunakan,
    misalnya CTRL-SHIFT-A untuk menambah entri <em>artikel</em>.</p>

    <h2>Menyunting entri</h2>

    <p>Untuk membuka
    <a href="EntryEditorHelp.php">penyunting entri</a> dari
    entri yang sudah ada, klik-ganda di baris entri yang akan disunting,
    maka <a href="EntryEditorHelp.php">Penyunting entri</a> akan dibuka
    (atau pada baris entri tekan ENTER).</p>

    <h2>Mengacu string <em>bibtex</em> dalam bidang</h2>

    <p>Dalam JabRef cara menuliskan isi dalam bidang sama seperti
    yang anda lakukan pada penyunting teks lainnya, hanya ada satu
    perbedaan: untuk mengacu string, anda perlu menulis dalam karakter
    #, misalnya:<br />
    &nbsp;&nbsp;'#jan# 1997',<br />
    yang akan diartikan sebagai string 'jan' diikuti oleh
    ' 1997'.</p>

    <p>Baca juga: <a href="StringEditorHelp.php">penyunting string</a>.
    </p>
  <?php include("../../footer.php"); ?>
  </div>

</body>
</html>
