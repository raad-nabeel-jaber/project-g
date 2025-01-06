<?php
require_once "../config.php";

// التحقق من وجود المعرف 'id'
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $menu_id = $_GET['id'];
} else {
    header("Location: ../panel/menu-panel.php");
    exit(); // تأكد من إنهاء التنفيذ بعد إعادة التوجيه
}

// التحقق من إرسال النموذج
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // **تخطي عملية التحقق**
    // إعادة التوجيه مباشرة إلى صفحة تحديث عنصر القائمة
    header("Location: ../menuCrud/updateItem.php?id=" . $menu_id);
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../css/verifyAdmin.css" rel="stylesheet" />

</head>
<body>
    <div class="login-container">
        <div class="login_wrapper">
            <div class="wrapper">
                <h2 style="text-align: center;">Admin Login</h2>
                <h5>Admin Credentials needed to Edit Item</h5>
                <form class="mt-2" action="" method="post">
                    <div class="form-group">
                        <label>Admin Id</label>
                        <input type="number" name="admin_id" class="form-control" placeholder="Enter Admin ID" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Admin Password" required>
                    </div>

                    <button class="btn btn-light" type="submit" name="submit" value="submit">Login</button>
                    <a class="btn btn-danger" href="../panel/menu-panel.php" >Cancel</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
