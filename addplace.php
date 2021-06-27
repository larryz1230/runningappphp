<?php
    
if ($_SERVER['REQUEST_METHOD']== 'POST'){

    $id = $_POST ['id'];
    $distance = $_POST ['distance'];
    $credits = $_POST ['credits'];


    require_once 'connect.php';


    // $sql = "UPDATE citizen_aid_table SET description= '$description' WHERE email= '$email'";

    $sql = "UPDATE users_table SET distance= '$distance', credits= '$credits' WHERE id= '$id'";

    // $sql = "UPDATE citizen_aid_table SET type= '$type' WHERE email= '$email'";


    if (mysqli_query($conn, $sql)) {

        $result["success"] = "1";
        $result ["message"] = "success";

        echo json_encode($result);
        mysqli_close($conn);

    } else {

        // $sql = "UPDATE users_table SET textmessage= $textmessage WHERE id=20";
        $result["success"] = "0";
        $result ["message"] = "error";

        echo json_encode($result);
        mysqli_close($conn);
    }


}


?>