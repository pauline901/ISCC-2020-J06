<?php
function afficher_titre($nom_produit)
{
    echo"<h1>Fiche produit: $nom_produit</h1>";
    return;
}
function afficher_description($couleur, $prix)
{
    echo"<p>Couleur: $couleur</p>";
    echo"<p>Prix: $prix</p>";
    return;
}
function afficher_produit($nom_produit, $prix, $couleur, $disponible)
{
    if($disponible==true)
    {
        afficher_titre($nom_produit);
        afficher_description($couleur, $prix);
    }
    else
    {
        echo"<p>Le produit $nom_produit n'est malheureusement plus disponible.</p>";
        return;
    }
}
?>