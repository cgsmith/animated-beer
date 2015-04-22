<h1>My Storefront</h1>
<?php
// Pulling in a library - this would be everywhere
require 'lib/myLibrary.php';

// loop over our inventory for the main page
// @todo: remove comments - this is a legacy app
echo '<ul>';
foreach ($inventory as $item => $price) {
  echo '<li>' . $item . ' sells for ';
  echo '$' . $price/100;
  echo ' <a href="buyit.php?item='  . $item . '">Buy it!</a></li>';
}
echo '</ul>';
