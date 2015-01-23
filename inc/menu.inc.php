<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/logo.png" id="logo"/></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li<?php echo ($pageCurrent == 'accueil') ? ' class="active"' : ''; ?>><a href="accueil.php">Accueil</a></li>
                <li<?php echo ($pageCurrent == 'integration') ? ' class="active"' : ''; ?>><a href="integration.php">Intégration</a></li>
                <li<?php echo ($pageCurrent == 'creation') ? ' class="active"' : ''; ?>><a href="creation.php">Création</a></li>
                <li<?php if($pageCurrent == 'hebdo-semaine' OR $pageCurrent == 'affaires-en-cours-date' OR $pageCurrent == 'affaires-en-cours-heures' OR $pageCurrent == 'personnalise'){echo ' class="active"';}?>>
                    <a href="#" class="dropdown-toggle "   data-toggle="dropdown">Consultation<b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li<?php echo ($pageCurrent == 'hebdo-semaine') ? ' class="active"' : ''; ?>><a href="hebdo-semaine.php">Fiche Hebdo par semaine</a></li>
                        <li class="divider"></li>
                        <li<?php echo ($pageCurrent == 'affaires-en-cours-date') ? ' class="active"' : ''; ?>><a href="affaires-en-cours-date.php">Affaires en cours (Par dates)</a></li>
                        <li<?php echo ($pageCurrent == 'affaires-en-cours-heures') ? ' class="active"' : ''; ?>><a href="affaires-en-cours-heures.php">Affaire en cours (Par type d'heures)</a></li>
                        <li class="divider"></li>
                        <li<?php echo ($pageCurrent == 'personnalise') ? ' class="active"' : ''; ?>><a href="personnalise.php">Personnalisé</a></li>
                    </ul>
                </li>
                <li <?php if($pageCurrent == 'clotures' OR $pageCurrent == 'suppressions' OR $pageCurrent == 'modifications'){echo 'class="active"';}?> >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestion<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li<?php echo ($pageCurrent == 'clotures') ? ' class="active"' : ''; ?>><a href="clotures.php">Clotures</a></li>
                        <li<?php echo ($pageCurrent == 'suppressions') ? ' class="active"' : ''; ?>><a href="suppressions.php">Suppressions</a></li>
                        <li<?php echo ($pageCurrent == 'modifications') ? ' class="active"' : ''; ?>><a href="modifications.php">Modifications</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>