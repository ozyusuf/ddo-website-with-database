<?php require 'config.php'; // Veritabanı bağlantısını alıyoruz ?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Misafir Defteri</title>
  <link rel="stylesheet" href="css/style.css"> <!-- CSS dosyasını bağlıyoruz -->
</head>
<body>
  <h1>Misafir Defteri</h1>

  <!-- Form: Kullanıcının adını ve mesajını girmesi için alan -->
  <form action="save.php" method="POST" class="card">
    <input name="name" placeholder="Adınız" required>            <!-- Ad girişi -->
    <textarea name="message" placeholder="Mesajınız" required></textarea> <!-- Mesaj girişi -->
    <button type="submit">Gönder</button>                        <!-- Gönder butonu -->
  </form>

  <h2>Son Mesajlar</h2>

  <?php
    // Tüm kayıtları veritabanından çekiyoruz (en yeni en üstte olacak şekilde)
    $rows = $pdo->query("SELECT name, message, created_at FROM entries ORDER BY id DESC")->fetchAll();

    // Her bir kayıt için ekrana mesajı yazdır
    foreach ($rows as $r): ?>
      <div class="entry">
        <strong><?= htmlspecialchars($r['name']) ?></strong>      <!-- Adı güvenli şekilde yazdır -->
        <em>(<?= $r['created_at'] ?>)</em><br>                   <!-- Oluşturulma zamanı -->
        <?= nl2br(htmlspecialchars($r['message'])) ?>            <!-- Mesaj (satır başlarını koruyarak) -->
      </div>
  <?php endforeach; ?>
</body>
</html>
