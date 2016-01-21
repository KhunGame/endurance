<?php
return array(
	"routes" => array(
		"default_controller" => "home",
		"default_method" => "index",
		"controller_symbol" => "c",
		"method_symbol" => "m" 
	),

	"url" => array(
		"basepath" => "",
	),

	"configuration" => array(
		"querystring_mode" => FALSE
	),

	"route_presets" => array(
		"testmode" => "home/index",
		"yedsod" => "home/viewtest",
		"fuckthegirl" => "home/testagain"
	),

	// "autoload" => array(
	// 	"models/*",
	// 	"controllers/*",
	// ),

	"databases" => array(
		"default" => array(
			"server"=>"localhost",
			"port"=>"",
			"username"=>"root",
			"password"=>"secret",
			"database_name"=>"endurance"
		),
	)
);
?>