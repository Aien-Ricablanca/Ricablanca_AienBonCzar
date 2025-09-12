<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User/update</title>
    <style>
        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #222;
        }
        .form-container {
            background: #fff;
            color: #222;
            padding: 32px 40px;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(67,233,123,0.10);
            width: 370px;
            animation: fadeIn 0.6s ease-in-out;
        }
        .form-container h1 {
            text-align: center;
            margin-bottom: 24px;
            font-size: 2rem;
            color: #219150;
            font-weight: 700;
            letter-spacing: 1px;
        }
        label {
            font-weight: 600;
            display: block;
            margin-top: 16px;
            margin-bottom: 6px;
            color: #219150;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #43e97b;
            border-radius: 8px;
            outline: none;
            background: linear-gradient(90deg, #f7fdf9 0%, #f2fbf6 100%);
            box-shadow: 0 2px 8px rgba(67,233,123,0.06);
            transition: border 0.2s, box-shadow 0.2s;
            font-size: 15px;
        }
        input[type="text"]:focus, input[type="email"]:focus {
            border: 1.5px solid #219150;
            box-shadow: 0 0 8px #43e97b;
        }
        input[type="submit"] {
            margin-top: 28px;
            width: 100%;
            padding: 13px;
            background: linear-gradient(90deg, #43e97b 0%, #38f9d7 100%);
            color: #fff;
            font-size: 1.1rem;
            font-weight: 700;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(67,233,123,0.10);
            transition: background 0.2s, box-shadow 0.2s;
        }
        input[type="submit"]:hover {
            background: #219150;
            box-shadow: 0 4px 16px rgba(67,233,123,0.18);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Update User</h1>
        <form method="post" action="<?= site_url('user/update/'.$user['id']) ?>">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="<?= html_escape($user['username']) ?>" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= html_escape($user['email']) ?>" required>

            <input type="submit" value="Update User">
        </form>
    </div>
</body>
</html>
