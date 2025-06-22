<!-- FOOTER -->
            <footer class="content__boxed mt-auto">
                <div class="content__wrap py-3 py-md-1 d-flex flex-column flex-md-row align-items-md-center">
                    <div class="text-nowrap mb-4 mb-md-0">Copyright &copy; 2022 <a href="#" class="ms-1 btn-link fw-bold">My Company</a></div>
                    <nav class="nav flex-column gap-1 flex-md-row gap-md-3 ms-md-auto" style="row-gap: 0 !important;">
                        <a class="nav-link px-0" href="#">Policy Privacy</a>
                        <a class="nav-link px-0" href="#">Terms and conditions</a>
                        <a class="nav-link px-0" href="#">Contact Us</a>
                    </nav>
                </div>
            </footer>
            <!-- END - FOOTER -->

        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - CONTENTS -->

        <!-- HEADER ou Top BAR-->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <header class="header">
            <div class="header__inner">

                <!-- Brand -->
                <div class="header__brand">
                    <div class="brand-wrap">

                        <!-- Brand logo -->
                        <a href="./index.html" class="brand-img stretched-link">
                            <img src="<?php echo "./assets/img/logo.svg" ?>" alt="Nifty Logo" class="Nifty logo" width="40" height="40">
                        </a>

                        <!-- Brand title -->
                        <div class="brand-title">Nifty</div>

                        <!-- You can also use IMG or SVG instead of a text element. -->

                    </div>
                </div>
                <!-- End - Brand -->

                <div class="header__content">

                    <!-- Content Header - Left Side: -->
                    <div class="header__content-start">

                        <!-- Navigation Toggler -->
                        <button type="button" class="nav-toggler header__btn btn btn-icon btn-sm" aria-label="Nav Toggler">
                            <i class="demo-psi-view-list"></i>
                        </button>

                        <!-- Searchbox -->
                        <div class="header-searchbox">

                            <!-- Searchbox toggler for small devices -->
                            <label for="header-search-input" class="header__btn d-md-none btn btn-icon rounded-pill shadow-none border-0 btn-sm" type="button">
                                <i class="demo-psi-magnifi-glass"></i>
                            </label>

                            <!-- Searchbox input -->
                            <form class="searchbox searchbox--auto-expand searchbox--hide-btn input-group">
                                <input id="header-search-input" class="searchbox__input form-control bg-transparent" type="search" placeholder="Type for search . . ." aria-label="Search">
                                <div class="searchbox__backdrop">
                                    <button class="searchbox__btn header__btn btn btn-icon rounded shadow-none border-0 btn-sm" type="button" id="button-addon2">
                                        <i class="demo-pli-magnifi-glass"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End - Content Header - Left Side -->

                    <!-- Content Header - Right Side: -->
                    
                </div>
            </div>
        </header>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - HEADER -->

        <!-- MAIN NAVIGATION ou Leftsidebar -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <nav id="mainnav-container" class="mainnav">
            <div class="mainnav__inner">

                <!-- Navigation menu -->
                <div class="mainnav__top-content scrollable-content pb-5">

                    <!-- Profile Widget -->
                    <div class="mainnav__profile mt-3 d-flex3">

                        <div class="mt-2 d-mn-max"></div>

                        <!-- Profile picture  -->
                        <div class="mininav-toggle text-center py-2">
                            <img class="mainnav__avatar img-md rounded-circle border" src="<?php echo "./assets/img/profile-photos/1.png" ?>" alt="Profile Picture">
                        </div>

                        <div class="mininav-content collapse d-mn-max">
                            <div class="d-grid">

                                <!-- User name and position -->
                                <button class="d-block btn shadow-none p-2" data-bs-toggle="collapse" data-bs-target="#usernav" aria-expanded="false" aria-controls="usernav">
                                    <span class="dropdown-toggle d-flex justify-content-center align-items-center">
                                    
                                         <h6 class="mb-0 me-3">admin</h6>
                                       
                                        <!-- <h1>Bienvenue, Vous etes deconnecté </h1>
                                        <p>Veuillez <a href="{{ url_for('auth.login') }}">vous connecter</a> pour accéder à votre profil.</p> -->
                                       
                                    </span>
                                  
                                    <!-- <small class="text-muted">Admin</small>
                                  
                                    <small class="text-muted">Gestionnaire de service </small>
                                   
                                    <small class="text-muted">Agent de support </small> -->
                                   
                                </button>

                                <!-- Collapsed user menu -->
                                <div id="usernav" class="nav flex-column collapse">
                                    <a href="/profil" class="nav-link">
                                        <i class="demo-pli-male fs-5 me-2"></i>
                                        <span class="ms-1">Profil</span>
                                    </a>
                                    <a href="/logout" class="nav-link">
                                        <i class="demo-pli-unlock fs-5 me-2"></i>
                                        <span class="ms-1">Deconnexion</span>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- End - Profile widget -->

                    <!-- Navigation Category -->
                    <div class="mainnav__categoriy py-3">
                        <h6 class="mainnav__caption mt-0 px-3 fw-bold">Navigation</h6>
                        <ul class="mainnav__menu nav flex-column">

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link active"><i class="demo-pli-home fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Menu principal </span>
                                </a>

                                <!-- Dashboard submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <!-- <li class="nav-item">
                                        <a href="/index" class="nav-link active">Tableau de Bord</a>
                                    </li> -->
                                    
                                    <li class="nav-item">
                                        <a href="/gestion_faq" class="nav-link">Liste des articles</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/gestion_faq" class="nav-link">Liste des catégories</a>
                                    </li>
                                  
                                </ul>
                                <!-- END : Dashboard submenu list -->

                            </li>
                           
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link  "><i class="demo-pli-gear fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Parametres </span>
                                </a>
                                <!-- Dashboard submenu list -->
                                <ul class="mininav-content nav collapse">
                                    
                                    <li class="nav-item">
                                        <a href="/settings" class="nav-link">Utilisateurs</a>
                                    </li>
                                    
                                </ul>
                                <!-- END : Dashboard submenu list -->
                            </li>
                          
                            <!-- END : Link with submenu -->


                        </ul>
                    </div>
                    <!-- END : Navigation Category -->

                    <!-- Components Category -->
                    
                    <!-- END : Components Category -->

                    <!-- More Category -->
                    
                    <!-- END : More Category -->

                    <!-- Extras Category -->
                    
                    <!-- END : Extras Category -->

                    <!-- Widget -->
                    
                    <!-- End - Profile widget -->

                </div>
                <!-- End - Navigation menu -->

                <!-- Bottom navigation menu -->
                
                <!-- End - Bottom navigation menu -->

            </div>
        </nav>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - MAIN NAVIGATION -->

        <!-- SIDEBAR -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - SIDEBAR -->

    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - PAGE CONTAINER -->

    <!-- SCROLL TO TOP BUTTON -->
    <div class="scroll-container">
        <a href="#root" class="scroll-page rounded-circle ratio ratio-1x1" aria-label="Scroll button"></a>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - SCROLL TO TOP BUTTON -->

    <!-- BOXED LAYOUT : BACKGROUND IMAGES CONTENT [ DEMO ] -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div id="_dm-boxedBgContent" class="_dm-boxbg offcanvas offcanvas-bottom" data-bs-backdrop="false" data-bs-scroll="true" tabindex="-1">
        <div class="offcanvas-body p-4">

            <!-- Content Header -->
            <div class="offcanvas-header border-bottom p-0 pb-3">
                <div>
                    <h4 class="offcanvas-title">Background Images</h4>
                    <span class="text-muted">Add an image to replace the solid background color</span>
                </div>
                <button type="button" class="btn-close btn-lg text-reset shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <!-- End - Content header -->

            <!-- Collection Of Images -->
            <div id="_dm-boxedBgContainer" class="row mt-3">

                <!-- Blurred Background Images -->
                <div class="col-lg-4">
                    <h5 class="mb-4">Blurred</h5>
                    <div class="_dm-boxbg__img-container d-flex flex-wrap">
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/blurred/thumbs/1.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/blurred/thumbs/2.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/blurred/thumbs/3.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/blurred/thumbs/4.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/blurred/thumbs/5.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/blurred/thumbs/6.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/blurred/thumbs/7.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/blurred/thumbs/8.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/blurred/thumbs/9.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/blurred/thumbs/10.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/blurred/thumbs/11.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/blurred/thumbs/12.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/blurred/thumbs/13.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/blurred/thumbs/14.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/blurred/thumbs/15.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/blurred/thumbs/16.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                    </div>
                </div>
                <!-- End - Blurred Background Images -->

                <!-- Polygon Background Images -->
                <div class="col-lg-4">
                    <h5 class="mb-4">Polygon &amp; Geometric</h5>
                    <div class="_dm-boxbg__img-container d-flex flex-wrap">
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/polygon/thumbs/1.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/polygon/thumbs/2.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/polygon/thumbs/3.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/polygon/thumbs/4.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/polygon/thumbs/5.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/polygon/thumbs/6.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/polygon/thumbs/7.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/polygon/thumbs/8.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/polygon/thumbs/9.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/polygon/thumbs/10.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/polygon/thumbs/11.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/polygon/thumbs/12.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/polygon/thumbs/13.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/polygon/thumbs/14.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/polygon/thumbs/15.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/polygon/thumbs/16.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                    </div>
                </div>
                <!-- End - Polygon Background Images -->

                <!-- Abstract Background Images -->
                <div class="col-lg-4">
                    <h5 class="mb-4">Abstract</h5>
                    <div class="_dm-boxbg__img-container d-flex flex-wrap">
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/abstract/thumbs/1.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/abstract/thumbs/2.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/abstract/thumbs/3.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/abstract/thumbs/4.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/abstract/thumbs/5.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/abstract/thumbs/6.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/abstract/thumbs/7.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/abstract/thumbs/8.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/abstract/thumbs/9.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/abstract/thumbs/10.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/abstract/thumbs/11.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/abstract/thumbs/12.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/abstract/thumbs/13.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/abstract/thumbs/14.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/abstract/thumbs/15.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="{{ url_for('static', filename='./assets/premium/boxed-bg/abstract/thumbs/16.jpg')}}" alt="Background Image" loading="lazy">
                        </a>
                    </div>
                </div>
                <!-- End - Abstract Background Images -->

            </div>
            <!-- End - Collection Of Images -->

        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - BOXED LAYOUT : BACKGROUND IMAGES CONTENT [ DEMO ] -->

    <!-- SETTINGS CONTAINER [ DEMO ] -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - SETTINGS CONTAINER [ DEMO ] -->

    <!-- OFFCANVAS [ DEMO ] -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div id="_dm-offcanvas" class="offcanvas" tabindex="-1">

        <!-- Offcanvas header -->
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Offcanvas Header</h5>
            <button type="button" class="btn-close btn-lg text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <!-- Offcanvas content -->
        <div class="offcanvas-body">
            <h5>Content Here</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente eos nihil earum aliquam quod in dolor, aspernatur obcaecati et at. Dicta, ipsum aut, fugit nam dolore porro non est totam sapiente animi recusandae obcaecati dolorum, rem ullam cumque. Illum quidem reiciendis autem neque excepturi odit est accusantium, facilis provident molestias, dicta obcaecati itaque ducimus fuga iure in distinctio voluptate nesciunt dignissimos rem error a. Expedita officiis nam dolore dolores ea. Soluta repellendus delectus culpa quo. Ea tenetur impedit error quod exercitationem ut ad provident quisquam omnis! Nostrum quasi ex delectus vero, facilis aut recusandae deleniti beatae. Qui velit commodi inventore.</p>
        </div>

    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - OFFCANVAS [ DEMO ] -->

    <!-- JAVASCRIPTS -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    
    <!-- Popper JS [ OPTIONAL ] -->
    <script src="<?php echo "./assets/vendors/popperjs/popper.min.js" ?>" defer></script>

    <!-- Bootstrap JS [ OPTIONAL ] -->
    <script src="<?php echo "./assets/vendors/bootstrap/bootstrap.min.js" ?>" defer></script>

    <!-- Nifty JS [ OPTIONAL ] -->
    <script src="<?php echo "./assets/js/nifty.js" ?>" defer></script>

    <!-- Nifty Settings [ DEMO ] -->
    <script src="<?php echo "./assets/js/demo-purpose-only.js" ?>" defer></script>

    <!-- Chart JS Scripts [ OPTIONAL ] -->
    <script src="<?php echo "./assets/vendors/chart.js/chart.min.js" ?>" defer></script>

    <!-- Initialize [ SAMPLE ] -->
    <script src="<?php echo "./assets/pages/dashboard-1.js" ?>" defer></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const editButtons = document.querySelectorAll('.btn-edit-user');

            editButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const modal = document.querySelector('#editModal');

                    // Remplir les champs du formulaire
                    //document.getElementById('user_id').value = this.dataset.id;
                    modal.querySelector('input[name="titre2"]').value = this.dataset.titre;
                    modal.querySelector('input[name="contenu2"]').value = this.dataset.contenu;
                    // modal.querySelector('input[name="categorie2"]').value = this.dataset.categorie;

                    // Mettre à jour l'action du formulaire (optionnel)
                    modal.querySelector('form').action = "?action=update&id=" + this.dataset.id;
                });
            });
        });
    </script>





</body>



</html>