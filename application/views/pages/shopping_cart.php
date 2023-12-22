<div class="container mt-2" id="shopping-cart-container">
    <h1>Shopping Cart</h1>
    <?php if ($items == NULL) { ?>
        <h5><p class="mt-5 text-center">No items added to the shopping cart!</p></h5>
    <?php } ?>
    <div class="row">
        <?php if ($items != NULL) { ?>
            <?php foreach ($items as $item): ?>
                <div class="col-12 shopping-cart-item">
                    <div class="card mt-4" style="width:100%">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <img style="max-width:100%;" src="<?php echo base_url("assets/img/covers/" . $item['cover_url']); ?>" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="col-10">
                                    <h5 class="card-title"><?php echo $item['title']; ?></h5>
                                    <p class="card-text"><?php echo $item['author']; ?></p>
                                    <?php $formattedUnitPrice = 'IDR ' . number_format($item['unit_price'], 3, ',', '.'); ?>
                                    <p class="card-text text-right font-weight-bold price"><?php echo $formattedUnitPrice; ?></p>

                                    <p class="card-text text-right align-right font-weight-bold">
                                        <?php echo form_open('cart/update/' . $item['id'], 'class="form"'); ?>
                                        <?php echo "Quantity : " ?></p>
                                    <input type="number" name="qty" min="1" value="<?php echo $item['bqty']; ?>" max="<?php echo $item['qty']; ?>" style="width:5em;" class="ml-2 form-control form-control-sm"/>
                                    <hr class="my-4">
                                    <div class="text-right button-container">
                                        <button type="submit" class="btn btn-primary btn update-btn">Add More</button>
                                        </form>
                                        <a href="<?php echo base_url("cart/remove/" . $item['id']); ?>" class="btn btn-danger btn remove-btn">Delete Item</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php } ?>
    </div>
</div>

<style>
    .remove-btn,
    .update-btn {
        display: none;
    }

    .shopping-cart-item {
        position: relative;
    }

    .price {
        font-size: 30px;
    }

    .button-container {
        position: absolute;
        bottom: 0;
        right: 0;
    }

    .shopping-cart-item:hover .remove-btn,
    .shopping-cart-item:hover .update-btn {
        display: inline-block;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var shoppingCartItems = document.querySelectorAll(".shopping-cart-item");

        shoppingCartItems.forEach(function (item) {
            item.addEventListener("mouseover", function () {
                var removeBtn = this.querySelector(".remove-btn");
                var updateBtn = this.querySelector(".update-btn");

                if (removeBtn && updateBtn) {
                    removeBtn.style.display = "inline-block";
                    updateBtn.style.display = "inline-block";
                }
            });

            item.addEventListener("mouseout", function () {
                var removeBtn = this.querySelector(".remove-btn");
                var updateBtn = this.querySelector(".update-btn");

                if (removeBtn && updateBtn) {
                    removeBtn.style.display = "none";
                    updateBtn.style.display = "none";
                }
            });
        });
    });
</script>
