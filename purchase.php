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
    <style>
        tbody tr {
            border-top: 2px solid white !important;
            border-bottom: 2px solid white !important;
            border-left: 2px solid white !important;
            border-right: 2px solid white !importan;
        }
        
        tbody td {
            border: 3px solid rgba(34, 54, 119, 0.47) !important;
            background-color: rgba(0, 0, 0, 0.33);
        }
        thead th{
            text-align: center;
            border: 3px solid rgb(33, 38, 72) !important;
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: rgba(2, 3, 7, 0.32);
        }
        
        td:nth-child(2) {
            text-align: center;
            padding-left: 50px;
            padding-right: 50px;
            color: aliceblue;
        }
        
        td:last-child {
            text-align: center;
            padding-right: 15px;
            padding-top: 4px;
            padding-bottom: 4px;
            padding-left: 15px;
            max-height: 20px;
        }
        
        td:last-child a {
            font-size: 12px;
        }
        
        td:first-child p {
            padding-left: 35px;
            padding-right: 25px;
            color: aliceblue;
            text-align: center !important;
            display: inline;
        }
        
        td:first-child i {
            text-align: left !important;
            padding-left: 0 auto;
            margin-left: 15px;
            color: aqua;
            display: inline !important;
        }
        
        .btn {
            border-radius: 5px;
        }
        
        .container {
            margin: 0 auto !important;
            max-width: 1280px !important;
            width: 50% !important;
        }
        #spack{
            margin: 0 auto;
            text-align: center !impotant;
            color: rgba(127, 255, 0, 0.67);
            display: block;
            font-size: 20px;            
        }
        #p-btn{
            background-color: rgba(127, 255, 0, 0.42);
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>
        <div class="container">
            <br/>
            <br/>
            

            <table class="bordered" id="pricingtable">
                <!--
        <thead>
          Pricing
        </thead>
--><center><p  id="spack">Subscription Packages</p></center>
                <thead>
                    <tr>
                        <th data-field="name">Period</th>
                        <th data-field="price">Price</th>
                        <th data-field="buy">Purchase</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="material-icons">done_all</i>
                            <p>1 Day Trial</p>
                        </td>
                        <td>2$</td>
                        <td><a id="p-btn" class="waves-effect waves-light btn waves-red">Purchase</a></td>
                    </tr>
                    <tr>
                        <td><i class="material-icons">done_all</i>
                            <p>7 Days</p>
                        </td>
                        <td>10$</td>
                        <td><a id="p-btn" class="waves-effect waves-light btn waves-red">Purchase</a></td>
                    </tr>
                    <tr>
                        <td><i class="material-icons">done_all</i>
                            <p>14 Days</p>
                        </td>
                        <td>17$</td>
                        <td><a id="p-btn" class="waves-effect waves-light btn waves-red">Purchase</a></td>
                    </tr>
                    <tr>
                        <td><i class="material-icons">done_all</i>
                            <p>28 Days</p>
                        </td>
                        <td>17$</td>
                        <td><a id="p-btn" class="waves-effect waves-light btn waves-red">Purchase</a></td>
                    </tr>
                    <tr>
                        <td><i class="material-icons">done_all</i>
                            <p>3 Months</p>
                        </td>
                        <td>17$</td>
                        <td><a id="p-btn" class="waves-effect waves-light btn waves-red">Purchase</a></td>
                    </tr>
                </tbody>
            </table>


        </div>
        <!--        






                <!--background-color: rgba(0, 11, 56, 0.9);-->

        <br/>
        <br/>







        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="js/modal.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>