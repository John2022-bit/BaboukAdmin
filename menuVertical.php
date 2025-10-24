
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon clasS with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Tous mes cours
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right"><?= count($cours) ?></span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <?php if (!empty($message_erreur)): ?>
                <!-- Afficher l'erreur si la connexion a échoué -->
                <li class="nav-item">
                    <a href="#" class="nav-link text-danger">
                        <i class="nav-icon fas fa-exclamation-triangle"></i>
                        <p><?= $message_erreur ?></p>
                    </a>
                </li>
                <?php elseif (empty($cours)): ?>
                <!-- Message si aucun cours n'est trouvé -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>Aucun cours publié.</p>
                    </a>
                </li>
                 <?php else: ?>
                <!-- Boucle pour afficher chaque cours -->
                <?php foreach ($cours as $c): ?>
                <li class="nav-item">
                  <a href="layout/top-nav.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p><?= htmlspecialchars($c['titre']) ?></p>
                  </a>
                </li>
                <?php endforeach; ?>
              <?php endif; ?>
              </ul>
            </li>
            <li class="nav-item">
              <a href="pages/agenda.html" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Mon Agenda
                </p>
              </a>
            </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Formulaire
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/creer_cours.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Création de cours</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/projet_form.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Création d'un projet</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/tache_form.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Création d'une tâche</p>
                </a>
              </li>
            </ul>
          </li>
          </ul>
        </nav>

