  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            fname: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please enter your first name'
                    }
                }
            },
             lname: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please enter your last name'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please enter your address'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please enter a vaild phone number with area code'
                    }
                }
            },
            job: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please enter your occupation'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your email address'
                    },
                    emailAddress: {
                        message: 'Please enter a valid email address'
                    }
                }
            },	
            pword: {
                validators: {
                    notEmpty: {
                        message: 'Please enter a password'
                    },
                }
            },
            
            
            adultnum: {
                validators: {
                    notEmpty: {
                        message: 'Please enter the number of adults in your family'
                    }
                }
            },
            hometype: {
                validators: {
                    notEmpty: {
                        message: 'Please select an option'
                    }
                }
            },
            homenoise: {
                validators: {
                    notEmpty: {
                        message: 'Please select an option'
                    }
                }
            },
            love: {
                validators: {
                    notEmpty: {
                        message: 'Please select an option'
                    }
                }
            },
			
            petnum: {
                validators: {
                    notEmpty: {
                        message: 'Please enter the number of current pets you own'
                    }
                }
            },
            badowner: {
                validators: {
                    notEmpty: {
                        message: 'Please select an option'
                    }
                }
            },
            worstowner: {
                validators: {
                    notEmpty: {
                        message: 'Please select an option'
                    }
                }
            },
            signature: {
                validators: {
                    notEmpty: {
                        message: 'Please confirm you agree with the terms above'
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


