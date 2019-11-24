<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>eMarket</title>

    <link

      rel="stylesheet"

      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"

      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"

      crossorigin="anonymous"

    />

</head>

<body>

<?php
<<<<<<< HEAD
    require_once(Eleves.php);
    require_once(Profs.php);
    $eleve=new Eleves("gaye", "cheikh", "gaye95cheikh@gmail.com","**********", "licence");
    echo $eleve->getNom();
    echo $eleve->getPrenom();
    echo $eleve->getEmail();
    echo $eleve->getPassword();
    echo $eleve->getNiveau();
    $note=["linux"=>17];
    $eleve->enregistreNotes($note);
    echo $eleve->getNotes();
?>
=======
//On importe les fichiers ici
require_once('Personnes.php');
require_once('Eleves.php');
require_once('Profs.php');

$prof = new Profs('Sall', 'Aliou', 'sall@mail.com', '******', 'Superieur', 'titulaire');
echo "<h1>Profil de:".$prof->getPrenom()." ".$prof->getNom()."</h1>";

echo "<h2>Classe:".$prof->getClass()."<h2>";

	echo "<h2>Profil:".$prof->getProfil()."<h2>";

    echo "<h2>Salaire:".$prof->getSalaire()."<h2><hr>";
    
   
    $el = new Eleves('Ndiaye','Ousmane','ous@gmail.com','jaja','licence3');
    echo "Les notes de matieres de l'eleve"." ".$el->getPrenom()." ".$el->getNom()."<br>";
    $tablo_notes = ["php"=>12,"javascript"=>15,"html"=>10,"css"=>19];

    $el->setNotes($tablo_notes);

    echo "Niveau: ". $el->getNiveau();

?>
<table class="table">

<tr>

  <td>Matiere</td>

  <td>notes</td>

</tr>

<?php

foreach ($el->getNotes() as $key => $value) 

{

  echo "<tr><td>$key</td><td>$value</td></tr>";

}
?>
  <tr><td colspan="2"><?php echo $el->moyenne(); ?></td></tr>

</table>

	

</body>

</html>



    
>>>>>>> 204d9a92107fe3cf31269830caaa8aa663b2af6e
