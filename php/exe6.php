<?php
$alt = 1.63;
$sexo = "F";

if ($sexo == "F"){
    $pesoid = (62.1 * $alt) - 44.7;
    print ("Você é do sexo " . $sexo . " e seu peso ideal é " . $pesoid);
}
else if ($sexo == "M"){
    $pesoid = (72.7 * $alt) - 58;
    print ("Você é do sexo " . $sexo . " e seu peso ideal é " . $pesoid);
}
else {
    print("Inválido");
}

?>