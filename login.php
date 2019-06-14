<?php include('loginheader.php');?>
        <h1 style="text-align: center; color: #001233; "><i class="fa fa-folder"></i>          SIGN IN</h1><hr>
        
        
            <div class="imgcontainer" style="text-align:center;">
                    <img src="Images/front i adm.png" alt="John">
            </div>
        
        <form action="process.php" method="POST">
            <div class="container">
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" id="username" name="username" required>
                    <br>
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" id="password" name="password" required>
                <br>
                
                <input type="submit" value="Log In">

            </div>
        </form>
    <?php include('footer.php'); ?>