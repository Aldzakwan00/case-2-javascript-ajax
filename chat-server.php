<?php
date_default_timezone_set('Asia/Jakarta');

// Kode program PHP yang mengimplementasikan penyimpanan data username dan pesan ke dalam file chat.txt yang dikirimkan melalui AJAX.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pengguna = $_POST['user'] ?? '';
    $isi_pesan = $_POST['pesan'] ?? '';
    $timestamp = date('Y-m-d H:i');

    $simpan_pesan = "$pengguna||$isi_pesan||$timestamp\n";

    file_put_contents('chat.txt', $simpan_pesan, FILE_APPEND);

    echo json_encode(['status' => 'success']);
} 

// Kode program PHP yang mengimplementasikan fitur request data chat menggunakan AJAX.
else {
    $lines = file('chat.txt');
    $pesanTampilan = array();
    foreach ($lines as $line) {
        list($username, $pesan, $tanggal) = explode('||', $line);

        $pesanTampilan[] = array(
            'username' => $username,
            'pesan' => $pesan,
            'tanggal' => $tanggal
        );
    }

    header('Content-Type: application/json');
    echo json_encode($pesanTampilan);
}
