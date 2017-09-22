
function myFunction1() {
   document.getElementById('option2').style.font = "0.5rem arial, sans-serif";
   document.getElementById('loginForm').style.display = "block";
   document.getElementById('option1').style.font = "2rem Humanst521 BT";
};
function myFunction2() {
   document.getElementById('option1').style.font = "0.5rem arial, sans-serif";
   document.getElementById('loginForm').style.display = "block";
   document.getElementById('option2').style.font = "2rem Humanst521 BT";
};

function showdrop() {
  var v1 = document.getElementById('menu1');
  if (v1.style.display == 'inline-block') {
    v1.style.display = 'none';
  }else{
    v1.style.display = 'inline-block';
  }
    
  }

$('#datetimepicker2').datetimepicker({
  timepicker:false,
  format:'d/m/Y',
  formatDate:'Y/m/d'
});
$('#calendar').click(function(){
  $('#datetimepicker2').datetimepicker('show');
});

$('#datetimepicker1').datetimepicker({
  datepicker:false,
  format:'H:i',
  step:5
});
$('#date1').click(function(){
  $('#datetimepicker1').datetimepicker('show');
});

$('#datetimepicker12').datetimepicker({
  datepicker:false,
  format:'H:i',
  step:5
});
$('#date2').click(function(){
  $('#datetimepicker12').datetimepicker('show');
});


var i = 1;
$(".dropdownWrapper").hover(function(){
    $(".dropcontent").css("display", "block");
});
$(".dropcontent").mouseleave(function(){
    $(".dropcontent").css("display", "none");
    });


$('#datetimepickera').datetimepicker({
  timepicker:false,
  format:'d/m/Y',
  formatDate:'Y/m/d'
});
$('#calendara').click(function(){
  $('#datetimepickera').datetimepicker('show');
});

$('#datetimepickerb').datetimepicker({
  datepicker:false,
  format:'H:i',
  step:5
});
$('#dateb').click(function(){
  $('#datetimepickerb').datetimepicker('show');
});

$('#datetimepicker1a').datetimepicker({
  datepicker:false,
  format:'H:i',
  step:5
});
$('#date2a').click(function(){
  $('#datetimepicker1a').datetimepicker('show');
});

    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();