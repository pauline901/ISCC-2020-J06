<?php
function update_dispo($quantite)
{
    if ($quantite>0){
        $disponible=true;
    }
    else{
        $disponible=false;
    }
    return $disponible;
}

function restockage($quantite, $nb_ajout)
{
    echo"<p>{$nb_ajout} produits ont été ajouté au stock.</p>";
    return $quantite + $nb_ajout;
}

function achat($quantite, $achat)
{
    echo"<p>{$achat} produits ont été ajouté acheté.</p>";
    return $quantite - $achat;
}
?>