<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">Pacific<span>Travel Agency</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item<?php if( isset($_GET['view']) && $_GET['view'] =='home' || !isset($_GET['view'])) echo ' active' ?>"><a href="?view=home" class="nav-link">Home</a></li>
					<li class="nav-item <?php if( isset($_GET['view']) && $_GET['view'] =='about') echo ' active' ?>"><a href="?view=about" class="nav-link">About</a></li>
					
					<li class="nav-item<?php if( isset($_GET['view']) && $_GET['view'] =='ticker') echo ' active' ?>"><a href="?view=ticker" class="nav-link">Ticker</a></li>
					
					<li class="nav-item <?php if( isset($_GET['view']) && $_GET['view'] =='blogs') echo ' active' ?>"><a href="?view=blogs" class="nav-link">Blog</a></li>
					<li class="nav-item <?php if( isset($_GET['view']) && $_GET['view'] =='contact') echo ' active' ?>"><a href="?view=contact" class="nav-link">Contact</a></li>
					<li class="nav-item has-dropdown"><a href="?view=login" class="nav-link"><i class="bi bi-person-circle"></i></a>
                        <?php if(isset($_SESSION['user'])){
                            ?>
                            <ul class="dropdown">
                                <li><a href="?view=profile">Profile</a></li>
                                <li ><a class="logout" href="?view=log_out">Logout</a></li>
                            </ul>
                            
                            <?php
                        } ?>
                      
                     </li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->