<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            $paragraph = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem voluptate, ea assumenda sed odit odio perferendis quis eos sit non modi ratione eum similique nesciunt culpa dolorum deleniti qui ab.";

            echo $paragraph;
        ?>
    </h1>

    <h2>
        <?php
            $length = strlen($paragraph);

            echo "Lunghezza paragrafo: " . $length . " caratteri";
        ?>
    </h2>

    <h1>
        <?php
            $badword = $_GET["badword"];
            $newparagraph = str_replace($badword, "***", $paragraph);

            echo $newparagraph;
        ?>
    </h1>

    <h2>
        <?php
            $newlength = strlen($newparagraph);
            echo "Lunghezza paragrafo: " . $newlength . " caratteri";
        ?>
    </h2>
    
</body>
</html>