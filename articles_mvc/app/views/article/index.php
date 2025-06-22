<?php include 'head2.php'; ?>

<div class="content__boxed">
    <div class="content__wrap">

        <!-- Table with toolbar -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-3">Liste des articles </h5>
                <div class="row">

                    <!-- Left toolbar -->
                    <div class="col-md-6 d-flex gap-1 align-items-center mb-3">
                        <button class="btn btn-primary hstack gap-2 align-self-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="demo-psi-add fs-5"></i>
                            <span class="vr"></span>
                            Ajouter
                        </button>
                        <button class="btn btn-icon btn-outline-light" aria-label="Print table">
                            <i class="demo-pli-printer fs-5"></i>
                        </button>
                        <div class="btn-group">
                            <button class="btn btn-icon btn-outline-light" aria-label="Information"><i class="demo-pli-exclamation fs-5"></i></button>
                            <button class="btn btn-icon btn-outline-light" aria-label="Remove"><i class="demo-pli-recycling fs-5"></i></button>
                        </div>
                    </div>
                    <!-- END : Left toolbar -->

                    <!-- Right Toolbar -->
                    <div class="col-md-6 d-flex gap-1 align-items-center justify-content-md-end mb-3">
                        <div class="form-group">
                            <input type="text" placeholder="Search..." class="form-control" autocomplete="off">
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-icon btn-outline-light" aria-label="Download"><i class="demo-pli-download-from-cloud fs-5"></i></button>
                            <div class="btn-group dropdown">
                                <button class="btn btn-icon btn-outline-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END : Right Toolbar -->
                     <!-- Start modal -->
                     
                        <div class="alert alert-success" role="alert">
                             
                        </div>
                     
                     <div class="row modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                        <div class="col-md-12 mb-3">
                            <div class="card modal-dialog">
                                <div class="card-body modal-content">
                                    <div class="modal-header">
                                        <h5 class="card-title">Ajouter un article </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                    </div>
                                    <!-- Custom styles -->
                                    <form class="row g-3 needs-validation modal-body" method="post" action="?action=create" novalidate>
                                        <div class="col-md-6">
                                            <label for="_dm-vCustomFirsname" class="form-label">Titre</label>
                                            <input id="_dm-vCustomFirsname" type="text" name= "titre" class="form-control"  required>
                                            <div class="invalid-feedback">Please input your first name</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="_dm-vCustomLastname" class="form-label">Contenu</label>
                                            <input id="_dm-vCustomLastname" type="text" name="contenu" class="form-control" required>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please input your last name</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="_dm-vCustomCountry" class="form-label">Catégorie</label>

                                            <select id="_dm-vCustomCountry" class="form-select" name="categorie" required>
                                                    <?php foreach ($categories as $cat): ?>
                                                        <option value="<?= $cat['id'] ?>"><?= htmlspecialchars($cat['libelle']) ?></option>
                                                    <?php endforeach; ?>
                                               
                                            </select>

                                            <div class="invalid-feedback">Please select a valid role.</div>
                                        </div>
                                        <div class="col-12 pt-4 modal-footer">
                                            <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Annuler</button>
                                            <button class="btn btn-primary" type="submit">Enregistrer</button>
                                        </div>
                                    </form>
                                    <!-- END : Custom styles -->

                                </div>
                            </div>
                        </div>
                        
                    </div>
                      <!-- end modal  -->
                    <!-- Start Edit modal -->
                    <div class="row modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true" >
                        <div class="col-md-12 mb-3">
                            <div class="card modal-dialog">
                                <div class="card-body modal-content">
                                    <div class="modal-header">
                                        <h5 class="card-title">Modifier un article</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                    </div>
                                    <!-- Custom styles -->
                                    <form class="row g-3 needs-validation modal-body" method="POST" action="" >
                                        
                                        <div class="col-md-6">
                                            <label for="_dm-vCustomFirsname" class="form-label">Titre</label>
                                            <input id="_dm-vCustomFirsname1" type="text" name="titre2" class="form-control"  required>
                                            <div class="invalid-feedback">Please input your first name</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="_dm-vCustomLastname" class="form-label">Contenue</label>
                                            <input id="_dm-vCustomLastname2" type="text" name="contenu2" class="form-control" required>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please input your last name</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="_dm-vCustomCountry" class="form-label">Catégorie</label>
                                            <select id="_dm-vCustomCountr5" class="form-select" name="categorie2" required>
                                                   <option selected disabled value="">Choisir...</option>
                                                   <?php foreach ($categories as $cat): ?>
                                                        <option value="<?= $cat['id'] ?>"><?= htmlspecialchars($cat['libelle']) ?></option>
                                                    <?php endforeach; ?>
                                            </select>
                                            <div class="invalid-feedback">Please select a valid role.</div>
                                        </div>
                                        <div class="col-12 pt-4 modal-footer">
                                            <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Annuler</button>
                                            <button class="btn btn-primary" type="submit">Enregistrer</button>
                                        </div>
                                    </form>
                                    <!-- END : Custom styles -->

                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <!-- End Modal -->

                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th width="50%">Contenu</th>
                                <th>Catégorie</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($articles as $a): ?>
                            <tr>
                                <td><?= htmlspecialchars($a['titre']) ?></td>
                                <td><?= htmlspecialchars($a['contenu']) ?></td>
                                <td><?= htmlspecialchars($a['categorie_nom']) ?></td>
                                <td class="">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <a href="?action=delete&id=<?= $a['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Supprimer cet article ?')">
                                            <i class="demo-psi-recycling icon-lg fs-5"></i>
                                        </a>
                                    </button>
                                    <button  class="btn btn-icon btn-success rounded-circle btn-edit-user" data-bs-toggle="modal" data-bs-target="#editModal" 
                                        data-id="<?= $a['id']?>"
                                        data-titre="<?= $a['titre']?>"
                                        data-contenu="<?= $a['contenu']?>" >
                                            <i class="demo-psi-tag icon-lg fs-5"></i>
                                    </button>
                                </td> 
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        
                    </table>
                </div>

                <nav class="text-align-center mt-5" aria-label="Table navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">1</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END : Table with toolbar -->

    </div>
</div>


<?php include 'footer.php'; ?>