<?php
/**
 * ------------------------------------------------------------------------
 * JA Playmag Template
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - Copyrighted Commercial Software
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites:  http://www.joomlart.com -  http://www.joomlancers.com
 * This file may not be redistributed in whole or significant part.
 * ------------------------------------------------------------------------
 */

defined('_JEXEC') or die;
if (!isset($this->error)) {
	$this->error = JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
	$this->debug = false;
}
//get language and direction
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;
$theme = JFactory::getApplication()->getTemplate(true)->params->get('theme', '');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<title><?php echo $this->error->getCode(); ?> - <?php echo $this->title; ?></title>
	<?php $this->setMetaData('generator','Azure Viet Nam'); ?>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="refresh" content="3;URL=http://hiddenindochina.vn">
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/error.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/normalize.min.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script> 
</head>
<body class="page-error">
<div class="container">
	<div class="main">
		<div class="error">
			<div id="outline">
				<div id="errorboxoutline">
					<div class="error-code"><?php 
						$errcode = str_split($this->error->getCode());
						$i = 0;
						$lastclass='';
						foreach($errcode as $c){
	                        $firstclass = ($i==0)?'first':'';
							if($i==(count($errcode)-1)){
								$lastclass='last';
							}
							echo '<span class="'.$lastclass.$firstclass.'">'.$c.'</span>';
							$i++;
						}
						?></div>
					
					<div class="error-message"><h1>Trang không tồn tại. Hệ thống sẽ chuyển hướng về trang chủ trong vòng 3 giây.</h1></div>		
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
