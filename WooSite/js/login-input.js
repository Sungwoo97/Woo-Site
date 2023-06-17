const loginIdInfo = document.querySelector('input[name="id"]');
const loginPassInfo = document.querySelector('input[name="pass"]');

const loginSubmitBtn = document.querySelector('input[id="loginbtn"]');
const loginForm = document.querySelector("#login-form");


function LoginSubmitInput(){
    if(!loginIdInfo.value){
        alert("아이디를 입력하세요");
        loginIdInfo.focus();
        return;
    }
    if(!loginPassInfo.value){
        alert("비밀번호를 입력하세요");
        loginPassInfo.focus();
        return;
    }
    loginForm.submit();
}

loginSubmitBtn.addEventListener("click", LoginSubmitInput);