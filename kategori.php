<?php
 include('config.php');  
  echo "Kategori : <select name=\"kode_kategori\" id=\"kode_kategori\">";   
  $myquery="select kode_kategori, nama_kategori from kategori";   
  $daftarkategori=mysql_query($myquery) or die (mysql_error());    
  while($dataku=mysql_fetch_object($daftarkategori))   

  echo "<option value=\"$dataku->kode_kategori\">$dataku->nama_kategori</option>";  
  echo "</select>";
  ?> 
