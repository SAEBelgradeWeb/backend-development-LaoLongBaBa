<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Department store</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/">Home</a></li>
        <li><a href="/cart_list"><span class="glyphicon glyphicon-shopping-cart" style="font-size:25px"></span>
            <?php if (!empty($_SESSION['cart'])): ?>
                <span class="badge" style="background-color:red;margin-top: -45px"><?php echo count($_SESSION['cart']) ?></span>
            <?php endif; ?>
            </a></li>

      </ul>
    </div>
  </div>
</nav>
