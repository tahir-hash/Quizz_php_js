const form = document.getElementById('form');
const nom = document.getElementById('nom');
const prenom = document.getElementById('prenom');
const login = document.getElementById('login');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const small=document.getElementsByTagName('small');
//Functions-------------------------------------------------------------
function showError(input, message) {//Afficher les messages d'erreur
    const formControl = input.parentElement;
    formControl.className = 'form-control error';
    const small = formControl.querySelector('small');
    small.innerText = message;
}
//
function showSuccess(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success'; 
}
//
function checkEmail(input) {//Tester si l'email est valide :  javascript : valid email
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (re.test(input.value.trim().toLowerCase())) {
        showSuccess(input);
    } else {
        showError(input,`Email is not valid!`);
        return true;
    }
}
//
function checkRequired(inputArray) {// Tester si les champs ne sont pas vides
    inputArray.forEach(input => {
        if (input.value.trim() === '') {
            showError(input,`${getFieldName(input)} est obligatoire`);
            return true;
        }else{
            showSuccess(input);
        }
    });
}
//
function getFieldName(input) {//Retour le nom de chaque input en se basant sur son id
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}
//
function checkLength(input, min, max) {//Tester la longueur de la valeur  d'un input
    if(input.value.length < min){
        showError(input, `${getFieldName(input)} doit avoir au moins ${min} caracteres!`);
        return true;
    }else if(input.value.length > max){
        showError(input, `${getFieldName(input)} doit avoir au maximum ${max} caracteres !`);
    }else{
        showSuccess(input);
    }
}
//
function checkPasswordMatch(input1, input2) {
    if (input1.value !== input2.value) {
        showError(input2, 'Passwords do not match!');
        return true;
    }
}
function validPassword(input)
{
    var letters = /[a-zA-Z]/; 
    var numbers =/[0-9]/; 
    if(!password.value.match(letters) || !password.value.match(numbers))
    {
        showError(input, 'Le mot de passe doit contenir au moins une lettre et un chiffre');
        return true;
    }
}

function valider()
{
    
   
   if(checkRequired([nom,prenom,login, password, password2]) || checkEmail(login) ||checkLength(password, 6, 25) ||validPassword(password) || checkPasswordMatch(password,password2))
   {
    return false;
   }
}