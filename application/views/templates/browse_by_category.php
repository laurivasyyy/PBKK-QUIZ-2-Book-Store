<div class="container-fluid mt-4">
    <div class="row">
        <?php foreach ($books_in_categories as $key => $category): ?>
            <?php if (!empty($category['books'])): ?>
                <?php foreach ($category['books'] as $book): ?>
                    <div class="col-md-3">
                        <div class="card mb-4 d-flex flex-column h-100">
                            <div class="card-body text-center">
                                <img class="card-img-top mx-auto d-block mb-3" src="<?php echo base_url("/assets/img/covers/" . $book['cover_url']); ?>" alt="Book Cover" style="max-width: 100%; height: auto;">
                                <h5 class="card-title">
                                    <a href="<?php echo base_url("books/" . $book['id']); ?>" style="word-wrap: break-word;" data-toggle="tooltip" data-placement="bottom" title="<?php echo $book['title']; ?>">
                                        <?php echo $book['title']; ?>
                                    </a>
                                </h5>
                                <p class="card-text"><?php echo $book['author']; ?></p>
                                <p class="card-text font-weight-bold">Category: <?php echo $category['name']; ?></p>
                                <div>
                                    <a href="<?php echo base_url("cart/addToCart/" . $book['id']); ?>" class="btn btn-outline-primary btn-block">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
