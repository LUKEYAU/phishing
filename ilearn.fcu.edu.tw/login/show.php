<!-- target_page.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>
<body>
    <?php
    // 检查是否有通过POST方法提交的数据
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 检查是否有名为“username”的表单输入字段
        if (isset($_POST["username"])) {
            // 提取表单输入字段的值
            $username = $_POST["username"];
            // 提取表单输入字段的值
            $password = $_POST["password"];
            // 显示表单输入的值
            echo "<p>Username: " . $username . "</p>";
            echo "<p>Password: " . $password . "</p>";
        }
    }
    ?>
</body>
</html>
