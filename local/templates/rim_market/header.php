<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
    />
    <?php
    $APPLICATION->ShowHead();
    Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/styles.css");
    Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");

    ?>
    <title>Rim Market</title>
</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
<div class="header shadow-sm">
    <div class="container">
        <div class="row">
            <div class=" d-flex header-top align-items-center justify-content-between justify-content-lg-start ">
                <div class="top-logo me-lg-3 me-xxl-5">
                    <a href="/">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.svg" alt="logo"/>
                    </a>
                </div>
                <div class="d-lg-flex d-none top-menu">
                    <div class="request me-lg-3 ps-md-0 ps-xl-40px">
                        <a class="text-decoration-none text-dark" href="#">Заявка на рассчет</a>
                    </div>
                    <div class="contacts me-lg-3 ps-md-0 ps-xl-40px">Контакты</div>
                    <div class="delivery me-lg-3 ps-md-0 ps-xl-40px">Доставка</div>
                    <div class="email-link ps-md-0 ps-xl-40px">
                        zakaz@rimmarket.ru
                    </div>
                </div>
                <div class="d-lg-block d-none phone-block ms-auto text-end">
                    <div class="small arial">Ежедневно с 9:00 до 21:00</div>
                    <div class="fs-4 fw-bold"><a class="text-dark text-decoration-none" href="tel:+78003339383">8(800) 333-93-83</a></div>
                    <div class="rim-orange arial">Заказать обратный звонок</div>
                </div>
                <div class="d-flex d-lg-none">
                    <div class="d-flex">
                        <div class="fs-5 fw-bold me-md-5 me-2 phone-mobile">
                            <a class="text-decoration-none text-dark" href="tel:+8003339383" >
                                <span class="d-none d-sm-block">8(800) 333-93-83 </span>
                                <div class="d-flex call-mobile me-2 d-sm-none"></div>
                            </a>
                        </div>
                        <div class="d-flex search-mobile me-3"></div>
                        <a class="d-flex cart-icon-mobile me-3" href="#"></a>
                    </div>
                    <!-- Button trigger modal -->
                    <div data-bs-toggle="modal" data-bs-target="#menuModal">
                        <div class="burger-menu"></div>
                    </div>
                    <!-- Modal -->
                    <div
                            class="modal fade"
                            id="menuModal"
                            tabindex="-1"
                            aria-labelledby="exampleModalLabel"
                            aria-hidden="true"
                    >
                        <div
                                class="modal-dialog modal-dialog-scrollable modal-fullscreen"
                        >
                            <div class="modal-content mobile-menu-body">
                                <div class="modal-header mt-4">
                                    <div class="btn-close" data-bs-dismiss="modal"></div>
                                </div>
                                <div class="modal-body">
                                    <!-- menu mobile -->
                                    <div class="mobile-catalog">
                                        <div class="time-phone mb-4">
                                            <div class="my-2 small arial">
                                                Ежедневно с 9:00 до 21:00
                                            </div>
                                            <div class="my-2 fs-5 fw-bold">
                                                8(800) 333-93-83</div>
                                            <div class="my-2 arial">Заказать обратный звонок</div>
                                        </div>
                                        <ul class="mob-list list-unstyled mb-5">
                                            <li class="d-flex position-relative mob-list-item flex-column">
                                                <a href="#">Главная</a>
                                            </li>
                                            <li class="d-flex position-relative mob-list-item flex-column">
                                                <a href="#">Личный кабинет</a>
                                            </li>
                                            <li class="d-flex position-relative mob-list-item flex-column">
                                                <a href="#">Корзина</a>
                                            </li>
                                            <li class="d-flex position-relative mob-list-item flex-column">
                                                <a href="#">Контакты</a>
                                            </li>
                                        </ul>
                                        <div class=" mobile-meny-title cat-subtitle text-uppercase raleway">
                                            Каталог товаров
                                        </div>
                                        <ul class="mob-list list-unstyled">
                                            <li class="d-flex position-relative mob-list-item flex-column ">
                                                <a
                                                        class="mob-list-item-link"
                                                        data-bs-toggle="collapse"
                                                        href="#cat1"
                                                        role="button"
                                                        aria-expanded="false"
                                                >
                                                    <img
                                                            class="cat-menu-icon"
                                                            src="<?= SITE_TEMPLATE_PATH ?>/img/menu-icon1.svg"
                                                            alt="icon"
                                                    />
                                                    Стройматериалы
                                                </a>
                                                <div class="collapse" id="cat1">
                                                    Стройматериалы Столярные изделия Изоляция
                                                    Отделочные материалы Сантехника, водоснабжение,
                                                    канализация Климат и отопление Электрика Освещение
                                                    Окна, двери, лестницы
                                                </div>
                                            </li>
                                            <li
                                                    class="
                                          d-flex
                                          position-relative
                                          mob-list-item
                                          flex-column
                                          "
                                            >
                                                <a
                                                        class="mob-list-item-link"
                                                        data-bs-toggle="collapse"
                                                        href="#cat2"
                                                        role="button"
                                                        aria-expanded="false"
                                                >
                                                    <img
                                                            class="cat-menu-icon"
                                                            src="<?= SITE_TEMPLATE_PATH ?>/img/menu-icon2.svg"
                                                            alt="icon"
                                                    />
                                                    Столярные изделия
                                                </a>
                                                <div class="collapse" id="cat2">
                                                    Отделочные материалы Сантехника, водоснабжение,
                                                    канализация Климат и отопление Электрика Освещение
                                                    Окна, двери, лестницы
                                                </div>
                                            </li>
                                            <li
                                                    class="
                                          d-flex
                                          position-relative
                                          mob-list-item
                                          flex-column
                                          "
                                            >
                                                <a
                                                        class="mob-list-item-link"
                                                        data-bs-toggle="collapse"
                                                        href="#cat3"
                                                        role="button"
                                                        aria-expanded="false"
                                                >
                                                    <img
                                                            class="cat-menu-icon"
                                                            src="<?= SITE_TEMPLATE_PATH ?>/img/menu-icon3.svg"
                                                            alt="icon"
                                                    />
                                                    Изоляция
                                                </a>
                                                <div class="collapse" id="cat3">
                                                    Стройматериалы Столярные изделия Изоляция
                                                    Отделочные материалы Сантехника, водоснабжение,
                                                    канализация Климат и отопление Электрика Освещение
                                                    Окна, двери, лестницы
                                                </div>
                                            </li>
                                            <li
                                                    class="
                                          d-flex
                                          position-relative
                                          mob-list-item
                                          flex-column
                                          "
                                            >
                                                <a
                                                        data-bs-toggle="collapse"
                                                        href="#cat4"
                                                        role="button"
                                                        aria-expanded="false"
                                                        aria-controls="cat4"
                                                        class="text-decoration-none"
                                                >
                                                    <img
                                                            class="cat-menu-icon"
                                                            src="<?= SITE_TEMPLATE_PATH ?>/img/menu-icon4.svg"
                                                            alt="icon"
                                                    />
                                                    Отделочные материалы
                                                </a>
                                                <div class="collapse" id="cat4">
                                                    Стройматериалы Столярные изделия Изоляция
                                                    Отделочные материалы Сантехника, водоснабжение,
                                                    канализация Климат и отопление Электрика Освещение
                                                    Окна, двери, лестницы
                                                </div>
                                            </li>
                                            <li
                                                    class="
                                          d-flex
                                          position-relative
                                          mob-list-item
                                          flex-column
                                          "
                                            >
                                                <a
                                                        class="text-decoration-none"
                                                        data-bs-toggle="collapse"
                                                        href="#cat5"
                                                        role="button"
                                                        aria-expanded="false"
                                                >
                                                    <img
                                                            class="cat-menu-icon"
                                                            src="<?= SITE_TEMPLATE_PATH ?>/img/menu-icon5.svg"
                                                            alt="icon"
                                                    />
                                                    Сантехника, водоснабжение, канализация
                                                </a>
                                                <div class="collapse" id="cat5">
                                                    Стройматериалы Столярные изделия Изоляция
                                                    Отделочные материалы Сантехника, водоснабжение,
                                                    канализация Климат и отопление Электрика Освещение
                                                    Окна, двери, лестницы
                                                </div>
                                            </li>
                                            <li
                                                    class="
                                          d-flex
                                          position-relative
                                          mob-list-item
                                          flex-column
                                          "
                                            >
                                                <a
                                                        class="text-decoration-none"
                                                        data-bs-toggle="collapse"
                                                        href="#cat6"
                                                        role="button"
                                                        aria-expanded="false"
                                                >
                                                    <img
                                                            class="cat-menu-icon"
                                                            src="<?= SITE_TEMPLATE_PATH ?>/img/menu-icon6.svg"
                                                            alt="icon"
                                                    />
                                                    Климат и отопление
                                                </a>
                                                <div class="collapse" id="cat6">
                                                    Стройматериалы Столярные изделия Изоляция
                                                    Отделочные материалы Сантехника, водоснабжение,
                                                    канализация Климат и отопление Электрика Освещение
                                                    Окна, двери, лестницы
                                                </div>
                                            </li>
                                            <li
                                                    class="
                                          d-flex
                                          position-relative
                                          mob-list-item
                                          flex-column
                                          "
                                            >
                                                <a
                                                        class="text-decoration-none"
                                                        data-bs-toggle="collapse"
                                                        href="#cat7"
                                                        role="button"
                                                        aria-expanded="false"
                                                >
                                                    <img
                                                            class="cat-menu-icon"
                                                            src="<?= SITE_TEMPLATE_PATH ?>/img/menu-icon7.svg"
                                                            alt="icon"
                                                    />
                                                    Электрика Освещение
                                                </a>
                                                <div class="collapse" id="cat7">
                                                    Стройматериалы Столярные изделия Изоляция
                                                    Отделочные материалы Сантехника, водоснабжение,
                                                    канализация Климат и отопление Электрика Освещение
                                                    Окна, двери, лестницы
                                                </div>
                                            </li>
                                            <li
                                                    class="
                                          d-flex
                                          position-relative
                                          mob-list-item
                                          flex-column
                                          "
                                            >
                                                <a
                                                        class="text-decoration-none"
                                                        data-bs-toggle="collapse"
                                                        href="#cat8"
                                                        role="button"
                                                        aria-expanded="false"
                                                >
                                                    <img
                                                            class="cat-menu-icon"
                                                            src="<?= SITE_TEMPLATE_PATH ?>/img/menu-icon8.svg"
                                                            alt="icon"
                                                    />
                                                    Окна, двери, лестницы
                                                </a>
                                                <div class="collapse" id="cat8">
                                                    Стройматериалы Столярные изделия Изоляция
                                                    Отделочные материалы Сантехника, водоснабжение,
                                                    канализация Климат и отопление Электрика Освещение
                                                    Окна, двери, лестницы
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- menu mobile -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
            class="d-none grey-gradient grey-menu-bg align-items-center d-md-flex"
    >
        <div class="container">
            <div class="d-flex">
                <div class="dropdown me-4">
                    <button
                            class="btn rim-bg dropdown-toggle d-flex text-white"
                            type="button"
                            id="dropdownMenuButton1"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                    >
                        <div class="d-flex">
                            <div class="burger-icon"></div>
                            <div class="burger-line bg-white"></div>
                        </div>
                        Каталог товаров
                    </button>
                    <ul
                            class="dropdown-menu cat-ul-menu py-0 rounded-0"
                            aria-labelledby="dropdownMenuButton1"
                    >
                        <li class="cat-menu-li py-1 d-flex align-items-center">
                            <img
                                    class="cat-menu-icon"
                                    src="<?= SITE_TEMPLATE_PATH ?>/img/menu-icon1.svg"
                                    alt="icon"
                            />
                            <a class="dropdown-item fw-bold" href="#"> Стройматериалы </a>
                        </li>
                        <li class="cat-menu-li py-1 d-flex align-items-center">
                            <img
                                    class="cat-menu-icon"
                                    src="<?= SITE_TEMPLATE_PATH ?>/img/menu-icon2.svg"
                                    alt="icon"
                            />
                            <a class="dropdown-item fw-bold" href="#">
                                Столярные изделия
                            </a>
                            <ul class="submenu dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Submenu item 1</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Submenu item 2</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                    >Submenu item 3 &raquo;
                                    </a>
                                    <ul class="submenu dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">Multi level 1</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Multi level 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Submenu item 4</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Submenu item 5</a>
                                </li>
                            </ul>
                        </li>
                        <li class="cat-menu-li py-1 d-flex align-items-center">
                            <img
                                    class="cat-menu-icon"
                                    src="<?= SITE_TEMPLATE_PATH ?>/img/menu-icon3.svg"
                                    alt="icon"
                            />
                            <a class="dropdown-item fw-bold" href="#">Изоляция</a>
                        </li>
                        <li class="cat-menu-li py-1 d-flex align-items-center">
                            <img
                                    class="cat-menu-icon"
                                    src="<?= SITE_TEMPLATE_PATH ?>/img/menu-icon4.svg"
                                    alt="icon"
                            />
                            <a class="dropdown-item fw-bold" href="#"
                            >Отделочные материалы</a
                            >
                        </li>
                        <li class="cat-menu-li py-1 d-flex align-items-center">
                            <img
                                    class="cat-menu-icon"
                                    src="<?= SITE_TEMPLATE_PATH ?>/img/menu-icon5.svg"
                                    alt="icon"
                            />
                            <a class="dropdown-item fw-bold" href="#"
                            >Сантехника, водоснабжение, канализация</a
                            >
                        </li>
                        <li class="cat-menu-li py-1 d-flex align-items-center">
                            <img
                                    class="cat-menu-icon"
                                    src="<?= SITE_TEMPLATE_PATH ?>/img/menu-icon6.svg"
                                    alt="icon"
                            />
                            <a class="dropdown-item fw-bold" href="#"
                            >Климат и отопление</a
                            >
                        </li>
                        <li class="cat-menu-li py-1 d-flex align-items-center">
                            <img
                                    class="cat-menu-icon"
                                    src="<?= SITE_TEMPLATE_PATH ?>/img/menu-icon7.svg"
                                    alt="icon"
                            />
                            <a class="dropdown-item fw-bold" href="#">Электрика</a>
                        </li>
                        <li class="cat-menu-li py-1 d-flex align-items-center">
                            <img
                                    class="cat-menu-icon"
                                    src="<?= SITE_TEMPLATE_PATH ?>/img/menu-icon8.svg"
                                    alt="icon"
                            />
                            <a class="dropdown-item fw-bold" href="#">Освещение</a>
                        </li>
                        <li class="cat-menu-li py-1 d-flex align-items-center">
                            <img
                                    class="cat-menu-icon"
                                    src="<?= SITE_TEMPLATE_PATH ?>/img/menu-icon9.svg"
                                    alt="icon"
                            />
                            <a class="dropdown-item fw-bold" href="#"
                            >Окна, двери, лестницы</a
                            >
                        </li>
                        <li class="cat-menu-li offers py-1 d-flex align-items-center">
                            <a class="dropdown-item fw-bold" href="#">Акции</a>
                        </li>
                    </ul>
                </div>
                <div class="search-block me-4">
                    <form class="d-flex position-relative">
                        <img
                                class="position-absolute end-0 search-icon"
                                src="<?= SITE_TEMPLATE_PATH ?>/img/search-icon.svg"
                                alt="search"
                        />
                        <input
                                class="form-control me-lg-2 me-3 py-2 rim-border"
                                type="search"
                                placeholder="Более 3000 товаров"
                                aria-label="Search"
                        />
                    </form>
                </div>
                <div class="d-flex user-area align-items-center">
                    <div class="account me-4 w-10">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/lk.php"
                            )
                        );?>
                    </div>
                    <div class="fav">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/fav.php"
                            )
                        );?>
                    </div>
                </div>
                <div class="cart-button ms-auto">
                    <button
                            class="btn d-flex rim-orange bg-white rim-border"
                            type="button"
                    >
                        <div class="d-flex">
                            <div class="cart-icon"></div>
                            <div class="burger-line rim-bg"></div>
                        </div>
                        Корзина
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header end -->
<div class="catalog">
    <div class="container">