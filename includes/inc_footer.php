<?php
/* 
 * Le footer du site
 * Place en includes
 */

?>
<?php if ($page['footer']): ?>
    <div id="footer">
      <?php print render($page['footer']); ?>
    </div> <!-- /footer -->
  <?php endif; ?>