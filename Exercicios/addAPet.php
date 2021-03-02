<?php

require './Ex002.php';
include './CPFValidator.php';
?>




Hi <?php echo htmlspecialchars($_POST['name']); ?>.
You are <?php echo nl2br((int)$_POST['age']); ?> years old.
The pet's breed is  <?php echo htmlspecialchars($_POST['breed']); ?>
 Pet's weight is  <?php echo htmlspecialchars($_POST['weight']); ?>
 Your <?php echo validatingCPF((int)$_POST['cpf']); ?>.