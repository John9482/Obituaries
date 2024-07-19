<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="John Doe - Obituary" />
    <meta property="og:description" content="A tribute to John Doe, who passed away peacefully at his home." />
    <meta property="og:image" content="URL_TO_IMAGE" />
    <meta property="og:url" content="URL_OF_THE_PAGE" />
    <title>Obituary Form</title>
    <link rel="stylesheet"  href="styles.css">
    <link rel="canonical" href="{{ request.build_absolute_uri }}">

</head>
<body>
    <header>
    <h2> <img src="photo2.jpg" alt="">
        IN OUR LOVING MEMORY OBITUARY</h2>
    
    </header>
    <main>
    <div class="form-container">
        
        <form action="submit.php" method="POST" >
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required autocomplete="off">

            <br><br>

        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" required><br><br>

        <label for="date_of_death">Date of Death:</label>
        <input type="date" id="date_of_death" name="date_of_death" required><br><br>

        <label for="content">Content:</label><br>
        <textarea id="content" name="content" rows="4" cols="50" required></textarea><br><br>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required autocomplete="off"><br><br>
            <button type="submit">Submit</button>
        </form>
    </div>
    </main>

   <p >
   <footer class="footer">
        <div class="social-media">
            <a href="https://www.facebook.com/yourpage" target="_blank">Facebook</a>
            <a href="https://twitter.com/yourprofile" target="_blank">Twitter</a>
            <a href="https://www.instagram.com/yourprofile" target="_blank">Instagram</a>
            <a href="https://www.linkedin.com/in/yourprofile" target="_blank">LinkedIn</a>
        </div>
        <div class="location">
            <p>123 Memory Lane, Peaceful City, Country</p>
        </div>
        <div class="contact-info">
            <p>Email: <a href="mailto:jmengo9482@gmail.com">jmengo9482@gmail.com</a></p>
            <p>Phone: <a href="tel:+254702932333">0702932333</a></p>
        </div>
        <div>
            <p>&copy; 2024 Your Obituary Website. All Rights Reserved.</p>
        </div>
        
    </footer>
   </p>
    <script>form_validation.js</script>
    

</body>
</html>
