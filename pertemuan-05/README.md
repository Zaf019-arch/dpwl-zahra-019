# pertemuan-05

### 1. Penambahan Menu Manajemen Kendaraan
instruksi A.1-A.4 yaitu menambahkan 1 menu pada sidebar, yaitu menu "Manajemen Kendaraan" yang berlokasikan di *application\views\templates\sidebar.php*. Kemudian menghubungkan menu ke url admin/mobil. URL tersebut menjadi akses ke halaman daftar kendaraan melalui *route* yang disediakan pada konfigurasi aplikasi. Ia berlokasikan di *application/config/routes.php*. Selanjutnya tahap an terakhir pada tahap A ini adalah pengujian tampilan dan navigasi menu. Ketika tahapan-tahapan tadi sudah dilalui dengan benar, maka menu "Manajemen Kendaraan" akan muncul di bawah "Manajemen Admin". Kemudian periksa kembali apakah URL berubah menjadi *admin/mobil*, pada tahap ini halaman kendaraan belum dapat ditampilkan karena *mobil_controller.php* belum dibuat. Dengan demikian, maka output yang dihasilkan akan berupa tulisan "Controller tidak ditemukan"

### 2. Penambahan Route Manajemen Kendaraan 
Pada B.1-B.4 terdapat instruksi untuk menambahkan route Manajemen Kendaraan, yang dimana instruksi pada B.1 merupakan instruksi untuk menambahkan 3 route, yaitu tambah, ubah, dan hapus kendaraan yang berlokasikan di  *application/config/rutes.php*. Kemudian instruksi pada B.2 adalah instruksi untuk menguji konfigurasi route yang telah dibuat, sehingga hasil output yang diharapkan masih berupa *"Controller tidak ditemukan"*, karena Mobil_Controller.php masih belum ditambahkan.

### 3. Mengimplementasikan READ Data Kendaraan dengan MVC
C.1 -> Menambahkan application\models\Mobil_model.php yang bertanggung jawab menjalankan query untuk
mengakses data pada tabel t_mobil.    
C.2 -> Membuat method getAll() untuk membaca data kendaraan pada application\models\Mobil_model.php dan untuk mengambil seluruh data
kendaraan dari tabel t_mobil.    
C.3 -> Membuat application\controllers\Mobil_controller.php. Controller menangani permintaan pengguna, memanggil Model untuk memperoleh data kendaraan, dan
meneruskan data tersebut ke View. Ikuti struktur Controller yang telah digunakan pada
application\controllers\Madmin_controller.php agar implementasi tetap sesuai dengan arsitektur aplikasi.    
C.4 -> Membuat Method index() untuk Mengambil Data Kendaraan. Penambahan method index() pada application\controllers\Mobil_controller.php. Method ini bertugas 
memanggil method getAll() pada application\models\Mobil_model.php, kemudian meneruskan hasilnya ke
View daftar kendaraan.    
C.5 -> Membuat View Daftar Kendaraan Dasar (application\views\admin\mobil_view.php.)

### 4. Membuat Beberapa Method
Beberapa method yang dibuat, diantaranya yaitu method  create() pada application\models\Mobil_model.php, method tambah() pada application\controllers\Mobil_controller.php, method renderMobil(), method validateMobilInput(), method uploadFoto(), method hapusFotoBaru(), dan method tambah().    
D.3 -> Membuat formulir  Tambah Kendaraan pada application\views\admin\mobil_view.php    
D.4 -> Menguji INSERT dan memastikan READ tetap berfungsi    
dalam D.4 ini ada beberapa tahapan yang harus dilalui, yaitu yang pertama adlah memastikan insert data berhasil, dan punya saya berhasil. Kedua adalah memastikan READ tetap berjalan, dan itu berhasil juga. Selanjutnya adalah menguji validasi & error handling. Nah sesuai dengan yang diharapkan, ketika menginput data yang tidak sesuai maka sistem akan memvalidasi dengan tidak dapat menyimpan perubahan.    

## 5. Mengimplementasikan UPDATE Data Kendaraan dengan MVC






 