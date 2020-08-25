$(document)
.on("submit", "form.js-register", function(event) {
    event.preventDefault();

    var _form = $(this);
    var _error = $(".js-error", _form);
    var dataObj = {
        email: $("input[type='email']", _form).val(),
        password: $("input[type='password']", _form).val()
    }

    if(dataObj.email.length < 6) {
        _error
            .text("Please enter a valid email address")
            .show();
        return false;
    } else if (dataObj.password.length < 8){
        _error
            .text("Please enter a pass phrase that is at least 11 characters long.")
            .show();
        return false;
    }

    // Assuming the code gets this far, we can start the ajax process
    _error.hide();
    $.ajax({
        type: 'POST',
        url: '/ajax/register.php',
        dataObj: dataObjObj,
        dataObjType: 'json',
        async: true,
    })
        .done(function ajaxDone(dataObj) {
            // Whatever dataObj is
            console.log(dataObj);
            if(dataObj.redirect !== undefined) {
                // window.location = dataObj.redirect;
            }

            alert(dataObj.name);
        })
        .fail(function ajaxFailed(e) {
            // This failed
            console.log(e);
        })
        .always(function ajaxAlwaysDoThis(dataObj) {
            // Always do
            console.log('Always');
        })

    return false;
})
