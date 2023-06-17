<!DOCTYPE html>
<html lang="ko">
<head> 
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Account info</title>
<link rel="stylesheet" href="css/style.css">


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
                <span><a href="admin.php">Woo</a></span>
            </div>
            <div class="header-menu_column">
                          
                <span><a href="#"></a></span>
            </div>            
        </div>
<?php    
   	$con = mysqli_connect("localhost", "root", "", "sample");
    $sql    = "select * from info where id='$userid'";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_array($result);

    $pass = $row["pass"];
    $name = $row["name"];

    $email = explode("@", $row["email"]);
    $email1 = $email[0];
    $email2 = $email[1];

	
    mysqli_close($con);
?>
	<section>
		
        <div class="create-account_content">
      		<div class="create-account_main">
          	<form id="create-account_info" method="post" action="edit-account_insert.php?id=<?=$userid?>">
			    <h2>회원 정보수정</h2>
    		    	<div class="create-account_form id">
				        <div class="create-account_input"><?=$userid?></div>                 
			       	</div>
			       	<div class="clear"></div>

			       	<div class="create-account_form">
				        
				        <div class="create-account_input">
							<input type="password" name="pass" value="<?=$pass?>">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="create-account_form">
				        
				        <div class="create-account_input">
							<input type="password" name="pass_confirm" value="<?=$pass?>">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="create-account_form">
				        
				        <div class="create-account_input">
							<input type="text" name="name" value="<?=$name?>">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="create-account_form email">
				        
				        <div class="create-account_input">
							<input type="text" name="email1" value="<?=$email1?>">@<input 
							       type="text" name="email2" value="<?=$email2?>">
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
	
	<script src="js/edit-account_check.js"></script>
	<script src="https://kit.fontawesome.com/6478f529f2.js" crossorigin="anonymous"></script>
</body>
</html>

