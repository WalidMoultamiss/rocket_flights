<?php 
$divTicket=$_SESSION['div'];
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
echo (`<body style="color:#fff">`);
echo ($divTicket);
?>
<button style="position: absolute;z-index: 100;top: 400px;" class="btn btn-success" onclick="printMe()">print</button>
<script>
    document.querySelectorAll('.btn-sm').forEach(e=>{e.remove()})
    function printMe(){window.print()}
</script>
</body>
</html>