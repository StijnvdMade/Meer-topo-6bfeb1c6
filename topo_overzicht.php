<?php
$alles;
echo "Hoeveel landen en steden wil je toevoegen? \n";
$aantal = readline();
if (is_numeric($aantal)) {
} else {
    echo("Voer een cijfer in \n");
}
for($i = 1; $i <= $aantal; $i++){
    echo "Land: ";
    $country = readline();
    echo "Hoofdstad: ";
    $stad = readline();
    $alles[$country] = $stad;
}
echo "De volgende landen en steden zijn opgeslagen: \n";
print_r($alles);      
?>