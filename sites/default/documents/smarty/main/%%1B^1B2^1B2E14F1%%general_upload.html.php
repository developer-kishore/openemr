<?php /* Smarty version 2.6.31, created on 2020-10-29 15:35:46
         compiled from /var/www/html/openemr/templates/documents/general_upload.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'xlt', '/var/www/html/openemr/templates/documents/general_upload.html', 17, false),array('function', 'xla', '/var/www/html/openemr/templates/documents/general_upload.html', 33, false),array('function', 'xl', '/var/www/html/openemr/templates/documents/general_upload.html', 40, false),array('modifier', 'text', '/var/www/html/openemr/templates/documents/general_upload.html', 29, false),array('modifier', 'attr', '/var/www/html/openemr/templates/documents/general_upload.html', 40, false),array('modifier', 'attr_url', '/var/www/html/openemr/templates/documents/general_upload.html', 52, false),)), $this); ?>

<form method=post enctype="multipart/form-data" action="<?php echo $this->_tpl_vars['FORM_ACTION']; ?>
" onsubmit="return top.restoreSession()">
<input type="hidden" name="MAX_FILE_SIZE" value="64000000" />

<?php if (( ! ( $this->_tpl_vars['patient_id'] > 0 ) )): ?>
  <div class="text" style="color:red;">
    <?php echo smarty_function_xlt(array('t' => "IMPORTANT: This upload tool is only for uploading documents on patients that are not yet entered into the system. To upload files for patients whom already have been entered into the system, please use the upload tool linked within the Patient Summary screen."), $this);?>

    <br/>
    <br/>
  </div>
<?php endif; ?>

<div class="text">
    <?php echo smarty_function_xlt(array('t' => "NOTE: Uploading files with duplicate names will cause the files to be automatically renamed (for example, file.jpg will become file.1.jpg). Filenames are considered unique per patient, not per category."), $this);?>

    <br/>
    <br/>
</div>
<div class="text bold">
    <?php echo smarty_function_xlt(array('t' => 'Upload Document'), $this);?>
 <?php if ($this->_tpl_vars['category_name']): ?> <?php echo smarty_function_xlt(array('t' => 'to category'), $this);?>
 '<?php echo ((is_array($_tmp=$this->_tpl_vars['category_name'])) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
'<?php endif; ?>
</div>
<div class="text">
    <p><span><?php echo smarty_function_xlt(array('t' => 'Source File Path'), $this);?>
:</span> <input type="file" name="file[]" id="source-name" multiple="true"/>&nbsp;(<font size="1"><?php echo smarty_function_xlt(array('t' => "Multiple files can be uploaded at one time by selecting them using CTRL+Click or SHIFT+Click."), $this);?>
</font>)</p>
    <p><span title="<?php echo smarty_function_xla(array('t' => 'Leave Blank To Keep Original Filename'), $this);?>
"><?php echo smarty_function_xlt(array('t' => 'Optional Destination Name'), $this);?>
:</span> <input type="text" name="destination" title="<?php echo smarty_function_xla(array('t' => 'Leave Blank To Keep Original Filename'), $this);?>
" id="destination-name" /></p>
    <?php if (! $this->_tpl_vars['hide_encryption']): ?>
	</br>
	<p><span title="<?php echo smarty_function_xla(array('t' => 'Check the box if this is an encrypted file'), $this);?>
"><?php echo smarty_function_xlt(array('t' => "Is The File Encrypted?"), $this);?>
:</span> <input type="checkbox" name="encrypted" title="<?php echo smarty_function_xla(array('t' => 'Check the box if this is an encrypted file'), $this);?>
" id="encrypted" /></p>
	<p><span title="<?php echo smarty_function_xla(array('t' => 'Pass phrase to decrypt document'), $this);?>
"><?php echo smarty_function_xlt(array('t' => 'Pass Phrase'), $this);?>
:</span> <input type="text" name="passphrase" title="<?php echo smarty_function_xla(array('t' => 'Pass phrase to decrypt document'), $this);?>
" id="passphrase" /></p>
	<p><i><?php echo smarty_function_xlt(array('t' => 'Supports AES-256-CBC encryption/decryption only.'), $this);?>
</i></p>
    <?php endif; ?>
    <p><input type="submit" value="<?php echo smarty_function_xl(array('t' => ((is_array($_tmp='Upload')) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp))), $this);?>
" /></p>
</div>

<input type="hidden" name="patient_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['patient_id'])) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
" />
<input type="hidden" name="category_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['category_id'])) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
" />
<input type="hidden" name="process" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['PROCESS'])) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
" />
</form>

<br><br>

<!-- Drag and drop uploader -->
<div id="autouploader">
<form method="post" enctype="multipart/form-data" action="<?php echo $this->_tpl_vars['GLOBALS']['webroot']; ?>
/library/ajax/upload.php?patient_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['patient_id'])) ? $this->_run_mod_handler('attr_url', true, $_tmp) : attr_url($_tmp)); ?>
&parent_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['category_id'])) ? $this->_run_mod_handler('attr_url', true, $_tmp) : attr_url($_tmp)); ?>
&csrf_token_form=<?php echo ((is_array($_tmp=$this->_tpl_vars['CSRF_TOKEN_FORM'])) ? $this->_run_mod_handler('attr_url', true, $_tmp) : attr_url($_tmp)); ?>
" class="dropzone">
<input type="hidden" name="MAX_FILE_SIZE" value="64000000" >
</form>
</div>

<!-- Section for document template download -->
<form method='post' action='interface/patient_file/download_template.php' onsubmit='return top.restoreSession()'>
<input type="hidden" name="csrf_token_form" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['CSRF_TOKEN_FORM'])) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
">
<input type='hidden' name='patient_id' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['patient_id'])) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
' />
<div class='col-sm-6'>
	<p class='text bold'>
		<?php echo smarty_function_xlt(array('t' => 'Download document template for this patient and visit'), $this);?>

	</p>
	<div class="input-group">
		<span class="input-group-btn">
        	<button type="submit" class="btn btn-download"><?php echo smarty_function_xlt(array('t' => 'Fetch'), $this);?>
</button>
        </span>
		<select class="form-control" name='form_filename'><?php echo $this->_tpl_vars['TEMPLATES_LIST']; ?>
</select>
	</div>
</div>
</form>
<!-- End document template download section -->

<!-- Section for portal document templates -->
<div class='col-sm-6'>
	<p class='text bold'>
		<?php echo smarty_function_xlt(array('t' => 'Patient Document Template Forms'), $this);?>

	</p>
	<div class="input-group">
		<span class="input-group-btn">
			<button class="btn btn-download" onclick="callTemplateModule()"><?php echo smarty_function_xlt(array('t' => 'Open'), $this);?>
</button>
		</span>
		<select class="form-control" id='template_filename'><?php echo $this->_tpl_vars['TEMPLATES_LIST_PATIENT']; ?>
</select>
	</div>
</div>

<?php if (! empty ( $this->_tpl_vars['file'] )): ?>
	<div class="text bold">
		<br/>
		<?php echo smarty_function_xlt(array('t' => 'Upload Report'), $this);?>

	</div>
	<?php $_from = $this->_tpl_vars['file']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
		<div class="text">
			<?php if ($this->_tpl_vars['error']): ?><i><?php echo ((is_array($_tmp=$this->_tpl_vars['error'])) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
</i><br/><?php endif; ?>
			<?php echo smarty_function_xlt(array('t' => 'ID'), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['file']->get_id())) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
<br>
			<?php echo smarty_function_xlt(array('t' => 'Patient'), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['file']->get_foreign_id())) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
<br>
			<?php echo smarty_function_xlt(array('t' => 'URL'), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['file']->get_url())) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
<br>
			<?php echo smarty_function_xlt(array('t' => 'Size'), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['file']->get_size())) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
<br>
			<?php echo smarty_function_xlt(array('t' => 'Date'), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['file']->get_date())) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
<br>
			<?php echo smarty_function_xlt(array('t' => 'Hash'), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['file']->get_hash())) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
<br>
			<?php echo smarty_function_xlt(array('t' => 'MimeType'), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['file']->get_mimetype())) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
<br>
			<?php echo smarty_function_xlt(array('t' => 'Revision'), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['file']->revision)) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
<br><br>
		</div>
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<h3><?php echo $this->_tpl_vars['error']; ?>
</h3>