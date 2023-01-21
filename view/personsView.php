<?php
require_once './../src/PersonTable.php';
require_once './../src/Connection.php';

use App\Connection;
use App\PersonTable;


$pdo = Connection::getPDO();
$table = new PersonTable($pdo);
$persons = $table->findAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../public/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Persons-List</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">New</a>
                </li>
            </ul>
        </nav>
    </header>


    <div class="container">
        <h1 class="text-center">List of All the Persons</h1>
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Firstanme</th>
                <th>Lastname</th>
                <th>Phone</th>
                <th>Email</th>
            </thead>
            <tbody>
                <?php foreach ($persons as $person): ?>
                <tr>
                    <td><?= $person['id'] ?></td>
                    <td>
                        <?= $person['firstname'] ?>
                    </td>
                    <td><?= $person['lastname'] ?></td>
                    <td>
                        <?= $person['phone'] ?>
                    </td>
                    <td><?= $person['email'] ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>


</body>

</html>