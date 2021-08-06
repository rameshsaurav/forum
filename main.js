var username = document.getElementById("uname");
var password = document.getElementById("pass");
var email = document.getElementById("email")
var form1 = document.getElementById('login');
var error  = document.getElementById("msg_error");
var x  = /^([a-z 0-9\.-]+)@([a-z 0-9-]+).([a-z]{2,8})$/;
var y = /^w+[+.w-]*@([w-]+.)*w+[w-]*.([a-z]{2,4}|d+)$/i;
function Validate(){
    
    if (username.value == ""|| password.value == ""){
        error.style.visibility = "visible";
        return false;
    }
    else {
        return true;
    }
}
function Validate1(){

    if (username.value == ""|| password.value == ""|| email.value == ""){
        error.style.visibility = "visible";
        return false;
    }
}
function reply(){
    document.getElementById("reply").style.visibility = "visible";
}
