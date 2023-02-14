<div class="col-md-12 text-center">
	<a class="btn text-white  bg-dark border" style="margin-bottom: 20px;" href="<?=URL?>List/addList"> Add New List</a>
</div>

<form action="" method="GET" class="col-md-12 text-center">
<div class="mb-3">  
        <select name="sortTime" class="pb-1" value="">
            <option disabled>order tasks by duration</option>
            <option value="a-b"<?php if(isset($_GET['sortTime']) && $_GET['sortTime'] == "a-b"){ echo "selected";} ?> >Short - Long</option>
            <option value="b-a"<?php if(isset($_GET['sortTime']) && $_GET['sortTime'] == "b-a"){ echo "selected";} ?> >Long - Short</option>
        </select>
        
        <input type="submit" name="button1" value="sort" class="pb-1 text-white bg-primary rounded"/>  
        </div>
</form>
<form action ="" method = "GET" class="col-md-12 text-center"> 
        <div class="mb-3">  
        <select name="filter" class="pb-1" value="">
            <option disabled>filter tasks by state</option>
            <option value="open"<?php if(isset($_GET['filter']) && $_GET['filter'] == "open"){ echo "selected";} ?> >Open</option>
            <option value="in progress"<?php if(isset($_GET['filter']) && $_GET['filter'] == "in progress"){ echo "selected";} ?> >In Progress</option>
            <option value="closed"<?php if(isset($_GET['filter']) && $_GET['filter'] == "closed"){ echo "selected";} ?> >Closed</option>
        </select>

        <input type="submit" name="button1" value="filter" class="pb-1 text-white bg-primary rounded"/>  
        </div>
</form>

<?php foreach($list as $list) { ?>

<div class="mt-3 d-inline-block border rounded bg-light" style="margin-left: 10px">
    <h1 class="p-1 text-center text-capitalize rounded-top" style="margin-bottom: auto;">
    &nbsp; 
    <?php echo $list["list_name"]; ?>
    <a class="p-2 btn" href="<?=URL?>list/editList/<?=$list['id']?>"><i class="far fa-edit text-danger"></i></a>
    <a class="p-2 btn" href="<?=URL?>list/deleteList/<?=$list['id']?>"><i class="far fa-trash-alt text-danger"></i></a>
    </h1>

    <a class="btn text-white bg-dark d-block rounded-0" href="<?=URL?>Task/addTask?list_id=<?php echo $list["id"];?>">Add New Task</a>
    <table class= "table-bordered" width = 100%;>
        <thead>
            <tr>
                <th class="text-center">Task</th>
                <th class="text-center">Duration</th>
                <th class="text-center">State</th>
                <th class="text-center">Edit/Delete</th>
            </tr>
        </thead>
        <tbody>
    <?php
        foreach($task as $taskP) {
        if ($taskP["list_id"] == $list["id"]) {   
    ?>
        <tr>
            <td class="text-center"> <?php echo $taskP["description"];?> </td>
            <td class="text-center"> <?php echo $taskP["time"];?> </td>
            <td class="text-center"> <?php echo $taskP["state"];?> </td>
            <td class="text-center"><a class="btn text-primary" href="<?=URL?>Task/editTask/<?= $taskP['task_id'] ?>"><i class="far fa-edit text-danger"></i></a>  
            <a class="btn text-primary" href="<?=URL?>Task/deleteTask/<?= $taskP['task_id'] ?>"><i class="far fa-trash-alt text-danger"></i></a></td>
        </tr>
        <?php } } ?>
        </tbody>
    </table>
</div>
<?php } ?>