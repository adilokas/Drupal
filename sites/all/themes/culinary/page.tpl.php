<?php
/**
 * Created by PhpStorm.
 * User: abarrak
 * Date: 21/03/2017
 * Time: 17:27
 */
?>
<div id="wrapper">
  <div id="header">
      <div id="logo">
          <!-- Configuration information title slogan & description -->
          <h1><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a></h1>
          <?php if ($site_slogan): ?>
              <h2><?php print $site_slogan; ?></h2>
          <?php endif; ?>
      </div>
      <!-- end div#logo -->
</div>
  <!-- end div#header -->
<div id="menu">
    <?php print render($page['menu']); ?>
</div>
  <!-- end div#menu -->
<div id="page">
    <div id="page-bgtop">
        <?php if ($messages): ?>
            <div id="messages">
                <?php print $messages; ?>
            </div>
        <?php endif; ?>
        <div id="help">
            <?php print render($page['help']); ?>
        </div>
      <div id="content">
          <?php print $breadcrumb; ?>
          <?php print render($page['content']); ?>
      </div>
      <!-- end div#content -->
      <div id="sidebar">
          <?php print render($page['sidebar_first']); ?>
      </div>
      <!-- end div#sidebar -->
      <div style="clear: both; height: 1px"></div>
    </div>
  </div>
  <!-- end div#page -->
  <div id="footer">
      <?php print render($page['footer']); ?>
  </div>
  <!-- end div#footer -->
</div>
