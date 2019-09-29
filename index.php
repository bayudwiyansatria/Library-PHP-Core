<?php
    include 'library.php';
    $db = setConnection();
    $query = 'SELECT * FROM `test` ORDER BY `id` DESC';
    $exe = musqli_query($db,$query);
?>