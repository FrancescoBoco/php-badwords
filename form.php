


<?php
$textarea = $_GET['textarea'];
$textAreaModificata = str_replace('ciao', '***', $textarea)
?>


<h1>
    <?php
        echo $textarea;
        echo '<br>';
        echo strlen($textarea);
        echo '<br>';
    ?>


    <?php
        echo $textAreaModificata;
        echo '<br>';
        echo strlen($textAreaModificata);
    ?>
</h1>


<br>