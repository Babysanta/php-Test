<?php
echo "Testscript <br>";
$username=null;
$selected=null;
$tool_pth='C:\iTaurus\Software\OVPNScript\webrun.exe';
//$tool_pth='C:\iTaurus\Software\OVPNScript\openvpnscript.exe';
$tool_cmd=null;

$errorcode=0;

if ($errorcode == "0") {
	check_input();
}

if ($errorcode == "0") {
	start_tool();
}

function check_input() {
	global $username, $selected, $errorcode;

	if ($_POST['user'] != "") {
		$username=$_POST['user'];
	}
	else {
		echo "Please enter a Username! <br>";
		$errorcode=1;
	}
	
	if (isset($_POST['select'])) {
		$selected=$_POST['select'];
	}
	else {
		echo "Please select if you want to create or revoke the token! <br>";
		$errorcode=1;
	}
}


function start_tool() {
	global $username, $selected, $errorcode, $tool_cmd, $tool_pth;
	
	echo "Entered Username: $username <br>";
	echo "Selected Option: $selected <br>";
	echo "<br>";
	
	if ($selected == "create") {
		//echo "Create was selected <br>";
		
		$tool_cmd = $tool_pth . " " . $selected . " " . $username . " noui";
		echo "$tool_cmd <br>";
		
		system("cmd.exe /c " . $tool_cmd, $output) ;
		
		echo "$output";	
	}
	elseif ($selected == "revoke") {
		//echo "Revoke was selected <br>";
		
		$tool_cmd = $tool_pth . " " . $selected . " " . $username . " noui";
		echo "$tool_cmd <br>";

		system("cmd.exe /c " . $tool_cmd, $output) ;
		//exec($tool_cmd, $output);
		//$output = shell_exec($tool_cmd);
		//$output = passthru($tool_cmd)
		
		echo "$output";
	}	
}

?>
