<!-- <?php
  $handle = fopen('a.txt','r');
  $string = "BGC TRUST University";
  //fwrite($handle, $string);
  fread($handle, $string);
  fclose($handle);
?> -->

<?php
$myfile = fopen("a.txt", "r");
while(!feof($myfile)) {
  	echo fread($myfile, 1024);
}
fclose($myfile);
?>

<?php
$myfile = fopen("a.txt", "w");

	$string = "BGC Trust University Bangladesh Chattogram";
  	echo fwrite($myfile, $string)."<br>";
	fclose($myfile);
?>
