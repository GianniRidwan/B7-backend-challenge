<?php
require(ROOT . "model/TaskModel.php");
require(ROOT . "model/ListModel.php");

function index() {
    $getAllTasks = getAllTasks();
    render('components/index', array("task" => $getAllTasks, "list" => getAllLists()));
}

function addTask() {
    render("components/createTask");
}

function createNewTask() {
    createTask($_POST["description"], $_POST["time"], $_POST["state"], $_POST["list_id"]);
    header("location: index");
}

function editTask($id) {
    $getTask = getTask($id);
    render("components/updateTask", array("task" => $getTask, "list" => getAllLists()));
}

function updateTask($id) {
    updateT($id, $_POST["description"], $_POST["time"], $_POST["state"], $_POST["list_id"]);
    header("location: ".URL."task/index");
}

function delete($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable

    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee

}

function destroy($id){
    //1. Delete een medewerker uit de database

	//2. Bouw een url en redirect hierheen
    
}
?>