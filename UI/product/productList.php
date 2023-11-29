<?php
    include "function/productListFun.php";
?>

<h5>Product List Page</h5>
<a href="index.php?page=product-create">
<button type="button" class="btn btn-outline-primary">Product Create</button>
</a><br><br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($products as $key=> $product){ ?>
        <tr>
        <td><?php 
        echo $product['id'];
        ?></td>
        <td><?php 
        echo $product['name'];
        ?></td>
        <td><?php 
        echo $product['price'];
        ?></td>
        <td><?php 
        echo $product['description'];
        ?></td>
        </tr>
    <?php
    }
    ?>
    
  </tbody>

</table>