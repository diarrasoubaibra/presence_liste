<?php
require_once './src/Connection.php';
require_once './src/Person.php';
require_once './src/PersonTable.php';

use App\Person;
use App\Connection;
use App\PersonTable;

$pdo = Connection::getPDO();
$person = new Person();

if (!empty($_POST)) {

  $person->setFirstname(htmlentities($_POST['firstname']));
  $person->setLastname(htmlentities($_POST['lastname']));
  $person->setEmail(htmlentities($_POST['email']));
  $person->setPhone(htmlentities($_POST['phone']));
  $ok = (new PersonTable($pdo))->create($person);
  if ($ok) {
    header("Location: ./view/personsView.php");
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="./public/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>

    <header>
        <nav class="navbar navbar-expand">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">New</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./view/personsView.php">List</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="container mt-5">
        <form action="" method="post">
            <h1 class="text-center">Formulaire d'enregistrement</h1>
            <hr />
            <div class="form-group">
                <label for="">Prénom(s)</label>
                <input type="text" name="firstname" class="form-control" />
            </div>
            <div class="form-group">
                <label for="firstname">Nom</label>
                <input type="text" name="lastname" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">Téléphone</label>
                <input type="tel" name="phone" class="form-control" />
            </div>
            <button class="btn btn-primary mt-2">Enregister</button>
        </form>
    </div>
</body>

</html>