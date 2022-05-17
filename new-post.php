<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
   
   <link rel="stylesheet" href="./css/all.min.css">
   <link rel="stylesheet" href="./css/dashbord.css">
</head>
<body>
    <div class="col-2 float-end" id="side-area">
        <h4>لوحة التحكم</h4>
        <ul>
            <li>
                <a href="categoreis.php">
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
                    <a href="new-post.html">
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
    <div class="col-10 float-end" id="main-area">
        <button class="btn-custum">مقال جديد</button>
        <div class="add-cate">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="title">عنوان المقال</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="cate"> التصنيف</label>
                    <select name="" id="cate" class="form-control">
                        <option value="">لوجر</option>
                        <option value="">php</option>
                        <option value="">برمجة</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="image">صورة المقال</label>
                    <input type="file" id="image" name="post-image" class="form-control">
                </div>
                <div class="form-control">
                    <label for="content">نص المقال</label>
                    <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button class=" btn-custum" name="add">نشر المقال</button>
            </form>
        </div>
    </div>
    
    <script src="./js/bootstrap.js"></script>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/popper.min.js"></script>
</body>
</html>