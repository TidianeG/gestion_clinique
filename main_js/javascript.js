let nom = document.getElementById("nom");
let email = document.getElementById("email");
let confirm_email = document.getElementById("confirm_email");
let message = document.getElementById("message");
let message_form = document.getElementById("message_form");
let inputs = document.getElementsByTagName("input");
let message_error = document.getElementById("error");

message_form.addEventListener("change", function(event){
   let message_erreur = "";
   let row= document.querySelector('.row');
    event.preventDefault();
    for(let i=0; i<inputs.length; i++){
      if(inputs[i].value == ""){
         message_erreur+="Veuiller renseigner tous les champs";
         //row.classList.add('alert', 'alert-danger')
      }
      break;
    }
    if(inputs[1].value != inputs[2].value){
      
      message_erreur+="Les email ne sont pas conformes";

    }
    else if(message.value.length<=3){
      message_erreur+="Veuiller ecrire un message plus long";
    }
    if(message_erreur===""){
      row.classList.remove('alert', 'alert-danger');
      row.classList.add('alert', 'alert-success');
      message_error.innerText="Formulaire valide";
      document.querySelector('.btn').disabled=false;
    }  
    else{
      row.classList.add('alert', 'alert-danger')
      message_error.innerText=message_erreur;
      document.querySelector('.btn').disabled=true;
    } 
});



////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////// PARTIE FONCTION /////////////////////////////////////////
////////////////////////// Fontion pour signaler une erreur sur le champ////////////////////////
/*function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}

////////////////////////////FONCTION verification nom/////////////////////////////////
function verifNom(champ)
{
   if(champ.value== "")
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

/////////////////////////// FONCTION de verification de la conformité des emails entré
function verifMail(champ)
{
   //let format = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   let email2 = document.getElementById("email");
   let email_confirm2 = document.getElementById("confirm_email");
   if(email2 != email_confirm2)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
////////////////////// FONCTION Verification de la taille du message////////////////////////
function verifMessage(champ)
{
   if(champ.value.length < 3)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
//////////////////////////////////////FONCTION verification du formulaire///////////////////////////

function verifForm(form,event)
{
   let nomOk = verifPseudo(form.nom);
   let mailOk = verifMail(form.email);
   let confirm_emailOK = verifMail(form.confirm_email)
   let messageOk = verifAge(form.message);
   
   if(nomOk && mailOk && messageOk && confirm_emailOK)
      return true;
   else
   {
      event.preventDefault();
      alert("Veuillez remplir correctement tous les champs");
      return false;

   }
   
}*/