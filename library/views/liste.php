<?php

session_start();
include('connexion_bd.php');
$query=$dbh->prepare($sql);
$query->execute();
$resultats= $query->fetchAll(PDO::FETCH_OBJ);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../design/style/liste.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <div class="inner_header">
            <div class="logo">
                <h1>MA<span>BIBLIOTHEQUE</span></h1>
            </div>
            <ul class="navigation">
                <a href="#"><li>Accueil</li></a>
                <a href="./liste.php"><li>Liste</li></a>
                <a href="./livre.php"><li>Enregistrement</li></a>
                <a href="./A-propos.php"><li>A propos</li></a>
            </ul>
        </div>
    </div>
    
    <table class="table table-striped table-bordered text-center">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Catégorie</th>
                            <th scope="col">Nom de l'auteur</th>
                            <th scope="col">ISBN</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>      
                        <tbody>
                            <?php 
                                if (is_array($resultats)){
                                    $cnt= 1;
                                    foreach ($resultats AS $result){
                                    ?>
                                    <tr>
                                    <td><?php echo $cnt ?> </td>
                                    <td><?php echo $result->BookName; ?></td>
                                    <td><?php echo $result->CategoryName ?></td>
                                    <td><?php echo $result->AuthorName; ?></td>
                                    <td><?php echo $result->ISBNNumber; ?></td>
                                    <td><?php echo $result->BookPrice; ?></td>
                                    <td>

                                    <a href="edit-book.php?bookid=<?php echo $result->id ?>">
                                    <button class="btn btn-primary">Editer</button>
                                </a>
                                <a href="manage-books?del=<?php echo $result->id ?>" onClick="return confirm('Etes-vous sûr ?')">
                                    <button class="btn btn-danger">Supprimer</button>
                                </a>
                                    </td>
                                    <?php
                                    $cnt++; 
                                    }
                                }
                            ?>    
                        </tbody>
                        </table>
    

</body>
</html>