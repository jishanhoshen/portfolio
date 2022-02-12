
var email = document.querySelector('#username');
var password = document.querySelector('#password');
function inputValidation(){

    if(email.value == ''){
        email.classList.add('errorFild');
    }else{
        email.classList.remove('errorFild');
    }
    if(password.value == ''){
        password.classList.add('errorFild');
    }else{
        password.classList.remove('errorFild');
    }
    if(email.value != '' && password.value != ''){
        return true;
    }
}

document.querySelector('form').addEventListener('submit', (e)=>{
    if(!inputValidation()){
        e.preventDefault();
    }else{
        e.preventDefault();
        email.value;
        password.value;
        var errorMessage = document.getElementById('errorMessage');
        $.ajax({
            type: "post",
            url: 'signinaction.php',
            data: {
                email : email.value,
                password : password.value
            },
            dataType: "json",
            success : function(data){
                console.log(data);
                if(data['error']){
                    if(data['errorType'] == 'email'){
                        email.classList.add('errorFild');
                        password.classList.add('errorFild');
                        errorMessage.classList.add('errorMessage');
                        errorMessage.innerHTML = data['errorMessage'];
                    }
                    if(data['errorType'] == 'password'){
                        password.classList.add('errorFild');
                        errorMessage.classList.add('errorMessage');
                        errorMessage.classList.add('errorMessage');
                        errorMessage.innerHTML = data['errorMessage'];
                    }
                }
                if(data['success']){
                    email.classList.remove('errorFild');
                    password.classList.remove('errorFild');
                    errorMessage.classList.remove('errorMessage');
                    errorMessage.classList.add('successMessage');
                    errorMessage.innerHTML = data['successMessage'];
                }
            }
        });

    }
}, false);