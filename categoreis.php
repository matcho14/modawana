


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
   <link rel="stylesheet" href="./css/dashbord.css">
   <link rel="stylesheet" href="./css/all.min.css">
</head>
<body>
    <!---start content-->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10" id="main-area">
                    <div class="add-cate">
                        <form action="insert-cate.php" method="POST">
                            <div class="form-group">
                                <label for="category">تصنيف جديد</label>
                                <input type="text" name="Category" class="form-control">
                            </div>
                            <button class=" btn-custum" name="add">إضافة</button>
                        </form>
                    </div>
                </div>
                <div class="col-2" id="side-area">
                    <h4>لوحة التحكم</h4>
                    <ul>
                        <li>
                            <a href="#">
                                <span><i class="fas fa-tags"></i></span>
                                <span>التصنيفات</span>
                            </a>
                        </li>
                        <!---articls-->
                        <li data-bs-toggle="collapse" href="#collapseExample">
                            <a href="#">
                                <span><i class="far fa-newspaper"></i></span>
                                <span>المقالات</span>
                            </a>
                        </li>
                        <ul class="collapse" id="collapseExample">
                            <li>
                                <a href="new-post.php">
                                    <span><i class="far fa-edit"></i></span>
                                    <span>مقال جديد</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span><i class="fas fa-th-large "></i></span>
                                    <span>كل المقالات</span>
                                </a>
                            </li>

                        </ul>
                         <!---articls-->
                        <li>
                            <a href="#">
                                <span><i class="fas fa-tags"></i></span>
                                <span>إعرض الموقع</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span><i class="fas fa-tags"></i></span>
                                <span>تسجيل الدخول</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
                <div class="display-cat">
                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">رقم الفئة</th>
                                        <th scope="col">اسم الفئة</th>
                                        <th scope="col">تاريخ الإضافة</th>
                                        <th scope="col">حذف</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include('./include/connect.php');
                                            $query = "SELECT * FROM categories";
                                            $result = mysqli_query($conn,$query); 
                                            foreach($result as $arr){
                                                echo "<tr>";
                                               echo "<td>" .$arr['id']. "</td>"; 
                                               echo "<td>" .$arr['category_name']. "</td>"; 
                                               echo "<td>" .$arr['category_date']. "</td>";
                                               echo "<td> <button class='btn btn-outline-success'> حذف </button> </td>";
                                               echo "</tr>"; 
                                               
                                               
                                               
                                               ;
                                            }
                                        ?>
                                    </tbody>
                            </table>
                </div>

        </div>
    </div>
    <!---end content-->



    <script src="./js/bootstrap.js"></script>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/popper.min.js"></script>
</body>
</html>