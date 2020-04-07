<?php
function findMax($array)
{
    $max = $array[0];
    foreach ($array as $value) {
        if ($value > $max)
            $max = $value;
    }
    return $max;
}

$width = $_POST['width'];
$height = $_POST["height"];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Find max of array</h3>
<div>
    <form action="" method="post">
        <label>Width Array: <input type="text" name="width"></label><br>
        <label>Height Array: <input type="text" name="height"></label><br>
        <input type="submit" value="Create Array">
    </form>
</div>
<div>
    <form method="post">
        <table border="1">
            <?php for ($i = 0; $i < $width; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < $height; $j++): ?>
                        <td>
                            <input type='number' name='value[]'>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
        <input type="submit" value="Find Max">
    </form>
    <?php
    $arrNumber = $_POST['value'];
    echo findMax($arrNumber);
    ?>
</div>
</body>
</html>
