<?php
include('config.php');
$kode_barang = $_GET['kode_barang'];
$query = mysql_query("select * from produk where kode_barang=$kode_barang");
while ($q = mysql_fetch_array($query)) {
    ?>
    <table>
        <form action="edit-aksi.php" method="post">
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" value="<?php echo $q['kode_barang'] ?>" name="kode_barang"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" value="<?php echo $q['nama_barang'] ?>"></td>
            </tr>
            <tr>
                <td>Harga barang</td>
                <td><input type="text" name="harga" value="<?php echo $q['harga'] ?>"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok" value="<?php echo $q['stok'] ?>"></td>
            </tr>
            <tr>
                <td>kategori</td>
                 <td><input type="text" name="kategori" value="<?php echo $q['kategori'] ?>"></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" value="update"></td>
            </tr>
        </form>
    </table>
    <?php
}
?>