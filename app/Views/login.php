
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h2 class="title">CodeIgniter TODO Uygulaması</h2>
        </div>
        <div class="row d-flex justify-content-center">
            <form method="post">
                <div class="form-group">
                    <label for="email">Email adresiniz</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Şifreniz</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" name="login">Submit</button>
                </div>
                
            </form>
        </div>
    </div>

    <?php 

        if(isset($_POST["login"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            $query = $this->db->query('SELECT user_id FROM users WHERE email='.$this->db->escape($email).' AND password='.$password.'');
            $row = $query->row();

            if(isset($row)){

            }
        }
    
    ?>

    