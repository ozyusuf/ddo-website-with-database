<?php
// Veritabanı bağlantı ayarlarını tanımlıyoruz
$host = 'localhost';            // Veritabanı sunucusu (XAMPP'te genelde localhost)
$db   = 'guestbook_db';         // Kullanacağımız veritabanının adı
$user = 'root';                 // XAMPP'in varsayılan kullanıcı adı
$pass = '';                     // Varsayılan şifre boş bırakılır
$charset = 'utf8mb4';           // Türkçe karakterler için uyumlu karakter seti

// PDO (PHP Data Objects) için DSN (data source name) tanımı
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// PDO ayarları (hata yönetimi ve veri çekme biçimi)
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,          // Hata varsa istisna (exception) fırlat
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,     // Sonuçları dizi olarak döndür (sütun isimleriyle)
];

try {
    // PDO ile veritabanına bağlanmayı deneriz
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    // Hata varsa, ekrana hata mesajını bastır ve işlemi durdur
    exit('DB connection failed: ' . $e->getMessage());
}
?>
