<?php

$image = get_field('full_image');
?>

<figure class="image--full">
  <img src="<?php echo $image['url']; ?>" class="img-fluid" alt="<?php echo $image['alt']; ?>" />
</figure>
