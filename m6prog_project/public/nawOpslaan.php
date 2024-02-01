<?php

$data = file_get_contents('php://input');
$json = json_decode($data);


require_once '../source/config.php';
include_once('../source/database.php');

$conn = database_connect();


$q = "SELECT COUNT(1) as count FROM naw WHERE email=?";
$stmt = $conn->prepare($q);
$stmt->bind_param("s", $json->email);
$stmt->execute();
$result = $stmt->get_result();
$insert_id = $stmt->insert_id;

$count = mysqli_fetch_assoc($result);
if ($count['count'] > 0) {
    echo json_encode([
        'success' => false,
        'count' => $count['count'],
        'error' => 'Dit email adres komt al voor in de database'
        
    ]);
    return false;
}


$insert_id = $stmt->insert_id;



$q = "INSERT INTO naw (naam, straat, huisnummer, postcode, email) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($q);
$stmt->bind_param("sssss",
                  $json->naam,
                  $json->straat,
                  $json->huisnummer,
                  $json->postcode,
                  $json->email
              );


$result = $stmt->execute();


$insert_id = $stmt->insert_id;


$response = [
    'success' => true,
    'insert_id' => $insert_id
];
echo json_encode($response);
