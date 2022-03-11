const btnAdd = document.getElementById('ajout');
const select = document.getElementById('select');

var nbrElements = 0;
btnAdd.addEventListener('click',function() 
{
         nbrElements++;
         switch(select.value)
         {
             case 'texte':
                const form = document.getElementById("formulaire_question");
                const saisie = document.getElementById('saisie');
                const champs = document.createElement("div");
                champs.setAttribute("id", "champs");
                champs.setAttribute("class", "form-block");
                const label = document.createElement("label");
                label.setAttribute("for", "reponse");
                label.innerText= "Réponse"+nbrElements;
                const input = document.createElement("input");
                const input2 = document.createElement("input");
                input.setAttribute("type", "text");
                input.setAttribute("name", "input"+nbrElements);
                input2.setAttribute("type", "radio");
                input2.setAttribute("name", "radio"+nbrElements);
                const trash = document.createElement("img");
                trash.setAttribute ("src","img/delete.png");
                console.log(trash);
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
                });
                  if(nbrElements==1)
                  {
                      btnAdd.style.display="none";
                  }
                  
                  break;
                  case 'multi':
                    const form1 = document.getElementById("formulaire_question");
                    const saisie1 = document.getElementById('saisie');
                    const champs1 = document.createElement("div");
                    champs1.setAttribute("id", "champs");
                    champs1.setAttribute("class", "form-block");
                    const label1 = document.createElement("label");
                    label1.setAttribute("for", "reponse");
                    label1.innerText= "Réponse"+nbrElements;
                    const input1 = document.createElement("input");
                    const input21 = document.createElement("input");
                    input1.setAttribute("type", "text");
                    input1.setAttribute("name", "input[]");
                    input21.setAttribute("type", "checkbox");
                    input21.setAttribute("name", "check"+nbrElements);
                    const trash1 = document.createElement("img");
                    trash1.setAttribute ("src","img/delete.png");
                    saisie1.appendChild(champs1);
                    champs1.appendChild(label1);
                    champs1.appendChild(input1);
                    champs1.appendChild(trash1);

                    //supprimer
                    trash1.addEventListener('click',function(){
                       saisie1.removeChild(champs1);  
                       nbrElements--;
                      btnAdd.style.display="block";
                    });
              
              
                      if(nbrElements==4)
                      {
                          btnAdd.style.display="none";
                      }
                      break;
                      case 'unique':
                        const form2= document.getElementById("formulaire_question");
                        const saisie2 = document.getElementById('saisie');
                        const champs2 = document.createElement("div");
                        champs2.setAttribute("id", "champs");
                        champs2.setAttribute("class", "form-block");
                        const label2 = document.createElement("label");
                        label2.setAttribute("for", "reponse");
                        label2.innerText= "Réponse"+nbrElements;
                        const input12 = document.createElement("input");
                        const input22 = document.createElement("input");
                        input12.setAttribute("type", "text");
                        input12.setAttribute("name", "input"+nbrElements);
                        input22.setAttribute("type", "radio");
                        input22.setAttribute("name", "radio");
                        const trash2 = document.createElement("img");
                        trash2.setAttribute ("src","img/delete.png");
                        saisie2.appendChild(champs2);
                        champs2.appendChild(label2);
                        champs2.appendChild(input12);
                        champs2.appendChild(input22);
                        champs2.appendChild(trash2);
                        //supprimer
                        trash2.addEventListener('click',function(){
                           saisie2.removeChild(champs2);   
                           nbrElements--; 
                        });
                          if(nbrElements==4)
                          {
                              btnAdd.style.display="none";
                          }
                        break;
         }
      
});
  
/* select.addEventListener('change', function(){
    const field = document.getElementById('champs');
    select.removeChild(field);
}); */