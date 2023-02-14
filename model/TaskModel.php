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


 function updateT($id, $description, $time, $state) {
    try{
        $conn = openDatabaseConnection();
        $sql = "UPDATE task SET description = :description, time = :time, state = :state WHERE task_id = :id";
        $query = $conn->prepare($sql);
        $query->bindParam(":id", $id);
        $query->bindParam(":description", $description);
        $query->bindParam(":time", $time);
        $query->bindParam(":state", $state);
        $query->execute();
      }
      catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
        $conn = null;
}

 function deleteEmployee($id){
    // Maak hier de code om een medewerker te verwijderen
 }


?>