<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
  <title>Study Kasus2</title> 
</head> 
 
<body>  
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
    Pesanan : 
    <input type="checkbox" name="pes[]" value="paket1" 
    />Koloke + Es Teh
	
     <input type="checkbox" name="pes[]" value="paket2" 
    />Es Jeruk + Lalapan 
 
    <input type="checkbox" name="pes[]" value="paket3"checked=" 
	<?PHP
	  if ($_post['th']=="Paket3"){
		  echo 'selected="selected"';}
      ?>"
    />Es Teh + Pecel <br /> 
 
    <input type="submit" value="ok" /> 
  </form> 
 
<?php 
// Ekstraksi nilai 
if (isset($_POST['pes'])) { 
  foreach ($_POST['pes'] as $key => $val) { 
    echo $val . '<br />'; 
  } 
} 
?> 
 
</body> 
</html> 