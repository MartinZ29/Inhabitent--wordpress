<!-- This file is used to markup the public-facing widget. -->

<?php if( strlen( trim( $phone )) > 0) : ?>
<p>
    <i class="fa fa-phone" aria-hiddern="true"></i><a href="tel:<?php echo $phone; ?>"> <?php echo $phone; ?></a> 
</p>

<?php endif; ?>

<?php if( strlen( trim( $email)) > 0) : ?>
<p>
    <i class="fa fa-envelope"></i><a href="mailto:<?php echo $email; ?>"> <?php echo $email; ?></a>
</p>

<?php endif; ?>

<?php if( strlen( trim( $address )) > 0) : ?>
<p class="cont-add">
    <i class="fa fa-map-marker" aria-hidden="true"></i><span> <?php echo $address; ?></span> 
</p>

<?php endif; ?>