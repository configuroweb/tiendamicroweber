<?php 

//include(dirname(__DIR__).DS.'lib'.DS.'omnipay'.DS.'cc_form_fields.php'); 

 
$is_test = (get_option('przelewy24_testmode', 'payments')) == 'y';

?>

<div>
    <p class="alert alert-warning"><small><strong> *<?php _e("Note"); ?> </strong><?php _e("Su carrito de compras se vaciará cuando complete el pedido"); ?></small> </p>
</div>




<?php if($is_test == true and is_admin()): ?>
 <?php print notif("You are using Przelewy24 in test mode!"); ?>
<?php endif; ?>