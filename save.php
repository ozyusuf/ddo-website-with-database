<?php
// config.php dosyasını dahil ediyoruz (veritabanı bağlantısı hazır hale gelir)
require 'config.php';

// Formdan gelen 'name' ve 'message' alanları boş değilse işlem yap
if (!empty($_POST['name']) && !empty($_POST['message'])) {
    // SQL sorgusunu güvenli şekilde hazırlıyoruz (SQL injection'a karşı koruma)
    $stmt = $pdo->prepare("INSERT INTO entries (name, message) VALUES (:name, :msg)");

    // Formdan gelen verileri SQL sorgusuna yerleştiriyoruz (bağlı parametrelerle)
    $stmt->execute([
        ':name' => $_POST['name'],
        ':msg'  => $_POST['message']
    ]);
}

// Kayıt işlemi bittiğinde tekrar ana sayfaya yönlendir (refresh sonucu tekrar veri eklenmesini engeller)
header('Location: index.php');
exit;
