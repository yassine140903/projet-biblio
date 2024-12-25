<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="books.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const books = document.querySelectorAll(".book-card");
            const booksPerPage = 6;
            const paginationContainer = document.querySelector(".pagination");

            function showPage(page) {
                const start = (page - 1) * booksPerPage;
                const end = start + booksPerPage;

                books.forEach((book, index) => {
                    book.style.display = index >= start && index < end ? "block" : "none";
                });

                document.querySelectorAll(".pagination a").forEach((link) => {
                    link.classList.remove("active");
                });
                document.querySelector(`.pagination a[data-page='${page}']`).classList.add("active");
            }

            function createPagination() {
                const totalPages = Math.ceil(books.length / booksPerPage);

                for (let i = 1; i <= totalPages; i++) {
                    const pageLink = document.createElement("a");
                    pageLink.textContent = i;
                    pageLink.setAttribute("data-page", i);
                    pageLink.href = "#";

                    pageLink.addEventListener("click", (e) => {
                        e.preventDefault();
                        showPage(i);
                    });

                    paginationContainer.appendChild(pageLink);
                }

                showPage(1);
            }

            createPagination();
        });
    </script>
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

    <div class="my-books">
        <div class="categories">
            <select>
                <option>All Categories</option>
                <option>Fiction</option>
                <option>Biography</option>
                <option>Science</option>
            </select>
        </div>
        <div class="books-grid">
            <div class="book-card">
                <img src="img/book.jpg" alt="Warren Buffett">
                <div class="book-content">
                    <div class="book-title">Warren Buffett</div>
                    <div class="book-description">Born in Nebraska in 1930, Warren Buffett demonstrated keen business abilities at a young age...</div>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
            <div class="book-card">
                <img src="img/book.jpg" alt="True Experiment">
                <div class="book-content">
                    <div class="book-title">True Experiment</div>
                    <div class="book-description">Born and raised in a Hindu merchant caste family in coastal Gujarat, India...</div>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
            <div class="book-card">
                <img src="img/book.jpg" alt="Charlotte's Web">
                <div class="book-content">
                    <div class="book-title">Charlotte's Web</div>
                    <div class="book-description">Charlotte's Web is a children's novel by American author E. B. White...</div>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
            <div class="book-card">
                <img src="img/book.jpg" alt="The Dhoni Touch">
                <div class="book-content">
                    <div class="book-title">The Dhoni Touch</div>
                    <div class="book-description">For over a decade, Mahendra Singh Dhoni has captivated the world of cricket...</div>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
            <div class="book-card">
                <img src="img/book.jpg" alt="Sky Runner">
                <div class="book-content">
                    <div class="book-title">Sky Runner</div>
                    <div class="book-description">Emelie Forsberg is a renowned Sky runner recognized worldwide for her incredible strength...</div>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
            <div class="book-card">
                <img src="img/book.jpg" alt="Nelson Mandela">
                <div class="book-content">
                    <div class="book-title">Nelson Mandela</div>
                    <div class="book-description">Nelson Rolihlahla Mandela (1918–2013) was a South African politician and activist...</div>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>

            <div class="book-card">
                <img src="img/book.jpg" alt="Nelson Mandela">
                <div class="book-content">
                    <div class="book-title">Nelson Mandela</div>
                    <div class="book-description">Nelson Rolihlahla Mandela (1918–2013) was a South African politician and activist...</div>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
        </div>
        <div class="pagination"></div>
        </div>
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