<?php
error_reporting(E_ALL);
/* Установка внутренней кодировки в UTF-8 */
mb_internal_encoding("UTF-8");
?>
<!DOCTYPE html>
<html class="no-js" lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript, разработка сайтов, создать сайт.">
    <meta name="description" content="Разработка и поддержка веб-сайтов, современный дизайн, новые технологии.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Prosolovych Oleksandr">
    <title>Фронтенд разработчик Destors</title>
    <script>
      document.documentElement
        .classList.replace('no-js', 'js');
    </script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/mobile_style.css">
    <link rel="stylesheet" media="(min-width: 660px)" href="css/desktop_style.css">
    <link rel="stylesheet" media="(min-width: 2800px)" href="css/hight_res_style.css">
  </head>
  <body class="container">
    <header class="main-header">
      <section class="lang-menu">
        <h1 class="visually-hidden">Меню выбора языка</h1>
        <ul class="lang-list">
          <li class="lang-list__item"><a href="#" class="lang-list__link lang-list__link--active" title="Русский язык">RUS</a></li>
          <li class="lang-list__item"><a href="index_eng.html" class="lang-list__link" title="English language">ENG</a></li>
        </ul>
      </section>
      <section class="header-info">
        <div class="header-info__wrapper-photo">
          <picture>
            <source srcset="img/main_header_photo.jpg" media="(min-width: 2800px)">
            <img class="header-info__photo" src="img/main_header_photo_mobile.jpg" alt="На фото: Просолович Александр" title="Просолович Александр">
          </picture>
        </div>
        <div class="header-info__wrapper-info">
          <h1 class="header-info__title">Привет, меня зовут Саша</h1>
          <p class="header-info__description">Давай начнем</p>
        </div>
      </section>
    </header>
    <main class="page-main">
      <section class="main-info">
        <div class="main-info-wrapper">
          <h2 class="main-info__title">Кто я такой?</h2>
          <p class="main-info__description">Начинающий фронтенд разработчик, поклонник <a href="https://ru.wikipedia.org/wiki/%D0%97%D0%B4%D0%BE%D1%80%D0%BE%D0%B2%D1%8B%D0%B9_%D0%BE%D0%B1%D1%80%D0%B0%D0%B7_%D0%B6%D0%B8%D0%B7%D0%BD%D0%B8" class="main-info__link" target="_blank">здорового</a> образа жизни, музыкант, любитель велосипедов и творчества.</p>
          <div class="hide-content">
            <h4 class="hide-content__title">Краткая биография</h4>
            <h5 class="hide-content__title-smal">Семья</h5>
            <p class="hide-content__description">Родился 19 марта 1995 году в Украине, город <a class="main-info__link" href="https://ru.wikipedia.org/wiki/%D0%9D%D0%B8%D0%BA%D0%BE%D0%BB%D0%B0%D0%B5%D0%B2">Николаев</a>, в семье учительницы и электрика. Полное имя Просолович Александр Романович.</p>
            <h5 class="hide-content__title-smal">Учеба</h5>
            <p class="hide-content__description">11 лет учился в школе №7, дальше поступил в политехнический институт в Николаеве на специальность "Дорожный транспорт", паралельно учился в коледже НКИ по специальности "ДВС".<br>На 4 курс перешел в киевский университет Украина, специальность "Компьютерные науки".</p>
          </div>
          <button class="page-main__button" data-more="0">Читать больше</button>
        </div>
      </section>
      <section class="advantages">
        <div class="advantages-title-wrapper">
          <h2 class="page-main__title">Навыки</h2>
          <p class="page-main__description">Базовые навыки верстальщика.</p>
          <p class="page-main__description">Успешно закончил интерактивные курсы по верстке на<br><a href="https://htmlacademy.ru/profile/id276285" title="Мой профиль HTML Academy" target="_blank">HTML Academy</a> и <a href="https://www.sololearn.com/Profile/2225497" title="Мой профиль SoloLearn" target="_blank">SoloLearn</a>. </p>
        </div>
        <ul class="advantages-list">
          <li class="advantages-list__item">
            <h3 class="visually-hidden">HTML5</h3>
            <div class="progress-bar progress-bar--75">
              <div class="progress-bar__text">
                <span class="progress-bar__title">HTML5</span>
                <span class="progress-bar__title">75%</span>
              </div>
            </div>
            <p>Семантическая вёрстка, БЭМ, доступность, скринридеры, адаптивность.
          </li>
          <li class="advantages-list__item">
            <h3 class="visually-hidden">CSS3</h3>
            <div class="progress-bar progress-bar--62">
              <div class="progress-bar__text">
                <span class="progress-bar__title">CSS3</span>
                <span class="progress-bar__title">62%</span>
              </div>
            </div>
            <p>Синтаксис, псевдоклассы, псевдоэлементы, селекторы.</p>
          </li>
          <li class="advantages-list__item">
            <h3 class="visually-hidden">Git</h3>
            <div class="progress-bar progress-bar--45">
              <div class="progress-bar__text">
                <span class="progress-bar__title">Git</span>
                <span class="progress-bar__title">45%</span>
              </div>
            </div>
            <p>Десктоп и консоль, знание принципов работы и основных комманд.</p>
          </li>
          <li class="advantages-list__item">
            <h3 class="visually-hidden">JS</h3>
            <div class="progress-bar progress-bar--5">
              <div class="progress-bar__text">
                <span class="progress-bar__title">JS</span>
                <span class="progress-bar__title">5%</span>
              </div>
            </div>
            <p>Подключение скриптов, условия, функции, переменные.</p>
          </li>
        </ul>
      </section>
      <section class="hobbies">
        <h2 class="hobbies__title">Увлечения</h2>
        <ul class="hobbies-list">
          <li class="hobbies-list__item">
            <a class="hobbies-list__link" href="https://www.youtube.com/watch?v=rc3UGFDLbmE" title="Видео с моим исполнением" target="_blank"><img class="hobbies-list__img" src="img/hobbie_rock.png" alt="Музыкальные инструменты"></a>
            <p class="hobbies-list__description">Люблю музыку, от классики до DeathCore. Играл в рок группе. Любимые инструменты: гитара, барабаны, пианино.</p>
          </li>
          <li class="hobbies-list__item">
            <a class="hobbies-list__link" href="https://ru.wikipedia.org/wiki/%D0%97%D0%B4%D0%BE%D1%80%D0%BE%D0%B2%D1%8B%D0%B9_%D0%BE%D0%B1%D1%80%D0%B0%D0%B7_%D0%B6%D0%B8%D0%B7%D0%BD%D0%B8" target="_blank"><img class="hobbies-list__img" src="img/hobbie_muscule.png" alt=""></a>
            <p class="hobbies-list__description">Веду здоровый образ жизни, стараюсь заниматься спортом и активным отдыхом. Поклонник экстремальной велоезды (downhill, urban-fr.).</p>
          </li>
          <li class="hobbies-list__item">
            <a class="hobbies-list__link" href="https://ru.wikipedia.org/wiki/%D0%A4%D0%BE%D1%82%D0%BE%D0%B3%D1%80%D0%B0%D1%84"><img class="hobbies-list__img" src="img/hobbie_photo.png" alt=""></a>
            <p class="hobbies-list__description">Есть навыки построения фото и видео композиции, владение мануальной техникой и постпродакшн.</p>
          </li>
          <li class="hobbies-list__item">
            <a class="hobbies-list__link" href="https://ru.wikipedia.org/wiki/%D0%98%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0" target="_blank"><img class="hobbies-list__img" src="img/hobbie_pc.png" alt=""></a>
            <p class="hobbies-list__description">Нравятся компьютеры, изучаю Computer Science.</p>
          </li>
          <li class="hobbies-list__item">
            <a class="hobbies-list__link" href="https://ru.wikipedia.org/wiki/%D0%9E%D1%85%D1%80%D0%B0%D0%BD%D0%B0_%D0%BE%D0%BA%D1%80%D1%83%D0%B6%D0%B0%D1%8E%D1%89%D0%B5%D0%B9_%D1%81%D1%80%D0%B5%D0%B4%D1%8B" target="_blank"><img class="hobbies-list__img" src="img/hobbie_nature.png" alt=""></a>
            <p class="hobbies-list__description">Бережно отношусь к природе, люблю путешествывать.</p>
          </li>
          <li class="hobbies-list__item">
            <a class="hobbies-list__link" href="http://s016.radikal.ru/i336/1108/14/4311d4f94e69.jpg" target="_blank"><img class="hobbies-list__img" src="img/hobbie_paint.png" alt=""></a>
            <p class="hobbies-list__description">Есть навыки 3D моделирования (SketchUp).</p>
          </li>
        </ul>
      </section>
      <section class="desires">
        <div class="desires-content-wrapper">
          <h3 class="desires__title">Стремления</h3>
          <p>Мечтаю работать в сфере веб-разработки, развиваться во всех направлениях и быть счастливым.</p>
          <div class="hide-content">
            <h4 class="hide-content__title-smal">О веб-разработке</h4>
            <p class="hide-content__description">Как я к этому пришел? Очень просто, я всегда хотел заниматся чем-то таким, что поможет мне раскрыть себя и свои способности. В мире кода чувствую себя прекрасно. Чувствую что занимаюсь чем-то важным и нужным.</p>
            <img class="hide-content__img" src="img/image-research-development.png" alt="Важность работы программистов в обществе">
            <h4 class="hide-content__title-smal">О программировании</h4>
            <p class="hide-content__description">Программирование это инструмент, который дает безграничные возможности для любой фантазии. Даже такие простые навыки как верстка сайтов - открыли для меня новый мир.</p>
            <p class="hide-content__description">Мне очень нравится и хочется, учиться дальше, и расширять круг своих навыков.</p>
          </div>
          <button class="page-main__button" data-more="0">Читать больше</button>
        </div>
      </section>
    </main>
    <footer class="page-footer">
      <section class="social-menu">
        <div class="social-menu-wrapper">
          <h2 class="social-menu__title">Давайте дружить</h2>
          <p>Вы можете связаться со мной любым доступным ниже способом.</p>
          <ul class="social-list">
            <li class="social-list__item">
              <a class="social-list__link" href="http://vk.com/destors" target="_blank" title="Мой VK: destors">
                <svg id="vkontakte" viewBox="0 0 32 32" width="37" height="37" fill="white">
                  <path d="M15.83 25.176h1.63s.45-.09.723-.362c.27-.27.18-.724.18-.724s0-2.17.996-2.533c.994-.362 2.26 2.08 3.708 3.076.995.724 1.81.543 1.81.543l3.618-.09s1.9-.09.995-1.628c-.09-.09-.542-1.086-2.713-3.166-2.262-2.17-1.99-1.81.814-5.428 1.72-2.262 2.353-3.62 2.172-4.16-.18-.544-1.447-.453-1.447-.453h-4.16s-.272 0-.544.09c-.18.09-.36.453-.36.453s-.634 1.72-1.54 3.257c-1.808 3.076-2.532 3.257-2.894 3.076-.724-.452-.543-1.81-.543-2.804 0-2.985.452-4.252-.905-4.614-.452-.09-.814-.18-1.9-.18-1.447 0-2.714 0-3.438.36-.452.272-.814.725-.633.815.27 0 .905.18 1.176.633.452.543.452 1.9.452 1.9s.27 3.528-.543 3.98c-.543.27-1.357-.27-2.985-3.166-.814-1.447-1.447-3.076-1.447-3.076s.09-.27-.18-.452-.634-.27-.634-.27l-3.89.09s-.543 0-.814.27c-.18.27 0 .724 0 .724S5.608 18.483 9.045 22.1c3.166 3.258 6.785 3.077 6.785 3.077z"></path>
                </svg>
              </a>
            </li>
            <li class="social-list__item">
              <a class="social-list__link" href="http://www.instagram.com/destors" target="_blank" title="Мой Instagram: destors">
                <svg id="instagram" viewBox="0 0 32 32" width="35" height="35" fill="white">
                  <path d="M23.4 4H8.6C6.1 4 4 6.1 4 8.6v14.7C4 25.9 6.1 28 8.6 28h14.7c2.6 0 4.6-2.1 4.6-4.6V8.6c.1-2.5-2-4.6-4.5-4.6zm1.3 2.8h.5v4h-4.1V6.7l3.6.1zm-12.1 6.7c.8-1.1 2-1.8 3.4-1.8s2.7.7 3.4 1.8c.5.7.8 1.5.8 2.5 0 2.3-1.9 4.2-4.2 4.2s-4.2-1.9-4.2-4.2c0-.9.3-1.8.8-2.5zm13.1 9.9c0 1.3-1 2.3-2.3 2.3H8.6c-1.3 0-2.3-1-2.3-2.3v-9.8h3.6c-.3.8-.5 1.6-.5 2.5 0 3.6 2.9 6.6 6.6 6.6 3.6 0 6.6-2.9 6.6-6.6 0-.9-.2-1.7-.5-2.5h3.6v9.8z"></path>
                </svg>
              </a>
            </li>
            <li class="social-list__item">
              <a class="social-list__link" href="http://github.com/Destors" target="_blank" title="Мой GitHub: Destors">
                <svg height="32" class="octicon octicon-mark-github" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true" fill="white">
                  <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                </svg>
              </a>
            </li>
            <li class="social-list__item">
              <a class="social-list__link" href="https://t.me/Destors" target="_blank" title="Мой Telegram: @Destors">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" width="35px" height="35px" fill="white">
                  <g id="surface1">
                    <path style=" " d="M 26.070313 3.996094 C 25.734375 4.011719 25.417969 4.109375 25.136719 4.21875 L 25.132813 4.21875 C 24.847656 4.332031 23.492188 4.902344 21.433594 5.765625 C 19.375 6.632813 16.703125 7.757813 14.050781 8.875 C 8.753906 11.105469 3.546875 13.300781 3.546875 13.300781 L 3.609375 13.277344 C 3.609375 13.277344 3.25 13.394531 2.875 13.652344 C 2.683594 13.777344 2.472656 13.949219 2.289063 14.21875 C 2.105469 14.488281 1.957031 14.902344 2.011719 15.328125 C 2.101563 16.050781 2.570313 16.484375 2.90625 16.722656 C 3.246094 16.964844 3.570313 17.078125 3.570313 17.078125 L 3.578125 17.078125 L 8.460938 18.722656 C 8.679688 19.425781 9.949219 23.597656 10.253906 24.558594 C 10.433594 25.132813 10.609375 25.492188 10.828125 25.765625 C 10.933594 25.90625 11.058594 26.023438 11.207031 26.117188 C 11.265625 26.152344 11.328125 26.179688 11.390625 26.203125 C 11.410156 26.214844 11.429688 26.21875 11.453125 26.222656 L 11.402344 26.210938 C 11.417969 26.214844 11.429688 26.226563 11.441406 26.230469 C 11.480469 26.242188 11.507813 26.246094 11.558594 26.253906 C 12.332031 26.488281 12.953125 26.007813 12.953125 26.007813 L 12.988281 25.980469 L 15.871094 23.355469 L 20.703125 27.0625 L 20.8125 27.109375 C 21.820313 27.550781 22.839844 27.304688 23.378906 26.871094 C 23.921875 26.433594 24.132813 25.875 24.132813 25.875 L 24.167969 25.785156 L 27.902344 6.65625 C 28.007813 6.183594 28.035156 5.742188 27.917969 5.3125 C 27.800781 4.882813 27.5 4.480469 27.136719 4.265625 C 26.769531 4.046875 26.40625 3.980469 26.070313 3.996094 Z M 25.96875 6.046875 C 25.964844 6.109375 25.976563 6.101563 25.949219 6.222656 L 25.949219 6.234375 L 22.25 25.164063 C 22.234375 25.191406 22.207031 25.25 22.132813 25.308594 C 22.054688 25.371094 21.992188 25.410156 21.667969 25.28125 L 15.757813 20.75 L 12.1875 24.003906 L 12.9375 19.214844 C 12.9375 19.214844 22.195313 10.585938 22.59375 10.214844 C 22.992188 9.84375 22.859375 9.765625 22.859375 9.765625 C 22.886719 9.3125 22.257813 9.632813 22.257813 9.632813 L 10.082031 17.175781 L 10.078125 17.15625 L 4.242188 15.191406 L 4.242188 15.1875 C 4.238281 15.1875 4.230469 15.183594 4.226563 15.183594 C 4.230469 15.183594 4.257813 15.171875 4.257813 15.171875 L 4.289063 15.15625 L 4.320313 15.144531 C 4.320313 15.144531 9.53125 12.949219 14.828125 10.71875 C 17.480469 9.601563 20.152344 8.476563 22.207031 7.609375 C 24.261719 6.746094 25.78125 6.113281 25.867188 6.078125 C 25.949219 6.046875 25.910156 6.046875 25.96875 6.046875 Z "/>
                  </g>
                </svg>
              </a>
            </li>
            <li class="social-list__item">
              <div class="social-list__button-wrapper">
                <button class="social-list__button">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" width="35px" height="35px" fill="white">
                    <path style=" " d="M 3 6 L 3 26 L 12.585938 26 L 16 29.414063 L 19.414063 26 L 29 26 L 29 6 Z M 5 8 L 27 8 L 27 24 L 18.585938 24 L 16 26.585938 L 13.414063 24 L 5 24 Z M 9 11 L 9 13 L 23 13 L 23 11 Z M 9 15 L 9 17 L 23 17 L 23 15 Z M 9 19 L 9 21 L 19 21 L 19 19 Z "/>
                  </svg>
                </button>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="contacts">
        <h3 class="visually-hidden">Наши контакты:</h3>
        <ul class="contacts-list">
          <li class="contacts-list__item"><a href="skype:rokhaynt?chat" class="contacts-list__link">Skype: rokhaynt</a></li>
          <li class="contacts-list__item"><a href="tel:+380631348947" class="contacts-list__link">Tel: +38 063 134 89 47</a></li>
          <li class="contacts-list__item"><a href="mailto:halen54001@gmail.com?subject=From:destors.com" class="contacts-list__link">Email: halen54001@gmail.com</a></li>
        </ul>
        <p class="contacts__copyright">© 2018 All Rights Reserved </p>
      </section>
      <section class="modal">
        <h2 class="visually-hidden">Напишите нам</h2>
        <div class="overlay"></div>
        <div class="modal-wrapper">
          <form enctype="multipart/form-data" class="modal-form" id="fupForm">
            <fieldset class="modal-fieldset">
              <legend class="visually-hidden">Заполните простую форму и напишете нам</legend>
              <div class="modal-user-block">
                <div class="modal-user-column">
                  <label class="modal__label" for="name">Ваше имя:</label>
                  <input class="modal__input field-text" id="name" name="name" placeholder="Имя Фамилия" type="text" required minlength="2">
                </div>
                <div class="modal-user-column">
                  <label class="modal__label" for="email">Ваш e-mail:</label>
                  <input class="modal__input field-text" id="email" name="email" placeholder="email@example.com" type="email" required>
                </div>
              </div>
              <p>
                <label class="modal__label" for="massage">Текст письма:</label>
                <textarea class="modal__input modal__massage-input" cols="30" id="massage" name="massage" placeholder="В свободной форме" rows="3"></textarea>
              </p>
              <input type="file" class="form-control" id="file" name="file" required/>
              <input class="modal__submit-btn btn btn-danger submitBtn" type="submit" name="submit" value="Отправить">
              <h5 id="alert"></h5>
            </fieldset>
          </form>
          <button class="modal__close-btn" title="Закрыть поле формы">
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
              <path fill="white" d="M13.328 10.5l7.371-7.371a1.003 1.003 0 0 0 0-1.414L19.285.3a1.003 1.003 0 0 0-1.414 0L10.5 7.672 3.129.301a1.003 1.003 0 0 0-1.414 0L.301 1.715a1.003 1.003 0 0 0 0 1.414L7.672 10.5.301 17.871a1.003 1.003 0 0 0 0 1.414l1.415 1.414a1.003 1.003 0 0 0 1.414 0l7.371-7.371 7.371 7.371a1.003 1.003 0 0 0 1.414 0l1.414-1.414a1.003 1.003 0 0 0 0-1.414L13.328 10.5z"/>
            </svg>
          </button>
        </div>
      </section>
    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>