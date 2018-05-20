              <?php

            function autoincuser(){
            $userid;
            $numrows;
            include('db_con_select.php');
            $result = $con->query("SELECT strUsername from tbluser WHERE intfkRole = '3' ORDER BY strUsername desc LIMIT 1;");
            $result->execute();
            $numrows= $result->rowCount();
              while($row = $result->fetch()){     
                if($numrows==0){
                $userid = "S".date("Y")."00001";
                }else{
              $userid = ++$row['strUsername'];
              }
            }
            $usvar = $userid;
          return $userid;
          }

          function autoincteachuser(){
          $teachid;
    $numrows;
  include('db_con_select.php');
  $result = $con->query("SELECT strUsername from tbluser WHERE intfkRole = '2' ORDER BY strUsername desc LIMIT 1;");
    $result->execute();
    $numrows= $result->rowCount();
    while($row = $result->fetch()){     
      if($numrows==0){
        $teachid = "F".date("Y")."00001";
      }else{
        $teachid = ++$row['strUsername'];
      }

    }
    return $teachid;
  }

  function autoincsubj()
  {
    $classid;
    $numrows;
  include('db_con_select.php');
  $result = $con->query("SELECT strSubjectCode from tblsubject ORDER BY strSubjectCode desc LIMIT 1;");
    $result->execute();
    $numrows= $result->rowCount();
    while($row = $result->fetch()){     
      if($numrows==0){
        $classid = "SUBJ000001";
      }else{
        $classid = ++$row['strSubjectCode'];
      }

    }
    return $classid;
  }

  function autoincclass()
  {
    $classid;
    $numrows;
  include('db_con_select.php');
  $result = $con->query("SELECT strClassCode from tblclass ORDER BY strClassCode desc LIMIT 1;");
    $result->execute();
    $numrows= $result->rowCount();
    while($row = $result->fetch()){     
      if($numrows==0){
        $classid = "0000000001";
      }else{
        $classid = ++$row['strClassCode'];
      }

    }
    return $classid;
  }
          ?>