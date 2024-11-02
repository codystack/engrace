<?php
include "./components/header.php";
include "./components/navbar.php";
?>

    <main>
        
        <section class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="breadcrumb-text">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="./" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single">contact</a></li>
                        </ul>
                    </nav>
                    <h1 class="title wow fadeInUp" data-wow-delay="0.1s">contact us</h1>
                </div>
            </div>
        </section>

        <div class="volunteer-details top-bottom-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-section">
                            <div class="contact-list">
                                <div class="contact-icon-list">
                                    <div class="single-icon">
                                        <i class="ri-phone-fill"></i>
                                    </div>
                                    <div class="divider-ver"></div>
                                    <div class="contact-content">
                                        <p class="subtitle">Phone</p>
                                        <a class="title" href="javascript:void(0)">+234 701-717-9166</a>
                                    </div>
                                </div>
                                <div class="contact-icon-list">
                                    <div class="single-icon">
                                        <i class="ri-mail-fill"></i>
                                    </div>
                                    <div class="divider-ver"></div>
                                    <div class="contact-content">
                                        <p class="subtitle">Email</p>
                                        <a class="title" href="javascript:void(0)">info@engracedlifefoundation.org.ng</a>
                                    </div>
                                </div>
                                <div class="contact-icon-list">
                                    <div class="single-icon">
                                        <i class="ri-map-pin-line"></i>
                                    </div>
                                    <div class="divider-ver"></div>
                                    <div class="contact-content">
                                        <p class="subtitle">Location</p>
                                        <a class="title" href="https://maps.app.goo.gl/Mh5EF9UyADu5fUfc7" target="_blank">View on Google Map</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-padding4">
                    <div class="row gy-24">
                        <div class="col-xl-6">
                            <div class="send-box">
                                <form action="contact-us.html" class="custom-form">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label class="custom-label" for="exampleFormControlInput1">Full Name</label>
                                                <input type="text" class="form-control custom-input" id="exampleFormControlInput1" placeholder="Alex Jordan">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label class="custom-label" for="exampleFormControlInput5">Phone</label>
                                                <input type="text" class="form-control custom-input" id="exampleFormControlInput5" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label class="custom-label" for="exampleFormControlInput2">Email address</label>
                                                <input type="email" class="form-control custom-input" id="exampleFormControlInput2" placeholder="name@example.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="custom-label" for="exampleFormControlTextarea1">Message</label>
                                            <textarea class="form-control custom-textarea" id="exampleFormControlTextarea1" placeholder="Type You message here"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="submit-btn">Send Message</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15854.881661770363!2d3.3801679977026073!3d6.556935444977896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8d7e0016f285%3A0x8d7bbd27a2060c4f!2sGbagada%2C%20Lagos%20105102%2C%20Lagos!5e0!3m2!1sen!2sng!4v1730398440353!5m2!1sen!2sng" width="600" height="700" style="border: 25px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </main>
<?php include "./components/footer.php"; ?>