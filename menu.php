<link href="menuStyle.css" rel="stylesheet" />
<?php 
include 'includes/header.php';
include 'includes/add_to_cart.php';
?>

<!--contact text-->
<section class="about" id="about">
  <h1 class="heading"> <span>Our</span> Menu </h1>
  <div class="about-us-row">
      <div class="about-us-content">
          <h3>Discover Our Coffee Haven</h3>
          <p>Welcome to our Coffee Haven, where every product is a curated
          <br> masterpiece designed to elevate your coffee experience. 
          <br> Immerse yourself in the rich aroma of our premium coffee beans, 
          <br> sourced from the finest regions.
          <br> Elevate your brewing ritual with our selection of coffee filters,
          <br> each chosen for its ability to enhance the purity of flavor.
          <br> Unleash the power of precision with our French press,
          <br> a timeless tool for crafting the perfect brew.
          <br> For those who appreciate the art of grinding,
          <br> our coffee grinder selection ensures a grind tailored to your taste.
          <br> This is more than a menu; it's an invitation to explore the
          <br> world of exceptional coffee, one sip at a time!
          </p>
          <button id="btn" onclick="window.location.href='cart.php'">Check Your Cart</button>
  </div>
</section>

</div> <!-- End of all-content div -->

<!--products section-->
<section class="products" id="products">
  <h1 class="products-heading">Our<span> Products</span></h1>
  <div class="products-container">
    <!--beans-->
    <div class="box">
        <img src="assets/img/coffee products/coffee bag png.png" alt="" />
        <h3 id="Brazilian-Espresso">Brazilian Espresso</h3>
        <div class="content">
          <span id="Brazilian-Espresso-Price">€20</span>


          <form method="POST">
            <input type="hidden" name="product_name" value="Brazilian Espresso">
            <input type="hidden" name="product_price" value="20">
            <button class="products-btn" type="submit">Add To Cart</button>
          </form>


        </div>
    </div>

    <div class="box">
        <img src="assets/img/coffee products/coffee bag png.png" alt="" />
        <h3 id="Italian-Espresso">Italian Espresso</h3>
        <div class="content">
          <span id="Italian-Espresso-Price">€20</span>

          <form method="POST">
            <input type="hidden" name="product_name" value="Italian Espresso">
            <input type="hidden" name="product_price" value="20">
            <button class="products-btn" type="submit">Add To Cart</button>
          </form>
          
        
        </div>
    </div>

    <div class="box">
        <img src="assets/img/coffee products/coffee bag png.png" alt="" />
        <h3 id="Columbian-Espresso">Columbian Espresso</h3>
        <div class="content">
          <span id="Columbian-Espresso-Price">€20</span>
          
          <form method="POST">
            <input type="hidden" name="product_name" value="Columbian Espresso">
            <input type="hidden" name="product_price" value="20">
            <button class="products-btn" type="submit">Add To Cart</button>
          </form>
          
        
        </div>
    </div>

    <div class="box">
        <img src="assets/img/coffee products/coffee bag png.png" alt="" />
        <h3 id="Spanish-Espresso">Spanish Espresso</h3>
        <div class="content">
          <span id="Spanish-Espresso-Price">€20</span>


          <form method="POST">
            <input type="hidden" name="product_name" value="Spanish Espresso">
            <input type="hidden" name="product_price" value="20">
            <button class="products-btn" type="submit">Add To Cart</button>
          </form>


        </div>
    </div>

    <!--accessories-->
    <div class="box">
        <img src="assets/img/coffee products/coffee-cup.png" alt="" />
        <h3 id="Coffee-Cup">Coffee Cup</h3>
        <div class="content">
          <span id="Coffee-Cup-Price">€10</span>
          

          <form method="POST">
            <input type="hidden" name="product_name" value="Coffee Cup">
            <input type="hidden" name="product_price" value="10">
            <button class="products-btn" type="submit">Add To Cart</button>
          </form>


        </div>
    </div>

    <div class="box">
        <img src="assets/img/coffee products/coffee-grinder.png" alt="" />
        <h3 id="Coffee-Grinder">Coffee Grinder</h3>
        <div class="content">
          <span id="Coffee-Grinder-Price">€30</span>
                    

          <form method="POST">
            <input type="hidden" name="product_name" value="Coffee Grinder">
            <input type="hidden" name="product_price" value="30">
            <button class="products-btn" type="submit">Add To Cart</button>
          </form>


        </div>
    </div>

    <div class="box">
        <img src="assets/img/coffee products/french-press.png" alt="" />
        <h3 id="French-Press">French Press</h3>
        <div class="content">
          <span id="French-Press-Price">€15</span>
                              

          <form method="POST">
            <input type="hidden" name="product_name" value="French Press">
            <input type="hidden" name="product_price" value="15">
            <button class="products-btn" type="submit">Add To Cart</button>
          </form>


        </div>
    </div>

    <div class="box">
        <img src="assets/img/coffee products/portafilter.png" alt="" />
        <h3 id="Portafilters">Portafilters</h3>
        <div class="content">
          <span id="Portafilters-Price">€40</span>
                                        

          <form method="POST">
            <input type="hidden" name="product_name" value="Portafilters">
            <input type="hidden" name="product_price" value="40">
            <button class="products-btn" type="submit">Add To Cart</button>
          </form>


        </div>
    </div>


  </div>

</section>

<?php include 'includes/footer.php'; ?>