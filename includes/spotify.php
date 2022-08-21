<!-- Il vous faut un lien qui s'affiche comme ça : https://open.spotify.com/artist/5mqXPfoK5dsoHB6L8fEc8I -->

<?php
include('./config.php');
?>

<iframe
        scrolling="no"
        src="<?php echo $spotify; ?>"
        data-testid="spotify-preview--iframe"
        height="392"
        style="border-radius: 30px; width: 100%;"
        class="MusicPreviewEmbed__IframeWrapper-sc-15o0inq-0 fgmrkY"
>
</iframe>
