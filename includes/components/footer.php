    
    <section>
        <div class="loader-wrapper">
            <span class="loader"><span class="loader-inner"></span></span>
            <h2 style="font-family: arial;">Tasty Indeed</h2>
        </div>
        <div class="wrapper footer">
            <div class="left">
                <div class="flogo">
                    <img src="includes/images/logo.png" alt="logo" width="110px">
                    <h2>Tasty Indeed</h2>
                </div>
                
                <p>The only thing we're serious about is food.</p>
               
            </div>
            <div class="center">
                <h2 class="list-title">Menu Link</h2>
                <ul class="list-items">
                    <li> <a href="./starters.php">Starter</a> </li>
                    <li> <a href="./soup.php">Soup</a> </li>
                    <li> <a href="./drinks.php">Drink </a> </li>
                    <li> <a href="./maincourse.php">Main Course</a> </li>
                    <li> <a href="./desserts.php">Dessert</a> </li>
                </ul>
            </div>
            <div class="right">
                
                <div class="links">
                    <h2 class="list-title">Important links</h2>
                    <ul class="list-items">
                        <li> <a href="./contactus.php">Contact Us</a> </li>
                        <li> <a href="./booktable.php">Book a Table </a> </li>
                        <li> <a href="./aboutus.php">About Us</a> </li>
                    </ul>
                    <div class="social-footer">
                        <a href="#"> <img src="https://img.icons8.com/bubbles/50/000000/facebook-f.png" alt=""></a>
                        <a href="#"> <img src="https://img.icons8.com/bubbles/50/000000/instagram-new.png" alt=""></a>
                        <a href="#"> <img src="https://img.icons8.com/bubbles/50/000000/twitter.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function fadeOutEffect() {
    var fadeTarget = document.querySelector('.loader-wrapper');
    var fadeEffect = setInterval(function () {
        if (!fadeTarget.style.opacity) {
            fadeTarget.style.opacity = 1;
        }
        if (fadeTarget.style.opacity > 0) {
            fadeTarget.style.opacity -= 0.1;
        } else {
            clearInterval(fadeEffect);
            var loader = document.querySelector('.loader-wrapper');
            loader.style.display = "none";
            
        }
    }, 100);
}

window.addEventListener('load', fadeOutEffect);
    </script>
    <script src="./includes/js/config.js"></script>
    <script src="./includes/js/script.js"></script>
    
</body>
</html>