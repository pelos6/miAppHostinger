<?php

return [
    'class' => 'yii\db\Connection',
    // 'dsn' => 'oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=127.0.0.1s)(PORT=1521))(CONNECT_DATA=(SID=XE)));charset=AL32UTF8;', // Oracle
    // 'dsn' => 'oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=127.0.0.1)(PORT=1521))(CONNECT_DATA=(SID=XE)));', // Oracle
    'dsn' => 'oci:dbname=//127.0.0.1:1521/XE',
    'username' => 'javier',
    'password' => 'pelos678',
    'attributes' => [
        PDO::ATTR_STRINGIFY_FETCHES => true,
    ]
];
