# Card fait en HTML5, PHP et CSS3
Voici un petit template d'une page de card (un peu comme LinkTree) !

# Comment configurer ?
### Tout se trouve dans le fichier `./config.php` !
Vous avez juste à remplacer "null" par les informations qui vous représentes
```php
<?php
$pseudo = null; 
$avatar = null; 
$description = null; 

if (strlen($pseudo) == null) $pseudo = "Votre Pseudo";
if (strlen($avatar) == null) $avatar = "webp/default_user.webp";
if (strlen($description) == null) $description = "Votre description";

$twitter = null; // exemple : "@Cut0x_" -> il ne faut pas oublier de mettre votre information entre "" !!
$github = null;
$twitch = null;
$youtube = null;
$instagram = null;
$tiktok = null;
$spotify = null;
$discord = null;
$bandcamp = null;
?>
```

# C'est quoi le rendu ?
Je vous invite à aller voir ce lien !<br>
<a href="https://legrincheux.alwaysdata.net" target="_blank"><button>legrincheux.alwaysdata.net</button></a>
