<div class="footer-last">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-outer">
                                <img src="../assets/img/logo.png" alt="" height="70" width="300" style="margin-bottom: 20px; margin-top: -50px;">
                                <div class="contact-heading">
                                    <h2>Company info</h2>
                                </div>
                                <div class="content-inner">
                                    <!-- <p class="fist in">Delaware is one of the best business
                                        <br/>consulting firms. </p> -->
                                    <p class="secnd"><span>108, Narayan Bhavan, Perin Nariman Street, Fort, Mumbai, Maharashtra – 400 001</p>
                                    <p class="third"><span>Need Help? Call us now:</span>
                                        <br/>Telephone : 022 22615326 / 022 22616785</p>
                                    <p class="frth"><span>contact@ivsnco.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                        </div>
                        <div class="ful-width col-lg-3 col-md-3 col-xs-12 col-sm-3">
                            <div class="contact-outer">
                                <div class="contact-heading">
                                    <h2>Useful links</h2>
                                </div>
                                <div class="content-inner">
                                    <table>
                                        <tbody>
                                            <?php
                                                $apiUrl = "https://admin.ivsnco.com/api/external-links";
                                                $response = file_get_contents($apiUrl);
                                                $links = json_decode($response, true);

                                                if (!empty($links)) {
                                                    for ($i = 0; $i < count($links); $i += 2) {
                                                        echo "<tr>";

                                                        // First column
                                                        $title1 = $links[$i]['title'] ?? 'No Title';
                                                        $link1  = $links[$i]['link'] ?? '#';
                                                        echo '<td class="main"><a href="' . $link1 . '">' . $title1 . '</a></td>';

                                                        // Second column
                                                        if (isset($links[$i + 1])) {
                                                            $title2 = $links[$i + 1]['title'] ?? 'No Title';
                                                            $link2  = $links[$i + 1]['link'] ?? '#';
                                                            echo '<td><a href="' . $link2 . '">' . $title2 . '</a></td>';
                                                        } else {
                                                            echo "<td></td>";
                                                        }

                                                        echo "</tr>";
                                                    }
                                                }
                                                ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                        </div>
                        <div class="ful-width col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="contact-outer">
                                <div class="contact-heading">
                                    <h2>Our Services</h2>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="footer">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                            <ul>
                                                <li>Copyright © 2018 Delaware Consulting, All Right Reserved</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                            <ul class="link">
                                                <li class="bor"><a href="#">TermsPrivacy </a></li>
                                                <li><a href="#"> PolicyCareers</a></li>
                                                <li><a href="#" class="back-to-top" title="Back to top"><i class="fas fa-angle-up"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!------sec-11------------------------------------footerlast-end--------------------------------------->
                        </main>
                    </div>

    

     <script src="../assets/js/jquery-2.2.4.min.js"></script>
    <script src="../assets/js/bootstrap.min.js">
     
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Core jQuery Script -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/other.js"></script>
    <!---Slider Revolution core JavaScript files ---->
    <script src="../assets/js/jquery.themepunch.tools.min.js"></script>
    <script src="../assets/js/jquery.themepunch.revolution.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/revslider@5.4.201-8.6/js/jquery.themepunch.tools.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/revslider@5.4.201-8.6/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Slider Revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING-->
    <script src="../assets/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="../assets/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="../assets/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="../assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="../assets/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="../assets/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="../assets//extensions/revolution.extension.parallax.min.js"></script>
    <script src="../assets//extensions/revolution.extension.slideanims.min.js"></script>
    <script src="../assets/js/extensions/revolution.extension.video.min.js"></script>
    <script src="../assets/owl/owl.carousel.js"></script>
    <!-- script JS  -->
    <script src="../assets/js/nav-scripts.min.js"></script>
    <script src="../assets/js/preload.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.read-more-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    const shortContent = document.getElementById('short-' + id);
                    const fullContent = document.getElementById('full-' + id);

                    if (fullContent.style.display === 'none') {
                        fullContent.style.display = 'block';
                        shortContent.style.display = 'none';
                        this.innerText = 'Show Less';
                    } else {
                        fullContent.style.display = 'none';
                        shortContent.style.display = 'block';
                        this.innerText = 'Read More';
                    }
                });
            });
        });
        </script>

</body>

</html>