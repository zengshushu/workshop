<!doctype html>
<html lang="en">
<!-- 
            黑月/BlackMoon V1 
  -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" id="viewport" content="width=device-width,initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>黑月 / WorkShop1</title>
    <meta name="description" content="这里是黑月制作的守望先锋地图工坊代码分享地~">
    <meta name="keywords" content="守望先锋 OW 地图工坊 守望先锋地图工坊 自定义 分享">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <nav>
        <a href="https://zengshushu.github.io/PersonalWebSite/" >Index</a>
        <a class="clip"></a>
        <a href="https://zengshushu.github.io/PersonalWebSite/blog.html">Blog</a>
        <a href="#">Gate</a>
        <a href="https://zengshushu.github.io/PersonalWebSite/lab.html" class="active">Lab</a>
        <a class="clip"></a>
        <a href="#">Nyanket</a>
    </nav>
    <div class="container1">
        <input type="text" maxlength="12" placeholder="搜索..." class="searchbar">
        
    </div>
    <header>
        <div class="container">
            <div class="logo">
                <h1 class="word">WorkShop</h1>
                <div class="circle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>


    <div class="container">
        <?php
        $con=mysqli_connect("localhost", "root", "zlx7895123")or die("canot connect server");
        mysqli_select_db($con,"owwp")or die("cannot select DB");   
        mysqli_set_charset($con,"UTF8");  
        $sql = "SELECT * FROM codes";
                //执行SQL语句
        $result=mysqli_query($con,$sql);
        while ($row = mysqli_fetch_assoc($result)){
            echo '<div class="infro">';
            echo'<div class="photo-card">';
            echo' <div class="photo-details">';
            echo' <h1>'.$row["codename"].'</h1>';
            echo'<span class="photo-author">By <a href="#" title="Photos by Jessie Parker"
                            rel="author">zss</a></span>';
            echo' <p>'.$row["intro"].'</p>';
            echo'<div class="photo-meta">';
            echo ' <div class="equipment">';
            echo '<h4>代码</h4>';          
            echo '<ul><li>'.$row["code"].'</li></ul></div>';
            echo '<div class="resolution">';
          
            echo '<h4>一句话</h4>';
            echo '<ul><li>'.$row["ones"].'</li></ul>';
            echo '</div></div><div class="photo-tags"><h4>标签</h4><ul>';
            echo '<li><a href="">'.$row["tag"].'</a></li>
                            
                            <li><a href="">开发中</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>';

        }
         //关闭数据库
        mysqli_close($con);  
        ?>
                
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/main.js"></script>
</body>

</html>