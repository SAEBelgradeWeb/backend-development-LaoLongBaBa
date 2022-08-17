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
</style>
<div class="container-fluid bg-info text-center">
    <div class="container">
        <h3>Commodity List</h3>
        <?php foreach ($commodity as $value): ?>
        <div class="container-div">
            <img src="/<?php echo $value->img ?>" style="width: 100%;height: 300px" alt="">
            <p>Name: <?php echo $value->name ?></p>
            <p>Describe: <?php echo $value->describe ?></p>
            <p>Price: <?php echo $value->price ?> $</p>
            <a href="/add_cart?c_id=<?php echo $value->id ?>">
            <button type="button" class="btn btn-info   " aria-label="Left Align">
                add to cart
                <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
            </button></a>
        </div>
        <?php endforeach; ?>
    </div>
    <br>
    <br>
</div>


<?php require 'partials/footer.view.php' ?>
