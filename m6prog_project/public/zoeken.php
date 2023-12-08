<?php
require_once '../source/config.php';

require_once SOURCE_ROOT . 'database.php';

$connection = database_connect();

$plaats = $_GET['search'];

echo 'je zoekt naar:' . $plaats;

$sql = 'SELECT * FROM WeersomstandighedenPerDag WHERE Plaats=? ORDER BY Datum';
$stmt = $connection->prepare($sql);
$stmt->bind_param('s', $plaats);
$stmt->execute();
$result = $stmt->get_result();
while ($weersomstandighed = mysqli_fetch_assoc($result)) {

    echo '<pre>';
    echo 'plaats:' . $weersomstandighed["plaats"];
    echo '</pre>';

    echo '<pre>';
    echo 'datum:' . $weersomstandighed["Datum"];
    echo '</pre>';

    echo '<pre>';
    echo 'aantalGraden:' . $weersomstandighed["aantalGraden"];
    echo '</pre>';

    echo '<pre>';
    echo 'windKracht:' . $weersomstandighed["windKracht"];
    echo '</pre>';

    echo '<pre>';
    echo 'regenInMilimeters:' . $weersomstandighed["regenInMilimeters"];
    echo '</pre>';


}