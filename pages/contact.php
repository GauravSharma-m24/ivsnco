<?php 
include '../includes/header.php';?>

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
                           <h2>Contact <span>Our Office</span></h2>
                           <p>If you have any querry for related Consulting… We are available</p>
                        </div>
                        <div class="location-inner">
                           <div class="row inner-loc">
                              <div class="col-sm-12 col-sm-6 col-md-6 col-lg-6 head">
                                 <h1><span>200+</span> Branches Worldwide.</h1>
                              </div>
                              <div class="top-col in col-sm-12 col-sm-6 col-md-6 col-lg-6">
                                 <div class="input-group tab">
                                    <select class="form-control top-in " id="washroomtype" onchange="ShowHideDiv2()">
                                       <option class="active">NewYork </option>
                                       <option>London</option>
                                       <option>Paris</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <script type="text/javascript">
                              function ShowHideDiv2() {
                                   var washroomtype = document.getElementById("washroomtype");
                                   var washroomtypeselect = document.getElementById("washroomtypeselect");
                                   washroomtypeselect1.style.display = washroomtype.value == "NewYork" ? "block" : "none";
                                   washroomtypeselect2.style.display = washroomtype.value == "London" ? "block" : "none";
                                   washroomtypeselect3.style.display = washroomtype.value == "Paris" ? "block" : "none";
                               }
                           </script>
                           <div class="row">
                              <div class= "top-col-1 ">
                                 <div id="washroomtypeselect1" >
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-sm-12">
                                       <div class="input-group left">
                                          <h2>Wilmington</h2>
                                          <p>DE 198 Tech Road Bridge Str, Wilmington 11226 United States. </p>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-sm-12">
                                       <div class="input-group right">
                                          <h2>Newyork City</h2>
                                          <p>PO Box 37188 MillonStreet, Newyork 10002 United States.</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="washroomtypeselect2" style="display: none">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-sm-12">
                                       <div class="input-group left">
                                          <h2>NewYork</h2>
                                          <p>Wilmington, 198, Delaware Bridge St United States.</p>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-sm-12">
                                       <div class="input-group right">
                                          <h2>London</h2>
                                          <p>DE 198 Tech Road Bridge Str, Wilmington 10000 United States. </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="washroomtypeselect3" style="display: none">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-sm-12">
                                       <div class="input-group left">
                                          <h2>Paris</h2>
                                          <p>DE 198 Tech Road Bridge Str, Wilmington  United States. </p>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-sm-12">
                                       <div class="input-group right">
                                          <h2>India</h2>
                                          <p>DE 198 Tech Road Bridge Str, Wilmington 11 United States. </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="troll-free">
                           <ul>
                              <li><span>Toll Free:</span> 1 (857) 899-0009</li>
                              <li><span> Mail Us at:</span> Supportyou@Delaware.com</li>
                           </ul>
                        </div>
                     </div>
                     <div class="contact-form">
                        <div class="heading">
                           <h2>Send <span>Message Us</span></h2>
                        </div>
                        <div class="form">
                            <form method="post" id="contact-form" action="https://admin.ivsnco.com/api/contacts" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name*" required data-error="NEW ERROR MESSAGE">
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
                                        <div class="form-group">
                                            <textarea name="message" class="form-control mes" rows="2" placeholder="Message..." required></textarea>
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
         <!--Map Section-->
         <section class="map-section contact">
            <div class="container">
               <!--Map Outer-->
               <div class="map-outer">
                  <div class="google-map"
                     id="contact-google-map" 
                     data-map-lat="44.231172" 
                     data-map-lng="-76.485954" 
                     data-icon-path="image/icons/map-marker.png" 
                     data-map-title="Alabama, USA" 
                     data-map-zoom="12" 
                     data-markers='{
                     "marker-1": [42.231172, -84.485954, "<h4>Branch Office</h4><p>4/99 Alabama, USA</p>"],
                     "marker-2": [44.231172, -76.485954, "<h4>Branch Office</h4><p>4/99 Alabama, USA</p>"],
                     "marker-3": [40.880550, -78.393705, "<h4>Branch Office</h4><p>4/99 Pennsylvania, USA</p>"]
                     }'>
                  </div>
               </div>
            </div>
         </section>
         <!--End Map Section-->
         
      </main>

<?php 
include '../includes/footer.php';?>