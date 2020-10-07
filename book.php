<?php
include 'layout/include/header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
?>
<!--    End navbar    -->

<!-- Start show book -->
<div class="books">
    <div class="container">
        <div class="book">
            <div class="row">
                <?php
                $query = "SELECT * FROM books WHERE id='$id'";
                $result = mysqli_query($con, $query);
                $row = mysqli_fetch_assoc($result);
                ?>
                <div class="col-md-4">
                    <div class="book-cover">
                        <img src="uploads\bookCovers/<?php echo $row['bookCover']; ?>" alt=" Book cover">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="book-content">
                        <h4><?php echo $row['bookTitle']; ?></h4>
                        <hr>
                        <p><?php echo $row['bookContent']; ?></p>
                        <button class="custom-btn" style="width: 160px">
                            <a href="uploads\books/<?php echo $row['book']; ?>" download>تحميل الكتاب</a>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End show book -->

<!-- Start Related Books -->
<div class="related-books">
    <div class="container">
        <h4>كتب ذات صلة</h4>
        <hr>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-6">
                <div class="related-book text-center">
                    <div class="cover">
                        <a href="#">
                            <img src="images/book1.jpg" alt="Book Cover">
                        </a>
                    </div>
                    <div class="title">
                        <h5>
                            <a href="#">عنوان الكتاب</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="related-book text-center">
                    <div class="cover">
                        <a href="#">
                            <img src="images/book1.jpg" alt="Book Cover">
                        </a>
                    </div>
                    <div class="title">
                        <h5>
                            <a href="#">عنوان الكتاب</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="related-book text-center">
                    <div class="cover">
                        <a href="#">
                            <img src="images/book1.jpg" alt="Book Cover">
                        </a>
                    </div>
                    <div class="title">
                        <h5>
                            <a href="#">عنوان الكتاب</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="related-book text-center">
                    <div class="cover">
                        <a href="#">
                            <img src="images/book1.jpg" alt="Book Cover">
                        </a>
                    </div>
                    <div class="title">
                        <h5>
                            <a href="#">عنوان الكتاب</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="related-book text-center">
                    <div class="cover">
                        <a href="#">
                            <img src="images/book1.jpg" alt="Book Cover">
                        </a>
                    </div>
                    <div class="title">
                        <h5>
                            <a href="#">عنوان الكتاب</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="related-book text-center">
                    <div class="cover">
                        <a href="#">
                            <img src="images/book1.jpg" alt="Book Cover">
                        </a>
                    </div>
                    <div class="title">
                        <h5>
                            <a href="#">عنوان الكتاب</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="related-book text-center">
                    <div class="cover">
                        <a href="#">
                            <img src="images/book1.jpg" alt="Book Cover">
                        </a>
                    </div>
                    <div class="title">
                        <h5>
                            <a href="#">عنوان الكتاب</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="related-book text-center">
                    <div class="cover">
                        <a href="#">
                            <img src="images/book1.jpg" alt="Book Cover">
                        </a>
                    </div>
                    <div class="title">
                        <h5>
                            <a href="#">عنوان الكتاب</a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Related Books -->

<!-- Start Footer -->
<?php
include 'layout/include/footer.php';
?>