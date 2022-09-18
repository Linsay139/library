<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../design/style/style1.css">
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



  <div class="container">
  <fieldset>
    <form>
        <legend> Formulaire d'enregistrement </legend>
        <hr>
          <table>
            <tr>
              <td>Nom:</td><td><input type = "text" name = "nom" value=""></td>
            </tr>
            <tr>
              <td>Prenon:</td><td><input type = "text" name = "prenom" value=""></td>
            </tr>
            <tr>
              <td>email:</td><td><input type="email" name="email"></td>
            </tr>
            <tr>
              <td>adresse:</td><td><input type="text" name="adresse" value=""></td>              
            </tr>
            <tr>
              <td>sexe:</td>
              <td><input type = "radio" name = "genre" value = "H"/>Homme <input type = "radio" name = "genre" value = "F"/>Femme</td>
            </tr>
            <tr>
              <td>titre du livre:</td><td><input type="text" name="titre" value=""></td>
            </tr>
            <tr>
              <td>date pret:</td><td><input type="date" name="loanDate" id=""></td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" id="submit" name="sauvegarde" value="Enregistre"></td>
            </tr>
          </table>
    </form>     
  </fieldset>
  </div>
</body>
</html>


    

