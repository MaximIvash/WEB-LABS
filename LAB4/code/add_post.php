<?php
require __DIR__ . '/vendor/autoload.php'; // Путь к подключению Google API Client Library

// Данные из формы
$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$text = $_POST['text'];

// ID вашей Google таблицы
$spreadsheetId = '1j3UkDf4PDhCkEvxSNSvTaHiYAJwtbyB-w-PvjzOaXsI';

// Аутентификация с использованием JSON-ключа и сервисного аккаунта
$client = new Google_Client();
$client->setAuthConfig('credentials.json');
$client->addScope(Google_Service_Sheets::SPREADSHEETS);
$service = new Google_Service_Sheets($client);

// Данные для записи в таблицу
$values = [
    [$email, $category, $title, $text]
];

// Указываем диапазон ячеек, куда будем записывать данные
$range = 'Лист1!A2:D';

// Создаем объект ValueRange для записи данных в Google таблицу
$body = new Google_Service_Sheets_ValueRange([
    'values' => $values
]);

// Выполняем запрос на запись данных
$result = $service->spreadsheets_values->update($spreadsheetId, $range, $body, [
    'valueInputOption' => 'RAW'
]);

if ($result) {
    echo 'Данные успешно сохранены в таблице!';
} else {
    echo 'Произошла ошибка при сохранении данных';
}