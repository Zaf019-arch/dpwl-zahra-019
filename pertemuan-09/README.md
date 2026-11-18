# pertemuan-09

1. Menambahkan file csrf_helper.php ke dalam application/helpers yang berfungsi untuk membuat dan memvalidasi token CSRF berbasis session.    

2. Menambahkan file bukti_helper.php ke dalam application/helpers. Fungsinya adalah untuk mengelola berkas bukti bayar: validasi unggahan (finfo, getimagesize, maks 5 MB, nama acak), menghapus berkas, dan menyajikan gambar ke browser setelah akses diperiksa.    

3. Menambahkan Pembayaran_model.php ke dalam application/models. fungsinya: Semua query pembayaran DP: daftar dan detail untuk penyewa dan admin, simpanBuktiDp(), verifikasi(), tolak(), serta periksaSkema() yang memvalidasi ENUM dan kolom t_bayar. Hanya UPDATE, tidak pernah INSERT.    

4. Menambahkan file Pembayaran_controller.php ke dalam applicattion/controllers. Fungsinya: Method riwayat, pembayaran, unggah (POST + PRG), dan bukti. Wajib login penyewa dan dibatasi ke pemilik transaksi.    

5. Menambahkan Verifikasi_controller.php ke dalam application/controllers yang fungsinya adalah sbg Method index, detail, verifikasi, tolak, dan bukti.    

6. Mengupdate file Transaksi_controller.php pada application/controllers. Penambahan update berupa tahapan "Setelah checkout berhasil, redirect ke halaman pembayaran DP (sebelumnya ke katalog). Ini satu-satunya perubahan perilaku pada fitur lama".    

7. Menambahkan file riwayat.php pada application/views/transaksi. Outputnya berupa Tabel “Transaksi Saya”: kode, periode, total, DP, status DP, dan tombol Bayar DP atau Lihat.    

8. Mengupdate file konfirmasi.php pada application/views/transaksi. Pengupdate-an hanya berupa mengganti satu kalimat info dari “dilakukan pada P9” menjadi petunjuk mengunggah bukti DP.    

9. Menambahkan file pembayaran.php pada application/views/admin dan output yang dihasilkan berupa satu berkas dua mode. Mode daftar menampilkan DataTable pembayaran. Mode detail menampilkan bukti beserta tombol Verifikasi dan Tolak.    

10. Menambahkan folder bayar yang berisikan file .htaccess ke dalam folder uploads yang dimana perannya adalah untuk memblokir akses langsung ke berkas bukti lewat URL, sehingga hanya bisa dibuka lewat controller.    

11. Mengupdate 3 file, yaitu routes.php pada application/config, navbar.php pada application/views/katalog, dan sidebar.php pada application/views/templates. Update pada routes.php berupa penambahan 9 route: transaksi/riwayat, transaksi/pembayaran, transaksi/pembayaran/unggah, transaksi/bukti, dan admin/pembayaran (+ detail, verifikasi, tolak, bukti). Dan update pada navbar.php berupa penambaha link “Transaksi Saya” untuk penyewa yang sudah login. Sedangkan update pada sidebar.php berupa penambahan menu admin “Verifikasi Pembayaran”.    

12. Dan tahapan yang paling terakhir sekaligus penentuan adalah tahap pengujian. Dan hasilnya aplikasi p9 dapat dijalankan dengan baik.    