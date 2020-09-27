<?php 

$CA = (double)$_POST["CA"];
$CO = (double)$_POST["CO"];
$H = (double)$_POST["H"];

$H1= $CA*$CA;
$H2= $CO*$CO;
$H3= $H1 + $H2;
$H4 = sqrt($H3);

$CA1= $H*$H;
$CA2= $CO*$CO;
$CA3= $CA1 - $CA2;
$CA4 = sqrt($CA3);

$CO1= $H*$H;
$CO2= $CA*$CA;
$CO3= $CO1 - $CO2;
$CO4 = sqrt($CO3);



if ($H==0 and $CA>0 and $CO>0) {
   
    echo "la hipotenusa es ".$H4."." ;
}else
{
    if ($CA==0 and $H>0 and $CO>0) {
        echo "el cateto adyacente es ".$CA4."." ;
    }else
    {
        if ($CO==0 and $H>0 and $CA>0) {
            echo "el cateto opuesto es ".$CO4."." ;
        } else {
           
        
        
            echo "ups! hubo algun error";
        }
        
    }
    
}


?>
<!DOCTYPE html>
<html>
<body>
</body>
</html>