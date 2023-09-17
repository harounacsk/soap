<?php
class Article
{

	private $articles = [
		["id" => 1, "name" => "cahier", "price" => 16],
		["id" => 2, "name" => "livre", "price" => 33.85],
		["id" => 3, "name" => "ardoise", "price" => 8.75],
		["id" => 4, "name" => "trousseau", "price" => 13.95],
		["id" => 5, "name" => "crayon", "price" => 2.78],
		["id" => 6, "name" => "sac", "price" => 54],
		["id" => 7, "name" => "crayon Criterium", "price" => 9.99],

	];
	public function __construct()
	{

	}


	public function getAll()
	{
		return $this->articles;
	}

	public function getArticleByName(string $name)
	{
		foreach ($this->getAll() as $article) {
			if ($article["name"] == strtolower($name)) {
				return $article;
			}
		}
	}


}

$class = "Article";
$uri = "http://localhost/projets/soap/service.php";
$wsdl = NULL;

// initialize SOAP Server
$server = new SoapServer($wsdl, [
	"uri" => $uri,
	"encoding" => "UTF-8", // Zeichensatz
	'soap_version' => SOAP_1_2 // SOAP Version
]);

$server->setClass($class);

// start handling requests
$server->handle();
?>