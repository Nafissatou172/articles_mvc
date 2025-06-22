<?php include_once __DIR__ . '/modal_edit.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Articles</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h2>Articles</h2>

<form method="post" action="?action=create" class="mb-4">
  <input name="titre" class="form-control mb-2" placeholder="Titre" required>
  <input name="contenu" class="form-control mb-2" placeholder="Contenu" required>
  <select name="categorie" class="form-select mb-2" required>
    <?php foreach ($categories as $cat): ?>
      <option value="<?= $cat['id'] ?>"><?= $cat['libelle'] ?></option>
    <?php endforeach; ?>
  </select>
  <button class="btn btn-primary">Ajouter</button>
</form>

<table class="table table-bordered">
  <tr><th>Titre</th><th>Contenu</th><th>Catégorie</th><th>Actions</th></tr>
  <?php foreach ($articles as $a): ?>
    <tr>
      <td><?= $a['titre'] ?></td>
      <td><?= $a['contenu'] ?></td>
      <td><?= $a['categorie_nom'] ?></td>
      <td>
        <button class="btn btn-warning btn-sm btn-edit-user" data-bs-toggle="modal" data-bs-target="#editModal"
                data-id="<?= $a['id'] ?>" data-titre="<?= $a['titre'] ?>" data-contenu="<?= $a['contenu'] ?>" data-categorie="<?= $a['categorie'] ?>">
          Modifier
        </button>
        <a href="?action=delete&id=<?= $a['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Supprimer ?')">Supprimer</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

<script>
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.btn-edit-user').forEach(button => {
    button.addEventListener('click', () => {
      const modal = document.querySelector('#editModal');
      modal.querySelector('input[name="titre2"]').value = button.dataset.titre;
      modal.querySelector('input[name="contenu2"]').value = button.dataset.contenu;
      modal.querySelector('select[name="categorie2"]').value = button.dataset.categorie;
      modal.querySelector('form').action = '?action=update&id=' + button.dataset.id;
    });
  });
});
</script>
</body>
</html>