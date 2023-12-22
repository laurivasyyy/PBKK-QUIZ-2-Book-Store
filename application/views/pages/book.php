<div class="container mt-4">
    <div class="row">
        <div class="col-lg-4">
            <div class="book-cover">
                <img src="<?php echo base_url("assets/img/covers/" . $book['cover_url']); ?>" class="img-fluid" alt="Book Cover">
            </div>
        </div>

        <div class="col-lg-8">
            <div class="book-details">
                <h1 class="mb-3"><?php echo $book['title']; ?></h1>
                <h4 class="mb-4"><?php echo $book['author']; ?></h4>
                <p class="text-justify"><?php echo $book['description']; ?></p>

                <?php if (isset($statistics)) { ?>
                    <div class="card mt-3">
                        <div class="card-header">Visitor Statistics</div>
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">Total Views</h5>
                            <h1 class="font-weight-bold"><?php echo $statistics['total_views']; ?></h1>
                            <canvas id="chartContainer" style="height: 10px;"></canvas> 
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="card mt-3">
                        <div class="card-header">Shopping Details</div>
                        <div class="card-body">
                            <p class="card-text text-right font-weight-bold">
                            <?php
                            if (isset($item['unit_price'])) {
                                echo 'IDR ' . number_format($item['unit_price'], 3, ',', '.');
                            } else {
                                echo 'IDR 100.000';
                            }
                            ?>
                            </p>
                            <?php if ($book['qty'] > 0) { ?>
                                <h5 class="card-title text-success">In stock.</h5>
                            <?php } else { ?>
                                <h5 class="card-title text-danger">Out of stock.</h5>
                            <?php } ?>
                            <p class="card-text">Ships from and sold by Bookstore.com.</p>
                            <hr class="my-4">
                            <?php if ($book['qty'] > 0) { ?>
                                <form action="<?php echo base_url('cart/addToCart/' . $book['id']); ?>" method="post" class="form-inline">
                                    <div class="form-group">
                                        <label for="inputPassword6">Quantity</label>
                                        <input type="number" name="qty" min="1" value="1" max="<?php echo $book['qty']; ?>" class="ml-2 form-control form-control-sm" />
                                    </div>
                                    <div class="form-group ml-3">
                                        <button type="submit" class="btn btn-primary">Add to cart</button>
                                    </div>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
