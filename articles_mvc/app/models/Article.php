<?php
class Article {
    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAll() {
        $sql = "SELECT a.*, c.libelle as categorie_nom FROM article a LEFT JOIN categorie c ON a.categorie = c.id";
        return $this->pdo->query($sql)->fetchAll();
    }

    public function getArticleByCategorie($categorie_id)
    {
        $sql = "SELECT a.*, c.libelle AS categorie_nom
                FROM article a
                LEFT JOIN categorie c ON a.categorie = c.id
                WHERE a.categorie = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$categorie_id]);
        return $stmt->fetchAll();
    }


    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM article WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function update($id, $titre, $contenu, $categorie) {
        $stmt = $this->pdo->prepare("UPDATE article SET titre=?, contenu=?, categorie=? WHERE id=?");
        return $stmt->execute([$titre, $contenu, $categorie, $id]);
    }

    public function create($titre, $contenu, $categorie) {
        $stmt = $this->pdo->prepare("INSERT INTO article (titre, contenu, categorie) VALUES (?, ?, ?)");
        return $stmt->execute([$titre, $contenu, $categorie]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM article WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>