<?php
 declare(strict_types=1);
 // ETAPE 1 :Les quatre opérations
//  la fonction de additionner
 function  additionner (float $a,float $b):float
 {
    return $a+$b;
 }
 
 // la fonction de soustraire
 function  soustraire (float $a,float $b):float
 {
    return $a-$b;
 }
 
 // la fonction de multiplication
 function  multiplication (float $a,float $b):float
 {
    return $a*$b;
 }

// la fonction de division
 function  divier (float $a,float $b)
 {
try{
   if($b==0){
      throw new exception ('division par zero');
   }
   return $a/$b;
}
 
 catch(Exception $e){
   echo 'error :'.$e->getMessage();
 }
 }
 // ETAPE2 :Fonctions logiques
// 1:fonction verifier si le nombre est pair ou non
function estPair(int $a):bool{
   if($a/2==0){
      return true;
   }else{
      return false;
   }

};
//2: estPositif
function estPositif(int $a):string{
   if($a>0){
      return 'oui';
   }else{
      return 'non';
   }
};
 
// 3:max
function maximum(float $a,float $b,float $c){
if($a>$b && $a>$c){
   return $a;
}elseif($b>$a && $b>$c){
    return $b;
}else{
   return $c;
}
}
// 4:estPremier
function estPremier(int $n): bool {

    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i <= floor(sqrt($n)); $i++) {

        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}
// Étape 3 — Calculs commerciaux
//1
function calculerTTC(float $ht, float $tva = 20.0): float{
   $ttc=$ht*(1+$tva/100);
   return $ttc;
}
// 2
function  calculerRemise(float $prix, float $pourcentage): float{
   $remise=$prix-($prix*$pourcentage);
   return $remise;
}
// 3
function calculerFacture(float $prixUnitaire, int $quantite, float $remise = 0, float $tva = 20.0): float {

    $ht = $prixUnitaire * $quantite;

    $ApreRemise = $ht - ($ht * $remise / 100);

    return calculerTTC($ApreRemise, $tva);
}
// Étape 4 — Statistiques et géométrie
//1
function moyenne(float ...$notes): float {

    if (count($notes) == 0) {
        return 0;
    }

    $somme = array_sum($notes);

    return $somme / count($notes);
}
//2
function aireCercle(float $rayon): float {
    return round(M_PI * $rayon * $rayon, 2);
}

function perimetreCercle(float $rayon): float {
    return round(2 * M_PI * $rayon, 2);
}
// 3
function celsiusVersFahrenheit(float $c): float {
    return $c * 9 / 5 + 32;
}
//4
function fahrenheitVersCelsius(float $f): float {
    return ($f - 32) * 5 / 9;
}
// Étape 5 — Fonctions à boucle
//1
function factorielle(int $n): int {

    if ($n < 0) {
        throw new Exception("Le nombre doit être positif");
    }

    $resultat = 1;

    for ($i = 1; $i <= $n; $i++) {
        $resultat *= $i;
    }

    return $resultat;
}
//2
function ajouterCompte(array &$comptes, CompteBancaire $compte): void {

    foreach ($comptes as $c) {

        if ($c->getNumero() == $compte->getNumero()) {
            throw new Exception("Ce numéro existe déjà");
        }
    }

    $comptes[] = $compte;
}