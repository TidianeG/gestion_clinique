

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
    <?php echo @$_GET['user_id']; 
    try{ 
        $bd = new PDO("mysql:host=localhost;dbname=groupe2;charset=utf8", "gayeCHEIKH", "27ndawGAYE", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));   
        echo "connection etablie!!!!!!!!!!!";
    }
    catch (Exception $e) {
        die('Erreur fatale : ' . $e->getMessage());
    }

    $req = $bd->prepare("SELECT * FROM users ORDER BY id DESC");
    $req->execute();
    
     
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="container">

                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Prenom</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Email</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php while ($row = $req->fetch()) { ?>
                    <tr>
                      <td scope="col">#</td>
                      <td scope="col"><a href="user.php?user_id=<?= $row['id']?>"><?= $row['nom']?></a></td>
                      <td scope="col"><?php echo $row['prenom'] ?></td>
                      <td scope="col"><?php echo $row['email'] ?></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
   
</body>
</html>