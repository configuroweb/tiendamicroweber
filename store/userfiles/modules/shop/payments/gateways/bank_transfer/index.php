<?php

$bank_transfer_show_msg = (get_option('bank_transfer_show_msg', 'payments')) == 'y';
$bank_transfer_msg = get_option('bank_transfer_msg', 'payments');
?>
<?php if($bank_transfer_show_msg == true): ?>

<div>
  <p class="alert alert-warning"><small>
    <?php if($bank_transfer_msg == true): ?>
    <?php print $bank_transfer_msg; ?>
    <?php else: ?>
    <strong> *
    <?php _e("Note"); ?>
    </strong>
    <?php _e("Su carrito de compras se vaciará cuando complete el pedido"); ?>
    <?php endif; ?>
    </small> </p>
</div>
<?php endif; ?>
