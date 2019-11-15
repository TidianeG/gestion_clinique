let formulaire = document.getElementById("formulaire");
let ajout = document.getElementById('ajout');
let conteneur = document.getElementById('conteneur');
let inputs = document.querySelector("#conteneur input");

function ajout__element(){
    let input1 = document.createElement('input');
    let input2 = document.createElement('input');

    input1.classList.add('form-control','col-6');
    input2.classList.add('form-control','col-6');

    conteneur.appendChild(input1);
    conteneur.appendChild(input2);
    conteneur.classList.add('row');
    let inputs = document.querySelector("#conteneur input");  
}
ajout.addEventListener('click', function(){
    ajout__element();
})

formulaire.addEventListener('submit', function(){
    let inputs = document.querySelector("#conteneur input");
    if(document.getElementById('email')==""){
        alert('le champ adresse email est obligatoire');
        document.getElementById('email').classList.add('alert', 'alert-danger');
    }
    else if(inputs.lengns==0){
        alert('veuiller selectionner au moins une option');
    }
    for(input of inputs){
        if(input.value==""){
            alert('leschamps doivent etre rempli')
        }
    }
});