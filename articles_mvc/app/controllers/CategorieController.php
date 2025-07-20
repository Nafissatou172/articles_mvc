<?php
require_once __DIR__ . '/../models/Categorie.php';

class CategorieController {
    private $categorieModel;

    public function __construct($pdo) {
        $this->categorieModel = new Categorie($pdo);
    }

    public function index() {
        $categories = $this->categorieModel->getAll();
        include __DIR__ . '/../views/article/categories.php';
    }
}
