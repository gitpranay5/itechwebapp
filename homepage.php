<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #f4f4f4;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to My Simple PHP Homepage</h1>
        <p>This is a basic example of a PHP-powered homepage.</p>

        <h2>Current Server Time:</h2>
        <p><?php echo date('l, F jS Y \a\t h:i:s A'); ?></p>

        <h2>Today's Specials:</h2>
        <ul>
            <li>Pizza</li>
            <li>Burger</li>
            <li>Salad</li>
        </ul>

        <h2>Latest News:</h2>
        <?php
        // Example news array (simulated data)
        $news = array(
            array(
                'title' => 'Lorem ipsum dolor sit amet',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'date' => '2024-06-22'
            ),
            array(
                'title' => 'Nulla facilisi. Curabitur vestibulum',
                'content' => 'Nulla facilisi. Curabitur vestibulum, tortor quis imperdiet suscipit, velit justo tincidunt est, sed posuere elit tortor eu purus.',
                'date' => '2024-06-21'
            )
        );

        // Display news items
        foreach ($news as $item) {
            echo '<h3>' . htmlspecialchars($item['title']) . '</h3>';
            echo '<p>' . htmlspecialchars($item['content']) . '</p>';
            echo '<small>Published on ' . date('F j, Y', strtotime($item['date'])) . '</small><br><br>';
        }
        ?>
    </div>
</body>
</html>
