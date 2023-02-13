<div class="col-md-12 text-center">
		<a class="btn text-white  bg-dark border" href="<?=URL?>List/addList"> Add New List</a>
</div>

<?php foreach($list as $list) { ?>

<div class="mt-3 d-inline-block border rounded">
    <h1 class="p-1 bg-primary text-capitalize text-white rounded-top" style="color: blck;">
    &nbsp; 
    <?php echo $list["list_name"]; ?>
    <a class="p-2 btn text-primary" href="<?=URL?>list/editList/<?=$list['id']?>"><i class="far fa-edit text-white"></i></a>
    <a class="p-2 btn text-primary" href="<?=URL?>list/deleteList/<?=$list['id']?>"><i class="far fa-trash-alt text-white"></i></a>

</h1>
</div>
<?php } ?>