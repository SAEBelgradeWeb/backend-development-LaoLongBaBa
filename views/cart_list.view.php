<?php require 'partials/header.view.php' ?>
<style>
    .container-div{
        width: 370px;
        height: 450px;
        background-color: #F0f0f0;
        float: left;
        margin-left: 10px;
        margin-top: 10px;
        padding: 20px;
    }
    .tab-title{
        text-align: center;
    }
</style>
<div class="container-fluid bg-info text-center">
    <div class="container">
        <h3>Cart List</h3>
        <div class="table-responsive">
            <table class="table">
            <!-- On rows -->
            <th class="active tab-title">Images</th>
            <th class="active tab-title">Name</th>
            <th class="active tab-title">Describe</th>
            <th class="active tab-title">Price</th>
            <th class="active tab-title">Num</th>
            <th class="active tab-title">Operation</th>
            <?php if (!empty($_SESSION['cart'])): ?>
            <?php foreach ($_SESSION['cart'] as $value): ?>
            <tr>
                <td class="warning"><img src="/<?php echo $value[0]->img ?>" style="width: 100px;height: 100px" alt=""></td>
                <td class="warning"> <?php echo $value[0]->name ?></td>
                <td class="warning">  <?php echo $value[0]->describe ?></td>
                <td class="warning"> <?php echo $value[0]->price ?> $</td>
                <td class="warning"> <?php echo $value[0]->num ?> </td>
                <td class="warning">
                    <a href="/plus_cart?c_id=<?php echo $value[0]->id ?>" class="btn btn-success" role="button">
                        <span class="glyphicon glyphicon-plus"></span></a>
                    <a href="/reduce_cart?c_id=<?php echo $value[0]->id ?>" class="btn btn-warning" role="button">
                        <span class="
glyphicon glyphicon-minus"></span></a>
                    <a onclick="return confirm('Are you sure you want to delete?')" href="/delete_cart?c_id=<?php echo $value[0]->id ?>" class="btn btn-danger" role="button">
                        <span class="
glyphicon glyphicon-trash"></span></a>
                </td>
            </tr>
                <!--      计算费用总计     -->
                <?php  $total += $value[0]->price*$value[0]->num; ?>
            <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td class="warning">Your shopping cart is empty. <a href="/">Go and add items</a></td>

                </tr>
            <?php endif; ?>
        </table>

    </div>

</div>
    <h3>Total： <?php echo $total; ?> $</h3>



<?php require 'partials/footer.view.php' ?>
