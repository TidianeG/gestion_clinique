<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
</head>
<body>
<?php
    $id=  @$_GET['user_id'];
    try{ 
        $bd = new PDO("mysql:host=localhost;dbname=groupe2;charset=utf8", "gayeCHEIKH", "27ndawGAYE", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));   
        echo "connection etablie!!!!!!!!!!!";
    }
    catch (Exception $e) {
        die('Erreur fatale : ' . $e->getMessage());
    }

    $req = $bd->prepare("SELECT * FROM users WHERE id=?");
    $req->execute([$id]);

?>
<div class="container">
        <div class="row justify-content-center">
            <div class="container">

                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Prenom</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Email</th>
                      <th scope="col">Genre</th>
                      <th scope="col">Groupe</th>
                      <th scope="col">Password</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php while ($row = $req->fetch()) { ?>
                    <tr>
                      <td scope="col"><?php echo $row['id']?> </td>
                      <td scope="col"><?php echo $row['prenom']?> </td>
                      <td scope="col"><?php echo $row['nom'] ?></td>
                      <td scope="col"><?php echo $row['email'] ?></td>
                      <td scope="col"><?php echo $row['genre'] ?></td>
                      <td scope="col"><?php echo $row['groupe'] ?></td>
                      <td scope="col"><?php echo $row['password'] ?></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
