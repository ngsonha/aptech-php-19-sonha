<?php
$thongtin =[
    'iphone 11'=>[
        'price'=>1000,
        'made'=>[
            'in'=>'china',
            'by'=>'vietnamese',
        ],
    ],
    'galaxy s10'=>[
        'price'=>290,
        'made'=>[
            'in'=>'korea',
            'by'=>'china',
        ],
    ],
    'note 9'=>[
        'price'=>872,
        'made'=>[
            'in'=>'japan',
            'by'=>'vietnamese',
        ],
    ],
    'note 11'=>[
        'price'=>872,
        'made'=>[
            'in'=>'japan',
            'by'=>'đồ tàu khựa',
        ],
    ],

    
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
    <thead>
    <tr>
        <th>TSP</th>
        <th>price</th>
        <th>made in</th>
        <th>made by</th>
    </tr>
    </thead>
    <tbody>
    <?php

    $tong=0;        
        foreach($thongtin as $value => $giatri)
        {   
            
            $tong = $tong +  $giatri['price'];
        ?>
            <tr>


            <td><?php echo $value ?></td>
            <td><?php echo $giatri['price'] ?></td>
            <td><?php echo $giatri['made']['in'] ?></td>
            <td><?php echo $giatri['made']['by'] ?></td>
            
            </tr>
            <?php 
        }
        
        ?>
         <td>
    tong
    </td>
    <td><?php
        echo "$".$tong;
    ?></td>
    </tbody>

    </table>
</body>
</html>