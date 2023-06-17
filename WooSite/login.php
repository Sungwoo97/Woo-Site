<!DOCTYPE html>
<html lang="ko">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>
<body>
<div class="header-menu">
            <div class="header-menu_column">
                <span><a href="#"><i class="fas fa-bars"></i>
                    메뉴</span></a>
            </div>
            <div class="header-menu_column">
                <span><a href="admin.php">Woo</a></span>
            </div>
            <div class="header-menu_column">
                <span><a href="create-account.php">회원가입</a></span>            
                
            </div>            
        </div>
    <header class="welcome-header">
        <h1 class="welcome-header_title">안녕하세요 우 입니다</h1>
    <p class="welcome-header_text">
        로그인 해주세요
    </p></header>

    <form action="login-check.php" method="post" id="login-form">
        <input type="text" name="id" placeholder="ID">
        <input type="password" name="pass" placeholder="Password">
        <input type="button" id="loginbtn" value="Log In">
        <a href="#">계정이 기억나지 않으신다면</a>
    </form>
    <script src="js/login-input.js"></script>
    <script src="https://kit.fontawesome.com/6478f529f2.js" crossorigin="anonymous"></script>
</body>
</html>