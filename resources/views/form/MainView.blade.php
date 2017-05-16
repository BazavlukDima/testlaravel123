<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>

    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    {{ csrf_field() }}
    <h1>Select Form:</h1>
    <div class="container content">
        <div class="centered-top">
            <form class="form-horizontal" method="post" id="form">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Type</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="country" id="country">
                            <option disabled selected>Choose...</option>
                            <?php foreach($countries as $country): ?>
                                <option value="<?=$country['Code']?>"><?=$country['Name']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group city-select">
                    <label for="name" class="col-sm-2 control-label">Subtype</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="city" id="city">
                            <option disabled selected>Choose...</option>
                        </select>
                    </div>
                </div>
                <div class="form-group model-select">
                    <label for="name" class="col-sm-2 control-label">Model</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="model" id="model">
                            <option disabled selected>Choose...</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-6">
                        <button type="submit" id="submit" class="btn btn-primary">Отправить</button>
                        <div></div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../js/main.js"></script>

    </body>
</html>