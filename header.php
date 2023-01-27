<?php
?>

<header id="main-header">
	<div class="dropdown-menu">
		<button id="btn-menu" onclick="toggleMenu();">
			<img class="css-icon-light" src="img/bx-dots-horizontal-rounded.svg" alt="Menu"/>
		</button>
		<div class="dropdown-content">
			<a class="css-link-light" href="login.php">Entrar</a>
			<a class="css-link-light" href="register.php">Cadastrar-se</a>
		</div>
	</div>

	<div class="logo-area">
		<img src="img/bx-leaf.svg" alt="Logo.">
		<strong>Plantê</strong>
		<a href="index.php"></a>
	</div>

	<div class="main-options">
		<a class="css-link-light" href="explore.php">Explorar</a>
		<a class="css-link-light" href="cart.php">Carrinho</a>
	</div>

	<div class="search-area">
		<form id="form-search">
			<input name="search-pattern" id="search-field" type="text" placeholder="Pesquisar"/>
			<button type="submit" onclick="">
				<img class="css-icon-light" src="img/bx-search.svg" alt="Pesquisar"/>
			</button>
		</form>
	</div>

	<div class="user-options">
		<a class="css-link-light" href="login.php">Entrar</a>
		<a class="css-link-light" href="register.php">Cadastrar-se</a>
	</div>
</header>
<script src="js/jquery-3.6.3.min.js"></script>
<script src="js/behavior.js"></script>
