(function($) {
$('document').ready(function(){
  $("#messages").on('click','#toast-container',function(){
    $("#messages").html(' ');
    console.log('test');
  })
})
});