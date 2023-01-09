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

    <h1>
        <?php
            $length = strlen($paragraph);

            echo "Lunghezza paragrafo: " . $length . " caratteri";
        ?>
    </h1>
    
    
</body>
</html>