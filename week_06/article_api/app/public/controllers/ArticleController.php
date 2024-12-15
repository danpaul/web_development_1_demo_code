<?php

require_once(__DIR__ . "/../models/ArticleModel.php");

class ArticleController
{
    private $articleModel;
    public function __construct()
    {
        $this->articleModel = new ArticleModel();
    }

    public function getAll()
    {
        return $this->articleModel->getAll();
    }

    public function create($article)
    {
        $this->articleModel->create($article);
    }

    public function createFromApi()
    {
        // Read the incoming raw POST data
        $input = file_get_contents('php://input');

        // Decode the JSON data
        $data = json_decode($input, true);

        // Validate the input
        if (!isset($data['title']) || !isset($data['content']) || !isset($data['author'])) {
            http_response_code(400); // Bad Request
            echo json_encode(['error' => 'Missing required fields']);
            exit;
        }

        // Sanitize the input
        $title = htmlspecialchars(strip_tags($data['title']));
        $content = htmlspecialchars(strip_tags($data['content']));
        $author = htmlspecialchars(strip_tags($data['author']));
        $datetime = date('Y-m-d H:i:s');

        $this->articleModel->create([
            "title" => $title,
            "content" => $content,
            "author" => $author,
            "datetime" => $datetime
        ]);
    }

    public function get($id)
    {
        return $this->articleModel->get($id);
    }
}
