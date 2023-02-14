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

function deleteTask($id) {
    $getTask = getTask($id);
    render("components/deleteTask", array("task" => $getTask, "list" => getAllLists()));   
}

function destroyTask($id){
    destroyT($id);
    header("location: ".URL."task/index");    
}
?>