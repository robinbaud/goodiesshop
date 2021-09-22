<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<h1> Formulaire Produits </h1>
<form method="post" enctype="multipart/form-data" action="">
    <label for="reference">reference</label><br>
    <input type="text" id="reference" name="reference" placeholder="la référence de produit"> <br><br>
 
    <label for="categorie">categorie</label><br>
    <input type="text" id="categorie" name="categorie" placeholder="la categorie de produit"><br><br>
 
    <label for="titre">titre</label><br>
    <input type="text" id="titre" name="titre" placeholder="le titre du produit"> <br><br>
 
    <label for="description">description</label><br>
    <textarea name="description" id="description" placeholder="la description du produit"></textarea><br><br>
     
    <label for="couleur">couleur</label><br>
    <input type="text" id="couleur" name="couleur" placeholder="la couleur du produit"> <br><br>
 
    <label for="taille">Taille</label><br>
    <select name="taille">
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
    </select><br><br>
 
    <label for="public">public</label><br>
    <input type="radio" name="public" value="m" checked>Homme
    <input type="radio" name="public" value="f">Femme<br><br>
     
    <label for="photo">photo</label><br>
    <input type="file" id="photo" name="photo"><br><br>
 
    <label for="prix">prix</label><br>
    <input type="text" id="prix" name="prix" placeholder="le prix du produit"><br><br>
     
    <label for="stock">stock</label><br>
    <input type="text" id="stock" name="stock" placeholder="le stock du produit"><br><br>
     
    <input type="submit" value="enregistrement du produit">
</form>