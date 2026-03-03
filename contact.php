<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>اتصل بنا | المسلماني والحكواتي</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'header.html'; ?>

  <main>
    <h1>اتصل بنا</h1>
    <form action="submit_contact.php" method="POST">
      <label>الاسم:</label>
      <input type="text" name="name" required>
      <label>الهاتف:</label>
      <input type="text" name="phone" required>
      <label>الرسالة:</label>
      <textarea name="message" required></textarea>
      <button type="submit">إرسال</button>
    </form>

    <p>📞 +962 7 9646 2012</p>
    <p>ساعات العمل: 8 صباحاً – 5 مساءً</p>
    <iframe src="https://www.google.com/maps?q=WW65+JP+Amman&output=embed"></iframe>
  </main>

  <?php include 'footer.html'; ?>
</body>
</html>
