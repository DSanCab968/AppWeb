<?php
$dsn = "mysql:host=localhost;dbname=Library";
$user = "root";
$password = "";
try {
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT nombre,autor FROM Books ORDER BY nombre";
    $statement = $connection->query($sql);
    echo "<table><caption>Books</caption>";
    echo "<tr> <th>Title</th> <th>Author</th> </tr>";
    $books = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($books as $book){
    echo "<tr>";
    echo "<td>",$book['nombre'] , "</td>";
    echo "<td>",$book['autor'] , "</td>";
    echo "</tr>";
    }
    echo "</table>";
}catch (PDOException $exception){
echo "The connection failed. ", $exception->getmessage();
}
$connection = null;