<?php

$result='';
if(isset($_POST['btn'])){
    require_once 'test.php';
    $a = new test();
     $result= $a->FullName($_POST['first_name'],$_POST['last_name']);
}





?>
<html>
<head>
    <title>Form</title>
</head>
    <body>
         <form action="" method="post">
             <table>
                 <tr>
                     <th>First Name</th>
                     <th>
                         <input type="text" name="first_name">
                     </th>
                 </tr>

                 <tr>
                     <th>Last Name</th>
                     <th>
                         <input type="text" name="last_name">
                     </th>
                 </tr>

                 <tr>
                     <th>Full Name</th>
                     <th>
                         <input type="text" name="full_name" value="<?php echo $result;?>">
                     </th>
                 </tr>

                 <tr>
                     <th></th>
                     <th>
                         <input type="submit" name="btn" value="submit">
                     </th>
                 </tr>
             </table>
         </form>
    </body>
</html>