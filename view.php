<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>pokemon</title>
</head>

<body>
    <main>
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <img src="https://raw.githubusercontent.com/PokeAPI/media/master/logo/pokeapi_256.png" alt="">
                    <title>Bootstrap</title>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path>
                    </svg>
                </a>
            </header>

            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">CThe RESTful Pok??mon API Example</h1>
                    <p class="col-md-8 fs-4">All the Pok??mon data you'll ever need in one place,
                        easily accessible through a modern RESTful API.</p>
                    <form method="post">
                        <input type="number" name="id-poke" class="form-control" placeholder="id poke"><br>
                        <input id="get-poke" class="btn btn-primary btn-lg" type="submit" value="Get poke">
                    </form>
                </div>
            </div>

            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light rounded-3">
                        <?php if (isset($_POST["id-poke"])) : ?>
                            <?php $poke = getPokemon($_POST["id-poke"]); ?>
                            <div class="mb-3">
                                <h2>TIPO</h2>
                                <?php echo $poke->types[0]->type->name; ?>
                            </div>
                            <div class="mb-3">
                                <h2>HABILIDADES</h2>

                                <ul>
                                    <?php foreach ($poke->abilities as $a) : ?>
                                        <li><?php echo $a->ability->name; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="mb-3">
                                <h2>IMG</h2>
                                <img src="<?php echo $poke->sprites->back_default ?>" alt="">
                                <img src="<?php echo $poke->sprites->front_default ?>" alt="">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <footer class="pt-3 mt-4 text-muted border-top">
                &copy; 2021
            </footer>
        </div>
    </main>
</body>

</html>