<!DOCTYPE html>
<html>

<?php include_once("includes/head.php")?>
<title>Portfolio | AMZ Publishing Official  Projects and Works</title>

<meta name="description"
    content="Explore AMZ Publishing Official 's portfolio of successful projects and works. See the quality of our publishing services.">
<body>
    <?php include_once("includes/header.php")?><main>
        <section class="home-banner" style="background-image: url(images/pricing-banner.webp)">
            <div class="container">
                <div class="banner-content">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-12">
                            <h6 class="theme-tagline">Portfolio</h6>
                            <h1 class="theme-h1">A group of works that go further than ordinary</h1>
                            <p class="theme-p">You won't work every moment of your life if you like what you're doing,
                                the saying goes.  The projects in the list beneath serve as more than examples of our
                                work; they are the results of some enjoyment throughout the workday.</p>
                            <ul class="theme-btn-ul">
                                <li>
                                    <a class="theme-btn theme-btn-dark btn-icon"
                                        href="javascript:;$zopim.livechat.window.toggle()">live chat</a>
                                </li>
                                <li>
                                    <a class="theme-btn theme-btn-featured btn-icon" href="javascript:;"
                                        data-bs-toggle="modal" data-bs-target="#getquote-popup">Get started</a>
                                </li>
                            </ul>
                            <img class="banner-brands" src="images/banner-brands.webp" alt="image">
                            <p class="theme-p">Rated 9 out of 10 <span class="icons">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </span> based on 3,543 satisfied customers.</p>
                        </div>
                        <div class="col-lg-5 col-12">
                            <form action="/leads/" method="POST">
                                <div class="banner-form">
                                    <h3 class="theme-h3">Submit Your Application!</h3>
                                    <p class="theme-p">Discuss Your Project With Our Experts</p>
                                    <div class="input-field">
                                        <input name="name" type="text" placeholder="Name" required>
                                    </div>
                                    <div class="input-field">
                                        <input name="email" type="email" placeholder="Email" required>
                                    </div>
                                    <div class="input-field">
                                        <input name="phone" type="tel" placeholder="Phone Number" required>
                                    </div>
                                    <div class="input-field">
                                        <textarea name="brief"
                                            placeholder="To Help Us Understand Better, Enter A Brief Description About Your Project."
                                            required></textarea>
                                    </div>
                                    <button class="theme-btn theme-btn-featured btn-icon" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <a class="scroll-down" href="javascript:;">
                <i class="fa-regular fa-arrow-down"></i>
            </a>
        </section>
        <section class="logobar section-second">
            <div class="container">
                <div class="row justify-content-between align-items-center gx-lg-0 g-4">
                    <div class="col-lg-2 col-12">
                        <p class="theme-p">AMZ Publishing Official Is Your <span>Ultimate Resource</span> To Hire
                            Professional
                            Ghostwriters.</p>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="logo-logobar">
                            <img class="img-fluid" src="images/logo-logobar.webp" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-2 col-12">
                        <a class="theme-btn theme-btn-featured btn-icon" href="javascript:;" data-bs-toggle="modal"
                            data-bs-target="#getquote-popup">Get started</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="portfolio-work padding-sec">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-4 col-12">
                        <h2 class="theme-h2">Our Proud and Skillfully Made Work</h2>
                    </div>
                    <div class="col-lg-8 col-12">
                        <p class="theme-p">The wide spectrum of ghostwriting services we provide is displayed in our
                            Portfolio, which ranges from best-selling book projects to custom business documents and
                            beyond.</p>
                    </div>
                </div>
                <div class="portfolio-content">
                    <ul class="nav" id="portfolioContents" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="theme-btn theme-btn-outline active" id="fictions-tab" data-bs-toggle="tab"
                                data-bs-target="#fictions-tab-pane" type="button" role="tab"
                                aria-controls="fictions-tab-pane" aria-selected="true">fictions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="theme-btn theme-btn-outline" id="non-fictions-tab" data-bs-toggle="tab"
                                data-bs-target="#non-fictions-tab-pane" type="button" role="tab"
                                aria-controls="non-fictions-tab-pane" aria-selected="false">non-fictions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="theme-btn theme-btn-outline" id="memoir-tab" data-bs-toggle="tab"
                                data-bs-target="#memoir-tab-pane" type="button" role="tab"
                                aria-controls="memoir-tab-pane" aria-selected="false">Mystery</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="theme-btn theme-btn-outline" id="autobiography-tab" data-bs-toggle="tab"
                                data-bs-target="#autobiography-tab-pane" type="button" role="tab"
                                aria-controls="autobiography-tab-pane" aria-selected="false">autobiography</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="theme-btn theme-btn-outline" id="informative-tab" data-bs-toggle="tab"
                                data-bs-target="#informative-tab-pane" type="button" role="tab"
                                aria-controls="informative-tab-pane" aria-selected="false">horror</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="theme-btn theme-btn-outline" id="biography-tab" data-bs-toggle="tab"
                                data-bs-target="#biography-tab-pane" type="button" role="tab"
                                aria-controls="biography-tab-pane" aria-selected="false">biography</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="theme-btn theme-btn-outline" id="children-book-tab" data-bs-toggle="tab"
                                data-bs-target="#children-book-tab-pane" type="button" role="tab"
                                aria-controls="children-book-tab-pane" aria-selected="false">children book</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="portfolioContentsContent">
                        <div class="tab-pane fade show active" id="fictions-tab-pane" role="tabpanel"
                            aria-labelledby="fictions-tab" tabindex="0">
                            <div class="row row-cols-lg-6 row-cols-md-3 row-cols-2 justify-content-center">
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/fiction/1.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/fiction/2.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/fiction/3.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/fiction/4.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/fiction/5.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/fiction/6.jpg" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="non-fictions-tab-pane" role="tabpanel"
                            aria-labelledby="non-fictions-tab" tabindex="0">
                            <div class="row row-cols-lg-6 row-cols-md-3 row-cols-2 justify-content-center">
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/non-fictions/1.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/non-fictions/2.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/non-fictions/3.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/non-fictions/5.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/non-fictions/4.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/non-fictions/6.jpg" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="memoir-tab-pane" role="tabpanel" aria-labelledby="memoir-tab"
                            tabindex="0">
                            <div class="row row-cols-lg-6 row-cols-md-3 row-cols-2 justify-content-center">
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/memoir/1.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/memoir/2.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/memoir/3.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/memoir/4.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/memoir/5.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/memoir/6.jpg" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="autobiography-tab-pane" role="tabpanel"
                            aria-labelledby="autobiography-tab" tabindex="0">
                            <div class="row row-cols-lg-6 row-cols-md-3 row-cols-2 justify-content-center">
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/autobiographies/1.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/autobiographies/2.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/autobiographies/3.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/autobiographies/4.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/autobiographies/5.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/autobiographies/6.jpg" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="informative-tab-pane" role="tabpanel"
                            aria-labelledby="informative-tab" tabindex="0">
                            <div class="row row-cols-lg-6 row-cols-md-3 row-cols-2 justify-content-center">
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/informative/1.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/informative/2.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/informative/3.webp" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/informative/4.webp" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/informative/5.webp" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/informative/6.webp" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="biography-tab-pane" role="tabpanel"
                            aria-labelledby="biography-tab" tabindex="0">
                            <div class="row row-cols-lg-6 row-cols-md-3 row-cols-2 justify-content-center">
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/biography/1.webp" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/biography/2.webp" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/biography/3.webp" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/biography/4.webp" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/biography/5.webp" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/biography/6.webp" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="children-book-tab-pane" role="tabpanel"
                            aria-labelledby="children-book-tab" tabindex="0">
                            <div class="row row-cols-lg-6 row-cols-md-3 row-cols-2 justify-content-center">
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/children-book/1.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/children-book/2.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/children-book/3.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/children-book/4.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/children-book/5.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="img-item">
                                        <img class="img-fluid" src="images/portfolio/children-book/6.jpg" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cant-wait-manuscript padding-sec">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6 col-12">
                        <h2 class="theme-h2">Can't Wait To See Your Manuscript Published?</h2>
                        <p class="theme-p">We Are Here To Help You.Book Writing Provides Entire Book Writing And
                            Publishing
                            Services. Among Our Services Are:</p>
                        <ul class="theme-keypoints keypoints-white">
                            <li>Ghost Book Writing</li>
                            <li>Editing</li>
                            <li>Book Publishing</li>
                            <li>Ebook Writing</li>
                            <li>Book Video Trailer</li>
                            <li>Book Cover Design</li>
                            <li>Author Website</li>
                            <li>Book Marketing</li>
                            <li>Script writing</li>
                            <li>Custom Book Illustration</li>
                            <li>Article Writing</li>
                        </ul>
                        <div class="cta-link">
                            <a href="javascript:;$zopim.livechat.window.toggle()">need help?</a>
                            <a class="theme-btn theme-btn-dark btn-icon" href="javascript:;" data-bs-toggle="modal"
                                data-bs-target="#getquote-popup">get started</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <form action="/leads/" method="POST">
                            <div class="banner-form">
                                <h3 class="theme-h3">Submit Your Application!</h3>
                                <p class="theme-p">Discuss Your Project With Our Experts</p>
                                <div class="input-field">
                                    <input name="name" type="text" placeholder="Name" required>
                                </div>
                                <div class="input-field">
                                    <input name="email" type="email" placeholder="Email" required>
                                </div>
                                <div class="input-field">
                                    <input name="phone" type="tel" placeholder="Phone Number" required>
                                </div>
                                <div class="input-field">
                                    <textarea name="brief"
                                        placeholder="To Help Us Understand Better, Enter A Brief Description About Your Project."
                                        required></textarea>
                                </div>
                                <button class="theme-btn theme-btn-dark btn-icon" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once("includes/footer.php")?>