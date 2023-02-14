<h1 class="text-center">Edit Task</h1>
<div class="container">
	<form method="post" action="<?=URL?>Task/updateTask/<?php echo $task['task_id']?>">
	<div class="form-group">
		<label for="" class="lead">Task Description</label>
		<input class="form-control" name="description"  type="text" required value="<?php echo $task["description"]; ?>">
	</div>
	<div class="form-group"> 
		<label class="lead" for="">Duration</label> 
        <input class="form-control" name="time"  type="time" required value="<?php echo $task["time"]; ?>"> 
	</div>
	<div class="form-group">
		<label for="" class="lead">Task State</label>
		<select name="state">
			<option value="Open">Open</option>
			<option value="In Progress">In Progress</option>
			<option value="Closed">Closed</option>
        </select>
	</div>
<input type="submit" name="submit" class="btn text-white bg-primary" value="Update">
</form>
</div>
