<?php

function getAllTasks() {
   try {
       $conn = openDatabaseConnection();
       $stmt = $conn->prepare("SELECT * FROM task");
       $stmt->execute();
       $result = $stmt->fetchAll();
   }
   catch(PDOException $e){
       echo "Connection failed: " . $e->getMessage();
   }
   $conn = null;
   return $result;
}

function getTask($id) {
    try {
        $conn = openDatabaseConnection();
        $stmt = $conn->prepare("SELECT * FROM task WHERE task_id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch();
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
 }

function createTask($description, $time, $state, $list_id) {
    try {
        $conn = openDatabaseConnection();
        $sql = "INSERT INTO task(description, time, state, list_id) VALUES(:description, :time, :state, :list_id)";
        $query = $conn->prepare($sql);
        $query->bindParam(":description", $description);
        $query->bindParam(":time", $time);
        $query->bindParam(":state", $state);
        $query->bindParam(":list_id", $list_id);
        $query->execute();
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
 }


 function updateEmployee($data){
    // Maak hier de code om een medewerker te bewerken
 }

 function deleteEmployee($id){
    // Maak hier de code om een medewerker te verwijderen
 }


?>