<?php 
    require_once(__DIR__ . "/../config/config.php");
    if(session_id() == '' || !isset($_SESSION)) {
            // session isn't started
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="images/favicon.ico">

        <title>Never forget another Todo</title>

        <!-- Latest compiled and minified CSS -->
<!--         <link rel="stylesheet" href="--><!--/bootstrap.min.css">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="<?php echo CSS ?>/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo CSS ?>/todo.css">        
    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo APPLICATION_ROOT ?>/index.php">ToDo</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <?php echo $navMarkup; ?>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

