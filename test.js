var myform = document.getElementById('myform');

myform.addEventListener('submit', function(event){
    if(!formVal()){
        event.preventDefault();
    }
});

function formVal(){
    var email = document.getElementById('email');
    var password = document.getElementById('password');

    if(email.value == ''){
        email.classList.add('errorMessage');
    }else{
        email.classList.remove('errorMessage');
    }
    if(password.value == ''){
        password.classList.add('errorMessage');
    }else{
        password.classList.remove('errorMessage');
    }
    if(email.value != '' && password.value != ''){
        return true;
    }
    return false;
}
