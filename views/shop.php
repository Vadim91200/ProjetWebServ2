<?php 

$res = getproduct();
?>
<div class="row shop-wthree-info text-center">
<?php 
for ($i=0; $i < count($res); $i++) { 
    
?>
    <div class="col-lg-3 shop-info-grid text-center mt-4">
        <div class="product-shoe-info shoe">
            <div class="men-thumb-item">
                <img src="<?= $res[$i]['picture']?>" class="img-fluid" alt="">
            </div>
            <div class="item-info-product">
                <h4>
                    <?= $res[$i]['product_name']?>
                </h4>
                <p>
                    Description : <?= $res[$i]['product_description']?>
                </p>
                <p>
                    Creation Date : <?= $res[$i]['creation_date']?>
                </p>
                <div class="product_price">
                    <div class="grid-price">
                        <span class="money"><?= $res[$i]['product_price']?> €</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php if ($i+1%3==0): ?>
</div>
<div class="col-lg-3 shop-info-grid text-center mt-4">
<?php endif ?>
<?php } ?> 
</div>