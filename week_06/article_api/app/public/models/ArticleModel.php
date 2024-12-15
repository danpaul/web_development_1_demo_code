<?php

require_once(__DIR__ . "/BaseModel.php");

class ArticleModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $query = self::$pdo->prepare('SELECT * FROM article ORDER BY datetime DESC;');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get($id)
    {
        $statement = self::$pdo->prepare("SELECT * FROM article WHERE id = :id");
        $statement->execute(["id" => $id]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function create($article){
        $query = "insert into article (title, content, author, datetime) VALUES (:title, :content, :author, :datetime)";
        $statement = self::$pdo->prepare($query);
        $statement->execute($article);
    }
}
