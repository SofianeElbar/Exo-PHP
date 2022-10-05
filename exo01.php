<!DOCTYPE html>
<html lang="fr">
<head> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Une page PHP</title> </head>
<body>
    <h1>Bonjour tout le monde</h1>
<?php
//  $nom_du_visiteur = "Hilala";
//  echo "Le visiteur est: ". "<strong>". $nom_du_visiteur. "</strong> <br>";
//  $a=3;
//  $n1= 4 * $a++;
//  $n2= 4 * ++$a;

//  echo "a = $a <br>";
//  echo "n1= $n1<br>";
//  echo "n2= $n2<br>";

// $note = 6;
// if ($note < 10)
// {
//     echo "Vous n'avez pas la moyenne<br> ";
// }
//     elseif ($note < 12)
//         {
//             echo "Vous avez la mention Passable";
//         }
//         elseif ($note < 14)
//             {
//                 echo "Vous avez la mention Assez Bien";
//             }
//             elseif ($note < 16)
//             {
//                 echo "Vous avez la mention Bien";
//             }
//                 elseif ($note < 18)
//                 {
//                     echo "Vous avez la mention Très Bien <br>";
//                 }
//             else
//             {
//                 echo " Vous avez la mention Honorable <br>";
//             }

// $a=5;
// $b=15;
// if($a==$b)
// {
//     echo "$a = $b<br>";
// }
// else
// {
//     echo "$a <> $b <br>";
// }




    // $valeur = 1;
    // $i =0;
    // switch ($valeur)
    // {
    //     case $i+1 : echo "la valeur est égale à 1 <br>"; break;

    //     case 5 : echo "la valeur est égale à 5 <br>"; break;

    //     case 10 : echo "la valeur est égale à 10 <br>"; break;

    //     case 15 : echo "la valeur est égale à 15 <br>"; break;

    //     default : echo "la valeur est différente de 1, 5, 10 et 15 <br>";
    // }



//     for ($i=1 ; $i<=10 ; $i++)
// { 
//     echo "Notre compteur vaut $i<br>" ;
// }

// echo "=======================================<br>";

// for ($i=1 ; $i<=10 ; $i=$i+2)
// { 
//     echo "Notre compteur vaut $i<br>" ;
// }


// echo "================== while =====================<br>";

// $i=1 ; 
// while($i<=10) 
// { 
//     echo "Notre compteur vaut $i<br>";
//     ++$i;
// }



// echo "================== Do while =====================<br>";

// $i=11 ; 
// do
// { 
//     echo "Notre compteur vaut $i<br>";
//     ++$i;
// }
// while($i<=10);


// echo "================== Continue =====================<br>";


// for ($i=1 ; $i<=10 ; $i++)
// { 
//     if($i==5)
//     {
//         continue;
//     }
//     echo "Notre compteur vaut $i<br>" ;
// }


// echo "================== Break =====================<br>";

// for ($i=1 ; $i<=10 ; $i++)
// { 
//     if($i==5)
//     {
//         break;
//     }
//     echo "Notre compteur vaut $i<br>" ;
// }

$ch1="        Sami";
$ch1 = "sami";
$ch2 = "hilala";
echo $ch1." ".$ch2."<br>";
echo $ch1." ".strtoupper($ch2)."<br>";
echo"la taille de la chaine $ch1 est = ".strlen($ch1)."<br>";
echo"la taille de la chaine $ch2 est = ".strlen($ch2)."<br>";
// $comp = strlen($ch1) < strlen($ch2)? -1:1 ;
// Pour vérifier quelle string est la plus longue;

$comp = strlen($ch1) - strlen($ch2);
echo "La différence est de : ".$comp;


?>
</body>
</html>
