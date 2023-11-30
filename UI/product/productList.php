<?php
include "function/productListFun.php";
?>

<h5>Product List Page</h5>
<a href="index.php?page=product-create">
    <button type="button" class="btn btn-outline-primary">Product Create</button>
</a><br><br>

<div class="container border border-dark p-5 rounded shadow-sm">
    <table class="table  border border-dark p-5">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
foreach ($products as $key => $product) {?>
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

                <td>
                    <a href="index.php?page=product-edit&action=<?php echo $product['id'] ?>">
                        <button type="button" class="btn btn-outline-primary">Edit</button>
                    </a>
                    <button type="button" class="btn btn-outline-primary">Delete</button>
                </td>
            </tr>
            <?php
}
?>

        </tbody>

    </table>
</div>