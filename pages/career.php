<?php 
include '../includes/header.php';
?>
<main id="main">
         <div class="page-header  text-dark parallax has-image">
            <div class="page-header-content">
               <div class="featured-image" style="background:url(image/company-overview/banner.jpg);">
                  <div class="container">
                     <div class="row">
                        <div class="heading">
                           <h1>Contact Us</h1>
                        </div>
                        <div class="bread-cumb-inner">
                           <ul class="breadcrumb">
                              <li class="active"><a href="#">Home</a></li>
                              <li>Contact Us</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="contact-outer">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="contact-address">
                        <div class="heading">
                           <h2>Join <span>Our Team</span></h2>
                           <!-- <p>If you have any querry for related Consulting… We are available</p> -->
                        </div>
                        <div class="location-inner">
                           <div class="row inner-loc">
                              <div class="col-sm-12 col-sm-6 col-md-6 col-lg-6 head">
                             
                              </div>
                           </div>
                        </div>
                        <div class="troll-free">
                           
                        </div>
                     </div>
                     <div class="contact-form">
                        <div class="heading">
                           <h2>We are <span>Hiring</span></h2>
                        </div>
                        <div class="form">
                            <form method="post" id="contact-form" action="https://admin.ivsnco.com/api/careers" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name*" required data-error="Error">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="age" class="form-control" placeholder="Age*" required data-error="Error">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" placeholder="Phone*" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email*" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group in-sec">
                                        <select name="qualification" class="form-control select">
                                            <option value="pre">Qualification</option>
                                            <option value="ARTS">Article Student</option>
                                            <option value="B.COM">B.Com</option>
                                            <option value="M.COM">M.Com</option>
                                            <option value="MBA">MBA</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="experience" class="form-control" placeholder="Experience*" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="file" name="resume" class="form-control" placeholder="Resume*" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
         
      </main>

<?php 
include '../includes/footer.php';?>

