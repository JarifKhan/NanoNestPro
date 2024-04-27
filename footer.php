</main>
<!-- Main-->


<!-- Footer-->
<footer>
    <div class="footer-navigation">
        <div class="footer-navigation-left">
            <span class="footer-navigation-item-4 ">
                <div class="content-asset ">

                    <p class="toggle toggle-policies"><strong>POLICIES</strong></p>
                    <ul class="toggle-content" style="display: none;">
                        <li>
                            <a href="term.php">Terms of Use</a>
                        </li>
                        <li>
                            <a href="https://www.birkenstock.com/us/us-policies-privacy.html">Privacy Policy</a>
                        </li>
                        
                        <li>
                            <a href="https://www.birkenstock.com/us/us-privacy-do-not-sell-share.html">Do Not Sell or Share My Info</a>
                        </li>
                        <li>
                            <a href="return_policy.php">Return Policy</a>
                        </li>
                        <li>
                            <a href="https://www.birkenstock.com/us/us-policies-shipping.html">Shipping Policy</a>
                        </li>
                    </ul>
                </div>
            </span>
            <span class="footer-navigation-item-5 ">
                <div class="content-asset ">

                    <p class="toggle"><strong>ABOUT US</strong></p>
                    <ul class="toggle-content" style="display: none;">
                        
                        <li>
                            <a href="brands.php">Our Brands</a>
                        </li>
                        
                        <li>
                            <a href="outlets.php">Store Location</a>
                        </li>
                    </ul>
                </div>
            </span>
            <span class="footer-navigation-item-6 ">
                <div class="content-asset ">

                    <p class="toggle"><strong>CUSTOMER SERVICE</strong></p>
                    <ul class="toggle-content" style="display: none;">
                        <li>
                            <a href="contuct_us.php">Contact Us</a>
                        </li>
                        <li>
                            <a href="#">Order Status</a>
                        </li>
                        <li>
                            <a href="#">Payment Method</a>
                        </li>
                        
                        <li>
                            <a href="#">FAQ</a>
                        </li>
                    </ul>
                </div>
            </span>
        </div>


        <div class="content-asset footer-social center-social-item">

            <div class="footer-section footer-section-social">
                <ul class="icon-tile-list">
                    <li class="icon-tile">
                        <a href="https://www.instagram.com" target="_blank" aria-label="Instagram link">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li class="icon-tile">
                        <a href="https://twitter.com" target="_blank" aria-label="Twitter link">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                    </li>
                    <li class="icon-tile">
                        <a href="https://www.facebook.com" target="_blank" aria-label="Facebook link">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </li>
                    <li class="icon-tile">
                        <a href="https://www.pinterest.ph" target="_blank" aria-label="Pinterest link">
                            <i class="fa-brands fa-pinterest"></i>
                        </a>
                    </li>
                    <li class="icon-tile">
                        <a href="https://www.youtube.com" target="_blank" aria-label="YouTube link">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <!-- copyright footer -->


    <div class="footer-copyright-container us-region">
        <div class="content-asset ">
            <div class="footer-section footer-section-copyright">
                © 2024 Nenonest charizard for 3:00 AM
                <br>
                <br>
                <br>
                <a href="https://www.birkenstock.com/us/us-accessibility-policy.html" class="last-anchor">Accessibility Statement</a>
            </div>

        </div>
    </div>


    <!-- copyright footer -->


</footer>
<!-- Footer-->


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<!-- owl carousel js file -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>


<!-- custom javascript -->
<script src="index.js"></script>

<script>
    // JavaScript for handling search suggestions
    document.getElementById('searchInput').addEventListener('input', function() {
        var input = this.value;
        if (input.trim() !== '') {
            // Make an AJAX request to fetch post titles based on the input
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Update the suggestions card with the fetched data
                    document.getElementById('searchSuggestions').innerHTML = xhr.responseText;
                }
            };
            xhr.open('GET', 'search.php?q=' + input, true);
            xhr.send();
        } else {
            // Clear suggestions when the input is empty
            document.getElementById('searchSuggestions').innerHTML = '';
        }
    });
</script>




</body>

</html>