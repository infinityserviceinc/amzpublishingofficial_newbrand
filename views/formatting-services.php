<!DOCTYPE html>
<html lang="en">

<?php include_once("includes/head.php")?>



<body>
    <?php include_once("includes/header.php")?>


    <section class="banner background-image" data-imgurl="assets/img/formating-banner.jpg">
        <div class="container">
            <div class="row d-block">
                <div class="banner__grid">
                    <div class="content">
                        <h5>CONVENIENTLY REACHABLE FORMATTING AT YOUR DISPOSAL!</h5>
                        <h1>WRITE DOWN YOUR IDEAS WITHOUT STRESSING OVER FORMATTING</h1>
                        <hr>
                        <div>
                            <p>AMZ Publishing Official are aware of how crucial it is to adhere to international book
                                formatting standards and how failing to do so may result in the majority of publishing
                                platforms rejecting your book. We won't let your additional work go to waste; let us
                                manage the intricate details of book design so you can focus on writing.</p>
                            <div class="btn-group">
                                <a href="get-a-quote/" class="btn btn-white">Get Free
                                    <strong>Consultation</strong></a>
                                <a href="javascript:void(Tawk_API.toggle())" class="btn btn-primary">Format
                                    <strong>My
                                        Book</strong></a>
                            </div>
                            <div class="form_banner">
                                <div role="form" class="wpcf7">
                                    <form method="POST" class="wpcf7-form init" action="/leads/">
                                        <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI']; ?>">
                                        <input type="hidden" name="brand" value="amzpublishingofficial">
                                        <input type="hidden" name="token" value="<?= $token;?>">
                                        <input type="hidden" name="tag" value="banner form">
                                        <input type="hidden" name="price" value="null">
                                        <input type="hidden" name="news" value="1">

                                        <p>
                                            <label>
                                                <input type="text" value="" name="name" placeholder="Enter Name"
                                                    required />
                                            </label>
                                            <label>
                                                <input type="email" value="" name="email" placeholder="Enter Email"
                                                    required />
                                            </label>
                                            <label>
                                                <input type="tel" value="" name="phone" placeholder="Phone Number"
                                                    required />
                                            </label><input type="submit" value="Contact Team"
                                                class="wpcf7-form-control wpcf7-submit" />
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-slide wow fadeInRight">
                        <figure>
                            <img loading="lazy" src="assets/img/transparent.svg"
                                data-imgurl="assets/img/formating-img.png" class="w-100" alt="websitecontent">
                        </figure>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="partners-cta wow fadeInUp">
        <div class="container">
            <div class="row">
                <ul class="partnerslider s">
                    <li>
                        <figure>
                            <img loading="lazy" src="assets/img/transparent.svg"
                                data-imgurl="assets/img/new-icons/1.svg" width="210" height="60" alt="nbc-icons">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img loading="lazy" src="assets/img/transparent.svg"
                                data-imgurl="assets/img/new-icons/2.svg" width="210" height="60" alt="newyork-icons">
                        </figure>
                    </li>

                    <li>
                        <figure>
                            <img loading="lazy" src="assets/img/transparent.svg"
                                data-imgurl="assets/img/new-icons/4.svg" width="210" height="60" alt="la-icons">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img loading="lazy" src="assets/img/transparent.svg"
                                data-imgurl="assets/img/new-icons/5.svg" width="210" height="60"
                                alt="the-wall-street-icons">
                        </figure>
                    </li>

                    <li>
                        <figure>
                            <img loading="lazy" src="assets/img/transparent.svg"
                                data-imgurl="assets/img/new-icons/7.svg" width="210" height="60" alt="esquire-icons">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img loading="lazy" src="assets/img/transparent.svg"
                                data-imgurl="assets/img/new-icons/8.svg" width="210" height="60" alt="bbc-icons">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img loading="lazy" src="assets/img/transparent.svg"
                                data-imgurl="assets/img/new-icons/9.svg" width="210" height="60" alt="newyorker-icons">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img loading="lazy" src="assets/img/transparent.svg"
                                data-imgurl="assets/img/new-icons/10.svg" width="210" height="60" alt="hbo-icons">
                        </figure>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="bookSec">
        <div class="container">
            <div class="row wow animate__slideInUp">
                <div class="col-md-10 mx-auto">
                    <h2 class="text-center">Let’s together share your story with the world as our eloquent writers give
                        words to your ideas.</h2>
                    <p class="text-center">Our writing experts provide end-to-end writing and publishing services so
                        that you can enjoy the masterpiece that we create</p>
                </div>
            </div>
            <div class="row ser_slider">
                <div class="col-md-3">
                    <div class="box"> <img loading="lazy" src="assets/img/transparent.svg"
                            data-imgurl="assets/img/img-1.webp" width="227" height="227">
                        <h4><a href="#">Book Writing </a></h4>
                        <p>Be a best-seller author like many of our past customers.</p>
                    </div>
                    <div class="homepage-programs--entry">
                        <div class="program-info">
                            <div class="program-icon"> <img loading="lazy" src="assets/img/transparent.svg"
                                    data-imgurl="assets/img/ghost-book-writing.svg" width="35" height="35"
                                    alt="Publishing"> </div>
                            <div class="program-title"> <a href="javascript:void(Tawk_API.toggle())"
                                    target="_self">
                                    Chat with us to <span>AVAIL UPTO 85% Discount</span> </a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box"> <img loading="lazy" src="assets/img/transparent.svg"
                            data-imgurl="assets/img/img-2.webp" width="227" height="227">
                        <h4><a href="#">Editing</a></h4>
                        <p>Complete and thorough book editing- no pennies charged.</p>
                    </div>
                    <div class="homepage-programs--entry">
                        <div class="program-info">
                            <div class="program-icon"> <img loading="lazy" src="assets/img/transparent.svg"
                                    data-imgurl="assets/img/editing.svg" alt="Guided Author" width="35" height="35">
                            </div>
                            <div class="program-title"> <a href="javascript:void(Tawk_API.toggle())"
                                    target="_self">
                                    Chat with us to <span>AVAIL UPTO 85% Discount</span> </a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box"> <img loading="lazy" src="assets/img/transparent.svg"
                            data-imgurl="assets/img/img-4.webp" width="227" height="227">
                        <h4><a href="#">Book Publishing</a></h4>
                        <p>One-stop shop for publishing your book.</p>
                    </div>
                    <div class="homepage-programs--entry">
                        <div class="program-info">
                            <div class="program-icon"> <img loading="lazy" src="assets/img/transparent.svg"
                                    data-imgurl="assets/img/book-publishing.svg" alt="Author Program" width="35"
                                    height="35"> </div>
                            <div class="program-title"> <a href="javascript:void(Tawk_API.toggle())"
                                    target="_self">
                                    Chat with us to <span>AVAIL UPTO 85% Discount</span> </a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box"> <img loading="lazy" src="assets/img/transparent.svg"
                            data-imgurl="assets/img/img-5.webp" width="227" height="227">
                        <h4><a href="#">Ebook Writing</a></h4>
                        <p>Professional E-book writers at your disposal.</p>
                    </div>
                    <div class="homepage-programs--entry">
                        <div class="program-info">
                            <div class="program-icon"> <img loading="lazy" src="assets/img/transparent.svg"
                                    data-imgurl="assets/img/ebook-writing.svg" alt="Author Program" width="35"
                                    height="35"> </div>
                            <div class="program-title"> <a href="javascript:void(Tawk_API.toggle())"
                                    target="_self">
                                    Chat with us to <span>AVAIL UPTO 85% Discount</span> </a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box"> <img loading="lazy" src="assets/img/transparent.svg"
                            data-imgurl="assets/img/img-6.webp" width="227" height="227">
                        <h4><a href="#">Book Marketing</a></h4>
                        <p>Employ the most effective marketing tactics for the marketing of your book.</p>
                    </div>
                    <div class="homepage-programs--entry">
                        <div class="program-info">
                            <div class="program-icon"> <img loading="lazy" src="assets/img/transparent.svg"
                                    data-imgurl="assets/img/book-marketing.svg" alt="Author Program" width="35"
                                    height="35"> </div>
                            <div class="program-title"> <a href="javascript:void(Tawk_API.toggle())"
                                    target="_self">
                                    Chat with us to <span>AVAIL UPTO 85% Discount</span> </a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box"> <img loading="lazy" src="assets/img/transparent.svg"
                            data-imgurl="assets/img/img-8.webp" width="227" height="227">
                        <h4><a href="#">Author Website</a></h4>
                        <p>Nowadays, the author's website is a sign of authenticity and relevancy in the book
                            marketplace.
                            Book Writing will give you an online presence.</p>
                    </div>
                    <div class="homepage-programs--entry">
                        <div class="program-info">
                            <div class="program-icon"> <img loading="lazy" src="assets/img/transparent.svg"
                                    data-imgurl="assets/img/author-website.svg" alt="Author Program" width="35"
                                    height="35"> </div>
                            <div class="program-title"> <a href="javascript:void(Tawk_API.toggle())"
                                    target="_self">
                                    Chat with us to <span>AVAIL UPTO 85% Discount</span> </a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box"> <img loading="lazy" src="assets/img/transparent.svg"
                            data-imgurl="assets/img/img-9.webp" width="227" height="227">
                        <h4><a href="#">Professional Audio Book</a></h4>
                        <p>Get audiobook with excellent narration and proper edits.</p>
                    </div>
                    <div class="homepage-programs--entry">
                        <div class="program-info">
                            <div class="program-icon"> <img loading="lazy" src="assets/img/transparent.svg"
                                    data-imgurl="assets/img/professional-audio-book.svg" alt="Author Program" width="35"
                                    height="35">
                            </div>
                            <div class="program-title"> <a href="javascript:void(Tawk_API.toggle())"
                                    target="_self">Chat
                                    with us to <span>AVAIL UPTO 85% Discount</span>
                                </a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box"> <img loading="lazy" src="assets/img/transparent.svg"
                            data-imgurl="assets/img/img-10.webp" width="227" height="227">
                        <h4><a href="#">Book Video Trailer</a></h4>
                        <p>Design a captivating video trailer for your book with our award-winning designers.</p>
                    </div>
                    <div class="homepage-programs--entry">
                        <div class="program-info">
                            <div class="program-icon"> <img loading="lazy" src="assets/img/transparent.svg"
                                    data-imgurl="assets/img/book-video-trailer.svg" alt="Author Program" width="35"
                                    height="35"> </div>
                            <div class="program-title"> <a href="javascript:void(Tawk_API.toggle())"
                                    target="_self">
                                    Chat with us to <span>AVAIL UPTO 85% Discount</span> </a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box"> <img loading="lazy" src="assets/img/transparent.svg"
                            data-imgurl="assets/img/img-11.webp" width="227" height="227">
                        <h4><a href="#">Book Cover Design</a></h4>
                        <p>Book Covers that will prompt the readers to pick your book.</p>
                    </div>
                    <div class="homepage-programs--entry">
                        <div class="program-info">
                            <div class="program-icon"> <img loading="lazy" src="assets/img/transparent.svg"
                                    data-imgurl="assets/img/book-cover-design.svg" alt="Author Program" width="35"
                                    height="35"> </div>
                            <div class="program-title"> <a href="javascript:void(Tawk_API.toggle())"
                                    target="_self">
                                    Chat with us to <span>AVAIL UPTO 85% Discount</span> </a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box"> <img loading="lazy" src="assets/img/transparent.svg"
                            data-imgurl="assets/img/img-12.webp" width="227" height="227">
                        <h4><a href="#p">Custom Book Illustration</a></h4>
                        <p>A picture’s worth a thousand words, an illustration, million.</p>
                    </div>
                    <div class="homepage-programs--entry">
                        <div class="program-info">
                            <div class="program-icon"> <img loading="lazy" src="assets/img/transparent.svg"
                                    data-imgurl="assets/img/custom-book-illustration.svg" alt="Author Program"
                                    width="35" height="35">
                            </div>
                            <div class="program-title"> <a href="javascript:void(Tawk_API.toggle())"
                                    target="_self">
                                    Chat with us to <span>AVAIL UPTO 85% Discount</span> </a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box"> <img loading="lazy" src="assets/img/transparent.svg"
                            data-imgurl="assets/img/img-13.webp" width="227" height="227">
                        <h4><a href="#">Article Writing & Publication</a></h4>
                        <p>Shine bright as a researcher and make necessary strides in advancing scientific knowledge.
                        </p>
                    </div>
                    <div class="homepage-programs--entry">
                        <div class="program-info">
                            <div class="program-icon"> <img loading="lazy" src="assets/img/transparent.svg"
                                    data-imgurl="assets/img/article-writing-publication.svg" alt="Author Program"
                                    width="35" height="35">
                            </div>
                            <div class="program-title"> <a href="javascript:void(Tawk_API.toggle())"
                                    target="_self">
                                    Chat with us to <span>AVAIL UPTO 85% Discount</span> </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about__home_intro background-image" data-imgurl="assets/img/bg1.webp">
        <div class="about__intro_text">
            <h3>AMZ Publishing Official</h3>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row align-items-center position-relative">
                        <div class="col-md-8 position-static">
                            <h2>FORMATTING IS NO LONGER AN INCONVENIENCE WITH OUR SOLUTIONS
                            </h2>
                            <hr>
                            <p>We are here to assist you in finding the proper path. We provide total book authoring,
                                editing, publishing, and marketing solutions at AMZ Publishing Official!</p>
                            <ul class="listing">
                                <li>
                                    <i data-imgurl="assets/img/icon-check2.webp"></i> Ghostwriting
                                </li>
                                <li> <i data-imgurl="assets/img/icon-check2.webp"></i> E-book Writing</li>
                                <li> <i data-imgurl="assets/img/icon-check2.webp"></i> Editing and Formatting</li>
                                <li> <i data-imgurl="assets/img/icon-check2.webp"></i> Book Publishing</li>
                                <li> <i data-imgurl="assets/img/icon-check2.webp"></i> Cover Designing</li>
                                <li> <i data-imgurl="assets/img/icon-check2.webp"></i> Cover Marketing</li>
                            </ul>
                            <div class="button">
                                <a href="get-a-quote/" class="btn btn__effect btn-hovereff">Get a Free Proposal</a>
                                <a href="javascript:void(Tawk_API.toggle())"
                                    class="btn btn__effect__trans__blcktext btn-hovereff">Talk to an Expert</a>
                                <a href="tel:+1 (888) 285 2656" class="btn btn__effect btn-hovereff">+1 (888) 285 2656</a>
                            </div>
                        </div>
                        <div class="col-md-4 position-static">
                            <img src="assets/img/main-book2.webp" alt="book" width="917" height="725">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec_cta">
        <div class="container">
            <div class="row">
                <div class="cta_inner d-flex">
                    <div class="col-md-5">
                        <div class="cta_left wow fadeInUp text-center">
                            <img loading="lazy" src="assets/img/tag-01.png" alt="discount" width="206" height="211">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cta_right wow fadeInRight">
                            <h2>We give words to your thoughts!</h2>
                            <h4>Start now and avail up to 85% off on all of our packages.</h4>
                            <div class="button">
                                <a href="get-a-quote/" class="btn-black popUpBtn">Get Started</a>
                                <a href="javascript:void(Tawk_API.toggle())" class="btn-yel"> Live Chat</a>
                            </div>
                            <div class="number">
                                <a href="tel:+1 (888) 285 2656">Call Us +1 (888) 285 2656</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="our-approach">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 mx-auto">
                    <div class="para">
                        Do you have a hard time formatting your books?
                    </div>
                    <h4 class="heading">FORGET FORMATTING CONCERNS AND WRITE AWAY WITHOUT SERVICES</h4>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="assets/img/transparent.svg" data-imgurl="assets/img/finding-correcting-issues.png"
                                alt="Finding And Correcting Issues">
                            <div class="card-title">Detecting and Resolving Issues</div>
                            <div class="card-text">Our formatting experts need the manuscript in order to find and
                                correct any formatting mistakes and give your book the right publication shape.</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="assets/img/transparent.svg" data-imgurl="assets/img/required-expertise-tools.png"
                                alt="Using Required Expertise And Tools">
                            <div class="card-title">Utilizing the Tools and Expertise Necessary</div>
                            <div class="card-text">When preparing your book, the pros at AMZ Publishing Official spare no
                                detail. We are familiar with all of the contemporary skills and technologies that make
                                the process simpler and more effective.</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="assets/img/transparent.svg" data-imgurl="assets/img/customized-offers.png" alt="">
                            <div class="card-title">Offering Customized Services</div>
                            <div class="card-text">Based on your unique requirements and the genre of your work, we
                                provide specialized formatting solutions. We make sure that the final product lives up
                                to your standards.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="timeline-sec">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 mx-auto">
                    <h4 class="heading">OUR PROCESS</h4>
                </div>
            </div>
            <div class="row mt-4 ">
                <div class="col-md-12 mx-auto">
                    <div class="row mt-4 timelineSec__box">
                        <div class="col-md-5">
                            <div class="card timeline-right-arrow">
                                <div class="card-body">
                                    <div class="card-title">
                                        Unparalleled Book Formatting Solutions
                                    </div>
                                    <div class="card-text">
                                        Do you find it challenging to follow international book formatting standards?
                                        Don't worry; the formatting experts at Amazon Publishing Network are familiar
                                        with all international standards and know how to format books flawlessly. With
                                        our help, you may create a straightforward and unified style for your
                                        publications. We are here to help you reach your goal of seeing success in your
                                        job.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 ms-auto"><span
                                class="text-orange d-flex h-100 justify-content-start align-items-center">01</span>
                        </div>
                    </div>
                    <div class="row pt-4 timelineSec__box">
                        <div class="col-md-5 order-md-2">
                            <div class="card timeline-left-arrow">
                                <div class="card-body">
                                    <div class="card-title">
                                        Identifying and Fixing Issues
                                    </div>
                                    <div class="card-text">
                                        Our formatting experts need the manuscript in order to find and correct any
                                        formatting mistakes and give your book the right publication shape.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 me-auto order-md-1 text-end"><span
                                class="text-orange d-flex h-100 justify-content-end align-items-center">02</span></div>
                    </div>
                    <div class="row pt-4  timelineSec__box">
                        <div class="col-md-5">
                            <div class="card timeline-right-arrow">
                                <div class="card-body">
                                    <div class="card-title">
                                        Using the Required Tools and Skills
                                    </div>
                                    <div class="card-text">
                                        The pros at AMZ Publishing Official don't spare any detail when it comes to formatting
                                        your book. We are aware of all the contemporary skills and technologies that
                                        make the process simpler and more effective.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 ms-auto"><span
                                class="text-orange d-flex h-100 justify-content-start align-items-center">03</span>
                        </div>
                    </div>
                    <div class="row pt-4  timelineSec__box">
                        <div class="col-md-5 order-md-2">
                            <div class="card timeline-left-arrow">
                                <div class="card-body">
                                    <div class="card-title">
                                        Personalized Service Provision
                                    </div>
                                    <div class="card-text">
                                        Depending on the topic of your work and your unique requirements, we provide
                                        tailored formatting solutions. We make sure that the final product lives up to
                                        your standards.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 me-auto order-md-1 text-end"><span
                                class="text-orange d-flex h-100 justify-content-end align-items-center">04</span></div>
                    </div>
                    <div class="row pt-4  timelineSec__box">
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        Do You Want to Use Global Formatting Standards to Publish Your Book?
                                    </div>
                                    <div class="card-text">
                                        AMZ Publishing Official formatters can standardize the publication of your book
                                        and guarantee its beautiful presentation.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 ms-auto"><span
                                class="text-orange d-flex h-100 justify-content-start align-items-center">05</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about__home_intro about__home_intro2 background-image" data-imgurl="assets/img/bg1.webp">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row align-items-center position-relative">
                        <div class="col-md-8 position-static">
                            <h2>HERE IS A COMPLETE SOLUTION TO ALL OF YOUR FORMATTING NEEDS!</h2>
                            <hr>
                            <p>We're here to assist you in getting back on course. At AMZ Publishing Official, we offer
                                complete book authoring, editing, publishing, and marketing services!</p>
                            <div class="button">
                                <a href="get-a-quote/" class="btn btn__effect btn-hovereff">Get a Free Proposal</a>
                                <a href="javascript:void(Tawk_API.toggle())"
                                    class="btn btn__effect__trans__blcktext btn-hovereff">Talk to an Expert</a>
                                <a href="tel:+1 (888) 285 2656" class="btn btn__effect btn-hovereff">+1 (888) 285 2656</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="assets/img/new-image-twoo-1024x803.png" alt="book">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonial_sec">
        <div class="container">
            <h2 class="heading wow animate__fadeInLeft">Witness Our Clientele And Their Satisfaction With Our Services.
            </h2>
            <p class="para wow animate__fadeInLeft">AMZ Publishing Official is a creative network that fosters
                everyone's needs! We guarantee that your narrative is intriguing to read while remaining true to its
                concept. We ensure that the book grabs readers' interest and is challenging to put down while keeping in
                mind the importance of first impressions. The strongest parts of your work should be placed front and
                center so that readers know the purpose of their reading while being hooked to the story!
            </p>
            <div class="testimonial_boxes">
                <div class="row">
                    <div class="col-sm-6 relate wow animate__fadeInUp">
                        <img loading="lazy" src="assets/img/fade-bg.png" class="img-responsive fade_img">
                        <div class="testimonial_slider">
                            <div class="clien_review_box">
                                <div class="review_body">
                                    <div class="col-md-4">
                                        <img loading="lazy" src="assets/img/trustpilot_icon.jpg">
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Jonah Hunt</h4><br>
                                        <p class="review_description">'AMZ Publishing Officialassigned a dedicated
                                            team for me, handed me
                                            a written strategy, and we had eight short stories published and promoted.
                                            Looking forward to
                                            hiring them for the next series' </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clien_review_box">
                                <div class="review_body">
                                    <div class="col-md-4">
                                        <img loading="lazy" src="assets/img/trustpilot_icon.jpg">
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Neil Anderson, Sr</h4><br>
                                        <p class="review_description">I appreciate and love David's ability to recognize
                                            my needs, improve
                                            the quality of my work, and have the willingness to work his magic on my
                                            book. My book would not
                                            have been published if it hadn't been for Frank. Thank you to him and this
                                            company for realizing
                                            my ambition.'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="clien_review_box">
                                <div class="review_body">
                                    <div class="col-md-4">
                                        <img loading="lazy" src="assets/img/trustpilot_icon.jpg">
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Ricarda Parker</h4><br>
                                        <p class="review_description">‘I think my editor was very competent and gave
                                            excellent service. She
                                            provided me with suggestions about how I could improve it. What I liked best
                                            about her was that
                                            she seemed to believe in my notion.’</p>
                                    </div>
                                </div>
                            </div>
                            <div class="clien_review_box">
                                <div class="review_body">
                                    <div class="col-md-4">
                                        <img loading="lazy" src="assets/img/trustpilot_icon.jpg">
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Willie Walker</h4><br>
                                        <p class="review_description">‘I discovered AMZ Publishing Official when
                                            seeking for a
                                            professional book writing service to enhance my existing work. The project
                                            manager collaborated
                                            with me to develop a first-rate final document that can now be published.
                                            Thank you very much once
                                            again.’</p>
                                    </div>
                                </div>
                            </div>
                            <div class="clien_review_box">
                                <div class="review_body">
                                    <div class="col-md-4">
                                        <img loading="lazy" src="assets/img/trustpilot_icon.jpg">
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Laura Nieves</h4><br>
                                        <p class="review_description">‘I discovered AMZ Publishing Officialon the
                                            internet. I'd written a
                                            narrative about a horrible event in the lives of my young granddaughter. She
                                            had to have one eye
                                            removed when she was 15 months old due to a malignant growth linked to it. I
                                            wanted a written
                                            record for her when she grew older because she would have no recollection of
                                            the procedure. I
                                            merely wanted the narrative turned into a book and a few copies produced to
                                            gift to her and her
                                            parents, as well as a copy for myself. I contacted them, and they were quite
                                            supportive and
                                            helpful after I informed them about my idea. I had no reservations about
                                            working with this firm.
                                            And when they learned about my tale, they were enthralled. They are really
                                            quick to respond and
                                            assist me. I would highly suggest them to anyone seeking for a book
                                            publisher. I absolutely adore
                                            the book.’</p>
                                    </div>
                                </div>
                            </div>
                            <div class="clien_review_box">
                                <div class="review_body">
                                    <div class="col-md-4">
                                        <img loading="lazy" src="assets/img/trustpilot_icon.jpg">
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Karen Riggs</h4><br>
                                        <p class="review_description">‘AMZ Publishing Officialperformed an
                                            outstanding job marketing and
                                            promoting my book. They followed all of their commitments and were
                                            transparent about all of their
                                            procedures. I'm overjoyed’</p>
                                    </div>
                                </div>
                            </div>
                            <div class="clien_review_box">
                                <div class="review_body">
                                    <div class="col-md-4">
                                        <img loading="lazy" src="assets/img/trustpilot_icon.jpg">
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Matthew Feller</h4><br>
                                        <p class="review_description">‘For the price, this is an excellent product. I
                                            was first concerned
                                            about picking someone entirely online, but they set my mind at rest by
                                            providing high-quality
                                            items and fulfilling all of their promises.’</p>
                                    </div>
                                </div>
                            </div>
                            <div class="clien_review_box">
                                <div class="review_body">
                                    <div class="col-md-4">
                                        <img loading="lazy" src="assets/img/trustpilot_icon.jpg">
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Michael Burch</h4><br>
                                        <p class="review_description">‘They did as instructed. Excellent book review.
                                            Thank you for doing
                                            such an excellent job.’</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 wow fadeInRight">
                        <div class="testimonial_box_lf">
                            <a href="#">
                                <img loading="lazy" src="assets/img/testimonial_right.png" class="w-100">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include_once("includes/footer.php")?>
</body>

</html>