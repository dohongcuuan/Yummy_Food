<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title> cập nhật tài khoản</title>
</head>
<style>
    .shadow-md {
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    }

    .register-form1 {
        padding-bottom: -50px;
        margin: auto;
        margin-right: auto;
        ;
        margin-bottom: 10rem;
        width: 350px;
        padding: 1rem;

        /* box-shadow: 0 0 30px rgba(0, 0, 0, 0.1); */
        background-color: #fff;
        border-radius: 7px;
    }

    .register-form1 h2 {
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .input-row1 {
        margin-bottom: 1.5rem;
    }

    .input-row1 input {
        width: 100%;
        border: 1px solid #ccc;
        height: 40px;
        line-height: 40px;
        padding: 0 1rem;
        outline: none;
        transition: all 0.3s ease-out;
    }
</style>

<body>
    <div border="1" class="register-form1 shadow-md">
        <h2>Cập nhật tài khoản</h2>
        <?php
        if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
            extract($_SESSION['user']);
        }

        ?>
        <form action="index.php?act=edit_taikhoan" method="post">
            <div class="input-row1">
                <input type="text" placeholder="Tên Đăng Nhập" name="user" value="<?= $user ?>" id="username" autocomplete="off" required />

            </div>
            <div class="input-row1">
                <input type="password" placeholder="Mật Khậu" name="pass" id="phone" value="<?= $pass ?>" autocomplete="off" required />

            </div>

            <div class="input-row1">
                <input type="Email" placeholder="Email" name="email" id="email" value="<?= $email ?>" autocomplete="off" required />

            </div>
            <div class="input-row1">
                <input type="hidden" name="id_user" value="<?= $id_user ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <!-- <a href="index.php?act=edit_taikhoan"> </a> -->

            </div>
        </form>

        <h2 class="thongbao">
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
        </h2>
    </div>
</body>