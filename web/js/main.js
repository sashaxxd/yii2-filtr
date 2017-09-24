function resultSearch(res){
    $('#wb_LayoutGrid11').empty().append(res);

}



$('#wb_content').change('.checkbox', function(){
    // $('form').submit();
    var msg   = $('#w0').serialize();

    $.ajax({

        data: msg,
        url: '/products/index',
        type: 'get',
  
        success: function(res){
            if(!res) alert('Ошибка!');
            resultSearch(res);
        },
      
        error: function(){
            alert('Error!');
        }
    });

});









