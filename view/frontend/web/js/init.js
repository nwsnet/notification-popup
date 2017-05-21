define(
	[
		'jquery',
		'Magento_Ui/js/modal/modal',
		'mage/cookies'
	],
	function ($, modal) {
		return function (config) {
			var options = {
				responsive: true,
				innerScroll: true,
				title: config.title
			};

			var popupmodal = "nwsnet-notification_popup";
			var $popupmodal = $("#" + popupmodal);
			var popup = modal(options, $popupmodal);

			if (!$.mage.cookies.get(popupmodal)) {
				$popupmodal.modal('openModal');
				$.mage.cookies.set(popupmodal, "shown");
			}
		};
	}
);