<?php

date_default_timezone_set('Europe/Berlin');

$bgimagepath = "";

$stundenzahl = date("G");
$monatszahl = date("m");
$tageszahl = date("d");

if (($monatszahl == 12) && (($tageszahl == 24 && $stundenzahl > 18) || ($tageszahl == 25) || ($tageszahl == 26))) {
	$bgimagepath = "ts3banner_example.png";  # "ts3banner_christmas.png";
}
elseif ((($monatszahl == 12) && (($tageszahl == 31) && ($stundenzahl > 18))) || (($monatszahl == 01) && ($tageszahl == 01))) {
	$bgimagepath = "ts3banner_example.png";  # "ts3banner_newyear.png";
}
else {

	$rdm = 0;


	if ($stundenzahl >= 21 || $stundenzahl <= 5) {

		$rdm = rand(1,5);

		switch($rdm) {
			case 1:
				$bgimagepath = "ts3banner_example.png";  # "ts3banner_concert.png";
				break;
			case 2:
				$bgimagepath = "ts3banner_example.png";  # "ts3banner_cubes.png";
				break;
			case 3:
				$bgimagepath = "ts3banner_example.png";  # "ts3banner_neon.png";
				break;
			case 4:
				$bgimagepath = "ts3banner_example.png";  # "ts3banner_space.png";
				break;
			case 5:
				$bgimagepath = "ts3banner_example.png";  # "ts3banner_nightCity.png";
				break;
		}

	}
	elseif ($stundenzahl >= 6 && $stundenzahl <= 9) {

		$rdm = rand(1,4);

		switch($rdm) {
			case 1:
				$bgimagepath = "ts3banner_example.png";  # "ts3banner_coffee.png";
				break;
			case 2:
				$bgimagepath = "ts3banner_example.png";  # "ts3banner_mountainTrees.png";
				break;
			case 3:
				$bgimagepath = "ts3banner_example.png";  # "ts3banner_sunrise.png";
				break;
			case 4:
				$bgimagepath = "ts3banner_example.png";  # "ts3banner_coffee2.png";
				break;
		}
	}
	else {

		switch ($monatszahl) {
			case 1: {
				$rdm = rand(1,4);
				switch($rdm) {
					case 1:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_winterMountains.png";
						break;
					case 2:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_winterMountains2.png";
						break;
					case 3:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_winterMountains3.png";
						break;
					case 4:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_winterTrees.png";
						break;
				}
				break;
			}

			case 2: {
				$rdm = rand(1,4);
				switch($rdm) {
					case 1:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_winterMountains.png";
						break;
					case 2:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_winterMountains2.png";
						break;
					case 3:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_winterMountains3.png";
						break;
					case 4:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_winterTrees.png";
						break;
				}
				break;
			}

			case 3: {
				$rdm = rand(1,3);
				switch($rdm) {
					case 1:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_balloon.png";
						break;
					case 2:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_fliederwald.png";
						break;
					case 3:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_stone.png";
						break;
				}
				break;
			}

			case 4: {
				$rdm = rand(1,5);
				switch($rdm) {
					case 1:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_hopfen.png";
						break;
					case 2:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_fliederwald.png";
						break;
					case 3:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_dirtroad.png";
						break;
					case 4:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_sky.png";
						break;
					case 5:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_stone.png";
						break;
				}
				break;
			}

			case 5: {
				$rdm = rand(1,5);
				switch($rdm) {
					case 1:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_balloon.png";
						break;
					case 2:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_city.png";
						break;
					case 3:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_hopfen.png";
						break;
					case 4:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_dirtroad.png";
						break;
					case 5:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_sky.png";
						break;
				}
				break;
			}

			case 6: {
				$rdm = rand(1,6);
				switch($rdm) {
					case 1:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_tree.png";
						break;
					case 2:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_summer.png";
						break;
					case 3:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_summer2.png";
						break;
					case 4:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_summer3.png";
						break;
					case 5:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_summer4.png";
						break;
					case 6:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_city.png";
						break;
				}
				break;
			}

			case 7: {
				$rdm = rand(1,6);
				switch($rdm) {
					case 1:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_tree.png";
						break;
					case 2:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_summer.png";
						break;
					case 3:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_summer2.png";
						break;
					case 4:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_summer3.png";
						break;
					case 5:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_summer4.png";
						break;
					case 6:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_landschaft.png";
						break;
				}
				break;
			}

			case 8: {
				$rdm = rand(1,4);
				switch($rdm) {
					case 1:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_autumn3.png";
						break;
					case 2:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_berry.png";
						break;
					case 3:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_landschaft.png";
						break;
					case 4:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_balloon.png";
						break;
				}
				break;
			}

			case 9: {
				$rdm = rand(1,4);
				switch($rdm) {
					case 1:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_autumn3.png";
						break;
					case 2:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_berry.png";
						break;
					case 3:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_landschaft.png";
						break;
					case 4:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_balloon.png";
						break;
				}
				break;
			}

			case 10: {
				$rdm = rand(1,3);
				switch($rdm) {
					case 1:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_autumn.png";
						break;
					case 2:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_autumn2.png";
						break;
					case 3:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_redTrees.png";
						break;
				}
				break;
			}

			case 11: {
				$rdm = rand(1,3);
				switch($rdm) {
					case 1:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_autumn.png";
						break;
					case 2:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_autumn2.png";
						break;
					case 3:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_redTrees.png";
						break;
				}
				break;
			}


			case 12: {
				$rdm = rand(1,4);
				switch($rdm) {
					case 1:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_winterMountains.png";
						break;
					case 2:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_winterMountains2.png";
						break;
					case 3:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_winterMountains3.png";
						break;
					case 4:
						$bgimagepath = "ts3banner_example.png";  # "ts3banner_winterTrees.png";
						break;
				}
				break;
			}

		}
	}
}

return $bgimagepath;

?>