<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<header>
        <a href="home.php"><img src="img/Logo.png" width="100px" ></a>
        <nav class="navbar">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="books.php"> Books</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Contacts</a></li>
                <li class="search-bar">
                    <input type="text" placeholder="Search...">
                    <button><i class="fa fa-search"></i></button>
                </li>
            </ul>
        </nav>

    </header>
    <section class="hero-section">
        <img src="img/bg.jpg" alt="">
        <div class="content">
            <div class="left-container">
                <div class="left-content">
                    <h4>Discover Worlds Beyond Words</h4>
                    <h1>Read, learn, and embark on new adventures</h1>
                    <h5>
                    Step into a universe where every page unlocks a new journey, every chapter reveals hidden treasures, and every story becomes a gateway to endless possibilities. 
                    Explore the richness of human imagination, immerse yourself in diverse cultures, and let books be your guide to worlds yet untold.
</h5>
                    <button class="contact-button"><a href="login.php">Login</a></button>
                    <button class="explore-button"><a href="signup.php">Join</a></button>
                </div>
            </div> 
        </div>
    </section>

    <div class="bestselling-books">
        <h1>Bestselling Books</h1>
        <div class="books-container">
            <div class="book">
                <img src="img/book.jpg" alt="Book 1">
                <div class="book-title">Angry God</div>
                <div class="book-price">$1.30 <span>$3.95</span></div>
            </div>
            <div class="book">
                <img src="img/book.jpg" alt="Book 2">
                <div class="book-title">Dark in Death</div>
                <div class="book-price">$14.20</div>
            </div>
            <div class="book">
                <img src="img/book.jpg" alt="Book 3">
                <div class="book-title">The Last Sister</div>
                <div class="book-price">$25.99 - $28.95</div>
            </div>
            <div class="book">
                <img src="img/book.jpg" alt="Book 4">
                <div class="book-title">The Last Hawk</div>
                <div class="book-price">$16.59</div>
            </div>
            <div class="book">
                <img src="img/book.jpg" alt="Book 5">
                <div class="book-title">Think Like a Monk</div>
                <div class="book-price">$1.75</div>
            </div>
        </div>
        <a href="books.php" class="view-all">View All</a>
    </div>

    <footer class="container">
    <div class="social">
        <ul>
            <li><img class="facebook" src="img/facebook.png"></li>
            <li><img class="instagram" src="img/instagram.png"></li>
            <li><img class="whatsapp" src="img/whatsapp.png"></li>
            <li><img class="twitter" src="img/twitter.png"></li>
        </ul>
    </div>
    <p>&copy; 2025 AlKitab. All Rights Reserved.</p>
</footer>
</body>
</html>