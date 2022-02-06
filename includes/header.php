<!-- <?php wp_body_open(); ?> -->





<header id="js-header" class="l-header">
  <div class="l-header__inner">
    <div class="l-header__column">
      <p class="l-header__logo">
        <a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a>
      </p>
      <nav class="l-header__nav u-dp-pc">
        <?php
        $args = array (
          'menu' => 'global-navigation',
          'menu_class' => 'l-header__list l-header__list--nav',
          'container' => false,
          'depth'         => 1,
          'fallback_cb'   => false,
          'add_li_class'  => 'l-header__item--nav',
        );
        wp_nav_menu($args);
        ?>

        <!--
          <ul class="l-header__list l-header__list--nav">
            <li class="l-header__item--nav">
              <a href="/">
                <span class="-en">HOME</span>
                <span class="-ja">ホーム</span>
              </a>
            </li>
            <li class="l-header__item--nav">
              <a href="/about">
                <span class="-en">ABOUT</span>
                <span class="-ja">私について</span>
              </a>
            </li>
            <li class="l-header__item--nav">
              <a href="/work">
                <span class="-en">WORK</span>
                <span class="-ja">制作物一覧</span>
              </a>
            </li>
            <li class="l-header__item--nav">
              <a href="/blog">
                <span class="-en">BLOG</span>
                <span class="-ja">ブログ</span>
              </a>
            </li>
            <li class="l-header__item--nav">
              <a href="/blog">
                <span class="-en">CONTACT</span>
                <span class="-ja">お問い合わせ</span>
              </a>
            </li>
          </ul> -->
      </nav>
    </div>
  </div>
</header>

<button class="l-drawer__trigger js-draw--trigger">
  <span class="-line"></span>
</button>

<div class="l-drawer__bg js-draw--bg u-dp-sp">&nbsp;</div>

<nav class="l-drawer__content js-draw--content">
  <div class="l-drawer__wrap">

    <?php
    $args = array (
      'menu' => 'global-navigation',
      'menu_class' => 'l-drawer__list l-drawer__list--menu',
      'container' => false,
      'depth'         => 1,
      'fallback_cb'   => false,
      'add_li_class'  => 'l-drawer__item',
    );
    wp_nav_menu($args);
    ?>

    <!-- <ul class="l-drawer__list l-drawer__list--menu">
      <li class="l-drawer__item">
        <a href="/">
          <span class="-en">HOME</span>
          <span class="-ja">ホーム</span>
        </a>
      </li>
      <li class="l-drawer__item">
        <a href="/about">
          <span class="-en">about</span>
          <span class="-ja">私について</span>
        </a>
      </li>
      <li class="l-drawer__item">
        <a href="/work">
          <span class="-en">work</span>
          <span class="-ja">制作物一覧</span>
        </a>
      </li>
      <li class="l-drawer__item">
        <a href="/blog">
          <span class="-en">TOPICS</span>
          <span class="-ja">トピックス</span>
        </a>
      </li>
      <li class="l-drawer__item">
        <a href="/blog">
          <span class="-en">BLOG</span>
          <span class="-ja">ブログ</span>
        </a>
      </li>
      <li class="l-drawer__item">
        <a href="/">
          <span class="-en">CONTACT</span>
          <span class="-ja">お問い合わせ</span>
        </a>
      </li>
    </ul> -->
  </div>
</nav>
