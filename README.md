Framework laravel : 7
PHP >= 7.2.5

Penggunaan use db terlebih dahulu, lalu php artisan serve dan menggunakan http://127.0.0.1:8000/

Website 2 level user ada admin dan tim Acc

adnmin :
1. Menambahkan pinjaman kendaraan
Akun 
email : admin@admin.com
pw : 123456

tim acc :
1. Memproses status pinjaman
Akun 
email : timacc@timacc.com
pw : 123456

Proses :
1. Data sudah ada seperti data kendaraan dan data pegawai/driver
2. Admin tinggal memasukkan data pinjaman pada form yang telah tersedia
3. Admin hanya bisa memasukkan status proses dan tidak bisa membuat status menjadi ditolak/diterima
4. Pegawai/driver yang meminjam menunggu persetujuan tim acc
5. Tim acc melihat permintaan yang sedang diproses pada menu yang sudah tersedia
6. Tim acc akan mengedit status.
7. Status telah diperbarui dan tidak bisa diubah kembali.
