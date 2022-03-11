const btnAdd = document.getElementById('ajout');
const select = document.getElementById('select');
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
                label.setAttribute("for", "reponse");
                label.innerText= "Réponse"+nbrElements;
                const input = document.createElement("input");
                input.setAttribute("class", "input");
                const input2 = document.createElement("input");
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
                //supprimer
                trash.addEventListener('click',function(){
                  saisie.removeChild(champs);  
                  nbrElements--; 
                  btnAdd.style.display="block";
                  console.log(AllInputs);
               });

               //remove
               
      
});
  //validation

/*   function checkRequired(inputArray) {// Tester si les champs ne sont pas vides
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
} */

