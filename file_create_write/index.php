<!DOCTYPE html>
<html>
<head>
	<title>File Create and Write</title>
</head>
<body>
    <?php
       $my_file = fopen("a.txt", "w");
       $txt = "JAJ SoftTech";
       fwrite($my_file,$txt);
       fclose($my_file);
    ?>
</body>
</html>