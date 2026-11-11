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
function estPositif(int $a):bool{
   if($a>0){
      return true;
   }else{
      return false;
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