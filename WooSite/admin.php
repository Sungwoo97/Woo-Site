<!DOCTYPE html>
<html lang="ko">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woo Site</title>
</head>
<body> 
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";
    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";
?>   
        <div class="header-menu">
            <div class="header-menu_column">
                <span><a href="#"><i class="fas fa-bars"></i>
                    메뉴</span></a>
            </div>
            <div class="header-menu_column">
                <span><a href="#">Woo</a></span>
            </div>
            <?php
            if(!$userid){
              ?>
            <div class="header-menu_column">
                <span><a href="create-account.php">회원가입</a></span>            
                <span><a href="login.php">로그인</a></span>
            </div> 
            <?php
            }else{
              $logged = $username."(".$userid.")님";
              ?>
            <div class="header-menu_column">
                <span><a href="logout.php">로그아웃</a></span>            
                <span><a href="edit-account.php">정보수정</a></span>
            </div>
                <?php
            }
            ?>      
        </div>
        <div class="main-menu">
            
            <div class="main-menu_logo"><a href="#">Portfolio</a></div>
            <div class="main-menu_column"><a href="#">뉴스</a></div>
            <div class="main-menu_column"><a href="#">가이드</a></div>
            <div class="main-menu_column"><a href="#">랭킹</a></div>
            <div class="main-menu_column"><a href="#">커뮤니티</a></div>
            <div class="main-menu_column"><a href="#">미디어</a></div>
        
        </div>
            <div class="slideshow-main_container">

                <!-- 숫자와 캡션이 있는 이미지 -->
                <div class="slideshow-main_img fade">
                  <div class="slideshow-main_text">1 / 4</div>
                  <img src="img/lara.jpg" style="width:100%">
                  
                </div>
              
                <div class="slideshow-main_img fade">
                  <div class="slideshow-main_text">2 / 4</div>
                  <img src="img/mshalloween.jpg" style="width:100%">
                  
                </div>
              
                <div class="slideshow-main_img fade">
                  <div class="slideshow-main_text">3 / 4</div>
                  <img src="img/newyear.jpg" style="width:100%">
                  
                </div>
                <div class="slideshow-main_img fade">
                    <div class="slideshow-main_text">4 / 4</div>
                    <img src="img/xmas.jpg" style="width:100%">
                    
                  </div>
                <!-- 다음, 이전 이미지 버튼 -->
                <a class="slideshow-main_prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="slideshow-main_next" onclick="plusSlides(1)">&#10095;</a>
              </div>
              <br>
              
              <!-- 현재 이미지를 알려주는 하단의 점 -->
              <div style="text-align:center">
                <span class="slideshow-main_dot" onclick="currentSlide(1)"></span> 
                <span class="slideshow-main_dot" onclick="currentSlide(2)"></span> 
                <span class="slideshow-main_dot" onclick="currentSlide(3)"></span>
                <span class="slideshow-main_dot" onclick="currentSlide(4)"></span>  
              </div>
            </div> 
        
            </div>
        <script src="js/slider-main.js"></script>
    <script src="https://kit.fontawesome.com/6478f529f2.js" crossorigin="anonymous"></script>
</body>
</html>