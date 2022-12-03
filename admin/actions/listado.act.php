<?php

include dirname(dirname(dirname(__FILE__)))."/common/utils.php";
include dirname(dirname(dirname(__FILE__)))."/common/config.php";
include dirname(dirname(dirname(__FILE__)))."/common/mysql.php";

$conn = Connect( $config['database']);

$sql = "select a.*, b.name as author
        from images as a
        inner join authors as b On a.author_id = b.id
        order by a.id desc";    

$rows = ExecuteQuery( $sql, $conn);

$conn->close();
