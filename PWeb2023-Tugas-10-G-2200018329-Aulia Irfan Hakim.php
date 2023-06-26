<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h2>Tugas 10.2.1</h2>
    <form method="POST" action="">
        <label>Masukkan nilai Anda:</label>
        <input type="text" name="nilai">
        <input type="submit" value="Submit">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nilai = $_POST['nilai'];

            if ($nilai >= 0 && $nilai <= 4.00) {
                if ($nilai == 4.00) {
                    echo '<div class="result">Nilai Anda ' . $nilai . ' dengan nilai huruf "A" (baik sekali).</div>';
                } elseif ($nilai >= 3.67) {
                    echo '<div class="result">Nilai Anda ' . $nilai . ' dengan nilai huruf "A-" (baik sekali).</div>';
                } elseif ($nilai >= 3.33) {
                    echo '<div class="result">Nilai Anda ' . $nilai . ' dengan nilai huruf "B+" (baik).</div>';
                } elseif ($nilai >= 3.00) {
                    echo '<div class="result">Nilai Anda ' . $nilai . ' dengan nilai huruf "B" (baik).</div>';
                } elseif ($nilai >= 2.67) {
                    echo '<div class="result">Nilai Anda ' . $nilai . ' dengan nilai huruf "B-" (baik).</div>';
                } elseif ($nilai >= 2.33) {
                    echo '<div class="result">Nilai Anda ' . $nilai . ' dengan nilai huruf "C+" (cukup).</div>';
                } elseif ($nilai >= 2.00) {
                    echo '<div class="result">Nilai Anda ' . $nilai . ' dengan nilai huruf "C" (cukup).</div>';
                } elseif ($nilai >= 1.67) {
                    echo '<div class="result">Nilai Anda ' . $nilai . ' dengan nilai huruf "C-" (cukup).</div>';
                } elseif ($nilai >= 1.33) {
                    echo '<div class="result">Nilai Anda ' . $nilai . ' dengan nilai huruf "D+" (kurang).</div>';
                } elseif ($nilai >= 1.00) {
                    echo '<div class="result">Nilai Anda ' . $nilai . ' dengan nilai huruf "D" (kurang).</div>';
                } elseif ($nilai >= 0 && $nilai < 1.00) {
                    echo '<div class="result">Nilai Anda ' . $nilai . ' dengan nilai huruf "E" (gagal).</div>';
                }
            } else {
                echo '<div class="result">Nilai yang Anda masukkan ' . $nilai . ', Nilai tidak valid!</div>';
            }
        }
        ?>
    </form>
    <h2>Tugas 10.2.2</h2><br>
    <?php
        $jumlahBaris = 5; // Jumlah baris yang diinginkan

        for ($i = 1; $i <= $jumlahBaris; $i++) {
    // Mencetak spasi sebelum bintang
            for ($j = 1; $j <= ($jumlahBaris - $i); $j++) {
                echo "&nbsp;&nbsp;";
        }

    // Mencetak bintang
            for ($k = 1; $k <= (2 * $i - 1); $k++) {
                echo "* ";
            }

        echo "<br>";
        }
    ?>
</body>
</html>
