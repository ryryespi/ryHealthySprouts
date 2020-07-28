<!--?php include_once("/views/pages/healthySprouts.html");
dirname("/public");
?-->

<!doctype html>
<html lang="en">

<head>
    <!--coded by Ryan Rey Espinosa ryryespi@yahoo.com-->
    <link rel="stylesheet" type="text/css" href="public/stylesheets/index.css">
    <!--initialize hs.js by adding <script>var eMail = yourEmail@domain.com </script> to home page -->
    <script>var eMail = "healthySprouts01@yahoo.com"; </script>
    <script type="text/javascript" src="public/stylesheets/hs.js"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Healthy Sprouts</title>
</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--min Bootstrap v4.5 and jQuery 3.0-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

    <!--Navbar medium and up-->
    <nav class="container d-none d-md-block">
        <div class="row">
            <div class="col-2 py-4">
                <img class="hs-logo" src="public/images/hslogo.svg" alt="Healthy Sprouts Logo">
            </div>

            <div class="col-10 navbar navbar-light text-uppercase text-reset">
                <div class="text-md-center">
                    <a class="navbar-item h5 hs-navbar-item" href="/">Home</a>
                    <a class="navbar-item h5 hs-navbar-item" href="#story">About Us</a>
                    <a class="navbar-item h5 hs-navbar-item" href="#info">ABOUT MICROGREENS</a>
                    <a class="navbar-item h5 hs-navbar-item" href="#products">PRODUCTS</a>
                    <a class="navbar-item h5 hs-navbar-item" href="#testimonials">Testimonials</a>
                    <a class="navbar-item h5 hs-navbar-item" href="#contact">Contact Us</a>
                </div>
            </div>

        </div>


    </nav>

    <!--navbar medium and down-->
    <nav class="d-md-none navbar-light">
        <div class="row flex-column align-items-center fixed-top bg-light p-3">
            <div class="col text-center">
                <button class="d-md-none navbar-toggleable-md navbar-toggler justify-content-center" type="button"
                    data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-md-none collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav p-3">
                        <li class="nav-item active">
                            <a class="navbar-item h5 hs-navbar-item" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-item h5 hs-navbar-item" href="#story">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-item h5 hs-navbar-item" href="#info">About Microgreens</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-item h5 hs-navbar-item" href="#products">Products</a>
                        </li>
                        <li>
                            <a class="navbar-item h5 hs-navbar-item" href="#testimonials">Testimonials</a>
                        </li>
                        <li>
                            <a class="navbar-item h5 hs-navbar-item" href="#contact">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <div class="d-md-none col text-center pt-5 mt-3">
        <img class="hs-logo pt-2" src="public/images/hslogo.svg" alt="Healthy Sprouts Logo">
    </div>





    <!--Healthy Sprouts Banner Section-->

    <section id="banner" class="container mb-5">
        <div class="row flex-column align-items-center">

            <!--Horizontal Rule-->
            <div class="col-11 border-top hs-border-3"></div>

            <!--Banner Logo (Healthy Sprouts Farm Fresh Superfood!)-->
            <div class="col-10 text-center mx-auto">
                <!--img class="img-thumbnail border-0 mx-auto d-block" src="public/images/hs-full-logo.jpg" alt="Healthy Sprouts Farm Fresh Superfood!"-->
                <h1 class="text-center hs-title  hs-font-cyan d-none d-lg-block mt-5">Healthy Sprouts</h1>
                <h1 class="text-center h1  hs-font-cyan d-lg-none">Healthy Sprouts</h1>
            </div>

            <!--hs location-->
            <h1 class="hs-font-cyan h1 pb-lg-5">GALT, CA</h1>


            <!--Horizontal Rule-->
            <div class="col-11 border-top hs-border-3"></div>
        </div>

    </section>


    <!-- Healthy Sprouts Story (Microgreens Card and Fresh Farm Products Card)-->
    <section id="story" class="container mt-5">

        <div class="row mt-5 pt-5">



            <div class="col-md-6">
                <div class="card d-flex align-items-stretch rounded-lg text-center text-light">
                    <img class="card-img" src="public/images/broccoli.jpg">

                    <div class="card-body hs-font-cyan">
                        <div class="card-img-overlay text-center mt-5 pt-5">
                            <div class="card-title hs-bg-cyan-opacity rounded-lg">
                                <h1 class="text-center hs-title  text-light d-none d-lg-block mt-5">Microgreens</h1>
                                <h1 class="text-center h1  text-light d-lg-none">Microgreens</h1>
                            </div>
                        </div>

                        <h2 class="card-text text-reset h2 text-uppercase d-none d-md-block">
                            Microgreens</h2>
                        <h2 class="card-title h5 d-md-none">Microgreens</h2>
                        <br>
                        <p class="card-text h5 text-uppercase d-none d-md-block">...<br>...</p>
                        <p class="card-text h6 d-md-none">...<br>...</p>
                        </p>


                    </div>
                </div>
            </div>




            <div class="col-md-6">
                <div class="card d-flex align-items-stretch rounded-lg text-center text-light">
                    <img class="card-img" src="public/images/farm.jpg">

                    <div class="card-body hs-font-cyan">
                        <div class="card-img-overlay text-center mt-5 pt-5">
                            <div class="card-title hs-bg-cyan-opacity rounded-lg">
                                <h1 class="text-center hs-title  text-light d-none d-lg-block mt-5">Produce</h1>
                                <h1 class="text-center display-5  text-light d-lg-none">Produce</h1>
                            </div>
                        </div>

                        <h2 class="card-text text-reset h2 text-uppercase d-none d-md-block">
                            Fresh Farm Products</h2>
                        <h2 class="card-title h5 d-md-none">Fresh Farm Products</h2>
                        <br>
                        <p class="card-text h5 text-uppercase d-none d-md-block">We have a variety of Fresh Produce,
                            but we specialize in Microgreens</p>
                        <p class="card-text h6 d-md-none">We have a variety of Fresh Produce, but we specialize in
                            Microgreens</p>
                        </p>


                    </div>
                </div>
            </div>


        </div>


        </div>


    </section>

    <!-- Info section -->
    <section id="info" class="container px-auto">
        <div class="row flex-column w-100 mx-auto justify-content-center">

            <!--horizontal rule-->
            <div class="col-11 align-self-center mt-5 py-5">
                <div class="border-top hs-border-3"></div>
            </div>

            <!--What are microgreens?-->
            <div class="col w-100 text-center">
                <h1 class="hs-title d-none d-sm-block">What Are Microgreens?</h1>
                <h1 class="display-4 hs-font-cyan d-sm-none">What Are Microgreens?</h1>
            </div>

            <div class="col text-center">
                <img class="img-thumbnail w-50 m-5" src="public/images/toss.jpg">
            </div>

            <!--Element 1 (what are microgreens)-->
            <div class="col-11 card border-light mb-3">
                <div class="row align-items-center">
                    <div class="col-2 text-right">
                        <img class="card-img hs-brand" src="public/images/logoLg.gif">
                    </div>

                    <div class="card-body col-10 border btn bg-light">
                        <p class="card-text hs-font-dark-green text-left">Microgreens are not sprouts.
                            Sprouts have no leaves and have a growing cycle of 2-7 days,
                            whereas microgreens are usually harvested 7-12 days after germination or
                            once the plant's first ture leaves have emerged</p>
                    </div>
                </div>
            </div>

            <!--Element 2 (what are microgreens)-->
            <div class="col-11 card border-light mb-3">
                <div class="row align-items-center">
                    <div class="col-2 text-right">
                        <img class="card-img hs-brand" src="public/images/logoLg.gif">
                    </div>

                    <div class="card-body col-10 border btn bg-light">
                        <p class="card-text hs-font-dark-green text-left">Microgreens are young vegetable greens that
                            are
                            approximately 1-3 inches tall.</p>
                    </div>
                </div>
            </div>

            <!--horizontal rule-->
            <div class="col-11 align-self-center mt-5 py-5">
                <div class="border-top hs-border-3"></div>
            </div>

            <!--Nutrients From Microgreens-->
            <div class="col-12 col-lg-8 align-self-center">
                <h1 class="hs-title d-none d-sm-block text-center">Nutrients From Microgreens</h1>
                <h1 class="display-4 hs-font-cyan d-sm-none text-center">Nutrients From Microgreens</h1>
            </div>

            <!--Nutrients From Microgreens Image-->
            <div class="col text-center">
                <img class="img-thumbnail w-50 m-5" src="public/images/arugula.jpg">
            </div>


            <!--Element 1 (what are microgreens)-->
            <div class="col-11 card border-light mb-3">
                <div class="row align-items-center">
                    <div class="col-2 text-right">
                        <img class="card-img hs-brand" src="public/images/logoLg.gif">
                    </div>

                    <div class="card-body col-10 border btn bg-light">
                        <p class="card-text hs-font-dark-green text-left">Microgreens are packed with nutrients. While
                            their
                            nutrient contents vary slightly,
                            most varieties tend to be rich in potassium, iron, zinc, magnesium and copper.</p>
                    </div>
                </div>
            </div>



            <!--Element 2 (what are microgreens)-->
            <div class="col-11 card border-light mb-3">
                <div class="row align-items-center">
                    <div class="col-2 text-right">
                        <img class="card-img hs-brand" src="public/images/logoLg.gif">
                    </div>

                    <div class="card-body col-10 border btn bg-light">
                        <p class="card-text hs-font-dark-green text-left">Microgreens are a great source of beneficial
                            plant
                            compounds like antioxidants.</p>
                    </div>
                </div>
            </div>




            <!--Element 3 (what are microgreens)-->
            <div class="col-11 card border-light mb-3">
                <div class="row align-items-center">
                    <div class="col-2 text-right">
                        <img class="card-img hs-brand" src="public/images/logoLg.gif">
                    </div>

                    <div class="card-body col-10 border btn bg-light">
                        <p class="card-text hs-font-dark-green text-left">Research comparing microgreens to more mature
                            greens
                            reports that nutrient levels in microgreens can be four to forty times higher than those
                            found in mature greens.</p>
                    </div>
                </div>
            </div>




            <!--Element 3-1 (what are microgreens)-->
            <div class="col-11 card border-light mb-3">
                <div class="row align-items-center">
                    <div class="col-2 text-right">
                        <img class="card-img hs-brand" src="public/images/logoLg.gif">
                    </div>

                    <div class="card-body col-10 border btn bg-light">
                        <p class="card-text hs-font-dark-green text-left">Microgreens are a rich source of polyphenols,
                            a class of
                            antioxidants linked to a lower risk of heart disease. Animal studies show that microgreens
                            may lower triglyceride and "bad" LDL cholesterol levels.</p>
                    </div>
                </div>
            </div>



            <!--Element 3-2 (what are microgreens)-->
            <div class="col-11 card border-light mb-3">
                <div class="row align-items-center">
                    <div class="col-2 text-right">
                        <img class="card-img hs-brand" src="public/images/logoLg.gif">
                    </div>

                    <div class="card-body col-10 border btn bg-light">
                        <p class="card-text hs-font-dark-green text-left">Antioxidant-rich foods, including those
                            containing high
                            amounts of polyphenols, may be linked to a lower risk of Alzheimer's disease.</p>
                    </div>
                </div>
            </div>



            <!--Element 3-3 (what are microgreens)-->
            <div class="col-11 card border-light mb-3">
                <div class=" row align-items-center">
                <div class="col-2 text-right">
                    <img class="card-img hs-brand" src="public/images/logoLg.gif">
                </div>

                <div class="card-body col-10 border btn bg-light">
                    <p class="card-text hs-font-dark-green text-left">Antioxidants may help reduce the type of
                        stress that can
                        prevent sugar from properly entering cells. In lab studies, fenugreek microgreens appeared
                        to enhance cellular sugar uptake by 25-44%</p>
                </div>
            </div>
        </div>




        <!--horizontal rule-->
        <div class="col-11 align-self-center mt-5 py-5">
            <div class="border-top hs-border-3"></div>
        </div>


        </div>
    </section>

    <!--Subscribe Section-->
    <section id="subscribe" class="container p-5">

        <div class=" row flex-column align-items-center pb-5">

            <!--First Element-->
            <div class="col text-center">
                <h1 class="hs-title d-none d-sm-block pb-5">About Us</h1>
                <h1 class="display-4 hs-font-cyan p-5 d-sm-none">About Us</h1>
            </div>

            <!--Third Element-->
            <div class="col-10 text-left">
                <h2 class="hs-font-cyan">Mission:</h2>
                <p class="hs-font-dark-green">Healthy Sprouts is a profitable company in Galt, CA that produce
                    microgreens and vegetables on a weekly basis.
                    Our mission statement is to help and improve the health and sustainability of my local community. We
                    accomplish this through educating our customers,
                    teamwork, embodying integrity and progressive agricultural practices in a safe, wholesome work
                    environment.</p>
            </div>

            <!--Fourth Element-->
            <div class="col-10 text-left">
                <h2 class="hs-font-cyan">Vision:</h2>
                <p class="hs-font-dark-green">Healthy Sprouts will be perceived by its customers as the benchmark of the
                    microgreens industry. While being environmentally
                    friendly. Healthy Sprouts will strive to create a safe rewarding vegetables that will continue to
                    grow and diversify using the most safe environmental practices while achieving the healthy lifestyle
                    for our customers.</p>
                </p>
            </div>

            <!--Fifth Element-->
            <div class="col-10 text-center">
                <h2 class="hs-font-cyan p-4">Values:</h2>

                <ul class="hs-font-dark-green list-group text-left">
                    <li class="list-group-item text-center">Quality</li>
                    <li class="list-group-item  text-center">Safe Working environment</li>
                    <li class="list-group-item  text-center">Commitment</li>
                    <li class="list-group-item  text-center">Customer Satisfaction</li>
                    <li class="list-group-item  text-center">Profitability</li>
                    <li class="list-group-item  text-center">Progressive</li>
                </ul>

            </div>

            <!--horizontal rule-->
            <div class="col-11 mt-5 py-5">
                <div class="border-top hs-border-3"></div>
            </div>

        </div>





    </section>



    <!--Healthy Sprouts Testimonials Section-->
    <div id="testimonials" class="pb-5">

        <div id="healthySproutsTestimonial" class="carousel slide hs-bg-cyan rounded-lg container" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#healthySproutsTestimonial" data-slide-to="0" class="active"></li>
                <li data-target="#healthySproutsTestimonial" data-slide-to="1"></li>
                <li data-target="#healthySproutsTestimonial" data-slide-to="2"></li>
                <li data-target="#healthySproutsTestimonial" data-slide-to="3"></li>
                <li data-target="#healthySproutsTestimonial" data-slide-to="4"></li>


            </ol>
            <div class="carousel-inner align-items-center text-light">



                <!--testimonial 1-->
                <div class="carousel-item active " data-interval="10000">
                    <div class="hs-card w-100 d-block" alt="...">
                        <div class="card-body text-center">
                            <h1 class="card-title h1">Alice Cortez</h1>
                            <p class="card-text"><small class="small">Galt, California</small></p>
                            <p class="card-text">I am very impressed with the Farm Fresh Superfoods I have enjoyed from
                                Healthy Sprouts on a weekly basis ! The product is precisely cut,clean & neatly packaged
                                . I have shared my veggies with coworkers & friends from Chico! Josen has developed her
                                new venture with such love & commitment! An angel for my commitment to healthy eating!
                            </p>
                        </div>
                    </div>
                </div>


                <!--testimonial 2-->
                <div class="carousel-item" data-interval="20000">
                    <div class="hs-card w-100 d-block" alt="...">
                        <div class="card-body text-center ">
                            <h1 class="card-title h1">Jeff & Cris A.</h1>
                            <p class="card-text"><small class="small">Pine Grove, California</small></p>
                            <p class="card-text">Healthy Sprouts has been delivering us our variety of organic
                                microgreens every other week from the past couple months and we continue to support
                                Healthy Sprouts due to their timely delivery and the quality of their organic
                                microgreens are absolutely the best!
                                Their microgreens taste fresh. We have been ordering all varieties of their microgreens,
                                but our favorite may have been the Sunflower microgreens. Our seven year old daughter
                                loves to munch on the Sunflower microgreens which happen to be crunchy and has a bit of
                                a nutty taste to it-she could finish the entire container in one sitting!
                                Besides adding the microgreens to our breakfast meals, soups, and salads, we also like
                                to add a variety of the microgreens to our daily juicing of fresh organic veggies as
                                well.
                                <br><br>
                                We highly recommend Healthy Sprouts. They are very consistent in providing us fresh and
                                tasty organic microgreens and we couldn't be happier with their service.
                            </p>
                        </div>
                    </div>
                </div>



                <!--testimonial 3-->
                <div class="carousel-item" data-interval="30000">
                    <div class="hs-card w-100 d-block" alt="...">
                        <div class="card-body text-center">
                            <h1 class="card-title h1">Maria "Soc" Coquioco</h1>
                            <p class="card-text"><small class="small">Elk Grove, California</small></p>
                            <p class="card-text"> I love the micro greens from Healthy Sprouts! They are delicious,
                                organic and I can add them to anything! The best part is that they help with my diet to
                                keep me healthy plus the flavors are amazing! I 100% recommend! They’re always fresh and
                                the owner has an amazing service and attitude towards customers!

                            </p>
                        </div>
                    </div>
                </div>



                <!--testimonial 4-->
                <div class="carousel-item" data-interval="40000">
                    <div class="hs-card w-100 d-block" alt="...">
                        <div class="card-body text-center">
                            <h1 class="card-title h1">Valerie Clark</h1>
                            <p class="card-text"><small class="small">California</small></p>
                            <p class="card-text"> I appreciate the quality and taste of Healthy Sprout's micro greens.
                                The individual packaging helps maintain the freshness for the entire week. Her customer
                                service and prompt delivery helps me with my meal prepping for the week.
                            </p>
                        </div>
                    </div>
                </div>


                <!--testimonial 5-->
                <div class="carousel-item">
                    <div class="hs-card w-100 d-block" alt="...">
                        <div class="card-body text-center">
                            <h1 class="card-title h1">Anita T Espinosa</h1>
                            <p class="card-text"><small class="small">Stockton, California</small></p>
                            <p class="card-text"> Aside from the healthy value you get from eating micro greens. I have
                                fun mixing and topping it with my food. The colors are very appetizing and I love it in
                                any dish.
                                A home cooked meal becomes a professionally plated dish just by adding microgreens as
                                your toppings.
                            </p>
                        </div>
                    </div>
                </div>


            </div>

            <a class="carousel-control-prev" href="#healthySproutsTestimonial" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#healthySproutsTestimonial" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>
    </div>


    <!--Healthy Sprouts Product Section-->
    <section id="products" class="container">


        <div class="row flex-column align-items-center py-5">
            <!--Products Title-->
            <div class="col">
                <h1 class="hs-title p-4 d-sm-block d-none text-center">Our Products</h1>
                <h1 class="display-4 p-4 hs-font-cyan d-sm-none text-center">Our Products</h1>
            </div>

            <!--horizontal rule-->
            <div class="col-11 border-top hs-border-3"></div>

            <!--To order info-->
            <div class="col pt-3 text-center hs-font-dark-green">
                <p>
                    To order, please email <a class="text-reset" href="#contact">healthysprouts01@yahoo.com</a>
                    or <a class="text-reset" href="tel:20984315166">call/text
                        209-843-15166</a></p>

                <p>See our <a class="text-reset" href="#policy">Delivery/Pickup Policy</a></p>
            </div>

            <!--horizontal rule>
            <div class="col-11 border-top hs-border-3"></div-->

            <!--For Restaurant info-->
            <div class="col p-3 text-center hs-font-dark-green">
                <p>
                    For Restaurant price sheet, please <a class="text-reset" href="#contact">email,
                        call/text</a> same as above contact
                    info.
                </p>
            </div>

            <!--horizontal rule-->
            <div class="col-11 border-top hs-border-3"></div>

        </div>


        <div class="row justify-content-center">

            <div class="col-md-4 mx-auto">
                <div class="list-group ml-4" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-amaranth-list" data-toggle="list"
                        href="#list-amaranth" role="tab" aria-controls="amaranth">Red Garnet Amaranth</a>
                    <a class="list-group-item list-group-item-action" id="list-arugula-list" data-toggle="list"
                        href="#list-arugula" role="tab" aria-controls="arugula">Arugula</a>
                    <a class="list-group-item list-group-item-action" id="list-boroccoli-list" data-toggle="list"
                        href="#list-boroccoli" role="tab" aria-controls="boroccoli">Broccoli</a>
                    <a class="list-group-item list-group-item-action" id="list-pea-list" data-toggle="list"
                        href="#list-pea" role="tab" aria-controls="pea">Pea Shoots</a>
                    <a class="list-group-item list-group-item-action" id="list-sunflower-list" data-toggle="list"
                        href="#list-sunflower" role="tab" aria-controls="sunflower">Sunflower</a>
                    <a class="list-group-item list-group-item-action" id="list-radish-list" data-toggle="list"
                        href="#list-radish" role="tab" aria-controls="radish">China Rose Radish</a>
                    <a class="list-group-item list-group-item-action" id="list-salad-list" data-toggle="list"
                        href="#list-salad" role="tab" aria-controls="salad">Spicy Salad Mix</a>

                </div>
            </div>
            <div class="col-md-6 pt-3">
                <div class="tab-content" id="nav-tabContent">

                    <div class="tab-pane fade show active" id="list-amaranth" role="tabpanel"
                        aria-labelledby="list-amaranth-list">

                        <!--Red Garnet Product-->
                        <div class="col d-flex align-items-stretch">
                            <div class="card text-center" alt="...">
                                <a class="btn" data-toggle="collapse" href="#collapseAmaranth">
                                    <img src="public/images/garnet.jpg" class="card-img-top" alt="...">
                                    <h1 class="card-title text-uppercase h3 hs-font-dark-green">Red Garnet Amaranth</h1>

                                </a>
                                <div id="collapseAmaranth" class="collapse card-body text-center">
                                    <p class="card-text"> 1.5oz <br>Facts: Mild, earthy taste. Use in pasta dishes,
                                        quinoa
                                        dishes,
                                        great pair
                                        with Salmon.
                                        Health Benefits: Lowers cholesterol and risk of cardiovascular disease. Aids
                                        in
                                        weight loss
                                        or maintaining a standard weight. Improves eyesight and fights cancer
                                        Nutrients: Rich in Calcium, Vitamins K,E,C, Potassium, B12.</p>
                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="tab-pane fade" id="list-arugula" role="tabpanel" aria-labelledby="list-arugula-list">


                        <!--Arugula-->
                        <div class="col d-flex align-items-stretch">
                            <div class="card" alt="...">
                                <a class="btn" data-toggle="collapse" href="#collapseArugula">
                                    <img src="public/images/arugula.jpg" class="card-img-top" alt="...">
                                    <h1 class="card-title  text-uppercase h3 hs-font-dark-green">Arugula</h1>

                                </a>
                                <div id="collapseArugula" class="collapse card-body text-center">
                                    <p class="card-text">1.5oz <br> Fact: It's a pepper, distinctive tasting green that
                                        was
                                        originally know in
                                        the Mediterranean region. It can be eaten as raw or add it with your salad,
                                        pizza, wraps,
                                        nachos or pesto sauce for your pasta.</p>
                                </div>

                            </div>
                        </div>


                    </div>

                    <div class="tab-pane fade" id="list-boroccoli" role="tabpanel"
                        aria-labelledby="list-boroccoli-list">


                        <!--Broccoli-->
                        <div class="col d-flex align-items-stretch">
                            <div class="card" alt="...">
                                <a class="btn" data-toggle="collapse" href="#collapseBroccoli">
                                    <img src="public/images/broccoli.jpg" class="card-img-top" alt="...">
                                    <h1 class="card-title  text-uppercase h3 hs-font-dark-green">Broccoli</h1>

                                </a>

                                <div id="collapseBroccoli" class="collapse card-body text-center">
                                    <p class="card-text"> 1.5oz<br>
                                        Facts: Broccoli microgreens are commonly eaten in a raw state therefore there is
                                        no nutrient
                                        loss because no steaming, boiling or cooking involved. It has a strong flavor of
                                        Broccoli
                                        and texture is soft. Health Benefits: Abundance of Glucosinolates it is a vital
                                        component of
                                        the Phytochemicals within the Brassicaceae family of vegetables. Also major
                                        defense against
                                        pancreas, lungs, stomach, colon, rectal & prostate cancer. Nutrients: Contains
                                        four to 40
                                        times more nutrients than their mature counterparts. Vitamins A&C, Calcium, Iron
                                        &
                                        Phosphorus, great source of Sulforaphane.</p>
                                </div>

                            </div>
                        </div>


                    </div>

                    <div class="tab-pane fade" id="list-pea" role="tabpanel" aria-labelledby="list-pea-list">



                        <!--Pea Shoots-->
                        <div class="col d-flex align-items-stretch">
                            <div class="card" alt="...">
                                <a class="btn" data-toggle="collapse" href="#collapsePea">

                                    <img src="public/images/sprouts.jpg" class="card-img-top" alt="...">
                                    <h1 class="card-title text-uppercase h3 hs-font-dark-green">Pea Shoots</h1>

                                </a>

                                <div id="collapsePea" class="collapse card-body text-center">
                                    <p class="card-text"> 1.5oz<br>Facts: Bright green, crisp texture and earthy aroma,
                                        they like
                                        peas and are
                                        great for salads, sandwiches, soups or cooked by themselves or with other greens
                                        that are
                                        available for stir fries.
                                        Health Benefits: Cancer Prevention, High in Antioxidants, anti-inflammatory,
                                        Diabetes, Heart
                                        Health and Weight Loss.
                                        Nutrients: Contains four to 40 times more nutrients than their mature
                                        counterparts. Vitamins
                                        A&C, Calcium, Iron & Phosphorus.</p>
                                </div>

                            </div>
                        </div>



                    </div>


                    <div class="tab-pane fade" id="list-sunflower" role="tabpanel"
                        aria-labelledby="list-sunflower-list">


                        <!--Sunflower-->
                        <div class="col d-flex align-items-stretch">
                            <div class="card" alt="...">
                                <a class="btn" data-toggle="collapse" href="#collapseSunflower">
                                    <img src="public/images/sunflower.jpg" class="card-img-top" alt="...">
                                    <h1 class="card-title text-uppercase h3 hs-font-dark-green">Sunflower</h1>
                                </a>

                                <div id="collapseSunflower" class="collapse card-body text-center">
                                    <p class="card-text"> 1.5oz<br>
                                        Facts: This nutty flavor has a green color, it has crunchy texture and feel of
                                        spinach which
                                        goes magically with any dish.

                                        Health Benefits: Help build our skeletal, muscular and Neurological systems.
                                        Help improve
                                        immune system.

                                        Nutrients: Vitamin A,B complex, D&E, Calcium, Iron, Magnesium, Potassium &
                                        Phosphorus.
                                        Contains four to 40 times more nutrients than their mature counterparts.
                                    </p>
                                </div>

                            </div>
                        </div>



                    </div>


                    <div class="tab-pane fade" id="list-radish" role="tabpanel" aria-labelledby="list-radish-list">







                        <!--China Rose Radish-->
                        <div class="col d-flex align-items-stretch">
                            <div class="card" alt="...">
                                <a class="btn" data-toggle="collapse" href="#collapseChina">

                                    <img src="public/images/chinarose.jpg" class="card-img-top" alt="...">
                                    <h1 class="card-title  text-uppercase h3 hs-font-dark-green">China Rose Radish</h1>

                                </a>

                                <div id="collapseChina" class="collapse card-body text-center">
                                    <p class="card-text">Green, light pink, and spicy radish flavor</p>
                                </div>

                            </div>
                        </div>


                    </div>



                    <div class="tab-pane fade" id="list-salad" role="tabpanel" aria-labelledby="list-salad-list">



                        <!--Spicy Salad Mix-->
                        <div class="col d-flex align-items-stretch">
                            <div class="card" alt="...">
                                <a class="btn" data-toggle="collapse" href="#collapseSalad">
                                    <img src="public/images/microSalad.jpg" class="card-img-top" alt="...">
                                    <h1 class="card-title text-uppercase h3">Spicy Salad Mix</h1>
                                </a>
                                <div id="collapseSalad" class="collapse card-body text-center">
                                    <p class="card-text">
                                        Mix of different Microgreens with Spicy Salad Dressing. Contains: Broccoli,
                                        Kale, Kohlrabi, Arugula, Red Cabbage and Southern Giant Mustard for an extra
                                        kick. </p>
                                </div>

                            </div>
                        </div>

                    </div>





                </div>
            </div>


            <!--horizontal rule-->
            <div class="col-11 text-center mt-5 py-5">
                <div class="border-top hs-border-3"></div>
            </div>
        </div>

    </section>



    <!--Healthy Sprouts Contact Section-->
    <section id="contact" class="container">

        <div class="row justify-content-center">

            <div class="col-11 justify-content-center mb-5">
                <div class="row flex-column align-items-center">





                    <!--contact title-->
                    <div class="col justify-content-center">
                        <h1 class="hs-title d-sm-block d-none text-center">Contact</h1>
                        <h1 class="display-4 p-4 hs-font-cyan d-sm-none text-center">Contact</h1>
                    </div>


                    <!--static contact info-->
                    <div class="hs-contact-info col-sm-8 hs-font-dark-green text-center">
                        <p class="h5">Healthy Sprouts</p>
                        <p class="h6"><a class="text-reset"
                                href="mailto:healthySprouts01@yahoo.com">healthysprouts01@yahoo.com</a></p>
                        <p class="h6"><a class="text-reset" href="tel:2098431516">(209) 843-1516</a></p>
                    </div>

                    <!--contact form-->
                    <div class="col-xl-8 ">

                        <form class="contactForm" onsubmit="event.preventDefault(); return false;">
                            <div class="form-group">
                                <label id="contactFormNameLabel" for="name">Name</label>
                                <div class="input-group">
                                    <input name="name" type="text" class="form-control" id="hsName"
                                        placeholder="Your Name" altrequired="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label id="contactFormEmailLabel" for="email">Email Address</label>
                                <div class="input-group">
                                    <input name="email" type="email" class="form-control" id="email"
                                        placeholder="Your Email" altrequired="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label id="contactFormPhoneLabel" for="phone">Phone Number</label>
                                <div class="input-group">
                                    <input name="phone" type="text" class="form-control" id="phone"
                                        placeholder="Your Phone Number" altrequired="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label id="contactFormSubjectLabel" for="subject">Subject</label>
                                <div class="input-group">
                                    <input name="subject" type="text" class="form-control" id="subject"
                                        placeholder="Subject" altrequired="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label id="contactFormMessageLabel" for="subject">Message</label>
                                <div class="input-group textarea-group">
                                    <textarea name="message" id="message" class="form-control" placeholder="Message"
                                        altrequired="required"></textarea>
                                </div>
                            </div>
                            <div class="v-100 text-center p-5">
                                <button type="submit" class="btn btn-primary align-self-center" id="contactButton"
                                    onclick='hsSubmitMessage()'>Send Message</button>

                            </div>
                        </form>
                    </div>

                </div>

            </div>

            <!--div class="col-6 d-none d-lg-block my-auto">
                <img class="img-fluid" src="public/images/dish.jpg" alt="Photo by Augustine Fou on Unsplash">
            </div-->


            <!--horizontal rule-->
            <div class="col-11 pb-5">
                <div class="border-top hs-border-3"></div>
            </div>


        </div>






    </section>



    <section id="policy" class="container">
        <div class="row flex-column align-items-center text-center p-5">
            <div class="col">

                <h1 class="hs-title d-sm-block d-none text-center">Shipping & Delivery</h1>
                <h1 class="display-4 p-4 hs-font-cyan d-sm-none text-center">Shipping & Delivery</h1>

            </div>

            <div class="col-11 w-100 text-center">
                <h4 class="h4 hs-font-cyan my-4">Ordering Policy</h4>
            </div>


            <div class="col-11 card border-light mb-3">
                <div class="row align-items-center">
                    <div class="col-2 text-right">
                        <img class="card-img hs-brand" src="public/images/logoLg.gif">
                    </div>

                    <div class="card-body col-10 border btn bg-light">
                        <p class="card-text hs-font-dark-green text-left">
                        <p class="hs-font-dark-green text-left">Email <a class="text-reset"
                                href="mailto:healthysprouts01@yahoo.com">healthysprouts01@yahoo.com</a>
                            to place your order.</p>
                    </div>
                </div>
            </div>


            <div class="col-11 card border-light mb-3">
                <div class="row align-items-center">
                    <div class="col-2 text-right">
                        <img class="card-img hs-brand" src="public/images/logoLg.gif">
                    </div>

                    <div class="card-body col-10 border btn bg-light">
                        <p class="card-text hs-font-dark-green text-left">In order to provide you the freshest
                            microgreens we grow
                            them to order. Order's placed on a <b>Sunday - Wednesday</b> will be delivered the following
                            Saturday.</p>
                    </div>
                </div>
            </div>


            <div class="col-11 card border-light mb-3">
                <div class="row align-items-center">
                    <div class="col-2 text-right">
                        <img class="card-img hs-brand" src="public/images/logoLg.gif">
                    </div>

                    <div class="card-body col-10 border btn bg-light">
                        <p class="card-text hs-font-dark-green text-left">Pickup location is between 8am and 12pm on
                            Saturdays,
                            address will be provided when the produce is ready.</p>
                    </div>
                </div>
            </div>


            <div class="col-11 card border-light mb-3">
                <div class="row align-items-center">
                    <div class="col-2 text-right">
                        <img class="card-img hs-brand" src="public/images/logoLg.gif">
                    </div>

                    <div class="card-body col-10 border btn bg-light">
                        <p class="card-text hs-font-dark-green text-left">Free Delivery to Galt, CA</p>
                    </div>
                </div>
            </div>



            <div class="col-11 card border-light mb-3">
                <div class="row align-items-center">
                    <div class="col-2 text-right">
                        <img class="card-img hs-brand" src="public/images/logoLg.gif">
                    </div>

                    <div class="card-body col-10 border btn bg-light">
                        <p class="card-text hs-font-dark-green text-left">Additional Delivery fee for orders under $20
                            outside of
                            Galt, CA</p>
                    </div>
                </div>
            </div>





            <div class="col-11 card border-light mb-3">
                <div class="row align-items-center">
                    <div class="col-2 text-right">
                        <img class="card-img hs-brand" src="public/images/logoLg.gif">
                    </div>

                    <div class="card-body col-10 border btn bg-light">
                        <p class="card-text hs-font-dark-green text-left">
                        <p class="hs-font-dark-green text-left">We at Healthy Sprouts pride ourselves in providing the
                            FRESHEST Microgreens in the Galt Area. Spread the healthiest love and help educate everyone
                            you know on the flavor and nutritional value of Microgreens. You and your new Healthy Sprout
                            referral will each get a free 2 oz. box of your choice! Just simply email <a
                                class="text-reset"
                                href="mailto:healthysprouts01@yahoo.com">healthysprouts01@yahoo.com</a> or call/text <a
                                class="text-reset" href="tel:2098431516">209-843-1516</a>. Thank you and Happy Healthy
                            Sprouts!</p>
                    </div>
                </div>
            </div>




        </div>

    </section>



    <!--Links and References-->
    <section id="References" class="hs-bg-cyan container rounded-lg py-5">

        <div class="row justify-content-center ">
            <p class="col-8 pb-3 display-4 text-light text-center">Links and References</p>
        </div>

        <div class="row justify-content-center hs-ref-text">
            <div class="col-1"></div>

            <div class="col-5 text-left">
                Image Links<br>
                Image by <a class="text-light" href="rawpixel.com">rawpixel</a><br>
                <span>Photo by <a class="text-light"
                        href="https://unsplash.com/@runningonrealfood?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Deryn
                        Macey</a> on <a class="text-light"
                        href="https://unsplash.com/s/photos/arugula?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span><br>
                Image by <a class="text-light"
                    href="https://pixabay.com/users/plooploe-3530101/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3415593">plooploe</a>
                from <a class="text-light"
                    href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3415593">Pixabay</a><br>
                <span>Photo by <a class="text-light"
                        href="https://unsplash.com/@deviyahya?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Devi
                        Puspita Amartha Yahya</a> on <a class="text-light"
                        href="https://unsplash.com/s/photos/microgreens?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span><br>
                <span>Photo by <a class="text-light"
                        href="https://unsplash.com/@twistsandzests?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Amber
                        Engle</a> on <a class="text-light"
                        href="https://unsplash.com/s/photos/microgreens?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span><br>
                <span>Photo by <a class="text-light"
                        href="https://unsplash.com/@augustinefou?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Augustine
                        Fou</a> on <a class="text-light"
                        href="https://unsplash.com/s/photos/microgreens?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span><br>
                <span>Photo by <a class="text-light"
                        href="https://unsplash.com/@augustinefou?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Augustine
                        Fou</a> on <a class="text-light"
                        href="https://unsplash.com/s/photos/microgreens?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span><br>
                <span>Photo by <a
                        href="https://unsplash.com/@markuswinkler?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Markus
                        Winkler</a> on <a
                        href="https://unsplash.com/s/photos/farming?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
            </div>


            <div class="col-5 text-left">
                Reference Links<br>
                <a class="text-light" href="https://gardeningheavn.com/sunflower-microgreens/">Sunflower Microgreens
                    -
                    The Nutrition Powerhouse</a><br>
                <a class="text-light"
                    href="https://www.newearthmicrofarm.com/microgardening/broccoli-heads-versus-broccoli-microgreens-a-big-bang-of-nutrition-maybe">Broccoli
                    Heads vs Broccoli Microgreens</a><br>
                <a class="text-light" href="https://agnr.umd.edu/news/mighty-microgreens">Mighty Microgreens</a><br>
                <a class="text-light" href="https://practicalgrowing.com/microgreens/how-to-grow-chia/">Practical
                    Growing</a><br>
                <a class="text-light" href="https://gardeningheavn.com/sunflower-microgreens/">Sunflower
                    Microgreens</a><br>
            </div>
        </div>
        <div class="col-1"></div>



        </div>
    </section>




    <section id="copyright" class="hs-padding container text-center pb-3">
        <div class="row align-items-center flex-column">
            <div class="col hs-padding"></div>
            <div class="col-5">
                <p class="h6">@2020 by healthsprouts. Proudly created by Ryan Rey Espinosa</p>
            </div>
        </div>
    </section>

</body>


</html>