<?php require 'inc/head.php';
require 'inc/data/products.php';

if(empty($_SESSION['loginname']))
{
    header('Location: /index.php');
}


?>
<section class="cookies container-fluid">
    <div class="row">

        <?php
        foreach ($_SESSION['id'] as $id)
            echo '<br>' . $catalog[$id]['name'] . $catalog[$id]['description'];


        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
