{% from './data.njk' import data as course %}
<section class="course" id="course">
    <div class="container">
        <div class="course__box" data-sticky-container>
            <div class="course__wrap-left">
                <div class="course__block sticky" data-margin-bottom="300" data-margin-top="140" data-sticky-class="is-sticky">
                    <div class="course__block-title title">Что <span>тебя<br> ждёт?</span></div>
                </div>
            </div>
            <div class="course__wrap-right">
                {% for item in course %}
                <div class="course__content">
                    <h3 class="course__content-title title">{{item.number | safe}}</span></h3>
                    {% for item in item.list %}
                    <ul class="course__content-list">
                        {% for item in item.content %}
                        <li>
                            <img src="img/course/{{item.icon | safe}}.svg" alt="" class="course__content-icon">
                            <p class="course__content-text">{{item.text | safe}}</p>
                        </li>
                        {% endfor %}
                    </ul>
                    {% endfor %}
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
</section>