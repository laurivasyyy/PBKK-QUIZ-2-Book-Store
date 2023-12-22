<div class="container">
    <ul class="list-group">
        <?php foreach ($books as $book): ?>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-sm-2">
                        <img class="img-fluid" src="<?php echo base_url("/assets/img/covers/" . $book['cover_url']); ?>" alt="Book Cover" style="max-width: 100%;">
                    </div>
                    <div class="col-sm-5">
                        <h5 class="card-title">
                            <a href="<?php echo base_url("books/" . $book['id']); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo $book['title']; ?>">
                                <?php echo $book['title']; ?>
                            </a>
                        </h5>
                        <p class="card-text"><?php echo $book['author']; ?></p>
                        <p class="card-text font-weight-bold">IDR <?php echo $book['unit_price']; ?></p>
                        <div class="text-center">
                            <a href="<?php echo base_url("cart/addToCart/" . $book['id']); ?>" class="btn btn-outline-primary btn-block">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    <div class="row mt-3">
        <div class="col text-center">
            <p><?php if (isset($links)) echo $links; ?></p>
        </div>
    </div>
</div>
