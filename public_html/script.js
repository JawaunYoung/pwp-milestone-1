$('#form').submit(function (e) {
    e.preventDefault();
});

$(document).ready(
    $("#contact").validate({
        debug:true,
        errorErrorClass: "alert alert-danger",
        errorLabelContainer: "output-area",
        errorElement: "div",
        rules: {
            name: {
                required: true
            },
            email: {
                email: true,
                required: true,
            },
                message: {
                    requried: true,
                    maxlength: 2000
                }
            },
        message: {
            name: {
                required: "Name is a required field",
            },
            email: {
                email: "Please provide a valid address, Thank You!",
                required: "Email is a requried field"
            },
            message: {
                requried: true,
                maxlength: 2000
            }
        }

    })
)
