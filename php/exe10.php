<?php
$n1 = 23;
$n2 = 55;
$n3 = 100;

if( $n1 <= $n2 && $n2 <= $n3){
    print("A ordem crescente: " . $n1 . ", " . $n2 .", " . $n3 . "<br>");
}
else if ($n1 <= $n3 && $n3 <= $n2){
    print("A ordem crescente: " . $n1 . ", " . $n3 . ", " . $n2 . "<br>");
}
else if ($n2 <= $n1 && $n1 <= $n3){
    print("A ordem crescente: " . $n2 . ", " . $n1. ", " . $n3 . "<br>");
}
else if ($n2 <= $n3 && $n3 <= $n1){
    print("A ordem crescente: " . $n2 . ", " . $n3 . ", " . $n1 . "<br>");
}
else if ($n3 <= $n1 && $n1 <= $n2){
    print("A ordem crescente: " . $n3. ", " . $n1 . ", " . $n2 . "<br>");
}
else{
    print("A ordem crescente: " . $n3. ", " . $n2 . ",  " . $n1 . "<br>");
}

if ($n1 > $n2 && $n1 > $n3){
    print("O número maior é : " . $n1);
}
else if ($n2 > $n1  && $n2 > $n3 ){
    print("O número maior é : " . $n2);
}
else{
    print("O número maior é : " . $n3);
}






 

?>