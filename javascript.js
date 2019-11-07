let nom = document.getElementById("nom");
let email = document.getElementById("email");
let confirm_email = document.getElementById("confirm_email");
let message = document.getElementById("message");
let message_form = document.getElementById("message_form");
/*
message_form.addEventListener("submit", function(event){
    event.preventDefault();
    if(nom.value=="" || email.value=="" || confirm_email.value=="" || message.value==""){
        alert('Veuiller renseigner tous les champs');
    }
    else if(email.value != confirm_email){
        alert('Veuiller entrer des emails identique');
    }
    if(message_form.value < 3){
        alert('le message enter doit superieur a 3 caratere');
    }
    else{
        alert('Donnees envoyer');
    }
}); */
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////// PARTIE FONCTION /////////////////////////////////////////
////////////////////////// Fontion pour signaler une erreur sur le champ////////////////////////
function surligne(champ, erreur)
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

message_form.addEventListener("submit",
function verifForm(form)
{
   let nomOk = verifPseudo(form.nom);
   let mailOk = verifMail(form.email);
   let confirm_emailOK = verifMail(form.confirm_email)
   let messageOk = verifAge(form.message);
   
   if(nomOk && mailOk && messageOk && confirm_emailOK)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}