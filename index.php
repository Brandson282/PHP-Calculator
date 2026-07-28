
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="indexsty.css">
</head>
<body>
    <div class = "login-form">
        
    S    <div class = "container" >
            <div class = "main">
                <div class = "content">
                    <h2>Log in</h2>
                    <form action="dashboard.php" method = "POST">
                        <input type="text" name="name" placeholder="Username" required>
                        <input type="text" name="department" placeholder="department" required>
                        <input type="email" name="email" placeholder="Email">
                        <input type="text" name="user_address" placeholder="City">
                        <input type="text" name="level" placeholder="level">
                        <button class="btn" type="submit">register</button>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</body>
</html>