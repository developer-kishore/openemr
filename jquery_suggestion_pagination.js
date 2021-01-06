<script>
var page;
var currentpage;
var totalpage;
var items_perpage;
function page_items(){
   page =1;
   currentpage = 1;
   totalpage = 1;
   items_perpage = 5;
}

  function pageleft() {
    if(currentpage > 1){
      currentpage = (currentpage-1);
       itemperpage();
    }
  }
  function pageright() {
    if(currentpage >= 1){
      currentpage = (currentpage+1);
       itemperpage();
    }
  }

function itemperpage(){
  // items_perpage = $(".ls_items_per_page").val();
  items_perpage = $(currentclass).next().find(".ls_items_per_page").val();
    $(currentclass).trigger("keyup");
}
  $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
    
});
$(document).on("keyup",".display-autocomplete,.display-fee-autocomplete", function(){
  var current_element = $(this);
  var html_d ='';
  current_element.next().html(html_d);
  //console.log($(this));
  if($(this).hasClass('display-autocomplete')){
    code_types = 'fetch';
    currentclass=$(this);
  }else{
    code_types = 'fee-code';
    currentclass=$(this);
  }
  // $.ajax({
  //               url: "<?php echo $webroot."/library/ajax/fee-code.php";?>",
  //               type:"post",
  //               dataType: "json",
  //               data: {
  //                 query: $(this).val(),
  //                 msp : $('#msp_bill').val()
  //               },
  //               success: function( data ) {
  //                 //console.log(data);
  //                 //$(".display-autocomplete").next().html(data);
  //                 var ff = ($.map(data, function (value, key) {
  //                     return {
  //                         label: value,
  //                         value: key
  //                     };
  //                 }));
  
  if(items_perpage != 'null'){
  $.ajax({
                url: "<?php echo $webroot."/library/ajax/";?>"+code_types+".php",
                type:"post",
                dataType: "json",
                data: {
                  query: $(this).val(),
                  totalcount:true

                },
                success: function( data ) {
                  totalpage = Math.ceil(parseInt(data)/parseInt(items_perpage));

                }
          });
         
            data_params = {query: $(this).val(),
                  
                  item_per_page:items_perpage,
                  start:(currentpage==1) ? 0 : ((currentpage - 1)*items_perpage),
                  number:items_perpage,};

          } else {
            totalpage = 1;
            data_params = { query: $(this).val()};
          }           
                  $.ajax({
                url: "<?php echo $webroot."/library/ajax/";?>"+code_types+".php",
                type:"post",
                dataType: "json",
                data: data_params,
                success: function( data ) {
                 
                 var ff = ($.map(data, function (value, key) {
                      return {
                          label: value,
                          value: key
                      };
                  }));
                
               
           
                  
                  
                  html_d += '<div  class="ls_result_main"><table><tbody>';
                  ff.forEach(element => html_d +=  '<tr><td class="select_value"  style="text-align:left" data-value="'+element.label+'">'+element.label+'</td></tr>');
                  html_d += '</tbody></table></div><div  class="ls_result_footer"><div class="col page_limit ls_foot"><select name="ls_items_per_page"  class="ls_items_per_page ls_foot" onchange="itemperpage()"><option class="ls_foot" value="5" '+((items_perpage=="5")?"selected":"")+'>5</option><option class="ls_foot" value="10" '+((items_perpage=="10")?"selected":"")+'>10</option><option class="ls_foot" value="15" '+((items_perpage=="15")?"selected":"")+'>15</option><option class="ls_foot" value="null" '+((items_perpage=="null")?"selected":"")+'>All</option></select></div><div class="col ls_foot navigation" '+((currentpage == 1) ? '' : 'onclick="pageleft()"')+' ><i class="fa fa-chevron-left arrow ls_previous_page ls_foot"></i></div><div class="col ls_foot navigation pagination"><label  class="ls_current_page_lbl ls_foot">'+((currentpage == 'null') ? '1' : currentpage)+'</label> / <label  class="ls_last_page_lbl ls_foot">'+totalpage+'</label></div><div  class="col ls_foot navigation" '+((currentpage == totalpage) ? '' : 'onclick="pageright()"')+'><i class="fa fa-chevron-right arrow ls_next_page ls_foot"></i></div></div>';
                  //console.log(html_d);
                  //console.log($(this));
               
                 
                  current_element.next().html(html_d);
                }
              });
            
  if($(this).val() != '') {
      $(this).next().show();
  } else {
      $(this).next().hide();
      page_items();
  }

    });
    
$(document).on('click','.select_value',function(){
  //console.log($(this).parent().parent().parent().parent());
 $(this).parents(".mainrow,.coderow").find(".display-autocomplete,.display-fee-autocomplete").val($(this).text());
 var code = $(this).text();
 code = code.split("-");
 //console.log(code[0]);
 $(this).parents(".mainrow,.coderow").find(".hicd,.hfee").val(code[0]);
  $(".ls_result_div").hide();
  page_items();
});
$(document).on('click','html',function(e){
  if( !$(e.target).hasClass("ls_foot")) {
 //$(this).parents(".mainrow, .coderow").find(".display-autocomplete,.display-fee-autocomplete").val($(this).text());
  $(".ls_result_div").hide();
  page_items();
  }
});

// $(document).click(function(e) {


//   $("#ls_items_per_page, #ls_result_main,#ls_result_footer+").hide();
// }
// });

// $(".display-autocomplete,.display-fee-autocomplete").blur(function(){
//   $(this).next().hide();
//       });
</script>
