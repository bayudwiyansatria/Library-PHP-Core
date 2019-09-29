<?php
    function setConnection () {
        # XAMPP Defaut Connection
        $host = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "libstest";
        return new mysqli($host, $username, $password, $dbname);
    }
?>