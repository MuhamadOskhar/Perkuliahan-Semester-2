<?php include "konek.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>PEMROGRAMAN LANJUT</title>
</head>
<body>
    <div id="loadingpage" style="height:100%;width:100%;position:fixed;left:0;top:0;background:#0d1116;z-index:10;cursor:wait;">
        <center>
            <pre id="loading_el" style="color: white;font-size:0.5em;top: 5em;position:relative;"></pre>
        </center>
    </div>
    <div id="container">
        <div id="header">
            <h1>PERTEMUAN X</h1>
        </div>

        <div id="badan">
            <div style="display:grid;grid-template-rows: auto 200px;">
                <div id="sidebar">
                    <h3>navigasi</h3>
                    <ul id="navmenu">
                        <li><a href="?" <?php if (!isset($_GET['module'])) echo 'class="selected"'; ?>>INSERT</a></li>
                        <li><a href="?module=jadwal" <?php if (isset($_GET['module'])) if ($_GET['module'] == "jadwal" || $_GET['module'] == "edit") echo 'class="selected"'; ?>>VIEW</a></li>
                        <li><a href="?module=galeri" <?php if (isset($_GET['module'])) if ($_GET['module'] == "galeri") echo 'class="selected"'; ?>>SEARCH</a></li>
                    </ul>
                </div>

                <div id="login">
                    <form action="?module=loginproc" method="post">
                        <label>Username</label>
                        <input type="text" name="user">
                        <label>Password</label>
                        <input type="password" name="pass">
                        <input type="submit" value="Login" style="width:100%; background: #99ccff; border: 1px solid gray; border-radius:3px;margin-top:10px">
                    </form>
                </div>
            </div>

            <div id="page">
                <?php
                if (isset($_GET['module']))
                    include("konten/$_GET[module].php");
                else
                    include("home.php");
                ?>
            </div>
        </div>

        <div id="clear"></div>

        <div id="footer">
            <p>&copy; 2010</p>
        </div>

    </div>
    <script type="module" src="script/app.js"></script>
</body>
</html>