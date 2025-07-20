<?php
require_once __DIR__ . '/../models/Article.php';
require_once __DIR__ . '/../models/Categorie.php';

class ArticleController {
    private $pdo, $articleModel, $categorieModel;

    public function __construct($pdo) {
        $this->pdo = $pdo;
        $this->articleModel = new Article($pdo);
        $this->categorieModel = new Categorie($pdo);
    }

    public function index() {
         // ‑‑ Récupère l’ID de catégorie passé en GET (ex : ?categorie=3) ‑‑
        $categorie_id = $_GET['categorie'] ?? null;

        // ‑‑ Récupère les articles : filtrés si un id est présent, sinon tous ‑‑
        if ($categorie_id) {
            $articles = $this->articleModel->getArticleByCategorie($categorie_id);
        } else {
            $articles = $this->articleModel->getAll();
        }

        // ‑‑ Toujours utile pour alimenter le menu déroulant de filtres ‑‑
        $categories = $this->categorieModel->getAll();

        // ‑‑ Affiche la vue ‑‑
        include __DIR__ . '/../views/article/index.php';
    }

    public function update() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $id = $_GET['id'];
            $this->articleModel->update($id, $_POST['titre2'], $_POST['contenu2'], $_POST['categorie2']);
        }
        header("Location: /IABD/articles_mvc/articles_mvc/public/");
    }

    public function delete() {
        if (isset($_GET['id'])) {
            $this->articleModel->delete($_GET['id']);
        }
        header("Location: /IABD/articles_mvc/articles_mvc/public/");
    }

    public function create() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->articleModel->create($_POST['titre'], $_POST['contenu'], $_POST['categorie']);
        }
        header("Location: /IABD/articles_mvc/articles_mvc/public/");
    }
}
?>