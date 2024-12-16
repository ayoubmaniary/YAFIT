<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FITNESS</title>
    <!-- font awesom cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- custom css file link -->
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="./CSS/yfit.css">
</head>

<body>
    <!-- header section starts -->
    <header class="header">

        <a href="#" class="logo"> <span>YA</span>FIT</a>

        <div id="menu-btn" class="fas fa-bars"></div>


        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#features">features</a>
            <a href="#pricing">pricing</a>
            <a href="#diet">diet</a>
            <a href="#trainres">trainres</a>
            <a href="#blogs">blogs</a>
        </nav>
    </header>
    <!-- header section ends -->

    <!-- home section starts -->

    <section class="home" id="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(./images/home-bg-1.jpg) no-repeat;">
                    <div class="content">
                        <span>be strong, ya fit</span>
                        <h3>Make yourself stronger than your excuses.</h3>
                        <a href="{{route('showprofile')}}" class="btn">get started</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(./images/home-bg-2.jpg) no-repeat;">
                    <div class="content">
                        <span>be strong, ya fit</span>
                        <h3>Make yourself stronger than your excuses.</h3>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(./images/home-bg-3.jpg) no-repeat;">
                    <div class="content">
                        <span>be strong, ya fit</span>
                        <h3>Make yourself stronger than your excuses.</h3>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>
    </section>

    <!-- HOME SECTION ENDS -->

    <!-- ABOUT SECTION STARTS -->

    <section class="about" id="about">

        <div class="image">
            <img src="./images/About image.jpg" alt="">
        </div>

        <div class="content">
            <span>about us</span>
            <h3 class="title">Every day is a chance to become better</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione architecto obcaecati fuga.</p>
            <div class="box-container">
                <div class="box">
                    <h3><i class="fas fa-check"></i>body and mind</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor nemo laudantium vitae?</p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-check"></i>healthy life</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor nemo laudantium vitae?</p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-check"></i>strategies</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor nemo laudantium vitae?</p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-check"></i>workout</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor nemo laudantium vitae?</p>
                </div>
            </div>
            <a href="#" class="btn">read more</a>
        </div>

    </section>
    <!-- ABOUT SECTION ENDS -->

    <!-- features SECTION STARTS -->

    <section class="features" id="features">

        <h1 class="heading"> <span>gym features</span></h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="./images/image f-img-1.jpg" alt="">
                </div>
                <div class="content">
                    <img src="./images/bicep icon-1.png" alt="">
                    <h3>body building</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, eum?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box second">
                <div class="image">
                    <img src="./images/image f-img-2.jpg" alt="">
                </div>
                <div class="content">
                    <img src="./images/homme icon-2.png" alt="">
                    <h3>gym for men</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, eum?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./images/image f-img-3.jpg" alt="">
                </div>
                <div class="content">
                    <img src="./images/woman icon-3.png" alt="">
                    <h3>gym for women</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, eum?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
        </div>

    </section>
    <!-- features SECTION ENDS -->

    <!-- pricing section starts -->

    <section class="pricing" id="pricing">

        <div class="information">
            <span>pricing plan</span>
            <h3>affordable pricing plan for your</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam incidunt totam.</p>
            <P> <i class="fas fa-check"></i> cardio exercise</P>
            <P> <i class="fas fa-check"></i> weight lifting </P>
            <P> <i class="fas fa-check"></i> diet plans </P>
            <P> <i class="fas fa-check"></i> overall results </P>
            <a href="#" class="btn">all pricing</a>
        </div>

        <div class="plan basic">
            <h3>basic plan</h3>
            <div class="price"> <span>$</span>30<span>/mo</span></div>
            <div class="list">
                <P> <i class="fas fa-check"></i> personal training </P>
                <P> <i class="fas fa-check"></i> cardio exercise</P>
                <P> <i class="fas fa-check"></i> weight lifting </P>
                <P> <i class="fas fa-check"></i> diet plans </P>
                <P> <i class="fas fa-check"></i> overall results </P>
            </div>
            <a href="#" class="btn">get started</a>
        </div>

        <div class="plan">
            <h3>premium plan</h3>
            <div class="price"> <span>$</span>50<span>/mo</span></div>
            <div class="list">
                <P> <i class="fas fa-check"></i> personal training </P>
                <P> <i class="fas fa-check"></i> cardio exercise</P>
                <P> <i class="fas fa-check"></i> weight lifting </P>
                <P> <i class="fas fa-check"></i> diet plans </P>
                <P> <i class="fas fa-check"></i> overall results </P>
            </div>
            <a href="#" class="btn">get started</a>
        </div>
    </section>
    <!-- PRICING SECTION ENDS -->

    <!--Diet section STARTS-->

      
    <section class="home" id="diet">
        <h1 class="heading"> <span>diet</span></h1>

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(/davey-gravy-4WPcz_5RVMk-unsplash.jpg) no-repeat;">
                    <div class="content">
                        <span>chicken</span>
                        <h3>Make yourself stronger than your excuses.</h3>
                        <a href="./images/Groco.html" class="btn">get started</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(./images/lilas-yohane-14jmOnCcZkU-unsplash.jpg) no-repeat;">
                    <div class="content">
                        <span>be strong, ya fit</span>
                        <h3>Make yourself stronger than your excuses.</h3>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(./images/ca-creative-bpPTlXWTOvg-unsplash.jpg) no-repeat;">
                    <div class="content">
                        <span>be strong, ya fit</span>
                        <h3>Make yourself stronger than your excuses.</h3>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>

                
                <div class="swiper-slide slide" style="background: url(./images/khloe-arledge-V7hibs9xhe4-unsplash.jpg) no-repeat;">
                    <div class="content">
                        <span>be strong, ya fit</span>
                        <h3>Make yourself stronger than your excuses.</h3>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(./images/joseph-gonzalez-fdlZBWIP0aM-unsplash.jpg) no-repeat;">
                    <div class="content">
                        <span>be strong, ya fit</span>
                        <h3>Make yourself stronger than your excuses.</h3>
                        <a href="./Groco.html" class="btn">get started</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>
    </section>


    <!--Diet section ENDS-->

    <!-- TRAINERS SECTION STARTS -->

    <section class="trainers" id="trainers">

        <h1 class="heading"> <span>expert trainers</span> </h1>

        <div class="box-container" id="trainers">

            <div class="box">
                <img src="./images./graham-mansfield-E8VOttj22s4-unsplash.jpg" alt="">
                <div class="content">
                    <span>expert trainer</span>
                    <h3>Yassine fit</h3>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-whatsapp"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="./images./annie-spratt-oQfSHQ2Uaic-unsplash.jpg.crdownload" alt="">
                <div class="content">
                    <span>expert trainer</span>
                    <h3>Badr fit</h3>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-whatsapp"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="./images./nathan-dumlao-NXMZxygMw8o-unsplash.jpg.crdownload" alt="">
                <div class="content">
                    <span>expert trainer</span>
                    <h3>Amine fit</h3>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-whatsapp"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="./images./rinke-dohmen-dKN_i-opwVw-unsplash.jpg" alt="">
                <div class="content">
                    <span>expert trainer</span>
                    <h3>Hamza fit</h3>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-whatsapp"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- TRAINERS SECTION ENDS -->
    <!-- banner section starts -->
    <section class="banner">
        <span>join us now</span>
        <h3>get upto 50% discount</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta, libero.</p>
        <a href="#" class="btn">get discount</a>
    </section>
    <!-- banner section ENDS -->

    <!-- review section starts -->
    <section class="review">

        <div class="information">
            <span>testimonials</span>
            <h3>what our clients says</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere illo neque iure.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum soluta nesciunt beatae.</p>
                    <div class="user">
                        <img src="./images/image bic 1.jpeg" alt="">
                        <div class="info">
                            <h3>Ronni colmen</h3>
                            <span>designer</span>
                        </div>
                        <i class="fas fa-quotel-left"></i>
                    </div>
                </div>


                <div class="swiper-slide slide">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum soluta nesciunt beatae.</p>
                    <div class="user">
                        <img src="./images/image bic 2.jpeg" alt="">
                        <div class="info">
                            <h3>Arlonde</h3>
                            <span>designer</span>
                        </div>
                        <i class="fas fa-quotel-left"></i>
                    </div>
                </div>


                <div class="swiper-slide slide">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum soluta nesciunt beatae.</p>
                    <div class="user">
                        <img src="./images/image bic 3.jpeg" alt="">
                        <div class="info">
                            <h3>hany rambod</h3>
                            <span>designer</span>
                        </div>
                        <i class="fas fa-quotel-left"></i>
                    </div>
                </div>


                <div class="swiper-slide slide">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum soluta nesciunt beatae.</p>
                    <div class="user">
                        <img src="" alt="">
                        <div class="info">
                            <h3>yassine fit</h3>
                            <span>designer</span>
                        </div>
                        <i class="fas fa-quotel-left"></i>
                    </div>
                </div>

    </section>
    <!-- review section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> <span>daily posts</span> </h1>

        <div class="swiper blogs-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="/blog-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                        <h3>fitness is not about being better than someone else</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="./images/blog-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                        <h3>fitness is not about being better than someone else</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="./images/blog-3.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                        <h3>fitness is not about being better than someone else</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="./images/blog-4.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                        <h3>fitness is not about being better than someone else</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="./images/blog-5.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                        <h3>fitness is not about being better than someone else</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- blogs section ends -->


    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a class="links" href="#home">home</a>
                <a class="links" href="#about">about</a>
                <a class="links" href="#features">features</a>
                <a class="links" href="#pricing">pricing</a>
                <a class="links" href="#trainers">trainers</a>
                <a class="links" href="#blogs">blogs</a>
            </div>

            <div class="box">
                <h3>opening hours</h3>
                <p> monday : <i> 7:00am - 10:30pm </i> </p>
                <p> tuesday : <i> 7:00am - 10:30pm </i> </p>
                <p> wednesday : <i> 7:00am - 10:30pm </i> </p>
                <p> friday : <i> 7:00am - 10:30pm </i> </p>
                <p> saturday : <i> 7:00am - 10:30pm </i> </p>
                <p> sunday : <i> closed </i> </p>
            </div>

            <div class="box">
                <h3>opening hours</h3>
                <p> <i class="fas fa-phone"></i> +112-456-7890 </p>
                <p> <i class="fas fa-phone"></i> +112-222-3333 </p>
                <p> <i class="fas fa-envelope"></i> yassinedardar7@gmail.com </p>
                <p> <i class="fas fa-map"></i> Casablaca, Moroco - 400104 </p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>

            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <form action="">
                    <input type="email" name="" class="email" placeholder="enter your email" id="">
                    <input type="submit" value="subscribe" class="btn">
                </form>
            </div>

        </div>

    </section>

    <div class="credit"> created by <span>mr. yassine dardar</span> | all rights reserved! </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    
    <script src="./images/main.js"></script>
</body>

</html>