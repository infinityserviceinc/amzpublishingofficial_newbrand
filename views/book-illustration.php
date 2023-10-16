<!DOCTYPE html>
<html>

<?php include_once("includes/head.php")?>

<style>
.hover figure img {
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
}

.hover figure:hover img {
    -webkit-transform: scale(1.2);
    transform: scale(0.9);
}
</style>

<body>
    <?php include_once("includes/header.php")?> <main>
        <section class="home-banner" style="background-image: url(images/about-banner.webp)">
            <div class="container">
                <div class="banner-content">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-12">
                            <h6 class="theme-tagline"><strong>The design should have an impact</strong></h6>
                            <h1 class="theme-h1">Book Illustration Services at AMZ Publishing Official</h1>
                            <p class="theme-p">We are a world leader in providing cost-effective Book illustration
                                services</p>
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
        <section class="who-we-are padding-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <img class="img-fluid" src="images/creative-bok.png" alt="image">
                    </div>
                    <div class="col-lg-6 col-12">
                        <h2 class="theme-h2">Book Illustration Services</h2>
                        <p class="theme-p">AMZ Publishing Official Book Illustration Services’ team comprehends the
                            importance of
                            cover art and illustrations in children’s books, picture books, comic books, graphic
                            novels, interactive eBooks, textbooks, and training manuals. The right images and
                            illustrations will translate the information, sentiment, whimsy, or emotional tones the
                            author is trying to convey. AMZ Publishing Official accomplished Illustrators work closely
                            with authors to
                            ensure their message, theme, characters, and style shine through. We’ve handled
                            illustrating books from scratch, as well as conceptualized artwork illustrations to match
                            previous works.</p>
                        <p class="theme-p">Whether you're looking for illustrations for your book cover or an entire
                            book, or only
                            want to have your sketches transformed into digital images, AMZ Publishing Official  team of book
                            illustrators will create engaging illustrations that captivate audiences.</p>
                        <ul class="theme-btn-ul">
                            <li>
                                <a class="theme-btn theme-btn-dark btn-icon"
                                    href="javascript:;$zopim.livechat.window.toggle()">live chat</a>
                            </li>
                            <li>
                                <a class="theme-btn theme-btn-white btn-icon" href="javascript:;" data-bs-toggle="modal"
                                    data-bs-target="#getquote-popup">Get started</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="recent-release padding-sec">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-12">
                    <h2 class="theme-h2">Our Recent Releases</h2>
                    <p class="theme-p">Your One-Stop Shop Offering All Ghostwriting, Editing, And Publishing Solutions.
                    </p>
                    <a class="theme-btn theme-btn-featured btn-icon" href="portfolio.php">Explore More</a>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="recent-release-slider">
                        <div class="owl-theme owl-carousel" id="recent-release-slider">
                            <div class="item">
                                <img class="img-fluid" src="images/portfolio/recent-release/1.webp" alt="image">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="images/portfolio/recent-release/2.webp" alt="image">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="images/portfolio/recent-release/3.webp" alt="image">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="images/portfolio/recent-release/4.webp" alt="image">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="images/portfolio/recent-release/1.webp" alt="image">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="images/portfolio/recent-release/2.webp" alt="image">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="images/portfolio/recent-release/3.webp" alt="image">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="images/portfolio/recent-release/4.webp" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
        <section class="service-logo-bar padding-sec text-center">
            <div class="container">
                <img class="img-fluid" src="images/service-logo-logobar.webp" alt="image">
            </div>
        </section>
        <section class="how-book-publishing-work padding-sec">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-12">
                        <h6 class="theme-tagline">Our Dedicated</h6>
                        <h2 class="theme-h2">BOOK ILLUSTRATION SERVICES</h2>
                        <p class="theme-p">Here are six unique ways AMZ Publishing Official  will provide the very best book illustrations
                            for any of your book
                            requirements</p>
                    </div>
                    <div class="col-lg-4 col-12">
                        <ul class="theme-btn-ul ms-auto">
                            <li>
                                <a class="theme-btn theme-btn-dark btn-icon"
                                    href="javascript:;$zopim.livechat.window.toggle()">live chat</a>
                            </li>
                            <li>
                                <a class="theme-btn theme-btn-featured btn-icon" href="javascript:;"
                                    data-bs-toggle="modal" data-bs-target="#getquote-popup">Get started</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="publishing-work-listing">
                    <div class="row justify-content-center g-4">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="publishing-work-card">
                                <img src="images/01.webp" alt="image">
                                <h4 class="theme-h3">Children’s Book Illustrations</h4>
                                <p class="theme-p">AMZ Publishing Official  uses trending illustration styles, including watercolor, etching,
                                    and graphic design, to
                                    create highly colorful, vivid expressions that will enchant younger audiences and
                                    stimulate
                                    cognitive skills. We research the book and match color palettes, composition, and
                                    style to the
                                    theme, and work with the author to create the best layouts.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="publishing-work-card">
                                <img src="images/02.webp" alt="image">
                                <h4 class="theme-h3">Textbook Illustration</h4>
                                <p class="theme-p">AMZ Publishing Official  researches the author’s written content to create educational,
                                    uncluttered images for both
                                    digital and print textbooks. We rely on simple designs, cohesive color schemes, and
                                    visual
                                    storytelling to augment the learning process. This includes specific illustration
                                    approaches
                                    depending on the educational subject matter.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="publishing-work-card">
                                <img src="images/03.webp" alt="image">
                                <h4 class="theme-h3">Picture Book Illustrations</h4>
                                <p class="theme-p">AMZ Publishing Official uses specialized design and drawing software, including Adobe
                                    Creative Cloud and
                                    Procreate, along with traditional and digital illustration techniques. We consult
                                    with authors to
                                    turn their goals into riveting, concise compositions. We adapt our methods depending
                                    on genre,
                                    whether it’s teaching materials or purely entertaining.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="publishing-work-card">
                                <img src="images/04.webp" alt="image">
                                <h4 class="theme-h3">Training Manual Illustration</h4>
                                <p class="theme-p">AMZ Publishing Official understands that many people comprehend things better with visual
                                    aids rather than text.
                                    We turn training manual text into images that can be basic or elaborate depending on
                                    content
                                    complexity, instructions, and task specifications. We use Adobe Illustrator CC to
                                    create visual
                                    guides with color-coding, and distinguishable lines and shapes.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="publishing-work-card">
                                <img src="images/05.webp" alt="image">
                                <h4 class="theme-h3">Comic Book Illustrations</h4>
                                <p class="theme-p">AMZ Publishing Official team is immersed in comic and animation trends to create
                                    dramatic sketch, ink, color,
                                    and creative captions illustrations that capture the genre’s nostalgia while pushing
                                    artistic
                                    boundaries. Includes lettering, word balloons, characters, and backgrounds that
                                    reflect the
                                    digital nature of the comic industry’s evolution.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="publishing-work-card">
                                <img src="images/06.png" alt="image">
                                <h4 class="theme-h3">Book Cover Illustrations</h4>
                                <p class="theme-p">AMZ Publishing Official takes a balanced approach to cover illustration design for text,
                                    title, and images to ensure the
                                    layout and typography that attracts readers and communicate key book themes. We
                                    include online
                                    dimensional requirements, genre, fonts, colors, and research into illustration
                                    processes to effectively
                                    incorporate how readers respond to these elements.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="portfolios pt-1">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-12 col-12">
                        <!-- <h6 class="theme-tagline text-center">Our Top-class</h6> -->
                        <h2 class="theme-h2 text-center" style="    text-transform: capitalize;">some of our childrens
                            book illustartions</h2>
                        <!-- <p class="theme-p text-center">We offer an extensive range of book illustration services</p> -->
                    </div>

                </div>
                <div class="publishing-work-listing">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="hover">
                                <figure>
                                    <img src="images/portfolio-6.png" width="100%" style="    margin-top: 41px;" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="hover">
                                <figure>
                                    <img src="images/portfolio-7.png" width="100%" style="    margin-top: 41px;" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="hover">
                                <figure>
                                    <img src="images/portfolio-8.png" width="100%" style="    margin-top: 41px;" alt="">
                                </figure>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="hover">
                                <figure>
                                    <img src="images/portfolio-1.png" width="100%" style="    margin-top: 41px;" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="hover">
                                <figure>
                                    <img src="images/portfolio-2.png" width="100%" style="    margin-top: 41px;" alt="">
                                </figure>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="hover">
                                <figure>
                                    <img src="images/portfolio-3.png" width="100%" style="    margin-top: 41px;" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="hover">
                                <figure>
                                    <img src="images/portfolio-4.png" width="100%" style="    margin-top: 41px;" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="hover">
                                <figure>
                                    <img src="images/portfolio-9.png" width="100%" style="    margin-top: 41px;" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="hover">
                                <figure>
                                    <img src="images/portfolio-5.png" width="100%" style="    margin-top: 41px;" alt="">
                                </figure>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12 mt-2">
                    <div class="row">
                        <ul class="theme-btn-ul ms-auto justify-content-center">
                            <li>
                                <a class="theme-btn theme-btn-dark btn-icon"
                                    href="javascript:;$zopim.livechat.window.toggle()">live chat</a>
                            </li>
                            <li>
                                <a class="theme-btn theme-btn-featured btn-icon" href="javascript:;"
                                    data-bs-toggle="modal" data-bs-target="#getquote-popup">Get started</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="why-should-beleive padding-sec">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-12">
                        <div class="sec-title">
                            <h2 class="theme-h2">Why Should You Trust Our Editing Team</h2>
                            <p class="theme-p">All of our book marketers, like every other professional on Amz
                                Publishing Official, have
                                been
                                thoroughly vetted and their credentials validated.</p>
                        </div>
                        <ul class="theme-keypoints keypoints-white">
                            <li>We determine the type of editing you need based on the stage of writing goals.</li>
                            <li>We research potential editors who specialize in your genre.</li>
                            <li>We have experience working with authors at your level.</li>
                            <li>We communicate clearly with your editor about your expectations.</li>
                            <li>We provide authors with all the necessary information about your book.</li>
                            <li>We develop a timeline and budget for your editing project.</li>
                            <li>We review and provide feedback on your editor's work.</li>
                            <li>Ensure your book meets your standards.</li>

                        </ul>
                        <ul class="theme-btn-ul">
                            <li>
                                <a class="theme-btn theme-btn-dark btn-icon"
                                    href="javascript:;$zopim.livechat.window.toggle()">live chat</a>
                            </li>
                            <li>
                                <a class="theme-btn theme-btn-white btn-icon" href="javascript:;" data-bs-toggle="modal"
                                    data-bs-target="#getquote-popup">Get started</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="write-own-book padding-sec">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12 px-lg-5">
                        <h2 class="theme-h2">Let us take your book to the next level</h2>
                        <p class="theme-p">We help bring your ideas to life in the form of a sedulously written and
                            published book</p>
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

                    </div>
                </div>
            </div>
        </section>
        <section class="cant-wait-manuscript padding-sec">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6 col-12">
                        <h2 class="theme-h2">Interested in Seeing Your Book Edited?</h2>
                        <p class="theme-p">Be at ease. Let us improve your book by using one of our qualified book
                            editors.
                        </p>
                        <ul class="theme-keypoints keypoints-white">
                            <li>Spelling and grammar corrections</li>
                            <li>Punctuation and capitalization corrections</li>
                            <li>Consistency checks for style, tone, and language usage</li>
                            <li>Structure and organization improvements</li>
                            <li>Clarity and coherence improvements</li>
                            <li>Character and plot development suggestions</li>
                            <li>Dialogue and narrative flow improvements</li>
                            <li>Fact-checking and research verification</li>
                            <li>Final proofreading check</li>

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