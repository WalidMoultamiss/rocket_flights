<?php 
echo (`
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
`);
echo (`<body style="color:#fff" onload="window.print()">`);
echo ($_SESSION['div']);
echo (`<script>
function test(){window.print()}
</script>`);
echo (`
</body>
</html>
`);
?>