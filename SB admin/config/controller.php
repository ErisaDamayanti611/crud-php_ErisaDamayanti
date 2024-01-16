<?php 

function select($query)
{
    //panggil koneksi database
    global $db;
    
    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $row[]  = $row;
    }

    return $rows;

}

