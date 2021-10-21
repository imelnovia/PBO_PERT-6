<html>
<head>
    <title>Document</title>
</head>
<body>
    <form name="" action="proses_imel.php" method="get">
<center>
    <img src="indonesia.jpg" width="20%" height="30%"class="rounded mx-auto d-block" alt="...">
    <h3>Data Pendaftaran Perizinan Pemilik Kapal DI Indonesia</h3>
    <table class="table table-hover">
    <tr>
        <td>Nomor Tanda Pendaftaran</td>
        <td>:</td>
        <td><input type="text" name="nomor"></td>
    </tr>
    <tr>
        <td>Nama Pendaftar</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Alamat Lengkap</td>
        <td>:</td>
        <td><textarea name="alamat" cols="21,5" rows="2" ></textarea></td>
    </tr>
    <tr>
        <td>Provinsi</td>
        <td>:</td>
        <td> <select name="provinsi"class="form-select" id="floatingSelect" aria-label="Floating label select example">
        <option selected>Aceh</option>
        <option value="1">Sumatra Utara</option>
        <option value="2">Sumatra Barat</option>
        <option value="3">Riau</option>
        <option value="4">Jambi</option>
        <option value="5">Bengkulu</option>
        <option value="6">Sumatra Selatan</option>
        <option value="7">Bangka Belitung</option>
        <option value="8">Lampung</option>
        <option value="9">Jakarta</option>
        <option value="11">Jawa Barat</option>
        <option value="12">Jawa Tengah</option>
        <option value="13">Yogyakarta</option>
        <option value="14">Jawa Timur</option>
        <option value="15">Bali</option>
        <option value="16">Nusa Tenggara Barat</option>
        <option value="17">Kalimantan Barat</option>
        <option value="18">Kalimantan Tengah</option>
    </select>
    </td>
    </tr>
    <tr>
        <td>ID Pemilik (NIK)</td>
        <td>:</td>
        <td><input type="text" name="id"></td>
    </tr>
    <tr>
        <td>Nomor NPWP</td>
        <td>:</td>
        <td><input type="text" name="npwp"></td>
    </tr>
    <tr>
        <td>Nomor Telepon/HP</td>
        <td>:</td>
        <td><input type="text" name="hp"></td>
    </tr>
    <tr>
        <td>Nama Kapal</td>
        <td>:</td>
        <td><input type="text" name="nama_kapal"></td>
        <td>
    </td>
    </tr>
    <tr>
        <td>Bendera Daerah</td>
        <td>:</td>
        <td><input type="text" name="bendera"></td>
        <td>
    </td>
    </tr>
    <tr>
        <td>Bahan Bakar Kapal</td>
        <td>:</td>
        <td><input type="text" name="bahan_bakar"></td>
        <td>
    </td>
    </tr>
    <tr>
        <td>Jumlah Penumpang</td>
        <td>:</td>
        <td><input type="text" name="jumlah_penumpang"></td>
        <td>
    </td>
    </tr>
    <tr>
        <td>Tahun Pembuatan</td>
        <td>:</td>
        <td><input type="text" name="tahun"></td>
        <td>
    </td>
    </tr>
    <tr>
        <td>Jenis Kapal</td>
        <td>:</td>
        <td><textarea name="alamat" cols="21,5" rows="2" ></textarea></td>
    </td>
    </tr>
    <tr>
        <td>Nomor ijin kapal</td>
        <td>:</td>
        <td><input type="text" name="ijin"></td>
        <td>
    </td>
    <tr>
        <td colspan="3"><input class="btn btn-primary" name="tombol" type="submit" value="Submit"></td>
    </tr>
    </table>
</center>
    </form>
</body>
</html>