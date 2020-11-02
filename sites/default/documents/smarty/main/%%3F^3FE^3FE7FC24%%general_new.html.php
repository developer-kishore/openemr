<?php /* Smarty version 2.6.31, created on 2020-10-12 16:11:00
         compiled from /var/www/html/openemr/interface/forms/soap/templates/general_new.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'xlt', '/var/www/html/openemr/interface/forms/soap/templates/general_new.html', 3, false),array('function', 'headerTemplate', '/var/www/html/openemr/interface/forms/soap/templates/general_new.html', 4, false),array('modifier', 'attr', '/var/www/html/openemr/interface/forms/soap/templates/general_new.html', 18, false),array('modifier', 'text', '/var/www/html/openemr/interface/forms/soap/templates/general_new.html', 23, false),)), $this); ?>
<html>
<head>
<title><?php echo smarty_function_xlt(array('t' => 'SOAP'), $this);?>
</title>
<?php echo smarty_function_headerTemplate(array(), $this);?>

</head>
<body class="body_top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-header">
                    <h2><?php echo smarty_function_xlt(array('t' => 'SOAP'), $this);?>
</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <form name="soap" method="post" action="<?php echo $this->_tpl_vars['FORM_ACTION']; ?>
/interface/forms/soap/save.php" onsubmit="return top.restoreSession()">
                    <input type="hidden" name="csrf_token_form" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['CSRF_TOKEN_FORM'])) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
">
                    <fieldset>
                            <legend><?php echo smarty_function_xlt(array('t' => 'Subjective'), $this);?>
</legend>
                                <div class="form-group" >
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <textarea name="subjective" class="form-control" cols="60" rows="6"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']->get_subjective())) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
</textarea>
                                    </div>
                                </div>
                    </fieldset>
                    <fieldset>
                            <legend><?php echo smarty_function_xlt(array('t' => 'Objective'), $this);?>
</legend>
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <textarea name="objective" class="form-control" cols="60" rows="6"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']->get_objective())) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
</textarea>
                                    </div>
                                </div>
                    </fieldset>
                    <fieldset>
                            <legend><?php echo smarty_function_xlt(array('t' => 'Assessment'), $this);?>
</legend>
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <textarea name="assessment" class="form-control" cols="60" rows="6"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']->get_assessment())) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
</textarea>
                                    </div>
                                </div>
                    </fieldset>
                    <fieldset>
                            <legend><?php echo smarty_function_xlt(array('t' => 'Plan'), $this);?>
</legend>
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <textarea name="plan" class="form-control" cols="60" rows="6"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']->get_plan())) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
</textarea>
                                    </div>
                                </div>
                    </fieldset>
                    <div class="form-group clearfix">
                        <div class="col-sm-10 col-sm-offset-1 position-override">
                            <div class="btn-group oe-opt-btn-group-pinch" role="group">
                                <button type="submit" class="btn btn-default btn-save" name="Submit"><?php echo smarty_function_xlt(array('t' => 'Save'), $this);?>
</button>
                                <button type="button" class="btn btn-link btn-cancel oe-opt-btn-separate-left" onclick="top.restoreSession(); location.href='<?php echo $this->_tpl_vars['DONT_SAVE_LINK']; ?>
';"><?php echo smarty_function_xlt(array('t' => 'Cancel'), $this);?>
</button>
                            </div>
                            <input type="hidden" name="id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']->get_id())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
" />
                            <input type="hidden" name="activity" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']->get_activity())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
">
                            <input type="hidden" name="pid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']->get_pid())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
">
                            <input type="hidden" name="process" value="true">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>