<footer>
    <div class="container">
        <div class="row">

            <!-- <div class="col-md-5">
                <div class="about-veno">
                    <div class="logo">
                        <a href="index.html">
                            <img src=" <?php echo get_template_directory_uri() ?> /img/footer_logo.png"
                                alt="Venue Logo">
                        </a>
                    </div>
                    <p>Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa.
                        Integer sit amet posuere tellus, id efficitur leo. In hac habitasse platea dictumst.</p>
                    <ul class="social-icons">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-rss"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
            </div> -->

            <div class="col-md-5">

                <?php dynamic_sidebar('footer_widget_1'); ?>
            </div>


            <div class="col-md-4">
                <div class="useful-links">
                    <div class="footer-heading">
                        <h4>Useful Links</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li><a href="#"><i class="fa fa-stop"></i>Help FAQs</a></li>
                                <li><a href="#"><i class="fa fa-stop"></i>Register</a></li>
                                <li><a href="#"><i class="fa fa-stop"></i>Login</a></li>
                                <li><a href="#"><i class="fa fa-stop"></i>My Profile</a></li>
                                <li><a href="#"><i class="fa fa-stop"></i>How It Works?</a></li>
                                <li><a href="#"><i class="fa fa-stop"></i>More About Us</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-info">
                    <div class="footer-heading">
                        <h4>Contact Information</h4>
                    </div>
                    <p>Praesent iaculis gravida elementum. Proin fermentum neque facilisis semper pharetra. Sed
                        vestibulum vehicula tincidunt.</p>
                    <ul>
                        <li><span>Phone:</span><a href="#">010-050-0550</a></li>
                        <li><span>Email:</span><a href="#">hi@company.co</a></li>
                        <li><span>Address:</span><a href="#">company.co</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="sub-footer">
    <p>Copyright &copy; 2018 Company Name

        - Design: <a rel="nofollow" href="http://www.templatemo.com">Template Mo</a></p>
</div>

<?php wp_footer(); ?>
</body>

</html>