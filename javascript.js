let nom = document.getElementById("nom");
let email = document.getElementById("email");
let confirm_email = document.getElementById("confirm_email");
let message = document.getElementById("message");
let message_form = document.getElementById("message_form");

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
});