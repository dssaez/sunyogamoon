<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<?php require_once VIEWS.'/templates/langs/base_lang.php'; ?>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="author" content="www.indanielweb.es" />
        <meta name="copyright" content="Daniel Sanchez Saez" />
        <meta name="owner" content="daniel@indanielweb.com"/>
        <meta name="robots" content="index, follow">

        <!-- ############ METAS DE CADA PAGE ############### -->
        <meta name="keywords" content="<?php echo $Translation['keywords']; ?>"/>
        <meta name="description" content="<?php echo $Translation['description']; ?>"/>

        <meta property="og:title" content="<?php echo $Translation['ogtitle']; ?>"/>
        <meta property="og:description" content="<?php echo $Translation['ogdescription']; ?>"/>
        <meta property="og:image" content="<?php echo $Translation['ogimage']; ?>"/>
        <meta property="og:url" content="<?php echo $Translation['ogurl']; ?>"/>
        <!-- ############ METAS DE CADA PAGE ############### -->
        <meta property="og:image:width" content="180" />
        <meta property="og:image:height" content="110" />

        <link rel="stylesheet" href='<?php echo $Absolute_Path; ?>/css/normalize.css'>
        <link rel="stylesheet" href='<?php echo $Absolute_Path; ?>/css/estilos.css'>
        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
        <script src='<?php echo $Absolute_Path; ?>/js/onload.js'></script>
        <!-- ############ FONTS ############### -->

        <!-- ############ FONTS ############### -->
        <title><?php echo $Translation['title']; ?></title>
</head>
<body>

        <!-- Incluimos el BOXMANAGER  -->
        <?php include_once VIEWS.'/BoxManager/BoxManager.php'; ?>
        <!-- BOXMANAGER -->

                <?php include_once VIEWS.'/templates/base/header.php'; ?>

                <div class="white">
                        <div class="Container">

                                <?php include_once VIEWS."/".$Translation['body'].'.php'; ?>

                        </div>
                </div>

                <?php include_once VIEWS.'/templates/base/footer.php'; ?>

        <script src='<?php echo $Absolute_Path; ?>/js/jquery-2.2.4.min.js'></script>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->

        <script src='<?php echo $Absolute_Path; ?>/js/main.js'></script>

        <!-- GOOGLE ANALYTICS -->
        <?php require_once '../utils/google_analytics.php'; ?>

</body>

</html>
