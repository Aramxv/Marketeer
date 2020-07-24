<!-- Top Sale Section-->
<?php
    // The getData() Method will
    // return the data into product_shuffle variable
    $product_shuffle = $product->getAllData(); 
?>

<section id="top-sale">
                   <div class="container py-5">
                       <h4 class="font-rubik font-size-20">Top Sale</h4>
                       <hr>
                       <!-- Owl Caraousel-->
                       <div class="owl-carousel owl-theme" >

                           <?php 
                            foreach ($product_shuffle as $item) {
                           ?>
                           <div class="item py-2 m-2">
                               <div class="product font-rale">
                                   <a href="#"><img src="<?php echo $item['item_image'] ?? ".assets/products/vitality-classic.png"; ?>" class="img-fluid" style="width:250px;height:250px;"></a>
                                   <div class="text-center">
                                       <h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
                                       <div class="rating text-warning font-size-12">
                                           <span><i class="fas fa-star"></i></span>
                                           <span><i class="fas fa-star"></i></span>
                                           <span><i class="fas fa-star"></i></span>
                                           <span><i class="fas fa-star"></i></span>
                                           <span><i class="far fa-star"></i></span>
                                       </div>
                                       <div class="price py-2 font-rubik">
                                           <span>₱<?php echo $item['item_price'] ?? 0.00 ?></span>
                                       </div>
                                       <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                   </div>
                               </div>
                           </div>
                            <?php
                            } // Closing foreach funtion 
                            ?>
                       </div>
                       <!-- //!Owl Caraousel-->
                   </div>
               </section>
               <!-- //!Top Sale Section-->