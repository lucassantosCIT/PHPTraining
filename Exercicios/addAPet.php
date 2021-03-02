<?php

require './Ex002.php';
include './CPFValidator.php';



?>
<?php

if ($_SERVER = ['REQUEST_METHOD'] == 'POST') {





    

    // use ISSET as a shortly way to write array_key_exist() [VERIFICA SE A ARRAY EXISTE]

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $name = '';
    }


    if (isset($_POST['age'])) {
        $age = $_POST['age'];
    } else {
        $age = '';
    }



    if (isset($_POST['breed'])) {
        $breed = $_POST['breed'];
    } else {
        $breed = '';
    }



    if (isset($_POST['weight'])) {
        $weight = $_POST['weight'];
    } else {
        $weight = '';
    }



    if (isset($_POST['cpf'])) {
        $cpf = $_POST['cpf'];
    } else {
        $cpf = '';
    }
}

?>



Hi <?php echo htmlspecialchars($name); ?>.
You are <?php echo (int)$age; ?> years old.
The pet's breed is <?php echo htmlspecialchars($_POST['breed']); ?>
Pet's weight is <?php echo htmlspecialchars($_POST['weight']); ?>
Your  <?php echo validatingCPF((int)$_POST['cpf']); ?>.