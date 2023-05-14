<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>school database sample1</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php
include "connection.php";
if (isset($_POST['submit1'])){
    $id=$_POST['txt_id'];
    $class=$_POST['txt_class'];
    $ins_sql="INSERT INTO class(id,class)VALUES ('$id','$class')";
    $ins_sql_pre=$db->prepare($ins_sql);
    $ins_sql_pre->execute();
}
?>
</body>
</html>
