<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>ДЗ 4</title>
</head>
<body>
    <div class="container">
        <h2>Бородино-2018. Москва за нами</h2>
        <?php
            $imagesList = scandir("gallery");
            $gallery = "<div class=\"gallery\">";
            foreach ($imagesList as $image) {
                if ($image == "." || $image == "..") continue;
                $gallery .= "<div class=\"card\"><a href=\"gallery/$image\" target=\"_blank\"><img src=\"gallery_mini/$image\" alt=\"\"></a><a href=\"gallery/$image\" class=\"capture\" target=\"_blank\">$image</a></div>";
            }
            $gallery .= "</div>";
            echo $gallery;
        ?>

    </div>
</body>
</html>