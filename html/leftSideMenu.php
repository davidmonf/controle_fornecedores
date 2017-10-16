<aside>
	<div id="sidebar"
	     class="nav-collapse ">
		<!-- sidebar menu start-->
		<ul class="sidebar-menu"
		    id="nav-accordion">
			
			<p class="centered">
				<a href="#">
					<img src=""
					     class="img-circle"
					     width="60">
				</a>
			</p>
			<h5 class="text-center">Usuário <?php echo $_SESSION['username'] ?></h5>
			
			<li class="mt">
				<a href="../test/dashboard.php">
					<i class="fa fa-dashboard"></i>
					<span>Dashboard</span>
				</a>
				<a href="../test/input_as.php">
					<i class="fa fa-desktop"></i>
					<span>AS</span>
				</a>
				<a href="../test/input_assistencia.php">
					<i class="fa fa-wrench"></i>
					<span>Assistência Técnica</span>
				</a>
				<li class="panel panel-default" id="dropdown">
				<a data-toggle="collapse" href="#dropdown-simpress">
					<i class="fa fa-print"></i>
					<span>Simpress</span>
				</a>
				<div id="dropdown-simpress" class="panel-collpase collapse">
					<div class="panel-body">
						<ul class="nav navbar-nav">
							<li><a href="../test/input_simpress.php">Cadastro</a></li>
							<li><a href="../test/busca.php">Busca</a></li>
						</ul>
					</div>
				</div>
				</li>
			</li>
		</ul>
		<!-- sidebar menu end-->
	</div>
</aside>
