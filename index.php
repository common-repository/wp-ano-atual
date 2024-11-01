<?php
/*
* Plugin name: WP Ano Atual 
* Description: O plugin ideal para adicionar rapidamente o Ano atual no rodapé do seu site via shortcode, muito simples Exemplo: [wp-ano-atual inicio='2013']  Basta ativar e colocar o shortcode onde desejar.
* Version: 1.2
* Author: Aquiles Maior
* Author URI: https://youtube.com/aquilesmaior
*/

// if accessed directly, exit
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require dirname(__FILE__).'/settings.php';
require dirname(__FILE__).'/functions.php';


