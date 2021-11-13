<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo MPG\APP_NAME . ' v' . MPG\VERSION; ?></title>

    <link rel="icon" href="<?php echo MPG\BASE_URL; ?>/assets/images/mpg-icon.svg">
    <link rel="mask-icon" href="<?php echo MPG\BASE_URL; ?>/assets/images/mpg-safari-icon.svg" color="#6eb825">
    <link rel="apple-touch-icon" href="<?php echo MPG\BASE_URL; ?>/assets/images/mpg-ios-icon.png">

    <link rel="stylesheet" href="<?php echo MPG\BASE_URL; ?>/assets/css/ubuntu-font.css">
    <link rel="stylesheet" href="<?php echo MPG\BASE_URL; ?>/assets/css/fontawesome-custom.css">
    <link rel="stylesheet" href="<?php echo MPG\BASE_URL; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo MPG\BASE_URL; ?>/source/css/inner.css">

    <script>
        var MPG_BASE_URL = '<?php echo MPG\BASE_URL; ?>';
    </script>

    <script src="<?php echo MPG\BASE_URL; ?>/source/js/_base.js"></script>
    <script src="<?php echo MPG\BASE_URL; ?>/source/js/manageIndexes.js"></script>

</head>

<body>

    <?php require MPG\ABS_PATH . '/views/parts/menu.view.php'; ?>

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-3">

                <div class="row">

                    <div class="col-md-12">

                        <?php require MPG\ABS_PATH . '/views/parts/databases.view.php'; ?>

                    </div>
                    
                </div>
                
                <div class="row">

                    <div class="col-md-12">

                        <h2>Collections</h2>

                        <ul id="mpg-collections-list">
                            <li><i>Please select a database.</i></li>
                        </ul>

                    </div>

                </div>
                
            </div>
            
            <div class="col-md-9">

                <div class="row">

                    <div class="col-md-12">

                        <div class="row">

                            <div class="col-md-12">

                                <h2>Fields</h2>

                                <ul id="mpg-indexable-fields-list">
                                    <li><i>Please select a database and a collection.</i></li>
                                </ul>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-12">

                                <span class="align-middle">Order</span>

                                <select id="mpg-index-order-select" class="form-control d-inline-block align-middle">
                                    <option value="1" selected>ASC</option>
                                    <option value="-1">DESC</option>
                                </select>

                                <span class="align-middle">Unique?</span>
                                
                                <select id="mpg-unique-index-select" class="form-control d-inline-block align-middle">
                                    <option value="true">Yes</option>
                                    <option value="false" selected>No</option>
                                </select>

                                <button id="mpg-create-index-button" class="btn btn-primary">
                                    Create index
                                </button>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-12">

                                <div id="mpg-index-created" class="alert alert-success alert-dismissible d-none" role="alert">
                                    <span class="text">...</span>
                                    <button type="button" class="close" data-dismiss="alert" data-alert-id="mpg-index-created" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                
                            </div>

                        </div>

                    </div>

                </div>
                
                <div class="row">

                    <div id="mpg-indexes-column" class="col-md-12 d-none">

                        <h2>Indexes</h2>

                        <table id="mpg-indexes-table" class="table">

                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Key (Order)</th>
                                    <th>Unique?</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>

                            <tbody>
                            </tbody>

                        </table>

                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>

</body>

</html>