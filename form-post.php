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
                    <!-- version formulaire vierge -->
                    <div class="mb-3">
                        <label for="test" class="form-label">Test</label>
                        <input id="test" class="form-control" type="text" name="test" value="" placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champ</div>
                    </div>

                    <!-- version formulaire correct -->
                    <div class="mb-3">
                        <label for="test" class="form-label">Test</label>
                        <input id="test" class="form-control is-valid" type="text" name="test" value="" placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champ</div>
                        <div class="valid-feedback">
                            Le champ est correctement rempli.
                        </div>
                    </div>

                    <!-- version formulaire erreur -->
                    <div class="mb-3">
                        <label for="test" class="form-label">Test</label>
                        <input id="test" class="form-control is-invalid" type="text" name="test" value="" placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champ</div>
                        <div class="invalid-feedback">
                            Le champ n'est pas correctement rempli.
                        </div>
                    </div>

                    <div class="mb-3">
                        <input class="form-control" type="text" name="login" id="login" placeholder="votre nom d'utilisateur" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="password" name="password" id="password" placeholder="votre mot de passe">
                    </div>

                    <div class="mb-3">
                        <p>Votre fruit préféré :</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fruit" id="fruit_1" value="ananas">
                            <label class="form-check-label" for="fruit_1">Ananas</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fruit" id="fruit_2" value="banane">
                            <label class="form-check-label" for="fruit_2">Banane</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fruit" id="fruit_3" value="cerise">
                            <label class="form-check-label" for="fruit_3">Cerise</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <p>Vos plats préférés :</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="plat[]" id="plat_1" value="lasagne">
                            <label class="form-check-label" for="plat_1">Lasagne</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="plat[]" id="plat_2" value="ramen">
                            <label class="form-check-label" for="plat_2">Ramen</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="plat[]" id="plat_3" value="entrecote">
                            <label class="form-check-label" for="plat_3">Entrecôte</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <p>Vos plats préférés :</p>
                        <div class="custom-checkbox">
                            <div class="form-check">
                            <!-- pour que le champs soit vraiment à sélection multiple, il faut ajouter les crochets "[]" dans le name -->
                            <input class="form-check-input" type="checkbox" name="plat_alt[]" id="plat_alt_1" value="lasagne">
                                <label class="form-check-label" for="plat_alt_1">Lasagne</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="plat_alt[]" id="plat_alt_2" value="ramen">
                                <label class="form-check-label" for="plat_alt_2">Ramen</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="plat_alt[]" id="plat_alt_3" value="entrecote">
                                <label class="form-check-label" for="plat_alt_3">Entrecôte</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <p>Votre film préféré :</p>
                        <!-- l'attribute "size" permet de choisir le nombre d'éléments affichés en même temps -->
                        <!-- <select name="film" id="film" size="2"> -->
                        <select name="film" id="film">
                            <option id="film_1" value="interstellar">Interstellar</option>
                            <option id="film_2" value="fight club">Fight club</option>
                            <!-- l'attribut "selected" permet d'indiquer quel élément est sélectionné par défaut -->
                            <option id="film_3" value="shining" selected>Shining</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <p>Vos chanteurs préférés :</p>
                        <!-- pour que le champs soit vraiment à sélection multiple, il faut ajouter les crochets "[]" dans le name et l'attribut "multiple" -->
                        <select name="singers[]" id="singers" size="5" multiple>
                            <option id="singers_1" value="celine dion">Céline Lion</option>
                            <option id="singers_2" value="linkin park">Linkin Park</option>
                            <option id="singers_3" value="jean-jacques goldman">Jean-Jacques Goldman</option>
                        </select>
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