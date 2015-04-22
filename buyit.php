<h1>Cart</h1>
<?php
require 'lib/myLibrary.php';
?>
<p>Your cart consists of <?=$_GET['item']. ' for $' . $inventory[$_GET['item']]/100;?></p>
