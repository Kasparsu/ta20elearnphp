<?php include('partials/header.php')?>
    <h1>Home <?=$name?></h1>
    <?php for($i=0;$i<100;$i++):?>
    <ul>
        <li>Item <?=$i?></li>
    </ul>
    <?php endfor; ?>
<?php include('partials/footer.php')?>