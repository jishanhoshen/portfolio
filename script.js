// Event for Handling Password field and it's eye icon
document.querySelectorAll('.eye').forEach(item => {
    item.addEventListener('click', () => {
        // toggle the type attribute
        const type = item.previousElementSibling.getAttribute("type") === "password" ? "text" : "password";
        item.previousElementSibling.setAttribute("type", type);

        // toggle the icon
        const eyeBtn = item.firstElementChild.getAttribute("class") === "fa-solid fa-eye-slash" ? "fa-solid fa-eye": "fa-solid fa-eye-slash";
        item.firstElementChild.setAttribute("class", eyeBtn);
    });
});

document.querySelector('form').addEventListener('submit', ()=>{
    document.querySelectorAll('.eye').forEach(e => {
        // toggle the type attribute
        e.previousElementSibling.setAttribute('type', 'password');
        
        // toggle the icon
        e.firstElementChild.setAttribute('class', 'fa-solid fa-eye-slash');
    });
})







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












