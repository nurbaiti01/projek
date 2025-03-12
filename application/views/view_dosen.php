<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(226, 208, 222);
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(149, 121, 168, 0.7);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color:rgb(177, 47, 146);
            color: white;
        }

        tr:nth-child(even) {
            background-color:rgba(243, 238, 238, 0.53);
        }

        tr:hover {
            background-color: #ddd;
        }

        @media (max-width: 600px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            th {
                display: none; /* Hide header on small screens */
            }

            tr {
                margin-bottom: 15px;
            }

            td {
                text-align: right;
                position: relative;
                padding-left: 50%;
            }

            td::before {
                content: attr(data-label);
                position: absolute;
                left: 10px;
                width: calc(50% - 20px);
                padding-right: 10px;
                white-space: nowrap;
                text-align: left;
                font-weight: bold;
            }
        }
    </style>

</head>
<body>

<h1>Data Dosen</h1>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Nidn</th>
            <th>Nrp</th>
            <th>Pendidikan</th>
            <th>Email</th>
            <th>Prodi</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>
        <?php 
        $i = 1;
        foreach ($dosen as $row) {
            echo "<tr>
                <td>".$i++."</td>
                <td data-label='Nama'>".$row->nama."</td>
                <td data-label='Nidn'>".$row->nidn."</td>
                <td data-label='Nrp'>".$row->nrp."</td>
                <td data-label='Pendidikan'>".$row->pendidikan."</td>
                <td data-label='Email'>".$row->email."</td>
                <td data-label='Prodi'>".$row->prodi."</td>
                <td>
                     <a class='btn btn-sm btn-primary'href='".base_url("form_edit_dosen/".$row->id)."'>Edit</a></td>
            </tr>";
        } ?>
    </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>