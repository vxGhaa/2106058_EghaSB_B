<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Crew Film</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="form">
        <h1>Pendaftaran Crew Film</h1>
        <form method="POST" action="./proses_input.php">
            <label for="nama_lengkap">Nama Lengkap :</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" required placeholder="Masukkan nama lengkap Anda"> <br>

            <label for="email">Alamat Email :</label>
            <input type="email" id="email" name="email" required placeholder="Masukkan alamat email yang valid"><br>

            <label for="kata_sandi">Kata Sandi :
                <input type="password" id="kata_sandi" name="kata_sandi" required minlength="8" placeholder="Masukkan kata sandi (minimal delapan karakter)">
                <span class="toggle-password" onclick="togglePasswordVisibility()">Show</span>
            </label><br>

            <label for="tanggal_lahir">Tanggal Lahir :</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br>

            <label for="nomor_telepon">Nomor Telepon :</label>
            <input type="tel" id="nomor_telepon" name="nomor_telepon" required placeholder="Masukkan nomor telepon Anda"><br>

            <label for="pengalaman_kerja">Pengalaman Kerja :</label>
            <textarea id="pengalaman_kerja" name="pengalaman_kerja" required placeholder="Ceritakan pengalaman kerja atau keterampilan yang dimiliki"></textarea><br>

            <label for="posisi_pekerjaan">Posisi Pekerjaan :</label>
            <select id="posisi_pekerjaan" name="posisi_pekerjaan" required>
                <option value="" disabled selected>Pilih posisi pekerjaan</option>
                <option value="sutradara">Sutradara</option>
                <option value="produser">Produser</option>
                <option value="penulis_naskah">Penulis Naskah</option>
                <option value="sinematografer">Sinematografer</option>
                <option value="editor">Editor</option>
                <option value="desainer_suara">Desainer Suara</option>
            </select><br>

            <label>Setuju Syarat dan Ketentuan :</label>
            <p align="justify">Calon pendaftar diharapkan memiliki komitmen terhadap etika kerja, termasuk menjaga kerahasiaan informasi dan mematuhi aturan keselamatan. Kepatuhan terhadap hukum dan peraturan yang berlaku dalam industri film juga menjadi aspek kritis. Kemampuan komunikasi yang baik dan keterampilan kerja sama dalam tim menjadi nilai tambah, sementara pemahaman mendalam tentang proyek film yang sedang dikerjakan dianggap sebagai keharusan.

                Pendaftar yang diterima akan diminta untuk menandatangani kontrak kerja yang mencakup rincian tugas, waktu kerja, dan kompensasi. Adanya kemungkinan pelatihan tambahan sesuai dengan kebutuhan produksi juga harus dipertimbangkan oleh calon pendaftar. Penting bagi semua pendaftar untuk membaca dan memahami syarat dan ketentuan ini sebelum mengajukan diri, dan pelanggaran terhadap ketentuan tersebut dapat mengakibatkan diskualifikasi atau pemecatan dari proyek film.






            </p>
            <div>
                <input type="radio" id="setuju" name="syarat_ketentuan" value="setuju" required>
                <label for="setuju">Setuju</label><br>
            </div>
            <div>
                <input type="radio" id="tidak_setuju" name="syarat_ketentuan" value="tidak_setuju" required>
                <label for="tidak_setuju">Tidak Setuju</label><br>
            </div>

            <button type="submit" id="btn-kirim">Kirim Pendaftaran</button>
        </form>
    </div>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById('kata_sandi');
            var toggleText = document.querySelector('.toggle-password');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleText.textContent = 'Hide';
            } else {
                passwordInput.type = 'password';
                toggleText.textContent = 'Show';
            }
        }
    </script>

</body>

</html>