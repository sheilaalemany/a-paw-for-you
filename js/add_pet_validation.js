  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            pname: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please enter a pet name'
                    }
                }
            },       
            dog: {
                validators: {
                    notEmpty: {
                        message: 'Please select an option'
                    }
                }
            },
            age: {
                validators: {
                    notEmpty: {
                        message: 'Please enter the pet age'
                    }
                }
            }, 
            breed: {
                validators: {
                    notEmpty: {
                        message: 'Please select an option'
                    }
                }
            },
            color: {
                validators: {
                    notEmpty: {
                        message: 'Please select an option'
                    }
                }
            },
            sex: {
                validators: {
                    notEmpty: {
                        message: 'Please select an option'
                    }
                }
            },
            size: {
                validators: {
                    notEmpty: {
                        message: 'Please select an option'
                    }
                }
            },
            description: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description of the pet'
                    }
                    }
             },
             image: {
                 validators: {
                     notEmpty: {
                         message: 'Please upload a picture'
                     }
                 }
             }
           
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});


