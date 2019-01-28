<!DOCTYPE html>
<html>

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










    <!--background-color: rgba(0, 11, 56, 0.9);-->

    <br/>
    <br/>

    <div class="container" id="reg-cont">
        <center>
            <h4>Register</h4></center>
        <form action="register.php" method="POST" class="reg-c" id="myForm">
            <div class="input-field col s6">
                <input id="uname" type="text" class="validate" name="username" required>
                <label for="uname">Username*</label>
            </div>
            <div class="input-field col s6">
                <input id="email-fld" type="email" class="validate" name="email" required>
                <label for="email-fld">Email*</label>
            </div>
            <div class="input-field col s6">
                <input id="pwd" type="password" class="validate" name="password" pattern=".{6,}" required>
                <label for="pwd">Password*</label>
            </div>
            <div class="input-field col s6">
                <input id="first_name" type="password" class="validate" name="confirm" pattern=".{6,}" required>
                <label for="first_name">Confirm Password*</label>
            </div>
            <p>*required fields</p>
            <p>*By clicking create you agree to the <a href="#modal1">Terms and Conditions</a></p>

            <div id="modal1" class="modal">
                <div class="modal-content">
                    <h4 id="modal-header">Terms and Conditions</h4>
                    <p id="modal-content">Hüloğğğğğğğğğğğğ</p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-teal btn-flat">Close</a>
                </div>
            </div>
            <!--            <center><a id="login-btn" class="waves-effect btn waves-purple">Create Account</a></center>-->
            <center>
                <input type="submit" class="btn waves-effect" value="CREATe">
            </center>
            <!--<body onload="Materialize.toast('Hüloğğğğ!', 4000)">-->
        </form>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <?php
    
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
//        var_dump(empty($_POST['email']));
//        var_dump(empty($_POST['username']));
//        die();

    if(empty($_POST['username'])==true || empty($_POST['email']==true) || empty($_POST['password'])==true || empty($_POST['confirm'])==true){
       
        echo '<body onload="Materialize.toast(\'Fill all fields!\', 4000,\'red\')">';
       }else{
        
            if($_POST['password'] == $_POST['confirm']){
       $email = $_POST['email'];
       $username = $_POST['username'];
       $password = $_POST['password'];
       $confirm = $_POST['confirm'];
       
//       echo "email: $email<br/> username: $username <br/>\n passwd: $password<br/> confirm: $confirm\n";
        include 'connection.php';
        $check = $db_site -> prepare("SELECT * FROM users WHERE username=? or email=?");   
        $check -> execute(array($username,$email));

        $result = $check->fetchAll();
                if(!empty($result)){
                    echo '<body onload="Materialize.toast(\'Username or email already in use, please try again with different one!\', 4000,\'red\')">';
                }else{
                
        
       $register = $db_site -> prepare("INSERT INTO users (username,email,password,registered) VALUES(:username,:email,:password,now())");
        
       $register -> execute([
           'username' => $username,
           'email' => $email,
           'password' => $password           
       ]);
           
                $db_site = null;
        
                echo '<body onload="Materialize.toast(\'You`re successfully registered! Now you can login\', 4000, \'blue\')">';
                    }
        }
           else{
            echo '<body onload="Materialize.toast(\'Passwords do not match!\', 4000, \'red\')">';
        }
    }
    }
        


?>



        <!--

    <div class="container">

          <div class="row">
    <form class="col s6 offset-m3 offset 14">
      <div class="row">
        <div class="input-field col s12">
          <input  id="first_name" type="text" class="validate">
          <label for="first_name">Username</label>
        </div>
      </div>      
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          This is an inline input field:
          <div class="input-field inline">
            <input id="email" type="email" class="validate">
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
      </div>
    </form>
  </div>



    </div>
-->







        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="js/modal.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>