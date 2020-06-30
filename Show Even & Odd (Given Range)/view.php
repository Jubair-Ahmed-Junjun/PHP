<?php
  require_once 'demo.php';
  $a = new demo();
   $res=$a->calculate();

?>

<html>
   <head>
       <title>Form</title>
   </head>
<body>
<form action="" method="post">
    <table border="1">
        <tr>
            <th>First Number</th>
            <td>
                <input type="text" name="first_number">
            </td>
        </tr>


        <tr>
            <th>Second Number</th>
            <td>
                <input type="text" name="second_number">
            </td>
        </tr>


        <tr>
            <th></th>
            <td>
                <input type="radio" name="check" value="even">Even
                <input type="radio" name="check" value="odd">Odd
            </td>
        </tr>


        <tr>
            <th>Result</th>
            <td>
                  <textarea rows="5" cols="30" name="result" >
                     <?php echo $res;?>
                  </textarea>
            </td>
        </tr>

        <tr>
            <th></th>
            <td>
                <input type="submit" name="btn">
            </td>
        </tr>

    </table>
</form>
</body>
</html>

