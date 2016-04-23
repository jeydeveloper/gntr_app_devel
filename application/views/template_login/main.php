<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo $assets; ?>/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $assets; ?>/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo $assets; ?>/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo $assets; ?>/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo $assets; ?>/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript">
            var base_url = "<?php echo site_url('/'); ?>";
        	var asset_url = "<?php echo $assets; ?>";
        </script>
    </head>

    <body>

        <?php echo $contents; ?>

        <!-- Javascript -->
        <script src="<?php echo $assets; ?>/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo $assets; ?>/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo $assets; ?>/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="<?php echo $assets; ?>/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>