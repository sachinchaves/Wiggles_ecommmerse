<div class="nav">
    <a href="index.php?controller=pages&action=default">Home</a>
    <a href="index.php?controller=pages&action=about">About</a>
    <a href="index.php?controller=pages&action=login">Login</a>
    <a href="index.php?controller=pages&action=products">Products</a>
</div>
<div class="pageHeader">
    <div class="wrapper">
        <p>Number of Items In Cart: <a href="index.php?controller=cart&action=checkout"><?=CartModel::getNumItemsInCart()?></a></p>
    </div>
</div>