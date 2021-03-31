<?php 

// require_once 'produk/infoProduk.php';
// require_once 'produk/Produk.php';
// require_once 'produk/Komik.php';
// require_once 'produk/CetakInfoProduk.php';
// require_once 'produk/Game.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';

spl_autoload_register(function( $class ){
	// App\produk\User = ['App', 'produk', 'User']
	$class = explode('\\', $class);
	$class = end($class);
	require_once 'produk/' . $class . '.php';
});

spl_autoload_register(function( $class ){
	$class = explode('\\', $class);
	$class = end($class);
	require_once 'Service/' . $class . '.php';
});