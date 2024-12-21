<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link rel="stylesheet" href="/public/CSS/records.css">
    <script src="https://kit.fontawesome.com/ea595f32d6.js" crossorigin="anonymous"></script>
    <script defer src="/public/Script/records.js"></script>
</head>
<body>
    <div class="head">
        <a href="/home"><i class="fa-solid fa-circle-left"></i></a>
    </div>
    <div class="task-manager">
        <form id="task-form">
            <input type="text" name="subject" placeholder="Enter new task" required>
            <input type="hidden" name="completedTask" value="Pending">
            <button type="submit" id="button">Add Task</button>
        </form>
        <table id="task-list">
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <!-- Tasks will be added here dynamically -->
            </tbody>
        </table>
    </div>
</body>
</html>
