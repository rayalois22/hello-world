<?php 
	echo '<div class="content-wrapper">';
	echo '<br /><br />';
	$employees = array(
		 "Manager" => array("fullname"=>"Almock Zilla", "address"=>"Mada", "age"=>14,
							"contact" =>array(
								"phone"=>"07012345678",
								"work"=>"07012345678",
								"home"=>"07012345678"
							),
							"email" => array(
								"work"=>"almok@strath.edu",
								"personal"=>"almock@gmail.com"
							)),
		 "Director" => array("fullname"=>"George Zilla", "address"=>"Mada", "age"=>14, 
								"contact" =>array(
								"phone"=>"07012345678",
								"work"=>"07012345678",
								"home"=>"07012345678"
							),
							"email" => array(
								"work"=>"george@strath.edu",
								"personal"=>"george@gmail.com"
							)),
		 "Secretary" => array("fullname"=>"Angela Zilla", "address"=>"Mada", "age"=>14, 
							"contact" =>array(
								"phone"=>"07012345678",
								"work"=>"07012345678",
								"home"=>"07012345678"
							),
							"email" => array(
								"work"=>"angela@strath.edu",
								"personal"=>"angela@gmail.com"
							))
	);
	print_r($employees);
	echo '</div>';
?>