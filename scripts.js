$(document).ready(function() {
    // Form validation
    $("#hireForm").validate({
        rules: {
            employeeName: "required",
            startDate: "required",
            email: {
                required: true,
                email: true
            },
            personalEmail: {
                email: true
            },
            cellPhone: {
                digits: true,
                minlength: 10,
                maxlength: 15
            },
            emergencyMobile: {
                digits: true,
                minlength: 10,
                maxlength: 15
            },
            pin: {
                digits: true,
                minlength: 4,
                maxlength: 4
            }
        },
        messages: {
            employeeName: "Please enter the employee's name",
            startDate: "Please enter the start date",
            email: "Please enter a valid email address",
            personalEmail: "Please enter a valid personal email address",
            cellPhone: "Please enter a valid cell phone number",
            emergencyMobile: "Please enter a valid emergency contact mobile number",
            pin: "Please enter a 4 digit PIN number"
        },
        errorElement: "em",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.parents(".form-group").addClass("has-feedback");

            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.parent("label"));
            } else {
                error.insertAfter(element);
            }

            if (!element.next("span")[0]) {
                $("<span class='glyphicon glyphicon-remove form-control-feedback'></span>").insertAfter(element);
            }
        },
        success: function (label, element) {
            if (!$(element).next("span")[0]) {
                $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>").insertAfter($(element));
            }
        },
        highlight: function (element, errorClass, validClass) {
            $(element).parents(".form-group").addClass("has-error").removeClass("has-success");
            $(element).next("span").addClass("glyphicon-remove").removeClass("glyphicon-ok");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents(".form-group").addClass("has-success").removeClass("has-error");
            $(element).next("span").addClass("glyphicon-ok").removeClass("glyphicon-remove");
        },
        submitHandler: function(form) {
            // AJAX form submission
            $.ajax({
                url: 'submit.php',
                type: 'POST',
                data: $(form).serialize(),
                success: function(response) {
                    alert('Form submitted successfully!');
                    // You can add more actions here, like redirecting to another page
                },
                error: function(xhr, status, error) {
                    alert('An error occurred while submitting the form: ' + error);
                }
            });
        }
    });
});
