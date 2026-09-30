<?php

if (StringUtils\capitalize('hello') !== 'Hello') {
    throw new Exception('Функция работает неверно!');
}

if (StringUtils\capitalize('') !== '') {
    throw new Exception('Функция работает неверно!');
}

echo 'Ты молодец. Все тесты пройдены!';