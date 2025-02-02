<header>
	<div class="top-nav">
		<div>
			<nav class="navbar navbar-expand-lg navbar-light">
				<a href="index.php"><img src="images/logo1.png" class="logo-img"></a>
				<a class="navbar-brand brand-text" href="index.php">Caffeine Rush</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center pr-md-4" id="navbarSupportedContent">

					<ul class="navbar-nav nav-margin">
						<li class="nav-item">
							<a class="nav-link <?php if($_SESSION['currentPage'] == 1) { echo 'active';} ?>" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?php if($_SESSION['currentPage'] == 2) { echo 'active';} ?>" href="gallery.php">Menu</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?php if($_SESSION['currentPage'] == 3) { echo 'active';} ?>" href="services.php">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?php if($_SESSION['currentPage'] == 4) { echo 'active';} ?>" href="contact.php">Contact Us</a>
						</li>
						<li class="nav-item lnkmb">
							<a class="nav-link <?php if($_SESSION['currentPage'] == 5) { echo 'active';} ?>" href="review.php">Reviews</a>
						</li>
						<li class="nav-item lnkmb">
							<a class="nav-link <?php if($_SESSION['currentPage'] == 6) { echo 'active';} ?>" href="log.php">User</a>
						</li>
						<li class="nav-item lnkmb">
							<a class="nav-link <?php if($_SESSION['currentPage'] == 7) { echo 'active';} ?>" href="cartlog.php">Cart</a>
						</li>
						<li class="nav-item lnkmb">
							<a class="nav-link" href="chnglog.php">Change Password</a>
						</li>
						<li class="nav-item lnkmb">
							<a class="nav-link" href="logout.php">Logout</a>
						</li>
					</ul>

					<ul class="navbar-nav  navbar-right">
						<li class="nav-item rotate">
							<a class="nav-link r1 <?php if($_SESSION['currentPage'] == 5) { echo 'active';} ?>" href="review.php"><span class="glyphicon glyphicon-th-list"></span></a>
						</li>
						<li class="nav-item rotate">
							<a class="nav-link r1 <?php if($_SESSION['currentPage'] == 6) { echo 'active';} ?>" href="log.php"><span class="glyphicon glyphicon-user"></span></a>
						</li>
						<li class="nav-item rotate">
							<a class="nav-link r1 <?php if($_SESSION['currentPage'] == 7) { echo 'active';} ?>" href="cartlog.php"><span class="glyphicon glyphicon-shopping-cart"></span></a>
						</li>
						<li class="nav-item dropdown rotate">
							<a class="nav-link r1" href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></a>
							<ul class="dropdown-menu">
						      <li><a href="chnglog.php" class="r2">Change Password</a></li><hr class="drop-hr">
						      <li><a href="logout.php" class="r2"><span class="glyphicon glyphicon-off"></span> logout</a></li>
						    </ul>
						</li>
						
					</ul>
				</div>

			</nav>
		</div>
	</div>
</header>