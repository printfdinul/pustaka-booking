<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB II | merancang web sederhana dengan codeigniter</title>
    <link rel="stylesheet"type="text/css"href="<?= base_url()?>assets/css/stylebuku.css">
</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>RentalBuku.net</h1>
                <h3>Membuat Template Sederhana dengan Codeigniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li>
                        <a href="<?= base_url().'index.php/web' ?>">Home</a>
                    </li>
                    <li>
                    <a href="<?= base_url().'index.php/web/about' ?>">About</a>
                    </li>
                    <li>
                    <a href="<?= base_url().'index.php/web/about' ?>">Contact</a>
                    </li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
