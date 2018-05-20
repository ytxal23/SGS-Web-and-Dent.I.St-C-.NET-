<!--<?php include("db_con.php")
                                        ?>

                                        <?php 
                                        set_error_handler("E_NOTICE");

                                        function E_NOTICE($errno, $errstr) 
                                        { 
                                              die();
                                        }

                                        //set_error_handler("E_NOTICE",E_USER_WARNING);

                                       /*$test=2; 
                                        if ($test>1) 
                                          {
                                              trigger_error("Value must be 1 or below",E_USER_WARNING);
                                          }*/

                                            //$servername = "127.0.0.1"; //or localhost
                                            //$username = "root";
                                            //$password = "";
                                            //$dbname = "dbgrades";    

                                            //$strstudcode = $_POST['edit-id']
                                            //$strstudfirstname=$_POST['strstudfirstname'];
                                            //$strstudmidname=$_POST['strstudmidname'];
                                            //$strstudlastname=$_POST['strstudlastname'];
                                            //$strstudcontact=$_POST['strstudcontact'];
                                            //$strstudmail=$_POST['strstudmail'];
                                            //$strstudstat=$_POST['strstudstat'];
                                            // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                            // Check connection
                                           if ($conn -> connect_error) 
                                           {
                                                die("Connection failed: " . $conn->connect_error);
                                            } 
                                            
                                            $sql = "UPDATE tblstudent SET strStudFirstName = '$strstudfirstname', strStudMidName ='$strstudmidname', strStudLastName = '$strstudlastname', strStudContact = '$strstudcontact',strStudMail = '$strstudmail', strStudStat = '$strstudstat' WHERE strStudCode = '$strstudcode';";
                                            

                                           if ($conn->query($sql) === TRUE) {
                                                echo "Updated record successfully";
                                            } else 
                                            {
                                                die();
                                            }

                                            mysqli_close($conn);                                             
                                        ?>-->

<?php

    // VARIABLES
    //$aColumns = array('id', 'firstname', 'midname', 'lastname', 'contact', 'address', 'birth', 'gender', 'mail', 'stat');
    //$sIndexColumn = "id";
    //$sTable = "tblstudent";
    //$gaSql['user'] = "root";
    //$gaSql['password'] = "";
    //$gaSql['db'] = "dbgrades";
    //$gaSql['server'] = "localhost";


    // DATABASE CONNECTION
    //function dbinit(&$gaSql) {
        // ERROR HANDLING
        //function fatal_error($sErrorMessage = '') {
        //    header($_SERVER['SERVER_PROTOCOL'] .' 500 Internal Server Error');
        //    die($sErrorMessage);
        //}

        // MYSQL CONNECT
        //if ( !$gaSql['link'] = @mysql_connect($gaSql['server'], $gaSql['user'], $gaSql['password']) ) {
        //    fatal_error('Could not open connection to server');
        //}

        // MYSQL DATABASE SELECT
        //if ( !mysql_select_db($gaSql['db'], $gaSql['link']) ) {
        //    fatal_error('Could not select database');
        //}
    //}

    // AJAX EDIT FROM JQUERY
    //if ( isset($_GET['edit']) && 0 < intval($_GET['edit']) ) {
    //    dbinit($gaSql);

        // SAVE DATA
    //    if ( isset($_POST) ) {
    //        $p = $_POST;
    //        foreach ( $p as &$val ) $val = mysql_real_escape_string($val);
    //        if ( !empty($p['firstname']) && !empty($p['mail']) && !empty($p['contact']) )
    //            @mysql_query(" UPDATE $sTable SET strStudFirstName = '" . $p['firstname'] . "', strStudMidName = '" . $p['midname'] . "', strStudLastName = '" . $p['lastname'] . "', strStudMail = '" . $p['mail'] . "', strStudAddress = '" . $p['address'] . "', strStudContact = '" . $p['contact'] . "', strStudGender = '" . $p['gender'] . "' WHERE intStudCode = " . intval($_GET['edit']));
    //    }

        // GET DATA
    //    $query = mysql_query(" SELECT * FROM $sTable WHERE $sIndexColumn = " . intval($_GET['edit']), $gaSql['link']);
    //    die(json_encode(mysql_fetch_assoc($query)));
    //}
                                        ?>