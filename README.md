# 🏛️ WARISAN DIGITAL.ID
> *Monumen Digital Sejarah Pemrograman Indonesia*

**WARISAN DIGITAL.ID** adalah sebuah platform dokumentasi sejarah teknologi yang didedikasikan untuk perjalanan panjang pemrograman di Indonesia—dari era kartu plong (punched cards) tahun 1970-an hingga era AI dan Startup Unicorn masa kini. Proyek ini menggabungkan narasi sejarah yang kuat dengan desain modern yang premium.

---

## 🛠️ Tech Stack
Website ini dibangun dengan arsitektur modern untuk memastikan performa dan estetika terbaik:
- **Core**: WordPress (CMS) & PHP.
- **Styling**: Tailwind CSS (via Vite) untuk desain responsif dan kustom.
- **Frontend Logic**: Vanilla JavaScript (ES6+) untuk animasi dan interaksi.
- **Imagery**: AI-Generated Visuals (DALL-E 3) untuk reka ulang momen sejarah.
- **Typography**: Google Fonts (Newsreader, Inter, Roboto).

---

## ✨ Fitur Utama

### 1. Interaktif Archipelago Map
Peta Indonesia di halaman utama yang menunjukkan titik-titik krusial sejarah teknologi di berbagai kota (Jakarta, Bandung, Surabaya, Medan, Makassar).
- **Lokasi**: `front-page.php`
- **Fitur**: Responsif (mobile-friendly), animasi pulse, dan tooltip informasi.

### 2. Galeri Sejarah AI-Generated
Galeri visual yang menampilkan reka ulang momen bersejarah Indonesia menggunakan teknologi AI.
- **Lokasi**: `templates/page-galeri.php`
- **Aset**: Tersimpan di `assets/gallery/`.

### 3. Search Overlay Premium
Sistem pencarian layar penuh (Full-screen Overlay) dengan efek *backdrop blur* kristal.
- **Trigger**: Ikon pencarian di Navbar.
- **Script**: `src/main.js` (Fungsi `initSearch`).

### 4. Custom Login Branding
Halaman login WordPress (`wp-login.php`) telah di-rebrand total dengan tema *Luxury Dark* agar senada dengan identitas visual website.
- **Lokasi**: `functions.php` (Fungsi `warisandigital_login_styling`).

---

## 👤 Branding Personal (Vibe Coder)
Halaman **About** dirancang untuk memperkuat identitas pengembang:
- **Nama**: Muhammad Alif Maulana Nugraha.
- **Identitas**: Vibe Coder & Fullstack Developer.
- **Dynamic Marquee**: Barisan logo teknologi bergulir otomatis (React, Astro, Gemini, Claude, IDE Antigravity, dll).

---

## 📂 Struktur File Penting
- `front-page.php`: Halaman utama, Peta, dan Timeline.
- `header.php`: Navigasi & Search Overlay.
- `footer.php`: Navigasi bawah & Link Sosial Media.
- `search.php`: Template hasil pencarian.
- `templates/page-about.php`: Profil personal & Marquee teknologi.
- `templates/page-galeri.php`: Galeri visual sejarah.
- `src/main.js`: Logika interaksi utama (Nav, Scroll, Search, Typewriter).
- `functions.php`: Branding login, enqueue script, dan konfigurasi tema.

---

## 🚀 Panduan Kustomisasi
- **Link Sosial**: Ubah di `footer.php` dan `templates/page-about.php`.
- **Foto Profil**: Ganti file `assets/img/alif.jpg`.
- **Tech Stack Logo**: Tambah/kurangi array `$techs` di `templates/page-about.php`.

---
*Dibuat dengan ❤️ oleh Muhammad Alif Maulana Nugraha sebagai kontribusi untuk komunitas programmer Indonesia.*
