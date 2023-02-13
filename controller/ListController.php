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

function store() {
    //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database

    //2. Bouw een url op en redirect hierheen

}

function edit($id) {
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable

    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee

}

function update() {
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database

    //2. Bouw een url en redirect hierheen

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