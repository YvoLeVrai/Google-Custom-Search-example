<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom image search exemple</title>
</head>
    <div id="image"></div>

    <?php
        $apiKey = "AIzaSyCIn596Ry0MtSYFdG2DhxHTIBESvIiTVGs";
        $cx = "000333518738124520541:hhchaiog79u";
        $search = "rabbit";
        $url = "https://www.googleapis.com/customsearch/v1?key=".$apiKey."&cx=".$cx."&q=".$search."&callback=hndlr&searchType=image";
    ?>

    <script>
        function hndlr(response) {
            for (var i = 0; i < 1; i++) {
                var item = response.items[i];
                document.getElementById("image").innerHTML += "<img src=\"" + item.link + "\">";
            }
        }
    </script>

    <script src="<?=$url?>"></script>

</body>
</html>