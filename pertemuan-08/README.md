# pertemuan-08

1. Menambahkan menu Manajemen Penyewa pada sidebar.php
2. A. Menambahkan penyewa_model pada folder Models yang fungsinya adalah sebagai "pengurus" database, meengambil, dan memastikan aktif.
   B. Menambahkan penyewa_ controller yang perannya adalah sebagai penghubung yang mengatur alur, validasi, dan keamanan.
   C. Menambahkan penyewa_view yang perannya adalah untuk mengurus tampilan untuk admin

3. Mencoba untuk mengimplementasikan CRUD, dan secara keseluruhan sudah dapat dijalankan dengan baik tanpa meninggalkan pesan error
4. Validasi, Pengamanan, dan Pengelolaan Foto
di controller
Semua input dirapikan dengan trim(). Jika ada yang tidak valid, formulir tampil kembali dengan pesan kesalahan dan isian sebelumnya, kecuali password
Penanganan kegagalan: jika foto kedua gagal diunggah, foto pertama yang sudah tersimpan dihapus lagi. Jika penyimpanan ke database gagal, foto baru dibuang. Saat foto diganti, foto lama baru dihapus setelah database berhasil diperbarui. Saat penyewa dihapus, kedua fotonya ikut dihapus. Fungsi penghapus hanya menerima nama file berpola buatan sistem, sehingga tidak bisa dipakai menghapus file lain
5. Pengujian
fungsi semua berjalan dengan baik.