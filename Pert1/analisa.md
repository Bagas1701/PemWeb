# Analisa Docker
## Analisis 5W + 1H
- What
    - Apa tujuan utama dari penggunaan Docker dalam proyek ini?
    Jawab: Tujuan utama adalah untuk memudahkan pengembangan dan pengujian aplikasi dengan menggunakan containerisasi.
- Who
    - Siapa saja yang dapat mengakses ke server Docker ini?
    Jawab: Server Docker ini bisa diakses oleh siapa saja tergantung pada Konfigurasi Jaringan dan Keamanan. 
- When
    - Kapan bisa diakses, dibuat, dihapus , dll?
    Jawab: Server Docker ini bisa diakses, dibuat, dihapus, dll. dimanapun dan kapan pun tergantung pada Konfigurasi Jaringan dan Keamanan.
- Where
    - Di mana data aplikasi disimpan di dalam container?
    jawab: Data aplikasi di simpan di dalam container di dalam server Docker.
- Why
    - mengapa kita menggunakan docker?
      Jawab: Karena kita dapat mengisolasi aplikasi dan menginstalnya dengan mudah.
- How
    - Bagaimana cara memastikan container tetap aman dari serangan eksternal?
    Jawab: Dengan menggunakan firewall dan memastikan bahwa container tidak terhubung ke internet.
## Analisis SWOT 
- Strengths(Kekuatan)
    - dengan pake docker, kita bisa menjalankan proyek ini dimana saja dan kapan saja
    - dengan menyalakan docker, server langsung berjalan
    - ada pengamanan data di docker volume (dimana jika container docker dihapus atau di install ulang maka data akan tetap ada)
    - dapat menjalankan database dengan menggunakan container

- Weakness(Kelemahan)
    - tidak ada debugging (pemberitahuan error) jika terjadi kesalahan pada code (dimana kita harus cari kesalahannya secara manual)
    - tidak ada hak akses yang jelas
    - keamanan masih belum cukup kuat

- Opportunities(Peluang)
    - dapat membuat dan menjalankan website dalam bentuk container
    - dapat dikembangkan (karena ini masih awal, jadi masih sederhana)
    - dapat dipakai bahasa pemograman lain selain html

- Threats(ancaman)
    - tidak ada keamanan (belum ada aturan keamanan yang jelas)
    - hak akses masih terbuka/dalam bentuk root (siapa saja bisa mengakses server ini)

---
# Analisa Program Latihan
## 1. Tujuan Program Latihan
Tujuan untuk membuat program latihan ini adalah untuk memahami konsep dasar html dalam membuat halaman web sederhana. seperti membuat home page, dan profile page. 
## 2. Tugas yang dibuat
- Home
- profile
## 3. Tag yang dipakai Program latihan
- `<!DOCTYPE html>` : Dokumen HTML
- `<head>` : Bagian Kepala HTML
- `<title>` : Judul Halaman
- `<body>` : Bagian Tubuh HTML
- Hading`<h1>` : Judul Halaman
- Sub Hading `<h2,h3,..>` : Bagian Sub Judul
- `<p>` : Paragraf
- `<a>` : Tautan page selanjutnya, dan page home
- `<img>` : Gambar
- `<footer>` : Bagian Bawah Body HTML
- `<center>` : Bikin isi website pindah posisi rata tengah
## 4. Manfaat dalam mengerjakan program latihan
dimana saya dapat memahami konsep dasar html dan dapat membuat halaman web sederhana.
