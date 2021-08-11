$(document).ready(function(){
  $('select').on('change',function(){
    id_color = $(this).find('option:selected').val();
    $('#color-1').val(id_color);
    console.log('select');
  })
  console.log('carge');
})