<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <div class="btn-report">
            <button>USER</button>
            <button>Furniture</button>
            <button>Import</button>
            <button>Export</button><br>  
        </div>
        <tr>
            <th>Furniture Name</th>
            <th>Furniture Ownername</th>
            <th>Import Date</th>
            <th>Import Quantity</th>
            <th>Export Date</th>
            <th>Export Quantity</th>
        </tr>
        <?php
        $con = mysqli_connect('localhost','root','','corgo')
        or die("database connection failed");
        $sql ="SELECT
            furniture.furniturename,
            furniture.furnitureownername,
            import.importdate,
            import.importquantity,
            export.exportdate,
            export.exportquantity
            FROM furniture,import, export
            where import.furnitureid = furniture.furnitureid
            and   export.furnitureid = furniture.furnitureid
            ";
        $check = mysqli_query($con,$sql);
        if(!$check){
            echo"<script> alert('empty set') </script>";
        }else{
            if(mysqli_num_rows($check)>0){
                while($row = mysqli_fetch_array($check)){
                    $a = $row['furniturename'];
                    $b = $row['furnitureownername'];
                    $c= $row['importdate'];
                    $d = $row['importquantity'];
                    $e = $row['exportdate'];
                    $f= $row['exportquantity'];
                    echo"
                    <tr>
                    <td>$a</td>
                    <td>$b</td>
                    <td>$c</td>
                    <td>$d</td>
                    <td>$e</td>
                    <td>$f</td>
                    </tr>";
                }
            }
        }
        mysqli_close($con);
        ?>
    </table>
</body>
</html>