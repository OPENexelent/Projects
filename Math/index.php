<?php
class Template 
{
	public function __construct(){}
	
	public function head($titel){
		echo '<!doctype html>' . PHP_EOL;
		echo '<html>'          . PHP_EOL;
		echo '<head>'          . PHP_EOL;
		echo '<title>' . $titel . '</title>'. PHP_EOL;
		echo '</head>' . PHP_EOL;
	}
	
	public function body(){
		echo '<body>' . PHP_EOL;
		echo '<a href="breuken.php">Breuken</a>';
		echo '</body>';
		echo '</html>';
	}
}

$oPagina = new Template();
$oPagina->head('Testa');
$oPagina->body();