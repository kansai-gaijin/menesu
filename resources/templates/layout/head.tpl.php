<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <main id="app" class="app">
    <header id="site-header">
      <h1 class="site-description">
        <?= get_bloginfo('title') ?> | <?= get_bloginfo('description') ?>
      </h1>
      <div class="site-branding">
        <div class="container">
          <div class="site-branding-wrapper">
            <figure class="site-logo">
              <a href="<?= get_site_url(); ?>">
                <img src="/wp-content/uploads/2020/06/dummy-logo.png" alt="<?= get_bloginfo('title') ?>" />
              </a>
            </figure>
            <div class="site-info">
              <p class="t-operating-hours">
                <span>OPEN 10:00~翌4:00(最終受付)</span>
              </p>
              <p class="t-contact-phone">
                <a href="tel:090-0000-0000">
                  <small>tel.</small>090-0000-0000
                </a>
              </p>
              <p class="t-card-image">
                <svg xmlns="http://www.w3.org/2000/svg" width="194.15" height="17.27" viewBox="0 0 194.15 17.27">
                  <g id="グループ_95" data-name="グループ 95" transform="translate(6286.075 11084.654)">
                    <path id="パス_43" data-name="パス 43" d="M-65.314-10.931a8.409,8.409,0,0,1-1.411.136h-2.72c.034-.442.051-.918.068-1.394.017-.408.068-1.19.119-1.6h-3.026a14.054,14.054,0,0,1,.136,1.649c0,.459,0,.9-.017,1.343H-74.29c-.646,0-1.615-.051-2.4-.136v2.686c.782-.068,1.87-.085,2.4-.085h1.921a9.288,9.288,0,0,1-2.5,5.44A10.687,10.687,0,0,1-77.384-1l2.4,1.938c3.145-2.261,4.692-4.964,5.3-9.265h3.315a21.759,21.759,0,0,1-.646,5.746.836.836,0,0,1-.935.629,13.315,13.315,0,0,1-2.312-.255l.323,2.754c.8.068,1.819.153,2.873.153a2.266,2.266,0,0,0,2.38-1.462c.714-1.785.935-6.426,1-8.381a7.8,7.8,0,0,1,.119-.935Zm5.746,6.018c.7-.051,1.972-.1,2.941-.1H-47.6c.7,0,1.649.085,2.091.1V-8.16c-.493.034-1.326.119-2.091.119h-9.027c-.833,0-2.261-.068-2.941-.119Zm31.807-6.443a21.264,21.264,0,0,0-1.6-2.5l-1.683.782a14.922,14.922,0,0,1,1.581,2.55Zm-2.38,1.054a25.925,25.925,0,0,0-1.547-2.584l-1.7.714a13.871,13.871,0,0,1,1.5,2.635Zm-5.933-.85a20.211,20.211,0,0,1,.17-2.21h-3.213a11.876,11.876,0,0,1,.2,2.21v9.707a19.085,19.085,0,0,1-.2,2.567h3.23c-.085-.765-.187-2.108-.187-2.567V-5.814a53.018,53.018,0,0,1,5.848,2.431l1.173-2.873a56.2,56.2,0,0,0-7.021-2.567Zm17.357,3.876-2.023.34V-9.129h2.006v-2.3H-20.74v-3.128h-2.414v3.128H-25.4v2.3h2.244v2.584c-.935.136-1.8.272-2.516.357l.493,2.414,2.023-.391V-1.02c0,.255-.085.34-.34.357-.255,0-1.054,0-1.734-.034a9.222,9.222,0,0,1,.7,2.312,6.216,6.216,0,0,0,2.924-.459C-20.944.782-20.74.17-20.74-1V-4.658c.731-.136,1.479-.289,2.193-.442ZM-9.231.68A38.185,38.185,0,0,0-12.24-7l-2.21.748c.6,1.258,1.19,2.72,1.683,4.1-1.122.136-2.261.272-3.332.374a98.877,98.877,0,0,0,2.363-11.9l-2.7-.425a80.427,80.427,0,0,1-2.227,12.6c-.663.068-1.275.119-1.819.17l.544,2.6C-17.748.952-14.824.544-12.036.1c.153.544.255,1.054.34,1.5Zm5.525-12.954-3.128-.034a9.971,9.971,0,0,1,.153,1.819c0,1.071.017,2.992.187,4.59C-6.018-1.292-4.369.408-2.38.408-.9.408.17-.646,1.343-3.621L-.714-6.137C-.952-5-1.547-2.89-2.329-2.89c-.969,0-1.309-1.547-1.513-3.757-.1-1.122-.1-2.227-.1-3.332A15.707,15.707,0,0,1-3.706-12.274Zm8.228.323-2.6.85C3.893-8.959,4.709-4.658,4.947-2.125l2.7-1.037C7.514-5.593,6.171-10.013,4.522-11.951ZM19.873-6.97a4.6,4.6,0,0,1,1.666,3.162c0,1.19-1.105,2.244-3.332,2.244-1.513,0-2.312-.612-2.312-1.87,0-.238.017-.578.051-.969h.7a27.555,27.555,0,0,0,2.788-.153L19.5-6.97a32.359,32.359,0,0,1-3.3.2h-.017c.068-.612.153-1.258.238-1.87a26.161,26.161,0,0,0,3.128-.17l.085-2.414a20.234,20.234,0,0,1-2.89.221c.068-.459.119-.816.153-1.037.085-.476.17-.969.34-1.683l-2.856-.153a10.525,10.525,0,0,1-.034,1.666q-.026.484-.1,1.122a14.488,14.488,0,0,1-3.349-.629l-.119,2.346a20.981,20.981,0,0,0,3.2.595l-.238,1.887a14.323,14.323,0,0,1-3.179-.663l-.136,2.465a19.966,19.966,0,0,0,3.043.527c-.068.646-.1,1.19-.1,1.564,0,2.856,1.887,4.08,4.76,4.08C22,1.088,24.31-.9,24.31-3.468a6.681,6.681,0,0,0-1.581-4.114Zm13.838-.051v2.074H31.144V-7.021ZM36.159-2.6V-9.367H28.747v8.041h2.4V-2.6ZM42.806-13.43H27.268v2.5H38.3v9.5c0,.357-.153.476-.561.476s-1.955.017-3.094-.068A10.132,10.132,0,0,1,35.683,1.6a10.2,10.2,0,0,0,3.995-.476c.9-.391,1.224-1.1,1.224-2.5v-9.554h1.9ZM53.312-9.367c.051,1.972.612,2.618,2.737,2.618h2.006c1.7,0,2.346-.646,2.6-2.924a6.54,6.54,0,0,1-2.176-.9c-.068,1.394-.17,1.632-.663,1.632H56.423c-.561,0-.646-.068-.646-.7v-.612A27.7,27.7,0,0,0,59.891-11.8l-1.547-1.785a21.159,21.159,0,0,1-2.567,1.292V-14.45H53.312v5.015a17.052,17.052,0,0,0-1.921-3.995l-2.108.782c.221.374.425.782.629,1.19l-1.6.068c.391-.85.782-1.8,1.139-2.737l-2.584-.527a22.113,22.113,0,0,1-1.088,3.366q-.714.025-1.326.051l.187,2.329,6.171-.425a7.33,7.33,0,0,1,.238.85ZM47.736-3.3v-.663h1.938V-3.3Zm1.938-3.043v.578H47.736v-.578Zm2.448-2.006H45.458V1.6h2.278V-1.5h1.938v.663c0,.2-.068.255-.272.255A12.38,12.38,0,0,1,48.059-.6a8.994,8.994,0,0,1,.782,2.176,4.846,4.846,0,0,0,2.448-.408c.646-.357.833-.952.833-1.955ZM56.44-.629c-.578,0-.68-.068-.68-.714v-1A28.981,28.981,0,0,0,60.044-4.1L58.429-5.9A18.3,18.3,0,0,1,55.76-4.454V-6.477H53.312v5.151c0,2.142.544,2.839,2.737,2.839h2.074c1.751,0,2.38-.714,2.635-3.179a6.987,6.987,0,0,1-2.159-.9c-.085,1.632-.187,1.938-.714,1.938ZM68.986-4.522h2.125l.7-5.372.1-2.822H68.187l.1,2.822ZM70.04.2a1.879,1.879,0,0,0,2.006-1.87,1.9,1.9,0,0,0-2.006-1.87,1.9,1.9,0,0,0-2.006,1.87A1.879,1.879,0,0,0,70.04.2Z" transform="translate(-6187 -11070)" fill="#f06" />
                    <path id="パス_45" data-name="パス 45" d="M-8.075,1l.612.612L8.075-13.923l-.612-.612Z" transform="translate(-6100 -11070)" fill="#f06" />
                    <path id="パス_44" data-name="パス 44" d="M-8.075-16l.612-.612L8.075-1.077l-.612.612Z" transform="translate(-6278 -11084) rotate(180)" fill="#f06" />
                  </g>
                </svg>
                <img src="http://btfly.com/wp-content/uploads/2020/06/card-dummy.png" alt="カード払いも可能！" />
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="head-nav-container">
        <div class="container">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'primary',
            'container_class' => 'header-navigation'
          ));
          ?>
        </div>
      </nav>
    </header>