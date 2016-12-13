<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Grille CSS</title>
    <link rel="stylesheet" href="css/style.css" />

    <style>
        .col-l-1, .col-l-2, .col-l-3, .col-l-4, .col-l-5, .col-l-6, .col-l-7, .col-l-8, .col-l-9, .col-l-10, .col-l-11, .col-l-12,
        .col-m-1, .col-m-2, .col-m-3, .col-m-4, .col-m-5, .col-m-6, .col-m-7, .col-m-8, .col-m-9, .col-m-10, .col-m-11, .col-m-12,
        .col-s-1, .col-s-2, .col-s-3, .col-s-4, .col-s-5, .col-s-6, .col-s-7, .col-s-8, .col-s-9, .col-s-10, .col-s-11, .col-s-12 {

            background: #9da3a6;
            border: #0070BA 1px solid;
            padding: 8px;
            font-family: Verdana;
            font-size: 14px;


        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-l-12 col-m-12 col-s-12">
            <div class="col-l-6 col-m-6 col-s-12">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aspernatur assumenda commodi dignissimos inventore maiores numquam optio,
                sed voluptatum! Amet assumenda at atque, ducimus eius hic quaerat quidem unde voluptas!
            </div>

            <div class="col-l-6 col-m-6 col-s-12">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aspernatur assumenda commodi dignissimos inventore maiores numquam optio,
                sed voluptatum! Amet assumenda at atque, ducimus eius hic quaerat quidem unde voluptas!
            </div>

            <div class="col-l-6 col-m-6 col-m-offset-3 col-s-hidden">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aspernatur assumenda commodi dignissimos inventore maiores numquam optio,
                sed voluptatum! Amet assumenda at atque, ducimus eius hic quaerat quidem unde voluptas!
            </div>
        </div>

        <div class="col-l-offset-2 col-l-8 col-m-offset-3 col-m-6 col-s-12">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aspernatur assumenda commodi dignissimos inventore maiores numquam optio,
            sed voluptatum! Amet assumenda at atque, ducimus eius hic quaerat quidem unde voluptas!
        </div>
    </div>
</body>
</html>