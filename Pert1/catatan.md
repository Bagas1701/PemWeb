# Catatan Pertemuan 1
## website
- website memiliki address seperti facebook, google. yang memiliki domain di address website (.com, .yahoo) 
- usahaain kl mau buat website, kl ingin ambil tamplate orang lain biasakan kasih tau link ambilnya dari mana
- bahasa pemograman yang akan kita pake dalam membuat website adalah html
- HTML digunakan untuk membangun struktur dasar sebuah halaman web.
---

## Membuat nginx di docker
### yang diperlukan untuk mengnyambungkan localhost kedalam docker
- buat folder coding didalamnya ada folder nginx, folder src, file .env, file docker-compose.yml

- buat folder nginx didalamnya file nginx.conf = digunakan untuk mengatur cara Nginx menangani permintaan HTTP yang berisi port, domain, lokasi file website.

- buat folder src (coding) {bisa berisi html, css, js, dll untuk kita ngoding}

- buat File .env = digunakan untuk menyimpan variabel lingkungan (environment variables) secara terpisah dari file docker-compose.yml.

- buat file docker-compose.yml (Docker Compose ini digunakan untuk menjalankan Nginx sebagai web server.) yang berisi
    - version '3'
    - services -> web -> image, ports, dan volumes
     - image = yang dipake nginx:latest 
    - ports ("80:80") = dmn Port 80 pada host akan diarahkan ke port 80 dalam container. 
    - volume ini adalah tempat kita menjalankan link filenya
        - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf diambil dari folder nginx yang ada di host dan di copy ke dalam container di /etc/nginx/conf.d/default.conf (File konfigurasi Nginx diambil dari ./nginx/nginx.conf.)
        - ./src:/usr/share/nginx/html diambil dari src yang ada di host dan di copy ke dalam container di /usr/share/nginx/html (File website (HTML, CSS, JS, dll.) disimpan di folder ./src pada host.)

---
## Membuka docker
- buka terminal
- ketikkan perintah "docker-compose up" untuk menjalankan container Nginx
- buka browser dan ketikkan "localhost" untuk melihat website yang yang masih kosong
- lalu buka vscode di terminal
- coding websitemu sendiri di src di folder Pert1
---
## Membuat website
- buat file index.html di folder src
- tulis kode html di dalamnya
- pertama kita akan pake tag `<html>` atau '!' untuk membuka dokumen html
- kedua, kita akan pake `<head>` untuk bagian kepala HTML
- selanjutnya kita pake `<title>` untuk judul wbsite bagian paling atas
- kita pake `<body>` untuk bagian tubuh website lalu kita atur apa saja tag yang akan kita pake sebagai berikut:
    - kita pake `<h1>` untuk judul website
    - kita pake `<p>` untuk paragraf
    - kita pake `<img>` untuk gambar
    - kita pake `<a>` untuk link
    - kita pake `<ul>` untuk daftar
    - kita pake `<li>` untuk item
    - kita pake `<form>` untuk form`
- setelah itu kita pake tag `</body>` untuk mengakhiri tag body
- setelah itu kita pake tag `</html>` untuk mengakhiri tag html
- buka browser dan ketikkan "localhost" untuk melihat website yang sudah kita buat
---
## Menutup docker
- buka terminal
- ketikkan perintah "docker-compose down" untuk menutup container Nginx
---

### Project 
- analisa
- coding
- portofolio
- commodiprofile

### tugas setiap pert
- catatan
- analisa
- coding

---




