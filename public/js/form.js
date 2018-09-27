function validateForm(){
    var x = document.forms["myForm"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}


function addPhoneInput(){
  $('<p>'+
    '<input placeholder="Telefone" name="phone[]" type="text" class="validate col l8" maxlength="11" required>'+
    '<a class="btn btn-danger" href="javascript:void(0)" id="remInput">'+
         'Remover Telefone'+
    '</a>'+
    '</p>').appendTo($('#more-phones'));
}

$(document).on('click', '#remInput', function () {
    $(this).parents('p').remove();
    return false;
});
