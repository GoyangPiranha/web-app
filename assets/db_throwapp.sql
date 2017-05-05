-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 Mei 2017 pada 09.55
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_throwapp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `konveksi`
--

CREATE TABLE `konveksi` (
  `id_konveksi` smallint(6) NOT NULL,
  `nama_konveksi` varchar(100) NOT NULL,
  `deskripsi konveksi` text NOT NULL,
  `id_user` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id_kota` smallint(6) NOT NULL,
  `nama_kota` varchar(25) NOT NULL,
  `id_provinsi` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_pakaian`
--

CREATE TABLE `pesan_pakaian` (
  `id_pesan_pakaian` smallint(6) NOT NULL,
  `id_konveksi` smallint(6) NOT NULL,
  `jumlah_pesanan` int(100) NOT NULL,
  `desain_pakaian` varchar(150) NOT NULL,
  `status_pembayaran_pesanan` tinyint(1) NOT NULL,
  `bukti_pembayaran_pesanan` varchar(150) NOT NULL,
  `status_pengiriman_pesanan` tinyint(1) NOT NULL,
  `status_penerimaan_pesanan` tinyint(1) NOT NULL,
  `jenis_pengiriman_pesanan` varchar(25) NOT NULL,
  `harga_pesanan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` smallint(6) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `mostly_produk` int(255) NOT NULL,
  `kategori_pakaian_pria_produk` tinyint(1) NOT NULL,
  `kategori_pakaian_wanita_produk` tinyint(1) NOT NULL,
  `kategori_baju_produk` tinyint(1) NOT NULL,
  `kategori_jaket_produk` tinyint(1) NOT NULL,
  `kategori_topi_produk` tinyint(1) NOT NULL,
  `kategori_celana_produk` tinyint(1) NOT NULL,
  `ukuran_xs_produk` tinyint(1) NOT NULL,
  `ukuran_s_produk` tinyint(1) NOT NULL,
  `ukuran_m_produk` tinyint(1) NOT NULL,
  `ukuran_l_produk` tinyint(1) NOT NULL,
  `ukuran_xl_produk` tinyint(1) NOT NULL,
  `ukuran_xxl_produk` tinyint(1) NOT NULL,
  `ukuran_xxxl_produk` tinyint(1) NOT NULL,
  `tag_produk` varchar(100) NOT NULL,
  `jumlah_produk` int(100) NOT NULL,
  `harga_produk` double NOT NULL,
  `diskon_produk` double NOT NULL,
  `id_user` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` smallint(6) NOT NULL,
  `nama_provinsi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` smallint(6) NOT NULL,
  `jumlah_produk` int(100) NOT NULL,
  `id_produk` smallint(6) NOT NULL,
  `status_pembayaran_produk` tinyint(1) NOT NULL,
  `bukti_pembayaran_transaksi` varchar(100) NOT NULL,
  `status_pengiriman_produk` tinyint(1) NOT NULL,
  `jenis_pengiriman_produk` varchar(25) NOT NULL,
  `status_penerimaan_produk` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` smallint(6) NOT NULL,
  `username_user` varchar(50) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `tanggal_lahir_user` date NOT NULL,
  `id_kota` smallint(6) NOT NULL,
  `alamat_user` varchar(200) NOT NULL,
  `kode_pos_user` varchar(6) NOT NULL,
  `foto_profile_user` varchar(100) NOT NULL,
  `foto_background_user` varchar(100) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `contact_user` varchar(25) NOT NULL,
  `deskripsi_user` text NOT NULL,
  `rekening_user` varchar(20) NOT NULL,
  `jumlah_pelangan_user` int(100) NOT NULL,
  `rating_user` int(1) NOT NULL,
  `premium_account_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konveksi`
--
ALTER TABLE `konveksi`
  ADD PRIMARY KEY (`id_konveksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `pesan_pakaian`
--
ALTER TABLE `pesan_pakaian`
  ADD PRIMARY KEY (`id_pesan_pakaian`),
  ADD KEY `id_konveksi` (`id_konveksi`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_kota` (`id_kota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `konveksi`
--
ALTER TABLE `konveksi`
  ADD CONSTRAINT `konveksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD CONSTRAINT `kota_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesan_pakaian`
--
ALTER TABLE `pesan_pakaian`
  ADD CONSTRAINT `pesan_pakaian_ibfk_1` FOREIGN KEY (`id_konveksi`) REFERENCES `konveksi` (`id_konveksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
