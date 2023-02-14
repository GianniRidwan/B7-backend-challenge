<div class="col-md-12 text-center">
	<a class="btn text-white  bg-dark border" href="<?=URL?>List/addList"> Add New List</a>
</div>

<?php foreach($list as $list) { ?>

<div class="mt-3 d-inline-block border rounded-top">
    <h1 class="p-1 bg-success text-capitalize text-white rounded-top" style="margin-bottom: auto;">
    &nbsp; 
    <?php echo $list["list_name"]; ?>
    <a class="p-2 btn text-success" href="<?=URL?>list/editList/<?=$list['id']?>"><i class="far fa-edit text-white"></i></a>
    <a class="p-2 btn text-success" href="<?=URL?>list/deleteList/<?=$list['id']?>"><i class="far fa-trash-alt text-white"></i></a>
    </h1>

    <a class="btn text-white bg-dark d-block rounded-0" href="<?=URL?>Task/addTask?list_id=<?php echo $list["id"];?>">Add New Task</a>
    <table class= "table-bordered" width = 100%;>
        <thead>
            <tr>
                <th>Task  </th>
                <th>Duration  </th>
                <th>Status </th>
                <th>Edit/Delete </th>
            </tr>
        </thead>
        <tbody>
    <?php
        foreach($task as $taskP) {
        if ($taskP["list_id"] == $list["id"]) {   
    ?>
        <tr>
            <td> <?php echo $taskP["description"];?> </td>
            <td> <?php echo $taskP["time"];?> </td>
            <td> <?php echo $taskP["state"];?> </td>
            <td><a class="btn text-primary" href="<?=URL?>Task/editTask/<?= $taskP['task_id'] ?>"><i class="far fa-edit text-danger"></i></a>  
            <a class="btn text-primary" href="<?=URL?>Task/deleteTask/<?= $taskP['task_id'] ?>"><i class="far fa-trash-alt text-danger"></i></a></td>
        </tr>
        <?php } } ?>
        </tbody>
    </table>
</div>
<?php } ?>