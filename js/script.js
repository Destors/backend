var moreButtonEvent = function () {
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
link.addEventListener("click", function (evt) {
  evt.preventDefault();
  popup.classList.add("modal-show");
  username.focus();
});
close.addEventListener("click", function (evt) {
  evt.preventDefault();
  popup.classList.remove("modal-show");
});
window.addEventListener("keydown", function (evt) {
  if (evt.keyCode === 27) {
    evt.preventDefault();
    if (popup.classList.contains("modal-show")) {
      popup.classList.remove("modal-show");
    }
  }
});

//form__validation

$(function () {
  $('input[type=file]').change(function () {
    var val = $(this).val().toLowerCase(),
      regex = new RegExp("(.*?)\.(jpg|jpeg|pdf|png)$");

    if (!(regex.test(val))) {
      $(this).val('');
      $("#alert").html("Файлы только jpg,jpeg,pdf,png")
    }
  });
});

$(function () {
  $('#form').validate({
    rules: {
      name: {
        required: true,
        minlength: 2
      }
    },
    messages: {
      username: {
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

var files;
 
// Вешаем функцию на событие
// Получим данные файлов и добавим их в переменную
 
$('input[type=file]').change(function(){
    files = this.files;
});

$('.submit.button').click(function( event ){
    event.stopPropagation(); // Остановка происходящего
    event.preventDefault();  // Полная остановка происходящего
 
    // Создадим данные формы и добавим в них данные файлов из files
 
    var data = new FormData();
    $.each( files, function( key, value ){
        data.append( key, value );
    });
 
    // Отправляем запрос
 
    $.ajax({
        url: './submit.php?uploadfiles',
        type: 'POST',
        data: data,
        cache: false,
        dataType: 'json',
        processData: false, // Не обрабатываем файлы (Don't process the files)
        contentType: false, // Так jQuery скажет серверу что это строковой запрос
        success: function( respond, textStatus, jqXHR ){
 
            // Если все ОК
 
            if( typeof respond.error === 'undefined' ){
                // Файлы успешно загружены, делаем что нибудь здесь
 
                // выведем пути к загруженным файлам в блок '.ajax-respond'
 
                var files_path = respond.files;
                var html = '';
                $.each( files_path, function( key, val ){ html += val +'<br>'; } )
                $('.ajax-respond').html( html );
            }
            else{
                console.log('ОШИБКИ ОТВЕТА сервера: ' + respond.error );
            }
        },
        error: function( jqXHR, textStatus, errorThrown ){
            console.log('ОШИБКИ AJAX запроса: ' + textStatus );
        }
    });
 
});