<?php
 /**
  * SCSS 03-regions/_footer.scss
  *
  */
?>

<footer class="footer">
 <div class="container">
    <div class="footer-wrap">
      <div class="footer-wrap__left">
        <p>&copy; TTHZ CYCLING TEAM <?php echo date(Y); ?> | Vredestraat 3 3550 Heusden-Zolder | <a href="<?php print base_path() ?>privacy-verklaring" class="footer__link">Privacy verklaring</a></p>
      </div>
      <div class="footer-wrap__right">
        <a class="footer__link--social" href="https://www.facebook.com/groups/135633596623338/">
          <i class="fab fa-facebook-f fa-2x"></i>
        </a>
        <a class="footer__link--social" href="https://twitter.com/">
          <i class="fab fa-twitter fa-2x"></i></i>
        </a>
        <script>mail2("philippe.detilloux","gmail",0,"","<i class='far fa-envelope fa-2x'></i>")</script>
       
      </div>
    </div>
  </div>
</footer>