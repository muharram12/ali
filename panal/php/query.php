<?php
include('connection.php');
// categories
if(isset($_POST['categorybutton'])){
    $catname = $_POST['categoryname'];
    $catimage = $_FILES['categoryimage']['name'];
    $catTmpName = $_FILES['categoryimage']['tmp_name'];
    $extension = pathinfo($catimage,PATHINFO_EXTENSION);
    $des = 'img/category/'.$catimage;
    if(
    $extension =="jpg"||
    $extension =="png"||
    $extension =="jpeg"||
    $extension =="webp"
    ){
        if(move_uploaded_file($catTmpName,$des)){
            $quary = $pdo-> prepare("insert into categories (catname,catimage) values(:pn,:pi)");
            $quary->bindParam("pn",$catname);
            $quary->bindParam("pi",$catimage);
            $quary->execute();
            echo "<script>alert('category added')</script>";

        }
    }
}
?>