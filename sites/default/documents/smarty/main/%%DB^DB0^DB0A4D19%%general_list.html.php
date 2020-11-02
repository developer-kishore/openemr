<?php /* Smarty version 2.6.31, created on 2020-10-08 10:28:33
         compiled from /var/www/html/openemr/templates/pharmacies/general_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'xlt', '/var/www/html/openemr/templates/pharmacies/general_list.html', 2, false),array('modifier', 'attr_url', '/var/www/html/openemr/templates/pharmacies/general_list.html', 16, false),array('modifier', 'text', '/var/www/html/openemr/templates/pharmacies/general_list.html', 17, false),array('modifier', 'upper', '/var/www/html/openemr/templates/pharmacies/general_list.html', 23, false),)), $this); ?>
<a href="controller.php?practice_settings&<?php echo $this->_tpl_vars['TOP_ACTION']; ?>
pharmacy&action=edit" onclick="top.restoreSession()" class="btn btn-default btn-add" >
<span><?php echo smarty_function_xlt(array('t' => 'Add a Pharmacy'), $this);?>
</span></a><br><br>

<table class="table table-responsive table-striped">
	<thead>
        <tr>
            <th><?php echo smarty_function_xlt(array('t' => 'Name'), $this);?>
</th>
            <th><?php echo smarty_function_xlt(array('t' => 'Address'), $this);?>
</th>
            <th><?php echo smarty_function_xlt(array('t' => 'Default Method'), $this);?>
</th>
        </tr>
    </thead>
    <tbody>
	<?php $_from = $this->_tpl_vars['pharmacies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pharmacy']):
?>
	<tr>
		<td>
		    <a href="<?php echo $this->_tpl_vars['CURRENT_ACTION']; ?>
action=edit&id=<?php echo ((is_array($_tmp=$this->_tpl_vars['pharmacy']->id)) ? $this->_run_mod_handler('attr_url', true, $_tmp) : attr_url($_tmp)); ?>
" onclick="top.restoreSession()">
		        <?php echo ((is_array($_tmp=$this->_tpl_vars['pharmacy']->name)) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>

		    </a>
		</td>
		<td>
		<?php if ($this->_tpl_vars['pharmacy']->address->line1 != ''): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['pharmacy']->address->line1)) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
, <?php endif; ?>
		<?php if ($this->_tpl_vars['pharmacy']->address->city != ''): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['pharmacy']->address->city)) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
, <?php endif; ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['pharmacy']->address->state)) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)))) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['pharmacy']->address->zip)) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
&nbsp;</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['pharmacy']->get_transmit_method_display())) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
&nbsp;
	<?php endforeach; else: ?></td>
	</tr>

	<tr>
		<td colspan="3"><b><?php echo smarty_function_xlt(array('t' => 'No Pharmacies Found'), $this);?>
<b></td>
	</tr>
	<?php endif; unset($_from); ?>
    </tbody>
</table>