ActionFeedback = {
    Init: function(){
		ActionFeedback.ChangeWindowsFeedback();
		ActionFeedback.InputLabelEffect();
		ActionFeedback.SubmitForm();
    },
    ChangeWindowsFeedback: function(){
		$('.icon-out-feedback, .btn-result').click(function() {
			$('#k-feedback').hide();
			$('#k-feedback-result').hide();
			$('#k-feedback-button').show();
			if (window.matchMedia('(max-width: 575px)').matches) {
				$('body').css('overflow','auto');
			}
		});
		$('#k-feedback-button').click(function() {
			$('#k-feedback').show();
			$('#k-feedback-button').hide();
			if (window.matchMedia('(max-width: 575px)').matches) {
				$('body').css('overflow','hidden');
			}
		});
    },
	InputLabelEffect: function(){
		$("#feedback-phone").focus(function() {
			$(this).removeAttr('placeholder').parent().addClass("block");
		}).blur(function() {
			$(this).parent().removeClass("block").find("input").attr("placeholder", "Số điện thoại*");
		});

		$("#feedback-email").focus(function() {
			$(this).removeAttr('placeholder').parent().addClass("block");
		}).blur(function() {
			$(this).parent().removeClass("block").find("input").attr("placeholder", "Email*");
		});
	},
	SubmitForm: function(){
		$('form[name="landing-page-id"]').on('submit', function(e){
			e.preventDefault();
			if ($("#feedback-phone").val() === '' && $("#feedback-email").val() === ''){
				$('#k-feedback .error').html('Bạn chưa nhập số điện thoại hoặc email!');
			}
			else{
				$('#k-feedback .error').html('');
				var $current = $(this);
				$current.find('button[type="submit"]').prop('disabled', true);
				var url = 'https://docs.google.com/forms/d/e/1FAIpQLSeQEijftYLI8gYK26hljapsNWbjdO6VZ7GVoUeJFyl9JWVWOw/formResponse';
				var data = {
					'entry.101701067': $("#feedback-phone").val(),
					'entry.838162713': $("#feedback-email").val(),
					'entry.368173868': $("input[name='feedback-radio']:checked").data("value"),
					'entry.2103210528': $("#feedback-textarea").val()
				};
				$.ajax({
					'url': url,
					'method': 'POST',
					'dataType': 'XML',
					'data': data,
					'statusCode': {
						0: function() {
							ActionFeedback.SuccessForm($current);
						},
						200: function() {
							ActionFeedback.SuccessForm($current);
						}
					}

				});
			}
		})
	},
	SuccessForm: function($current){
		$("#feedback-phone").val('');
		$("#feedback-email").val('');
		$("#feedback-textarea").val('');

		$('#k-feedback').hide();
		$('#k-feedback-result').show();
		$current.find('button[type="submit"]').prop('disabled', false);
		if (window.matchMedia('(max-width: 575px)').matches) {
			$('body').css('overflow','auto');
		}
	}
};
ActionFeedback.Init();
