<?php
  function auto_copyright($year = 'auto') {
    if(intval($year) == 'auto'){ $year = date('Y'); }
    if(intval($year) == date('Y')){ echo intval($year); }
    if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); }
    if(intval($year) > date('Y')){ echo date('Y'); }
  }
?>
<div id="foot-push"></div>
</div><!--wrap-->

<div id="foot-wrap">

  <footer>
    <div class="container">

      <div class="web-cred">
        i<span class="visuallyhidden">Show Copyright Information</span>
        <div>
          &copy; <?php auto_copyright("2019");?><br />
          <a href="http://eberg.xyz" target="_blank" rel="noopener noreferrer">Site by Elliot Berg</a>
        </div>
      </div>

    </div>
  </footer>

</div><!--foot-wrap-->

<script src="js/vendor/modernizr-3.7.1.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>

<script src="/js/plugins.js"></script>
<script src="/js/main.js"></script>
<script src="/js/form-validation.js"></script>
<script src='https://www.google.com/recaptcha/api.js' async defer></script>
<script src="/js/vendor/retina.min.js"></script>

  </body>
</html>
