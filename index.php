<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Custom image search exemple</title>
</head>
    <div id="image"></div>

    <?php
        $apiKey = "AIzaSyCIn596Ry0MtSYFdG2DhxHTIBESvIiTVGs"; // Copy here API key. You can generate yours here https://console.developers.google.com/apis/
        $browserId = "000333518738124520541:hhchaiog79u"; // Copy here your browser ID. You can create a browser here https://cse.google.fr/cse/all
        $search = "rabbit"; // Here is your google search
        $url = "https://www.googleapis.com/customsearch/v1?key=".$apiKey."&cx=".$browserId."&q=".$search."&callback=hndlr&searchType=image";
    ?>

    <script> // This function roll through the results and display them into the image div
        function hndlr(response) {
            for (var i = 0; i < response.items.length; i++) {
                var item = response.items[i];
                document.getElementById("image").innerHTML += "<img src=\"" + item.link + "\">";
            }
        }
    </script>

    <script src="<?=$url?>"></script> // Here I run the request

</body>
</html>
