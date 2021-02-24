<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://google.com');
define('FINISH_ACTION', 'redirect');
define('FINISH_MESSAGE', '');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-dark.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-dark.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-dark" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Formulario de registro</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>" title="NIT"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input" placeholder="NIT"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>" title="Nombre razon social"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input1" placeholder="Nombre razon social"/><span class="icon-place"></span></div></div>
	<div class="element-email<?php frmd_add_class("email"); ?>" title="Correo corporativo"><label class="title"></label><div class="item-cont"><input class="large" type="email" name="email" value="" placeholder="Correo corporativo"/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number"); ?>" title="Numero de proyecto"><label class="title"></label><div class="item-cont"><input class="large" type="text" min="0" max="100" name="number" placeholder="Numero de proyecto" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number1"); ?>" title="Consecutivo propuesta"><label class="title"></label><div class="item-cont"><input class="large" type="text" min="0" max="100" name="number1" placeholder="Consecutivo propuesta" value=""/><span class="icon-place"></span></div></div>
	<div class="element-checkbox<?php frmd_add_class("checkbox"); ?>" title="Herramientas a usar"><label class="title">Herramientas a usar</label>		<div class="column column2"><label><input type="checkbox" name="checkbox[]" value="Declaraci&oacute;n de renta"/ ><span>Declaraci&oacute;n de renta</span></label><label><input type="checkbox" name="checkbox[]" value="Facturaci&oacute;n electr&oacute;nica"/ ><span>Facturaci&oacute;n electr&oacute;nica</span></label><label><input type="checkbox" name="checkbox[]" value="Declaraciones peri&oacute;dicas"/ ><span>Declaraciones peri&oacute;dicas</span></label></div><span class="clearfix"></span>
		<div class="column column2"><label><input type="checkbox" name="checkbox[]" value="Conciliaci&oacute;n contable fiscal"/ ><span>Conciliaci&oacute;n contable fiscal</span></label><label><input type="checkbox" name="checkbox[]" value="Medios Magn&eacute;ticos"/ ><span>Medios Magn&eacute;ticos</span></label><label><input type="checkbox" name="checkbox[]" value="Country by country"/ ><span>Country by country</span></label></div><span class="clearfix"></span>
</div>
<div class="submit"><input type="submit" value="Registrar"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-dark.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>