<html>
<title></title>
<head></head>

<style type="text/css">
body{
background-color:#2ecc71;
color:white;
}

h1 {
  position : absolute;
  top :40%;
  font-size:30px;
  font-familly:Calibry;
  width:100% ;
  text-align:center;
  

}

</style>

<body>

<h1>  Bonjour tous le monde </h1>
</body>

</html> 

<?php
$arr1 = array(1,2,3,4,5);
$arr2 = array_slice($arr1, -4, -2);
// print_r($arr2);



 
 
/*


<h1>{{ firstname ~" "~lastname}}</h1> 

 return strtoupper(dechex($n)); ->integer in hexadicimale stretoupper->uppercase

class C {
    public $valeur = 10;
    
    function __construct ($var=30) {
        $this->valeur = $var;
    }
}
$obj = new C(20);
echo $obj->valeur;

/* 
 
function countDigits($string) { 
    
    
  return   count(array_filter(str_split($string),'is_numeric'));
     
	 
	 SELECT  v.immatriculation  from vehicule v, revision r, revision_piece rp, piece p 

where v.id=r.vehicule_id 
and r.id=rp.revision_id 
and p.id=rp.piece_id
and r.prix <= 300
and p.nom ='pneu' and rp.nb_piece <= 2

SELECT CONCAT(v.immatriculation,', ', v.annee)  from vehicule v, revision r 
where v.id=r.vehicule_id 
GROUP BY v.annee
HAVING Count(r.vehicule_id) > 2

SELECT  v.immatriculation from vehicule v, revision r 
where v.id=r.vehicule_id 
and r.date   BETWEEN  CAST('2008-01-01' AS DATE) and  CAST('2008-12-31' AS DATE)
GROUP BY v.immatriculation
}

$a = 10;
$b = 20;
$c = &$a;
$c += $b;
$a = $a + 100;
echo $a;*/


?>