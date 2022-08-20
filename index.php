<?php
include('./config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $pseudo; ?> !!</title>
	<link rel="shortcut icon" href="./src/img/<?php echo $avatar; ?>" type="image/x-icon">

	<link rel="stylesheet" href="./src/css/styles.css">
</head>
<body>
	<main>
		<div id="a-propos">
			<!-- AVATAR ET DESCRIPTION -->
			<div id="avatar" class="pdp" style="text-align: center;">
				<img src="./src/img/<?php echo $avatar; ?>" alt="" style="width: 250px; border-radius: 150px;">
				<br>
				<h1><?php echo $pseudo; ?></h1>
				<br>
			</div>
			<p style="text-align: center;" id="descrip">
				<?php echo $description; ?>
			</p>
			<!-- LIENS DE VOS RESEAUX -->
			<div id="reseaux" class="main">
				<?php if ($twitter !== null) { ?>
  					<a href="https://twitter.com/<?php echo $twitter; ?>" class="nav-item" targer="_blank">
    					<div class="nav-links">
      						<img src="./src/img/svg/twitter-logo.svg" alt="">
    					</div>
    					<span class="nav-link-text">Twitter</span>
  					</a>
				<?php }; ?>
				
				<?php if ($github !== null) { ?>
  					<a href="https://github.com/<?php echo $github; ?>" class="nav-item" targer="_blank">
    					<div class="nav-links">
      						<img src="./src/img/svg/github-logo.svg" alt="">
    					</div>
    					<span class="nav-link-text">Github</span>
  					</a>
				<?php }; ?>
				
				<?php if ($twitch !== null) { ?>
  					<a href="https://twitch.tv/<?php echo $twitch; ?>" class="nav-item" targer="_blank">
    					<div class="nav-links">
      						<img src="./src/img/svg/twitch-logo.svg" alt="">
    					</div>
    					<span class="nav-link-text">Twitch</span>
  					</a>
				<?php }; ?>
				
				<?php if ($spotify !== null) { ?>
  					<a href="<?php echo $spotify; ?>" class="nav-item" targer="_blank">
    					<div class="nav-links">
      						<img src="./src/img/svg/spotify-logo.svg" alt="">
    					</div>
    					<span class="nav-link-text">Spotify</span>
  					</a>
				<?php }; ?>
				
				<?php if ($discord !== null) { ?>
  					<a href="https://discord.gg/<?php echo $tiktok; ?>" class="nav-item" targer="_blank">
    					<div class="nav-links">
      						<img src="./src/img/svg/discord-logo.svg" alt="">
    					</div>
    					<span class="nav-link-text">Discord</span>
  					</a>
				<?php }; ?>
				
				<?php if ($tiktok !== null) { ?>
  					<a href="https://tiktok.com/@<?php echo $tiktok; ?>" class="nav-item" targer="_blank">
    					<div class="nav-links">
      						<img src="./src/img/svg/tiktok-logo.svg" alt="">
    					</div>
    					<span class="nav-link-text">TikTok</span>
  					</a>
				<?php }; ?>
				
				<?php if ($youtube !== null) { ?>
  					<a href="<?php echo $youtube; ?>" class="nav-item" targer="_blank">
    					<div class="nav-links">
      						<img src="./src/img/svg/youtube-logo.svg" alt="">
    					</div>
    					<span class="nav-link-text">YouTube</span>
  					</a>
				<?php }; ?>
				
				<?php if ($bandcamp !== null) { ?>
  					<a href="<?php echo $bandcamp; ?>" class="nav-item" targer="_blank">
    					<div class="nav-links">
      						<img src="./src/img/svg/bandcamp-logo.svg" alt="">
    					</div>
    					<span class="nav-link-text">Bandcamp</span>
  					</a>
				<?php }; ?>
			</div>
		</div>
		<?php if ($spotify !== null) { ?>
			<br><br>
			<div id="spotify" class="div-spotify" style="text-align: center; border: 3px solid #58da76; padding: 10px; background: #58da76; margin: auto; width: 50%; background-repeat: no-repeat; background-size: 1000px; border-radius: 50px;">
				<?php include('./includes/spotify.php'); ?>
			</div>
		<?php }; ?>
		
		<?php if ($twitter !== null) { ?>
			<br><br>
			<div id="twitter" class="div-twitter" style="text-align: center; border: 3px solid #44bcd8; padding: 10px; background: #44bcd8; margin: auto; width: 50%; background-repeat: no-repeat; background-size: 1000px; border-radius: 50px;">
				<?php include('./includes/twitter.php'); ?> 
			</div>
		<?php }; ?>
	</main><br><br>
	<br><br><br>
	<?php include('./includes/footer.php'); ?>
</body>
</html>
