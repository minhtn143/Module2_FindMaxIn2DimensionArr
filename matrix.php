<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>App Find Max in 2 Dimensional Array</title>
</head>
<body>
<h2>Matrix</h2>
<form action="" method="post">
    <table border="1">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $rows = (int)$_REQUEST["rows"];
            $cols = (int)$_REQUEST["cols"];
            for ($i = 0; $i < $rows; $i++) {
                echo '<tr>';
                for ($j = 0; $j < $cols; $j++) {
                    echo '<td>';
                    echo '<input type="text" name="item[]">';
                    echo ' </td>';
                }
                echo '</tr>';
            }
        }
        ?>
    </table>
    <button type="submit">Find Max</button>
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $arrMatrix = $_REQUEST["item"];

        function findMax($dataArr){
            $length = count($dataArr);
            $max= $dataArr[0];
            for ($i=1;$i<$length;$i++){
                if ($dataArr[$i]> $max){
                    $max = $dataArr[$i];
                }
            }
            return $max;
        }

        echo "Maximum is: ".findMax($arrMatrix);

    }
?>
</body>
</html>


