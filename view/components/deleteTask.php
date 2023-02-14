<div class="container">
    <h2 class="text-center"> Are you sure you want to delete <?php echo $task['description']?>?</h2>
    <a class="btn text-white  bg-danger" href="<?=URL?>Task/destroyTask/<?= $task['task_id'] ?>"> Delete </a> 
</div>