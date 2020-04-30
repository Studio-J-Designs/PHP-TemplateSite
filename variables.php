<?php
$title = "Options";
$description ="The options of coffes avaliable";


require("templates/header.php");
//require("templates/nav.php");

// for ($x = 1; $x <= 3; $x++) {
//           echo "<div class='row coffee'>
// 						<div class='col'>
// 							<img src='images/options/coffee$x.png' alt='Coffee' class='img-thumbnail' />
// 						</div>
// 						<div class='col'>
// 							<p > Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
// 							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
// 							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
// 							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
// 							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
// 							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
// 							</p>
// 						</div>
// 					</div>";
//       }

?>



 <main class="px-5">
	 <br><br>

	 <?php

	 for ($x = 1; $x <= 3; $x++) {

		  $option = array(
				"The short black is the foundation of any espresso drink. The term 'short' refers to the fact that this is simply an espresso shot, no extra water is added apart from what is used to brew the coffee. Black of course comes from the colour of the drink due to the fact that there is no milk added.",
				"A French press, also known as a cafetière, cafetière à piston, caffettiera a stantuffo, press pot, coffee press, or coffee plunger, is a coffee brewing device.",
				"A long black is usually served in a taller glass or mug, this is based on a 30ml shot of espresso. Hot water is then added to this and served black. The term 'long' here refers to the fact that the volume has been increased by adding hot water. For larger drinks a double shot of espresso may be used to maintain the ratio of water to coffee.");

	           echo "<div class='row coffee'>
	 						<div class='col'>
	 							<img src='images/options/coffee$x.png' alt='Coffee' class='img-thumbnail' />
	 						</div>
	 						<div class='col'>
	 							<p>
								"	. $option[($x - 1)] . "
	 							</p>
	 						</div>
	 					</div><br>";
	       }

	 ?>


	<!-- <div class="row coffee">
		<div class="col">
			<img src="images/options/coffee1.png" alt="Coffee" class="img-thumbnail" />
		</div>
		<div class="col">
			<p > Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
	</div>

	<div class="row coffee">
		<div class="col">
			<img src="images/options/coffee2.png" alt="Coffee" class="img-thumbnail" />
		</div>
		<div class="col">
			<p > Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
	</div>

	<div class="row coffee">
		<div class="col">
			<img src="images/options/coffee3.png" alt="Coffee" class="img-thumbnail" />
		</div>
		<div class="col">
			<p > Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
	</div> -->

</main>


<?php
require("templates/footer.php");

?>
