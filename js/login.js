var showBtn = document.getElementById('showpassword');

showBtn.addEventListener("click", showPasswordText);

function showPasswordText(){
    if(document.getElementById('password').type === "password"){
        document.getElementById('password').type = "text";
    }
    else{
        document.getElementById('password').type = "password";
    }
}