<?php

include_once('../source/database.php');

$searchInput = isset($_GET['searchTerm']) ? $_GET['searchTerm'] : '';

$conn = database_connect();
$searchResults = FindPersoon($conn, $searchInput);
$conn->close();
header('Content-Type: application/json; charset=utf-8');
echo json_encode($searchResults);


function GetResults($result)
{
    $results = [];
    if ($result) {
        for ($i = 0; $i < $result->num_rows; $i++) {
            $row = $result->fetch_assoc();
            array_push($results, $row);
        }
    }
    return $results;
}

function FindPersoon($conn, $name)
{
    if ($conn) {
        try {
            $q = "SELECT * FROM naw WHERE naam LIKE ?";
            $stmt = $conn->prepare($q);
            $nameParam = "%" . $name . "%";
            $stmt->bind_param("s", $nameParam);
            $stmt->execute();
            $result = $stmt->get_result();
            $searchResults = GetResults($result);
            return $searchResults;
        } catch (Exception $ex) {
            echo "Error during query: " . $ex->getMessage();
        }
    }
    return [];
}

?>