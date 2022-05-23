<?php require 'php/bd_news.php'; ?>
<header>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="navbar-header pull-left">
						<a class="navbar-brand" href="./index.php"><img src="images/logo-lite.png" class="img-responsive" alt=""/></a>
					</div>
				</div>
	
				<div class="col-md-8">
					<div class="lang-search pull-right">
						<div class="site-lang">RU</div>
						<div class="site-search"><img src="images/icon/search.png" alt=""/></div>
					</div>
	
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="./index.php">Главная</a></li>
							<li class="dropdown">
								<a href="./low_roar-radio-album.php">Альбомы</a>
								<ul class="dropdown-menu">
									<li><a href="./low_roar-radio-album.php">Все альбомы</a></li>
									<li><a href="./low_roar-radio-single-album.php">Альбом</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="./low_roar-radio-news.php">Новости</a>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>