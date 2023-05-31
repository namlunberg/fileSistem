<?php
header("Content-Type: text/plain");
// работа с помощью функции file_get_contents и file_put_contents

$inner = file_put_contents('./test.txt', 'ogurchik');
$result = file_get_contents('./test.txt');
// echo $result;

unlink('./test.txt');

file_put_contents('./test.txt', '12345');
file_put_contents('./new.txt', '');
$array = ['1.txt', '2.txt', '3.txt'];
foreach ($array as $value) {
    file_put_contents($value, '123');
}

// работа с помощью функции file_get_contents и file_put_contents


// Чтение и запись файлов

$handle = fopen('./test.txt', 'a');
fwrite($handle, '!');
fclose($handle);

$fileName = './count.txt';

if (file_exists($fileName)) {
    $num = file_get_contents($fileName);
    $num++;

    $handle = fopen($fileName, 'w');
    fwrite($handle, $num);
    fclose($handle);

    echo $num;
} else {
    $num = 0;
    file_put_contents($fileName, $num);
}

echo "\n\n";

$result = '';
foreach ($array as $value) {
    $result .= file_get_contents($value);
}

file_put_contents('./new.txt', $result);

foreach ($array as $value) {
    $handle = fopen($value, 'a+');
    fwrite($handle, '!');
    fclose($handle);
}
// Чтение и запись файлов

// переименовывание файлов

$pastName = './old.txt';
file_put_contents($pastName, '');
$newName = './new1.txt';
rename($pastName, $newName);

// переименовывание файлов

// Перемещение файлов

$dirName = './dir';
$dirName1 = './dir1';
$dirName2 = './dir2';
$fileName = './test.txt';
rename($fileName, ($dirName . $fileName));

$testInDir =  $dirName1 . $fileName;

file_put_contents($testInDir, '');
rename($testInDir, ($dirName2 . $fileName));

// Перемещение файлов

// Копия файла

$fileCopyName = './copy.txt';
copy(($dirName . $fileName), $fileCopyName);

$testCopy = './test1.txt';
file_put_contents($testCopy, '');
copy($testCopy, ($dirName . $testCopy));

// Копия файла


// Удаление файла

unlink($testCopy);

foreach ($array as $value) {
    unlink($value);
}

// Удаление файла

// Проверка существования файла

$testCreate = './test2.txt';

if (file_exists($testCreate)) {
    unlink($testCreate);
    echo "не лежит" . PHP_EOL;
} else {
    file_put_contents($testCreate, '');
    echo "лежит" . PHP_EOL;
}

$arrayCreate = ['1c.txt', '2c.txt', '3c.txt'];

foreach ($arrayCreate as $value) {
    if (file_exists($value)) {
        unlink($value);
        echo $value . " не существует" . PHP_EOL;
    } else {
        file_put_contents($value, '');
        echo $value . " существует" . PHP_EOL;
    }
}

// Проверка существования файла

// Определение размера файла

$testSize = './test3.txt';
file_put_contents($testSize, 'зщкшопщшцозуклоооооощзэждкцьлпэьтмшлфватимждлывтьм\эЫВЬЛАИАТИЛДЫТПЩЖОЫТАВЛДЫОИ АКИПМАПМИШГЛАПИЙНШЩРОТх9опкзщкеортзозкетэзалиэылатиэывлатиэдылватиждыволаитлоыаилофвамтдлаотмфыовадылаирылоаимлыофваипыатмпфэвлыатироатдфыжавопиолдавыофлдатижоыфаитжыфвдаолтилдоыавитыоадвиоыиаотиаыодтавиждытавиыаывалддлывадлаыв');
$size = filesize($testSize);
$size = $size/1024;
$size = round($size, 3);
echo $size . " Кбайтов" . PHP_EOL;

$img = './news.png';
$size = filesize($img);
$size = $size/1024;
$size = $size/1024;
$size = round($size, 1);
echo $size . " Мбайтов" . PHP_EOL;

// Определение размера файла

// Работа с переносом строки и PHP_EOL

$handle = file_get_contents('./testEnter.txt');
$array = explode(PHP_EOL, $handle);

$testEmlode = './testEmplode.txt';
unlink($testEmlode);
foreach ($array as $value) {
    $handle = fopen($testEmlode, 'a+');
    fwrite($handle, ($value . PHP_EOL));
    fclose($handle);
}

// Работа с переносом строки и PHP_EOL


// Получение массива строк файла с помощью функции file

$fileName = './testArray.txt';

$array = file($fileName);
$arrayResult = array_sum($array);
var_dump($arrayResult);


// вот здесь косяк, надо посмотреть, не могу сам допереть
$arrayCount = count($array);
$arraySingle = array_slice($array, 0, ($arrayCount - 1));
$arraySingleSum = array_sum($arraySingle);

foreach ($array as $key => $value) {
    if ($value == $arraySingleSum) {
        unset($array[$key]);
    }
}

$handle = fopen($fileName, 'a+');
fwrite($handle, (PHP_EOL . $arrayResult));
fclose($handle);
// вот здесь косяк, надо посмотреть, не могу сам допереть

// Получение массива строк файла с помощью функции file

// Создание папки

$dirName = 'dir4';
$testDir = 'test';


if (!file_exists($dirName)) {
    mkdir($dirName);
}

if (!file_exists($testDir)) {
    mkdir($testDir);
}



$array = ['nigg', 'nigger', 'niggest'];
foreach ($array as $value) {
    if (!file_exists($value)) {
        mkdir($value);
    }
}



$array = ['/1.txt', '/2.txt', '/3.txt'];
foreach ($array as $value) {
    if (!file_exists($value)) {
        file_put_contents(($testDir . $value), '');
    }
}

// Создание папки

// Удаление папок

rmdir($dirName);

// Удаление папок

// Переименовывание и перемещение папок

$oldDir = 'old';
$newDir = 'new';

if (file_exists($oldDir) && is_dir($oldDir)) {
    rename($oldDir, $newDir);
}

// Переименовывание и перемещение папок

// Чтение содержимого папки с помощью scandir и практика с is_file и is_dir

$dirName = 'dir';

$dirIn = scandir($dirName);
var_dump($dirIn);

foreach ($dirIn as $value) {
    if ($value != '.' && $value != '..' && !is_dir($dirName . '/' . $value)) {
        $handle = fopen(($dirName . '/' . $value), 'a+');
        fwrite($handle, '!');
        fclose($handle);
    }
    if (is_file($dirName . '/' . $value)) {
        echo $value . " это файл" . PHP_EOL;
    } elseif (is_dir($dirName . '/' . $value)) {
        echo $value . " это папка" . PHP_EOL;
    }
}

foreach ($dirIn as $value) {
    if (is_file($dirName . '/' . $value)) {
        echo $value . PHP_EOL;
    }
}

// Чтение содержимого папки с помощью scandir и практика с is_file и is_dir

// Рекурсивный обход вложенных папок

$dirName = "dir";

function filesFounder (string $dir) {
    $arrayOfTrue = array_diff(scandir($dir), ['.', '..']);
    foreach ($arrayOfTrue as $value) {
        $path = $dir . '/' . $value;
        if (is_dir($path)) {
            filesFounder($path);
        } else {
            file_put_contents($path, '!');
            echo $path . " это файл" . PHP_EOL;
            echo $value . " это файл" . PHP_EOL;
        }
    }
}

filesFounder($dirName);

// Рекурсивный обход вложенных папок


// Рекурсивное удаление папки вместе с подпапками

$dirName = "dir";

function recursiveDelete (string $dir) {
    $arrayOfTrue = array_diff(scandir($dir), ['.', '..']);
    foreach ($arrayOfTrue as $value) {
        $path = $dir . '/' . $value;
        if (is_dir($path)) {
            recursiveDelete($path);
        } else {
            unlink($path);
        }
    }
    rmdir($dir);
}

recursiveDelete('dir');

// Рекурсивное удаление папки вместе с подпапками