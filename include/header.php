<!doctype html>
<html ng-app>
<head>
	<title>Tiny Blog - Simple Blogging Framework</title>
	<link rel="stylesheet" href="../css/main.css" />
</head>
<body>
<header>
	<h1>Tiny Blog</h1>
	<div class="navigation">
		<?php
			$links = array(
				"Home" => "index.php",
				"Register" => "register/register.php"
			);
		?>
		<ul>
			<?php
				foreach($links as $key => $val) {
			?>
				<li><a href="<?php echo $key; ?></li>
			<?php
				}
			?>
		</ul>
	</div>
	
	
	<!--
	<div class="navigation"
		ng-init="links=[
			{name:'Home', loc:'../index.php'},
			{name:'Register', loc:'../register/register.php'}
		]">
		<ul>
			<li ng-repeat="l in links"><a href="{{ l.loc }}">{{ l.name }}</a></li>
		</ul>
	</div>
	-->
</header>
