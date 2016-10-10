<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 10/10/2016
 * Time: 14:13
 */
    $db = new my(
        'hostname'
        'username'
        'password'
        'db_name'
    );

    //test if connection was established and print any errors

    if($db->connect_errno){
        die('Connectfailed['.$db->connect_error.']');
    }

    //create a SQL query as a string

    $sql_query = "SELECT * FROM superheroes WHERE superpower LIKE '%laser%'";

    //execute the SQL query

    $result = $db->query($dbsql_query);

    //iterate over $result object one $row at a time
    //use fetch_array() to return an associative array

    while($row = $result->fetch_array()){
        //print out fields from row of data
        echo "<p>" .$row['superheroName']."</p>";
    }

    $result->dose();
    //dose connection to database
    $db->dose();
?>