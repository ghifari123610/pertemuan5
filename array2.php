<?php 
// pengulanga pada array
// jenis2 pengulangan 1.for/2.foreach

$angka = [1,2,3,4,5,6,7,8,];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan php</title>
    <style>
        .kotak {
            width: 100px;
            height: 100px;
            background-color: goldenrod;
            text-align: center;
            line-height: 100px;
            margin: 3px;
            float: left;
        }

        .clear { clear: both; }
    </style>
</head>
<body>
    
<!-- kegunaan count adlh untuk menggulangi variable ketika kta memasukkan variable tersebut kedalam parameternya -->

    <?php for( $i = 0; $i < count($angka); $i++ ) { ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

<div class="clear"> </div>

<?php foreach( $angka as $a ) { ?>
    <div class="kotak"> <?php echo $a; ?> </div>
<?php } ?>






</body>
</html>




