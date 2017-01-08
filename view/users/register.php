
    <div class="row">
        <h3 class="center">Register</h3>
        <?php
        if(!empty($errors)) {
            foreach($errors as $message) {
                echo "<span class='error'>".$message[0]."</span><br/>";
            }
        }
        if (!empty($result)) {
            if($result == 1) {
                echo "<span class='success'> Successfully Register! </span> <a href='".$GLOBALS['dynamic_url']."dashboard'> Go Back </a>";
            }
        }

        ?>
        <br/>
        <form action="<?php echo $GLOBALS['dynamic_url']; ?>register" method="post" class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <input  id="username" name="username" type="text" class="validate" value="<?php if(isset($_POST['username'])) { echo $post['username']; } ?>" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-field col s12">
                    <input  id="password" name="password" type="password" class="validate" required>
                    <label for="password">Password</label>
                </div>
                <div class="input-field col s12">
                    <input  id="password" name="passwordverify" type="password" class="validate" required>
                    <label for="password">Password Again</label>
                </div>
                <div class="input-field col s12">
                    <input id="name" name="first_name" type="text" class="validate" value="<?php if(isset($_POST['first_name'])) { echo $post['first_name']; } ?>" required>
                    <label for="name">First Name</label>
                </div>
                <div class="input-field col s12">
                    <input id="name" name="last_name" type="text" class="validate" value="<?php if(isset($_POST['last_name'])) { echo $post['last_name']; } ?>" required>
                    <label for="name">Last Name</label>
                </div>
                <div class="input-field col s12">
                    <input id="email" name="email" type="email" class="validate" value="<?php if(isset($_POST['email'])) { echo $post['email']; } ?>" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light light-blue darken-4" type="submit" style="margin-top: 20px;">Register</button>
                </div>
            </div>
        </form>
        <div class="col s12" style="padding-top: 30px;">
            <div class="col m6">Already have Account <a href="<?php echo $GLOBALS['dynamic_url']; ?>login">login</a></div>
        </div>
    </div>
