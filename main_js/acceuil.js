let formulaire=document.getElementById("formulaire");
formulaire.addEventListener("click", function(event){
    event.preventDefault();
    let login=document.getElementById("login");
    let pass=document.getElementById("pass");
    let option1=document.getElementById('option1');
    let option2=document.getElementById('option2');
    let error_champ=document.getElementById('error_champ');
    let select = document.getElementById('select');
    let info_login=document.getElementById('info_login');
    let info_pass=document.getElementById('info_pass');
    if(option1.selected==false && option2.selected==false){
        //document.getElementById('select').classList.add('alert', 'alert-danger');
        select.innerHTML="<div class='alert alert-danger'>Veuiller selectionner une option</div>";
    }
    else if(login.value==""){
        login.classList.add('alert', 'alert-danger');
       info_login.innerHTML="<div class='alert alert-danger'>Veuiller saisir votre login</div>";
    }
    else if(pass.value==""){
        pass.classList.add('alert', 'alert-danger');
        info_pass.innerHTML="<div class='alert alert-danger'>Veuiller saisir votre mot de pass</div>";
    }
    else if(login.value!=="" && pass.value!=="" && (option2.selected==true || option1.selected==true)){
        formulaire.submit();
    }
});