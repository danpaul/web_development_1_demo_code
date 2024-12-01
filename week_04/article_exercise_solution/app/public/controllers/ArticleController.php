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

    public function create($article){
        $this->articleModel->create($article);
    }

    public function get($id)
    {
        return $this->articleModel->get($id);
    }

}
