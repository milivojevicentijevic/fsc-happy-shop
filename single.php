<?php include 'partials/header.php'; ?>

<div class="container single py-5">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                    Categories
                </button>
                <button type="button" class="list-group-item list-group-item-action">Phones</button>
                <button type="button" class="list-group-item list-group-item-action">Tablets</button>
                <button type="button" class="list-group-item list-group-item-action">Laptop</button>
                <button type="button" class="list-group-item list-group-item-action">Desktop</button>
            </div>
            <div class="list-group mt-3">
                <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                    Brands
                </button>
                <button type="button" class="list-group-item list-group-item-action">
                    <img src="img/logo1.png" alt=""> - <span>Extra 9% Off On Non Electronics </span>
                </button>
                <button type="button" class="list-group-item list-group-item-action">
                    <img src="img/logo2.png" alt=""> - <span>Extra 9% Off On Non Electronics </span>
                </button>
                <button type="button" class="list-group-item list-group-item-action">
                    <img src="img/logo3.png" alt=""> - <span>Extra 9% Off On Non Electronics </span>
                </button>
            </div>
        </div>
        <div class="col-md-8 border rounded-lg p-5">
            <div class="row">
                <div class="col-md-5">
                    <img class="img-fluid" src="img/tablet-samsung.jpg" alt="">
                </div>
                <div class="col-md-7">
                    <h2>Samsung tablet</h2>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, officiis! Magni ipsum voluptatum minus dolorum dolore iste ex. Enim quisquam autem voluptatibus doloribus. Odio et eius doloribus, voluptatum asperiores dicta?</p>
                    <hr>
                    <p class="lead">$199</p>
                    <p>Availability: <span>in stock</span> </p>
                    <hr>
                    <form>
                        <select>
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                        </select>
                        <button class="btn btn-primary">Add to cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>