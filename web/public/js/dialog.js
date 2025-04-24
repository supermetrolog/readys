var timeout;
var focusPrice = false;

$(document).ready(function () {
	$(document).on("click touch", ".start-dialog", function () {
		if ($(window).width() <= 650) {
			if ($(".modal-wrap.general-modal").hasClass("md-show")) {
				modal("close", $(this));
			} else {
				modal("open", $(this));
			}

			$(this).find(".fa-angle").toggleClass("fa-angle-down fa-angle-up");
		} else {
			modal("open", $(this));
		}

		return false;
	});

	$(document).on("click touch", ".anchor-start-dialog", function () {
		$('html, body').stop().animate({scrollTop: (0)}, 500);
		$(".mobile-phone .phone-iconblock").click();
		$(".mobile-phone .feedback .start-dialog").click();
	});

	$(document).on("click touch", ".modal .header span.icon-clear-search", function () {
		modal("close", $(this));
	});

	$(document).on("click touch", ".modal-success div.success-footer > div", function () {
		modal("close", $(this));
	});

	$(".dialog_input").exists(function () {
		$(".dialog_input input.requare").keyup(function () {
			$(this).parent().attr("data-validation", "");
		});

		$(document).on("change", ".dialog_input input.requare,.dialog_input textarea", function () {
			editInputDialog($(this), true);
		});

		$(document).on("click touch", ".modal-wrap.general-modal .form-object-check .slide", function () {
			editInputDialog($(this), true);
		});

		$(".dialog_input input.requare,.dialog_input textarea").keyup(function () {
			clearTimeout(timeout);

			var object = $(this);

			timeout = setTimeout(function () {
				editInputDialog(object, true);
			}, 500, $(this));
		});

		$(".modal .send").click(function () {
			const object = $(this);
			const dialog = object.closest(".modal");

			if ($(this).attr("data-access") === "true") {
				$(this).parent().find(".blackout").fadeIn(300);

				modal("close", dialog.parent());

				$.get(dialog.find("input[name='route']").val(), $(this).parents(".modal").find("form").serialize(), function (data) {
					/*цели*/

					if (dialog.find("input[name='reachGoal']").length > 0) {
						window.yaCounter40269164.reachGoal(dialog.find("input[name='reachGoal']").val());
						ga('send', 'event', 'Form', dialog.find("input[name='reachGoal']").val());
					}

					dialog.find("input:not([type='hidden']),textarea").val("");
					dialog.find("input[name='reachGoal']").val("");
					dialog.find("input[name='route']").val("/order/send");
					dialog.find("input,textarea").removeClass("no_empty");
					dialog.find(".dialog_input").attr("data-validation", "");
					dialog.find(".send").attr("data-access", "");

					$(".modal-wrap.success").fadeIn();

				}, "json");
			} else {
				dialog.find(".dialog_input:not(.not-valid) input.requare").each(function () {
					editInputDialog($(this), true);
				});
			}
		});

		$(".dialog_input .icon").click(function () {
			$(this).toggleClass('active');

			if ($(this).parent().find("input").attr("type") === "password") {
				if ($(this).hasClass('active')) {
					$(this).parent().find("input").attr("type", "text");
				} else {
					$(this).parent().find("input").attr("type", "password");
				}
			}
		});

		$(".dialog_input").click(function () {
			$(this).find("input").focus();
			$(this).find("textarea").focus();
		});

		$(".dialog_input input,.dialog_input textarea").change(function () {
			if ($(this).val() == "") {
				$(this).removeClass("no_empty");
			} else {
				$(this).addClass("no_empty");
			}
		});

		$(".dialog_input input,.dialog_input textarea").focus(function () {
			$(this).parent().addClass("selected");
		});

		$(".dialog_input input,.dialog_input textarea").bind("focusin focus", function (e) {
			e.preventDefault();
		});

		$(".dialog_input input,.dialog_input textarea").blur(function () {
			$(this).parent().removeClass("selected");
		});
	});

	$(document).on("click touch", ".search-modal .show-lots", function () {
		modal("close", $(this));
	})
});

function editInputDialog(object, checkEmpty = false) {
	const type = object.attr("name");
	const value = object.val();
	let validation = "";

	if (value === "" && !checkEmpty) {
		validation = "empty";
	} else {
		switch (type) {
			case 'name':
			case 'price':
				validation = "error";

				if (value.length > 1) {
					validation = "ok";
				}

				break;
			case 'email':
				validation = "error";

				if (isValidEmailAddress(value)) {
					validation = "ok";
				}

				break;
			case 'phone':
				validation = "error";

				if (object.inputmask("isComplete")) {
					validation = "ok";
				}

				break;
		}
	}

	object.parent().attr("data-validation", validation);

	let isValid = true;

	object.closest(".modal, .order").find(".dialog_input:not(.not-valid) input.requare:not([type='hidden'])").each(function () {
		const dataValidationAttribute = $(this).parent().attr("data-validation");

		if (dataValidationAttribute === undefined || dataValidationAttribute === null || dataValidationAttribute === "" || dataValidationAttribute === "error") {
			isValid = false;
			return;
		}
	});

	const submit = object.closest(".modal, .order, .order-horizontal").find(".send");

	submit.attr('data-access', isValid ? "true" : "false");
}

function isValidEmailAddress(emailAddress) {
	const pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	return pattern.test(emailAddress);
}

function modal(event, element) {
	if (event === "close") {
		$(".modal-wrap, .mobile-filter-wrap").removeClass("md-show");

		action = null;

		return;
	}

	if (event === "open") {
		const dialogInput = $(".modal-wrap.general-modal .dialog_input");

		dialogInput.removeClass("not-valid");
		dialogInput.attr("data-validation", "");

		// описание диалогового окна

		if (element.attr("data-wish") != "") {
			$(".modal-wrap.general-modal input[name='wish']").val(element.attr("data-wish"));
		}

		// поля которые нужно показать через запятую

		$(".modal-wrap.general-modal .dialog_input, .modal-wrap.general-modal div[data-name='deal']").addClass("not-valid");
		$(".modal-wrap.general-modal div[data-name='deal'] input").remove();
		$(".modal-wrap.general-modal .slide.active").removeClass("active");

		if (element.attr("data-field") != "") {
			const fields = element.attr("data-field").split(",");

			for (const key in fields) {
				$(".modal-wrap.general-modal div[data-name='" + fields[key] + "']").removeClass("not-valid");

				// пользователь предложил свою цену

				if (fields[key] === "price") {
					const priceValue = $("input[name='my_price']").val();

					if (priceValue) {
						$("input[name='price']").val(priceValue).addClass("no_empty");
					} else {
						focusPrice = true;
					}

				}
			}
		}
		// обязательные поля через запятую

		$(".modal-wrap.general-modal .dialog_input input").removeClass("requare")

		if (element.attr("data-requare") != "") {
			const fields = element.attr("data-requare").split(",");

			for (const key in fields) {
				if (fields[key] === "deal") {
					$(".modal-wrap.general-modal div[data-name='deal']").addClass("requare");
				} else {
					$(".modal-wrap.general-modal .dialog_input input[name='" + fields[key] + "']").addClass("requare");
				}
			}
		}

		// заголовок в модалке

		if (element.attr("data-title") != "") {
			$(".modal-wrap.general-modal .header .title").html(element.attr("data-title"));
		}

		if (element.data("label") == "eng") {
			$(".modal-wrap.general-modal .dialog_input[data-name='name'] .label").html("Name");
			$(".modal-wrap.general-modal .dialog_input[data-name='phone'] .label").html("Phone");
			$(".modal-wrap.general-modal .dialog_input[data-name='comments'] .label").html("Comment");
			$(".modal-wrap.general-modal .send").html("Send");
			$(".modal-wrap.general-modal .footer div.req").html("<span class='red'>*</span> Required fields");
			$(".modal-wrap.success .text").html("<span class='icon-circle-check'></span> Your request is sent successfully!");
		}

		/*цели*/

		if (element.data("reachgoal") != "") {
			$(".modal-wrap.general-modal input[name='reachGoal']").val(element.data("reachgoal"));
		}

		if (element.data("route")) {
			$(".modal-wrap.general-modal input[name='route']").val(element.data("route"));
		}

		const nameInput = $(".modal-wrap.general-modal .dialog_input input[name='name']");

		if (nameInput.val()) {
			editInputDialog(nameInput, true);
		}

		const phoneInput = $(".modal-wrap.general-modal .dialog_input input[name='phone']");

		if (phoneInput.val()) {
			editInputDialog(phoneInput, true);
		}

		const emailInput = $(".modal-wrap.general-modal .dialog_input input[name='email']");

		if (emailInput.val()) {
			editInputDialog(emailInput, true);
		}

		if ($(window).width() <= 650) {
			$(element).after($(".modal-wrap.general-modal"));
		}

		$(".modal-wrap.general-modal").addClass("md-show");

		if (focusPrice) {
			$("input[name='price']").focus();
		}
	}
}