<?php

include '../classes/Atm/atm.class.php';

$amount = $_POST['amount'];
?>

<body style="text-align: center;">
    <?php if ($amount): ?>
        <?php $atm = new Atm\Atm($amount); ?>
        <div class="main" style="display: flex; justify-content: space-around;">
            <div class="column-left">
                <p><?php echo _('Your balance: '); ?></p>
                <span><?php echo $atm->getBalance(); ?></span>
            </div>
            <div class="column-right">
                <p><?php echo _('Get your money: '); ?></p>
                <span><?php echo $atm->getCash(); ?></span>
            </div>
        </div>
        <a href="../index.php"><?php echo _('Next Client'); ?></a>
    <?php else: ?>
        <p><?php echo _('Such amount is not possible for the withdrawal, please try again'); ?></p>
        <a href="../index.php"><?php echo _('Try Again'); ?></a>
    <?php endif; ?>
</body>



