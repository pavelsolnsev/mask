<section class="main {{ main_class }}">
    {% if main or thanks %}
    {% include 'header/block.php' %}
    {% endif %}

    <div class="container">
        <div class="main__content">
            <div class="main__wrap">

                {% if main %}
                <div class="main__desc">
                    <?= $desc ?>
                </div>
                {% endif %}

                {% if main %}
                <h1 class="main__title title">
                    <?= $title ?>
                </h1>
                {% elif thanks %}
                <div class="main__title title">
                    Спасибо <span>за заявку</span>
                </div>
                {% endif %}

                {% if main %}
                <div class="main__subtitle">Загляни за&nbsp;границы<br> привычного обучения</div>
                {% elif thanks %}
                <div class="main__subtitle">Мы&nbsp;свяжемся с&nbsp;вами<br> в&nbsp;ближайшее время!</div>
                {% else %}
                <div class="main__subtitle">Когда каждый день - пятница</div>
                {% endif %}

                {% if thanks %}
                <div class="main__thanks">
                    Не хотите ждать?<br> Пишите нам:
                    <div>
                        <a href=""><img src="img/main/telega.svg" alt=""></a>
                        <a href=""><img src="img/main/wa.svg" alt=""></a>
                    </div>
                </div>
                {% endif %}


                {% if main %}
                <div class="main__button">
                    <a href="#popup-reg" class="main__button-left button"  data-fancybox>Заглянуть</a>
                    <a href="#popup-reg" class="main__button-right button" data-fancybox>Оставить заявку</a>
                </div>
                {% endif %}

                {% if not thanks %}
                <ul class="main__list">
                    <li><span>Погрузим</span><br> в&nbsp;практику<br> с&nbsp;1-ого курса</li>
                    <li><span>Дадим</span><br> государственный<br> диплом</li>
                    <li><span>Научим создавать</span><br> события с учётом реалий <br> текущей ситуации</li>
                </ul>
                {% endif %}
            </div>

            {% if main or thanks %}
            {% else %}
            <div class="main__block">
                <div class="main__form">
                    {{ form.form() }}
                </div>
                {% include 'footer/block.php' %}
            </div>
            {% endif %}

            {% if main %}
            <div class="main__contact">
                <a href="" class="main__contact-insta">
                    <img data-src="img/main/insta.svg" alt="" class="lazy">
                </a>
                <a href="tel:<?= $phone ?>" class="main__contact-icon">
                    <img data-src="img/main/phone.svg" alt="" class="lazy">
                </a>
                <a href="tel:<?= $phone ?>" class="main__contact-phone">8 800 100 3231</a>
            </div>
            {% endif %}

        </div>
    </div>
    {% if main or thanks %}
    <img data-src="img/main/piple.png" alt="" class="lazy main__img">
    {% endif %}
</section>