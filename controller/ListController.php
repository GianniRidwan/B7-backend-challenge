<?php
require(ROOT . "model/ListModel.php");
require(ROOT . "model/TaskModel.php");

function index() {
    $getAllLists = getAllLists();
render('components/index', array("list" => $getAllLists, "task" => getAllTasks()));
}

function createNewList() {
    createList($_POST["list_name"]);
    header("location: index");
}

function addList() {
    render("components/createList");
}

function editList($id) {
    $getList = getList($id);
    render("components/updateList", array("list" => $getList));
}

function updateList($id) {
    updateL($id, $_POST["list_name"]);
    header("location: ".URL."list/index");
}

function deleteList($id) {
    $getList = getList($id);
    render("components/deleteList", array("list" =>$getList));
}

function destroyList($id) {
    destroyL($id);
    header("location: ".URL."list/index");
}
?>