<!DOCTYPE html>
<html>
<head>
	<title>fopen fread</title>
</head>
<body>
    <?php
      $my_file = fopen("a.txt", "r");
      echo fread($my_file, filesize("a.txt"));
      fclose($my_file)
    ?>
</body>
</html>