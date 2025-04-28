<!DOCTYPE html> 

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title> Настройки </title>
</head>

<body 
    style="
    background-color: rgb(139, 201, 182)">

<body>

    <front margin: 0px 0px 0px 10px> 

    <h2> 
          Мы только начинаем свой путь программирования, так что игра простенькая. Жалобы и предложения можно написать на почту venerologbogat@mail.ru 
    </h2>
        </front>


<?php
class DatabaseTable {
    private $pdo;
    private $table;
    private $primaryKey;

    public function __construct(PDO $pdo, string $table, string $primaryKey) {
        $this->pdo = $pdo;
        $this->table = $table;
        $this->primaryKey = $primaryKey;
    }
    
public function query($sql, $parameters = []) {
        $query = $this->pdo->prepare($sql);
        $query->execute($parameters);
        return $query;
    }

    /**
     * Получает все записи из таблицы
     */
    public function findAll($orderBy = null, $limit = null, $offset = null) {
        $query = 'SELECT * FROM `' . $this->table . '`';
        
        if ($orderBy != null) {
            $query .= ' ORDER BY ' . $orderBy;
        }
        
        if ($limit != null) {
            $query .= ' LIMIT ' . $limit;
        }
        
        if ($offset != null) {
            $query .= ' OFFSET ' . $offset;
        }
        
        return $this->query($query)->fetchAll();
    }
?>

    

</body>
</html>
