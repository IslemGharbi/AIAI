<?php
    $servername="localhost";
    $dbUsername="root";
    $dbPassword="";

    $dbName="aiai";

    // Create a connection 
    $conn=mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

    // Test connection 
    if ($conn) {
        // echo "Connection Succeeded";
    }
    else  {
        die("Connection failed :".mysqli_connect_error());
    }