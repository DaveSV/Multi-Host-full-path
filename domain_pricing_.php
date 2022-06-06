<!DOCTYPE html><html>
<meta charset="utf-8" />
<head>

<title>Domain Pricing</title>
 
 
 </head>
  <body>
    <div>
    <?php


$data = file_get_contents("https://multihostexpress.com/api/domain-price?token=9DalAm6IZW7HK38YR9lc4UJ0542tIx1rKSP3GC0XeY6uD0t735b3o5f5nMizIWEFkN0L6TpdEDyoqiOFs");
$products = json_decode($data, true);
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