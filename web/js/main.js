function resultSearch(res){
    $('#wb_content').html(res);

}



$('#wb_content').change('.checkbox', function(){
    // $('form').submit();
    var msg   = $('#w1').serialize();
    $.ajax({
        url: '/products/index',
        data: msg,
        type: 'GET',
        // success: function(res){
        //     console.log(res);
        // },
        // error: function(){
        //     alert('Error!');
        // }
        success: function(res){
            if(!res) alert('Ошибка!');
            resultSearch(res);
        },
        error: function(){
            alert('Error!');
        }
    });
});



