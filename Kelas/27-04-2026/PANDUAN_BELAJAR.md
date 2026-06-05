# 🎮 BUKU PANDUAN CODING TSABITAH: MEMBUAT WEB YOUTUBER GAMING 🎮

Halo **Tsabitah Asilah Najwa**! 👋 Selamat! Kamu sekarang sudah punya kode web profil yang sangat keren, modern, dan canggih untuk masa depanmu sebagai **YouTuber Gaming** terkenal! 🌟

Kakak sudah membuatkan semua file kodenya di dalam foldermu. Sekarang, Kakak akan mengajarkan langkah demi langkah dari **SANGAT NOL** (dari pencet tombol power laptop) sampai webmu menyala indah dan bisa menyimpan pesan fans ke database MySQL! 

Mari kita mulai petualangan coding kita! 🚀

---

## 🛠️ PERSIAPAN UTAMA (ALAT PERANG KITA)
Sebelum kita mulai mengetik kode, pastikan laptop kamu sudah memiliki **3 Aplikasi Penting** ini:
1. **VS Code (Visual Studio Code)**: Tempat kita melihat dan mengedit kode.
2. **Node.js**: Mesin untuk menjalankan **React** (Frontend).
3. **XAMPP**: Mesin untuk menjalankan **Database MySQL** & **PHP/Laravel** (Backend).

*(Jika salah satu belum ada, minta tolong guru pendampingmu atau install terlebih dahulu ya!)*

---

## 📅 LANGKAH 1: MENYALAKAN LAPTOP & BUKA FOLDER PROYEK
1. Tekan tombol **Power** pada laptopmu dan tunggu sampai masuk ke Desktop Windows.
2. Buka aplikasi **VS Code**.
3. Di pojok kiri atas VS Code, klik menu **File** ➔ lalu pilih **Open Folder...** (atau tekan tombol keyboard `Ctrl` + `K` lalu `Ctrl` + `O` bersamaan).
4. Arahkan dan pilih folder ini: 
   `c:\Users\LENOVO\Documents\X-RPL\Kelas\27-04-2026`
5. Klik tombol **Select Folder**. Sekarang kamu bisa melihat semua file buatan Kakak di panel sebelah kiri!

---

## 🗄️ LANGKAH 2: MENYALAKAN DATABASE MYSQL (XAMPP)
Karena kita ingin menyimpan pesan dari fans ke Database, kita harus menyalakan database MySQL di laptop kita:
1. Klik tombol **Start** Windows (logo Windows di pojok bawah layar).
2. Ketik **XAMPP Control Panel**, lalu tekan **Enter**.
3. Setelah jendela XAMPP terbuka, lihat baris tulisan **Apache** dan **MySQL**.
4. Klik tombol **Start** di sebelah kanan **Apache**. (Tunggu sampai warnanya menjadi hijau).
5. Klik tombol **Start** di sebelah kanan **MySQL**. (Tunggu sampai warnanya menjadi hijau).
6. **Membuat Database Baru**:
   * Buka browser (Google Chrome).
   * Ketik alamat ini di bagian atas: `http://localhost/phpmyadmin` lalu tekan **Enter**.
   * Di panel sebelah kiri, klik tulisan **New** (Baru).
   * Pada kolom *Database name*, ketik persis: `tsabitah_gaming_db`
   * Klik tombol **Create** (Buat).
   * Selesai! Database kosong untuk webmu sudah siap digunakan.

---

## 💻 LANGKAH 3: MENJALANKAN FRONTEND (REACT)
Sekarang kita akan menyalakan tampilan web gaming kamu yang super keren!

1. Di VS Code, buka terminal baru dengan cara: klik menu **Terminal** di bagian atas ➔ pilih **New Terminal** (atau tekan `Ctrl` + `Shift` + `~` di keyboard).
2. Pastikan kamu berada di folder frontend. Ketik perintah ini di terminal lalu tekan **Enter**:
   ```bash
   cd frontend
   ```
   *(Perintah `cd` artinya "Change Directory" atau masuk ke dalam folder `frontend`)*
   
3. **Menginstall modul React**: Ketik perintah ini dan tekan **Enter**:
   ```bash
   npm install
   ```
   *Tunggu sekitar 1-2 menit sampai proses download selesai. Ini seperti mendownload bahan-bahan kue sebelum kita memanggangnya.*

4. **Menyalakan Server React**: Ketik perintah ini dan tekan **Enter**:
   ```bash
   npm run dev
   ```
5. Terminal akan menampilkan tulisan:
   `➜  Local:   http://localhost:5173/`
6. Tahan tombol **Ctrl** di keyboard lalu klik link `http://localhost:5173/` tersebut, atau buka Google Chrome lalu ketik alamat itu.
7. **BUMM! 🎉** Web Profil YouTuber Gaming-mu sudah menyala! Keren sekali kan? Warnanya neon ungu gaming, ada subscriber counter virtual yang bisa bertambah kalau kamu klik tombol **Subscribe**, dan ada tab **Jalur Karir** kamu!

---

## ⚙️ LANGKAH 4: MENJALANKAN BACKEND (LARAVEL)
Tampilan web sudah menyala, tapi jika kamu mengirim pesan dukungan di menu *Guestbook*, pesannya baru tersimpan di browser saja (Mode Demo). Sekarang mari kita hubungkan dengan database asli menggunakan **Laravel**!

1. Kita butuh terminal baru lagi. Di pojok kanan terminal VS Code yang sedang berjalan, ada logo **`+`** (Plus / Create New Terminal). Klik logo plus tersebut untuk membuka tab terminal kedua.
2. Di terminal baru ini, ketik perintah ini untuk masuk ke folder backend lalu tekan **Enter**:
   ```bash
   cd backend
   ```
3. **Menginstall modul Laravel**: Ketik perintah ini dan tekan **Enter**:
   ```bash
   composer install
   ```
   *Tunggu sampai selesai. Ini mengunduh sistem dasar backend Laravel.*

4. **Menghubungkan Database (Migration)**: Kita akan membuat tabel database otomatis lewat Laravel. Ketik perintah ini dan tekan **Enter**:
   ```bash
   php artisan migrate
   ```
   *Jika muncul pertanyaan di terminal, ketik `yes` lalu tekan **Enter**.*

5. **Menyalakan Server Laravel**: Ketik perintah ini dan tekan **Enter**:
   ```bash
   php artisan serve
   ```
6. Terminal akan menampilkan tulisan:
   `INFO  Server running on [http://127.0.0.1:8000].`
7. Selesai! Backend Laravel-mu sekarang sudah aktif mendengarkan pesan dari React.

---

## 🎮 LANGKAH 5: UJI COBA INTEGRASI UTUH!
1. Buka kembali halaman webmu di Google Chrome (`http://localhost:5173`).
2. Perhatikan banner bulat di bagian atas web. Jika Laravel sudah menyala dengan benar, bannernya akan berubah menjadi warna hijau dengan tulisan: 
   🟢 **Mode Database: Terhubung dengan MySQL (Laravel)**
3. Klik menu **Dukungan Fans** di bagian atas web.
4. Isi namamu (misal: `Tsabitah Fans Club`) dan tulis pesan penyemangatmu (misal: `Semangat terus ya Tsabitah, ga sabar mabar bareng! 🎮`).
5. Klik tombol **Kirim Pesan Dukungan**.
6. **YAY! 🎉** Pesanmu langsung masuk, tampil di daftar bawah secara real-time, dan sekarang datamu sudah aman tersimpan di database MySQL laptopmu!

---

## 🧠 APA SAJA YANG SUDAH KITA PELAJARI HARI INI?
* **Frontend (React)**: Bertanggung jawab membuat tampilan web yang cantik, tombol interaktif, animasi, dan navigasi menu yang lancar (*User Friendly*).
* **Backend (Laravel)**: Bertanggung jawab sebagai "jembatan" penghubung. Ia menerima data nama & pesan dari React, memvalidasinya (memastikan tidak kosong), lalu menyuruh Database untuk menyimpannya.
* **Database (MySQL)**: Bertanggung jawab sebagai "gudang penyimpanan" data agar pesan dari fans tidak hilang meskipun laptop dimatikan.

Kamu hebat sekali Tsabitah! Langkah demi langkah ini adalah dasar dari menjadi seorang **Full-Stack Developer** profesional. Teruslah berlatih, dan semoga impianmu menjadi YouTuber Gaming sukses terwujud! 👧🏻🎮✨

*Jika ada error atau kamu bingung di langkah mana saja, tanya Kakak lagi ya! Kakak selalu siap membimbingmu.*
