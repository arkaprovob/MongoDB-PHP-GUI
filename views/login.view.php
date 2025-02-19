<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">

    <title>MongoDB PHP GUI</title>

    <link rel="icon" href="./assets/images/mpg-icon.svg">
    <link rel="mask-icon" href="./assets/images/mpg-safari-icon.svg" color="#6eb825">
    <link rel="apple-touch-icon" href="./assets/images/mpg-ios-icon.png">

    <link rel="stylesheet" href="./assets/css/ubuntu-font.css">
    <link rel="stylesheet" href="./assets/css/fontawesome-custom.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./source/css/login.css">

    <script type="module" src="./source/js/login.esm.js"></script>

</head>

<body>

    <div id="mpg-background">
        <a class="credit-link" target="_blank"></a>
    </div>

    <div class="container h-100">
        <?php 
        if ( isset($requiredFields) ) :
        ?>

            <div class="alert alert-danger text-center" role="alert">
                Please fill these fields: <?php echo join(', ', $requiredFields); ?>
            </div>

        <?php
        endif;
        ?>

        <div class="row h-100 justify-content-center align-items-center">

            <div id="mpg-cards" class="col-xs-12">

                <div class="card mpg-card-front">

                    <div class="card-header text-center text-nowrap">
                        <img src="./assets/images/mpg-icon.svg" width="32" height="32" />
                        <h3 class="mpg-card-header-title d-inline align-middle">MongoDB WEB UI</h3>
                    </div>
                    
                    <div class="card-body">

                        <form method="POST" spellcheck="false">

                            <div class="input-group form-group">
                                <input type="url" class="form-control" placeholder="mongodb://user:pass@host:port/db" title="URI" name="uri" pattern="^mongodb(\+srv)?://.+$" required>
                            </div>
                            <div class="input-group form-group">
                                <input type="password" class="form-control" placeholder="access key" title="Password" name="password"  required>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" class="btn btn-primary float-right">
                            </div>

                        </form>

                    </div>

                </div>

            </div>
            
        </div>
        
    </div>

</body>
</html>