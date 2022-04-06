<?php
// données non envoyées
$post = false;

// données envoyées
// $post = true;

// aucune erreur
$errors = [];

// erreur dans le champ test
// $errors = [
//     'test' => "Le champ n'est pas correctement rempli.",
// ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Form post</h1>

                <form action="/form-validate.php" method="post">
                    <div class="mb-3">
                        <label for="test" class="form-label">Test</label>
                        <input id="test" class="form-control
                        <?php if ($post && empty($errors['test'])): ?>
                            is-valid
                        <?php endif ?>
                        <?php if ($post && !empty($errors['test'])): ?>
                            is-invalid
                        <?php endif ?>
                        " type="text" name="test" value="" placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champ</div>
                        <?php if ($post && empty($errors['test'])): ?>
                            <div class="valid-feedback">
                                Le champ est correctement rempli.
                            </div>
                        <?php endif ?>
                        <?php if ($post && !empty($errors['test'])): ?>
                            <div class="invalid-feedback">
                                Le champ n'est pas correctement rempli.
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>