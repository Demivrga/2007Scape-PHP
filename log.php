<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description" content="OSRS Username Checker, OSRS Highscores, OSRS Calculator, 2007scape Tools, Development, Programs, and features.">
  <meta name="keywords" content="Username, Checker, Username Checker, Highscores, OSRS, 2007scape, Oldschool, Old, School, Runescape, Scape, Easy, Programs, Calculator, Calculators, Rune, Quests, MMO, Tool, Tools">
	<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	
	<!-- Home Styles -->
	<script src="/js/usernamechecker.js"></script>
	<link rel="stylesheet" href="/css/home-custom.css">
	<link rel="stylesheet" href="/css/mobile.css">

    <title>2007Scape - Username Log</title>
</head>

<body>
	<div class="wrapper-07">
	<div class="content-07">

		<nav class="navbar navbar-toggleable-md navbar-light bg-faded nav-07">
			<button class="navbar-toggler navbar-toggler-center" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="/">Home</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="username">Username Checker</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="highscores">Highscores</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Calculators</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Coming Soon</a>
				</li>
				</ul>
			</div>
		</nav>
	<div class="mobile-07" style="margin-top: 4%;">
		<?php
		$names=file('assets/names1.log');
		foreach($names as $name) {
			list($checked, $status, $date) = split('[|]', $name);
			if ( $status === 'OK' ){
				echo "<p style='margin-top:-3%;'>{$checked} was available at {$date}</p>";
			}
			if ( $status === 'NOK' ){
				echo "<p style='margin-top:-3%;'>{$checked} was NOT available at {$date}</p>";
			}
			if ( $status === 'RNOK' ){
				echo "<p style='margin-top:-3%;'>{$checked} was MAYBE available at {$date}</p>";
			}
			if ( $status === 'NONAME' ){
				echo "<p style='margin-top:-3%;'>{$checked} was an INVALID NAME at {$date}</p>";
			}
		}
		?>
		<form name="UsernameLog" action="username" class="navbar-form form-07" role="search">
				<button id="usernamesubmit" type="submit" class="btn btn-default">Back</button>
		</form>
	</div>
	</div>
		<p style="color: #525252; margin-top: 2%; text-align: center;">© Demonly - Feel free to message me in-game</p>
	</div>
	
</body>
</html>
