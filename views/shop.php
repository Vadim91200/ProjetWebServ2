<?php
    $res = getproduct()
    ?>
    <!-- //banner-->
    <!--/banner-bottom -->
    <section class="banner-bottom py-5">
        <div class="container py-5">
            <h3 class="title-wthree mb-lg-5 mb-4 text-center">Shop Now</h3>
            <!--/row-->
            while(list($product_id,$image,$product_name,$price)=mysqli_fetch_array($result))
                        {
                        echo "<tr><td><img src='../product_images/$image' style='width:50px; height:50px; border:groove #000'></td><td>$product_name</td>
                        <td>$price</td>
                        <td>

                        <a class=' btn btn-success' href='clothes_list.php?product_id=$product_id&action=delete'>Delete</a>
                        </td></tr>";
                        }

                
            <div class="row shop-wthree-info text-center">
                <div class="col-lg-3 shop-info-grid text-center mt-4">
                    <div class="product-shoe-info shoe">
                        <div class="men-thumb-item">
                            <img src=<?php $res['product_image']?> class="img-fluid" alt="">
                        </div>
                        <div class="item-info-product">
                            <h4>
                            <?php $res['product_description']?>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money"><span class="line">$<?php $res['product_price']?></span> $675.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
           
            </div>
            <nav aria-label="Page navigation example mt-5">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">Previous</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- /banner-bottom -->

    <script type="text/javascript" >
    // L'image img#image
    var image = document.getElementById("image");
 // La fonction previewPicture
 var previewPicture  = function (e) {

    // e.files contient un objet FileList
    const [picture] = e.files

    // "picture" est un objet File
    if (picture) {

        // L'objet FileReader
        var reader = new FileReader();

        // L'événement déclenché lorsque la lecture est complète
        reader.onload = function (e) {
            // On change l'URL de l'image (base64)
            image.src = e.target.result
        }

        // On lit le fichier "picture" uploadé
        reader.readAsDataURL(picture)

    }
}
</script>
</body>

</html>
