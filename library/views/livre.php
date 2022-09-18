<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../design/style/livre.css">
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
                <a href=""><li>Accueil</li></a>
                <a href="./liste.php"><li>Liste</li></a>
                <a href="./form.php"><li>Enregistrement</li></a>
                <a href="./A-propos.php"><li>A propos</li></a>
            </ul>
        </div>
    </div>
    <form action="">
        <h1>Ajouter un nouveau Livre</h1>
        <fieldset>
            <legend><span class="number">1</span> Information sur le livre</legend>
            <label for="title">titre</label>
            <input type="text" id="title">
            <label for="author">Nom de l'auteur</label>
            <input type="text" id="author">
            <label for="editor">Nom de l'editeur</label>
            <input type="text" id="editor">
        </fieldset>
        <fieldset>
            <legend><span class="number">2</span>Information additionelle</legend>
            <label for="booktype">type de livre</label> 
            <select name="" id="type">
                <option value="-----------">-----------</option>
                <option value="Science fiction">Science fiction</option>
                <option value="Education">Education</option>
                <option value="Informatique">Informatique</option>
                <option value="Gestion">Gestion</option>
                <option value="Reseau">Reseau</option>
                <option value="Communication">Communication</option>
                <option value="Internet">Internet</option>
                <option value="Sport">Sport</option>
            </select> 
            <label for="page">Nombre de page</label>
            <input type="number" id="page">  
            <label for="annee">annee de parution</label>
            <input type="number" id="annee">    
            <label for="edition">edition</label>
            <select name="" id="edition">
                <option value="-----------">-----------</option>
                <option value="1">premiere edition</option>
                <option value="2">dexieme edition</option>
                <option value="3">troisieme edition</option>
                <option value="4">quatrieme edition</option>
                <option value="5">cinquieme edition</option>
            </select>  
        </fieldset>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>