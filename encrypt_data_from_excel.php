<?php
// Memuat autoloader Composer
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Exception;

// Path ke file Excel Anda
$file = 'data.xlsx'; // Ganti dengan path ke file Excel Anda

try {
    // Membaca file Excel
    $spreadsheet = IOFactory::load($file);
} catch (Exception $e) {
    die('Error loading file: ' . $e->getMessage());
}

$worksheet = $spreadsheet->getActiveSheet();
$data = $worksheet->toArray();

// Menyiapkan array untuk menyimpan hash
$encryptedData = [];

// Asumsikan data ada di kolom pertama (index 0)
foreach ($data as $row) {
    if (isset($row[0])) {
        $value = $row[0]; // Data yang akan dienkripsi

        // Mengenkripsi data
        $hash = password_hash($value, PASSWORD_BCRYPT);

        // Menyimpan hash ke array
        $encryptedData[] = $hash;
    }
}

// Menyimpan hasil hash ke file
$file = 'encrypted_data.txt';
$fileHandle = fopen($file, 'w');
foreach ($encryptedData as $hash) {
    fwrite($fileHandle, $hash . PHP_EOL);
}
fclose($fileHandle);

echo "Data telah berhasil dienkripsi dan disimpan ke '$file'.";
?>
