
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <h2 class="title">Merhaba <?php echo $username ?>, sizin için tanımlanan görevler</h2>
            </div>
        </div>
        <form action="" method="post">
            <?php foreach($tasks as $task):
                $data = array(
                    'task_id' => $task["task_id"],
                    'task' => $task["task"]
                ); ?>
                <div class="row">
                    <?php echo view("templates/task".$task["is_done"], $data); ?>
                </div>
            <?php endforeach; ?> 
            <button type="submit" class="btn btn-primary" name="update">Kaydet</button>    
        </form>   
    </div>

    