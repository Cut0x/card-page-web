<?php
include('./config.php');
?>

<a
    href="https://twitter.com/<?php echo $twitter; ?>?ref_src=twsrc%5Etfw"
    class="twitter-follow-button"d
    ata-show-count="false">
    Follow @<?php echo $twitter; ?>
</a>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<a
    href="https://twitter.com/intent/tweet?screen_name=<?php echo $twitter; ?>&ref_src=twsrc%5Etfw"
    class="twitter-mention-button"
    data-show-count="false">
    Tweet to @<?php echo $twitter; ?>
</a>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
