<?php
$array2 = [22, 23, 4, 5];
echo $array2[1];
$array2[1] = 24;
echo $array2[1];

$array2[13] = 44;
echo print_r($array2);

$array2[] = 50;
echo print_r($array2);

echo '<br>' . count($array2);

$myarray = ['name' => 'Muhammad irfan', 'age' => 25];
echo '<br>' . count($myarray);
echo '<br>' . print_r($myarray);

echo $myarray['name'];

$myarray['program'] = 'BSSE';
echo '<br>' . print_r($myarray);

    $outerArray=[23,['name'=>'irfan'],67];
    echo $outerArray[1]['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $employee = [
        [
            'name' => 'Muhammad irfan',
            'des' => 'Web Developer',
            'salry' => 40000,
        ],
        [
            'name' => 'Qasim',
            'des' => 'Web Developer',
            'salry' => 50000,
        ]
    ];
    ?>
    <table border="1px">
        <tr>
            <td>
                Sr.
            </td>
            <td>
                Name
            </td>
            <td>
                Designation
            </td>
            <td>
                Salry
            </td>
            <td>
                Action
            </td>
        </tr>
        <tr>
            <td>
                1
            </td>
            <td>
                <?php echo $employee[0]['name'] ?>
            </td>
            <td>
                <?php echo $employee[0]['des'] ?>

            </td>
            <td>
                <?php echo $employee[0]['salry'] ?>

            </td>
            <td>
                Action
            </td>
        </tr>
        <tr>
            <td>
                1
            </td>
            <td>
                <?php echo $employee[1]['name'] ?>
            </td>
            <td>
                <?php echo $employee[1]['des'] ?>

            </td>
            <td>
                <?php echo $employee[1]['salry'] ?>

            </td>
            <td>
                Action
            </td>
        </tr>
    </table>
</body>

</html>