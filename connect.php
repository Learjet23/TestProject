<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 10/10/2016
 * Time: 14:13
 */

    //connect to cdsm webserver and select database
    $db = new mysqli(
        'eu-cdbr-azure-west-a.cloudapp.net',
        'beb5f18bde3177',
        'b97117f9',
        'sl1303677'
    );

    //test if connection was established and print any errors

    if($db->connect_errno){
        die('Connectfailed['.$db->connect_error.']');
    }

    //create a SQL query as a string

    $sql_query = "SELECT * FROM marvelmovies WHERE title LIKE '%Captain%'";

    //execute the SQL query

    $result = $db->query($dbsql_query);

    //iterate over $result object one $row at a time
    //use fetch_array() to return an associative array

    while($row = $result->fetch_array()){
        //print out fields from row of data
        echo "<p>" .$row['title']."</p>";
    }

    $result->close();
    //close connection to database
    $db->close();
?>