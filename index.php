<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Jouet En Bois</title>
        <link href="jouets.css" rel="stylesheet" media="all" type="text/css">
    </head>
    <body>
        <?php
        include ('connexion.php');
        ?>
        <div id="Haut">
        </div>
        <div id='Corps'>
            <?php
            $aujourdhui = getdate();
            $jour = $aujourdhui['mday'];
            $mois = $aujourdhui['mon'];
            $an = $aujourdhui['year'];
            echo "<h1>Bienvenue sur le site des produits Jouets en Bois,  aujourd'hui  le $jour/$mois/$an </h1>";
            ?>

            <p><h4>Petit site didactique</h4></p>
        <p><h4> Attention certaines pages ne sont pas fournies car  elles feront l'objet d'un développement ultérieur </h4> </p>
    </br></br>

    <p><h2> Gestion des catégories</h2> </p>
<a  href="AfficheToutesCategories.php">visualiser toutes les catégories </a><br>
<a  href="NouvelleCategorie.php">créer une nouvelle catégorie </a><br>
<br>

<p><h2> Gestion des produits </h2></p>
<a  href="AfficheTousProduits.php">visualiser tous les produits - en image</a><br>
<a  href="Afficheproduits1Categorie.php">visualiser les produits d'une catégorie </a> <br>
<a  href="ChoisirUnProduitSurId.php">visualiser un produit à partir de son N° </a><br>
<a  href="NouveauProduit.php">créer un nouveau produit </A><br>
<br>

</div>
</body>
</html>
