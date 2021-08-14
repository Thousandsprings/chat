<?php
    class Database {

        function connect() {
            $dsn = 'mysql:dbname=ajax;host=localhost';
            $user = 'root';
            $password = '';

            try { 
                $dbh = new \PDO($dsn, $user, $password);
                $dbh->query('SET NAMES UTF8MB4');
                return $dbh; 
            } catch (Exception $e) { 
                exit($e->getMessage());
            }
        }

        function store($input) {
            $dbh = $this->connect(); 
            $stmt = $dbh->prepare('INSERT INTO chats SET content=?');
            $stmt->execute([$input]);
        }

        function all() {
            $dbh = $this->connect();
            $stmt = $dbh->prepare('SELECT * FROM chats');
            $stmt->execute();
            return $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>