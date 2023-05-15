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
if (isset($_POST['submit1'])) {
    $id = $_POST['txt_id'];
    $class = $_POST['txt_class'];
    $ins_sql = "INSERT INTO class(id,class)VALUES ('$id','$class')";
    $ins_sql_pre = $db->prepare($ins_sql);
    $ins_sql_pre->execute();
}
if (isset($_POST['submit2'])) {
    $id = $_POST['id'];
    $class = $_POST['class'];
    $name = $_POST['name'];
    $family = $_POST['family'];
    $ave = $_POST['ave'];
    $ins_sql = "INSERT INTO student(id,class,name,family,ave) VALUES ('$id','$class','$name','$family','$ave')";
    $ins_sql_pre=$db->prepare($ins_sql);
    $ins_sql_pre->execute();
}
?>
<div id="wrapper">
    <div id="row1">
        <div id="row1_col1">
            <form action="" method="post">
                <fieldset>
                    <legend>class</legend>
                    <label>id</label>
                    <input type="text" name="txt_id"/><br/>
                    <label>class</label>
                    <input type="text" name="txt_class"/>
                    <input type="submit" name="submit" value="insert-class"/><br/>
                </fieldset>
            </form>
            <table border="1">
                <tr>
                    <td>id</td>
                    <td>class</td>
                    <td>delete</td>
                    <td>edit</td>
                </tr>
                <?php
                include "connection.php";
                $query="SELECT * FROM class";
                $result=$db->prepare($query);
                $result->execute();
                while ($row=$result->fetch(PDO::FETCH_ASSOC)){
                    echo "
                    <tr>
                    <td>".$row['id']."</td>
                         <td>".$row['class']."</td>
                         <td><a href='delete.php?id=".$row['id']."&&page=1'>delete</a></td>
                         <td><a href='edit.php?id=".$row['id']."&&page=1'>edit</a></td>
                         </tr>
                    ";
                }
                ?>
            </table>
        </div>
        <div id="row1_col2">
            <form action="" method="post">
                <fieldset>
                    <legend>student</legend>
                    <label>id</label>
                    <input type="text" name="id"><br/>
                    <label>class</label>
                    <input type="text" name="class"><br/>
                    <label>name</label>
                    <input type="text" name="name"><br/>
                    <label>family</label>
                    <input type="text" name="family"><br/>
                    <label>ave</label>
                    <input type="number" name="ave"><br/>
                    <input type="submit" name="submit2" value="insert-student"/>
                </fieldset>
            </form>
            <table border="1">
                <tr>
                    <td>id</td>
                    <td>class</td>
                    <td>name</td>
                    <td>family</td>
                    <td>id</td>
                    <td>delete</td>
                    <td>edit</td>
                </tr>

</body>
</html>
