<?php
session_start();

// Retrieve registrations from the session
$registrations = $_SESSION['registrations'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>


    <h1>Registered Users</h1>

    <?php if (empty($registrations)) : ?>
        <p>No registrations found.</p>
    <?php else : ?>
        <table>
            <thead>
                <tr>
                    <th>USN</th>
                    <th>User Name</th>
                    <th>Birthday</th>
                    <th>Languages Known</th>
                    <th>Skill Level (Web Tech)</th>
                    <th>Current Branch</th>
                    <th>Changing Branch</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registrations as $registration) : ?>
                    <tr>
                        <td><?= htmlspecialchars($registration['usn']) ?></td>
                        <td><?= htmlspecialchars($registration['uname']) ?></td>
                        <td><?= htmlspecialchars($registration['bday']) ?></td>
                        <td><?= htmlspecialchars($registration['plang']) ?></td>
                        <td><?= htmlspecialchars($registration['pskill']) ?></td>
                        <td><?= htmlspecialchars($registration['curbranch']) ?></td>
                        <td><?= htmlspecialchars($registration['newbranch']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

</body>
</html>
