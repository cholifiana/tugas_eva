<html>
<head>
<title>Laporan PINK FHASION </title>
<style>
.input1 {
	height: 20px;
	font-size: 12px;
	padding-left: 5px;
	margin: 5px 0px 0px 5px;
	width: 97%;
	border: none;
	color: red;
}
table {
	border: 1px solid #cecece;
}
.td {
	border: 1px solid #cecece;
}
#kiri{
width:50%;
float:left;
}

#kanan{
width:50%;
float:right;
padding-top:20px;
margin-bottom:9px;
}
</style>
</head>

<body>
<?php
include"config.php";
		echo "<center><h2 style='margin-bottom:3px;'>PINK FHASION</h2>
				Laporan Produk yang tersedia PINK FHASION</center><hr/> ";
		echo "<table width=100% cellpadding=6>
          <tr style='color:#OOOOO; height:35px;' bgcolor=#FFFFF0><th>Kode Produk</th><th>Nama Produk</th><th>Harga</th><th>Stok</th><th>Kategori</th></tr>";
	$query=mysql_query("select * from produk");
	$no=1;
 while($lihat=mysql_fetch_array($query)) {
		echo "	<tr align='center'>
				<td > $lihat[kode_barang]</td>
				<td> $lihat[nama_barang]</td>
				<td> $lihat[harga]</td>
				<td> $lihat[stok]</td>
				<td> $lihat[kategori]</td>
				</tr>"; 
	$no++;
 
 
} 
    echo "</table><br/><tr><td><br/><span style='float:right; text-align:center;'> PINK FHASION, $tgl_sekarang <br/>
										Karyawan<br/></br></br>
								(.............................................)
								<br/>$_SESSION[namalengkap]</span></td></tr>";
?>