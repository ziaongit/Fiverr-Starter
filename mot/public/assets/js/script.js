$(document).ready(function ($) {

    $("#survey-form").validate({
        rules: {
            "*": "required",


        },
        messages: {
            "*": "This field is required",

        },
        errorPlacement: function (error, element) {
            if (element.is(":radio")) {
                error.appendTo(element.parents('.form-group'));
            } else { // This is the default behavior 
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            const scriptURL = 'https://script.google.com/macros/s/AKfycbxEmr3RMrOCg_hCrjOTKnOsrkz7wB5T7WrGhZ-2oe18krjI8fVG/exec'
            var selectedOrders = $("#order option:selected").map(function () { return this.text }).get().join(', ');
            document.getElementById("chose_order").value = selectedOrders;
            ShowLoading();
            fetch(scriptURL, {
                method: 'POST',
                body: new FormData(form)
            })
                .then(response => {
                    Swal.fire(
                        'Form submitted successfully!',
                        'Thank You!',
                        'success'
                    )
                    form.reset();
                    hideLoading();
                    console.log('Success!', response);
                })
                .catch(error => {
                    Swal.fire(
                        'Something went wrong!',
                        'Plesase try again!',
                        'error'
                    )
                    console.error('Error!', error.message);
                })
        }

    });
});

jQuery('option').mousedown(function (e) {
    e.preventDefault();
    jQuery(this).toggleClass('selected');

    jQuery(this).prop('selected', !jQuery(this).prop('selected'));
    return false;
});

function ShowLoading(e) {
    var div = document.createElement('div');
    var img = document.createElement('img');
    img.src = 'assets/images/loading.gif';
    div.innerHTML = "Sending data........<br />";
    div.style.cssText = 'position: fixed; top: 0; z-index: 5000; width: 100%; height: 100%; text-align: center; background: #ffffff';
    div.className = 'loading'
    div.appendChild(img);
    document.body.appendChild(div);
    return true;
    // These 2 lines cancel form submission, so only use if needed.
    //window.event.cancelBubble = true;
    //e.stopPropagation();
}

function hideLoading() {
    $(".loading").hide();
}
