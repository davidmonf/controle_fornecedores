<header class="header black-bg">
	<div class="sidebar-toggle-box">
		<div class="fa fa-bars tooltips"
		     data-placement="right"
		     data-original-title="Toggle Navigation"></div>
	</div>
	<!--logo start-->
	<a href="#"
	   class="logo">
		<b>Controle de Faturamento</b>
	</a>
	<!--logo end-->
	<div class="nav notify-row"
	     id="top_menu">
		<!--  notification start -->
		<ul class="nav top-menu">
			<!-- settings start -->
			<li class="dropdown">
				<a onclick="print()">
					<i class="fa fa-print"></i>
				</a>
			</li>
			
			
			
			<!-- settings end -->
			<!-- inbox dropdown start-->
			<li id="header_inbox_bar"
			    class="dropdown">
				<a data-toggle="dropdown"
				   class="dropdown-toggle"
				   href="#">
					<i class="fa fa-envelope-o"></i>
					<span class="badge bg-theme">1</span>
				</a>
				<ul class="dropdown-menu extended inbox">
					<div class="notify-arrow notify-arrow-green"></div>
					<li>
						<p class="green">Você tem 1 mensagem</p>
					</li>
					<li>
						<a href="#">
							<span>Mensagem 1</span>
						</a>
					</li>
					<li>
						<a href="#">Ver todas as mensagens</a>
					</li>
				</ul>
			</li>
			<!-- inbox dropdown end -->
		</ul>
		<!--  notification end -->
	</div>
	<div class="top-menu">
		<ul class="nav pull-right top-menu">
			<br>
			<li>
				<a class="logout"
				   href=".\logout.php">Logout
				</a>
			</li>
		</ul>
	</div>
</header>

