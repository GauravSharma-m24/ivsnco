
<?php 
include '../includes/header.php';

// Fetch slider data from API
$sliderApiUrl = "https://admin.ivsnco.com/api/sliders";
$sliderResponse = file_get_contents($sliderApiUrl);
if ($sliderResponse === FALSE) {
    die('Error occurred while fetching slider data');
}
$sliders = json_decode($sliderResponse, true);

// Fetch news data from API
$apiUrl = "https://admin.ivsnco.com/api/news";
$response = file_get_contents($apiUrl);
if ($response === FALSE) {
    die('Error occurred while fetching news data');
}
$newsData = json_decode($response, true);

// Get only 2 news items
$newsItems = array_slice($newsData, 0, 2);
?>



<main id="main">
            <!----slider-------->
                <div class="rev_slider_wrapper">
                    <div id="rev_slider_1" class="rev_slider" data-version="5.4.5">
                        <ul>
                            <?php if (!empty($sliders) && is_array($sliders)): ?>
                                <?php foreach ($sliders as $index => $slide): ?>
                                    <li 
                                        data-index="rs-<?php echo 3000 + $index; ?>" 
                                        data-transition="zoomout" 
                                        data-slotamount="default" 
                                        data-hideafterloop="0" 
                                        data-hideslideonmobile="off" 
                                        data-easein="Power4.easeInOut" 
                                        data-easeout="Power4.easeInOut" 
                                        data-masterspeed="2000" 
                                        data-thumb="<?php echo $slide['image']; ?>" 
                                        data-rotate="0" 
                                        data-fstransition="fade" 
                                        data-fsmasterspeed="1500" 
                                        data-fsslotamount="7" 
                                        data-saveperformance="off"
                                    >
                                        <img 
                                            src="<?php echo $slide['image']; ?>" 
                                            alt="slide-<?php echo $index; ?>" 
                                            class="rev-slidebg" 
                                            data-bgposition="center center" 
                                            data-bgfit="cover" 
                                            data-bgrepeat="no-repeat" 
                                            data-bgparallax="14" 
                                            data-no-retina
                                            style="width: 100%; height: 100%; object-fit: cover;"
                                        >
                                    </li>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <li><img src="../assets/img/default-slide.jpg" alt="Default Slide" class="rev-slidebg"></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <!----slider-end------->
            <!----welcome------->
            <div class="welcome-section">
                <div class="container-fluid wel-c">
                    <div class="row wel-row">
                        <div class="welcome-sec-outer col-lg-3 col-md-3 col-xs-12 col-sm-12 one">
                            <div class="welcome-sec-inner text-center">
                                <div class="welcome-inner">
                                    <div class="icon">
                                        <span class="flaticon-shout icon"></span>
                                    </div>
                                    <h2><a href="">STATUTORY AND INTERNAL AUDITS</a></h2>
                                    <!-- <p>That empathy of business ownership creates the relationship they required to actually make a difference.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="welcome-sec-outer-mid col-lg-3 col-md-3 col-xs-12 col-sm-12 one">
                            <div class="welcome-sec-inner text-center">
                                <div class="welcome-inner">
                                    <div class="icon">
                                        <span class="flaticon-lightbulb icon"></span>
                                    </div>
                                    <h2><a href="">TAXATION AND PLANNING</a></h2>
                                    <!-- <p>Over 20 years we have been advising a diverse range of businesses on how they can find a competitive advantage.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="welcome-sec-outer col-lg-3 col-md-3 col-xs-12 col-sm-12 one">
                            <div class="welcome-sec-inner text-center">
                                <div class="welcome-inner">
                                    <div class="icon">
                                        <span class="flaticon-partnership icon"></span>
                                    </div>
                                    <h2><a href="">LEGAL MATTERS</a> </h2>
                                    <!-- <p>We partner with clients to put recommendations into practice and work directly with them over the long-term.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="welcome-sec-outer-mid col-lg-3 col-md-3 col-xs-12 col-sm-12 one">
                            <div class="welcome-sec-inner text-center">
                                <div class="welcome-inner">
                                    <div class="icon">
                                        <span class="flaticon-partnership icon"></span>
                                    </div>
                                    <h2><a href="">BUSINESS & SUCCESSION PLANNING</a> </h2>
                                    <!-- <p>We partner with clients to put recommendations into practice and work directly with them over the long-term.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!----welcome-end------>
            
             <!-- <div class="company-overview-sec " >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12 company-outer-one">
                            <div class="company-outer">
                                <div class="company-inner">
                                    <h1>Latest <span>News</span></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div> -->
            <div class="blog-default">
                <div class="container">
                    <div class="row">
                        <?php foreach ($newsItems as $news) : ?>
                            <div class="column col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-default-outer">
                                <div class="blog-content">
                                    <h2><?= htmlspecialchars($news['title']); ?></h2>
                                    <p class="short-content" id="short-<?= $news['id']; ?>">
                                        <?= htmlspecialchars(substr($news['content'], 0, 100)); ?>...
                                    </p>
                                    <p class="full-content" id="full-<?= $news['id']; ?>" style="display:none;">
                                        <?= htmlspecialchars($news['content']); ?>
                                    </p>
                                    <button class="read-more-btn" data-id="<?= $news['id']; ?>">Read More <span class="flaticon-next"></span></button>
                                </div>
                            </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                </div>



            <!------sec-1----company------>
            <div class="company-overview-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12 company-outer-one">
                            <div class="company-outer">
                                <div class="company-inner">
                                    <h1>Company <span>Overview</span></h1>
                                    <!-- <h6>Start up your New Career Ventures With Delaware</h6> -->
                                    <p>The firm Iyer Vishwanath & Co. established in 1980 as a proprietary firm under the proprietorship of Mr. Iyer Vishwanath. The firm provides a variety of professional services which includes audits – Statutory as well as Internal, Tax Audits under the Indian Income Tax Act, Limited review audits, Due Diligence and related assignments for several large and medium sized corporates having operations both in India & abroad. The firm also provides professional services in direct and indirect taxation ranging from compliance to representation in assessment proceedings and appellate matters. </p>
                                    <!-- <p>Experience right to your home or office. Our design professionals are equipped to help you determine the products and work best for our customers.</p> -->
                                    <div class="btn-cer">
                                        <span class="btn-com"><a href="">Discover</a></span>
                                        <ul class="image">
                                            <li><img src="../assets/img-1/cer-1.png" class="img-responsive" width="49" height="49" alt="image" /></li>
                                            <li><img src="../assets/img-1/cer-2.png" class="img-responsive" width="49" height="49" alt="image" /></li>
                                            <li><img src="../assets/img-1/cer-3.png" class="img-responsive" width="49" height="49" alt="image" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12 company-outer-two">
                            <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12 column-company">
                                <div class="company-inner-one wow zoomIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image-sec">
                                        <img src="../assets/img-1/company-over.jpg" class="img-responsive" alt="company" width="405" height="422"  />
                                    </div>
                                    <div class="btn-2">
                                        <span><a href="#"><img src="../assets/img-1/right-arrow-circular-button.svg" alt="image" class="logo-read"  />READ MORE ABOUT OUR VALUES</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12 column-company">
                                <div class="company-inner-two wow zoomIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="company-inner-1 ">
                                        <h2>Powered by knowledge</h2>
                                        <p>Denouncing pleasure and praising pain was born and we will give you a complete account of the system, and expound actual teachings the great explorer.</p>
                                    </div>
                                    <div class="bor"></div>
                                    <div class="company-inner-2">
                                        <h2>Always innovating</h2>
                                        <p>Who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in some great pleasure.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------sec-1----company-end----->
            <!--==========================
               Clients Section
               ============================-->
            <div class="client-logo">
                <div class="container">
                    <div class="owl-carousel owl-theme owl-logo">
                        <div class="item">
                            <img src="../assets/img-1/c-logo-1.png" class="img-responsive" width="150" height="150" alt="logo" />
                        </div>
                        <div class="item">
                            <img src="homepage2/img-1/c-logo-2.png" class="img-responsive" width="150" height="150" alt="logo" />
                        </div>
                        <div class="item">
                            <img src="homepage2/img-1/c-logo-3.png" class="img-responsive" width="150" height="150" alt="logo" />
                        </div>
                        <div class="item">
                            <img src="homepage2/img-1/c-logo-4.png" class="img-responsive" width="150" height="150" alt="logo" />
                        </div>
                        <div class="item">
                            <img src="homepage2/img-1/c-logo-5.png" class="img-responsive" width="150" height="150" alt="logo" />
                        </div>
                        <div class="item">
                            <img src="homepage2/img-1/c-logo-6.png" class="img-responsive" width="150" height="150" alt="logo" />
                        </div>
                        <div class="item">
                            <img src="homepage2/img-1/c-logo-1.png" class="img-responsive" width="150" height="150" alt="logo" />
                        </div>
                        <div class="item">
                            <img src="homepage2/img-1/c-logo-2.png" class="img-responsive" width="150" height="150" alt="logo" />
                        </div>
                        <div class="item">
                            <img src="homepage2/img-1/c-logo-3.png" class="img-responsive" width="150" height="150" alt="logo" />
                        </div>
                        <div class="item">
                            <img src="homepage2/img-1/c-logo-4.png" class="img-responsive" width="150" height="150" alt="logo" />
                        </div>
                        <div class="item">
                            <img src="homepage2/img-1/c-logo-5.png" class="img-responsive" width="150" height="150" alt="logo" />
                        </div>
                        <div class="item">
                            <img src="homepage2/img-1/c-logo-6.png" class="img-responsive" width="150" height="150" alt="logo" />
                        </div>
                    </div>
                </div>
            </div>
            <!--==========================
               Clients Section
               ============================-->
            <!------sec-3----service------>
            <div class="service-section-outer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">
                            <div class="service-inner-one">
                                <h1><span>Services</span> We Provide</h1>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12">
                            <div class="service-inner-one">
                                <p>Delware Consulting understands that to help meet client challenges and opportunities successfully in a global economy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------sec-3----service-end----->
            <!------sec-4----service-next----->
            <div class="service-protfolio-type">
                <div class="container">
                    <div class="row">
                        <div class="column-in col-lg-4 col-md-4  col-sm-6 col-xs-12">
                            <div class="service-protfolio-outer in wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="service-protfolio-inner ">
                                    <div class="icon">
                                        <span class="fa-solid fa-clipboard-list service"></span>
                                    </div>
                                    <div class="content">
                                        <div class="entery-title">
                                            <h2>Internal Audits</h2>
                                        </div>
                                        <div class="description">
                                            <p>The firm functions as internal auditors, to a number of large and medium sized public and private limited companies..</p>
                                        </div>
                                        <a><span class="read">Read More</span>  <span class="icon-read"><i class="flaticon-next"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column-in col-lg-4 col-md-4  col-sm-6 col-xs-12">
                            <div class="service-protfolio-outer in wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="service-protfolio-inner">
                                    <div class="icon">
                                        <span class=" fa-solid fa-scale-unbalanced service"></span>
                                    </div>
                                    <div class="content">
                                        <div class="entery-title">
                                            <h2>Legal Matters</h2>
                                        </div>
                                        <div class="description">
                                            <p>The firm handles a variety of matters covering the Indian Companies Act, Income Tax Laws, etc..</p>
                                        </div>
                                        <a><span class="read">Read More</span>  <span class="icon-read"><i class="flaticon-next"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column-in col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="service-protfolio-outer in wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="service-protfolio-inner">
                                    <div class="icon">
                                        <span class="fa-solid fa-calendar-alt service"></span>
                                    </div>
                                    <div class="content">
                                        <div class="entery-title">
                                            <h2>Business Planning</h2>
                                        </div>
                                        <div class="description">
                                            <p>The firm has successfully handled a few mergers and acquisitions, one of which involved an international hospitality..</p>
                                        </div>
                                        <a><span class="read">Read More</span>  <span class="icon-read"><i class="flaticon-next"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="column-in col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="service-protfolio-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="service-protfolio-inner">
                                    <div class="icon">
                                        <span class="flaticon-support service"></span>
                                    </div>
                                    <div class="content">
                                        <div class="entery-title">
                                            <h2>Strategic Communications</h2>
                                        </div>
                                        <div class="description">
                                            <p>Our broad network with key influencers, we reaches the audience.</p>
                                        </div>
                                        <a><span class="read">Read More</span>  <span class="icon-read"><i class="flaticon-next"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column-in col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="service-protfolio-outer wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="service-protfolio-inner">
                                    <div class="icon">
                                        <span class="flaticon-stock service"></span>
                                    </div>
                                    <div class="content ">
                                        <div class="entery-title">
                                            <h2>Trades & Stocks</h2>
                                        </div>
                                        <div class="description">
                                            <p>We also analyze financial data to assist companies with risk avoidance.</p>
                                        </div>
                                        <a><span class="read">Read More</span>  <span class="icon-read"><i class="flaticon-next"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column-in col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="service-protfolio-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="service-protfolio-inner">
                                    <div class="icon">
                                        <span class="flaticon-user service"></span>
                                    </div>
                                    <div class="content">
                                        <div class="entery-title">
                                            <h2>Audit & Assurance</h2>
                                        </div>
                                        <div class="description">
                                            <p>We can also assist with the recovery of assets lost to fraud and identify..</p>
                                        </div>
                                        <a><span class="read">Read More</span>  <span class="icon-read"><i class="flaticon-next"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!------sec-4----service-next----->
            <!------sec-5----parallex----->
            <div class="parallex-sec">
                <div class="container">
                    <div class="row mid">
                        <div class="col-lg-10 col-md-10 col-xs-12 col-sm-12">
                            <div class="parallex-inner">
                                <p class="parallex-content">We help our clients make significant and realize their most important goals.</p>
                            </div>
                        </div>
                        <div class="cont-btn col-lg-2 col-md-2 col-xs-12 col-sm-12">
                            <div class="parallex-btn">
                                <a href="../pages/contact.php">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------sec-5----parallex-end---->
            <!------sec-6----ourservices---->
            <!-- <div class="our-cases-section">
                <div class="container">
                    <div class="row heading-case">
                        <div class="col-lg-12">
                            <h1 class="text-center">Our <span>Cases</span></h1>
                            <p class="text-center">Get our latest thinking on the biggest opportunities and most challenging
                                <br/>issues facing managers today.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                            <div class="our-cases-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="our-cases-inner">
                                    <div class="image">
                                        <img src="homepage2/img-1/our-service-6.jpg" class="img-responsive" alt="ourservice" width="370" height="230" />
                                        <a href="#" class="link"></a>
                                        <div class="overlay">
                                            <div class="text">
                                                <p class="title overtext">Financial Planning</p>
                                                <h2 class="tagline overtext">Mobility For a Global Energy Giant</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                            <div class="our-cases-outer wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="our-cases-inner">
                                    <div class="image">
                                        <img src="homepage2/img-1/our-service-5.jpg" class="img-responsive" alt="ourservice" width="370" height="230" />
                                        <a href="#" class="link"></a>
                                        <div class="overlay">
                                            <div class="text">
                                                <p class="title overtext">Software & Technology</p>
                                                <h2 class="tagline overtext">A Homeland Security Agency</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                            <div class="our-cases-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="our-cases-inner">
                                    <div class="image">
                                        <img src="homepage2/img-1/our-service-4.jpg" class="img-responsive" alt="ourservice" width="370" height="230" />
                                        <a href="#" class="link"></a>
                                        <div class="overlay">
                                            <div class="text">
                                                <p class="title overtext">Travel & Hotel</p>
                                                <h2 class="tagline overtext">Leading Water Manufacturer</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                            <div class="our-cases-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="our-cases-inner">
                                    <div class="image">
                                        <img src="homepage2/img-1/our-service-3.jpg" class="img-responsive" alt="ourservice" width="370" height="230" />
                                        <a href="#" class="link"></a>
                                        <div class="overlay">
                                            <div class="text">
                                                <p class="title overtext">Manufacturing</p>
                                                <h2 class="tagline overtext">Putting the Customer in Control</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                            <div class="our-cases-outer wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="our-cases-inner">
                                    <div class="image">
                                        <img src="homepage2/img-1/our-service-2.jpg" class="img-responsive" alt="ourservice" width="370" height="230" />
                                        <a href="#" class="link"></a>
                                        <div class="overlay">
                                            <div class="text">
                                                <p class="title overtext">Business Services</p>
                                                <h2 class="tagline overtext">Midwest Children’s Hospital</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                            <div class="our-cases-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="our-cases-inner">
                                    <div class="image">
                                        <img src="homepage2/img-1/our-service-1.jpg" class="img-responsive" alt="ourservice" width="370" height="230" />
                                        <a href="#" class="link"></a>
                                        <div class="overlay">
                                            <div class="text">
                                                <p class="title overtext">Hospitality</p>
                                                <h2 class="tagline overtext">Leading Water Manufacturer</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!------sec-6----ourservices-end--->
            <div class="testimonial-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-lg-6 col-md-6">
                            <div class="customer-outer">
                                <div class="coustomer-inner">
                                    <h1>Our <span>Clients</span></h1>
                                    <div class="para-inner">
                                        <p>The firm services clients comprising Listed Companies, Unlisted  Companies, Joint Ventures with overseas companies, Limited Liability Partnerships, Firms and Individuals from a wide cross section of businesses covering Manufacturing, Pharmaceutical Equipment, Logistics, Trading, Transport, Construction, Financial Services, Stock Broking to name a few. (Turnovers ranging from INR20 Cr. to over INR5000 Cr.)</p>
                                        <!-- <p>Over the last five years we have completed almost <span>4,000 projects</span> for Public Sectors, international governments and public-sector bodies.</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                            <!-- Wrapper for slides -->
                            <div class="owl-carousel owl-theme owl-testi">
                                <div class="item ">
                                    <div class="item-inner">
                                        <div class="header-outer">
                                            <div class="header-inner left-assign">
                                                <h2>Richard</h2>
                                                <p>Chicago, USA</p>
                                            </div>
                                            <span class="flaticon-quote"></span>
                                        </div>
                                        <p class="testimonial_para">Experienced professional or a recent graduate, working with DelWare could be a challenging and rewarding next step in your career. Opportunities are limitless and every day makes a difference mistaken idea of denouncing pleasure and praising will give you a completed.
                                        </p>
                                        <a href="#">Read More <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-inner">
                                        <div class="header-outer">
                                            <div class="header-inner left-assign">
                                                <h2>Richard</h2>
                                                <p>Chicago, USA</p>
                                            </div>
                                            <span class="flaticon-quote"></span>
                                        </div>
                                        <p class="testimonial_para">Experienced professional or a recent graduate, working with DelWare could be a challenging and rewarding next step in your career. Opportunities are limitless and every day makes a difference mistaken idea of denouncing pleasure and praising will give you a completed.
                                        </p>
                                        <a href="#">Read More <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </main>
        <script>
               $( document ).ready(function () {
               		$(".moreBox").slice(0, 3).show();
               		if ($(".blogBox:hidden").length != 0) {
               			$("#loadMore").show();
               		}		
               		$("#loadMore").on('click', function (e) {
               			e.preventDefault();
               			$(".moreBox:hidden").slice(0, 6).slideDown();
               			if ($(".moreBox:hidden").length == 0) {
               				$("#loadMore").fadeOut('slow');
               			}
               		});
               	});
            </script>

        <script>
        jQuery(document).ready(function() {
            jQuery("#rev_slider_1").show().revolution({
            sliderType: "standard",
            sliderLayout: "auto",
            delay: 5000,
            navigation: { arrows: { enable: true } },
            responsiveLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 1024, 778, 480],
            gridheight: [868, 768, 960, 720],
            });
        });
        </script>

        


<?php include_once '../includes/footer.php'; ?>