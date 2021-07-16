<?php include("includes/components/header.php"); ?>
<style>
    .header{
        position: absolute !important;
        background-color: transparent !important;
    }
    header{
        background-color: transparent;
        width: 100%;
    }
    .navbar{
        width: 100%;
        max-width: 110rem;
        margin: 0px auto;
        display: flex;
        flex-wrap: nowrap;
        height: 100%;
        justify-content: space-between;
        align-items: center;
        position: relative;
        z-index: 1;
    }
</style>
<!-- Hero Section -->
<section>
    <div class="heroSection">
            <div class="blackLayer"></div>
            <img src="includes/images/slide1.jpg" id="slides" class="high-res-image" alt="" role="presentation">
            <!-- <div class="heroImg"></div> -->
            <form action="search.php" method="POST">
            <div class="searchWrapper">
                <div class="searchBox">
                    <div class="searchIcon"><div class="glassIcon"><i class="searchSVG" color="#828282" size="18"><svg xmlns="http://www.w3.org/2000/svg" fill="#828282" width="18" height="18" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" ><title>Search</title>
                    <path d="M19.78 19.12l-3.88-3.9c1.28-1.6 2.080-3.6 2.080-5.8 0-5-3.98-9-8.98-9s-9 4-9 9c0 5 4 9 9 9 2.2 0 4.2-0.8 5.8-2.1l3.88 3.9c0.1 0.1 0.3 0.2 0.5 0.2s0.4-0.1 0.5-0.2c0.4-0.3 0.4-0.8 0.1-1.1zM1.5 9.42c0-4.1 3.4-7.5 7.5-7.5s7.48 3.4 7.48 7.5-3.38 7.5-7.48 7.5c-4.1 0-7.5-3.4-7.5-7.5z"></path>
                    </svg></i></div><input minlength="3" value="" placeholder="Search for cuisine or a dish" class="inputBox"  id="query" name="query" onclick="enterkey(this)">
                </div>
                </div>
            </div>
            </form>
    </div>
</section>


<!-- Our menu  -->
<section>
    <div class="wrapper ">
        <div class="menuItems">
            <h2 class="title">Our Menu</h2>
        </div>
        <div class="menuCat">
            <div class="card" onclick="itemMenu('starter')">
            <a href="#startersDrop"><div class="cardImg"></div></a> 
                <p>Starter</p>
            </div>
            <div class="card" onclick="itemMenu('soup')">
            <a href="#soupDrop"><div class="cardImg"></div></a> 
                <p>Soup</p>
            </div>
            <div class="card" onclick="itemMenu('drink')">
            <a href="#drinksDrop"><div class="cardImg"></div></a> 
                <p>Drink</p>
            </div>
            <div class="card" onclick="itemMenu('mainCourse')">
                <a href="#mainCourseDrop"><div class="cardImg"></div></a> 
                <p>Main Course</p>
            </div>

            <div class="card" onclick="itemMenu('dessert')">
            <a href="#dessertsDrop"><div class="cardImg"></div></a> 
                <p>Dessert</p>
            </div>
        </div> 
    </div>
</section>
<!-- drop down menu main course -->
<section id="mainCourseDrop">
    <div class="wrapper">
        <div style="text-align: center;" class="mainCourse itemCat" >
        <h3 class="title"style="padding-top:10px;">Main Course</h3>
        <section class="drop-menu">
        
    <div class="drop-down">
 
    <div class="unit">
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\biriyani.jpg" alt="">
            </div>
            <div class="write">
                <p>Biriyani</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\tandoori-chicken-.jpg" alt="">
            </div>
            <div class="write orange">
                <p >Tandoori Chicken</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\garlic-chicken-recipe-china-town-style.jpg" alt="">
            </div>
            <div class="write">
                <p>Chilli Chicken</p>
            </div>
            
        </div>
        <a href="./maincourse.php#non-veg" target="_blank"><button class="btn btn-view" >View More Non-Veg</button></a>
        
    </div>
    <div class="unit">
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\kadai-mushroom-recipe-1.jpg" alt="">
            </div>
            <div class="write ">
                <p >Kadai Mushroom</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\malai-kofta-recipe.jpg" alt="">
            </div>
            <div class="write orange">
                <p>Malai Kofta Curry</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\butter_nun.jpg" alt="">
            </div>
            <div class="write ">
                <p >Butter Nun</p>
            </div>
        </div>

        <a href="./maincourse.php#veg" target="_blank"><button class="btn btn-view" >View More Veg</button></a>
    </div>
    </div>
</section>
    </div>
        <!-- drop down desserts -->
<div style="text-align: center;" class="dessert itemCat" >
    <section id="dessertsDrop">
        <h3 class="title"style="padding-top:10px;">Desserts</h3>
        <div class="drop-menu">
            
            <div class="drop-down">
                <div class="unit">
                    <div class="one">
                        <div class="suby-1">
                            <img  src="includes\image2\rainbow-cake-featured-scaled.jpg" alt="">
                        </div>
                        <div class="write">
                            <p>Rainbow Unicorn Cake</p>
                        </div>
                    </div>
                    <div class="one">
                        <div class="suby-1">
                            <img  src="includes\image2\red.webp" alt="">
                        </div>
                        <div class="write orange">
                            <p >Red Velvet Cake</p>
                        </div>
                    </div>
                    <div class="one">
                        <div class="suby-1">
                            <img  src="includes\image2\Vanilla-Swiss-Roll-2929-2.jpg" alt="">
                        </div>
                        <div class="write">
                            <p>Vanilla-Swiss-Roll</p>
                        </div>
                        
                    </div>

                    <a href="./desserts.php" target="_blank"><button class="btn btn-view" >View More</button></a>
                </div>
                <div class="unit">
                    <div class="one">
                        <div class="suby-1">
                            <img  src="includes\image2\rose-kulfi-crumble-chocolat.jpg" alt="">
                        </div>
                        <div class="write ">
                            <p >Rose Kulfi</p>
                        </div>
                    </div>
                    <div class="one">
                        <div class="suby-1">
                            <img  src="includes\image2\Dove-Chocolate-Ice-Cream-6-scaled.jpg" alt="">
                        </div>
                        <div class="write orange">
                            <p>Dove Icecream</p>
                        </div>
                    </div>
                    <div class="one">
                        <div class="suby-1">
                            <img  src="includes\image2\blue.png" alt="">
                        </div>
                        <div class="write ">
                            <p >Blueberry Milkshake</p>
                        </div>
                    </div>

                    <a href="./desserts.php" target="_blank"><button class="btn btn-view" >View More</button></a>
                </div>
                <div class="unit">
                    <div class="one">
                        <div class="suby-1">
                            <img  src="includes\image2\rajbhog.jpg" alt="">
                        </div>
                        <div class="write ">
                            <p >Rajbhog</p>
                        </div>
                    </div>
                    <div class="one">
                        <div class="suby-1">
                            <img  src="includes\image2\milk-cake-462_1_1024x1024.png" alt="">
                        </div>
                        <div class="write orange">
                            <p>Milk Cake</p>
                        </div>
                    </div>
                    <div class="one">
                        <div class="suby-1">
                            <img  src="includes\image2\patisapta.recipe.jpg" alt="">
                        </div>
                        <div class="write ">
                            <p >Patishapta</p>
                        </div>
                    </div>

                    <a href="./desserts.php" target="_blank"><button class="btn btn-view" >View More</button></a>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Drop down Drinks -->
        <div style="text-align: center;" class="drink itemCat" >
        <section id="drinksDrop">
        <h3 class="title"style="padding-top:10px;">Drinks</h3>
        <div class="drop-menu">
<div class="drop-down">
    <div class="unit">
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\coffee.webp" alt="">
            </div>
            <div class="write">
                <p>Coffee</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\mango-juice-2.jpg" alt="">
            </div>
            <div class="write orange">
                <p >Mango Juice</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\Watermelon-Smoothie.jpg" alt="">
            </div>
            <div class="write">
                <p>Watermelon Smoothie</p>
            </div>
            
        </div>

        <a href="./drinks.php" target="_blank"><button class="btn btn-view">More Non-Alcoholic Drinks</button></a>
    </div>
    <div class="unit">
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\Blue-Lagoon-Mocktail-Tasty.jpg" alt="">
            </div>
            <div class="write ">
                <p >Blue Lagoon Mocktail</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\wine.jpg" alt="">
            </div>
            <div class="write orange">
                <p>Red Wine</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\Mimosa-with-Strawberry.jpg" alt="">
            </div>
            <div class="write ">
                <p >Mimosa </p>
            </div>
        </div>

        <a href="./drinks.php" target="_blank"><button class="btn btn-view">More Alcoholic Drinks</button></a>
    </div>
    </div>
</div>
</section>
        </div>



<!-- Drop down Soup -->

        <div style="text-align: center;" class="soup itemCat" >
        <section id="soupDrop">
        <h3 class="title"style="padding-top:10px;">Soup</h3>
        <div class="drop-menu">
        <div class="drop-down">
    <div class="unit">
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\avacado.jpg" alt="">
            </div>
            <div class="write">
                <p>Asparagus Cream Soup</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\beet.jpg" alt="">
            </div>
            <div class="write orange">
                <p >Russian Beetroot Soup</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\tomato.jpg" alt="">
            </div>
            <div class="write">
                <p>Tomato Soup</p>
            </div>
            
        </div>

        <a href="./soup.php" target="_blank"><button class="btn btn-view">View More Soup</button></a>
    </div>
    <div class="unit">
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\Boondi-Raita-1-of-4-500x500.jpg" alt="">
            </div>
            <div class="write ">
                <p >Boondi Raita</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\greek-salad-2.jpg" alt="">
            </div>
            <div class="write orange">
                <p>Greek Salad</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\larb.jpg" alt="">
            </div>
            <div class="write ">
                <p >Larb Salad</p>
            </div>
        </div>

        <a href="./soup.php" target="_blank"><button class="btn btn-view">View More Salad</button></a>
    </div>
    </div>
</div>
</section>
        </div>
<!-- Drop down Starter -->
        <div style="text-align: center;" class="starter itemCat" >
        <section id="startersDrop">
        <h3 class="title"style="padding-top:10px;">Starters</h3>
        <div class="drop-menu">
<div class="drop-down">
    <div class="unit">
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\veg-paneer-momos.jpg" alt="">
            </div>
            <div class="write">
                <p>Veg Momos</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\Spring-Rolls-1.jpg" alt="">
            </div>
            <div class="write orange">
                <p >Veg Spring Rolls</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\dahivalle.jpg" alt="">
            </div>
            <div class="write">
                <p>Dahi Valle</p>
            </div>
            
        </div>

        <a href="./starters.php" target="_blank"><button class="btn btn-view">View More Veg</button></a>
    </div>
    <div class="unit">
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\sushi.jpg" alt="">
            </div>
            <div class="write ">
                <p >Sushi</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\muttonkebab.jpg" alt="">
            </div>
            <div class="write orange">
                <p>Mutton Kebab</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\Murgh-Malai-tikka-2.jpg" alt="">
            </div>
            <div class="write ">
                <p >Murgh-Malai-tikka</p>
            </div>
        </div>

        <a href="./starters.php" target="_blank"><button class="btn btn-view">View More Non-veg</button></a>
    </div>
</div>
</div>
</section>
        </div>
    </div>
</section>


<!-- Our Speciality -->
    <section>
        <div class="wrapper section2">
            <div class="speciality">
                <h2 class="title">Our Speciality</h2>
                <p>One ingredient, blended with another special foreign ingredients ; our specialty is an authentic
                    heavy body with rich components and subtle aroma which will leave you in a remember able life
                    experience. Served with love and care.
                </p>
            </div>
            <div class="cardAlign">
                <div class="cardWrapper">
                    <div class="sCard">
                        <div class="frontCard siCard1">
                        </div>
                        <div class="backCard siCard1">
                            <h2>Fit From Every Sip (Asparagus Soup)</h2>
                            <h3>Price: Rs. 59</h3>
                            <button class="btn btn-view">Try Now!</button>
                        </div>
                    </div>
                </div>
                <div class="cardWrapper">
                    <div class="sCard">
                        <div class="frontCard siCard2"></div>
                        <div class="backCard siCard2">
                            <h2>A biriyani you will fall for (Kolkata Chicken) (Biriyani)</h2>
                            <h3>Price: Rs. 169</h3>
                            <button class="btn btn-view">Try Now!</button>
                        </div>
                    </div>
                </div>
                <div class="cardWrapper">
                    <div class="sCard">
                        <div class="frontCard siCard3"></div>
                        <div class="backCard siCard3">
                            <h2>Like no Rolls On Earth (Veg Spring Rolls)</h2>
                            <h3>Price: Rs. 85</h3>
                            <button class="btn btn-view">Try Now!</button>
                        </div>
                    </div>
                </div>
                <div class="cardWrapper">
                    <div class="sCard">
                        <div class="frontCard siCard4"></div>
                        <div class="backCard siCard4">
                            <h2>Ride your sweet senses (Rose Kulfi)</h2>
                            <h3>Price: Rs. 45</h3>
                            <button class="btn btn-view">Try Now!</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

<!-- Testimonials -->
<section>
    <div class="wrapper parallax">
   
        <div class="testimonial">
        
            <h2 class="testimonialTxt">Testimonials</h2>
            <div class="slideshow-container">

                <div class="mySlides">
                    <!-- review 1 -->
                    <div class="container">
                        <div class="flogo photos">
                            <img src="includes/images/chef/chef1.jpg" class="chefImg" alt="chef 1" width="110px">

                        </div>
                        <div class="review">

                        <p>I and my friend had dinner here one of the nights we were in Kalpetta. The ambiance was good and the food recommendations were great. We had a traditional Arabian rice and chicken preparation, Kuzhi Manthi. It was our first experience having this dish, and although a bit dry, it tasted great. Would recommend this place that's easily noticed from a vehicle and has ample parking.
                        </p>

                        </div>

                    </div>
                    <div class="rate review1">
                        
                        <label class="yellowStar" for="star5" title="text"></label>
                        
                        <label class="yellowStar" for="star4" title="text"></label>
                        
                        <label class="yellowStar" for="star3" title="text"></label>
                        
                        <label class="yellowStar" for="star2" title="text"></label>
                        
                        <label class="yellowStar" for="star1" title="text"></label>
                    </div>

                    <div class="author" style="color: blue;  font-weight: bold;">- Chef Gordan Ramsey</div>


                </div>
                <div class="mySlides">
                    <!-- review 2 -->
                    <div class="container">
                        <div class="flogo photos">
                            <img src="includes/images/chef/chef2.jpg" class="chefImg" alt="chef image" width="110px">

                        </div>
                        <div class="review">

                        <p>The Food we had enjoyed at the time of dinner. It was really delicious taste with
                                great quality, everything had unique taste which we had ordered, nice arrangement
                                and services from the staff while eating, we found nothing bad about this hotel.
                            </p>

                        </div>

                    </div>
                    <div class="rate review1">
                        
                        <label  class="yellowStar"for="star5" title="text"></label>
                        
                        <label  class="yellowStar" for="star4" title="text"></label>
                        
                        <label  class="yellowStar" for="star3" title="text"></label>
                        
                        <label  class="yellowStar" for="star2" title="text"></label>
                        
                        <label  for="star1" title="text"></label>
                    </div>

                    <div class="author" style="color: #1b9329;  font-weight: bold;">- Jeff Bezos</div>


                </div>
                <div class="mySlides">
                    <!-- review 3 -->
                    <div class="container">
                        <div class="flogo photos">
                            <img src="includes/images/chef/chef3.jpg" class="chefImg" alt="chef image" height="110px" width="110px">

                        </div>
                        <div class="review">

                            
                        <p>We visited this place for breakfast and dinner. The place is very conveniently located (on the highway ) with ample parking space. The food at both the meals was tasty and definitely worth the price. Good quantity served per portion. Service as also good. Overall , a good place to have food (both south indian and north indian) when staying in Vythiri. Would recommend it definitely.

                                    
    </p>

                        </div>

                    </div>
                    <div class="rate review1">
                        
                        <label  class="yellowStar" for="star5" title="text"></label>
                        
                        <label  class="yellowStar" for="star4" title="text"></label>
                        
                        <label  class="yellowStar" for="star3" title="text"></label>
                        
                        <label  class="yellowStar" for="star2" title="text"></label>
                        
                        <label  class="yellowStar" for="star1" title="text"></label>
                    </div>

                    <div class="author" style="color: #921aec;  font-weight: bold;">- Chef Vikas Khanna</div>


                </div>
                <div class="mySlides">
                    <!-- review 4 -->
                    <div class="container">
                        <div class="flogo photos">
                            <img src="includes/images/chef/chef4.jpg" class="chefImg" alt="chef image" width="110px">

                        </div>
                        <div class="review">
                        <p>This cozy restaurant has left the best impressions! Hospitable hosts, delicious dishes, beautiful presentation, wide wine list and wonderful dessert. I recommend to everyone! I would like to come back here again and again.
                                </p>

                        </div>

                    </div>
                    <div class="rate review1">
                        
                        <label  class="yellowStar" for="star5" title="text"></label>
                        
                        <label  class="yellowStar" for="star4" title="text"></label>
                        
                        <label  class="yellowStar" for="star3" title="text"></label>
                        
                        <label  class="yellowStar" for="star2" title="text"></label>
                        
                        <label  for="star1" title="text"></label>
                    </div>

                    <div class="author" style="color: #893d11;  font-weight: bold;">- Chef Ranveer Brar</div>


                </div>



                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

            </div>

            <div class="dot-container">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>

           <script>
                   var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }

           </script>

</section>

<!-- Map  -->
<section>
    <div id="map">
        
    </div>
    <div></div>
</section>
<script>
        //Slider
    var Image_slide = new Array("includes/images/slide1.jpg", "includes/images/slide2.jpg");
    var Img_Length  = Image_slide.length; 
    var Img_current = 0
    function slide() {
        if(Img_current >= Img_Length) {
            Img_current = 0;
        }
        document.getElementById('slides').src = Image_slide[Img_current];
        Img_current++;
    }
    function auto(){
        setInterval(slide,  8000);
    }

    window.onload = auto;
</script>
     

<script src="./includes/js/map.js"></script>
<!-- Footer  -->
<?php include("includes/components/footer.php"); ?>