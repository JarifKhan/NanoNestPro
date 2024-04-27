<?php

include("header.php");

?>


<div class="container fdgdf">
    <section class="contact-form">
        <h1 class="contact-form-title"><strong>Send us a message</strong></h1>
        <form action="#" method="post">
            <label for="name" class="form-label">Your Name:</label>
            <input type="text" id="name" name="name" class="form-input" required>

            <label for="email" class="form-label">Your Email:</label>
            <input type="email" id="email" name="email" class="form-input" required>

            <label for="message" class="form-label">Your Message:</label>
            <textarea id="message" name="message" class="form-textarea" rows="5" required></textarea>

            <button type="submit" class="form-button">Send</button>
        </form>
    </section>

    <section class="contact-info">
        <h2 class="contact-info-title">Contact Information</h2>
        <p class="contact-info-detail"><strong>Address:</strong> 123 Ecommerce St, City, Country</p>
        <p class="contact-info-detail"><strong>Phone:</strong> +1234567890</p>
        <p class="contact-info-detail"><strong>Email:</strong> info@example.com</p>
    </section>
</div>

<?php

include("footer.php");

?>
</body>
</html>
