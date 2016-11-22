<!-- This file is used to markup the public-facing widget. -->

<?php if( strlen( trim( $phone )) > 0) : ?>
<p>
    <i class="fa fa-phone" aria-hiddern="true"> </i> <?php echo $phone; ?>
</p>

<?php endif; ?>

<?php if( strlen( trim( $email)) > 0) : ?>
<p>
    <i class="fa fa-envelope"> </i> <?php echo $email; ?>
</p>

<?php endif; ?>

<?php if( strlen( trim( $address )) > 0) : ?>
<p>
    <i class="fa fa-map-marker" aria-hidden="true"> </i> <?php echo $address; ?>
</p>

<?php endif; ?>