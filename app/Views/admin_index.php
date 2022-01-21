
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <h2 class="title">Merhaba <?php echo $username ?>, çalışanlarınıza tanımlanan görevler</h2>
            </div>
        </div>
        <table id="tasks" class="display">
            <thead>
                <tr>
                    <th>Görev ID</th>
                    <th>Kullanıcı ID</th>
                    <th>Kullanıcı adı</th>
                    <th>Kullanıcı Soyadı</th>
                    <th>Görev</th>
                    <th>Durum</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($tasks as $task): ?>
                    <tr>
                        <td><?php echo $task["task_id"] ?></td>
                        <td><?php echo $task["user_id"] ?></td>
                        <td><?php echo $task["name"] ?></td>
                        <td><?php echo $task["surname"] ?></td>
                        <td><?php echo $task["task"] ?></td>
                        <td><?php echo $task["is_done"] ?></td>
                    </tr>
                <?php endforeach; ?>    
            </tbody>
        </table>     
    </div>

    