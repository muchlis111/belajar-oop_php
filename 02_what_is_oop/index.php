<?php

/**
 *Typical procedural call
 */
// Set a database connection
$dbname = 'some_db';
$username = 'root';
$password = '';
try {
    $conn = new PDO('mysql:host=localhost;dbname=' . $dbname,$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e) {
    die($e->getMessage());
}

// Run a query
$sql = "SELECT * FROM `posts` ORDER BY pubdate DESC";
try {
    $result = $conn->query($sql);
}
catch (Exception $e) {
    die($e->getMessage());
}

// Display post titles
if ($result->rowCount()) {
    foreach ($result as $post) {
        echo '<h1>' . $post['title'] . '</h1>'."\n";
        echo '<h1>' . $post['kategori'] . '</h1>'."\n";
        echo '<h1>' . $post['content'] . '</h1>'."\n";
        echo $post['pubdate'];
    }
}

/**
 *Typical OOPcall
 */
//$post = new PostModel();
//$posts = $post->etchAll();
//foreach ($posts as $post) {
//    echo '<h1>' . $post->title . '</h1>';
//}