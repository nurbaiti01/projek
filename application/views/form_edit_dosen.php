<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Dosen</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(243, 197, 245);
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color:rgb(135, 20, 145);
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color:rgb(158, 28, 136);
        }
    </style>
</head>
<body>

<h1>Form Input Dosen</h1>

<form action="<?= base_url('edit_dosen')?>" method="POST">
    <input type="hidden" value="<?= $dosen->id ?>" placeholder="id" required>
    <input type="text" value="<?= $dosen->nama ?>"  placeholder="Nama" required>
    <input type="text" value="<?= $dosen->nrp ?>" placeholder="Nrp" required>
    <input type="text" value="<?= $dosen->nidn ?>" placeholder="Nidn" required>
    <input type="text" value="<?= $dosen->pendidikan ?>" placeholder="Pendidikan" required>
    <input type="text" value="<?= $dosen->email ?>" placeholder="Email" required>
    <input type="text" value="<?= $dosen->prodi ?>" placeholder="Program Studi" required>

    <button type="submit">Edit</button>
</form>

</body>
</html>