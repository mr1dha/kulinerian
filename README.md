Kulinerian adalah website yang menghimpun kuliner kuliner di Aceh.

Konfigurasi dan Cara Menjalankan
1) Buka git bash/CMD/terminal di komputer

2) Arahkan ke direktori tempat project akan di simpan, Jika kamu memakai XAMPP boleh disimpan di folder 'htdocs'

3) Clone peoject dengan mengetikkan perintah:
	"git clone https://github.com/mr1dha/kulinerian.git"

4) Masuk ke direktori project dengan mengetikkan perintah:
	"cd kulinerian"

4) Lalu ambil data dari vendor framework dengan mengetikkan perintah:
	"composer install" 
	(pastikan kamu sudah instal composer)

5) Kemudian copy file environtment dengan menjalankan perintah:
	"cp .env.example .env"
	Lalu buka direktori project dan buka file '.env' dengan text editor favorit kamu 

6) Langkah selanjutnya adalah men-generate key dengan mengetikkan perintah:
	"php artisan key:generate" 

7) Kemudian cari 'DB_DATABASE' dan ubah valuenya menjadi 'kulinerian' (tanpa tanda petik)

8)  Langkah selanjutnya adalah mendownload file database melalui link berikut:
	https://drive.google.com/open?id=1ou2y0fTtcSWuvj2bRKICujdsN3M7xNwM
	Lalu ekstrak file tersebut di suatu direktori

9)  Kemudian jalankan XAMPP kamu dan jalankan Apache dan MySql, lalu buka 
localhost/phpmyadmin 

10) Buat database baru dengan nama 'kulinerian'

11) Klik menu import dan upload file Database yang di download tadi lalu scroll ke paling bawah dan klik Go/Kirim

12) Kembali ke Terminal/CMD/git bash dan ketikan perintah:
	"php artisan serve"

13. Buka browser internet favorit kamu dan ketikan 'localhost:8000'. Jika berhasil akan muncul Homepage Kulinerian.