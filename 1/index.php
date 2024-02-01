<?php
    echo '<style>table, td, tr{border: 1px solid black}</style>';
    $data = [
        ['Иванов', 'Математика', 5],
    
        ['Иванов', 'Математика', 4],
    
        ['Иванов', 'Математика', 5],
    
        ['Петров', 'Математика', 5],
    
        ['Сидоров', 'Физика', 4],
    
        ['Иванов', 'Физика', 4],
    
        ['Петров', 'ОБЖ', 4],
    
    ];
    $mas = [];//создаем массив для сбора данных в одно целое
    
    foreach ($data as $row){//перебираем все элементы массива дата
        $child = $row[0];//ученики
        $sub = $row[1];//предметы
        $score = $row[2];//баллы

        if (!(array_key_exists($child,$mas))){//если нет ученика в массиве добавляем его
            $mas[$child] = [];
        }

        if (!(array_key_exists($sub,$mas[$child]))){//если нет данного предмета у ученика добавляем его и балл к нему
            $mas[$child][$sub] = 0;
        }

        $mas[$child][$sub] = $mas[$child][$sub] + $score; //прибаляем баллы у предметов 
        }

    // Получаем список предметов и школьников
    $subjects = array_unique(array_column($data, 1));
    $students = array_unique(array_column($data, 0));
    // Сортируем предметы и школьников
    sort($subjects);
    sort($students);

    // Выводим данные
    echo '<table>';
    echo '<tr><td></td>';
    foreach ($subjects as $subject) {
        echo '<td>' . $subject . '</td>';
    }
    echo '</tr>';

    foreach ($students as $student) {
        echo '<tr><td>' . $student . '</td>';
        foreach ($subjects as $subject) {
            echo '<td>' . ($mas[$student][$subject] ?? '') . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
?>