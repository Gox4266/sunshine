<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="style/recipt.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous"  />
    
    <title>Sunshine Coffee</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="#">Sunshine <span>Coffee</span></a>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="register.html">Register</a></li>
                <li><a href="index.html">Login</a></li>
                <li><a href="#shop">Shop</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <h2>Sunshine Coffee</h2>
        <p>Would you like to start the day with a nice coffee?</p>
    </div>

<!-- ===================================================================================================================================== -->
<button id="toggleButton" class="toggle-button">☰</button>
<div id="hoverPage" class="hover-page">
    <form method="post" action="saveorder.php" class="np">
        <h3>Order Your Coffee</h3>
        <label for="tableNo">Table Number:</label>
        <!-- <input type="text" id="tableNo" name="table_no" required> -->
        <select name="table_no" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br>
        <br>
        <div class="coffee-group">
            <input type="checkbox" id="espresso" name="coffee_types[]" value="Caramel Macchiato">
            <label for="espresso" class="hl">Caramel Macchiato</label>
            <label for="espresso_quantity">:</label>
            <input type="number" id="espresso_quantity" name="quantities[]" min="1" class="lb">
        </div>       
        <div class="coffee-group">
            <input type="checkbox" id="latte" name="coffee_types[]" value="Flat White">
            <label for="latte" class="hl">Flat White</label>
            <label for="latte_quantity">:</label>
            <input type="number" id="latte_quantity" name="quantities[]" min="1" class="lb">
        </div>      
        <div class="coffee-group">
            <input type="checkbox" id="cappuccino" name="coffee_types[]" value="Chocolate Frappucino">
            <label for="cappuccino" class="hl">Chocolate Frappucino</label>
            <label for="cappuccino_quantity">:</label>
            <input type="number" id="cappuccino_quantity" name="quantities[]" min="1" class="lb">
        </div>
        <div class="coffee-group">
            <input type="checkbox" id="cappuccino" name="coffee_types[]" value="Frappe">
            <label for="cappuccino" class="hl">Frapppe</label>
            <label for="cappuccino_quantity">:</label>
            <input type="number" id="cappuccino_quantity" name="quantities[]" min="1" class="lb">
        </div>
        <div class="coffee-group">
            <input type="checkbox" id="cappuccino" name="coffee_types[]" value="Caffe Mocha">
            <label for="cappuccino" class="hl">Caffe Mocha</label>
            <label for="cappuccino_quantity">:</label>
            <input type="number" id="cappuccino_quantity" name="quantities[]" min="1" class="lb">
        </div>
        <div class="coffee-group">
            <input type="checkbox" id="cappuccino" name="coffee_types[]" value="Vanilla Frappucino">
            <label for="cappuccino" class="hl">Vanilla Frappucino</label>
            <label for="cappuccino_quantity">:</label>
            <input type="number" id="cappuccino_quantity" name="quantities[]" min="1" class="lb">
        </div>
        <div class="coffee-group">
            <input type="checkbox" id="cappuccino" name="coffee_types[]" value="White Chocolate Mocha">
            <label for="cappuccino" class="hl">White Chocolate Mocha:</label>
            <input type="number" id="cappuccino_quantity" name="quantities[]" min="1" class="lb">
        </div>
        <div class="coffee-group">
            <input type="checkbox" id="cappuccino" name="coffee_types[]" value="Ice Latte">
            <label for="cappuccino" class="hl">Ice Latte</label>
            <label for="cappuccino_quantity">:</label>
            <input type="number" id="cappuccino_quantity" name="quantities[]" min="1" class="lb">
        </div>
        <button type="submit" name="submit" class="hb">Order</button>
    </form>
</div>
<script>
document.getElementById('toggleButton').addEventListener('click', function() {
    document.getElementById('hoverPage').classList.toggle('hidden');
});
</script>

<!-- ===================================================================================================================================== -->
  
    <div class="menu" id="menu">
        <div class="menu-header">
            <h3>Menu</h3>
            <h4>Sunshine Coffee Menu</h4>
        </div>
        <div class="menu-content">
            <div class="hot-coffees">
                <div class="hot-coffees-image">
                    <img src="img/hot-coffees.jpg" alt="">
                </div>
                <div class="hot-coffees-body">
                    <h2>Hot Coffees</h2>
                    <label>Seasonal spice, cozy, comforting warmth.</label>
                </div>

            </div>
            <div class="cold-coffees">
                <div class="cold-coffees-image">
                <img src="img/cold-coffees.jpg" alt="">
                </div>
                <div class="cold-coffees-body">
                    <h2>Cold Coffees</h2>
                    <label>Chilled, creamy, chocolatey summer refreshment.
                    </label>
                </div>
            </div>
            <div class="frappucino-coffees">
                <div class="frappucino-coffees-image">
                    <img src="img/frappuccino.jpg" alt="">
                </div>
                <div class="frappucino-coffees-body">
                    <h2>Frappucino Coffees</h2>
                    <label>Fruity frappe, bright and energizing sip.            
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="shop" id="shop">
        <div class="shop-header">
            <h3>Shop</h3>
            <h4>Sunshine Coffee Drinks</h4>
        </div>
        <div class="shop-box">
            <div class="item-1">
                <div class="card">
                    <div class="card-image">
                        <img src="img/caramel-macchiato.jpg">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                        <label class="cash">200</label>
                        <h3>Caramel Macchiato</h3>
                        <label>Creamy, rich, classic espresso delight.</label>
                    </div>
                </div>
            </div>
            <div class="item-2">
                <div class="card">
                    <div class="card-image">
                        <img src="img/flat-white.png">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <label class="cash">280</label>
                        <h3>Flat White</h3>
                        <label>Chocolatey undertones, well-rounded satisfaction.</label>
                    </div>
                </div>
            </div>
            <div class="item-3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/chocolate-frappuccino.png">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                        <label class="cash">345</label>
                        <h3>Chocolate Frappucino</h3>
                        <label>Spicy warmth, exotic flavor twist.</label>
                    </div>
                </div>
            </div>
            <div class="item-4">
                <div class="card">
                    <div class="card-image">
                        <img src="img/frappe.jpg">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <label class="cash">379</label>
                        <h3>Frappe</h3>
                        <label>Velvety, caramel, comforting afternoon treat.</label>
                    </div>
                </div>
            </div>
            <div class="item-5">
                <div class="card">
                    <div class="card-image">
                        <img src="img/caffe-mocha.png">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                        <label class="cash">449</label>
                        <h3>Caffe Mocha</h3>
                        <label>Robust aroma, slightly bitter finish.</label>                   
                    </div>
                </div>
            </div>
            <div class="item-6">
                <div class="card">
                    <div class="card-image">
                        <img src="img/vanilla-frappuccino.jpg">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <label class="cash">499</label>
                        <h3>Vanilla Frappucino</h3>
                        <label>Bright, citrusy, vibrant morning boost..</label>                   
                    </div>
                </div>
            </div>
            <div class="item-7">
                <div class="card">
                    <div class="card-image">
                        <img src="img/white-chocolate-mocha.jpg">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                        <label class="cash">6.60</label>
                        <h3>White Chocolate Mocha</h3>
                        <label>Smooth, floral notes, refreshing sip.</label>
                    </div>
                </div>
            </div>
            <div class="item-8">
                <div class="card">
                    <div class="card-image">
                        <img src="img/ice-latte.jpg">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <label class="cash">5.65</label>
                        <h3>Ice Latte</h3>
                        <label>Bold and chocolatey, energizing kick.</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact" id="contact">
        <div class="contact-box">
            <div class="contact-image">
                <img src="img/bg-image.jpeg">
            </div>
        </div>
        <div class="contact-box">
            <div class="contact-body">
                <form action="feedback.php" method="post">
                    <h2>Contact Us</h2>
                    <div class="form-content">
                        <input type="email" name="email" required>
                        <span></span>
                        <label>Email</label>
                    </div>
                    <div class="form-content">
                        <input type="text" name="message" required>
                        <span></span>
                        <label>Write something for us.</label>
                    </div>
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-box">
            <div class="copyright">
                <label>Thank you for visiting us</label>
            </div>
            <div class="brand">
                <label>Sunshine <span>Coffee</span></label>
            </div>
        </div>
    </div>
</body>
</html>