<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $id = $_POST['id'];

    require_once 'connect.php';

    $sql = "SELECT * FROM users_table WHERE id='$id' ";

    $response = mysqli_query($conn, $sql);

    $result = array();
    $result['login'] = array();
    
    if ( mysqli_num_rows($response) === 1 ) {
        
        $row = mysqli_fetch_assoc($response);

        
       $index['credits'] = $row['credits'];
       $index['distance'] = $row['distance'];



        array_push($result['login'], $index);

        $result['success'] = "1";
        $result['message'] = "success";
        echo json_encode($result);

        mysqli_close($conn);

    }

}

?>