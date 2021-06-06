<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин  Rim Market");
?>



    <div class="d-flex cat-title text-uppercase align-items-center mt-4">
                <div class="burger-orange me-2"></div>
                Каталог товаров
            </div>
            <div class="d-none d-xxl-flex">container-xxl 1400px</div>
            <div class="d-none d-xl-flex d-xxl-none">container-xl 1200px</div>
            <div class="d-none d-lg-flex d-xl-none">container-lg 992px</div>
            <div class="d-none d-md-flex d-lg-none">container-md 768px</div>
            <div class="d-none d-sm-flex d-md-none">container-sm 576px</div>
            <div class="d-flex d-sm-none">container mob 576px</div>

            <div class="row mt-4">
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="cat-block">
                        <div class="cat-orange"></div>
                        <div class="cat-block-content">
                            <div class="cat-subtitle text-uppercase raleway">
                                общестроительное направление
                            </div>
                            <? $APPLICATION->IncludeComponent("bitrix:menu", "main_page_four_blocks", array(
                                "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                                "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                                "DELAY" => "N",    // Откладывать выполнение шаблона меню
                                "MAX_LEVEL" => "1",    // Уровень вложенности меню
                                "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                                    0 => "",
                                ),
                                "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                                "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                                "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                                "ROOT_MENU_TYPE" => "stroy_menu",    // Тип меню для первого уровня
                                "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                            ),
                                false
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="cat-block">
                        <div class="cat-orange"></div>
                        <div class="cat-block-content">
                            <div class="cat-subtitle text-uppercase raleway">
                                инженерное направление
                            </div>
                            <? $APPLICATION->IncludeComponent("bitrix:menu", "main_page_four_blocks", array(
                                "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                                "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                                "DELAY" => "N",    // Откладывать выполнение шаблона меню
                                "MAX_LEVEL" => "1",    // Уровень вложенности меню
                                "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                                    0 => "",
                                ),
                                "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                                "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                                "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                                "ROOT_MENU_TYPE" => "stroy_menu",    // Тип меню для первого уровня
                                "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                            ),
                                false
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="cat-block">
                        <div class="cat-orange"></div>
                        <div class="cat-block-content">
                            <div class="cat-subtitle text-uppercase raleway">
                                внутреннее заполнение
                            </div>
                            <? $APPLICATION->IncludeComponent("bitrix:menu", "main_page_four_blocks", array(
                                "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                                "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                                "DELAY" => "N",    // Откладывать выполнение шаблона меню
                                "MAX_LEVEL" => "1",    // Уровень вложенности меню
                                "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                                    0 => "",
                                ),
                                "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                                "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                                "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                                "ROOT_MENU_TYPE" => "stroy_menu",    // Тип меню для первого уровня
                                "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                            ),
                                false
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="cat-block">
                        <div class="cat-orange"></div>
                        <div class="cat-block-content">
                            <div class="cat-subtitle text-uppercase raleway">
                                Система управления умным домом
                            </div>
                            <? $APPLICATION->IncludeComponent("bitrix:menu", "main_page_four_blocks", array(
                                "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                                "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                                "DELAY" => "N",    // Откладывать выполнение шаблона меню
                                "MAX_LEVEL" => "1",    // Уровень вложенности меню
                                "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                                    0 => "",
                                ),
                                "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                                "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                                "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                                "ROOT_MENU_TYPE" => "stroy_menu",    // Тип меню для первого уровня
                                "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                            ),
                                false
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex cat-title align-items-center my-4">
                <div class="top-sale me-2"></div>
                Топ продаж
            </div>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/top-sale.php"
    )
);?>




            <div
                    class="
            row row-cols-sm-2 row-cols-lg-3 row-cols-xl-5 row-cols-auto
            px-2
          "
            >
                <div class="col px-0">
                    <div class="item-card text-center border">
                        <div class="item-card-img mx-3 py-3">
                            <a href="#">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/item.png" alt="item"/>
                            </a>
                        </div>
                        <div class="item-name mt-3 mb-5">
                            <a class="text-dark text-mont-700 text-decoration-none" href="#"
                            >Вертикальные котлы RIM от 29 до 348 КВТ</a
                            >
                        </div>
                        <div class="item-price text-mont-700 pb-3">
                <span class="price-title">84 000 </span
                ><span class="rim-orange">руб./шт.</span>
                        </div>
                        <div class="item-sku grey-gradient rounded py-1 text-mont-700">
                            код товара: RAL9016
                        </div>
                        <div class="input-group grey-gradient my-2">
                            <button type="button" class="btn rim-orange">-</button>
                            <input
                                    type="text"
                                    class="form-control text-center grey-gradient text-mont-700"
                                    value="10"
                            />

                            <button type="button" class="btn rim-orange">+</button>
                        </div>
                        <div
                                class="
                  cart-btn
                  text-uppercase
                  rim-bg
                  text-white text-mont-700
                  py-2
                  rounded
                "
                        >
                            <a class="text-white text-decoration-none" href="#"
                            >В корзину</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col px-0">
                    <div class="item-card text-center border">
                        <div class="item-card-img mx-3 py-3">
                            <a href="#">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/item.png" alt="item"/>
                            </a>
                        </div>
                        <div class="item-name mt-3 mb-5">
                            <a class="text-dark text-mont-700 text-decoration-none" href="#"
                            >Вертикальные котлы RIM от 29 до 348 КВТ</a
                            >
                        </div>
                        <div class="item-price text-mont-700 pb-3">
                <span class="price-title">84 000 </span
                ><span class="rim-orange">руб./шт.</span>
                        </div>
                        <div class="item-sku grey-gradient rounded py-1 text-mont-700">
                            код товара: RAL9016
                        </div>
                        <div class="input-group grey-gradient my-2">
                            <button type="button" class="btn rim-orange">-</button>
                            <input
                                    type="text"
                                    class="form-control text-center grey-gradient text-mont-700"
                                    value="10"
                            />

                            <button type="button" class="btn rim-orange">+</button>
                        </div>
                        <div
                                class="
                  cart-btn
                  text-uppercase
                  rim-bg
                  text-white text-mont-700
                  py-2
                  rounded
                "
                        >
                            <a class="text-white text-decoration-none" href="#"
                            >В корзину</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col px-0">
                    <div class="item-card text-center border">
                        <div class="item-card-img mx-3 py-3">
                            <a href="#">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/item.png" alt="item"/>
                            </a>
                        </div>
                        <div class="item-name mt-3 mb-5">
                            <a class="text-dark text-mont-700 text-decoration-none" href="#"
                            >Вертикальные котлы RIM от 29 до 348 КВТ</a
                            >
                        </div>
                        <div class="item-price text-mont-700 pb-3">
                <span class="price-title">84 000 </span
                ><span class="rim-orange">руб./шт.</span>
                        </div>
                        <div class="item-sku grey-gradient rounded py-1 text-mont-700">
                            код товара: RAL9016
                        </div>
                        <div class="input-group grey-gradient my-2">
                            <button type="button" class="btn rim-orange">-</button>
                            <input
                                    type="text"
                                    class="form-control text-center grey-gradient text-mont-700"
                                    value="10"
                            />

                            <button type="button" class="btn rim-orange">+</button>
                        </div>
                        <div
                                class="
                  cart-btn
                  text-uppercase
                  rim-bg
                  text-white text-mont-700
                  py-2
                  rounded
                "
                        >
                            <a class="text-white text-decoration-none" href="#"
                            >В корзину</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col px-0">
                    <div class="item-card text-center border">
                        <div class="item-card-img mx-3 py-3">
                            <a href="#">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/item.png" alt="item"/>
                            </a>
                        </div>
                        <div class="item-name mt-3 mb-5">
                            <a class="text-dark text-mont-700 text-decoration-none" href="#"
                            >Вертикальные котлы RIM от 29 до 348 КВТ</a
                            >
                        </div>
                        <div class="item-price text-mont-700 pb-3">
                <span class="price-title">84 000 </span
                ><span class="rim-orange">руб./шт.</span>
                        </div>
                        <div class="item-sku grey-gradient rounded py-1 text-mont-700">
                            код товара: RAL9016
                        </div>
                        <div class="input-group grey-gradient my-2">
                            <button type="button" class="btn rim-orange">-</button>
                            <input
                                    type="text"
                                    class="form-control text-center grey-gradient text-mont-700"
                                    value="10"
                            />

                            <button type="button" class="btn rim-orange">+</button>
                        </div>
                        <div
                                class="
                  cart-btn
                  text-uppercase
                  rim-bg
                  text-white text-mont-700
                  py-2
                  rounded
                "
                        >
                            <a class="text-white text-decoration-none" href="#"
                            >В корзину</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col px-0">
                    <div class="item-card text-center border">
                        <div class="item-card-img mx-3 py-3">
                            <a href="#">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/item.png" alt="item"/>
                            </a>
                        </div>
                        <div class="item-name mt-3 mb-5">
                            <a class="text-dark text-mont-700 text-decoration-none" href="#"
                            >Вертикальные котлы RIM от 29 до 348 КВТ</a
                            >
                        </div>
                        <div class="item-price text-mont-700 pb-3">
                <span class="price-title">84 000 </span
                ><span class="rim-orange">руб./шт.</span>
                        </div>
                        <div class="item-sku grey-gradient rounded py-1 text-mont-700">
                            код товара: RAL9016
                        </div>
                        <div class="input-group grey-gradient my-2">
                            <button type="button" class="btn rim-orange">-</button>
                            <input
                                    type="text"
                                    class="form-control text-center grey-gradient text-mont-700"
                                    value="10"
                            />

                            <button type="button" class="btn rim-orange">+</button>
                        </div>
                        <div
                                class="
                  cart-btn
                  text-uppercase
                  rim-bg
                  text-white text-mont-700
                  py-2
                  rounded
                "
                        >
                            <a class="text-white text-decoration-none" href="#"
                            >В корзину</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col px-0">
                    <div class="item-card text-center border">
                        <div class="item-card-img mx-3 py-3">
                            <a href="#">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/item.png" alt="item"/>
                            </a>
                        </div>
                        <div class="item-name mt-3 mb-5">
                            <a class="text-dark text-mont-700 text-decoration-none" href="#"
                            >Вертикальные котлы RIM от 29 до 348 КВТ</a
                            >
                        </div>
                        <div class="item-price text-mont-700 pb-3">
                <span class="price-title">84 000 </span
                ><span class="rim-orange">руб./шт.</span>
                        </div>
                        <div class="item-sku grey-gradient rounded py-1 text-mont-700">
                            код товара: RAL9016
                        </div>
                        <div class="input-group grey-gradient my-2">
                            <button type="button" class="btn rim-orange">-</button>
                            <input
                                    type="text"
                                    class="form-control text-center grey-gradient text-mont-700"
                                    value="10"
                            />

                            <button type="button" class="btn rim-orange">+</button>
                        </div>
                        <div
                                class="
                  cart-btn
                  text-uppercase
                  rim-bg
                  text-white text-mont-700
                  py-2
                  rounded
                "
                        >
                            <a class="text-white text-decoration-none" href="#"
                            >В корзину</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col px-0">
                    <div class="item-card text-center border">
                        <div class="item-card-img mx-3 py-3">
                            <a href="#">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/item.png" alt="item"/>
                            </a>
                        </div>
                        <div class="item-name mt-3 mb-5">
                            <a class="text-dark text-mont-700 text-decoration-none" href="#"
                            >Вертикальные котлы RIM от 29 до 348 КВТ</a
                            >
                        </div>
                        <div class="item-price text-mont-700 pb-3">
                <span class="price-title">84 000 </span
                ><span class="rim-orange">руб./шт.</span>
                        </div>
                        <div class="item-sku grey-gradient rounded py-1 text-mont-700">
                            код товара: RAL9016
                        </div>
                        <div class="input-group grey-gradient my-2">
                            <button type="button" class="btn rim-orange">-</button>
                            <input
                                    type="text"
                                    class="form-control text-center grey-gradient text-mont-700"
                                    value="10"
                            />

                            <button type="button" class="btn rim-orange">+</button>
                        </div>
                        <div
                                class="
                  cart-btn
                  text-uppercase
                  rim-bg
                  text-white text-mont-700
                  py-2
                  rounded
                "
                        >
                            <a class="text-white text-decoration-none" href="#"
                            >В корзину</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col px-0">
                    <div class="item-card text-center border">
                        <div class="item-card-img mx-3 py-3">
                            <a href="#">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/item.png" alt="item"/>
                            </a>
                        </div>
                        <div class="item-name mt-3 mb-5">
                            <a class="text-dark text-mont-700 text-decoration-none" href="#"
                            >Вертикальные котлы RIM от 29 до 348 КВТ</a
                            >
                        </div>
                        <div class="item-price text-mont-700 pb-3">
                <span class="price-title">84 000 </span
                ><span class="rim-orange">руб./шт.</span>
                        </div>
                        <div class="item-sku grey-gradient rounded py-1 text-mont-700">
                            код товара: RAL9016
                        </div>
                        <div class="input-group grey-gradient my-2">
                            <button type="button" class="btn rim-orange">-</button>
                            <input
                                    type="text"
                                    class="form-control text-center grey-gradient text-mont-700"
                                    value="10"
                            />

                            <button type="button" class="btn rim-orange">+</button>
                        </div>
                        <div
                                class="
                  cart-btn
                  text-uppercase
                  rim-bg
                  text-white text-mont-700
                  py-2
                  rounded
                "
                        >
                            <a class="text-white text-decoration-none" href="#"
                            >В корзину</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col px-0">
                    <div class="item-card text-center border">
                        <div class="item-card-img mx-3 py-3">
                            <a href="#">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/item.png" alt="item"/>
                            </a>
                        </div>
                        <div class="item-name mt-3 mb-5">
                            <a class="text-dark text-mont-700 text-decoration-none" href="#"
                            >Вертикальные котлы RIM от 29 до 348 КВТ</a
                            >
                        </div>
                        <div class="item-price text-mont-700 pb-3">
                <span class="price-title">84 000 </span
                ><span class="rim-orange">руб./шт.</span>
                        </div>
                        <div class="item-sku grey-gradient rounded py-1 text-mont-700">
                            код товара: RAL9016
                        </div>
                        <div class="input-group grey-gradient my-2">
                            <button type="button" class="btn rim-orange">-</button>
                            <input
                                    type="text"
                                    class="form-control text-center grey-gradient text-mont-700"
                                    value="10"
                            />

                            <button type="button" class="btn rim-orange">+</button>
                        </div>
                        <div
                                class="
                  cart-btn
                  text-uppercase
                  rim-bg
                  text-white text-mont-700
                  py-2
                  rounded
                "
                        >
                            <a class="text-white text-decoration-none" href="#"
                            >В корзину</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col px-0">
                    <div class="item-card text-center border">
                        <div class="item-card-img mx-3 py-3">
                            <a href="#">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/item.png" alt="item"/>
                            </a>
                        </div>
                        <div class="item-name mt-3 mb-5">
                            <a class="text-dark text-mont-700 text-decoration-none" href="#"
                            >Вертикальные котлы RIM от 29 до 348 КВТ</a
                            >
                        </div>
                        <div class="item-price text-mont-700 pb-3">
                <span class="price-title">84 000 </span
                ><span class="rim-orange">руб./шт.</span>
                        </div>
                        <div class="item-sku grey-gradient rounded py-1 text-mont-700">
                            код товара: RAL9016
                        </div>
                        <div class="input-group grey-gradient my-2">
                            <button type="button" class="btn rim-orange">-</button>
                            <input
                                    type="text"
                                    class="form-control text-center grey-gradient text-mont-700"
                                    value="10"
                            />

                            <button type="button" class="btn rim-orange">+</button>
                        </div>
                        <div
                                class="
                  cart-btn
                  text-uppercase
                  rim-bg
                  text-white text-mont-700
                  py-2
                  rounded
                "
                        >
                            <a class="text-white text-decoration-none" href="#"
                            >В корзину</a
                            >
                        </div>
                    </div>
                </div>
            </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>