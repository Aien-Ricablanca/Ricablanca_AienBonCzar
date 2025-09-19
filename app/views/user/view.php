<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style>
        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f7fdf9;
            margin: 0;
            padding: 0;
            color: #222;
        }
        .top-bar {
            width: 90%;
            margin: 32px auto 0 auto;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }
        .create-btn {
            background: linear-gradient(90deg, #43e97b 0%, #38f9d7 100%);
            color: #fff;
            padding: 10px 24px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            text-decoration: none;
            box-shadow: 0 2px 8px rgba(67,233,123,0.08);
            transition: background 0.2s;
        }
        .create-btn:hover {
            background: #219150;
        }
        h1 {
            text-align: center;
            margin: 40px 0 32px 0;
            font-size: 2.2rem;
            font-weight: 700;
            color: #219150;
            letter-spacing: 1px;
        }
        .table-container {
            width: 95%;
            margin: 0 auto;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 4px 24px rgba(67,233,123,0.10);
            padding: 32px 0 24px 0;
            animation: fadeIn 0.6s ease-in-out;
        }
        table {
            width: 98%;
            margin: 0 auto;
            border-collapse: separate;
            border-spacing: 0;
            background: #fff;
            color: #222;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(67,233,123,0.06);
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
        .action-btn {
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
        .action-btn.edit {
            background: linear-gradient(90deg, #43e97b 0%, #38f9d7 100%);
            color: #fff;
        }
        .action-btn.edit:hover {
            background: #219150;
        }
        .action-btn.delete {
            background: #e53935;
            color: #fff;
        }
        .action-btn.delete:hover {
            background: #b71c1c;
        }
        .pagination {
            width: 98%;
            margin: 24px auto 0 auto;
            text-align: center;
        }
        .pagination-btn {
            padding: 8px 16px;
            margin: 0 4px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            background: #f2fbf6;
            color: #219150;
            transition: background 0.2s, color 0.2s;
        }
        .pagination-btn.active {
            background: #43e97b;
            color: #fff;
        }
        .pagination-btn:hover {
            background: #219150;
            color: #fff;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="top-bar">
        <a href="<?= site_url('user/create'); ?>" class="create-btn">+ Create User</a>
    </div>
    <h1>User List</h1>
    <div class="table-container">
        <form action="<?=site_url('users');?>" method="get" class="col-sm-4 float-end d-flex">
		<?php
		$q = '';
		if(isset($_GET['q'])) {
			$q = $_GET['q'];
		}
		?>
        <input class="form-control me-2" name="q" type="text" placeholder="Search" value="<?=html_escape($q);?>">
        <button type="submit" class="btn btn-primary" type="button">Search</button>
	</form>
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            <?php foreach (html_escape($users) as $user): ?>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['username']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td>
                        <a href="<?= site_url('user/update/'.$user['id']); ?>" class="action-btn edit">Edit</a>
                        <a href="<?= site_url('user/delete/'.$user['id']); ?>" class="action-btn delete" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php 
        echo $page;?>
    </div>
</body>
</html>
