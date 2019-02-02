<?php
$dsn = 'pgsql:dbname=TEST;host=pgsql;port=5432';
$user = 'postgres';
$pass = 'example';

try {
    $dbh = new PDO($dsn, $user, $pass);

    // query method (SELECT) //
    // $query_result = $dbh->query('SELECT * FROM test_comments');

    // prepare method (INSERT) //
    // $sth = $dbh->prepare('INSERT INTO test_comments (name, text) VALUES (?, ?)');

    // prepare method (SELECT) //
    $sth_select = $dbh->prepare('SELECT * FROM test_comments WHERE name = ?');

    $dbh = null;
} catch (PDOException $e) {
    print "DB ERROR: " . $e->getMessage() . "<br/>";
    die();
}
?>
<?php
// query method (SELECT) //
// foreach($query_result as $row) {
    // print $row["name"] . ": " . $row["text"] . "<br/>";
// }
?>
<?php
// prepare method (INSERT) //
// $name = 'John';
// $text = "Power to the People";
// $sth->execute(array($name, $text));
?>
<?php
// prepare method (SELECT) //
$name = "John";
$sth_select->execute(array($name));
$prepare_result = $sth_select->fetchAll();
foreach($prepare_result as $row) {
    print $row["name"] . ": " . $row["text"] . "<br/>";
}
$sth_select->execute(array($name));
?>