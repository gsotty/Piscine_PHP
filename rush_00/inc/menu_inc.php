

<!-- **************************************************************************************** -->
<!--  										MENU PRINCIPAL									  -->
<!-- **************************************************************************************** -->

					<!-- Logo -->
					<p id="logo">
						<img src="<?php echo RACINE_SITE ?>image/logo.png" alt="Logo de quai des vaps, 3 e-cigarettes, noir et rouge" />
					</p>

					<div id="header_droite"><!-- début header_droite -->

						<nav id="main-menu"><!-- début menu -->
									<div id="nav_image">
									<a href="<?php echo RACINE_SITE ?>index.php"><img src="<?php echo RACINE_SITE ?>image/icone_home.png" alt="Icone maison home"
									onmouseover="this.src='<?php echo RACINE_SITE ?>image/icone_home_blanc.png'"
									onmouseout="this.src='<?php echo RACINE_SITE ?>image/icone_home.png'"/></a>
									</div>
									<a href="<?php echo RACINE_SITE ?>boutique.php?cat=E-cigarettes">E-cigarettes</a>
									<a href="<?php echo RACINE_SITE ?>boutique.php?cat=E-liquides">E-liquides</a>
									<a href="<?php echo RACINE_SITE ?>boutique.php?cat=Accessoires">Accessoires</a>
									<a href="<?php echo RACINE_SITE ?>promotions.php">Promotions</a>
						</nav><!-- fin menu -->
						<div id="recherche"><!-- début recherche -->




						<form id="recherche" method="post" action="<?php echo RACINE_SITE ?>recherche.php">
								<div id="label">
									<label><input type="submit" name="envoi_recherche" value="Rechercher" alt="Rechercher"/></label>
								</div>
								<input type="text" name="recherche" placeholder="  Recherche..."/>
						</form>



						</div><!-- fin recherche -->

					</div><!-- fin header_droite -->

				</div><!-- fin header_box -->

			</header><!-- fin header -->

<!-- **************************************************************************************** -->
<!--  										PRINCIPALE										  -->
<!-- **************************************************************************************** -->


			<div id="principale">





	<!-- Barre de recherche
    <div id="search_box">
	 <form action="#" method="get">
        <input type="text" value="Enter keyword here..." name="q" size="10" id="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
        <input type="submit" name="Search" value="" alt="Search" id="searchbutton" />
      </form>
    </div>
	<!-- FIN Barre de recherche -->
