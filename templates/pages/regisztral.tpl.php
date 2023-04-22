<!DOCTYPE html>
<html>
<script>
    function goBack() {
        window.history.back();
}
</script>

    <head>
        <title>Regisztráció</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php if(isset($uzenet)) { ?>
            <h1><?= $uzenet ?></h1>
            <?php if($ujra) { ?>
                <button onclick="goBack()">Kérjük próbálja újra</button>
            <?php } ?>
        <?php } ?>
    </body>  
</html>