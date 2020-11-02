<?php /* Smarty version 2.6.31, created on 2020-10-22 15:47:36
         compiled from /var/www/html/openemr/interface/forms/vitals/templates/vitals/general_new.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'headerTemplate', '/var/www/html/openemr/interface/forms/vitals/templates/vitals/general_new.html', 12, false),array('function', 'xlj', '/var/www/html/openemr/interface/forms/vitals/templates/vitals/general_new.html', 23, false),array('function', 'xlt', '/var/www/html/openemr/interface/forms/vitals/templates/vitals/general_new.html', 130, false),array('function', 'xla', '/var/www/html/openemr/interface/forms/vitals/templates/vitals/general_new.html', 138, false),array('function', 'math', '/var/www/html/openemr/interface/forms/vitals/templates/vitals/general_new.html', 175, false),array('modifier', 'attr', '/var/www/html/openemr/interface/forms/vitals/templates/vitals/general_new.html', 145, false),array('modifier', 'date_format', '/var/www/html/openemr/interface/forms/vitals/templates/vitals/general_new.html', 153, false),array('modifier', 'text', '/var/www/html/openemr/interface/forms/vitals/templates/vitals/general_new.html', 156, false),array('modifier', 'string_format', '/var/www/html/openemr/interface/forms/vitals/templates/vitals/general_new.html', 217, false),array('modifier', 'substr', '/var/www/html/openemr/interface/forms/vitals/templates/vitals/general_new.html', 310, false),array('modifier', 'js_escape', '/var/www/html/openemr/interface/forms/vitals/templates/vitals/general_new.html', 370, false),array('modifier', 'js_url', '/var/www/html/openemr/interface/forms/vitals/templates/vitals/general_new.html', 458, false),)), $this); ?>
<html>
<head>
<?php echo smarty_function_headerTemplate(array('assets' => 'datetime-picker'), $this);?>


<?php echo '
<script type="text/javascript">
function vitalsFormSubmitted() {
    var invalid = "";

    var elementsToValidate = new Array();

    elementsToValidate[0] = new Array();
    elementsToValidate[0][0] = \'weight_input\';
    elementsToValidate[0][1] = '; ?>
<?php echo smarty_function_xlj(array('t' => 'Weight'), $this);?>
<?php echo ' + \' (\' + '; ?>
<?php echo smarty_function_xlj(array('t' => 'lbs'), $this);?>
<?php echo ' + \')\';

    elementsToValidate[1] = new Array();
    elementsToValidate[1][0] = \'weight_input_metric\';
    elementsToValidate[1][1] = '; ?>
<?php echo smarty_function_xlj(array('t' => 'Weight'), $this);?>
<?php echo ' + \' (\' + '; ?>
<?php echo smarty_function_xlj(array('t' => 'kg'), $this);?>
<?php echo ' + \')\';

    elementsToValidate[2] = new Array();
    elementsToValidate[2][0] = \'height_input\';
    elementsToValidate[2][1] = '; ?>
<?php echo smarty_function_xlj(array('t' => "Height/Length"), $this);?>
<?php echo ' + \' (\' + '; ?>
<?php echo smarty_function_xlj(array('t' => 'in'), $this);?>
<?php echo ' + \')\';

    elementsToValidate[3] = new Array();
    elementsToValidate[3][0] = \'height_input_metric\';
    elementsToValidate[3][1] = '; ?>
<?php echo smarty_function_xlj(array('t' => "Height/Length"), $this);?>
<?php echo ' + \' (\' + '; ?>
<?php echo smarty_function_xlj(array('t' => 'cm'), $this);?>
<?php echo ' + \')\';

    elementsToValidate[4] = new Array();
    elementsToValidate[4][0] = \'bps_input\';
    elementsToValidate[4][1] = '; ?>
<?php echo smarty_function_xlj(array('t' => 'BP Systolic'), $this);?>
<?php echo ';

    elementsToValidate[5] = new Array();
    elementsToValidate[5][0] = \'bpd_input\';
    elementsToValidate[5][1] = '; ?>
<?php echo smarty_function_xlj(array('t' => 'BP Diastolic'), $this);?>
<?php echo ';

    for (var i = 0; i < elementsToValidate.length; i++) {
        var current_elem_id = elementsToValidate[i][0];
        var tag_name = elementsToValidate[i][1];

        document.getElementById(current_elem_id).classList.remove(\'error\');

        if (isNaN(document.getElementById(current_elem_id).value)) {
            invalid += '; ?>
<?php echo smarty_function_xlj(array('t' => 'The following field has an invalid value'), $this);?>
<?php echo ' + ": " + tag_name + "\\n";
            document.getElementById(current_elem_id).className = document.getElementById(current_elem_id).className + " error";
            document.getElementById(current_elem_id).focus();
        }
    }

    if (invalid.length > 0) {
        invalid += "\\n" + '; ?>
<?php echo smarty_function_xlj(array('t' => "Please correct the value(s) before proceeding!"), $this);?>
<?php echo ';
        alert(invalid);

        return false;
    } else {

        return top.restoreSession();
    }
}
</script>
<style type="text/css" title="mystyles" media="all">
.title {
    font-size: 120%;
    font-weight: bold;
}
.currentvalues {
    border-right: 1px solid black;
    padding-right:5px;
    text-align: left;

}
th.currentvalues, th.historicalvalues{
    background: #E5E5E5;
}
.valuesunfocus {
    border-right: 1px solid black;
    padding-right:5px;
    background-color: #ccc;
    text-align: left;
}
.unfocus {
    background-color: #ccc;
}
.historicalvalues {
    background-color: #ccc;
    border-bottom: 1px solid #ddd;
    border-right: 1px solid #ddd;
    text-align: right;
    background: #E5E5E5;
}
table {
    border-collapse: collapse;
    font-size:smaller;
    font-weight:600;
}
td,th {
   padding-right: 10px;
   padding-left: 10px;
}
th{
    font-weight:800;
}
td{
    padding-top:0px !Important;
    padding-bottom:0px !Important;
}
input[type=text], select{
margin:1px !Important;
}
.hide {
    display:none;
}
.readonly {
    display:none;
}
.error {
  border:2px solid red;
}
</style>
'; ?>


<title><?php echo smarty_function_xlt(array('t' => 'Vitals'), $this);?>
</title>
</head>
<body bgcolor="<?php echo $this->_tpl_vars['STYLE']['BGCOLOR2']; ?>
">

 <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header">
                <h2><?php echo smarty_function_xlt(array('t' => 'Vitals'), $this);?>
&nbsp;&nbsp;&nbsp;<a  href="../summary/demographics.php" onclick="top.restoreSession()" title="<?php echo smarty_function_xla(array('t' => 'Back to patient dashboard'), $this);?>
"><i id="advanced-tooltip" class="readonly fa fa-arrow-circle-o-left fa-2x small" aria-hidden="true"></i> </a></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-sm-offset-3">
                <form name="vitals" method="post" action="<?php echo $this->_tpl_vars['FORM_ACTION']; ?>
/interface/forms/vitals/save.php" onSubmit="return vitalsFormSubmitted()">
                    <input type="hidden" name="csrf_token_form" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['CSRF_TOKEN_FORM'])) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
">
                    <div id="chart" class="chart-dygraphs" style="margin-left:-15px"></div>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th align="left" ><?php echo smarty_function_xlt(array('t' => 'Name'), $this);?>
</th>
                                <th align="left" ><?php echo smarty_function_xlt(array('t' => 'Unit'), $this);?>
</th>
                                <th class='currentvalues' title='<?php echo smarty_function_xla(array('t' => 'Date and time of this observation'), $this);?>
'>
                                <input type='text' size='14' class='datetimepicker oe-patient-background' name='date' id='date' value='<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['vitals']->get_date())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M")))) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
'>
                                </th>
                                <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                                    <th class='historicalvalues'><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['result']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M")))) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
</th>
                                <?php endforeach; endif; unset($_from); ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($this->_tpl_vars['units_of_measurement'] == 4): ?><tr class="hide"><?php else: ?><tr><?php endif; ?>
                                <?php if ($this->_tpl_vars['units_of_measurement'] == 2): ?><td class="unfocus graph" id="weight"><?php else: ?><td class="graph" id="weight"><?php endif; ?><?php echo smarty_function_xlt(array('t' => 'Weight'), $this);?>
</td>
                                <?php if ($this->_tpl_vars['units_of_measurement'] == 2): ?><td class="unfocus"><?php else: ?><td><?php endif; ?><?php echo smarty_function_xlt(array('t' => 'lbs'), $this);?>
</td>
                                <?php if ($this->_tpl_vars['units_of_measurement'] == 2): ?><td class="valuesunfocus"><?php else: ?><td class='currentvalues'><?php endif; ?>
                                        <input type="text" size='5' name='weight' id='weight_input' value="<?php if ($this->_tpl_vars['vitals']->get_weight() != 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['vitals']->get_weight())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
<?php endif; ?>" onChange="convLbtoKg('weight_input');" title='<?php echo smarty_function_xla(array('t' => "Decimal pounds or pounds and ounces separated by #(e.g. 5#4)"), $this);?>
'/>
                                        </td>
                            <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                                <td  class='historicalvalues'><?php echo ((is_array($_tmp=$this->_tpl_vars['vitals']->display_weight($this->_tpl_vars['result']['weight']))) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
</td>
                            <?php endforeach; endif; unset($_from); ?></tr>

                            <?php if ($this->_tpl_vars['units_of_measurement'] == 3): ?><tr class="hide"><?php else: ?><tr><?php endif; ?>
                                        <?php if ($this->_tpl_vars['units_of_measurement'] == 1): ?><td class="unfocus graph" id="weight_metric"><?php else: ?><td class="graph" id="weight_metric"><?php endif; ?><?php echo smarty_function_xlt(array('t' => 'Weight'), $this);?>
</td>
                                <?php if ($this->_tpl_vars['units_of_measurement'] == 1): ?><td class="unfocus"><?php else: ?><td><?php endif; ?><?php echo smarty_function_xlt(array('t' => 'kg'), $this);?>
</td>
                                        <?php if ($this->_tpl_vars['units_of_measurement'] == 1): ?><td class="valuesunfocus"><?php else: ?><td class='currentvalues'><?php endif; ?>
                                        <input type="text" size='5' id='weight_input_metric' value="<?php if ($this->_tpl_vars['vitals']->get_weight() != 0): ?><?php echo smarty_function_math(array('equation' => "number * constant",'number' => $this->_tpl_vars['vitals']->get_weight(),'constant' => 0.45359237,'format' => ((is_array($_tmp="%.2f")) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp))), $this);?>
<?php endif; ?>" onChange="convKgtoLb('weight_input');"/>
                                        </td>
                                <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                                        <td  class='historicalvalues'><?php if ($this->_tpl_vars['result']['weight'] != 0): ?><?php echo smarty_function_math(array('equation' => "number * constant",'number' => $this->_tpl_vars['result']['weight'],'constant' => 0.45359237,'format' => ((is_array($_tmp="%.2f")) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp))), $this);?>
<?php endif; ?></td>
                                <?php endforeach; endif; unset($_from); ?></tr>

                            <?php if ($this->_tpl_vars['units_of_measurement'] == 4): ?><tr class="hide"><?php else: ?><tr><?php endif; ?>
                                    <?php if ($this->_tpl_vars['units_of_measurement'] == 2): ?><td class="unfocus graph" id="height"><?php else: ?><td class="graph" id="height"><?php endif; ?><?php echo smarty_function_xlt(array('t' => "Height/Length"), $this);?>
</td>
                                <?php if ($this->_tpl_vars['units_of_measurement'] == 2): ?><td class="unfocus"><?php else: ?><td><?php endif; ?><?php echo smarty_function_xlt(array('t' => 'in'), $this);?>
</td>
                                <?php if ($this->_tpl_vars['units_of_measurement'] == 2): ?><td class="valuesunfocus"><?php else: ?><td class='currentvalues'><?php endif; ?>
                                        <input type="text" size='5' name='height' id='height_input' value="<?php if ($this->_tpl_vars['vitals']->get_height() != 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['vitals']->get_height())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
<?php endif; ?>" onChange="convIntoCm('height_input');"/>
                                        </td>
                            <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                                <td class='historicalvalues'><?php if ($this->_tpl_vars['result']['height'] != 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['result']['height'])) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
<?php endif; ?></td>
                            <?php endforeach; endif; unset($_from); ?></tr>

                            <?php if ($this->_tpl_vars['units_of_measurement'] == 3): ?><tr class="hide"><?php else: ?><tr><?php endif; ?>
                                        <?php if ($this->_tpl_vars['units_of_measurement'] == 1): ?><td class="unfocus graph" id="height_metric"><?php else: ?><td class="graph" id="height_metric"><?php endif; ?><?php echo smarty_function_xlt(array('t' => "Height/Length"), $this);?>
</td>
                                <?php if ($this->_tpl_vars['units_of_measurement'] == 1): ?><td class="unfocus"><?php else: ?><td><?php endif; ?><?php echo smarty_function_xlt(array('t' => 'cm'), $this);?>
</td>
                                        <?php if ($this->_tpl_vars['units_of_measurement'] == 1): ?><td class="valuesunfocus"><?php else: ?><td class='currentvalues'><?php endif; ?>
                                        <input type="text" size='5' id='height_input_metric' value="<?php if ($this->_tpl_vars['vitals']->get_height() != 0): ?><?php echo smarty_function_math(array('equation' => "round(number * constant,1)",'number' => $this->_tpl_vars['vitals']->get_height(),'constant' => 2.54,'format' => ((is_array($_tmp="%.2f")) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp))), $this);?>
<?php endif; ?>" onChange="convCmtoIn('height_input');"/>
                                        </td>
                                <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                                        <td class='historicalvalues'><?php if ($this->_tpl_vars['result']['height'] != 0): ?><?php echo smarty_function_math(array('equation' => "number * constant",'number' => $this->_tpl_vars['result']['height'],'constant' => 2.54,'format' => ((is_array($_tmp="%.2f")) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp))), $this);?>
<?php endif; ?></td>
                                <?php endforeach; endif; unset($_from); ?></tr>

                            <tr><td class="graph" id="bps"><?php echo smarty_function_xlt(array('t' => 'BP Systolic'), $this);?>
</td><td><?php echo smarty_function_xlt(array('t' => 'mmHg'), $this);?>
</td>
                                <td class='currentvalues'><input type="text" size='5'
                                    name='bps' id='bps_input' value="<?php echo ((is_array($_tmp=$this->_tpl_vars['vitals']->get_bps())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
"/></td>
                            <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                                <td class='historicalvalues'><?php echo ((is_array($_tmp=$this->_tpl_vars['result']['bps'])) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
</td>
                            <?php endforeach; endif; unset($_from); ?></tr>

                            <tr><td class="graph" id="bpd"><?php echo smarty_function_xlt(array('t' => 'BP Diastolic'), $this);?>
</td><td><?php echo smarty_function_xlt(array('t' => 'mmHg'), $this);?>
</td>
                                <td class='currentvalues'><input type="text" size='5'
                                    name='bpd' id='bpd_input' value="<?php echo ((is_array($_tmp=$this->_tpl_vars['vitals']->get_bpd())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
"/></td>
                            <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                                <td  class='historicalvalues'><?php echo ((is_array($_tmp=$this->_tpl_vars['result']['bpd'])) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
</td>
                            <?php endforeach; endif; unset($_from); ?></tr>

                            <tr><td class="graph" id="pulse"><?php echo smarty_function_xlt(array('t' => 'Pulse'), $this);?>
</td><td><?php echo smarty_function_xlt(array('t' => 'per min'), $this);?>
</td>
                                    <td class='currentvalues'><input type="text" size='5'
                                    name='pulse' id='pulse_input' value="<?php if ($this->_tpl_vars['vitals']->get_pulse() != 0): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['vitals']->get_pulse())) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.0f") : smarty_modifier_string_format($_tmp, "%.0f")))) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
<?php endif; ?>"/></td>
                            <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                                <td class='historicalvalues'><?php if ($this->_tpl_vars['result']['pulse'] != 0): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['result']['pulse'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.0f") : smarty_modifier_string_format($_tmp, "%.0f")))) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
<?php endif; ?></td>
                            <?php endforeach; endif; unset($_from); ?></tr>

                            <tr><td class="graph" id="respiration"><?php echo smarty_function_xlt(array('t' => 'Respiration'), $this);?>
</td><td><?php echo smarty_function_xlt(array('t' => 'per min'), $this);?>
</td>
                                <td class='currentvalues'><input type="text" size='5'
                                    name='respiration' id='respiration_input' value="<?php if ($this->_tpl_vars['vitals']->get_respiration() != 0): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['vitals']->get_respiration())) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.0f") : smarty_modifier_string_format($_tmp, "%.0f")))) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
<?php endif; ?>"/></td>
                            <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                                <td class='historicalvalues'><?php if ($this->_tpl_vars['result']['respiration'] != 0): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['result']['respiration'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.0f") : smarty_modifier_string_format($_tmp, "%.0f")))) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
<?php endif; ?></td>
                            <?php endforeach; endif; unset($_from); ?></tr>

                            <?php if ($this->_tpl_vars['units_of_measurement'] == 4): ?><tr class="hide"><?php else: ?><tr><?php endif; ?>
                                    <?php if ($this->_tpl_vars['units_of_measurement'] == 2): ?><td class="unfocus graph" id="temperature"><?php else: ?><td class="graph" id="temperature"><?php endif; ?><?php echo smarty_function_xlt(array('t' => 'Temperature'), $this);?>
</td>
                                <?php if ($this->_tpl_vars['units_of_measurement'] == 2): ?><td class="unfocus"><?php else: ?><td><?php endif; ?><?php echo smarty_function_xlt(array('t' => 'F'), $this);?>
</td>
                                <?php if ($this->_tpl_vars['units_of_measurement'] == 2): ?><td class="valuesunfocus"><?php else: ?><td class='currentvalues'><?php endif; ?>
                                        <input type="text" size='5' name='temperature' id='temperature_input' value="<?php if ($this->_tpl_vars['vitals']->get_temperature() != 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['vitals']->get_temperature())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
<?php endif; ?>" onChange="convFtoC('temperature_input');"/>
                                        </td>
                            <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                                <td class='historicalvalues'><?php if ($this->_tpl_vars['result']['temperature'] != 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['result']['temperature'])) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
<?php endif; ?></td>
                            <?php endforeach; endif; unset($_from); ?></tr>

                            <?php if ($this->_tpl_vars['units_of_measurement'] == 3): ?><tr class="hide"><?php else: ?><tr><?php endif; ?>
                                        <?php if ($this->_tpl_vars['units_of_measurement'] == 1): ?><td class="unfocus graph" id="temperature_metric"><?php else: ?><td class="graph" id="temperature_metric"><?php endif; ?><?php echo smarty_function_xlt(array('t' => 'Temperature'), $this);?>
</td>
                                <?php if ($this->_tpl_vars['units_of_measurement'] == 1): ?><td class="unfocus"><?php else: ?><td><?php endif; ?><?php echo smarty_function_xlt(array('t' => 'C'), $this);?>
</td>
                                        <?php if ($this->_tpl_vars['units_of_measurement'] == 1): ?><td class="valuesunfocus"><?php else: ?><td class='currentvalues'><?php endif; ?>
                                        <input type="text" size='5' id='temperature_input_metric' value="<?php if ($this->_tpl_vars['vitals']->get_temperature() != 0): ?><?php echo smarty_function_math(array('equation' => "(number - constant2 ) * constant",'number' => $this->_tpl_vars['vitals']->get_temperature(),'constant' => 0.5556,'constant2' => 32,'format' => ((is_array($_tmp="%.2f")) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp))), $this);?>
<?php endif; ?>" onChange="convCtoF('temperature_input');"/>
                                        </td>
                                <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                                        <td class='historicalvalues'><?php if ($this->_tpl_vars['result']['temperature'] != 0): ?><?php echo smarty_function_math(array('equation' => "(number - constant2 ) * constant",'number' => $this->_tpl_vars['result']['temperature'],'constant' => 0.5556,'constant2' => 32,'format' => ((is_array($_tmp="%.2f")) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp))), $this);?>
<?php endif; ?></td>
                                <?php endforeach; endif; unset($_from); ?></tr>

                            <tr><td><?php echo smarty_function_xlt(array('t' => 'Temp Location'), $this);?>
<td></td></td>
                                    <td class='currentvalues'><select name="temp_method" id='temp_method'/><option value=""> </option>
                                    <option value="Oral"              <?php if ($this->_tpl_vars['vitals']->get_temp_method() == 'Oral' || $this->_tpl_vars['vitals']->get_temp_method() == 2): ?> selected<?php endif; ?>><?php echo smarty_function_xlt(array('t' => 'Oral'), $this);?>

                                    <option value="Tympanic Membrane" <?php if ($this->_tpl_vars['vitals']->get_temp_method() == 'Tympanic Membrane' || $this->_tpl_vars['vitals']->get_temp_method() == 1): ?> selected<?php endif; ?>><?php echo smarty_function_xlt(array('t' => 'Tympanic Membrane'), $this);?>

                                    <option value="Rectal"            <?php if ($this->_tpl_vars['vitals']->get_temp_method() == 'Rectal' || $this->_tpl_vars['vitals']->get_temp_method() == 3): ?> selected<?php endif; ?>><?php echo smarty_function_xlt(array('t' => 'Rectal'), $this);?>

                                    <option value="Axillary"          <?php if ($this->_tpl_vars['vitals']->get_temp_method() == 'Axillary' || $this->_tpl_vars['vitals']->get_temp_method() == 4): ?> selected<?php endif; ?>><?php echo smarty_function_xlt(array('t' => 'Axillary'), $this);?>

                                    <option value="Temporal Artery"   <?php if ($this->_tpl_vars['vitals']->get_temp_method() == 'Temporal Artery'): ?> selected<?php endif; ?>><?php echo smarty_function_xlt(array('t' => 'Temporal Artery'), $this);?>

                                </select></td>
                            <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                                <td class='historicalvalues'><?php if ($this->_tpl_vars['result']['temp_method']): ?><?php echo smarty_function_xlt(array('t' => $this->_tpl_vars['result']['temp_method']), $this);?>
<?php endif; ?></td>
                            <?php endforeach; endif; unset($_from); ?></tr>

                            <tr><td class="graph" id="oxygen_saturation"><?php echo smarty_function_xlt(array('t' => 'Oxygen Saturation'), $this);?>
</td><td><?php echo smarty_function_xlt(array('t' => "%"), $this);?>
</td>
                                <td class='currentvalues'><input type="text" size='5'
                                    name='oxygen_saturation' id='oxygen_saturation_input' value="<?php if ($this->_tpl_vars['vitals']->get_oxygen_saturation() != 0): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['vitals']->get_oxygen_saturation())) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.0f") : smarty_modifier_string_format($_tmp, "%.0f")))) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
<?php endif; ?>"/></td>
                            <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                                <td  class='historicalvalues'><?php if ($this->_tpl_vars['result']['oxygen_saturation'] != 0): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['result']['oxygen_saturation'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.0f") : smarty_modifier_string_format($_tmp, "%.0f")))) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
<?php endif; ?></td>
                            <?php endforeach; endif; unset($_from); ?></tr>

                            <?php if ($this->_tpl_vars['units_of_measurement'] == 4 || $this->_tpl_vars['gbl_vitals_options'] > 0): ?><tr class="hide"><?php else: ?><tr><?php endif; ?>
                                    <?php if ($this->_tpl_vars['units_of_measurement'] == 2): ?><td class="unfocus graph" id="head_circ"><?php else: ?><td class="graph" id="head_circ"><?php endif; ?><?php echo smarty_function_xlt(array('t' => 'Head Circumference'), $this);?>
</td>
                                <?php if ($this->_tpl_vars['units_of_measurement'] == 2): ?><td class="unfocus"><?php else: ?><td><?php endif; ?><?php echo smarty_function_xlt(array('t' => 'in'), $this);?>
</td>
                                <?php if ($this->_tpl_vars['units_of_measurement'] == 2): ?><td class="valuesunfocus"><?php else: ?><td class='currentvalues'><?php endif; ?>
                                        <input type="text" size='5' name='head_circ' id='head_circ_input' value="<?php if ($this->_tpl_vars['vitals']->get_head_circ() != 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['vitals']->get_head_circ())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
<?php endif; ?>" onChange="convIntoCm('head_circ_input');"/>
                                        </td>
                            <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                                <td class='historicalvalues'><?php if ($this->_tpl_vars['result']['head_circ'] != 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['result']['head_circ'])) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
<?php endif; ?></td>
                            <?php endforeach; endif; unset($_from); ?></tr>

                            <?php if ($this->_tpl_vars['units_of_measurement'] == 3 || $this->_tpl_vars['gbl_vitals_options'] > 0): ?><tr class="hide"><?php else: ?><tr><?php endif; ?>
                                        <?php if ($this->_tpl_vars['units_of_measurement'] == 1): ?><td class="unfocus graph" id="head_circ_metric"><?php else: ?><td class="graph" id="head_circ_metric"><?php endif; ?><?php echo smarty_function_xlt(array('t' => 'Head Circumference'), $this);?>
</td>
                                <?php if ($this->_tpl_vars['units_of_measurement'] == 1): ?><td class="unfocus"><?php else: ?><td><?php endif; ?><?php echo smarty_function_xlt(array('t' => 'cm'), $this);?>
</td>
                                        <?php if ($this->_tpl_vars['units_of_measurement'] == 1): ?><td class="valuesunfocus"><?php else: ?><td class='currentvalues'><?php endif; ?>
                                        <input type="text" size='5' id='head_circ_input_metric' value="<?php if ($this->_tpl_vars['vitals']->get_head_circ() != 0): ?><?php echo smarty_function_math(array('equation' => "round(number * constant,1)",'number' => $this->_tpl_vars['vitals']->get_head_circ(),'constant' => 2.54,'format' => ((is_array($_tmp="%.2f")) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp))), $this);?>
<?php endif; ?>" onChange="convCmtoIn('head_circ_input');"/>
                                        </td>
                                <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                                        <td class='historicalvalues'><?php if ($this->_tpl_vars['result']['head_circ'] != 0): ?><?php echo smarty_function_math(array('equation' => "number * constant",'number' => $this->_tpl_vars['result']['head_circ'],'constant' => 2.54,'format' => ((is_array($_tmp="%.2f")) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp))), $this);?>
<?php endif; ?></td>
                                <?php endforeach; endif; unset($_from); ?></tr>

                            <?php if ($this->_tpl_vars['units_of_measurement'] == 4 || $this->_tpl_vars['gbl_vitals_options'] > 0): ?><tr class="hide"><?php else: ?><tr><?php endif; ?>
                                    <?php if ($this->_tpl_vars['units_of_measurement'] == 2): ?><td class="unfocus graph" id="waist_circ"><?php else: ?><td class="graph" id="waist_circ"><?php endif; ?><?php echo smarty_function_xlt(array('t' => 'Waist Circumference'), $this);?>
</td>
                                <?php if ($this->_tpl_vars['units_of_measurement'] == 2): ?><td class="unfocus"><?php else: ?><td><?php endif; ?><?php echo smarty_function_xlt(array('t' => 'in'), $this);?>
</td>
                                <?php if ($this->_tpl_vars['units_of_measurement'] == 2): ?><td class="valuesunfocus"><?php else: ?><td class='currentvalues'><?php endif; ?>
                                        <input type="text" size='5' name='waist_circ' id='waist_circ_input' value="<?php if ($this->_tpl_vars['vitals']->get_waist_circ() != 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['vitals']->get_waist_circ())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
<?php endif; ?>" onChange="convIntoCm('waist_circ_input');"/>
                                        </td>
                            <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                                <td class='historicalvalues'><?php if ($this->_tpl_vars['result']['waist_circ'] != 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['result']['waist_circ'])) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
<?php endif; ?></td>
                            <?php endforeach; endif; unset($_from); ?></tr>

                            <?php if ($this->_tpl_vars['units_of_measurement'] == 3 || $this->_tpl_vars['gbl_vitals_options'] > 0): ?><tr class="hide"><?php else: ?><tr><?php endif; ?>
                                <?php if ($this->_tpl_vars['units_of_measurement'] == 1): ?><td class="unfocus graph" id="waist_circ_metric"><?php else: ?><td class="graph" id="waist_circ_metric"><?php endif; ?><?php echo smarty_function_xlt(array('t' => 'Waist Circumference'), $this);?>
</td>
                                <?php if ($this->_tpl_vars['units_of_measurement'] == 1): ?><td class="unfocus"><?php else: ?><td><?php endif; ?><?php echo smarty_function_xlt(array('t' => 'cm'), $this);?>
</td>
                                    <?php if ($this->_tpl_vars['units_of_measurement'] == 1): ?><td class="valuesunfocus"><?php else: ?><td class='currentvalues'><?php endif; ?>
                                    <input type="text" size='5' id='waist_circ_input_metric' value="<?php if ($this->_tpl_vars['vitals']->get_waist_circ() != 0): ?><?php echo smarty_function_math(array('equation' => 'round(number * constant,1)','number' => $this->_tpl_vars['vitals']->get_waist_circ(),'constant' => 2.54,'format' => ((is_array($_tmp='%.2f')) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp))), $this);?>
<?php endif; ?>" onChange="convCmtoIn('waist_circ_input');"/>
                                    </td>
                                    <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                                    <td class='historicalvalues'><?php if ($this->_tpl_vars['result']['waist_circ'] != 0): ?><?php echo smarty_function_math(array('equation' => "number * constant",'number' => $this->_tpl_vars['result']['waist_circ'],'constant' => 2.54,'format' => ((is_array($_tmp="%.2f")) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp))), $this);?>
<?php endif; ?></td>
                                    <?php endforeach; endif; unset($_from); ?></tr>

                                <tr><td class="graph" id="BMI"><?php echo smarty_function_xlt(array('t' => 'BMI'), $this);?>
</td><td><?php echo smarty_function_xlt(array('t' => "kg/m^2"), $this);?>
</td>
                                    <td class='currentvalues'><input type="text" size='5'
                                        name='BMI' id='BMI_input' value="<?php if ($this->_tpl_vars['vitals']->get_BMI() != 0): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['vitals']->get_BMI())) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 5) : substr($_tmp, 0, 5)))) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
<?php endif; ?>"/></td>
                                    <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                                        <td class='historicalvalues'><?php if ($this->_tpl_vars['result']['BMI'] != 0): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['result']['BMI'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 5) : substr($_tmp, 0, 5)))) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
<?php endif; ?></td>
                                    <?php endforeach; endif; unset($_from); ?>
                                </tr>

                                <tr>
                                    <td><?php echo smarty_function_xlt(array('t' => 'BMI Status'), $this);?>
</td><td><?php echo smarty_function_xlt(array('t' => 'Type'), $this);?>
</td>
                                    <td class='currentvalues'><input type="text" size='20'
                                    name="BMI_status" id="BMI_status' value="<?php echo ((is_array($_tmp=$this->_tpl_vars['vitals']->get_BMI_status())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
"/></td>
                                    <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                                    <td  class='historicalvalues'><?php if ($this->_tpl_vars['result']['BMI_status']): ?><?php echo smarty_function_xlt(array('t' => $this->_tpl_vars['result']['BMI_status']), $this);?>
<?php endif; ?></td>
                                    <?php endforeach; endif; unset($_from); ?>
                                </tr>

                                <tr>
                                    <td><?php echo smarty_function_xlt(array('t' => 'Other Notes'), $this);?>
</td>
                                     <td>&nbsp;</td>
                                    <td class='currentvalues'><input type="text" size='20'
                                      name="note" id='note' value="<?php echo ((is_array($_tmp=$this->_tpl_vars['vitals']->get_note())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
" /></td>
                                      <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                                        <td class='historicalvalues'><?php echo ((is_array($_tmp=$this->_tpl_vars['result']['note'])) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
</td>
                                      <?php endforeach; endif; unset($_from); ?>
                                </tr>
                                <tr><td>&nbsp;</td></tr>

                                <tr>
                                    <td colspan='5' align="center" style='text-align:center'>
                                        <?php if ($this->_tpl_vars['patient_age'] <= 20 || ( preg_match ( '/month/' , $this->_tpl_vars['patient_age'] ) )): ?>
                                        <!-- only show growth-chart button for patients < 20 years old -->
                                        <!-- <input type="button" id="growthchart" value="<?php echo smarty_function_xla(array('t' => "Growth-Chart"), $this);?>
" style='margin-left: 20px;'> -->
                                        <input type="button" id="pdfchart" value='<?php echo smarty_function_xla(array('t' => "Growth-Chart"), $this);?>
 (<?php echo smarty_function_xla(array('t' => 'PDF'), $this);?>
)' style=''>
                                        <input type="button" id="htmlchart" value='<?php echo smarty_function_xla(array('t' => "Growth-Chart"), $this);?>
 (<?php echo smarty_function_xla(array('t' => 'HTML'), $this);?>
)' style=''>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            </tr>
                        </tbody>
                    </table>

                <div class="form-group clearfix">
                    <div class="text-left position-override">
                            <div class="btn-group" role="group">
                                <button type="submit" class="btn btn-default btn-save editonly" name="Submit" value=''><?php echo smarty_function_xlt(array('t' => 'Save'), $this);?>
</button>
                                <button type="button" class="btn btn-link btn-cancel btn-separate-left editonly" id="cancel" value=''><?php echo smarty_function_xlt(array('t' => 'Cancel'), $this);?>
</button>
                            </div>
                    </div>
                </div>
            </div>
            <br><br>
            <input type="hidden" name="id" id='id' value="<?php echo ((is_array($_tmp=$this->_tpl_vars['vitals']->get_id())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
" />
            <input type="hidden" name="activity" id='activity' value="<?php echo ((is_array($_tmp=$this->_tpl_vars['vitals']->get_activity())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
">
            <input type="hidden" name="pid" id='pid' value="<?php echo ((is_array($_tmp=$this->_tpl_vars['vitals']->get_pid())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
">
            <input type="hidden" name="process" id='process' value="true">
            </form>
        </div>
    </div>
</body>

<script language="javascript">
var formdate = <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['vitals']->get_date())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d")))) ? $this->_run_mod_handler('js_escape', true, $_tmp) : js_escape($_tmp)); ?>
;
// vitals array elements are in the format:
//   date-height-weight-head_circumference
var vitals = new Array();
// get values from the current form elements
vitals[0] = formdate + '-' + <?php echo ((is_array($_tmp=$this->_tpl_vars['vitals']->get_height())) ? $this->_run_mod_handler('js_escape', true, $_tmp) : js_escape($_tmp)); ?>
 + '-' + <?php echo ((is_array($_tmp=$this->_tpl_vars['vitals']->get_weight())) ? $this->_run_mod_handler('js_escape', true, $_tmp) : js_escape($_tmp)); ?>
 + '-' + <?php echo ((is_array($_tmp=$this->_tpl_vars['vitals']->get_head_circ())) ? $this->_run_mod_handler('js_escape', true, $_tmp) : js_escape($_tmp)); ?>
;
// historic values
<?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
vitals[vitals.length] = <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['result']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d")))) ? $this->_run_mod_handler('js_escape', true, $_tmp) : js_escape($_tmp)); ?>
 + '-' + <?php echo ((is_array($_tmp=$this->_tpl_vars['result']['height'])) ? $this->_run_mod_handler('js_escape', true, $_tmp) : js_escape($_tmp)); ?>
 + '-' + <?php echo ((is_array($_tmp=$this->_tpl_vars['result']['weight'])) ? $this->_run_mod_handler('js_escape', true, $_tmp) : js_escape($_tmp)); ?>
 + '-' + <?php echo ((is_array($_tmp=$this->_tpl_vars['result']['head_circ'])) ? $this->_run_mod_handler('js_escape', true, $_tmp) : js_escape($_tmp)); ?>
;
<?php endforeach; endif; unset($_from); ?>
var patientAge= <?php echo ((is_array($_tmp=$this->_tpl_vars['patient_age'])) ? $this->_run_mod_handler('js_escape', true, $_tmp) : js_escape($_tmp)); ?>
;
var patient_dob= <?php echo ((is_array($_tmp=$this->_tpl_vars['patient_dob'])) ? $this->_run_mod_handler('js_escape', true, $_tmp) : js_escape($_tmp)); ?>
;
var webroot = <?php echo ((is_array($_tmp=$this->_tpl_vars['FORM_ACTION'])) ? $this->_run_mod_handler('js_escape', true, $_tmp) : js_escape($_tmp)); ?>
;
var pid = <?php echo ((is_array($_tmp=$this->_tpl_vars['vitals']->get_pid())) ? $this->_run_mod_handler('js_escape', true, $_tmp) : js_escape($_tmp)); ?>
;
var cancellink = <?php echo ((is_array($_tmp=$this->_tpl_vars['DONT_SAVE_LINK'])) ? $this->_run_mod_handler('js_escape', true, $_tmp) : js_escape($_tmp)); ?>
;
var birth_xl= <?php echo smarty_function_xlj(array('t' => "Birth-24 months"), $this);?>
;
var older_xl= <?php echo smarty_function_xlj(array('t' => "2-20 years"), $this);?>
;
<?php echo '
function addGCSelector()
{
    var options=new Array();
    var birth={\'display\':birth_xl,\'param\':\'birth\'};
    var age2={\'display\':older_xl,\'param\':\'2-20\'}
    if((patientAge.toString().indexOf(\'24 month\')>=0) || (patientAge.toString().indexOf(\'month\')==-1))
        {
            var dob_data=patient_dob.split("-");
            var dob_date=new Date(dob_data[0],parseInt(dob_data[1])-1,dob_data[2]);
            options[0]=age2;
            for(var idx=0;idx<vitals.length;idx++)
                {
                    var str_data_date=vitals[idx].split("-")[0];
                    var data_date=new Date(str_data_date.substr(0,4),parseInt(str_data_date.substr(4,2))-1,str_data_date.substr(6,2));
                    if(((data_date-dob_date)/86400000)<=2*365)
                        {
                            idx=vitals.length;
                            options[1]=birth
                        }
                }
        }
        else
        {
            options[0]=birth;
        }
        var chart_buttons_cell=$("#pdfchart").parent("td");
        var select=$("<select id=\'chart_type\'></select>");
        chart_buttons_cell.prepend(select);
        for(idx=0;idx<options.length;idx++)
            {
                var option=$("<option value=\'"+options[idx].param+"\'>"+options[idx].display+"</option>");
                select.append(option);
            }
        select.find("option:first").attr("selected","true");
        if(options.length<2)
            {
                select.css("display","none");
            }
}

$(function(){
    $("#growthchart").on("click", function() { ShowGrowthchart(); });
    $("#pdfchart").on("click", function() { ShowGrowthchart(1); });
    $("#htmlchart").on("click", function() { ShowGrowthchart(2); });
    $("#cancel").on("click", function() { location.href=cancellink; });
    addGCSelector();

    $(\'.datetimepicker\').datetimepicker({
        '; ?>
<?php  $datetimepicker_timepicker = true;  ?>
        <?php  $datetimepicker_showseconds = false;  ?>
        <?php  $datetimepicker_formatInput = false;  ?>
        <?php  require($GLOBALS['srcdir'] . '/js/xl/jquery-datetimepicker-2-5-4.js.php');  ?>
        <?php  // can add any additional javascript settings to datetimepicker here; need to prepend first setting with a comma  ?><?php echo '
    });

});

function ShowGrowthchart(doPDF) {
    // get values from the current form elements
    '; ?>

    vitals[0] = formdate+'-'+$("#height_input").val()+'-'+$("#weight_input").val()+'-'+$("#head_circ_input").val();
    <?php echo '
    // build the data string
    var datastring = "";
    for(var i=0; i<vitals.length; i++) {
        datastring += vitals[i]+"~";
    }
    newURL = webroot + \'/interface/forms/vitals/growthchart/chart.php?pid=\' + encodeURIComponent(pid) + \'&data=\' + encodeURIComponent(datastring);
    if (doPDF == 1) newURL += "&pdf=1";
    if (doPDF == 2) newURL += "&html=1";
    newURL += "&chart_type=" + encodeURIComponent($("#chart_type").val()) + "&csrf_token_form=" + '; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['CSRF_TOKEN_FORM'])) ? $this->_run_mod_handler('js_url', true, $_tmp) : js_url($_tmp)); ?>
<?php echo ';
    // do the new window stuff
    top.restoreSession();
    window.open(newURL, \'_blank\', "menubar=1,toolbar=1,scrollbars=1,resizable=1,width=600,height=450");
}

function convLbtoKg(name) {
    var lb = $("#"+name).val();
    var hash_loc=lb.indexOf("#");
    if(hash_loc>=0)
    {
        var pounds=lb.substr(0,hash_loc);
        var ounces=lb.substr(hash_loc+1);
        var num=parseInt(pounds)+parseInt(ounces)/16;
        lb=num;
        $("#"+name).val(lb);
    }
    if (lb == "0") {
        $("#"+name+"_metric").val("0");
    }
    else if (lb == parseFloat(lb)) {
    kg = lb*0.45359237;
        kg = kg.toFixed(2);
        $("#"+name+"_metric").val(kg);
    }
    else {
        $("#"+name+"_metric").val("");
    }

    if (name == "weight_input") {
        calculateBMI();
    }
}

function convKgtoLb(name) {
    var kg = $("#"+name+"_metric").val();

    if (kg == "0") {
        $("#"+name).val("0");
    }
    else if (kg == parseFloat(kg)) {
        lb = kg/0.45359237;
        lb = lb.toFixed(2);
        $("#"+name).val(lb);
    }
    else {
        $("#"+name).val("");
    }

    if (name == "weight_input") {
        calculateBMI();
    }
}

function convIntoCm(name) {
    var inch = $("#"+name).val();

    if (inch == "0") {
        $("#"+name+"_metric").val("0");
    }
    else if (inch == parseFloat(inch)) {
        cm = inch*2.54;
        cm = cm.toFixed(2);
        $("#"+name+"_metric").val(cm);
    }
    else {
        $("#"+name+"_metric").val("");
    }

    if (name == "height_input") {
        calculateBMI();
    }
}

function convCmtoIn(name) {
    var cm = $("#"+name+"_metric").val();

    if (cm == "0") {
        $("#"+name).val("0");
    }
    else if (cm == parseFloat(cm)) {
        inch = cm/2.54;
        inch = inch.toFixed(2);
        $("#"+name).val(inch);
    }
    else {
        $("#"+name).val("");
    }

    if (name == "height_input") {
        calculateBMI();
    }
}

function convFtoC(name) {
    var Fdeg = $("#"+name).val();
    if (Fdeg == "0") {
        $("#"+name+"_metric").val("0");
    }
    else if (Fdeg == parseFloat(Fdeg)) {
        Cdeg = (Fdeg-32)*0.5556;
        Cdeg = Cdeg.toFixed(2);
        $("#"+name+"_metric").val(Cdeg);
    }
    else {
        $("#"+name+"_metric").val("");
    }
}

function convCtoF(name) {
    var Cdeg = $("#"+name+"_metric").val();
    if (Cdeg == "0") {
        $("#"+name).val("0");
    }
    else if (Cdeg == parseFloat(Cdeg)) {
        Fdeg = (Cdeg/0.5556)+32;
        Fdeg = Fdeg.toFixed(2);
        $("#"+name).val(Fdeg);
    }
    else {
        $("#"+name).val("");
    }
}

function calculateBMI() {
    var bmi = 0;
    var height = $("#height_input").val();
    var weight = $("#weight_input").val();
    if(height == 0 || weight == 0) {
        $("#BMI").val("");
    }
    else if((height == parseFloat(height)) && (weight == parseFloat(weight))) {
        bmi = weight/height/height*703;
        bmi = bmi.toFixed(1);
        $("#BMI_input").val(bmi);
    }
    else {
        $("#BMI_input").val("");
    }
}

</script>
'; ?>


</html>