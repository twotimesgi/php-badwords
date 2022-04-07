<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $badword = $_GET['badword'];
    $placeholder = str_repeat("*", strlen($badword));
    $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc convallis nisl vel congue tempus. Pellentesque pharetra sollicitudin imperdiet. Pellentesque suscipit nibh tincidunt, sollicitudin nunc eget, laoreet urna. Ut ante velit, vulputate vel eros eu, semper faucibus velit. Aliquam varius, sem vitae finibus ultricies, augue velit efficitur lectus, quis tempor purus lectus sit amet metus. Morbi lacinia tempor turpis, ac varius libero facilisis eu. Morbi consectetur, ligula eu pellentesque hendrerit, lectus sem finibus nisl, eget interdum risus nunc in dui. Praesent vel auctor felis. Vestibulum malesuada pretium ligula, sit amet facilisis neque condimentum suscipit. Vestibulum rhoncus risus consectetur nisl iaculis eleifend. Fusce vel pretium lectus, quis accumsan eros. Etiam accumsan nunc lectus, sit amet sodales erat sodales vel. Morbi semper nec enim et laoreet. Nam tempor laoreet diam, eleifend porta felis auctor at.";
    $count = substr_count($text, $badword);
    ?>
</head>
<body>
    <?= str_replace($badword, $placeholder, $text) ?>
    </br></br>
    <?= "Questo testo è lungo " . strlen($text) . " Caratteri."; ?>
    <?php 
    if($_GET["badword"] != ""){
        echo 'La parola "' . $badword . '" compare ' . $count . " volte.";
    }
    ?>
</body>
</html>