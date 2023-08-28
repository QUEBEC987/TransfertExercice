<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form class="container">
        <br>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nom:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="nom">
            </div>
        </div>
        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label">Mot de passe:</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" name="password">
            </div>
        </div>
        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label">Confirmation mdp:</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" name="confPass">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" name="email">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Image (url):</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="image">
            </div>
        </div>
                <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
            <input type="date" class="form-control" name="image">
            </div>
        </div>
        
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Sexe:</legend>
            <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                <label class="form-check-label" for="gridRadios1">
                Masculin
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                <label class="form-check-label" for="gridRadios2">
                Féminin
                </label>
            </div>
            <div class="form-check disabled">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                <label class="form-check-label" for="gridRadios3">
                Autre
                </label>
            </div>
            </div>
        </fieldset><br>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Moyen de transport:</legend>
            <div class="col-sm-10 ">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1" name="auto">
                Auto
                </label>
            </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck2">
                <label class="form-check-label" for="gridCheck2" name="autobus">
                Autobus
                </label>
            </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck3">
                <label class="form-check-label" for="gridCheck3" name="marche">
                Marche
                </label>
            </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck4">
                <label class="form-check-label" for="gridCheck4" name="velo">
                Vélo
                </label>
            </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>