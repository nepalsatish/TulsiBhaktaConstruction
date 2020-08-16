<div class="footer">
<!--
@Author: Satish Nepal <satish>
@Date:   20-Jan-2020 10-40-30 AM
@Email:  nepalsatish1@outlook.com
@Last modified by:   satish
@Last modified time: 26-Jan-2020 01-50-39 PM
@Copyright: Satish Nepal
-->


    <!-- <div class="footer-flash-about home-flash-dark">
        <div class="container">
            Tell us more about what you want to accomplish with your organisation. We help you think of possible solutions in an ever-changing digital world.
            <div class="mt-4"><a href="" class="underline"><strong><span class="__cf_email__" data-cfemail="78101d14141738141d0f110b0b0c0d1c1117561b17">info@tbc.com</span></strong></a></div>
        </div>
    </div> -->
    <div class="home-flash-dark pt-0 pb-0">
        <div class="container">
            <hr class="mt-0 mb-0">
        </div>
    </div>
    <div class="footer-flash home-flash-dark">
        <div class="footer-flash">
        <div class="container">
            <div class="footer-content-flash">
                <div class="row">
                    <div class="col-md-4 col-6 mb-5">
                        <h5>Office</h5>
                        <div class="contact-item">Sankhamul, New Baneshwor<br /> Kathmandu, Nepal</div>
                        <div class="contact-item"><a href=""><span class="__cf_email__"
                                    data-cfemail="1e767b7272715e727b69776d6d6a6b7a7771307d71">contact@tbc.com</span></a></div>
                        <div class="contact-item"><a href="tel:+00853462188" class="phone-link">+0085 346 2188</a></div>
                    </div>
                    <div class="col-md-3 col-6 mb-5">
                        <h5>help</h5>
                        <ul class="footer-nav">
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Services</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-6 mb-5">
                        <h5>quick links</h5>
                        <ul class="footer-nav">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-6 mb-5">
                        <ul class="social social-rounded">
                            <li><a href="#"><i class="socicon-twitter"></i></a></li>
                            <li><a href="#"><i class="socicon-facebook"></i></a></li>
                            <li><a href="#"><i class="socicon-googleplus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="site-info">
                <div class="row">
                    <div class="col-6">
                        <div class="copyright text-left">&copy; 2020 <strong>tbc</strong>. All Rights Reserved.</div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">Design by <strong><a href="https://nextaussietech.com" target="blanc">NAT</a></strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')
</script>
<script src="js/smoothscroll.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/animsition.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.pagepiling.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/ScrollMagic.min.js"></script>
<script src="js/animation.gsap.min.js"></script>
<script src="js/jquery.viewport.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/alloy_finger.min.js"></script>
<script src="js/lc_lightbox.lite.min.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {

	// live handler
	lc_lightbox('.elem', {
		wrap_class: 'lcl_fade_oc',
		gallery : true,
		thumb_attr: 'data-lcl-thumb',
		skin: 'minimal',
		radius: 0,
		padding	: 0,
		border_w: 0,
	});

});
</script>
<script>
    $(document).ready(function() {
        // init controller
        var controller = new ScrollMagic.Controller();

        // build scenes
        new ScrollMagic.Scene({
                triggerElement: '.parallax-start',
                triggerHook: 0,
                duration: '100%'
            })
            .setTween('.full-image-dark', {
                backgroundPosition: '50% 100%',
                ease: Linear.easeNone
            })
            .addTo(controller);
    });
</script>
<script>
    $(document).ready(function() {
        // init controller
        var controller = new ScrollMagic.Controller();

        // build scenes
        new ScrollMagic.Scene({
                triggerElement: '.section-mini',
                triggerHook: 1,
                duration: '200%'
            })
            .setTween('.article-promo-item', {
                backgroundPosition: '50% 100%',
                ease: Linear.easeNone
            })
            .addTo(controller);

    });
</script>
<script>
    $(document).ready(function() {
        // init controller
        var controller = new ScrollMagic.Controller();

        // build scenes
        new ScrollMagic.Scene({
                triggerElement: '.project-card-mobile',
                triggerHook: 0,
                duration: $('.project-card-promo').outerHeight() + $('.project-card-promo').offset().top
            })
            .setTween('.project-card-promo', {
                backgroundPosition: '50% 80%',
                ease: Linear.easeNone
            })
            .addTo(controller);
    });
</script>
<script>
$(window).on('load', function() {
// init controller
var controller = new ScrollMagic.Controller();

// // build scenes
// new ScrollMagic.Scene({
//         triggerElement: '.home-flash',
//         triggerHook: 0,
//         duration: $('.home-flash-section-dark').outerHeight()
//     })
//     .setClassToggle('.home-flash', 'dark-horizontal')
//     // .addIndicators()
//     .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: '.footer',
        triggerHook: '.3'
    })
    .setClassToggle('.home-flash', 'dark-horizontal')
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: '.footer',
        triggerHook: '.3'
    })
    .setClassToggle('.flash-item-nav', 'd-none')
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: '.home-flash',
        triggerHook: 1,
        duration: '100%'
    })
    .setTween('.item-nav-1', {
        top: '150px',
        ease: Linear.easeNone
    })
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: '.flash-pin-2',
        triggerHook: 1,
        duration: $(window).height() - 280 - 180
    })
    .setTween('.item-nav-2', {
        top: '180px',
        ease: Linear.easeNone
    })
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: '.flash-pin-3',
        triggerHook: 1,
        duration: $(window).height() - 230 - 230
    })
    .setTween('.item-nav-3', {
        top: '230px',
        ease: Linear.easeNone
    })
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: '.flash-pin-4',
        triggerHook: 1,
        duration: $(window).height() - 180 - 280
    })
    .setTween('.item-nav-4', {
        top: '280px',
        ease: Linear.easeNone
    })
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: '.flash-pin-5',
        triggerHook: 1,
        duration: $(window).height() - 130 - 330
    })
    .setTween('.item-nav-5', {
        top: '330px',
        ease: Linear.easeNone
    })
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: '.flash-pin-6',
        triggerHook: 1,
        duration: $(window).height() - 80 - 380
    })
    .setTween('.item-nav-6', {
        top: '380px',
        ease: Linear.easeNone
    })
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: '.flash-pin-7',
        triggerHook: 1,
        duration: $(window).height() - 30 - 430
    })
    .setTween('.item-nav-7', {
        top: '430px',
        ease: Linear.easeNone
    })
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: '.home-flash',
        triggerHook: 1,
        duration: $('.flash-pin-2').offset().top
    })
    .setClassToggle('.item-nav-1', 'active')
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: '.flash-pin-2',
        triggerHook: 1,
        duration: $('.flash-pin-3').offset().top - $('.flash-pin-2').offset().top
    })
    .setClassToggle('.item-nav-2', 'active')
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: '.flash-pin-3',
        triggerHook: 1,
        duration: $('.flash-pin-4').offset().top - $('.flash-pin-3').offset().top
    })
    .setClassToggle('.item-nav-3', 'active')
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: '.flash-pin-4',
        triggerHook: 1,
        duration: $('.flash-pin-5').offset().top - $('.flash-pin-4').offset().top
    })
    .setClassToggle('.item-nav-4', 'active')
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: '.flash-pin-5',
        triggerHook: 1,
        duration: $('.flash-pin-6').offset().top - $('.flash-pin-5').offset().top
    })
    .setClassToggle('.item-nav-5', 'active')
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: '.flash-pin-6',
        triggerHook: 1,
        duration: $('.flash-pin-7').offset().top - $('.flash-pin-6').offset().top
    })
    .setClassToggle('.item-nav-6', 'active')
    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: '.flash-pin-7',
        triggerHook: 1,
        duration: $('.flash-pin-7').closest('.flash-item').outerHeight() + $('.footer').outerHeight()
    })
    .setClassToggle('.item-nav-7', 'active')
    .addTo(controller);

});
</script>

</body>
</html>
