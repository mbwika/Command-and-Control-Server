<?php
include_once 'db_functions.php';
include_once 'db_connection.php';
$email = $_SESSION['password'];
$page_name = 'apps.php';

$sql = "SELECT name, surname FROM users WHERE imei = '$email' ";

if (isset($_SESSION['password'])) {
    
} else {
    echo 'Please log in to view this page';
    echo "<script language = 'javascript' type='text/javascript'> location.href='index.php', '_self' </script>";
}
?>

<html>
    <head><title>
            <?php
            $prof_name = mysqli_query($link, $sql);
            while ($row = mysqli_fetch_array($prof_name)) {
                    
                $first_name = $row['name'];
                $surname = $row['surname'];
                
                echo "" . $first_name . "  " . $surname . "";
            }
            ?>
        </title
<!--pagination-->
<script>
    $function() {
    $(selector).pagination({
        items: 100,
        itemsOnPage: 10,
        cssStyle: 'Compact-theme'
    });
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!--style.css style for paginations-->
        <link rel="stylesheet" href="simplePagination.css" />
        <script src="jquery.simplePagination.js"></script>
        <script src="SimplePaginationSpec.js"></script>
        <link rel="stylesheet" href="table_style.css" type="text/css">

        <link rel="stylesheet" href="bootstrap-theme.min.css">
        <link rel="stylesheet" href="fontAwesome.css">
        <link rel="stylesheet" href="hero-slider.css">
        <link rel="stylesheet" href="owl-carousel.css">
        <link rel="stylesheet" href="templatemo-style.css">

        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="w3.css">
        <link rel="stylesheet" href="css.css">
        <link rel="stylesheet" href="font-awesome.css">

        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="responsive.css" />

        <script src="modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <body >

        <!-- Page Container -->
        <div align="center">
            <div class="container">
                <div class="nav-top clearfix">
                    <div class="head_top_social pull-right">
                        <ul class="list-inline">
                            <!--<li><a href=""><i class="fa fa-phone"></i>+254 712 508 814</a></li>-->
                            <li class="top_socail">
                                <a href="" target="_blank"><i class="fa fa-skype"></i>collins10</a>
                                <a href="https://web.facebook.com/collins.dominic1" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/CollinsColonel" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/collins-m-mwange-50103b68/" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a href="https://www.instagram.com/collins_mbwika/" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="https://plus.google.com/u/1/+CollinsKathubi" target="_blank"><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>



            <div align="center">
                <!-- Middle Column -->
                <div align="center" class="footer-widget" colorsbg="gray">
                    <div class="w3-container w3-content" style="max-width:1400px">
                        <div class="w3-row-padding">
                            <div class="w3-col m12">
                                <div class="w3-card-2 w3-round w3-theme-d3">
                                    <div class="w3-container w3-padding"  style="background-color: #cccccc">
                                        <div class="w3-container w3-theme-d4">
                                            <h4 class="w3-center w3-theme-d4">
                                                <?php
                                                    echo "" . $first_name . "  " . $surname . "";
                                                ?>
                                            </h4>
                                        </div>
                                            <div class="w3-center w3-theme">
<?php
$sql_img = "SELECT image FROM users WHERE imei = '$email' ";
$prof_image = mysqli_query($link, $sql_img);
while ($row = mysqli_fetch_array($prof_image)) {
    echo "<img src='images/" . $row['image'] . "' alt='Profile pic' class='w3-circle' style='height:150px;width:150px'>";
}
?>

                                                <div class="w3-center w3-theme-d3 w3-col m12">
                                                    <a href="logout.php"><i>Logout</i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div align="center">
                    <div class="w3-row-padding">
                        <div class="w3-col m12">
                            <div class="w3-card-2 w3-round w3-theme-d3">
                                <div class="w3-container w3-padding">
                                    <div class="w3-container">
                                        <h4 class="w3-center w3-theme-d4">Device Details</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Middle Column -->
                    <!--    <div class="w3-container w3-content" style="max-width:1400px;margin-top:10px">-->
<?php
$db = new DB_Functions();
$data = $db->getPhoneInfo();
if ($data != false) {
    $row = mysqli_num_rows($data);
} else {
    $row = 0;
}
?>
                    <div class="w3-row-padding">
                        <div class="w3-col m12">
                            <div class="w3-card-2 w3-round w3-theme-d3">
                                <div class="w3-container w3-padding">
<?php
if ($row > 0) {
    ?>
                                        <table width="100%" class="w3-theme-d4">
                                            <tr id="header" class="w3-text-sub_heading"><th class="w3-hide-small">Brand</th><th>Model No.</th><th class="w3-hide-small">Device ID</th><th>Android Version, API No.</th><th class="w3-hide-small w3-hide-medium">Build No. (id.baseband)</th><th class="w3-hide-small w3-hide-medium">Kernel</th><th class="w3-hide-small">Security Patch</th></tr>
    <?php
    while ($row = mysqli_fetch_array($data)) {
        ?> 
                                                <tr class="w3-theme">
                                                    <td class="w3-hide-small"><span><?php echo $row["brand"] ?></span></td>
                                                    <td><span><?php echo $row["model"] ?></span></td>
                                                    <td class="w3-hide-small"><span><?php echo $row["device_id"] ?></span></td>
                                                    <td><span><?php echo "v. ", $row["os_version"], ", No. ", $row["api_version"] ?></span></td>
                                                    <td class="w3-hide-small w3-hide-medium"><span><?php echo $row["baseband_version"] ?></span></td>
                                                    <td class="w3-hide-small w3-hide-medium"><span><?php echo $row["kernel"] ?></span></td>
                                                    <td class="w3-hide-small"><span><?php echo $row["securityPatch"] ?></span></td>
                                                </tr>
    <?php } ?>
                                        </table>

<?php } else { ?>
                                        <div id="norecord">
                                            No records in the Database
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php } ?>
                <TABLE class='t1 navbar-default' style="margin-top: 20px">
                    <tr style="font-size: 18px"><th><a href="contacts.php">Contacts</a></th>
                        <th><a href="messages.php">Messages</a></th>
                        <th><a href="call_logs.php">Call Logs</a></th>
                        <th style="background-color: #7b7b83"><a href="apps.php">Installed Apps</a></th></tr>
                </table>


                <!-- start********************************************** apps **************************************************-->
<?php
require 'config.php';

$conn = mysqli_connect($dbhost_name, $username, $password, $database) or die("Connection failed: " . mysqli_connect_error());
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
}

////// starting of drop down to select number of records per page /////
            @$start = $_GET['start']; // Read the limit value from query string. 
            if (strlen($start) > 0 and ! is_numeric($start)) {
                echo "Data Error";
                exit;
            }
// If there is a selection or value of limit then the list box should show that value , so we have to lock that options //
// Based on the value of limit we will assign selected value to the respective option//
            $limit = 0;
            switch ($limit) {
                case 25:
                    $select25 = "selected";
                    $select50 = "";
                    $select75 = "";
                    $select100 = "";
                    break;

                case 50:
                    $select25 = "";
                    $select50 = "selected";
                    $select75 = "";
                    $select100 = "";
                    break;

                case 75:
                    $select25 = "";
                    $select50 = "";
                    $select75 = "selected";
                    $select100 = "";
                    break;

                default :
                    $select25 = "";
                    $select50 = "";
                    $select75 = "";
                    $select100 = "selected";
                    break;
            }

            $eu = ($start - 0);
            // if limit value is not available then let us use a default value
            $limit = 50; // No of records to be shown per page by default.
            // No of records to be shown per page.
            $this1 = $eu + $limit;
            $back = $eu - $limit;
            $next = $eu + $limit;
/////////////// Total number of records in our table. We will use this to break the pages///////
            $nume = $dbo->query("select count(id) from appsinfo WHERE uId = '$email'")->fetchColumn();
/////// The variable nume above will store the total number of records in the table////
/////////// Now let us print the table headers ////////////////

$sql = "SELECT * FROM appsinfo WHERE uId = '$email' ORDER BY id ASC LIMIT $eu, $limit";
$rs_result = mysqli_query($conn, $sql);
?>


                    <?php
                    echo "<TABLE class='t1 navbar-default w3-row-padding w3-container' style='width=100%; margin-top: 20px; margin-bottom: 10px'>";
                    echo "<tr><th class='w3-hide-small w3-hide-medium'>ID</th><th>App Name</th><th class='w3-hide-small'>App Package</th><th>X</th></tr>";

////////////// Now let us start executing the query with variables $eu and $limit  set at the top of the page///////////
//////////////// Now we will display the returned records in side the rows of the table/////////
//while ($row = mysqli_fetch_assoc($rs_result)) {
                    foreach ($dbo->query($sql) as $row) {

                        $m = @$i % 2; // required for alternate color of rows matching to style class 
                        @$i = @$i + 1;   //  increment for alternate color of rows

                        $id = $row[0];
                        $imei = $row[1];
                        $name = $row[2];
                        $package = $row[4];

                        echo "<tr class='r$m'>"
                        ?>
                        <!--here showing results in the table -->

                        <td class="w3-hide-small w3-hide-medium"><?php echo $id; ?></td>
                        <td><?php echo $name; ?></td>
                        <td class="w3-hide-small"><?php echo $package; ?></td>
                        <td><a href="delete_app.php?uId=<?php echo $imei ?>&name=<?php echo $name ?>"><button class="btn-danger">X</button></a>
                        </td></tr> <!--btn btn-danger is a bootstrap button to show danger-->
                        
                        <?php
                    }
                    echo "</table>";
////////////////////////////// End of displaying the table with records ////////////////////////
///////////////////////////////// 
        if ($nume > $limit) { // Let us display bottom links if sufficient records are there for paging
/////////////// Start the bottom links with Prev and next link with page numbers /////////////////
            echo "<table align = 'center' width='90%'><tr><td  align='left' width='5%'>";
//// if our variable $back is equal to 0 or more then only we will display the link to move back ////////
            if ($back >= 0) {
                print "<a href='$page_name?start=$back'><font face='Tahoma' size='2'>PREV</font></a>";
            }

////////////// Let us display the page links at  center. We will not display the current page as a link ///////////
            echo "</td><td align=center width='80%'>";
            $i = 0;
            $l = 1;
            for ($i = 0; $i < $nume; $i = $i + $limit) {

                if ($i <> $eu) {
                    echo " <a href='$page_name?start=$i'><font face='Tahoma' size='2'>$l</font></a> ";
                } else {
                    echo "<font face='Tahoma' size='4' color=red>$l</font>";
                }        /// Current page is not displayed as link and given font color red
                $l = $l + 1;
            }

            echo "</td><td  align='right' width='5%'>";
///////////// If we are not in the last page then Next link will be displayed. Here we check that /////
            if ($this1 < $nume) {
                print "<a href='$page_name?start=$next'><font face='Tahoma' size='2'>NEXT</font></a>";
            }
            echo "</td></tr></table>";
        }// end of if checking sufficient records are there to display bottom navigational link. 
        ?>
 <br><br>
                </div>
                </body>
                </html>