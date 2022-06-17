<?php 
    $url = 'https://api.binance.com/api/v3/ticker/price';
    $data = file_get_contents($url);
    $json = json_decode($data , true);
?>
<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> Binance </title>
  </head>
  <body>
    <br> <br>
    
    <div class="container">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">العملة</th>
                    <th scope="col">السعر</th>
                </tr>
            </thead>
            <tbody>
        <?php 

            foreach($json as $k => $v ){
                echo '
                <tr>
                <td>'. $v['symbol'] .'</td>
                <td>'. $v['price'] .'</td>
                </tr>';
            }
        ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>