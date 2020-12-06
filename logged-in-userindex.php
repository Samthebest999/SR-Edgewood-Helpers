<?php
//home.php

/**
 * Start the session.
 */
session_start();

/**
 * Check if the user is logged in.
 */
if (!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in']))
{
    //User not logged in. Redirect them back to the login.php page.
    header('Location: /lrs/login.php');
    exit;
}

/**
 * Print out something that only logged in users can see.
 */

echo 'Congratulations! You are logged in!'; ?>
<!DOCTYPE html>
<html [ lang="en" ]>

<head>
	<link rel="preconnect" href="https://minnit.chat">
	<link rel="preconnect" href="https://mega.nz/drop#!bPM35wsAeu0!d!en">
	<link rel="preconnect" href="https://mega.nz/drop#!4OPuwTldiGU!d!en">
	<link rel="preconnect" href="https://minnit.chat/SamitRohanEdgewoodHelpers">
	<link rel="preconnect" href="https://minnit.chat/SamitRohanEdgewoodHelpers?embed&nickname=">
	<!-- Global site tag (gtag.js) - Google Analytics -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-172943357-1">

	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

	</script>
	<script>
		window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-172943357-1');
	</script>
	<script data-ad-client="ca-pub-8655486270568879" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">

	</script>
	<link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
	<link rel="manifest" href="/icons/site.webmanifest">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Samit Rohan Edgewood Helpers</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div id="add_left_padding">
		<!--Header-->
		<ion-header-bar>
			<br><a href="/lrs/login.php"><button id="login_button">Login</button></a><br>
			<a href="/lrs/logout.php"><button>Log Out</button></a><br>
            <a href="/lrs/reset-password.php"><button>Reset Your Password</button></a><br>
            <h3 class="allhthrees">
				Please <a href="/Donate.html">Donate (WIP)</a>; Remember we are a ALL Non-Profit Orginaization<br><br>
Please Upload Your Feedback For: Samit The Coder Of The Website <iframe class="MU" width="170" height="47" src="https://mega.nz/drop#!4OPuwTldiGU!d!en"></iframe><br><br>
Please Upload Your Feedback For: Rohan Your Favorite Delivery Man <iframe class="MU" width="170" height="47" src="https://mega.nz/drop#!bPM35wsAeu0!d!en"></iframe><br><br>
Please create a MINNIT account for the chat (it is very safe)
<a target="_blank"  href="https://minnit.chat/#signup">here</a><br>here is the VirusTotal scan (to prove saftey) <a target="_blank"  href="https://www.virustotal.com/gui/url/60f8e8c46d035910582b32e327941cb9770ffa29810710952ca0c6e720afa5a4/detection">here</a></h3>
<!--End of header--></ion-header-bar>


<h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> Welcome to SR Edgewood Helpers!</h1>








  <div id="stuff" ><h1 id="title">
<!--Intro-->  We are the SR Edgewood helpers

  </h1>
  <!--Goal--><h3 class="allhthrees">Our goal is to help the community. For now we are working in Edgewood only but, later on we plan on expanding our free service.<br>
  Our goal is to help our community and bring us all together with the supplies we need.
  <!--End of Goal-->
  <br>
<!--How it works-->For example if I need flour/(aata) and someone else has some flour to spare then first I will...👇
<ol>
<li>I will submit it into the group chat.</li>
  <li>Then if any body has some flour/(aata) to spare the will type into the chat and then they can open a private chat between the one person who has flour/(aata) and the person that needs it.</li><li style="color:black"><b>Also Rohan will deliver all the items straight to <span style="font-weight:bold">YOUR FRONT PORCH</span> he will <span style="font-weight:bold">MAINTAIN SOCIAL DISTANCING</span> all items will be sanitized.He will be wearing a mask and proper <span style="font-weight:bold">PPE(Personal Protection Equipment)</span>.</b></li></ol></h3><br></div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br>

<!--End of How it works Beggining of chat--><h3 class="allhthrees">Welcome to the chat!!<br>(Please Remember to Be Nice In the Chat🥺🥺🥺!!)
<div id="chat"><iframe src="https://minnit.chat/SamitRohanEdgewoodHelpers?embed&nickname=" style="border:none;width:90%;height:500px;" allowTransparency="true"></iframe><br><a href="https://minnit.chat/SamitRohanEdgewoodHelpers" target="_blank">CLick If Chat is not showing</a>
</div>  
<!--<a href="/about_us+our_mission.html">About Us</a><br>
<br>
    <a href="/credits.html">Credits</a><br><br>  
    <a href="/how_it_works.html"> How it works</a>
--></div>
</body>
</html>
