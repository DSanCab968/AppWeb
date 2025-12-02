
<?php

    #Using MySQL PDO driver, write the code to performance these operations:
    #● Create a database called Library.
    #● Include these three tables as well as their main columns and keys.
    #○ Books
    #○ Readers
    #○ Lendings
    #● Add several rows to each table.

    $server = "localhost";
    $user = "root";
    $password = "";

    try {

        $connection = new PDO("mysql:host=$server", $user, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $connection->exec("CREATE DATABASE IF NOT EXISTS Library");
        echo "<p>Library database has been created successfully</p>";

        $connection = new PDO("mysql:host=$server;dbname=Library", $user, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $connection->exec("
            CREATE TABLE IF NOT EXISTS Books(
                id_libro INT AUTO_INCREMENT PRIMARY KEY,
                nombre VARCHAR(20) NOT NULL,
                autor VARCHAR(20) NOT NULL
            )
        ");
        echo "<p>Books table has been created successfully</p>";

        $connection->exec("
            CREATE TABLE IF NOT EXISTS Readers(
                id_reader INT AUTO_INCREMENT PRIMARY KEY,
                nombre VARCHAR(20) NOT NULL,
                direccion VARCHAR(20) NOT NULL
            )
        ");
        echo "<p>Readers table has been created successfully</p>";

        $connection->exec("
            CREATE TABLE IF NOT EXISTS Lendings(
                id_libro_books INT,
                id_reader_readers INT,
                lend_date DATE NOT NULL,
                return_date DATE NOT NULL,
                FOREIGN KEY (id_libro_books) REFERENCES Books(id_libro),
                FOREIGN KEY (id_reader_readers) REFERENCES Readers(id_reader)
            )
        ");
        echo "<p>Lendings table has been created successfully</p>";

        $connection->exec("
            INSERT INTO Books (nombre, autor) VALUES
            ('Libro1', 'Autor1'),
            ('Libro2', 'Autor2')
        ");

        $connection->exec("
            INSERT INTO Readers (nombre, direccion) VALUES
            ('Laura', 'Lucena'),
            ('Pablo', 'Granada')
        ");

        $connection->exec("
            INSERT INTO Lendings (id_libro_books, id_reader_readers, lend_date, return_date) VALUES
            (1, 1, '2024-01-10', '2024-01-20'),
            (2, 2, '2024-02-01', '2024-02-15')
        ");

        echo "<p>Valores creados correctamente</p>";

    } catch (PDOException $exception) {
        echo "Hubo un error: " . $exception->getMessage();
    }

?>
