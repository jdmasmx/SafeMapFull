$(function() {
	// Validate the contact form

  $('#freeads').validate({
    // Specify what the errors should look like
    // when they are dynamically added to the form
    //errorElement: "span",
    //wrapper: "span",


    // Add requirements to each of the fields
    rules: {

      businessnameF: {
        required: true,
        //minlength: 5
      },

      subject: {
        required: true,
        //minlength: 5
      },
      

      addressF: {
        required: true,
        //minlength: 5
      },

      phoneF: {
        required: true,
        //minlength: 5
      },


      emailF: {
        required: true,
        email: true
      },

        
    },


    messages: {

     emailF: {
      required: "Write a Email.",
      email: "Write a Email."
    },
    
  },

    // Use Ajax to send everything to processForm.php
    submitHandler: function(form) {
      $("#send_button_F").attr("value", "Sending...");
      $(form).ajaxSubmit({
        success: function(responseText, statusText, xhr, $form) {
          //$(form).slideUp("fast");
          $("#send_button_F").attr("value", "Send");
          $("#businessnameF").attr("value", "");
          $("#phoneF").attr("value", "");
          $("#addressF").attr("value", "");
          $("#emailF").attr("value", "");
          $("#responseF").html(responseText).hide().slideDown("fast");
        }
      });
      return false;
    }
  });



  //Formulario todos
  $('#contactform').validate({
  	// Specify what the errors should look like
  	// when they are dynamically added to the form
  	//errorElement: "span",
    //wrapper: "span",


  	// Add requirements to each of the fields
  	rules: {
  		
      name: {
        required: true,
        //minlength: 5
      },
      
      slogan: {
        required: true,
        //minlength: 5
      },

      subject: {
        required: true,
        //minlength: 5
      },

      logo: {
        required: true,
        //minlength: 5
      },

      texto: {
        required: true,
        minlength: 5,
        maxlength: 275
      },

      textod: {
        //required: true,
        minlength: 5,
        maxlength: 275
      },

      address: {
        required: true,
        //minlength: 5
      },



      phoned: {
        required: true,
        //minlength: 5
      },
      number: {
        required: true,
        //minlength: 5
      },

      email: {
        required: true,
        email: true
      },



      businessname: {
        required: true,
        //minlength: 5
      },
      
      

      
      
      comment: {
        required: true,

      },

      
    },


    messages: {

     email: {
      required: "Write a Email.",
      email: "Write a Email."
    },
    
  },

  	// Use Ajax to send everything to processForm.php
  	submitHandler: function(form) {
  		$("#send_button").attr("value", "Sending...");
  		$(form).ajaxSubmit({
  			success: function(responseText, statusText, xhr, $form) {
  				//$(form).slideUp("fast");
          $("#send_button").attr("value", "Send");
          $("#name").attr("value", "");
          $("#number").attr("value", "");
          $("#comment").attr("value", "");
          $("#email").attr("value", "");
          $("#response").html(responseText).hide().slideDown("fast");
        }
      });
  		return false;
  	}
  });
});