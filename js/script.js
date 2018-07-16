var moreButtonEvent = function() {
    if (this.getAttribute('data-more') == 0) {
        this.setAttribute('data-more', 1);
        this.innerHTML = 'Читать меньше';
        this.previousSibling.previousSibling.style.display = 'block';
    } else if (this.getAttribute('data-more') == 1) {
        this.setAttribute('data-more', 0);
        this.innerHTML = 'Читать больше';
        this.previousSibling.previousSibling.style.display = 'none';
    }
};
var moreButtonsList = document.getElementsByClassName('page-main__button');
for (var i = 0; i < moreButtonsList.length; i++) {
    moreButtonsList[i].addEventListener('click', moreButtonEvent);
}
var link = document.querySelector(".social-list__button");
var popup = document.querySelector(".modal");
var close = popup.querySelector(".modal__close-btn");
var login = popup.querySelector("[name=username]");
link.addEventListener("click", function(evt) {
    evt.preventDefault();
    popup.classList.add("modal-show");
});
close.addEventListener("click", function(evt) {
    evt.preventDefault();
    popup.classList.remove("modal-show");
});
window.addEventListener("keydown", function(evt) {
    if (evt.keyCode === 27) {
        evt.preventDefault();
        if (popup.classList.contains("modal-show")) {
            popup.classList.remove("modal-show");
        }
    }
});
//form__validation
$(function() {
    $('input[type=file]').change(function() {
        var val = $(this).val().toLowerCase(),
            regex = new RegExp("(.*?)\.(jpg|jpeg|pdf|png)$");
        if (!(regex.test(val))) {
            $(this).val('');
            $("#alert").html("Файлы только jpg,jpeg,pdf,png")
        }
    });
});
$(function() {
    $('#fupForm').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            }
        },
        messages: {
            name: {
                required: "Поле 'Имя' обязательно к заполнению",
                minlength: "Введите не менее 2-х символов в поле 'Имя'"
            },
            email: {
                required: "Поле 'Email' обязательно к заполнению",
                email: "Необходим формат адреса email@example.com"
            },
        }
    });
});
//files
$(document).ready(function(e) {
    $("#fupForm").on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'submit.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('.submitBtn').attr("disabled", "disabled");
                $('#fupForm').css("opacity", ".5");
            },
            success: function(msg) {
                $('.statusMsg').html('');
                if (msg == 'ok') {
                    $('#fupForm')[0].reset();
                    $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Form data submitted successfully.</span>');
                } else {
                    $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Some problem occurred, please try again.</span>');
                }
                $('#fupForm').css("opacity", "");
                $(".submitBtn").removeAttr("disabled");
            }
        });
    });
});