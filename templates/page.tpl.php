<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <!-- ______________________ HEADER _______________________ -->

  <?php
  global $theme_path;
  include ($theme_path.'/includes/inc_header.php');
  ?>

  <!-- ______________________ MAIN _______________________ -->

  <div id="main" class="clearfix">

    <div id="content">
      <div id="content-inner" class="inner column center">

        <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
          <div id="content-header">

            <?php print $breadcrumb; ?>

            <?php if ($page['highlight']): ?>
              <div id="highlight"><?php print render($page['highlight']) ?></div>
            <?php endif; ?>

            <?php if ($title): ?>
              <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>

            <?php print $messages; ?>
            <?php print render($page['help']); ?>

            <?php if ($tabs): ?>
              <div class="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>

            <?php if ($action_links): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            
          </div> <!-- /#content-header -->
        <?php endif; ?>

        <div id="content-area">
          <?php print render($page['content']) ?>
        </div>

        <?php print $feed_icons; ?>

      </div>
    </div> <!-- /content-inner /content -->

    <?php if ($main_menu || $secondary_menu): ?>
      <div id="navigation" class="menu <?php if (!empty($main_menu)) {print "with-primary";} if (!empty($secondary_menu)) {print " with-secondary";} ?>">
        <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); ?>
        <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary', 'class' => array('links', 'clearfix', 'sub-menu')))); ?>
      </div>
    <?php endif; ?>

    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="column sidebar first">
        <div id="sidebar-first-inner" class="inner">
          <?php print render($page['sidebar_first']); ?>
        </div>
      </div>
    <?php endif; ?> <!-- /sidebar-first -->

    <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="column sidebar second">
        <div id="sidebar-second-inner" class="inner">
          <?php print render($page['sidebar_second']); ?>
        </div>
      </div>
    <?php endif; ?> <!-- /sidebar-second -->

  </div> <!-- /main -->

  <!-- ______________________ FOOTER _______________________ -->

  <?php
  global $theme_path;
  include ($theme_path.'/includes/inc_footer.php');
  ?>

</div> <!-- /page -->