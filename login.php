


<!DOCTYPE html>
<html>
<?php
    session_start();
//    var_dump(isset($_SESSION['id']));
//    var_dump($_SESSION);
    //echo 'seesion available';
    if(isset($_SESSION['id'])){
        header("Location: index.php"); die();
    }    
    ?>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <style>
        input:not([type]),
        input[type=text],
        input[type=password],
        input[type=email],
        input[type=url],
        input[type=time],
        input[type=date],
        input[type=datetime],
        input[type=datetime-local],
        input[type=tel],
        input[type=number],
        input[type=search],
        textarea.materialize-textarea {
            padding-left: 30px;
            width: 90%;
        }
        
        .container p {
            color: rgba(199, 199, 199, 0.64);
            font-size: 14x;
            font-style: italic;
        }
        
        input:last-child {
            margin-bottom: 5px;
        }
        
        #login-btn {
            margin-top: 2px;
            margin-bottom: 10px;
        }
        
        body {
            color: red;
        }
        
        .btn.waves-effect {
            margin-bottom: 30px;
        }
        
        #modal-header {
            color: black !important;
            text-decoration: underline;
        }
        
        #modal-content {
            color: black;
        }
    </style>


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
   

    <?php include 'header.php'; ?>
     <br/><br/>
<!--        <?php echo '1.session'; var_dump($_SESSION); echo '<hr>';?>-->
            <?php if(empty($_SESSION)){

 echo '<div class="container" id="reg-cont">
        <center>
            <h4>Login</h4></center>
        <form action="" method="POST" class="reg-c" id="myForm">
            <div class="input-field col s6">
                <input id="uname" type="text" class="validate" name="username" required>
                <label for="uname">Username</label>
            </div>            
            <div class="input-field col s6">
                <input id="pwd" type="password" class="validate" name="password" pattern=".{6,}" required>
                <label for="pwd">Password</label>
            </div>
            <p>
      <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
      <label for="filled-in-box">Remember me</label>
    </p>
            <br/>           
            

           
            <center>
                <input type="submit" class="btn waves-effect" value="LOGIN">
            </center>
            
        </form>
    </div>';} ?>






                <!--background-color: rgba(0, 11, 56, 0.9);-->

                <br/>
                <br/>


                <?php
    include 'connection.php';
    
    $login = $db_site->prepare("SELECT * FROM users WHERE username=? and password=?");
    
    if($_POST){
        $username = $_POST['username'];
        $password = $_POST['password'];        
        
    $login->execute(array($username,$password));
    $login_array = $login->fetch(PDO::FETCH_ASSOC);
    $row = $login->rowCount();
    
//    var_dump($login_array);
//    var_dump($row);
        if($row){
            $_SESSION['username'] = $login_array['username'];

            $_SESSION['id'] = $login_array['id'];
            $_SESSION['sub'] = $login_array['sub'];
//            echo '<hr>2.session'; var_dump($_SESSION);
            $db_site = null;
//             echo '<body onload="Materialize.toast(\'Success!\', 4000, \'blue\')">';
            echo '<meta http-equiv="refresh" content="0; index.php" />';
            die();
        }else{//if user&pass not true
            
            echo '<body onload="Materialize.toast(\'Wrong username or password!\', 4000, \'red\')">';
//            echo '<div class="container" id="reg-cont">
//        <center>
//            <h4>Login</h4></center>
//        <form action="" method="POST" class="reg-c" id="myForm">
//            <div class="input-field col s6">
//                <input id="uname" type="text" class="validate" name="username" required>
//                <label for="uname">Username</label>
//            </div>            
//            <div class="input-field col s6">
//                <input id="pwd" type="password" class="validate" name="password" pattern=".{6,}" required>
//                <label for="pwd">Password</label>
//            </div>
//            <p>
//      <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
//      <label for="filled-in-box">Remember me</label>
//    </p>
//            <br/>           
//            
//
//           
//            <center>
//                <input type="submit" class="btn waves-effect" value="LOGIN">
//            </center>
//            
//        </form>
//    </div>';
        }
    }
    $db_site = null; 
     
    ?>





                    <!--Import jQuery before materialize.js-->
                    <script type="text/javascript" src="js/modal.js"></script>
                    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                    <script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>