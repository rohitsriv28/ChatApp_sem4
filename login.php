<?php
    session_start();
    if(isset($_SESSION['unique_id'])){//if user is logged in
        header("location: users.php");
    }
?>
<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Chat Application</header>
            <form action="#">
                <div class="error-text"></div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" name="email" placeholder="Enter your email address">   
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter your Password">
                        <i class="fas fa-eye"></i>   
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to chat">
                    </div>
                </form>
                <div class="link">Not yet signed up?<a href="index.php">Signup now</a></a></div> 
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html>