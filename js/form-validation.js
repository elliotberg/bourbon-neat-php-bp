function volunteerSubmit(token) {
  document.getElementById('volunteer-form').submit();
}

function contactSubmit(token) {
  document.getElementById('contact-form').submit();
}

jQuery(document).ready(function($){
  errorPlacer = function(error, element) {
    error.insertAfter( element.prev('label') );
  };

  showInvalidMsg = function(event, validator) {
    // 'this' refers to the form
    var errors = validator.numberOfInvalids();
    var msg = ' Please fill in the highlighted field(s) and submit the form again.'
    if (errors) {
      var message = errors == 1
        ? 'You missed 1 field.' + msg
        : 'You missed ' + errors + ' fields.' + msg;
      $('.invalid-msg').html(message);
      $('.invalid-msg').show();
    } else {
      $('.invalid-msg').hide();
    }
  };

  submitToCaptcha = function(form) {
    grecaptcha.execute();
  },

  $('#volunteer-form').validate({
    errorPlacement: errorPlacer,
    invalidHandler: showInvalidMsg,
    submitHandler: submitToCaptcha,
  });

  $('#contact-form').validate({
    errorPlacement: errorPlacer,
    invalidHandler: showInvalidMsg,
    submitHandler: submitToCaptcha,
  });

});
