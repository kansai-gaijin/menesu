            <footer id="site-footer">
              <div class="container">
                <div class="footer-branding">
                  <figure class="ft-branding-logo">
                    <a href="<?= get_site_url(); ?>">
                      <img src="/wp-content/uploads/2020/06/dummy-logo.png" alt="<?= get_bloginfo('title') ?>" />
                    </a>
                  </figure>
                  <div class="ft-branding-info">
                    <p class="t-ft-tel"><strong>TEL</strong><a href="tel:090-0000-0000">090-0000-0000</a></p>
                    <p class="t-ft-area"><strong>AREA</strong>大阪 心斎橋・谷町・梅田</p>
                    <p class="t-ft-hours"><strong>OPEN-LAST</strong>OPEN-LAST 10:00～翌5:00（最終受付4:00）</p>
                  </div>
                </div>
                <nav class="foot-nav-container">
                  <?php
                  wp_nav_menu(array(
                    'theme_location' => 'secondary',
                    'container_class' => 'footer-navigation'
                  ));
                  ?>
                </nav>
                <p class="copywrite">Copyright© MENS ESTE BUTTERFLY, Inc. All rights reserved.</p>
              </div>
            </footer>
            </main>
            <?php wp_footer(); ?>
            </body>

            </html>