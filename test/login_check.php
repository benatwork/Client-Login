<?php
  $url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
  $basename = basename($url);

  if (!isset($_COOKIE['verify'])) {
    header ("Location:..");
	
  } else {
	if($_COOKIE['verify'] == $basename){
		setcookie("verify",$basename, 0, '/');
	} else {
		header ("Location:..");	
	}
  }
?>
