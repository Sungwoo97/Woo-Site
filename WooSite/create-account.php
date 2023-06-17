<!DOCTYPE html>
<html lang="ko">
<head> 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Account</title>
<link rel="stylesheet" href="css/style.css">

</head>
<body> 
	
	<section>
    <div class="header-menu"> 
            <div class="header-menu_column">
                <span><a href="#"><i class="fas fa-bars"></i>
                    메뉴</span></a>
            </div>
            <div class="header-menu_column">
                <span><a href="admin.php">Woo</a></span>
            </div>
            <div class="header-menu_column">
                <span><a href="login.php">로그인</a></span>
            </div>            
        </div>
        
        <div class="create-account_content">
      		<div class="create-account_main">
          	<form  id="create-account_info" method="post" action="create-account_insert.php">
			    <h2>회원 가입</h2>
    		    	<div class="create-account_form id">
				        
				        <div class="create-account_input">
							<input type="text" id="id"name="id" placeholder="ID">
				        </div>  
				        <div >
                        <input type="button" id="check-id_btn" value="Check"  >
				        </div>                 
			       	</div>
			       	<div class="clear"></div>

			       	<div class="create-account_form">
				        
				        <div class="create-account_input">
							<input type="password" name="pass" placeholder="Password">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="create-account_form">
				        
				        <div class="create-account_input">
							<input type="password" name="pass_confirm" placeholder="Password Confirm">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="create-account_form">
				        
				        <div class="create-account_input">
							<input type="text" name="name" placeholder="Name">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="create-account_form email">
				        
				        <div class="create-account_input">
							<input type="text" name="email1"placeholder="Email(aaa23)">@<input type="text" name="email2" placeholder="Naver.com">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="bottom_line"> </div>
			       	<div class="buttons">
	                	<input type="button" value="확인" id="submit-btn"  />
                  		<input type="button" value="취소" id="reset-btn" style="cursor:pointer" 
                  			/>
	           		</div>
           	</form>
        	</div> <!-- join_box -->
        </div> <!-- main_content -->
	</section> 
	<script src="js/create-account_check.js"></script>
	<script src="https://kit.fontawesome.com/6478f529f2.js" crossorigin="anonymous"></script>
</body>
</html>

