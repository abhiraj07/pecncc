let signupBtn = document.getElementById("signupBtn");
let signinBtn = document.getElementById("signinBtn");
let nameField = document.getElementById("nameField");
let title = document.getElementById("title");
let underline = document.querySelector(".underline");
let text = document.querySelector(".text");

signinBtn.onclick = function(){
    nameField.style.maxHeight = "0";
    title.innerHTML = "Sign In";
    text.innerHTML = "Lost Password? ";
    signupBtn.classList.add('disable');
    signinBtn.classList.remove('disable');
    underline.style.transform = "translateX(45px)";


}

signupBtn.onclick = function(){
    nameField.style.maxHeight = "60px";
    title.innerHTML = "Sign Up";
    text.innerHTML = "Password Suggestions. ";
    signupBtn.classList.remove('disable');
    signinBtn.classList.add('disable');
    underline.style.transform = "translateX(0)";


}
