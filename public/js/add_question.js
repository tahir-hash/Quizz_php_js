const btnAdd = document.getElementById('ajout');
const selectChamps = document.getElementById('select');
const plus =document.getElementById('plus');
const moins =document.getElementById('moins');
const nombre= document.getElementById('nombre');
const questions= document.getElementById('textarea');
const formulaire_question= document.getElementById('formulaire_question');
//validation
function showError(input, message) {//Afficher les messages d'erreur
  const formControl = input.parentElement;
  formControl.className = 'form-block error';
  const small = formControl.querySelector('small');
  small.innerText = message;
}
//
function showSuccess(input) {
  const formControl = input.parentElement;
  formControl.className = 'form-block success'; 
}
//
//

function getFieldName(input) {//Retour le nom de chaque input en se basant sur son id
  return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

function isNumber(input)
{

  if(isNaN(input.value))
  {
    showError(input,`La saisie doit être un nombre`);
    return true;
  }
  else if(!isNaN(input.value) && input.value<=0)
  {
    showError(input,`La saisie doit être un nombre Positif`);
    return true;
  }
  else
  {
    showSuccess(input);
  }
}
function emptyChamps(champInput)
{
    if(champInput.value==='')
    {
      showError(champInput,`Ce champ est obligatoire`);
      return true;
    }
    else
    showSuccess(champInput);
}

function question_form() //
{
   if(isNumber(nombre) || emptyChamps(questions) || emptyChamps(select))
   {
      return false;
   }
}
//increment
if(nombre.value==1)
  {
    moins.style.visibility="hidden";
  }
  
plus.addEventListener('click', ()=>{
  nombre.value++;
  moins.style.visibility="visible";
});
//decrement
moins.addEventListener('click', ()=>{
 
  if(nombre.value>1)
  {
    nombre.value--;
  }
  if(nombre.value==1)
  {
    moins.style.visibility="hidden";
  }
  
});

btnAdd.style.display="none";
var nbrElements = 0;
select.addEventListener('change', function(){
btnAdd.style.display="block";

});
btnAdd.addEventListener('click',function() 
{
  select.addEventListener('change', function(){
    nbrElements=0;
    saisie.removeChild(champs);
});
         nbrElements++; 
         //all
                const saisie = document.getElementById('saisie');
                const champs = document.createElement("div");
                champs.setAttribute("id", "champs");
                champs.setAttribute("class", "form-block");
                const label = document.createElement("label");
                label.setAttribute("class", "lab lab_que");
                label.innerText= "Réponse"+nbrElements;
                const input = document.createElement("input");
                input.setAttribute("class", "input");
                const input2 = document.createElement("input");
                input2.setAttribute('class',"newin");
                const small= document.createElement('small');
                input2.style.width='24px';
                input2.style.height='24px';
                input.setAttribute("type", "text");
                const trash = document.createElement("img");
                trash.setAttribute ("src","img/delete.png");
                trash.setAttribute ("height","33px");
                input.setAttribute("name", "input[]");

         //switch
         switch(select.value)
         {
             case 'texte':
              input2.setAttribute("name", "text[]");
              input2.setAttribute("type", "radio");
                //input2.remove;
                if(nbrElements==1)
                  {
                      btnAdd.style.display="none";
                  }
              break;
              case 'multi':
                input2.setAttribute("type", "checkbox");
                input2.setAttribute("name", "checkbox[]");
                input2.setAttribute("value", nbrElements);
              
                if(nbrElements==4)
                  {
                      btnAdd.style.display="none";
                  }
              break;
              case 'unique':
                input2.setAttribute("type", "radio");
                input2.setAttribute("name", "radio");
                input2.setAttribute("value", nbrElements);
                if(nbrElements==4)
                  {
                      btnAdd.style.display="none";
                  }
              break;
         }
                saisie.appendChild(champs);
                champs.appendChild(label);
                champs.appendChild(input);
                champs.appendChild(input2);
                champs.appendChild(trash);
                champs.appendChild(small);
                //supprimer
                trash.addEventListener('click',function(){
                 saisie.removeChild(champs);  
                  nbrElements--; 
                //console.log(label);
                  btnAdd.style.display="block";
                  rebuild();
               });
               //remove
               formulaire_question.addEventListener('submit', function(){
                 if(emptyChamps(input))
                 {
                   return false;
                 }
               });
});

function rebuild()
{
  let rep= document.querySelectorAll('.lab');
      rep.forEach((label,a)=>{
        a++;
        label.innerText= "Réponse"+a;
      });
  let allInputs=document.querySelectorAll('.newin');
      allInputs.forEach((input2,b)=>{
        b++
        input2.setAttribute("value", b);
      });
}
