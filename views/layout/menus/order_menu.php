<?php
	echo Menu::item([
		"name"=>"Order",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"orders/create","text"=>"Create Order","icon"=>"far fa-circle nav-icon"],
			["route"=>"orders","text"=>"Manage Order","icon"=>"far fa-circle nav-icon"],
		]
	]);
