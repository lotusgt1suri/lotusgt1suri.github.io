<!-- Footer -->
<footer id="footer">
  <div class="row">
    <div class="col-md-12">
      <div class="footer mfoot">
        <div class="container">
          <br>
          <div class="clearfix">
            <br>
            <div class="footer-logo"><a href="index.php">समाचार</a></div>
            <dl class="footer-nav">
              <dt class="nav-title">समाचार</dt>
              <dd class="nav-item"><a href="#">राष्ट्रीय</a></dd>
              <dd class="nav-item"><a href="#">दुनिया</a></dd>
              <dd class="nav-item"><a href="#">बिजनेस</a></dd>
              <dd class="nav-item"><a href="#">खेल</a></dd>
              <dd class="nav-item"><a href="#">जरा हटके</a></dd>
              <dd class="nav-item"><a href="#">चर्चा में</a></dd>
            </dl>
            <dl class="footer-nav">
              <dt class="nav-title">संपादकीय</dt>
              <dd class="nav-item"><a href="#">नजरिया</a></dd>
              <dd class="nav-item"><a href="#">अपनी बात</a></dd>
              <dd class="nav-item"><a href="#">जोश</a></dd>
              <dd class="nav-item"><a href="#">शिक्षा</a></dd>
              <dd class="nav-item"><a href="#">विज्ञान</a></dd>
              <dd class="nav-item"><a href="#">कैरियर</a></dd>
            </dl>
            <dl class="footer-nav">
              <dt class="nav-title">क्रिकेट</dt>
              <dd class="nav-item"><a href="#">खबरें</a></dd>
              <dd class="nav-item"><a href="#">विशेषज्ञों की राय</a></dd>
              <dd class="nav-item"><a href="#">आईसीसी रैंकिंग</a></dd>
              <dd class="nav-item"><a href="#">अपनी बात</a></dd>
              <dd class="nav-item"><a href="#">एक्सक्लूसिव तस्वीरें</a></dd>
              <dd class="nav-item"><a href="#">फोटो गैलरी</a></dd>
            </dl>
            <dl class="footer-nav">
              <dt class="nav-title">अध्यात्म</dt>
              <dd class="nav-item"><a href="#">धर्म समाचार</a></dd>
              <dd class="nav-item"><a href="#">पंचांग</a></dd>
              <dd class="nav-item"><a href="#">पूजा-पाठ</a></dd>
              <dd class="nav-item"><a href="#">संत-साधक</a></dd>
              <dd class="nav-item"><a href="#">धार्मिक स्थान</a></dd>
              <dd class="nav-item"><a href="#">जनमत</a></dd>
            </dl>
          </div>
          <hr>
          <div class="clearfix">
            <br>
            <div class="footer-logo"><a href="index.php"></a></div>
            <dl class="footer-nav">
              <!-- <dt class="nav-title">समाचार</dt> -->
              <dd class="nav-item"><a href="#">Home</a></dd>
              <dd class="nav-item"><a href="#">About Us</a></dd>
              <dd class="nav-item"><a href="#">Advertise with Us</a></dd>
              <dd class="nav-item"><a href="#">Partnership</a></dd>
              <dd class="nav-item"><a href="#">Sitemap</a></dd>
              <dd class="nav-item"><a href="#">Submit your news</a></dd>
              <dd class="nav-item"><a href="#">Contact Us</a></dd>
            </dl>
            <dl class="footer-nav">
              <!-- <dt class="nav-title">संपादकीय</dt> -->
              <dd class="nav-item"><a href="#">Hindi Jokes</a></dd>
              <dd class="nav-item"><a href="#">UP News</a></dd>
              <dd class="nav-item"><a href="#">Uttarakhand News</a></dd>
              <dd class="nav-item"><a href="#">Lucknow News</a></dd>
              <dd class="nav-item"><a href="#">Kanpur News</a></dd>
              <dd class="nav-item"><a href="#">Delhi News</a></dd>
              <dd class="nav-item"><a href="#">MP News</a></dd>
            </dl>
            <dl class="footer-nav">
              <dt class="nav-title">Get in Touch</dt>
              <dd class="nav-item fot">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <a href="#" target="_blank"><i class="fa fa-facebook fa-inverse fa-stack-1x"></i></a>
                </span>
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <a href="#" target="_blank"><i class="fa fa-twitter fa-inverse fa-stack-1x"></i></a>
                </span>
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <a href="#" target="_blank"><i class="fa fa-skype fa-inverse fa-stack-1x"></i></a>
                </span>
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <a href="#" target="_blank"><i class="fa fa-flickr fa-inverse fa-stack-1x"></i></a>
                </span>
              </dd><!-- font awesome icon -->
            </dl>
            <dl class="footer-nav">
              <dt class="nav-title">Contact US</dt>
              <dd class="nav-item"><a href="contactus.php"><i class="fa fa-envelope-o pr-10"></i>&nbsp; Email</a></dd>
              <dd class="nav-item"><a href="contactus.php"><i class="fa fa-phone pr-10"></i>&nbsp; Call us</a></dd>
            </dl>  
          </div>          
          <br>
          <div class="foot">
            <p>समाचार &copy; 2015. All Rights Reserved.</p>
            <hr class="small">
          </div>
          <p class="pull-right">
            <a href="#">
              <img src="img/arrow_up.png" class="scrollToTop" width="50" height="50">
            </a>
          </p>
        </div><!-- container -->
      </div><!-- footer -->
    </div><!-- col-md-12 -->
  </div><!-- row -->
</footer><!-- example -->


  <script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/scrolltotop.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript">
    var myScroll;
    function loaded () {
        myScroll = new IScroll('#wrapper', {
            scrollbars: true,
            mouseWheel: true,
            interactiveScrollbars: true,
            shrinkScrollbars: 'scale',
            fadeScrollbars: true
        });
    }
    document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
  </script>