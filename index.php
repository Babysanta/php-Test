<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>VPN</title>
	</head>

	<body>
		<form id="info" name="info" method="post" action="./start.php">
			<fieldset>
				<legend>VPN Infos:</legend>
				<br>Username: <br>
				<input id="user" type="text" name="user"><br><br>
				<input id="select" type="radio" name="select" value="create"> Create<br>
				<input id="select" type="radio" name="select" value="revoke"> Revoke<br>
				<br>
				<input type="submit" name="Submit" value="Submit">
			</fieldset>
		</form>
	</body>
</html>
