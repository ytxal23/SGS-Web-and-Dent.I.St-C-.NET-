<?php

function autoincuser(){
    global $value2;
    $query = "SELECT strUsername from tbluser order by strUsername desc LIMIT 1";
    $stmt = $this->db->prepare($query);
    $stmt->execute();

    if ($stmt->rowCount()>0)
    {
    $row=$stmt->fetch(PDO::FETCH_ASSOC);

        $value2 =$row['strUsername'];
        $value2 =substr($value2,3,5);
        $value2 = (int)$value2 + 1;
        $value2 = "EMP". sprintf('%04s',$value2);

$value = $value2;   
return $value;
    }
    else {
        $value2 = "EMP0001";    
    $value = $value2;
    return $value;
    }
    }
}
?>