<?php
$db = new SQLite3("test.db");
//echo "test";
if($db)
{
    echo "the db is active";
    $query = "CREATE TABLE testtable(
    id INTEGER,
    name TEXT
    )";

    $db->exec($query);

}
else
{
    echo "somthing worng";
}
//phpinfo();
?>