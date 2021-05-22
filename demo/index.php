<?php
    require '../config/init.php';
    if (sizeof($_POST) > 0) {
        $isValid = Validator::validate($_POST);
        $errors = Validator::getErrors();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Form validation</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col col-4">
                <form class="form" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                    <div class="mb-3">
                        <div class="form-text">
                            <h2 class="h2">Form validation</h2>
                        </div>
                    </div>
                    <?php if (isset($errors) && isset($isValid)):?>
                        <?php if (!$isValid):?>
                        <?php foreach($errors as $error):?>
                        <div class="mb-3">
                            <div class="alert alert-danger"><?php echo $error;?></div>
                        </div>
                        <?php endforeach;?>
                        <?php else:?>
                        <div class="mb-3">
                            <div class="alert alert-success">All the data is correct.</div>
                        </div>
                        <?php endif;?>
                    <?php endif;?>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" class="form-control" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" id="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone number</label>
                        <input type="text" id="phone" class="form-control" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
