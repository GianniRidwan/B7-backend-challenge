<?php

function getAllLists(){
   try {
       $conn = openDatabaseConnection();
       $stmt = $conn->prepare("SELECT * FROM list");
       $stmt->execute();
       $result = $stmt->fetchAll();
   }
   catch(PDOException $e){
       echo "Connection failed: " . $e->getMessage();
   }
   $conn = null;
   return $result;
}

function getList($id){
    try {
        $conn = openDatabaseConnection();
        $stmt = $conn->prepare("SELECT * FROM list WHERE id = :id");
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

function createList($list_name){
    try{
        $conn = openDatabaseConnection();
        $sql = "INSERT INTO list(list_name) VALUES(:list_name)";
        $query = $conn->prepare($sql);
        $query->bindParam("list_name", $list_name);
        $query->execute();
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function updateL($id, $list_name) {
    try {
        $conn = openDatabaseConnection();
        $sql = "UPDATE list SET list_name = :list_name WHERE id = :id";
        $query = $conn->prepare($sql);
        $query->bindParam(":id", $id);
        $query->bindParam(":list_name", $list_name);
        $query->execute();
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
}

function destroyL($id) {
    try {
        $conn = openDatabaseConnection();
        $sql = "DELETE FROM list WHERE id = :id";
        $query = $conn->prepare($sql);
        $query->bindParam(":id", $id);
        $query->execute();
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
}

?>