<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 1 Trowulan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e9ecef;
            margin: 0;
            padding: 20px;
            color: #343a40;
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        h3 {
            margin: 0;
            font-size: 1.5em;
        }

        h1 {
            margin: 10px 0 0 0;
            font-size: 2.5em;
        }

        h4 {
            margin-top: 20px;
            font-size: 1.2em;
        }

        nav {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        nav p {
            margin: 0;
            font-weight: bold;
            color: #28a745;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            margin: 15px 0;
        }

        nav ul li a {
            text-decoration: none;
            color: #007bff;
            padding: 10px 15px;
            border: 2px solid #007bff;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            display: inline-block;
            font-weight: bold;
        }

        nav ul li a:hover {
            background-color: #007bff;
            color: white;
        }

        @media (max-width: 600px) {
            header {
                padding: 15px;
            }

            nav {
                padding: 15px;
            }

            nav ul li a {
                padding: 8px 12px;
            }
        }
    </style>
</head>

<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMKN 1 Trowulan</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Pendaftaran siswa baru berhasil!";
                    } else {
                        echo "Pendaftaran gagal!";
                    }
                ?>
            </p>
        <?php endif; ?>

        <ul>
            <li><a href="list-siswa.php">Daftar Siswa</a></li>
            <li><a href="form-daftar.php">Pendaftaran</a></li>
        </ul>
    </nav>
</body>
</html>