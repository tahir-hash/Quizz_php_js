const login=document.getElementById("login");
const password=document.getElementById("password");
const span1=document.getElementById("error_login");
const span2=document.getElementById("error_password");
const submit=document.getElementById("submit");


submit.onmouseover = function()
{
    let regex = new RegExp('[a-z0-9]+@[a-z]+\.[a-z]{2,3}');
    var letters = /[a-zA-Z]/; 
    var numbers =/[0-9]/; 
    //non respect des contraintes
    if(!regex.test(login.value))
    {
       // span1.innerText="Le login doit etre un email";
       alert("Le login doit etre un email");
    }
    
    if((password.value.length)<6 || !password.value.match(letters) || !password.value.match(numbers))
    {
        //span2.innerText="Le mot de passe n'est pas valide";
        alert("Le mot de passe doit contenir au moins 6 caractères et doit avoir aussi au moins une lettre et un chiffre");
    }
}