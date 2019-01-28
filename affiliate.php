<?php
    session_start();
    if(empty($_SESSION))
{    
    header("Location: index.php"); die();
}  
include 'connection.php';
//var_dump($_SESSION);
$uname = $_SESSION['username'];

include 'connection.php';

$prep = $db_site->prepare("SELECT * FROM users WHERE referral=?");
$prep->execute(array($uname));
$prep = $prep->fetchALL(PDO::FETCH_ASSOC);
$refCount = count($prep);
//var_dump($prep); 

$cash = $db_site->prepare("SELECT bonus,available,rate FROM users WHERE username=?");
$cash->execute(array($uname));
//var_dump($cash);
$cash = $cash->fetchAll(PDO::FETCH_ASSOC);
$money = $cash[0]['bonus'];
$available = $cash[0]['available'];
$rate = $cash[0]['rate'];
//echo $current.' -- '.$available;
//var_dump($cash);die();
//var_dump($prep); die();
$db_site = null;
?>
<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" media="screen" href="out.css" />


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <?php include 'header.php'; ?>

        <div class='main-content'>
            <div class='container'>
                <div class='hide' id='user-alerts'>
                    <div class='alert alert-success alert-dismissible fade in' role='alert'>
                        <button aria-label='Close' class='close' data-dismiss='alert' data-target='#user-alerts' type='button'>
                            <span aria-hidden='true'>×</span>
                        </button>
                        <div class='message-body'></div>
                    </div>
                </div>
                <header class='main_content_header'>
                    <!--                    <h1>Referrals</h1>-->
                </header>
                <div class='main-content-content clearfix'>
                    <div class='row_100 first clearfix'>
                        <div class='row_33 box left'>
                            <h3>Current Rate</h3>
                            <ul class='commissions_list'>
                                <li>
                                    <span class='value'><?php echo $rate; ?>%</span>
                                    <span class='title'>Cash commissions</span>
                                </li>
                                <!--
                            <li class='last'>
                                <span class='value'>25%</span>
                                <span class='title'>Cash commissions</span>
                            </li>
-->
                            </ul>
                            * Minimum withdraw limit is only $5.
                        </div>
                        
                            
                        
                        <div class='row_33 box'>
                            <h3>Referral statistics</h3>
                            <ul class='referral_statistics_list'>
                                <li>
                                    <span class='title'>Total referrals:</span>
                                    <span class='value'><?php echo $refCount; ?></span>
                                </li>
                                <!--
                            <li>
                                <span class='title'>Total Minutes earned:</span>
                                <span class='value'>0</span>
                            </li>
-->
                                <li class='last'>
                                    <span class='title'>Total cash earned:</span>
                                    <span class='value'>
€
<?php echo $money; ?>
</span>
                                </li>
                            </ul>
                        </div>
                        <div class='row_33 box'>
                            <h3>Available:</h3>
                            <ul class='cash'>
                                <li>
                                    <span class='big'>
€
<?php echo $available; ?>
</span>
                                </li>
                                <li class='last'>
                                    <button class="btn waves-effect waves-teal" type="submit" name="action">Withdraw<i class="material-icons left"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class='row_100 box clearfix'>
                        <h3>Your Referral Link:</h3>
                            <h4><p><a id="reflink" href="<?php echo $_SERVER['SERVER_NAME'].'/register.php?ref='.$_SESSION['username']; ?>">
                                <?php echo $_SERVER['SERVER_NAME'].'/register.php?ref='.$_SESSION['username']; ?>
                            </a></p></h4>
                            <p>
                                <a id="tip">Tip : </a> If you refer someone, your referral information will be saved for 7 days. It means if someone visit Dataleaks with your affiliate link and register within ongoing 7 days it will count as your referral.
                            </p>
                            <!--
                        <p class='image'>
                            <a target="_blank" href="https://hitleap.com/by/davain"><img alt="Get Free Traffic" src="https://hitleap.com/banner.png" width="468" height="60" /></a>
                        </p>
-->
                        
                        <!--
                    <div class='row_50 clearfix'>
                        <form class='referrals'>
                            <label form='website-link'>Website link:</label>
                            <input class='input' id='website-link' name='website-link' type='text' value='<a rel="external" href="https://hitleap.com/by/davain">HitLeap - Get Free Traffic</a>'>
                            <label form='banner-link'>Banner link:</label>
                            <input class='input' id='banner-link' name='banner-link' type='text' value=''>
                        </form>
                    </div>
-->
                    </div>
                    <!--
                    <div class='row_100 clearfix'>
                        <div class='table_container'>
                            <table class='table referrals'>
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Joined at</th>
                                        <th>Minutes</th>
                                        <th>Cash</th>
                                        <th>Came from</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan='5' style='text-align: center;'>
                                            <p>Your referrals will be displayed here.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class='row_100 clearfix'></div>
                        </div>
                    </div>
-->
                    
                </div>

            </div>
        </div>



        <br/>
        <br/>










        </div>





        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>