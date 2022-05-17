<?php
include('./include/connect.php');
    
$catName = $_POST['Category'];
$catAdd = $_POST['add'];
   


if(isset($catAdd)){
   
    
    if(empty($catName)){
        echo "<script>alert('يجب إدخال اسم التصنيف')</script>";
        echo "<script>window.location.assign('categoreis.php')</script>";
        
    }
    else{
        $query = "INSERT INTO categories (category_name) VALUES ('$catName');";
        $conn->query($query);
        echo "<script>alert('تمت الأضافة بنجاح')</script>";
        echo "<script>window.location.assign('categoreis.php')</script>";
       
    }
}

 


?>