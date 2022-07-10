<?php
    $polymerName = $_GET['polymerName']
    $solventName = $_GET['solventName']
    $temperature = $_GET['temperature']
    $pressure = $_GET['pressure']

    // Data connection
    function connectToDb()
    {
        $connection = mysqli_connect('localhost','root','','polymer_sorption');
        validateConnection();
        return $connection        
    }
    
    function validateConnection()
    {
        if (mysqli_connect_errno()) {
            $msg = "Error: Unable to connect to MySQL database: ";
            $msg .= mysqli_connect_errno();
            $msg .= mysqli_connect_error();
            exit($msg);
        }
    }

    mysqli_close($connection);
    function closeDB($connection)
    {
        if (isset($connection){
            mysqli_close($connection);
        })
    }
?>