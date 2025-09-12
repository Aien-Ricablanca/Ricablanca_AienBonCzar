<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <style>
    body {
        font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #fff;
        margin: 0;
        padding: 0;
        color: #222;
    }
    h1 {
        text-align: center;
        margin: 40px 0 32px 0;
        font-size: 2.2rem;
        font-weight: 700;
        color: #219150;
        letter-spacing: 1px;
    }
    table {
        width: 90%;
        margin: 0 auto;
        border-collapse: separate;
        border-spacing: 0;
        box-shadow: 0 4px 24px rgba(67,233,123,0.08);
        border-radius: 16px;
        background: #fff;
        color: #222;
        overflow: hidden;
    }
    th, td {
        padding: 18px 24px;
        text-align: left;
    }
    th {
        background: linear-gradient(90deg, #43e97b 0%, #38f9d7 100%);
        color: #fff;
        font-size: 1.1rem;
        font-weight: 600;
        border-bottom: 2px solid #43e97b;
    }
    tr {
        transition: background 0.2s;
    }
    tr:nth-child(even) {
        background: #f7fdf9;
    }
    tr:nth-child(odd) {
        background: #f2fbf6;
    }
    tr:hover {
        background: #e6faee;
    }
    a {
        text-decoration: none;
        padding: 7px 18px;
        border-radius: 6px;
        font-weight: 600;
        font-size: 1rem;
        margin-right: 8px;
        transition: background 0.2s, box-shadow 0.2s;
        box-shadow: 0 2px 8px rgba(67,233,123,0.08);
        border: none;
        cursor: pointer;
    }
    a[href*="update"] {
        background: linear-gradient(90deg, #43e97b 0%, #38f9d7 100%);
        color: #fff;
    }
    a[href*="update"]:hover {
        background: #219150;
    }
    a[href*="delete"] {
        background: #e53935;
        color: #fff;
    }
    a[href*="delete"]:hover {
        background: #b71c1c;
    }
</style>
</head>
<body>
    <h1>Welcome to View Page</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <?php foreach (html_escape($users) as $user): ?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['username']; ?></td>
                <td><?= $user['email']; ?></td>
                <td>
                    <a href="<?= site_url('user/update/'.$user['id']); ?>">Edit</a> |
                    <a href="<?= site_url('user/delete/'.$user['id']); ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
