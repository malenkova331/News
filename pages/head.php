<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= HOST ?>assets/scss/main.css">
    <title> <?php echo $pageTitle; ?> </title>
</head>
<body>
    <script>
        const items = <?php echo json_encode($all_news, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE); ?>;
        console.log(items);
    </script>
    <script src="<?= HOST ?>assets/js/index.js"></script>