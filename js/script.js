$('#certification').change(function(){
    var opt = $(this).val();
    $('.office').collapse('hide');
    $('#' + opt).collapse('show');
});