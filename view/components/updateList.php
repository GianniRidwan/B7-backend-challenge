<h1 class="text-center">Edit List</h1>
<div class="container">
	<form method="post" action="<?=URL?>list/updateList/<?php echo $list['id'] ?>">
		<div class="form-group">
			<label for="" class="lead">List Name</label>
			<input type="text" class="form-control" name="list_name" required value="<?php echo $list["list_name"]; ?>">
		</div>
		<input type="submit" name="submit" class="btn text-white bg-primary" value="Update">
	</form>
</div