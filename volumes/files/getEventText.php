<?php
setlocale(LC_ALL, 'de_DE');


$dbconnection = mysqli_connect('database','root','rootpassword','serverbanner');

if ($dbconnection->connect_error) {
	die("Keine DB-Verbindung | ".$dbconnection->connect_error);
	return "";
}

$sql = "SELECT `name`, `date` FROM `events` WHERE DATE >= CURRENT_TIMESTAMP AND `deleted` = 0 ORDER BY `date` ASC LIMIT 1";

$ret_name = "";
$ret_date = "";

function getWeekdayGerman($weekday):string {
	$ret = "";
	switch($weekday) {
		case "Mon":
			$ret = "Montag";
			break;
		case "Tue":
			$ret = "Dienstag";
			break;
		case "Wed":
			$ret = "Mittwoch";
			break;
		case "Thu":
			$ret = "Donnerstag";
			break;
		case "Fri":
			$ret = "Freitag";
			break;
		case "Sat":
			$ret = "Samstag";
			break;
		case "Sun":
			$ret = "Sonntag";
			break;
	}
	return $ret;
}

function getMonthGerman($m):string {
	$ret = "leererMonat";
	switch($m) {
		case "01":
			$ret = "Jan.";
			break;
		case "02":
			$ret = "Feb.";
			break;
		case "03":
			$ret = "März";
			break;
		case "04":
			$ret = "April";
			break;
		case "05":
			$ret = "Mai";
			break;
		case "06":
			$ret = "Juni";
			break;
		case "07":
			$ret = "Juli";
			break;
		case "08":
			$ret = "Aug.";
			break;
		case "09":
			$ret = "Sept.";
			break;
		case "10":
			$ret = "Okt.";
			break;
		case "11":
			$ret = "Nov.";
			break;
		case "12":
			$ret = "Dez.";
			break;
	}
	return $ret;
}


if ($result = $dbconnection -> query($sql)) {
  if ($obj = $result -> fetch_object()) {
    $ret_name = $obj->name;
	$ret_date = $obj->date;
	$result -> free_result();
	mysqli_close($dbconnection);
	$strdate = new DateTime($ret_date);

	$dtnow = new DateTime("now");
	$diff = date_diff($strdate,$dtnow);
	if ($diff->format("%a") <= 21) {
		return ($ret_name."  |  ".(getWeekdayGerman(($strdate->format("D")))).", ".($strdate->format("d")).". ".(getMonthGerman($strdate->format("m")))." @ ".($strdate->format("H:i"))." Uhr");
	}
	else {
		return "";
	}
  }
  else {
	mysqli_close($dbconnection);
	return "";
  }
}
mysqli_close($dbconnection);
return "";
?>
