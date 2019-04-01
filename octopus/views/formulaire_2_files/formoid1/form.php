<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form enctype="multipart/form-data" class="formoid-solid-blue" style="background-color:#1A2223;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Games</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>" title="Name"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input" required="required" placeholder="Name"/><span class="icon-place"></span></div></div>
	<div class="element-file<?php frmd_add_class("file"); ?>" title="Logo"><label class="title"><span class="required">*</span></label><div class="item-cont"><label class="large" ><div class="button">Choose File</div><input type="file" class="file_input" name="file" required="required"/><div class="file_text">Logo</div><span class="icon-place"></span></label></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="medium" name="textarea" cols="20" rows="5" required="required" placeholder="Description"></textarea><span class="icon-place"></span></div></div>
	<div class="element-rating<?php frmd_add_class("rating"); ?>"><label class="title">Rating<span class="required">*</span></label><div class="rating"><input type="radio" class="rating-input" id="rating-10" name="rating" value="10" /><label for="rating-10" class="rating-star"></label><input type="radio" class="rating-input" id="rating-9" name="rating" value="9" /><label for="rating-9" class="rating-star"></label><input type="radio" class="rating-input" id="rating-8" name="rating" value="8" /><label for="rating-8" class="rating-star"></label><input type="radio" class="rating-input" id="rating-7" name="rating" value="7" /><label for="rating-7" class="rating-star"></label><input type="radio" class="rating-input" id="rating-6" name="rating" value="6" /><label for="rating-6" class="rating-star"></label><input type="radio" class="rating-input" id="rating-5" name="rating" value="5" /><label for="rating-5" class="rating-star"></label><input type="radio" class="rating-input" id="rating-4" name="rating" value="4" /><label for="rating-4" class="rating-star"></label><input type="radio" class="rating-input" id="rating-3" name="rating" value="3" /><label for="rating-3" class="rating-star"></label><input type="radio" class="rating-input" id="rating-2" name="rating" value="2" /><label for="rating-2" class="rating-star"></label><input type="radio" class="rating-input" id="rating-1" name="rating" value="1" /><label for="rating-1" class="rating-star"></label></div></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-blue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>