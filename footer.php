    <?php
      $footerPhone = get_theme_mod('footer_info_phone_setting');
      $footerEmail = get_theme_mod('footer_info_email_setting');
      $footerAddress = get_theme_mod('footer_info_address_setting');
      if (strlen($footerPhone) > 0 || strlen($footerEmail) > 0 || strlen($footerAddress) > 0):
    ?>
      <footer class="footer">
        <p><?= $footerPhone ?></p>
        <p><?= $footerEmail ?></p>
        <p><?= $footerAddress ?></p>
      </footer>
    <?php endif; ?>
    <?php wp_footer(); ?>
  </body>
</html>
