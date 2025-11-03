<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">KSI 2025</a>
        </div>
    </nav>

    <!-- Body -->
    <div class="container my-4">
        <h2 class="text-center mb-4">Daftar Mahasiswa</h2>

        <?php
        $mahasiswa = [
            ["nama" => "Budi", "nim" => "230101", "jurusan" => "Informatika"],
            ["nama" => "Siti", "nim" => "230102", "jurusan" => "Sistem Informasi"],
            ["nama" => "Andi", "nim" => "230103", "jurusan" => "Teknik Komputer"]
        ];
        ?>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $mhs) {
                    echo "<tr>
                            <td>{$no}</td>
                            <td>{$mhs['nama']}</td>
                            <td>{$mhs['nim']}</td>
                            <td>{$mhs['jurusan']}</td>
                          </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>© 2025 KSI Project by Bunga</p> echo "<?php echo 'Program utama'; ?>
    </footer>

</body>
</html>
