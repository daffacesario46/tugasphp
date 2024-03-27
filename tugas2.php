<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="tugas2.php" method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="produk" class="col-4 col-form-label">Produks Pilihan</label> 
    <div class="col-8">
      <select id="produk" name="produk" class="custom-select">
        <option value="">---Pilihan Produk---</option>
        <option value="HP">Handhpone</option>
        <option value="TV">TV</option>
        <option value="kulkas">Kulkas</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="harga" class="col-4 col-form-label">Harga satuan</label> 
    <div class="col-8">
      <input id="harga" name="harga" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jmlhbeli" class="col-4 col-form-label">Jumlah beli</label> 
    <div class="col-8">
      <input id="jmlhbeli" name="jmlhbeli" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_pelanggan = $_POST["nama"];
        $produk = $_POST["produk"];
        $jumlah_beli = $_POST["jmlhbeli"];
        $harga_satuan = $_POST["harga"];

        $total_belanja = $jumlah_beli * $harga_satuan;
        $diskon = 0.2 * $total_belanja;
        $ppn = 0.1 * ($total_belanja - $diskon);
        $harga_bersih = ($total_belanja - $diskon) + $ppn;

        echo "<h2>Ringkasan Belanja</h2>";
        echo "Nama Pelanggan: $nama_pelanggan<br>";
        echo "Produk: $produk<br>";
        echo "Jumlah Beli: $jumlah_beli<br>";
        echo "Harga Satuan: $harga_satuan<br>";
        echo "Total Belanja: $total_belanja<br>";
        echo "Diskon: $diskon<br>";
        echo "PPN: $ppn<br>";
        echo "Harga Bersih: $harga_bersih";
    }
    ?>
</body>
</html>
