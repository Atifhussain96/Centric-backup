<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo $siteurl ?>assets/images/logo.png" class="footer-logo" alt="">
                <p>Our mission is to make our clients successful by offering innovative combinations of multilingual people backed by proven processes and technologies at exceptional value for money.</p>
                <ul class="info">
                    <li><i class="fas fa-map-marker-alt"></i>100 highland ave, california, united state</li>
                    <li><i class="fas fa-envelope-square"></i>contact@bpo.com</li>
                    <li><i class="fas fa-phone-square-alt"></i>www.website.com</li>
                </ul>
            </div>
            <div class="col-md-3 offset-1">
                <h4>Menu</h4>
                <ul>
                    <li><a href="<?php echo $siteurl ?>">Home</a></li>
                    <li><a href="<?php echo $siteurl ?>why-us/">Why Us?</a></li>
                    <li><a href="<?php echo $siteurl ?>our-service/">Services</a></li>
                    <li><a href="<?php echo $siteurl ?>integrations/">Integrations</a></li>
                    <li><a href="<?php echo $siteurl ?>contact-us">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>follow me</h4>
                <ul class="social">
                    <li><a href="javascript:"><i class="fab fa-facebook-f"></i>facebook</a></li>
                    <li><a href="javascript:"><i class="fab fa-twitter"></i>twitter</a></li>
                    <li><a href="javascript:"><i class="fab fa-instagram"></i>instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container">
        <div class="back-top">
            <a href="javascript:" id="backTop"><img src="<?php echo $siteurl ?>assets/images/back-top-arrow.png" alt=""></a>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>&copy;<?php echo date("Y"); ?> BPO, all right reserved</p>
            </div>
            <div class="col-md-6">
                <ul>
                    <li><a href="javascript:">term of use</a></li>
                    <li><a href="javascript:">site map</a></li>
                    <li><a href="javascript:">privacy policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>









<div style="display: none;" class="popupform" id="popupform">
    <div class="modal-body">
        <div class="popup-content">
            <div class="txt">
                <h2>Get a Free Quote</h2>
                <p>Discuss your app idea with our consultants and we'll help you transform them to multi-million dollar reality. <span>It's Free!</span></p>
            </div>
            <div class="form-wrapper">
                <p>To receive your <span>FREE</span> consultation,
                    please provide basic information.
                </p>
                <form action="/sending/" method="post" class="validate-popupform-quote">
                    <input type="text" class="required" required name="cn" placeholder="First Name">
                    <input type="text" class="required" required name="cn" placeholder="Last Name">
                    <input type="text" class="required" required name="cn" placeholder="Comapny Name">
                    <input type="email" class="required email" required name="em"  placeholder="Email Address">
                    <input type="tel" class="required  number ftpn" required name="pn" placeholder="Phone Number">
                    <textarea autocomplete="nope"  name="msg" class="required" required placeholder="Comments"></textarea>
                    <button type="submit" class="btn btn-blue"><span></span>Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>