<?php
include("simple_html_dom.php");

abstract class Ecommerce{
	public $hostURL;
	public function __construct(){
	}

	abstract public function search($keyword, $at);
}