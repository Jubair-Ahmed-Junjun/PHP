<?php


     require_once 'Demo.php';
     if (isset($_POST['btn'])){
         $a = new Demo();
        $result = $a->wordCharacterCount($_POST);
     }
?>
<html>
<head>
    <title>String Count</title>
</head>
<body>
     <form action="" method="post">
         <table border="1">
             <tr>
                 <th>Enter Your String</th>
                 <th>
                     <input type="text" name="string">
                 </th>
             </tr>

             <tr>
                 <th>Total Number Of Word</th>
                 <th>
                     <input type="text"  value="<?php echo $result['word_length']?>">
                 </th>
             </tr>

             <tr>
                 <th>Total Number Of Character</th>
                 <th>
                     <input type="text"  value="<?php echo $result['character_length']?>">
                 </th>
             </tr>

             <tr>
                 <th></th>
                 <th>
                     <input type="submit" name="btn">
                 </th>
             </tr>

         </table>
     </form>
</body>
</html>
