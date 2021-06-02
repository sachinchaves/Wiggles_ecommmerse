
<header>
   <div class="navSection ">
      <div class="siteContainer">
         <nav>
            <h1 class="logo">Wiggles</h1>
            <!-- NAV -->
            <div id="navBar" class="hide-s hide-m">
               <ul>
                  <li>
                  <a href="index.php?controller=pages&action=default">Home</a>
                  </li>
                  <li>
                    <a href="index.php?controller=pages&action=products">Products</a>
                  </li>
                  <li>
                    <a href="index.php?controller=pages&action=about">About</a>
                  </li>
                  <li>
                    <a href="index.php?controller=pages&action=about">Contact Us</a>
                  </li>
                  <li>
                    <a href="index.php?controller=cart&action=checkout"><i class="fas fa-shopping-cart"></i><span class="cartCount"><?=CartModel::getNumItemsInCart()?></span></a>
                  </li>
               </ul>
            </div>
            <!-- nav -->
            <div id="navFlyout" class="flyouts hide-l">
               <i class="fas fa-bars" aria-hidden="true"></i>
               <input type="checkbox">
               <div class="navigation">
                  <div class="items">
                    <ul>
                        <li>
                            <a href="index.php?controller=pages&action=default">Home</a>
                        </li>
                        <li>
                            <a href="index.php?controller=pages&action=products">Products</a>
                        </li>
                        <li>
                            <a href="index.php?controller=pages&action=about">About</a>
                        </li>
                        <li>
                            <a href="index.php?controller=pages&action=contact">Contact Us</a>
                        </li>
                        <li>
                            <a href="index.php?controller=cart&action=checkout"><i class="fas fa-shopping-cart"></i><span class="cartCount"><?=CartModel::getNumItemsInCart()?></span></a>
                        </li>
                    </ul>
                  </div>
               </div>
            </div>
         </nav>
      </div>
   </div>
</header>