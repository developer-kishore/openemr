<?php /* Smarty version 2.6.31, created on 2020-10-07 18:02:21
         compiled from default/user/ajax_search.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'default/user/ajax_search.html', 16, false),array('function', 'xlt', 'default/user/ajax_search.html', 19, false),array('function', 'xla', 'default/user/ajax_search.html', 56, false),array('modifier', 'attr', 'default/user/ajax_search.html', 45, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['TPL_NAME'])."/views/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<link rel="stylesheet" href="<?php echo $this->_tpl_vars['TPL_STYLE_PATH']; ?>
/ajax_search.css" type="text/css">
<link rel="stylesheet" href="<?php  echo $GLOBALS['assets_static_relative']  ?>/jquery-datetimepicker/build/jquery.datetimepicker.min.css" type="text/css">

<!--<script type="text/javascript" src="<?php  echo $GLOBALS['assets_static_relative']  ?>/jquery/dist/jquery.min.js"></script>-->
<script type="text/javascript" src="<?php  echo $GLOBALS['assets_static_relative']  ?>/jquery-datetimepicker/build/jquery.datetimepicker.full.min.js"></script>

<!-- js for the popup window -->
<!--<script type="text/javascript" src="<?php  echo $GLOBALS['webroot']  ?>/library/dialog.js?v=<?php  echo $v_js_includes;  ?>"></script>-->

<!-- main navigation -->
<?php echo smarty_function_config_load(array('file' => "lang.".($this->_tpl_vars['USER_LANG'])), $this);?>


<!-- search parameters -->
<h2><?php echo smarty_function_xlt(array('t' => 'Searching for appointments'), $this);?>
</h2>
&nbsp;
<?php 
    echo "<a href='".$GLOBALS['webroot']."/interface/main/main_info.php' class='menu' onclick='top.restoreSession()'>";
 ?>
<?php echo smarty_function_xlt(array('t' => 'Return to calendar'), $this);?>
</a>
<div id="calsearch_params">
<form name="theform" id="theform" action="<?php echo $this->_tpl_vars['FORM_ACTION']; ?>
" method="POST"> <!-- onsubmit="return top.restoreSession()"> -->
<?php echo smarty_function_xlt(array('t' => 'Keywords'), $this);?>
: <input type="text" name="pc_keywords" id="pc_keywords" value="<?php echo attr($_POST['pc_keywords']); ?>" />
<select name="pc_keywords_andor">
    <option value="AND"><?php echo smarty_function_xlt(array('t' => 'AND'), $this);?>
</option>
    <option value="OR"><?php echo smarty_function_xlt(array('t' => 'OR'), $this);?>
</option>
</select>
<?php echo smarty_function_xlt(array('t' => 'IN'), $this);?>
:
<select name="pc_category">
    <option value=""><?php echo smarty_function_xlt(array('t' => 'Any Category'), $this);?>
</option>
    <?php echo $this->_tpl_vars['CATEGORY_OPTIONS']; ?>

</select>
<?php if ($this->_tpl_vars['USE_TOPICS']): ?>
<select name="pc_topic">
    <option value=""><?php echo $this->_config[0]['vars']['_PC_SEARCH_ANY_TOPIC']; ?>
</option>
    <?php echo $this->_tpl_vars['TOPIC_OPTIONS']; ?>

</select>
<?php endif; ?>
<br>
<?php echo smarty_function_xlt(array('t' => 'between'), $this);?>

<input type="text" class='datepicker' name="start" id="start" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['DATE_START'])) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
" size="10"/>
<input type="text" class='datepicker' name="end" id="end" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['DATE_END'])) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
" size="10"/>
<br>
<?php echo smarty_function_xlt(array('t' => 'for'), $this);?>

<select name="provider_id" id="provider_id">
<?php echo $this->_tpl_vars['PROVIDER_OPTIONS']; ?>

</select>
<?php echo smarty_function_xlt(array('t' => 'at'), $this);?>

<select name="pc_facility" id="pc_facility">
<?php echo $this->_tpl_vars['FACILITY_OPTIONS']; ?>

</select>
<input type="submit" name="submit" id="submit" value="<?php echo smarty_function_xla(array('t' => 'Submit'), $this);?>
" />
<div id="calsearch_status"><img src='<?php  echo $GLOBALS['webroot']  ?>/interface/pic/ajax-loader.gif'> <?php echo smarty_function_xlt(array('t' => 'Searching...'), $this);?>
</div>
</form>
</div>
<!-- end of search parameters -->

<?php if ($this->_tpl_vars['SEARCH_PERFORMED']): ?>
<div id="calsearch_results">

<div id="calsearch_results_header" class="head">
<table>
<tr>
<th class="calsearch_datetime"><?php echo smarty_function_xlt(array('t' => 'Date'), $this);?>
-<?php echo smarty_function_xlt(array('t' => 'Time'), $this);?>
</th>
<th class="calsearch_provider"><?php echo smarty_function_xlt(array('t' => 'Provider'), $this);?>
</th>
<th class="calsearch_category"><?php echo smarty_function_xlt(array('t' => 'Category'), $this);?>
</th>
<th class="calsearch_patient"><?php echo smarty_function_xlt(array('t' => 'Patient'), $this);?>
</th>
</tr>
</table>
</div>

<div id="calsearch_results_data">
<table>
<?php 
/* I've given up on playing nice with the Smarty tag crap, it's pointlessly used
 * in the original search. I mean, there's no clean separation between the code
 * and HTML so we may as well just go full-bore PHP here -- JRM March 2008
 */

$eventCount = 0;
foreach ($this->get_template_vars('A_EVENTS') as $eDate => $date_events) {
    $eventdate = substr($eDate, 0, 4) . substr($eDate, 5, 2) . substr($eDate, 8, 2);

    foreach ($date_events as $event) {
        // pick up some demographic info about the provider
        $provquery = "SELECT * FROM users WHERE id=?";
        $res = sqlStatement($provquery, [$event['aid']]);
        $provinfo = sqlFetchArray($res);

        $eData = $event['eid']."~".$eventdate;
        $trTitle = xl('Click to edit this event');
        echo "<tr class='calsearch_event' id='" . attr($eData) . "' title='" . attr($trTitle) . "'>";

        // date and time
        $eDatetime = strtotime($eDate." ".$event['startTime']);
        echo "<td class='calsearch_datetime'>";
        echo text(date("Y-m-d h:i a", $eDatetime));
        echo "</td>";

        // provider
        echo "<td class='calsearch_provider'>" . text($event['provider_name']);
        $imgtitle = $provinfo['fname'] . " " . xl('contact info') . ":\n";
        $imgtitle .= $provinfo['phonew1']."\n".$provinfo['street']."\n".$provinfo['city']." ".$provinfo['state'];
        echo " <img class'provinfo' src='". $GLOBALS['images_static_relative'] . "/info.png' title=\"" . attr($imgtitle) . "\" />";
        echo "</td>";

        // category
        echo "<td class='calsearch_category'>";
        echo text($event['catname']);
        echo " </td>";

        // patient
        echo "<td class='calsearch_patient'>";
        echo text($event['patient_name']);
        echo "</td>";
/*
        echo "<td>";
        echo text(print_r($event, true));
        echo "</td>";
*/
        echo "</tr>\n";

        $eventCount++;
    }
}


/* the A_EVENTS array holds an array of dates, which in turn hold the array of events
 * so it will always be non-zero, so we need to count the events as they are
 * displayed and if the count is zero, then we have no search results
 */
if ($eventCount == 0) {
    echo "<tr><td colspan='4' style='text-align: center'>" . xlt('No Results') . "</td></tr>";
}

 ?>
</table>
</div>  <!-- end results-data DIV -->

</div>  <!-- end outer results DIV -->

<?php endif; ?>  
<script language="javascript">
// jQuery stuff to make the page a little easier to use

$(document).ready(function(){
    $("#pc_keywords").focus();
    $("#theform").submit(function() { SubmitForm(this); });
    $(".calsearch_event").mouseover(function() { $(this).toggleClass("highlight"); });
    $(".calsearch_event").mouseout(function() { $(this).toggleClass("highlight"); });
    $(".calsearch_event").click(function() { EditEvent(this); });

    $('.datepicker').datetimepicker({
        <?php  $datetimepicker_timepicker = false;  ?>
        <?php  $datetimepicker_showseconds = false;  ?>
        <?php  $datetimepicker_formatInput = false;  ?>
        <?php  require($GLOBALS['srcdir'] . '/js/xl/jquery-datetimepicker-2-5-4.js.php');  ?>
        <?php  // can add any additional javascript settings to datetimepicker here; need to prepend first setting with a comma  ?>
        ,format: 'm/d/Y'
    });
});

// open a pop up to edit the event
// parts[] ==>  0=eventID
var EditEvent = function (eObj) {
    objID = eObj.id;
    var parts = objID.split("~");
    dlgopen('add_edit_event.php?date=' + encodeURIComponent(parts[1]) + '&eid=' + encodeURIComponent(parts[0]), '_blank', 775, 500);
}

// show the 'searching...' status and submit the form
var SubmitForm = function(eObj) {
    $("submit").css("disabled", "true");
    $("#calsearch_status").css("visibility", "visible");
    return top.restoreSession();
}

function goPid(pid) {
    top.restoreSession();
    <?php 
           echo "top.RTop.location = '../../patient_file/summary/demographics.php' " .
           			 "+ '?set_pid=' + encodeURIComponent(pid);\n";
     ?>
 }
</script>
