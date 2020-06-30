<?php
function compter($maximum)
{
    $compteur=0;
    while ($compteur<$maximum){
        $compteur = $compteur + 1;

        echo "<p>Compteur : $compteur</p>";
    }
    return;
}

function compter_for($maximum) 
{
    for ($compteur=1; $compteur<=$maximum; $compteur = $compteur + 1){
        echo "+ 1 tour";
        
        echo "<p>Compteur : $compteur</p>";
    }
    return;
}

compter(10);

compter_for(10);
?>