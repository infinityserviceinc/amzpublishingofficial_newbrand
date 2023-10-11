<!DOCTYPE html>
<html lang="en">

<?php include_once("includes/head.php")?>



<body>
    <?php include_once("includes/header.php")?>


    <section class="banner">
        <div class="container">
            <div class="row d-block">
                <div class="banner__grid">
                    <div class="content">
                        <h5>PUBLISH YOUR MASTERPIECE FOR THE CRAVING READERS.</h5>
                        <h1>SERVE YOUR BOOK WITH SPRINKLES ON TOP</h1>
                        <hr>
                        <div>
                            <p>Get your plot published with our services and get your name into the history of great
                                writers.</p>
                            <div class="btn-group">
                                <a href="get-a-quote/" class="btn btn-white">Get Free
                                    <strong>Consultation</strong></a>
                                <a href="javascript:void(Tawk_API.toggle())" class="btn btn-primary">Publish
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
                        <div class="item">
                            <img loading="lazy" src="assets/img/transparent.svg"
                                data-imgurl="assets/img/banner-rignt-img.png" alt="Book Listing" width="923"
                                height="538">
                        </div>
                        <div class="item">
                            <img loading="lazy" src="assets/img/transparent.svg"
                                data-imgurl="assets/img/webp/banner-rignt-img2.webp" alt="Book Listing" width="923"
                                height="538">
                        </div>
                        <div class="item">
                            <img loading="lazy" src="assets/img/transparent.svg"
                                data-imgurl="assets/img/webp/banner-rignt-img3.webp" alt="Book Listing" width="923"
                                height="538">
                        </div>
                        <div class="item">
                            <img loading="lazy" src="assets/img/transparent.svg"
                                data-imgurl="assets/img/webp/banner-rignt-img4.webp" alt="Book Listing" width="923"
                                height="538">
                        </div>
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


    <section class="our-approach">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card min-height-37">
                        <div class="card-body">
                            <img src="assets/img/transparent.svg" data-imgurl="assets/img/well-writers.png"
                                alt="Professional">
                            <div class="card-title">Professional</div>
                            <div class="card-text">No time to write your wonder-worthy plot? Our expert ghostwriters are
                                at your disposal to transform your thoughts into a completely composed novel. Our expert
                                content developers are available to aid at your convenience 24/7. Take your pick, and
                                let's get started with your work. We yearn for the opportunity to work with the next
                                great author of our times.</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card min-height-37">
                        <div class="card-body">
                            <img src="assets/img/transparent.svg" data-imgurl="assets/img/customized-offers.png"
                                alt="Custom">
                            <div class="card-title">Custom</div>
                            <div class="card-text">Our professional and qualified ghostwriters will draft, edit,
                                proofread, or amend your text. Get your book edited, designed, and ghostwritten
                                precisely how you want it. AMZ Publishing Official will interview you to learn more
                                about your work, after which our skilled writer will give it more personality and voice.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card min-height-37">
                        <div class="card-body">
                            <img src="assets/img/transparent.svg" data-imgurl="assets/img/refund-policy.png"
                                alt="Affordable">
                            <div class="card-title">Cost-effective</div>
                            <div class="card-text">Our professional and qualified ghostwriters will draft, edit,
                                proofread, or amend your text. Get your book edited, designed, and ghostwritten
                                precisely how you want it. AMZ Publishing Official will interview you to learn more
                                about your work, after which our skilled writer will give it more personality and voice.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about__home_intro background-image" data-imgurl="assets/img/bg1.webp">
        <div class="about__intro_text">
            <h3>Book WRITing Company</h3>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row align-items-center position-relative">
                        <div class="col-md-8 position-static">
                            <h2 data-letter="G">Ground-Breaking Book Writing Services
                            </h2>
                            <hr>
                            <p>We have a history of meticulously putting incredible concepts, ideas, and feelings into
                                language. By helping our clients write, edit, review, format, and publish their books,
                                we help them establish themselves as literary heavyweights while giving life to their
                                ideas.</p>
                            <p>To finish things off and produce a finished product, start with AMZ Publishing Official.
                            </p>
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
                            <h3>SELLING BOOKS - THE STRUGGLE IS REAL.</h3>
                            <h4>Hire a Book Writing Company to SELL your BOOK!</h4>
                            <div class="button">
                                <a href="get-a-quote/" class="btn-black popUpBtn">Get Started</a>
                                <a href="#" " class="btn-yel"> Live Chat</a>
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

    <section class="our-services">
        <div class="container">
            <div class="row">
                <ul>
                    <li>
                        <i data-imgurl="assets/img/icon-01.png"></i>
                        <h4>Editing a Book</h4>
                        <p>Editing is a crucial part of book composing and is a post-writing process. Our experts have a
                            great command of this aspect. The editors will take your rough draft and adjust the writing
                            to the polished finality it needs to be to publish. This will enable your book to gain the
                            appreciation it deserves. Your quality conscience is sure to give in to our final product
                            and proofread to ensure a lack of errors in all regards, including grammar, punctuation, and
                            terminology mistakes.</p>
                    </li>
                    <li>
                        <i data-imgurl="assets/img/icon-02.png"></i>
                        <h4>Ghostwriting</h4>
                        <p>Deliver your ideas and let our writers get to work with their reserves of relevant adjectives
                            and creativity. The unrequited thirst for imagination is poured down over your plot to give
                            rise to one successful copy of a publishable book. All in your name. Ready for the grand
                            identity of an esteemed author?</p>
                    </li>
                    <li>
                        <i data-imgurl="assets/img/icon-03.png"></i>
                        <h4>Book Publishing</h4>
                        <p>Bid adieu to the hassle of traditional book publishing. Instead, we'll take your work and
                            publish it as the best edition of a book that has ever existed. AMZ Publishing Official has
                            published books in a number of genres and collaborates with a wide range of authors.</p>
                    </li>
                    <li>
                        <i data-imgurl="assets/img/icon-04.png"></i>
                        <h4>Proofreading a Book</h4>
                        <p>Before a book is published, proofreading is a crucial step to ensure accuracy, consistency,
                            and quality. Your readers will receive the most captivating and engaging reading material
                            possible since they deserve it. With the help of our book proofreading service, you can be
                            confident that your writing has been carefully reviewed and is ready for publication.</p>
                    </li>
                    <li>
                        <i data-imgurl="assets/img/icon-05.png"></i>
                        <h4>Formatting a Book</h4>
                        <p>We at AMZ Publishing Official are aware of how important it is to adhere to international
                            book design standards and how doing otherwise might result in a range of unimaginable
                            inconveniences. However, we never let your time and effort go to waste. Instead, our skilled
                            formatters will take care of your formatting issues while you concentrate on writing.</p>
                    </li>
                    <li>
                        <i data-imgurl="assets/img/icon-06.png"></i>
                        <h4>Book Covers</h4>
                        <p>Award-winning creative gurus are available at AMZ Publishing Official to develop excellent
                            concepts that gently complement the titles and catchphrases of your publications. So allow
                            us to breathe new life into your writings and bring back brilliant insights. Blending text,
                            images, and design thinking to successfully produce great covers for our clients.</p>
                    </li>
                    <li>
                        <i data-imgurl="assets/img/icon-07.png"></i>
                        <h4>Marketing on the Internet</h4>
                        <p>The internet is a base of great competition. To be a competitor in this market, there needs
                            to be an understanding of the approach, audience and results. AMZ Publishing Official offers
                            that and more. With proven results and professionals ready to devise a plan and consult with
                            you, we stand to assure and guarantee a marketing scheme that will sell even to you.</p>
                    </li>
                    <li>
                        <i data-imgurl="assets/img/icon-08.png"></i>
                        <h4>Audio Books</h4>
                        <p>An audiobook is a next stage of writing books. It is important to cope with every advancement
                            of our times so as not to fall behind. Make use of our experts, who will make you a quality
                            audiobook covering all the basics of a successful audiobook. We have a record of success
                            with the most-streamed audiobooks that are also the top sellers in the business.</p>
                    </li>
                    <li>
                        <i data-imgurl="assets/img/icon-09.png"></i>
                        <h4>Copyright for the Book</h4>
                        <p>Copyright is a wonderful part of this industry, where you get to keep all the rights to your
                            work with its originality intact. We offer comprehensive copyright solutions for
                            publications of all sizes and forms, from inception to completion, because we understand the
                            value and preservation of your identity and originality. We provide clients all over the
                            world with complete copyright solutions. Additionally, we protect your products online,
                            including audiobooks, PDFs, and physical copies.</p>
                    </li>
                    <li>
                        <i data-imgurl="assets/img/icon-09.png"></i>
                        <h4>Ebook Writing</h4>
                        <p>Minor mistakes and rewriting with a change of mind are common occurrences in writing. This
                            causes an undue burden on your busy routine. AMZ Publishing Official are offering solutions
                            for just that kind of inconvenience. With a complete team of professional e-book writers,
                            you can rest easy with your book taken care of by experienced writers who will write
                            flawlessly to achieve a benchmark of excellence. Grammar, vocab and customer guideline
                            compliance are fair game with our services.</p>
                    </li>
                    <li>
                        <i data-imgurl="assets/img/icon-09.png"></i>
                        <h4>Writing a Blog</h4>
                        <p>Recognizing your target audience is important for the effective marketing of your product.
                            Blogs are one effective tool for this strategic approach. The link between yourself and your
                            target audience can be forged through informative writing about current issues. Our services
                            are sure to leave an impression on you and your audience.</p>
                    </li>
                    <li>
                        <i data-imgurl="assets/img/icon-09.png"></i>
                        <h4>Writing Website Content</h4>
                        <p>Website content is quick to go stale if not written right. You need a spark and accurate
                            delivery of what you're delivering. Our content creators understand this, and their recipe
                            for Web Content has so far filled customers with satisfaction. Make use of our experts for
                            the ideal web copies and get better ROIs with our services. </p>
                    </li>
                    <li>
                        <i data-imgurl="assets/img/icon-09.png"></i>
                        <h4>Writing an Article</h4>
                        <p>Articles hold great potential for promotions and, if used adequately, can bring you to great
                            terms with success. AMZ Publishing Official give you more than just reader attention through
                            their blogs. We guarantee conversions and results. Our narratives are tested with
                            experience, and they bring reader demand to your plate. Consult with our teams and make up
                            your own mind.</p>
                    </li>
                    <li>
                        <i data-imgurl="assets/img/icon-09.png"></i>
                        <h4>Trailer for the Book</h4>
                        <p>Book trailers are a great means of teasing your next masterpiece in the market. Creating the
                            right hype for your target audience can do wonders for your sales. Trailers are a great
                            addition to the promotion of your book. Even avid readers prefer a visual representation of
                            content. And that is precisely what we offer in a profound fashion.</p>
                    </li>
                    <li>
                        <i data-imgurl="assets/img/icon-09.png"></i>
                        <h4>Author's Website</h4>
                        <p>The quickest and easiest way for your audience to learn about and understand you is through
                            your author's website. Hiring a web designer to create a website for your identity as an
                            author will help you step up your game. Call AMZ Publishing Official right away to give your
                            brand a polished appearance and create the brand you've always envisioned.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="about__home_intro about__home_intro2 background-image" data-imgurl="assets/img/bg1.webp">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row align-items-center position-relative">
                        <div class="col-md-8 position-static">
                            <h2>Getting Sidetracked in Your Writing? Book Writing Company will get your ideas published!
                            </h2>
                            <hr>
                            <p>We empower authors and wannabe authors to take the jump into writing with insight, humor,
                                and practicality. Book Writing Company offers full-fledged writing, editing and
                                publishing solutions.</p>
                            <ul class="listing listing2">
                                <li><i data-imgurl="assets/img/icon-check2.webp"></i>Book Covers (Front, Back & Spine)
                                </li>
                                <li><i data-imgurl="assets/img/icon-check2.webp"></i>E-book (Composing & Editing)</li>
                                <li><i data-imgurl="assets/img/icon-check2.webp"></i>Audio-Books</li>
                                <li><i data-imgurl="assets/img/icon-check2.webp"></i>Creating or revising and Outline
                                </li>
                                <li><i data-imgurl="assets/img/icon-check2.webp"></i>Video Book Trailers</li>
                                <li><i data-imgurl="assets/img/icon-check2.webp"></i>Making your book a best seller
                                    (100% guaranteed) with our Digital Marketing Services</li>
                            </ul>
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