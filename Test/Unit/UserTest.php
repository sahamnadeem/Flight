<?php
/**
 * 
 */
class UserTest extends \PHPUnit_Framework_TestCase
{
	public function testRouters()
	{	
		$router = new AltoRouter();
		$router->setBasePath('');
		$router->map('GET','/', 'HomeController@index', 'home');
		$match = $router->match();
		$this->assertNotEmpty($router);
		$this->assertNotEmpty($match);
	}

	public function testControllers()
	{	
		$bool = file_exists("./app/Middleware/index.php");
		$this->assertTrue($bool);
	}	
}