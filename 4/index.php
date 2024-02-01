<?php
$text = <<<TXT
<p class="big">
    Год основания:<b>1589 г.</b> Волгоград отмечает день города в <b>2-е воскресенье сентября</b>. <br>В <b>2023 году</b> эта дата - <b>10 сентября</b>.
</p>
<p class="float">
    <img src="https://www.calend.ru/img/content_events/i0/961.jpg" alt="Волгоград" width="300" height="200" itemprop="image">
    <span class="caption gray">Скульптура «Родина-мать зовет!» входит в число семи чудес России (Фото: Art Konovalov, по лицензии shutterstock.com)</span>
</p>
<p>
    <i><b>Великая Отечественная война в истории города</b></i></p><p><i>Важнейшей операцией Советской Армии в Великой Отечественной войне стала <a href="https://www.calend.ru/holidays/0/0/1869/">Сталинградская битва</a> (17.07.1942 - 02.02.1943). Целью боевых действий советских войск являлись оборона  Сталинграда и разгром действовавшей на сталинградском направлении группировки противника. Победа советских войск в Сталинградской битве имела решающее значение для победы Советского Союза в Великой Отечественной войне.</i>
</p>
TXT;

// Разбиваем текст на слова без тегов
$wordsNoTags = preg_split('/\s+/', strip_tags($text));

// Разбиваем текст на слова с тегами
$wordsWithTags = preg_split('/\s+/', $text);

//перебор массива с тегами ищем в нем 29 слово без учета тегов
foreach ($wordsWithTags as $key => $value) {
    if ($value === $wordsNoTags[28]) {
        $my_key = $key;
    }
}
// Обрезаем до 29 слов
$trimmedText = implode(' ', array_slice($wordsWithTags, 0, $my_key+1));
//добавляем ...
$trimmedText .= '...';
//вывод текста
echo $trimmedText;
?>