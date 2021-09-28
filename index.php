<!-- -->
<?php 
    //Luas persegi//
    $sisi = 6;

    $luaspersegi = $sisi * $sisi ;
  
    //echo "Luas Persegi :" . $luaspersegi . "cm2" ;

?>

<?php 
    //Luas Segitiga//
    $alas  = 20 ;
    $tinggi = 10 ;

    $luassegitiga = 1/2 * $alas * $tinggi ;
    //echo"<br/>" ;
    //echo"Luas Segitiga :" . $luassegitiga . "cm2" ;
?>
<?php
    //luas Trapesium//
    $sisia = 6;
    $sisib = 12;
    $tinggi = 4;
    $luastrapesium = 1/2 * ($sisia + $sisib) * $tinggi ;
    //echo"<br/>" ;
    //echo"Luas Trapesium : " . $luastrapesium . "cm2" ;
?>
<!-- luas permukaan tabung-->  
<?php
    
    $r = 7;
    $t = 18;

    $luaspermukaantabung = 2 * 3.14 * $r * ($r +$t) ;
    //echo"<br />" ;
    //echo "luas permukaan tabung: " . $luaspermukaantabung . "cm2" ;

?>
<?php
    //Luas permukaan lingkaran= luas lingkaran//
    define("PHI", 3.14) ;
    $r = 4 ;
    $luaslingkaran = PHI * $r**2 ;
   // echo"<br/>" ;
   // echo"Luas Lingkaran : " . $luaslingkaran . "cm2" ;
?>

<html>
    <head>
        <table border=5>
            <tr>
                <td> Luas Persegi</td>
                <td> <?=$luaspersegi?> Cm^2</td>
            </tr>
            <tr>
                <td> Luas Segitiga</td>
                <td> <?=$luassegitiga?> Cm^2</td>
            </tr><tr>
                <td> Luas Trapesium</td>
                <td> <?=$luastrapesium?> Cm^2</td>
            </tr><tr>
                <td> Luas Permukaan Tabung</td>
                <td> <?=$luaspermukaantabung?> Cm^2</td>
            </tr><tr>
                <td> Luas Lingkaran</td>
                <td> <?=$luaslingkaran?> Cm^2</td>
            </tr>
        </table>
    </head>
</html>