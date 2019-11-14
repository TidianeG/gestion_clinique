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
    // inputs = document.querySelector("#conteneur input");
    if(document.getElementById('email').value==""){
        alert('le champ adresse email est obligatoire');
        document.getElementById('email').classList.add('alert', 'alert-danger');
    }
    else if(document.getElementById('nom').value==""){
        alert('Veuiller renseigner le champs nom');
        document.getElementById('nom').classList.add('alert', 'alert-danger');
    }
    else if(document.getElementById('prenom').value==""){
        alert('Veuiller renseigner le champs prenom');
        document.getElementById('prenom').classList.add('alert', 'alert-danger');
    }
    else if(!document.getElementById('genreM').checked && !document.getElementById('genreF').checked){
        alert('Veuiller renseigner le genre');
        
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
    else{
        formulaire.submit();
    }
    
});
