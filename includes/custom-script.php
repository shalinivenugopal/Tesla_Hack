<script src="<?php echo ABS_URL; ?>js/script.min.js?v=<?php echo PROD_VER; ?>"></script>
<script type="text/javascript">$(document).ready(function(){$('#feedback-block').formValidation({message:'This value is not valid',feedbackIcons:{valid:'glyphicon glyphicon-ok',invalid:'glyphicon glyphicon-remove',validating:'glyphicon glyphicon-refresh'},fields:{feedbackname:{validators:{notEmpty:{message:'The name is required and can\'t be empty'},stringLength:{max:255,message:'The name must be less than 250 characters long'},regexp:{regexp:/^[a-zA-Z0-9_\.,# ]+$/,message:'The name is not allowed any special charators'}}},feedbackemail:{validators:{notEmpty:{message:'The email address is required and can\'t be empty'},regexp:{regexp:/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,message:'The input is not a valid email address'}}},feedbacksubject:{validators:{notEmpty:{message:'The subject is required and can\'t be empty'},stringLength:{max:255,message:'The subject must be less than 250 characters long'},regexp:{regexp:/^[a-zA-Z0-9_\.,# ]+$/,message:'The subject is not allowed any special charators'}}},feedbackphonenumber:{validators:{PhoneNumberEx:{message:'The phone number is not valid',utilsScript:'<?php echo ABS_URL ?>includes/intl-tel-input/js/utils.js',phoneprefix:'feedbackphoneprefix',autoHideDialCode:!0,separateDialCode:!1,regex:/^\+?[0-9 ]+$/,preferredCountries:['kw']}}},feedbackcomments:{validators:{stringLength:{max:1000,message:'The comments must be less than 1000 characters long'},regexp:{regexp:/^[a-zA-Z0-9_\.,# ]+$/,message:'The comments is not allowed some special charaters'}}}}}).on('success.form.fv',function(e){e.preventDefault();$('.btn-container').append('<div class="text-center"><div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>');$(this).append('<input type="hidden" name="feedback_reg" value="feedback_submitted" />');$('.btn-container>button').hide();var $form=$(e.target),fv=$(e.target).data('formValidation');fv.defaultSubmit()})});</script>
<script type="text/javascript">$(document).ready(function(){$('#getcall-block').formValidation({message:'This value is not valid',feedbackIcons:{valid:'glyphicon glyphicon-ok',invalid:'glyphicon glyphicon-remove',validating:'glyphicon glyphicon-refresh'},fields:{getacallname:{validators:{notEmpty:{message:'The name is required and can\'t be empty'},stringLength:{max:255,message:'The name must be less than 250 characters long'},regexp:{regexp:/^[a-zA-Z0-9_\.,# ]+$/,message:'The name is not allowed any special charators'}}},getacallemail:{validators:{notEmpty:{message:'The email address is required and can\'t be empty'},regexp:{regexp:/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,message:'The input is not a valid email address'}}},getacallphonenumber:{validators:{notEmpty:{message:'The contact number is required and can\'t be empty'},PhoneNumberEx:{message:'The contact number is not valid',utilsScript:'<?php echo ABS_URL ?>includes/intl-tel-input/js/utils.js',phoneprefix:'getacallphoneprefix',autoHideDialCode:!0,separateDialCode:!1,regex:/^\+?[0-9 ]+$/,preferredCountries:['kw']}}},getacalltimetocall:{validators:{stringLength:{max:50,message:'The time must be less than 50 characters long'},regexp:{regexp:/^[a-zA-Z0-9 :]+$/,message:'The time is not allowed any special charators'}}},getacallcomments:{validators:{stringLength:{max:1000,message:'The comments must be less than 1000 characters long'},regexp:{regexp:/^[a-zA-Z0-9_\.,# ]+$/,message:'The comments is not allowed some special charaters'}}}}}).on('success.form.fv',function(e){e.preventDefault();$('.btn-container').append('<div class="text-center"><div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>');$(this).append('<input type="hidden" name="getacall_reg" value="getacall_submitted" />');$('.btn-container>button').hide();var $form=$(e.target),fv=$(e.target).data('formValidation');fv.defaultSubmit()})});</script>