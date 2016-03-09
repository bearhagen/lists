/* Bearwork - 2016 */
(function() {
	var shortname = 'bhw';

	if (!$('#'+shortname+'-backdrop.backdrop').length) {
		$('body').append('<div id="'+shortname+'-backdrop" class="backdrop"></div>');
	}

	$('body').on('click', '.'+shortname+'-modal-trigger', function(eModal) {
		eModal.preventDefault();
		var modal = $('#' + $(this).data('target'));
		
		showModal(modal, eModal);
	});

	function showModal(modal, eTrigger) {
		// Only run if the clicked element does not have the "modal-stop" class.
		if (!$(eTrigger.target).hasClass('modal-stop')) {
			modal.fadeIn('fast', function() {
				// Disable scrolling
				$('html, body, #main').addClass(shortname + '-scroll-lock');

				$('#'+modal.attr('id')+' .'+shortname+'-modal-close').on('click', function(eBtnClose) {
					if ($(this).data('target')) {
						modalHide($('#'+$(this).data('target')), eBtnClose, 1);
					} else {
						modalHide(modal, eBtnClose);
					}

					$(this).off();
				});

				$(document).on('click.'+shortname+'ModalClick'+modal.attr('id'), function(eDoc) {
					eDoc.preventDefault();

					if (!modal.is(eDoc.target) && modal.has(eDoc.target).length === 0) {
						modalHide(modal, eDoc);
					};
				});
				
				$(document).on('keyup.'+shortname+'ModalEsc'+modal.attr('id'), function(eDoc) {
					eDoc.preventDefault();

					if (eDoc.which == 27 && !modal.hasClass('stopParentEsc')) { // ESC pressed, and is not stopped by child
						modalHide(modal, eDoc);
					}
				});
			}).addClass('active');

			$('#'+shortname+'-backdrop').fadeIn('fast');
		}
	}

	function modalHide(modal, eTrigger, keepBackdrop) {
		keepBackdrop = keepBackdrop || 0;

		$(document).off('click.'+shortname+'ModalClick'+modal.attr('id'));
		$(document).off('keyup.'+shortname+'ModalEsc'+modal.attr('id'));

		modal.fadeOut('fast', function() {
			// Re-enable scrolling
			$('html, body, #main').removeClass(shortname + '-scroll-lock');
		}).removeClass('active');

		// Only remove backdrop if it's not being told to stay.
		if (!keepBackdrop) {
			$('#'+shortname+'-backdrop').fadeOut('fast');
		}
	}
})();