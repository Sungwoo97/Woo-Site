
const userPassInfo = document.querySelector('input[name="pass"]');
const userPassConfirmInfo = document.querySelector('input[name="pass_confirm"]');
const userNameInfo = document.querySelector('input[name="name"]');
const userEmail1Info = document.querySelector('input[name="email1"]');
const userEmail2Info = document.querySelector('input[name="email2"]');
const userForm = document.getElementById("create-account_info");


const submitBtn =  document.getElementById("submit-btn");
const resetBtn =  document.getElementById("reset-btn");

console.log(userPassInfo);

function SubmitCheckInput(){
    
    if(!userPassInfo.value){
        alert("비밀번호를 입력하세요");
        userPassInfo.focus();
        return;
    }
    if(!userPassConfirmInfo.value){
        alert("비밀번호 확인란을 입력하세요");
        userPassConfirmInfo.focus();
        return;
    }
    if(!userNameInfo.value){
        alert("이름을 입력하세요");
        userNameInfo.focus();
        return;
    }
    if(!userEmail1Info.value){
        alert("이메일을 입력하세요");
        userEmail1Info.focus();
        return;
    }
    if(!userEmail2Info.value){
        alert("이메일을 입력하세요");
        userEmail2Info.focus();
        return;
    }  
    if (userPassInfo.value != userPassConfirmInfo.value) {
      alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
      userPassInfo.focus();
      userPassInfo.select();
      return;
  }
    
    userForm.submit();
}
function ResetBtnInput(){
    
    userPassInfo.value="";
    userPassConfirmInfo.value="";
    userNameInfo.value="";
    userEmail1Info.value="";
    userEmail2Info.value="";
    return;
}


submitBtn.addEventListener("click",SubmitCheckInput);
resetBtn.addEventListener("click", ResetBtnInput);
