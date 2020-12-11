$(document).ready(function() {
  $('.addcart').click(function (e) {
    e.preventDefault();
    var shoeId = $(this).attr('val');
    $.get('addcart?shoeId='+shoeId, function (data) {
        $('#addcart').modal('show')
            .find('#addcartContent')
            .html(data);
    });
});


});
