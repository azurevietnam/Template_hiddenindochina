<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<!-- BACK TOP TOP BUTTON -->
<div id="back-to-top" data-spy="affix" data-offset-top="300" class="back-to-top hidden-xs hidden-sm affix-top">
  <button class="btn btn-primary" title="Back to Top"><i class="rocket"></i></button>
</div>
<script type="text/javascript">
(function($) {
	// Back to top
	$('#back-to-top').on('click', function(){
		$("html, body").animate({scrollTop: 0}, 500);
		return false;
	});
})(jQuery);
</script>
<!-- BACK TO TOP BUTTON -->
<!-- FOOTER -->
<footer id="t3-footer" class="wrap t3-footer">
	<div class="container">
		<!-- FOOT NAVIGATION -->
		<div class="info">
			<jdoc:include type="modules" name="<?php $this->_p('infomation') ?>" />
		</div>
		<!-- //FOOT NAVIGATION -->
		<section class="t3-copyright">
			<div class="copyright-footer row">
				<?php if ($this->getParam('t3-rmvlogo', 1)): ?>
					<div class="col-md-2 col-sm-12">
						<a href="/" title="Indovillage Viet Nam"><img class="logo-footer" src="/images/ico/logo.png" alt="Indovillage Viet Nam"/></a>
					</div>
				<?php endif; ?>
					<div class="col-md-10 col-sm-12">
						<jdoc:include type="modules" name="<?php $this->_p('contact') ?>" />
					</div>
			</div>
			<div class="copyright <?php $this->_c('footer') ?> row">
					<jdoc:include type="modules" name="<?php $this->_p('footer') ?>" />
			</div>
		</section>
	</div>
</footer>
<!-- //FOOTER -->