<?php

require '../config/main.php';

include '../engine/database.php';


$urls = getItemArray('select * from `img`');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/views.js"></script>
    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        body {
            background: url("img/1113011starsinspace_yapfiles.ru.jpg") no-repeat;
            background-size: cover;
        }

        .gallery > img {
            margin: 5px;
            border: 2px solid #000538;
        }

        .gallery > img:hover {
            cursor: pointer;

        }

        .galleryWrapper__screen {
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #222;
            opacity: 0.8;
            position: fixed;
            top: 0;
            z-index: 100;
            display: block;
            text-align: center;
        }
        .galleryWrapper__image {
            width: 800px;
            height: 500px;
            max-height: 80%;
            max-width: 80%;
            z-index: 101;
            position: absolute;
            margin: auto;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
        }
        .galleryWrapper__close {
            width: 5%;
            z-index: 101;
            position: absolute;
            top: 18%;
            right: 23%;
            transition: 1.5s;
        }
        .galleryWrapper__close:hover {
            cursor: pointer;
            transform: rotate(180deg);
        }
    </style>
</head>
<body>
<div class="gallery">

    <?php for ($img = 0; $img < count($urls); $img++) { ?>
        <div>
        <img width="<?= $urls[$img]['size'] ?>" height="178" src="<?= $urls[$img]['src'] ?>"
             data-full_image_url="<?= $urls[$img]['src'] ?>"
             data-id="<?= $urls[$img]['id'] ?>">
        <div style="display: flex; justify-content: space-between">
            <p style="color: white; text-align: center"><?= $urls[$img]['name'] ?></p>
            <p style="color: white; text-align: center">Просмотры: <?= (int)$urls[$img]['views'] ?></p>
        </div>
        </div>
    <?php } ?>


    <?php
/*        $maxPhoto = array_diff(scandir('img/photo/max'), ['..', '.']);
    */?><!--

    <?php /*foreach ($maxPhoto as $picture) : */?>
        <?php
/*            $file = fopen(
                'img/photo/max/',
                'r'
            );
            if (!$file) {
                echo "file not found!";
            }
            */?>
                <img width="284" height="178" src="img/photo/max/<?/*= $picture */?>"
                     data-full_image_url="img/photo/max/<?/*= $picture */?>">
    --><?php /*endforeach */?>





</div>

<script src="js/galleryOpenSlider.js"></script>
</body>
</html>