<!-- This file is used to markup the public-facing widget. -->

<?php if( strlen( trim( $phone )) > 0) : ?>
<p>
    <i class="fa fa-phone" aria-hiddern="true"><a href="tel:<?php echo $phone; ?>"> <?php echo $phone; ?></a></i> 
</p>

<?php endif; ?>

<?php if( strlen( trim( $email)) > 0) : ?>
<p>
    <i class="fa fa-envelope"><a href="mailto:<?php echo $email; ?>"> <?php echo $email; ?></a></i>
</p>

<?php endif; ?>

<?php if( strlen( trim( $address )) > 0) : ?>
<p>
    <i class="fa fa-map-marker" aria-hidden="true"> <?php echo $address; ?></i> 
</p>

<?php endif; ?>