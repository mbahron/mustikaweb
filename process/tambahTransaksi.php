<?php
    include 'config.php';

    if(isset($_POST["tambah"])){
        $nama = $_POST["nama"];
        $nohp = $_POST["nohp"];
        $alamat = $_POST["alamat"];
        $dpbarang = $_POST["dpbarang"];
        $jumlahpesanan = $_POST["jumlahpesanan"];
        $pengiriman = $_POST["pengiriman"];
        $barangpesanan = $_POST["barangpesanan"];

        $result = mysqli_query($mysqli, "INSERT INTO tb_transaksi(id_transaksi,nama,no_hp,alamat,dp_barang,jumlah_pesanan,tipe_pengiriman,barang_pesanan)
        VALUES('$nama','$nohp','$alamat','$dpbarang','$jumlahpesanan','$pengiriman','$barangpesanan')");

        echo "User added successfully. <a href='index.php'>View Users</a>";
    }


?>