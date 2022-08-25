<?php
include __DIR__ . "/../database/db.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    <title>PHP DISCHI</title>
</head>

<body>
    <header>
        <img src="./logo.svg" alt="LogoSpotify">
    </header>

    <main>
        <div class="musics-card-container container">
            <div class="row g-2 justify-content-center">
                <?php foreach ($discs as $disc) { ?>
                    <div class="music-card-element p-3">
                        <div>
                            <img class="img-fluid" src="<?php echo $disc["poster"] ?>" alt="Poster">
                        </div>

                        <div class="text-center music-element-info">
                            <p class="mt-3">
                                <?php echo $disc["title"] ?>
                            </p>

                            <div>
                                <?php echo $disc["author"] ?> <br>
                                <?php echo $disc["year"] ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>