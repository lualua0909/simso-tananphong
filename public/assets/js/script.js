// document.addEventListener(
// 	"DOMContentLoaded", () => {
// 		new Mmenu("#mobile-menu", {
// 			"offCanvas": {
// 				"position": "left"
// 			},
// 			"theme": "light"
// 		});
// 	}
// );

jQuery(function ($) {
	$('input[type=radio][name=delivery-method]').on('change', function () {
		if ($(this).val() === 'delivery-method-1') {
			$('.branch-select').show();
			$('.address-input').hide();
		} else if ($(this).val() === 'delivery-method-2') {
			$('.branch-select').hide();
			$('.address-input').show();
		}
	});

	if ($('#shipping-map').length) {
		let map = L.map('shipping-map', {
			center: [10.0310623, 465.7804871],
			zoom: 12
		});

		L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(map);
	}

	$('#id-front, #id-back, #portrait, #short-clip').on('change', function (e) {
		$(this).closest('label').find('.preview').addClass('show').attr('src', URL.createObjectURL(e.target.files[0]));
	});
});
