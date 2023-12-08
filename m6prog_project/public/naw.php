<?php
$name = '';
echo '<b>name: </b>';
if ( empty( $_POST['name']) ) {
    echo '<b style="color:#f00;">Je moet wel je naam invullen</b>';
} else {
    $name = $_POST['name'];
}
echo $name;
echo '<br>';

$Straat = '';
echo '<b>Straat: </b>';
if ( empty( $_POST['Straat']) ) {
    echo '<b style="color:#f00;">Je moet wel je straat invullen</b>';
} else {
    $Straat = $_POST['Straat'];
}
echo $Straat;
echo '<br>';

$Huisnummer = '';
echo '<b>Huisnummer: </b>';
if ( empty( $_POST['Huisnummer']) ) {
    echo '<b style="color:#f00;">Je moet wel je huisnummer invullen</b>';
} else {
    $Huisnummer = $_POST['Huisnummer'];
}
echo $Huisnummer;
echo '<br>';

$Postcode = '';
echo '<b>Postcode: </b>';
if ( empty( $_POST['Postcode']) ) {
    echo '<b style="color:#f00;">Je moet wel je postcode invullen</b>';
} else {
    $Postcode = $_POST['Postcode'];
}
echo $Postcode;
echo '<br>';

$Email = '';
echo '<b>Email: </b>';
if ( empty( $_POST['Email']) ) {
    echo '<b style="color:#f00;">Je moet wel je email invullen</b>';
} else {
    $Email = $_POST['Email'];
}
echo $Email;
echo '<br>';
?>