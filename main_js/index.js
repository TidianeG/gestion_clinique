let formulaire = document.getElementById("formulaire");
let ajout = document.getElementById('ajout');
let conteneur = document.getElementById('conteneur');
let inputs = document.querySelectorAll("#conteneur input");

function ajout__element(){

    let input1 = document.createElement('input');
    let input2 = document.createElement('input');

    input1.classList.add('form-control','col-6');
    input2.classList.add('form-control','col-6');

    conteneur.appendChild(input1);
    conteneur.appendChild(input2);
    conteneur.classList.add('row');
    inputs = document.querySelectorAll("#conteneur input");  

}


formulaire.addEventListener('submit', function(event){
    event.preventDefault();
    let nom=document.getElementById('nom');
    let prenom=document.getElementById('prenom');
    let email=document.getElementById('email');
    let error_message= document.getElementById('error');
    let genreF=document.getElementById('genreF');
    let genreM=document.getElementById('genreM');
    let error="";
    let tableau_error=[];
    // inputs = document.querySelector("#conteneur input");
    /*email.addEventListener("keyup", function (event) {
        if(email.validity.typeMismatch) {
          email.setCustomValidity("J'attend un e-mail, mon cher !");
        } else {
          email.setCustomValidity("");
        }
    });*/
    if(email.value==""){
        tableau_error.push("<label class='alert alert-danger'>Le chmap email est vide</label>");
        email.classList.add('alert', 'alert-danger');
       
    }
     if(nom.value==""){
        tableau_error.push("<label class='alert alert-danger'>Le chmap nom est vide</label>");
       nom.classList.add('alert', 'alert-danger');
    }
    if(prenom.value==""){
        tableau_error.push("<label class='alert alert-danger'>Le chmap prenom est vide</label>");
        prenom.classList.add('alert', 'alert-danger');
    }
    if(!genreF.checked && !genreM.checked){
        tableau_error.push("<label class='alert alert-danger'>Veuiller selectionner le genre</label>");
        
    }
    for(let i=0;i<tableau_error.length;i++){
        error+=tableau_error[i]+"";
    }
         if(error!=""){
            error_message.innerHTML=error;
         }
    /*else if(inputs.length==0){
        alert('veuiller selectionner au moins une option');
    }   
    else{    
        for(input of inputs){
            if(input.value==""){
                alert('les champs doivent etre rempli')
            }
        }
    }*/
    else if(nom.value!=="" && prenom.value!=="" && email.value!=="" && (genreM.checked==true || genreF.checked==true)){
        formulaire.submit();
    }
    
});
