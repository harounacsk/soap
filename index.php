<?php
/*
 * $wsdl = "http://localhost:8086/?wsdl";
 *
 */
$wsdl = null;
$options = [
	"location" => "http://localhost/projets/soap/service.php?wsdl",
	"uri" => "http://localhost/projets/soap/service.php?wsdl",
	"soap_version" => SOAP_1_2,
	"cache_wsdl" => WSDL_CACHE_NONE
];


$soapClient = new SoapClient($wsdl, $options);

var_dump($soapClient->getArticleByName("cahier"));
echo "<hr>";
echo "<pre>";
var_dump($soapClient->getAll());
echo "</pre>";

?>