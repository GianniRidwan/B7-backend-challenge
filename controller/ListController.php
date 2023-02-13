<?php
require(ROOT . "model/ListModel.php");
require(ROOT . "model/TaskModel.php");

function index() {
    $getAllLists = getAllLists();
render('components/index', array("list" => $getAllLists));
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

function delete($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable

    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee

}

function destroy($id){
    //1. Delete een medewerker uit de database

	//2. Bouw een url en redirect hierheen
    
}
?>