<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>t-shirt-Femme PHP</title>
</head>

<body>
    <?php
        $nom_produit="T-shirt Femme";
        $couleur="Rouge";
        $prix=15.50;
        $disponible=true;
        $quantite=10;
        $nb_ajout=5;
        $achat=5;
    ?>

    <?php include("affichage.php"); ?>
    <?php include("gestion-produit.php"); ?>

    <?php
        afficher_produit($nom_produit, $prix, $couleur, $disponible);

        $quantite = achat($quantite, $achat);

        $disponible = update_dispo($quantite);

        afficher_produit($nom_produit, $prix, $couleur, $disponible);

        $quantite = achat($quantite, $achat);

        $disponible = update_dispo($quantite);

        afficher_produit($nom_produit, $prix, $couleur, $disponible);

        $quantite = restockage($quantite, $nb_ajout);

        $disponible = update_dispo($quantite);

        afficher_produit($nom_produit, $prix, $couleur, $disponible);
        ?>
</body>
</html>