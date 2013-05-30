<center>
  <div id="mediablock-container">Loading player</div>
</center>

<script>
  jwplayer("mediablock-container").setup({
      file: "<?php print $file; ?>",
      width: <?php print $width; ?>,
      height: <?php print $height; ?>,
      <?php print $autostart; ?>,
      flashplayer: "<?php print $flashplayer; ?>",
      html5player: "<?php print $html5player; ?>"
    });
</script>

<div id="mediablock-description">
  <?php print $description; ?>
</div>