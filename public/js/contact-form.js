jQuery(document).ready(function($) {
	"use strict";
// Contact form
	$(function() {
	$("#contact").validate({
    	rules: {
            name: {
                required: true,
                minlength: 2
            },
			 city: {
                required: true,
                minlength: 2
            },
			 phone: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            subject: {
                required: true
            },
			message: {
                required: true
            }
        },
		messages: {
            name: {
                required: "Please type your name",
                minlength: "Please type your name correctly"
            },
			city: {
                required: "Please type your city",
                minlength: "Please type your city correctly"
            },
			phone: {
                required: "Please type your phone",
                minlength: "Please type your phone correctly"
            },
            email: {
                required: "Please type your e-mail correctly"
            },
            subject: {
                required: "Please type about subject",
                minlength: "To short subject"
            },
			 message: {
                required: "Please type your message",
                minlength: "To short message"
            }
        },
		submitHandler: function(form) {
            var m_data = new FormData();
            m_data.append( 'name',  document.getElementById("name").value);
            m_data.append( 'email',  document.getElementById("email").value);
            m_data.append( 'phone', document.getElementById("phone").value);
            m_data.append( 'city',  document.getElementById("city").value);
            m_data.append( 'subject', document.getElementById("subject").value);
            m_data.append( 'message', document.getElementById("message").value);
            $(form).ajaxSubmit({
                url:"../controller/contact.php",
                type:"POST",
                data: m_data,
                dataType:'json',
                success: function() {
                    alert(data);
                    $('#contact :input').attr('disabled', 'disabled');
                    $('#contact').fadeTo( "slow", 0.15, function() {
                        $(this).find(':input').attr('disabled', 'disabled');
                        $(this).find('label').css('cursor','default');
                        $('#success').fadeIn(600);
                    });
                },
                error: function() {
                    $('#contact').fadeTo( "slow", 0.15, function() {
                        $('#error').fadeIn(600);
                    });
                }
            });
        }
    });
});
});