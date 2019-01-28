<?php if(!isset($_SESSION)){session_start();} ?>
       <nav>
       <title>DataLeaks</title>
        <div class="nav-wrapper">
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <a href="index.php" class="brand-logo">
                <img id="lg" src="images/logo.png">
            </a>
            <ul class="right hide-on-med-and-down">
                <li class="lulu"><a href="index.php">Home<i class="material-icons left" id="homeicon">home</i></a></li>
                <!--<?php 
                // Üye girişi yapılmamışsa veya subscription yoksa Purchase sayfasını göster
                if(!isset($_SESSION['sub']) || (isset($_SESSION['sub']) && $_SESSION['sub'] ==0 )){ echo '<li class="lulu"><a href="purchase.php">Purchase<i class="material-icons left" id="prchsn" >attach_money</i></a></li>';
                                                                            } ?>-->
                <li class="lulu"><a href="purchase.php">Purchase<i class="material-icons left" id="prchsn" >attach_money</i></a></li>                                                            
                <li class="lulu"><a href="tos.php">TOS</a></li>
                <li class="lulu"><a href="faq.php">FAQs</a></li>
                <li class="lulu"><a href="home.html">Contact</a></li>
               <?php if(empty($_SESSION)){
                // Üye giriş yapmışsa register ve login sayfasını gizle
                 echo '<li class="lulu" id="reg_btn"><a href="register.php">Register</a></li>'.'<li><a id="login-btn" class="waves-effect btn" href="login.php">Login</a></li>';
                     } 
                if(!empty($_SESSION)){
                    echo '<li class="lulu"><a href="logout.php">Logout</a></li>';
                }
                ?>
            </ul>
        </div>
    </nav>