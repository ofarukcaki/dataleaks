<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

 <?php include 'header.php'; ?>
        <center>
            <form class="form-elmnts" action="" method="POST">
                <input type="text" placeholder="Search Term..." id="textinput" name="search" autofocus>
                <select class="browser-default" id="secenekler">
                    <option id="h264" value="1">Username</option>
                    <option class="slct-item" value="2">Email</option>
                    <option class="slct-item" value="3">IP Adress</option>
                    <option class="slct-item" value="3">MAC Adress</option>
                    <option class="slct-item" value="3">Phone Number</option>
                    <option class="slct-item" value="3">Name</option>
                </select>

                <br/>
                <button id="arama-butonu" class="btn waves-effect" type="submit"> <i class="material-icons left" id="search-id">search</i>SEARCH

                </button>
            </form>
        </center>


        <!--background-color: rgba(0, 11, 56, 0.9);-->

        <br/>
        <br/>

        <div class="container">
 
                <?php
                /*error_reporting(0);
@ini_set('display_errors', 0);*/
//echo "string";
include 'config.php'; //$db = new PDO('mysql:host=localhost;dbname=leakedsource','root','');
    
$dbc1 = $db->query("SELECT group_concat(table_name) AS tables FROM information_schema.tables WHERE table_schema='dataleaks'");



//echo "hey";
//echo $_REQUEST["sss"];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$user_search_entry= trim($_REQUEST["search"]);

$user_selected_field='username';


$dbc1_ftchd = $dbc1->fetch(PDO::FETCH_ASSOC);


foreach(explode(',',$dbc1_ftchd['tables']) as $next_tb_name){  //Her seferinde new table name döndüren fonksiyon <3
    //echo $next_tb_name.'<br>';
    $m_dbc = $db->query("SELECT * FROM $next_tb_name WHERE $user_selected_field='$user_search_entry'");
    
    $m_dbc_ftchd = $m_dbc->fetchALL(PDO::FETCH_ASSOC);
    if($m_dbc_ftchd!=NULL){
    echo '<ul class="collapsible" data-collapsible="expandable">';
}
    if($m_dbc_ftchd!=NULL){  //Aranan değer varsa yazdıran fonk.
        $tblc = $db->query("SELECT group_concat(column_name) AS fields FROM information_schema.columns WHERE table_name='$next_tb_name'");
        $tblc_ftchd = $tblc->fetch(PDO::FETCH_ASSOC);
        
        $fields_str = $tblc_ftchd['fields'];
        $fields_str = explode(',', $fields_str);// str_replace("_",".",$next_tb_name);
        
        $filtered = array_filter($m_dbc_ftchd['0'], function($var){return !is_null($var);} );
        unset($filtered['id']);
        echo '<li>
      <div class="collapsible-header"><i class="material-icons">keyboard_arrow_right</i>'.str_replace("_",".",$next_tb_name).'</div>';
        
//        echo '<div class="collapsible-body"><table class="bordered"><tbody>';
//        foreach ($filtered as $key => $value) {   
//        echo '<tr>';     
//            echo ' <td>'.$key.': </td>  <td>'.$value.'</td></tr>';            
//        }
//        echo ' </tbody>
//                        </table>
//                    </div></li>';
//        if($m_dbc_ftchd!=NULL){
//    echo '</ul>';
//}
        //echo '<br/><hr>';
        
        
    }
      if($m_dbc_ftchd!=NULL){
    //echo '</ul>';
}  
}

$db = null;
}
?>

<!--
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
-->



        </div>





        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>