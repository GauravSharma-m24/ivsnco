<?php 
include '../includes/header.php';

// Fetch team data from API
$apiUrl = "https://admin.ivsnco.com/api/teams";
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Decode JSON response
$teamData = json_decode($response, true);
?>
<main id="main">
            <div class="page-header  text-dark parallax has-image">
               <div class="page-header-content">
                  <div class="featured-image" style="background:url(../assets/img-1/company-overview-bd.jpg);">
                     <div class="container">
                        <div class="row">
                           <div class="heading">
                              <h1>Company Overview</h1>
                           </div>
                           <div class="bread-cumb-inner">
                              <ul class="breadcrumb">
                                 <li class="active"><a href="#">Home</a></li>
                                 <li><a href="#">About Us</a></li>
                                 <li>Company Overview</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="welcome-about-us">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="image">
                           <img src="../assets/img/about.jpg" class="img-responsive" alt="about-us" width="770" height="430" />
                        </div>
                     </div>
                     <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="content-outer-about">
                           <div class="content-inner in">
                              <h2><a>Who We are</a></h2>
                              <p>The firm Iyer Vishwanath & Co. established in 1980 as a proprietary firm under the proprietorship of Mr. Iyer Vishwanath. The firm provides a variety of professional services which includes audits – Statutory as well as Internal, Tax Audits under the Indian Income Tax Act, Limited review audits, Due Diligence and related assignments for several large and medium sized corporates having operations both in India & abroad. The firm also provides professional services in direct and indirect taxation ranging from compliance to representation in assessment proceedings and appellate matters.</p>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="welcome-about-two">
               <div class="container">
                  <div class="row founder-section">
                     <!-- Column 1: Title + Description -->
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="content-about-about-two">
                           <div class="content-inner">
                           <div class="heading">
                              <h1>Our <span>Founder</span></h1>
                           </div>
                           <p>
                               <span style="font-weight: 600;">Mr. Iyer Vishwanath</span> is a graduate from Mumbai University and has been a member of “The Institute of Chartered Accountants of India” since 1980. He has over four decades of professional expertise in the field of audit and assurance and taxation. Over the years, he has gathered wide experience and knowledge across a variety of businesses viz. Constructions, Manufacturing, Engineering, Pharmaceuticals, Logistics and Transport, Trading, Investments & Finance Services and Hospitality Services.
                           </p>
                           <div class="main">
                              <h4><b>Nathan Missoray, <span>CEO & Founder</span></b></h4>
                           </div>
                           <!-- <div class="image">
                              <img src="image/company-overview/about-sign.png"
                                    class="img-responsive" alt="sign"
                                    width="151" height="64">
                           </div> -->
                           </div>
                        </div>
                     </div>

                     <!-- Column 2: Full Founder Image -->
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="founder-image-wrapper">
                           <img src="image/company-overview/founder.jpg"
                              class="img-responsive founder-image"
                              alt="Founder Image">
                        </div>
                     </div>
                     </div>

               </div>
            </div>
         <!-- TEAM SECTION -->
            <section id="team-section">
               <div class="container">
               <div class="team-container">
                     <h6 class="section-subtitle">TEAM MEMBERS</h6>
                     <h3 class="section-title">Meet Our Team</h3>
                     <p class="section-description">
                        The firm has amongst its staff and associates, qualified and well experienced professionals. The Team also includes articled clerks, audit assistants and commerce graduates. The firm also requisitions the services of professional associates as and when required. Besides, the firm has access to the services of a number of professionals from other related fields, particularly Chartered Secretaries, Advocates, Management Consultants and Financial intermediaries.
                     </p>

                     <div class="team-grid">
                        <?php if(!empty($teamData)): ?>
                           <?php foreach($teamData as $member): ?>
                                 <div class="team-member">
                                    <div class="member-image">
                                       <img src="<?php echo $member['image']; ?>" alt="<?php echo htmlspecialchars($member['name']); ?>">
                                    </div>
                                    <h4 class="member-name"><?php echo htmlspecialchars($member['name']); ?></h4>
                                    <p class="member-info"><?php echo htmlspecialchars($member['position']); ?></p>
                                 </div>
                           <?php endforeach; ?>
                        <?php else: ?>
                           <p>No team members found.</p>
                        <?php endif; ?>
                     </div>
               </div>
               </div>
            </section>
            
         </main>
<?php include_once '../includes/footer.php'; ?>