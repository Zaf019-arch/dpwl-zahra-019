# P1 - Pengantar DPWL dan Konsep MVC

## 1. Identitas Mahasiswa  
Nama: Zahra AF    
NIM: 2522500019    
Kelas: SI3A    
Repository: https://github.com/Zaf019-arch/dpwl-zahra-019

## 2. Kesinambungan PWD-DPW-DPWL
Ringkas kompetensi PWD dan DPW yang menjadi landasan DPWL    
DPWL disini tidak berperan sebagai pengganti dari PWD maupun DPW, akan tetapi ia disini berperan untuk melanjutkan atau mengorganisir daripada DPW menggunakan konsep MVC (Model, View, Controller) yang dimana jika dalam DPW masih menggunakan konsep PHP terstruktur yang masih menggabungkan antara request user, proses, sql/data, serta html/tampilan dalam file/halaman yang sama menjadi terorganisir dan tanggung jawab ditempatkan pada peran yang berbeda.

## 3. PHP Terstruktur vs MVC
Pengorganisasian PHP Terstruktur dan MVC    
PHP Terstruktur: Satu fitur dapat menggabungkan request, proses, SQL/data, dan HTML/tampilan dalam file atau halaman yang sama.    
MVC: Untuk pengelolaan data, pengendalian proses, dan penyajian antarmuka dipisahkan berdasarkan perannya masing-masing.    
Mengenai tanggung jawab PHP Terstruktur dan MVC    
PHP Terstruktur: Tanggung jawab belum dapat terpisahkan secara langsung.    
MVC: Tanggung jawab sudah terpisah dan dikoordinasikan melalui model, view, dan controller.

## 4. Fungsi Model, View, dan Controller
Jelaskan tanggung jawab utama masing-masing komponen    
Model: Mengakses dan mengolah data;
berinteraksi dengan basis data;
mengembalikan data yang dibutuhkan
Controller    
View: Menampilkan data dan menyusun
antarmuka yang berinteraksi dengan
pengguna.    
Controller: Menerima request, menangani
validasi/sanitasi/aturan proses, dan
menghubungkan Model dengan View.

## 5. Alur Request-Response
Tuliskan urutan interaksi komponen MVC secara konseptual.    
alur MVC dimulai dari user yang melakukan permintaan, kemudian controller menerima permintaan (request) dari user, yang kemudian controller mengurus permintaan tersebut dengan berinteraksi dengan model. Model mengambil data yang diinginkan, lalu controller mengambil data yang sudah didapat dari model tadi, lalu meminta kepada view untuk menampilkan data yang tadi sudah diproses berdasarkan permintaan user dalam bentuk data ataupun tabel. Hasil akhir inilah yang menjadi output yang ditampilkan view kepada user.

## 6. Pemetaan Aplikasi DPW ke MVC
Petakan bagian/fitur aplikasi DPW ke Model, Controller, dan View.     
Pertama, page login    
Model: Bagian ini khusus bertugas ngecek ke database apakah username dan password yang diinput user cocok atau tidak.    
Controller: Ketika user klik tombol "Sign In", controller mengambil input username dan password, merapikan/validasi datanya, lalu meminta tolong ke Model untuk ngecek berdasarkan data admin (database admin). Kalau cocok, maka controller akan membuat session login dan mengarahkan user ke dashboard    
View: Ini tampilan form login-nya, yang ada kotak input username, password, sama tombol "Sign In". Kalau login gagal, tampilan ini juga yang bakal memunculkan pesan error.    
Kedua, alur data obat (CRUD)    
Model: Bertugas menjalankan query SQL (seperti select, insert, update, delete) menggunakan prepared statement biar aman dari hacker. Di sini merupakan tempat penampungan fungsi untuk mengambil list obat, menambah obat baru, mengedit, atau menghapus.    
Controller: Ketika user buka halaman obat, controller akan memanggil model untuk megambil data obat, kemudian mengirim data itu ke View. ketika user klik "Hapus" atau "Edit", controller yang menerima perintahnya dan nyuruh Model buat eksekusi ke database.    
View: Tampilan tabel data obat yang berisi kolom nomor, kode obat, nama obat, satuan, jenis, stok, plus tombol Tambah Data Baru, Edit, dan Hapus    
Ketiga, form cetak laporan / Resep    
Model: Menjalankan query filter data transaksi obat atau resep berdasarkan rentang tanggal tertentu yang dipilih user    
Controller: Menangkap input tanggal awal dan tanggal akhir dari user, memastikan format tanggalnya udah bener, terus minta Model ditarikin data yang sesuai rentang tanggal itu. Setelah dapet, controller ngarahin datanya ke modul cetak atau format PDF.    
View: Tampilan form filter tanggal transaksi beserta tombol "CETAK LAPORAN OBAT", sekaligus pratinjau halaman laporan yang siap diprint oleh user.    


