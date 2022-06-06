<!DOCTYPE html><html>
<meta charset="utf-8" />
<head>

<title>Domain Pricing</title>
 
 
 </head>
  <body>
    <div>
    <?php

$apiUrl = 'https://multihostexpress.com/api/products-and-prices?token=9DalAm6IZW7HK38YR9lc4UJ0542tIx1rKSP3GC0XeY6uD0t735b3o5f5nMizIWEFkN0L6TpdEDyoqiOFs';
$curl = curl_init($apiUrl);
curl_setopt($curl, CURLOPT_ENCODING ,"");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($curl);
//print($json);
curl_close($curl);


$products = json_decode($json, true);
echo $products;
 
foreach ($products as $product) {
    echo '<pre>';
    print_r($product);
    echo '</pre>';
}
?>
</div>

  
 </body> 
 </html>