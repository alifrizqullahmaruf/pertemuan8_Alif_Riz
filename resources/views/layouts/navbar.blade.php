<header style="background-color: #2a2a2a">
	<a href="#" class="logo"><span>ALIF</span> RIZM</a>
	<ul class="navlist">
		<li><a href="#home" class="active">Home</a></li>
		<li><a href="#about" class="about">About Me</a></li>
		<li><a href="#service" class="services">Services</a></li>
		<li><a href="#portfolio" class="portfolio">Portfolio</a></li>
		<li><a href="#contact" class="contact">Contact Me</a></li>
	</ul>
	<div class="bx bx-menu" id="menu-icon"></div>

	<form class="d-flex" action="{{ route('logout') }}" method="POST">
		@csrf
		<button class="btn btn_chat" type="submit">LOGOUT</button>
	</form>
</header>