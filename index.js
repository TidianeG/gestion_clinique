let formulaire = document.getElementById("formulaire");
let ajout = document.getElementById("ajout");
ajout.addEventListener("click", function(){
    let element_h2 = document.createElement("div")
    element_h2.classList.add("row")
    element_h2.setAttribute("id", "opt")
    element_h2.innerHTML = '<input type="text" id="in1" placeholder="option Nom" class="col-6"> <input type="text" id="in2" placeholder="Valeur option" class="col-6">'
    document.getElementById("conteneur").appendChild(element_h2)
});
formulaire.addEventListener("submit", function(){
    let email= document.getElementById("email");
   
        if(email.value==""){
        email.classList.add('alert', 'alert-danger')
        alert("le champ email est obligatoire")
    }
     if(document.getElementById("conteneur").e==""){
        alert("veuiller selection au moins une option")
    }
    else if(document.getElementById("in1").value=="" || document.getElementById("in1").value==""){
        alert("Tous les deux champs doivent etre rempli")
    } 
});