<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    Hello <?= htmlspecialchars($name ?? 'World', ENT_QUOTES, 'UTF-8') ?>
</body>
</html>