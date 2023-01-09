<br />
<p align="center">

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
</p>

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://hasnurcentre.org/">
    <img src="https://hasnurcentre.org/wp-content/uploads/2019/08/YHC-2019.png" alt="Logo" width="300">
  </a>

  <h3 align="center">Sistem Pengelolaan Data Mahasiswa</h3>

  <p align="center">
    Sistem Pengelolaan Data Mahasiswa untuk apply internship pada posisi Programmer di Yayasan Hasnur Centre
    <br />
    <br />
    <a href="https://github.com/NafisHandoko/spdm-yhc/issues">Report Bug or Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li><a href="#author">Author</a></li>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li><a href="#installation">Installation</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <!--<li><a href="#acknowledgments">Acknowledgments</a></li>-->
  </ol>
</details>

<!-- Author -->
## Author
Data diri calon peserta magang
* Nama              : Nafis Arinda Rizky Putra Handoko
* NIM               : 202410102065
* Semester          : 5
* Prodi             : Teknologi Informasi
* Kampus            : Universitas Jember
* Domisili          : Jombang, Jawa Timur
* Nomor Whatsapp    : 081332079137
* Email             : naffisioner@gmail.com

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- ABOUT THE PROJECT -->
## About The Project

Website ini adalah project yang dikerjakan atas dasar seleksi magang pada posisi Programmer di Yayasan Hasnur Centre. Dalam sistem ini, pengguna bisa melakukan CRUD data mahasiswa, melakukan pencarian data mahasiswa dan mengurutkannya berdasarkan prodi, semester, kelas, atau tahun angkatan.

<!-- [![Product Name Screen Shot][product-screenshot]](https://github.com/NafisHandoko/spdm-yhc) -->


### Built With

Framework/library/bahasa yang digunakan dalam membangun project ini :

* [Laravel](https://laravel.com/)
* [jQuery](https://jquery.com/)
* [Tailwindcss](https://tailwindcss.com/)

<p align="right">(<a href="#top">back to top</a>)</p>


### Fitur-fitur

Untuk menggunakan aplikasi ini, pengguna bisa melakukan login dengan kredensial berikut :
* Username : admin
* Password : admin123
[![Product Name Screen Shot][ss-login]](https://github.com/NafisHandoko/spdm-yhc)

Jika login gagal maka akan muncul pesan "Login failed"
[![Product Name Screen Shot][ss-login-gagal]](https://github.com/NafisHandoko/spdm-yhc)

Jika login berhasil maka akan diarahkan ke halaman utama
[![Product Name Screen Shot][ss-home]](https://github.com/NafisHandoko/spdm-yhc)

Pengguna bisa menambahkan data mahasiswa dengan menekan tombol biru di sebelah pojok kanan bawah, lalu akan diarahkan ke halaman Tambah Mahasiswa
[![Product Name Screen Shot][ss-tambah-mahasiswa]](https://github.com/NafisHandoko/spdm-yhc)

Pengguna juga bisa melihat detail mahasiswa dengan menekan tombol biru disamping tombol delete pada tabel data mahasiswa di halaman utama, lalu akan diarahkan ke halaman Detail Mahasiswa
[![Product Name Screen Shot][ss-detail-mahasiswa]](https://github.com/NafisHandoko/spdm-yhc)

Untuk mengedit data mahasiswa, pengguna bisa menekan tombol "Ubah" di halaman Detail Mahasiswa, lalu akan diarahkan ke halaman ke halaman Ubah Data Mahasiswa
[![Product Name Screen Shot][ss-ubah-mahasiswa]](https://github.com/NafisHandoko/spdm-yhc)

Untuk menghapus mahasiswa, pengguna bisa menekan tombol merah disamping tombol detail mahasiswa pada tabel data mahasiswa di halaman utama, lalu akan muncul jendela konfirmasi untuk menghapus data mahasiswa
[![Product Name Screen Shot][ss-hapus]](https://github.com/NafisHandoko/spdm-yhc)

Terdapat juga fitur pencarian dimana pengguna bisa mencari data mahasiswa berdasarkan nama atau prodi dengan menginputkan nama atau prodi yang dicari pada kolom input di sebelah atas halaman
[![Product Name Screen Shot][ss-search]](https://github.com/NafisHandoko/spdm-yhc)

Pengguna juga bisa mengurutkan hasil pencarian dengan prodi, semester, kelas, atau tahun angkatan
[![Product Name Screen Shot][ss-search-sort]](https://github.com/NafisHandoko/spdm-yhc)

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- USAGE EXAMPLES -->
## Installation

### Requirements
* [git](https://git-scm.com/)
* [XAMPP](https://www.apachefriends.org/download.html)
* [Composer](https://getcomposer.org/)

### Langkah Instalasi
* Buka terminal/cmd
* Ketik perintah dibawah ini secara berturut-turut di cmd : 
```
git clone https://github.com/NafisHandoko/spdm-yhc.git
cd spdm-yhc
composer install
copy .env.example .env
```
* Buka file .env dan isikan `spdm-yhc` pada `DB_DATABASE`
* Isi `DB_USERNAME` dan `DB_PASSWORD` sesuai konfigurasi XAMPP kalian, secara default `DB_USERNAME=root` dan `DB_PASSWORD` kosong
* Nyalakan Apache dan MySQL di XAMPP
* Buka browser dan ketikkan `http://localhost/phpmyadmin/` di address bar
* Buat database dengan nama `spdm-yhc`
* Buka tab import lalu import file [spdm-yhc.sql](https://github.com/NafisHandoko/spdm-yhc/blob/main/spdm-yhc.sql)
* Kembali ke cmd/terminal lalu ketikkan `php artisan key:generate`
* Terakhir ketik `php artisan serve` lalu buka browser

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the MIT License. See <a href="https://github.com/NafisHandoko/spdm-yhc/blob/master/LICENSE">`LICENSE`</a> for more information.

<p align="right">(<a href="#top">back to top</a>)</p>




<!-- ACKNOWLEDGMENTS -->
<!--
## Acknowledgments

Use this space to list resources you find helpful and would like to give credit to. I've included a few of my favorites to kick things off!

* [Choose an Open Source License](https://choosealicense.com)
* [GitHub Emoji Cheat Sheet](https://www.webpagefx.com/tools/emoji-cheat-sheet)
* [Malven's Flexbox Cheatsheet](https://flexbox.malven.co/)
* [Malven's Grid Cheatsheet](https://grid.malven.co/)
* [Img Shields](https://shields.io)
* [GitHub Pages](https://pages.github.com)
* [Font Awesome](https://fontawesome.com)
* [React Icons](https://react-icons.github.io/react-icons/search)

<p align="right">(<a href="#top">back to top</a>)</p>
-->


<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/NafisHandoko/spdm-yhc.svg?style=for-the-badge
[contributors-url]: https://github.com/NafisHandoko/spdm-yhc/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/NafisHandoko/spdm-yhc.svg?style=for-the-badge
[forks-url]: https://github.com/NafisHandoko/spdm-yhc/network/members
[stars-shield]: https://img.shields.io/github/stars/NafisHandoko/spdm-yhc.svg?style=for-the-badge
[stars-url]: https://github.com/NafisHandoko/spdm-yhc/stargazers
[issues-shield]: https://img.shields.io/github/issues/NafisHandoko/spdm-yhc.svg?style=for-the-badge
[issues-url]: https://github.com/NafisHandoko/spdm-yhc/issues
[license-shield]: https://img.shields.io/github/license/NafisHandoko/spdm-yhc.svg?style=for-the-badge
[license-url]: https://github.com/NafisHandoko/spdm-yhc/blob/master/LICENSE

[ss-login]: documentation/fitur/login.png
[ss-login-gagal]: documentation/fitur/login-gagal.jpg
[ss-home]: documentation/fitur/home.png
[ss-tambah-mahasiswa]: documentation/fitur/tambah-mahasiswa.png
[ss-detail-mahasiswa]: documentation/fitur/detail-mahasiswa.png
[ss-ubah-mahasiswa]: documentation/fitur/ubah-mahasiswa.png
[ss-hapus]: documentation/fitur/hapus.jpg
[ss-hapus-berhasil]: documentation/fitur/hapus-berhasil.jpg
[ss-search]: documentation/fitur/search.png
[ss-search-sort]: documentation/fitur/search-sort.png