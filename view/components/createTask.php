<h1 class="text-center">Add a new Task:</h1>
<div class="container">
<form method="post" action="<?=URL?>task/createNewTask">

<div class="form-group">
	<label for="" class="lead">Task Description</label>
	<input type="text" name="description" class="form-control">
</div>

<div class="form-group">
	<label for="" class="lead"></label>
	<input type="time" name="time" class="form-control">
</div>

<div class="form-group">
	<label for="" class="lead">Task Status</label>
	<select name="state">
		<option value="Open">Open</option>
		<option value="In Progress">In Progress</option>
		<option value="Closed">Closed</option>
	</select>
</div>

<div class="form-group">
	<label for="" class="lead"></label>
	<input type="hidden" name="list_id" class="form-control" value="<?php echo $_GET['list_id'];?>">
</div>

<input type="submit" class="btn text-white bg-primary" value="Add New Task">

</form>
</div>