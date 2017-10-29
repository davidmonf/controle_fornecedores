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
				<a href="../test/dashboard_simpress.php">
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
							<a href="../test/dashboard_simpress.php">
								<i class="fa fa-dashboard"></i>
								<span>Dashboard</span>
							</a>
							<br>
							<a href="../test/input_simpress.php">
								<i class="fa fa-dashboard"></i>
								<span>Cadastro</span>
							</a>
							<br>
							<a href="../test/busca.php">
								<i class="fa fa-dashboard"></i>
								<span>Busca</span>
							</a>
							<br>
							<a href="../test/upload.php">
								<i class="fa fa-dashboard"></i>
								<span>Enviar</span>
							</a>
							<br>
							<a href="../test/rateio.php">
								<i class="fa fa-dashboard"></i>
								<span>Rateio</span>
							</a>
						</ul>
					</div>
				</div>
				</li>
			</li>
		</ul>
		<!-- sidebar menu end-->
	</div>
</aside>
