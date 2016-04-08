<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php if ($this->countModules('search-tour')) : ?>
	<div class="container">
	<!-- NAV HELPER -->
		<div class="search-tour <?php $this->_c('search-tour') ?>">
			<jdoc:include type="modules" name="<?php $this->_p('search-tour') ?>" style="raw" />
		</div>
	</div>
	<!-- //NAV HELPER -->
<?php endif ?>