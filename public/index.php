<?php

include 'SqliteDatabase.php';

$databasePath = __DIR__ . '/../db.sqlite';
$db = new SqliteDatabase($databasePath);
$db->execute('CREATE TABLE IF NOT EXISTS visits (
    id          INTEGER PRIMARY KEY,
    user_agent  TEXT,
    ip          TEXT,
    url         TEXT,
    visited_at  TEXT,
    request     TEXT
)');
$db->create('visits', [
    'user_agent'  => $_SERVER['HTTP_USER_AGENT'],
    'ip'          => isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : (isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']),
    'url'         => (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",
    'visited_at'  => date('Y-m-d H:i:s'),
    'request'     => json_encode($_REQUEST),
]);
$table = '';
if (isset($_GET['visits'])) {
    $table .= '<table class="table table-bordered table-striped table-hover table-responsive align-middle">
        <thead class="table-dark">
            <tr>
                <th> id </th>
                <th> user_agent </th>
                <th> ip </th>
                <th> url </th>
                <th> visited_at </th>
                <th> request </th>
            </tr>
        </thead>
        <tbody>';
    foreach ($db->read('visits', 'user_agent NOT LIKE "%bot%"', [], '*', 500) as $visit) {
        $table .= '<tr>' .
            ' <td> ' . htmlspecialchars($visit['id'], ENT_QUOTES, 'UTF-8') . ' </td> ' .
            ' <td> ' . htmlspecialchars($visit['user_agent'], ENT_QUOTES, 'UTF-8') . ' </td> ' .
            ' <td> ' . htmlspecialchars($visit['ip'], ENT_QUOTES, 'UTF-8') . ' </td> ' .
            ' <td> ' . htmlspecialchars($visit['url'], ENT_QUOTES, 'UTF-8') . ' </td> ' .
            ' <td> ' . htmlspecialchars($visit['visited_at'], ENT_QUOTES, 'UTF-8') . ' </td> ' .
            ' <td> ' . htmlspecialchars($visit['request'], ENT_QUOTES, 'UTF-8') . ' </td> ' .
            '</tr>';
    }
    $table .= '</tbody>
    </table>';
    echo $table;
}

$index = file_get_contents('..'.DIRECTORY_SEPARATOR.'index.html');
$index = str_replace('public/assets', 'assets', $index);
die($index);