<?php include 'classes/Atm/atm.class.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ATM Machine</title>
</head>
<body style="text-align: center">
    <h1><?php echo _('Local ATM Machine'); ?></h1>
    <p><?php echo _('Hello at our ATM!'); ?></p>
    <div class="main" style="display: flex; justify-content: space-around;">
        <div class="left-column">
            <h3><?php echo _('Your balance: '); ?></h3>
            <span><?php echo Atm\Atm::$balance; ?></span>
        </div>
        <div class="right-column">
            <h3><?php echo _('Withdraw money: '); ?></h3>
            <form action="includes/atm.inc.php" method="post">
                <label for="amount">
                    <input type="number" name="amount" placeholder="<?php echo _('Desired Amount'); ?>" required>
                </label>
                <button type="submit"><?php echo _('Withdraw'); ?></button>
            </form>
        </div>
    </div>
</body>
</html>