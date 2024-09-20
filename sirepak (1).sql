-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2023 pada 02.33
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirepak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_20_072649_create_tabel1.1_table', 1),
(6, '2023_09_30_212557_create_tabel_1_2_table', 1),
(7, '2023_09_30_212602_create_tabel_1_3_table', 1),
(8, '2023_09_30_231423_create_tabel_2_a_table', 1),
(9, '2023_09_30_231428_create_tabel_2_b_table', 1),
(10, '2023_09_30_232938_create_tabel_3_a_1_table', 1),
(11, '2023_09_30_232943_create_tabel_3_a_2_table', 1),
(12, '2023_09_30_232949_create_tabel_3_a_3_table', 1),
(13, '2023_09_30_232955_create_tabel_3_a_4_table', 1),
(14, '2023_09_30_233001_create_tabel_3_a_5_table', 1),
(15, '2023_10_01_000822_create_tabel_3_b_1_table', 1),
(16, '2023_10_01_000827_create_tabel_3_b_2_table', 1),
(17, '2023_10_01_000831_create_tabel_3_b_3_table', 1),
(18, '2023_10_01_000943_create_tabel_3_b_4_1_table', 1),
(19, '2023_10_01_000948_create_tabel_3_b_4_2_table', 1),
(20, '2023_10_01_001007_create_tabel_3_b_5_table', 1),
(21, '2023_10_01_001012_create_tabel_3_b_6_table', 1),
(22, '2023_10_01_001036_create_tabel_3_b_7_1_table', 1),
(23, '2023_10_01_001040_create_tabel_3_b_7_2_table', 1),
(24, '2023_10_01_003015_create_tabel_3_b_7_3_table', 1),
(25, '2023_10_01_003018_create_tabel_3_b_7_4_table', 1),
(26, '2023_10_01_003743_create_tabel_4_table', 1),
(27, '2023_10_01_005014_create_tabel_5_a_table', 1),
(28, '2023_10_01_005018_create_tabel_5_b_table', 1),
(29, '2023_10_01_005021_create_tabel_5_c_table', 1),
(30, '2023_10_01_010705_create_tabel_6_a_table', 1),
(31, '2023_10_01_010709_create_tabel_6_b_table', 1),
(32, '2023_10_01_012635_create_tabel_7_table', 1),
(33, '2023_10_01_013110_create_tabel_8_a_table', 1),
(34, '2023_10_01_013648_create_tabel_8_b_1_table', 1),
(35, '2023_10_01_013651_create_tabel_8_b_2_table', 1),
(36, '2023_10_04_204516_create_tabel_8_c_1_table', 1),
(37, '2023_10_04_204520_create_tabel_8_c_2_table', 1),
(38, '2023_10_04_204527_create_tabel_8_c_3_table', 1),
(39, '2023_10_04_204534_create_tabel_8_c_4_table', 1),
(40, '2023_10_04_204722_create_tabel_8_d_1_a_table', 1),
(41, '2023_10_04_204728_create_tabel_8_d_1_b_table', 1),
(42, '2023_10_04_204732_create_tabel_8_d_1_c_table', 1),
(43, '2023_10_04_205525_create_tabel_8_d_2_table', 1),
(44, '2023_10_04_211539_create_tabel_8_e_1_table', 1),
(45, '2023_10_04_211543_create_tabel_8_e_2_table', 1),
(46, '2023_10_04_211603_create_tabel_8_f_1_1_table', 1),
(47, '2023_10_04_211608_create_tabel_8_f_1_2_table', 1),
(48, '2023_10_04_211659_create_tabel_8_f_2_table', 1),
(49, '2023_10_04_211702_create_tabel_8_f_3_table', 1),
(50, '2023_10_04_211758_create_tabel_8_f_4_1_table', 1),
(51, '2023_10_04_211802_create_tabel_8_f_4_2_table', 1),
(52, '2023_10_04_211806_create_tabel_8_f_4_3_table', 1),
(53, '2023_10_04_211810_create_tabel_8_f_4_4_table', 1),
(54, '2023_10_04_212322_create_tabel_ref_8_e_2_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_1_1`
--

CREATE TABLE `tabel_1_1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lembaga_mitra` varchar(191) NOT NULL,
  `tingkat` enum('internasional','nasional','lokal') NOT NULL,
  `judul_kegiatan_kerjasama` varchar(191) NOT NULL,
  `manfaat_bagi_ps_yang_diakreditasi` varchar(191) NOT NULL,
  `waktu_dan_durasi` varchar(191) NOT NULL,
  `bukti_kerjasama` varchar(191) NOT NULL,
  `tahun_berakhirnya_kerjasama` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_1_1`
--

INSERT INTO `tabel_1_1` (`id`, `lembaga_mitra`, `tingkat`, `judul_kegiatan_kerjasama`, `manfaat_bagi_ps_yang_diakreditasi`, `waktu_dan_durasi`, `bukti_kerjasama`, `tahun_berakhirnya_kerjasama`, `created_at`, `updated_at`) VALUES
(1, 'PT. CIPTA PERDANA TEKNOLOGI', 'nasional', 'Program kerjasama pendidikan penelitian dan pengebdian masyarakat universitas negeri', 'Mengirimkan mahasiswa praktik industri dan memberi masukan kepada program studi', '5 Tahun', 'document20231126065611.pdf', '2025-01-01', '2023-11-25 23:56:11', '2023-11-25 23:56:11'),
(2, 'PT ADILUHUNG SARANASEGARA INDONESIA', 'lokal', 'Program kerjasama pendidikan penelitian dan pengebdian masyarakat universitas negeri', 'Mengirimkan mahasiswa praktik industri dan memberi masukan kepada program studi', '5 Tahun', 'document20231126065806.pdf', '2025-01-01', '2023-11-25 23:58:07', '2023-11-25 23:58:07'),
(3, 'Maulidan Games', 'nasional', 'Workshop pengembagan aplikasi Games dan Testing.', 'Mengirimkan mahasiswa praktik industri dan memberi masukan kepada program studi', '5 Tahun', 'document20231126065939.pdf', '2025-01-01', '2023-11-25 23:59:39', '2023-11-25 23:59:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_1_2`
--

CREATE TABLE `tabel_1_2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lembaga_mitra` varchar(191) NOT NULL,
  `tingkat` enum('internasional','nasional','lokal') NOT NULL,
  `judul_kegiatan_kerjasama` varchar(191) NOT NULL,
  `manfaat_bagi_ps_yang_diakreditasi` varchar(191) NOT NULL,
  `waktu_dan_durasi` varchar(191) NOT NULL,
  `bukti_kerjasama` varchar(191) NOT NULL,
  `tahun_berakhirnya_kerjasama` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_1_2`
--

INSERT INTO `tabel_1_2` (`id`, `lembaga_mitra`, `tingkat`, `judul_kegiatan_kerjasama`, `manfaat_bagi_ps_yang_diakreditasi`, `waktu_dan_durasi`, `bukti_kerjasama`, `tahun_berakhirnya_kerjasama`, `created_at`, `updated_at`) VALUES
(1, 'Lembaga Akreditasi mandiri (LAM) Kependidikan', 'nasional', 'Perancangan dan Pengembangan Sistem Informasi Manajemen Akreditasi (SIMAK) pada Lembaga Akreditasi Mandiri (LAM) Kependidikan', 'Pelaksanaan Tri Dharma Perguruan Tinggi yakni implementasi keilmuan kepada masyarakat', '1 Tahun', 'document20231126070152.pdf', '2020-01-01', '2023-11-26 00:01:52', '2023-11-26 00:01:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_1_3`
--

CREATE TABLE `tabel_1_3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lembaga_mitra` varchar(191) NOT NULL,
  `tingkat` enum('internasional','nasional','lokal') NOT NULL,
  `judul_kegiatan_kerjasama` varchar(191) NOT NULL,
  `manfaat_bagi_ps_yang_diakreditasi` varchar(191) NOT NULL,
  `waktu_dan_durasi` varchar(191) NOT NULL,
  `bukti_kerjasama` varchar(191) NOT NULL,
  `tahun_berakhirnya_kerjasama` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_1_3`
--

INSERT INTO `tabel_1_3` (`id`, `lembaga_mitra`, `tingkat`, `judul_kegiatan_kerjasama`, `manfaat_bagi_ps_yang_diakreditasi`, `waktu_dan_durasi`, `bukti_kerjasama`, `tahun_berakhirnya_kerjasama`, `created_at`, `updated_at`) VALUES
(1, 'SMA Wachid Hasyim 2 Ngelom Sidoarjo', 'lokal', 'Kerjasama dalam pelaksanaan Tri Darma Perguruan Tinggi', 'Penelitian, Magang untuk mahasiswa dan PKM (sedang dilaksanakan)', '1 Tahun', 'document20231126072146.pdf', '2026-01-01', '2023-11-26 00:21:46', '2023-11-26 00:21:46'),
(2, 'SMA Wachid Hasyim 2 Ngelom Sidoarjo', 'lokal', 'Kerjasama dalam pelaksanaan Tri Darma Perguruan Tinggi', 'Penelitian, Magang untuk mahasiswa dan PKM (sedang dilaksanakan)', '1 Tahun', 'document20231126072310.pdf', '2026-01-01', '2023-11-26 00:23:10', '2023-11-26 00:23:10'),
(3, 'SMP Negeri 2 Magetan', 'lokal', 'Pelatihan Penggunaan  Digital Mindmapping Bagi Guru SMP Negeri 2 Magetan untuk Meningkatkan Kompetensi Pedagogik.', 'Pelaksanaan Tri Dharma Perguruan Tinggi yakni implementasi keilmuan kepada masyarakat', '1 Tahun', 'document20231126072420.pdf', '2019-01-01', '2023-11-26 00:24:20', '2023-11-26 00:24:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_2_a`
--

CREATE TABLE `tabel_2_a` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_akademik` varchar(191) NOT NULL,
  `daya_tampung` int(11) NOT NULL,
  `jumlah_calon_mahasiswa_pendaftar` int(11) NOT NULL,
  `jumlah_calon_mahasiswa_lulus_seleksi` int(11) NOT NULL,
  `jumlah_mahasiswa_baru_reguler` int(11) NOT NULL,
  `jumlah_mahasiswa_baru_transfer` int(11) NOT NULL,
  `jumlah_mahasiswa_aktif_reguler` int(11) NOT NULL,
  `jumlah_mahasiswa_aktif_transfer` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_2_a`
--

INSERT INTO `tabel_2_a` (`id`, `tahun_akademik`, `daya_tampung`, `jumlah_calon_mahasiswa_pendaftar`, `jumlah_calon_mahasiswa_lulus_seleksi`, `jumlah_mahasiswa_baru_reguler`, `jumlah_mahasiswa_baru_transfer`, `jumlah_mahasiswa_aktif_reguler`, `jumlah_mahasiswa_aktif_transfer`, `created_at`, `updated_at`) VALUES
(1, 'TS-4', 0, 0, 0, 0, 0, 0, 0, '2023-11-26 00:25:32', '2023-11-26 00:25:32'),
(2, 'TS-3', 0, 0, 0, 0, 0, 0, 0, '2023-11-26 00:26:23', '2023-11-26 00:26:23'),
(3, 'TS-2', 0, 0, 0, 0, 0, 0, 0, '2023-11-26 00:26:43', '2023-11-26 00:26:43'),
(4, 'TS-1', 80, 221, 75, 75, 0, 75, 0, '2023-11-26 00:27:18', '2023-11-26 00:27:18'),
(5, 'TS', 80, 187, 85, 85, 0, 160, 0, '2023-11-26 00:28:51', '2023-11-26 00:28:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_2_b`
--

CREATE TABLE `tabel_2_b` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program_studi` varchar(191) NOT NULL,
  `jumlah_mahasiswa_aktif_ts_2` int(11) NOT NULL,
  `jumlah_mahasiswa_aktif_ts_1` int(11) NOT NULL,
  `jumlah_mahasiswa_aktif_ts` int(11) NOT NULL,
  `jumlah_mahasiswa_asing_penuh_waktu_ts_2` int(11) NOT NULL,
  `jumlah_mahasiswa_asing_penuh_waktu_ts_1` int(11) NOT NULL,
  `jumlah_mahasiswa_asing_penuh_waktu_ts` int(11) NOT NULL,
  `jumlah_mahasiswa_asing_paruh_waktu_ts_2` int(11) NOT NULL,
  `jumlah_mahasiswa_asing_paruh_waktu_ts_1` int(11) NOT NULL,
  `jumlah_mahasiswa_asing_paruh_waktu_ts` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_3_a_1`
--

CREATE TABLE `tabel_3_a_1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dosen` varchar(191) NOT NULL,
  `nidn` varchar(191) NOT NULL,
  `pendidikan_pasca_sarjana_magister` varchar(191) DEFAULT NULL,
  `pendidikan_pasca_sarjana_doktor` varchar(191) DEFAULT NULL,
  `bidang_keahlian` varchar(191) DEFAULT NULL,
  `kesesuaian_dengan_kompetensi_inti_ps` tinyint(4) DEFAULT NULL,
  `jabatan_akademik` varchar(191) DEFAULT NULL,
  `sertifikat_pendidik_profesional` varchar(191) DEFAULT NULL,
  `sertifikat_kompetensi_profesi_industri` varchar(191) DEFAULT NULL,
  `mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi` varchar(191) DEFAULT NULL,
  `kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu` tinyint(4) DEFAULT NULL,
  `mata_kuliah_yang_diampu_pada_ps_lain` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_3_a_1`
--

INSERT INTO `tabel_3_a_1` (`id`, `nama_dosen`, `nidn`, `pendidikan_pasca_sarjana_magister`, `pendidikan_pasca_sarjana_doktor`, `bidang_keahlian`, `kesesuaian_dengan_kompetensi_inti_ps`, `jabatan_akademik`, `sertifikat_pendidik_profesional`, `sertifikat_kompetensi_profesi_industri`, `mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi`, `kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu`, `mata_kuliah_yang_diampu_pada_ps_lain`, `created_at`, `updated_at`) VALUES
(1, 'WIYLI YUSTANTI', '003027708', 'Teknik Informatika', NULL, 'Datamining dan basis data', 1, 'lektor kepala', 'Ada + No Sertif', NULL, 'Praktek Pemrograman Basis Data, sistem basis data, praktikum sistem basis data, data warehousing, praktikum datawarehousing, statistika', 1, 'Praktek Pemrograman Basis Data, praktikum sistem basis data,  praktikum datawarehousing, statistika', '2023-11-26 02:33:00', '2023-11-26 02:33:00'),
(2, 'DWI FATRIANTO SUYATNO', '0020127904', 'Sistem Informasi', 'Pemrogarman Web dan Rekayasa Perangkat Lunak', '1', 1, 'Lektor', 'Ada + No Sertif', NULL, 'pemrograman dasar, sistem informasi entreprise, teknologi dan infrastruktur ebisnis, struktur data, pemodelan dan simulasi,  rekayasa perangkat lunak', 1, 'pemrograman dasar, struktur data,  rekayasa perangkat lunak', NULL, NULL),
(3, 'RAHADIAN BISMA', '009028702', 'Sistem Informasi', NULL, 'Audit, tata Kelola', 1, 'Asisten Ahli', 'Ada + No Sertif', NULL, 'Manajemen layanan TI, Arsitektur orkom, perancangan infrastruktur TI, Pengantar TI, Manajemen Proyek SI, tata kelola jarkom, keamanan SI, Audit SI, tatakelola TI', 1, ' Arsitektur orkom,  Pengantar TI', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_3_a_2`
--

CREATE TABLE `tabel_3_a_2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dosen` varchar(191) NOT NULL,
  `jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_2` int(11) NOT NULL,
  `jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_1` int(11) NOT NULL,
  `jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts` int(11) NOT NULL,
  `rata_rata_1` double(8,2) NOT NULL,
  `jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_2` int(11) NOT NULL,
  `jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_1` int(11) NOT NULL,
  `jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts` int(11) NOT NULL,
  `rata_rata_2` double(8,2) NOT NULL,
  `rata_rata_jumlah_bimbingan_di_semua_program_semester` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_3_a_2`
--

INSERT INTO `tabel_3_a_2` (`id`, `nama_dosen`, `jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_2`, `jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_1`, `jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts`, `rata_rata_1`, `jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_2`, `jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_1`, `jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts`, `rata_rata_2`, `rata_rata_jumlah_bimbingan_di_semua_program_semester`, `created_at`, `updated_at`) VALUES
(1, 'WIYLI YUSTANTI', 0, 0, 0, 0.00, 0, 2, 1, 1.00, 0.50, '2023-11-26 02:40:40', '2023-11-26 02:50:45'),
(2, 'DWI FATRIANTO SUYATNO', 0, 0, 0, 0.00, 1, 2, 2, 1.67, 0.83, '2023-11-26 02:41:39', '2023-11-26 02:51:03'),
(3, 'RAHADIAN BISMA', 0, 0, 0, 0.00, 2, 2, 1, 1.67, 0.83, '2023-11-26 02:51:34', '2023-11-26 02:51:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_3_a_3`
--

CREATE TABLE `tabel_3_a_3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dosen` varchar(191) NOT NULL,
  `dtps` tinyint(4) NOT NULL,
  `ewmp_pendidikan_ps_yang_diakreditasi` double(8,2) NOT NULL,
  `ewmp_pendidikan_ps_lain_di_dalam_pt` double(8,2) NOT NULL,
  `ewmp_pendidikan_ps_lain_di_luar_pt` double(8,2) NOT NULL,
  `ewmp_penelitian` double(8,2) NOT NULL,
  `ewmp_pkm` double(8,2) NOT NULL,
  `ewmp_tugas_tambahan` double(8,2) NOT NULL,
  `jumlah` double(8,2) NOT NULL,
  `rata_rata_per_semester` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_3_a_3`
--

INSERT INTO `tabel_3_a_3` (`id`, `nama_dosen`, `dtps`, `ewmp_pendidikan_ps_yang_diakreditasi`, `ewmp_pendidikan_ps_lain_di_dalam_pt`, `ewmp_pendidikan_ps_lain_di_luar_pt`, `ewmp_penelitian`, `ewmp_pkm`, `ewmp_tugas_tambahan`, `jumlah`, `rata_rata_per_semester`, `created_at`, `updated_at`) VALUES
(1, 'WIiyli Yustanti, S.Si., M.Kom', 1, 8.00, 7.00, 0.00, 1.00, 1.00, 0.00, 17.00, 8.50, '2023-11-26 02:53:25', '2023-11-26 02:53:25'),
(2, 'Dwi Fatrianto Suyatno, S.Kom., M.Kom', 1, 4.00, 10.00, 0.00, 1.00, 1.00, 0.00, 16.00, 8.00, '2023-11-26 02:53:59', '2023-11-26 02:53:59'),
(3, 'Rahadian Bisma, S.Kom., M.Kom.', 1, 4.00, 11.00, 0.00, 1.00, 1.00, 0.00, 17.00, 8.50, '2023-11-26 02:54:28', '2023-11-26 02:54:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_3_a_4`
--

CREATE TABLE `tabel_3_a_4` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dosen` varchar(191) NOT NULL,
  `nidn` varchar(191) NOT NULL,
  `pendidikan_pasca_parjana` varchar(191) DEFAULT NULL,
  `bidang_keahlian` varchar(191) DEFAULT NULL,
  `jabatan_akademik` varchar(191) DEFAULT NULL,
  `sertifikat_pendidik_profesional` varchar(191) DEFAULT NULL,
  `sertifikat_kompetensi` varchar(191) DEFAULT NULL,
  `mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi` varchar(191) DEFAULT NULL,
  `kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_3_a_5`
--

CREATE TABLE `tabel_3_a_5` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dosen_industri` varchar(191) NOT NULL,
  `nidk` varchar(191) DEFAULT NULL,
  `perusahaan` varchar(191) NOT NULL,
  `pendidikan_tertinggi` varchar(191) NOT NULL,
  `bidang_keahlian` varchar(191) NOT NULL,
  `sertifikat_profesi` varchar(191) DEFAULT NULL,
  `mata_kuliah_yang_diampu` varchar(191) NOT NULL,
  `sks` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_3_a_5`
--

INSERT INTO `tabel_3_a_5` (`id`, `nama_dosen_industri`, `nidk`, `perusahaan`, `pendidikan_tertinggi`, `bidang_keahlian`, `sertifikat_profesi`, `mata_kuliah_yang_diampu`, `sks`, `created_at`, `updated_at`) VALUES
(1, 'Allen Bachtiar Heriyanto', NULL, 'PT. Sukses Karya Solusindo', 'S1', 'Founder & Senior Programmer', NULL, 'Basis Data', 3, '2023-11-26 02:57:42', '2023-11-26 02:57:42'),
(2, 'Isti Aning Hariyanti', NULL, 'PT. Sukses Karya Solusindo', 'S1', 'Co founder & System analyst', NULL, 'Analis dan Desain Perangkat Lunak', 3, NULL, NULL),
(3, 'Muhammad Amirul Iksan', NULL, 'Startup Kawan Koding', 'S1', 'Senior Programmer', NULL, 'Pemrograman Web Lanjut', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_3_b_1`
--

CREATE TABLE `tabel_3_b_1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dosen` varchar(191) NOT NULL,
  `bidang_keahlian` varchar(191) NOT NULL,
  `rekognisi_dan_bukti_pendukung` varchar(191) NOT NULL,
  `tingkat` enum('internasional','nasional','lokal') NOT NULL,
  `tahun` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_3_b_1`
--

INSERT INTO `tabel_3_b_1` (`id`, `nama_dosen`, `bidang_keahlian`, `rekognisi_dan_bukti_pendukung`, `tingkat`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'I Kadek Dwi Nuryana, S.T., M.Kom.', 'Sistem Informasi', 'Staf Ahli Pengembangan Teknologi Informasi Universitas Hasyim Asy\'ari', 'nasional', '2020-sekarang', '2023-11-26 03:01:12', '2023-11-26 03:01:12'),
(2, 'Rahardian Bisma, S.Kom., M.Kom.', 'Audit Tata Kelola', 'Keynote Speaker Pada Pertemuan Ilmiah pada kegiatan Keamanan Informasi SPBE', 'nasional', '2020', '2023-11-26 03:01:59', '2023-11-26 03:01:59'),
(3, 'Rahardian Bisma, S.Kom., M.Kom.', 'Audit Tata Kelola', 'Keynote Speaker Pada Pertemuan Ilmiah pada kegiatan Infrastruktur SPBE', 'nasional', '2020', '2023-11-26 03:02:28', '2023-11-26 03:02:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_3_b_2`
--

CREATE TABLE `tabel_3_b_2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sumber_pembiayaan` varchar(191) NOT NULL,
  `jumlah_judul_penelitian_ts_2` int(11) DEFAULT NULL,
  `jumlah_judul_penelitian_ts_1` int(11) DEFAULT NULL,
  `jumlah_judul_penelitian_ts` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_3_b_2`
--

INSERT INTO `tabel_3_b_2` (`id`, `sumber_pembiayaan`, `jumlah_judul_penelitian_ts_2`, `jumlah_judul_penelitian_ts_1`, `jumlah_judul_penelitian_ts`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'a) Perguruan tinggi\r\nb) Mandiri', NULL, 9, 39, 48, '2023-11-26 03:10:37', '2023-11-26 03:10:37'),
(2, 'Lembaga dalam negeri (diluar PT)', NULL, NULL, NULL, 0, '2023-11-26 03:10:57', '2023-11-26 03:10:57'),
(3, 'Lembaga luar negeri', NULL, NULL, NULL, 0, '2023-11-26 03:11:27', '2023-11-26 03:11:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_3_b_3`
--

CREATE TABLE `tabel_3_b_3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sumber_pembiayaan` varchar(191) NOT NULL,
  `jumlah_judul_pkm_ts_2` int(11) DEFAULT NULL,
  `jumlah_judul_pkm_ts_1` int(11) DEFAULT NULL,
  `jumlah_judul_pkm_ts` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_3_b_3`
--

INSERT INTO `tabel_3_b_3` (`id`, `sumber_pembiayaan`, `jumlah_judul_pkm_ts_2`, `jumlah_judul_pkm_ts_1`, `jumlah_judul_pkm_ts`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'a) Perguruan tinggi\r\nb) Mandiri', NULL, 6, 10, 16, '2023-11-26 03:13:21', '2023-11-26 03:13:21'),
(2, 'Lembaga dalam negeri (diluar PT)', NULL, 1, 0, 1, '2023-11-26 03:13:35', '2023-11-26 03:13:35'),
(3, 'Lembaga luar negeri', NULL, NULL, NULL, 0, '2023-11-26 03:13:50', '2023-11-26 03:13:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_3_b_4_1`
--

CREATE TABLE `tabel_3_b_4_1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_publikasi` varchar(191) NOT NULL,
  `jumlah_judul_ts_2` int(11) NOT NULL,
  `jumlah_judul_ts_1` int(11) NOT NULL,
  `jumlah_judul_ts` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_3_b_4_1`
--

INSERT INTO `tabel_3_b_4_1` (`id`, `jenis_publikasi`, `jumlah_judul_ts_2`, `jumlah_judul_ts_1`, `jumlah_judul_ts`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'Jurnal penelitian tidak terakreditasi', 0, 21, 67, 88, '2023-11-26 03:15:18', '2023-11-26 03:15:18'),
(2, 'Jurnal penelitian nasional terakreditasi', 0, 21, 32, 53, '2023-11-26 03:15:35', '2023-11-26 03:15:35'),
(3, 'Jurnal penelitian internasional', 0, 1, 12, 13, '2023-11-26 03:15:48', '2023-11-26 03:15:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_3_b_4_2`
--

CREATE TABLE `tabel_3_b_4_2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_publikasi` varchar(191) NOT NULL,
  `jumlah_judul_ts_2` int(11) NOT NULL,
  `jumlah_judul_ts_1` int(11) NOT NULL,
  `jumlah_judul_ts` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_3_b_4_2`
--

INSERT INTO `tabel_3_b_4_2` (`id`, `jenis_publikasi`, `jumlah_judul_ts_2`, `jumlah_judul_ts_1`, `jumlah_judul_ts`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'Jurnal penelitian tidak terakreditasi', 0, 21, 67, 88, '2023-11-26 03:16:40', '2023-11-26 03:16:40'),
(2, 'Jurnal penelitian nasional terakreditasi', 0, 21, 32, 53, '2023-11-26 03:16:52', '2023-11-26 03:16:52'),
(3, 'Jurnal penelitian internasional', 0, 1, 12, 13, '2023-11-26 03:17:10', '2023-11-26 03:17:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_3_b_5`
--

CREATE TABLE `tabel_3_b_5` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dosen` varchar(191) NOT NULL,
  `judul_artikel_yang_disitasi` varchar(191) NOT NULL,
  `jumlah_sitasi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_3_b_5`
--

INSERT INTO `tabel_3_b_5` (`id`, `nama_dosen`, `judul_artikel_yang_disitasi`, `jumlah_sitasi`, `created_at`, `updated_at`) VALUES
(1, 'I KADEK DWI NURYANA', 'Sistem Pemilihan Rumah Kos Terbaik Di Sekitar Unhasy Dengan Metode Multi Attribute Utility Theory (Maut) Berbasis WEB (Inovate: Jurnal Ilmiah Inovasi Teknologi Informasi, 3, 2019, 2, 7)', 3, '2023-11-26 03:17:40', '2023-11-26 03:17:40'),
(2, 'RAHADIAN BISMA', 'An analysis of indonesia’s information security index: a case study in a public university (IOP Conference Series: Materials Science and Engineering, 1, 2019, 012038)', 2, '2023-11-26 03:17:59', '2023-11-26 03:17:59'),
(3, 'RAHADIAN BISMA', 'Faktor Adopsi Layanan E-Government Jenis Layanan Transaksi (JIEET (Journal of Information Engineering and Educational Technology), 1, 2017, 83-88)', 1, '2023-11-26 03:18:16', '2023-11-26 03:18:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_3_b_6`
--

CREATE TABLE `tabel_3_b_6` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dosen` varchar(191) NOT NULL,
  `nama_produk_jasa` text NOT NULL,
  `deskripsi_produk_jasa` mediumtext NOT NULL,
  `bukti` varchar(191) NOT NULL,
  `tahun` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_3_b_6`
--

INSERT INTO `tabel_3_b_6` (`id`, `nama_dosen`, `nama_produk_jasa`, `deskripsi_produk_jasa`, `bukti`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'Dodik Arwin Dermawan', 'STUDI LITERATUR MODEL BLENDED LEARNING PADA BERBAGAI E-LEARNING DALAM MENINGKATKAN HASIL BELAJAR PENDIDIKAN VOKASI/KEJURUAN (IT-Edu: Jurnal Information Technology and Education, 5, 01, halaman 182 -194)', '1', 'document20231126102036.pdf', '2019', '2023-11-26 03:20:36', '2023-11-26 03:20:36'),
(2, 'Dodik Arwin Dermawan', 'Analysis of the Use of Virtual Meeting in the Implementation of Proposal/Thesis Examination During Covid-19 Pandemic (International Joint Conference on Science and Engineering (IJCSE 2020), page 65 - 69, Atlantis Press)', '1', 'document20231126102120.pdf', '2019', '2023-11-26 03:21:20', '2023-11-26 03:21:20'),
(3, 'Dodik Arwin Dermawan', 'STUDI LITERATUR MODEL BLENDED LEARNING PADA BERBAGAI E-LEARNING DALAM MENINGKATKAN HASIL BELAJAR PENDIDIKAN VOKASI/KEJURUAN (IT-Edu: Jurnal Information Technology and Education, 5, 01, halaman 182 -194)', '1', 'document20231126102145.pdf', '2019', '2023-11-26 03:21:45', '2023-11-26 03:21:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_3_b_7_1`
--

CREATE TABLE `tabel_3_b_7_1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `luaran_penelitian_dan_pkm` varchar(191) NOT NULL,
  `tahun` varchar(191) NOT NULL,
  `keterangan` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_3_b_7_1`
--

INSERT INTO `tabel_3_b_7_1` (`id`, `luaran_penelitian_dan_pkm`, `tahun`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'E-Monitoring Product And Creation', '2021', 'Pencipta Hafidh Ahmad Fauzan, Taufik Nurrahman dkk', '2023-11-26 03:22:38', '2023-11-26 03:22:38'),
(2, 'Sistem Monitoring Siswa', '2021', 'Pencipta Mochamad Faridz Dwi Putra, Afida Kholifatus Zahro dkk', '2023-11-26 03:23:03', '2023-11-26 03:23:03'),
(3, 'Website Beasiswa-KU', '2021', 'Pencipta Muhammad Ladzi Safroni, Andi WWildan Romadhoni dkk', '2023-11-26 03:23:19', '2023-11-26 03:23:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_3_b_7_2`
--

CREATE TABLE `tabel_3_b_7_2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `luaran_penelitian_dan_pkm` varchar(191) NOT NULL,
  `tahun` varchar(191) NOT NULL,
  `keterangan` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_3_b_7_2`
--

INSERT INTO `tabel_3_b_7_2` (`id`, `luaran_penelitian_dan_pkm`, `tahun`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'a) Hak Cipta Buku Ajar \"Konsep Sistem Informasi\"', '2020', 'Nomor Pencatatan: 000187568', '2023-11-26 03:24:00', '2023-11-26 03:24:00'),
(2, 'a) Hak Cipta BUKU AJAR : MODEL SISTEM PENDUKUNG KEPUTUSAN DENGAN AHP DAN IPMS', '2020', 'Nomor Pencatatan: 000188053', '2023-11-26 03:24:17', '2023-11-26 03:24:17'),
(3, 'a) Hak Cipta Artikel RANCANG BANGUN SISTEM INFORMASI SIMPAN PINJAM BERBASIS WEB PADA KOPERASI KARYAWAN BINA PEMUDA KRIAN', '2021', 'Nomor Pencatatan : 000244765', '2023-11-26 03:24:33', '2023-11-26 03:24:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_3_b_7_3`
--

CREATE TABLE `tabel_3_b_7_3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `luaran_penelitian_dan_pkm` varchar(191) NOT NULL,
  `tahun` varchar(191) NOT NULL,
  `keterangan` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_3_b_7_3`
--

INSERT INTO `tabel_3_b_7_3` (`id`, `luaran_penelitian_dan_pkm`, `tahun`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Sistem Informasi LAMDIK', '2020', 'Asmunin, Dodik, Andi Iwan', '2023-11-26 03:25:15', '2023-11-26 03:25:15'),
(2, 'Mesin Oven Pengering Cerdas Berbasis Internet of Things (IoT)', '2019', 'Prof. Dr. Ekohariadi, M.Pd., Yeni Anistyasari, S.Pd., M.Kom., dan Ricky Eka Putra, S.Kom., M.Kom.', '2023-11-26 03:25:32', '2023-11-26 03:25:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_3_b_7_4`
--

CREATE TABLE `tabel_3_b_7_4` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `luaran_penelitian_dan_pkm` varchar(191) NOT NULL,
  `tahun` varchar(191) NOT NULL,
  `keterangan` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_3_b_7_4`
--

INSERT INTO `tabel_3_b_7_4` (`id`, `luaran_penelitian_dan_pkm`, `tahun`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Buku Ajar Konsep Sistem Informasi', '2020', 'ISBN 978-623-7729-97-6', '2023-11-26 03:26:15', '2023-11-26 03:26:15'),
(2, 'BUKU AJAR MODEL SISTEM PENDUKUNG KEPUTUSAN DENGAN AHP DAN IPMS', '2020', 'ISBN 978-623-93757-8-2', '2023-11-26 03:26:35', '2023-11-26 03:26:35'),
(3, 'MODUL SISTEM DIGITAL MENGGUNAKAN MODEL DIGITAL LEARNING SYSTEM (DLS)', '2019', 'ISBN 978-623-91785-0-5', '2023-11-26 03:26:51', '2023-11-26 03:26:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_4`
--

CREATE TABLE `tabel_4` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_penggunaan` varchar(191) NOT NULL,
  `unit_pengelola_program_studi_ts_2` decimal(18,2) DEFAULT NULL,
  `unit_pengelola_program_studi_ts_1` decimal(18,2) DEFAULT NULL,
  `unit_pengelola_program_studi_ts` decimal(18,2) DEFAULT NULL,
  `rata_rata_1` decimal(18,2) DEFAULT NULL,
  `program_studi_ts_2` decimal(18,2) DEFAULT NULL,
  `program_studi_ts_1` decimal(18,2) DEFAULT NULL,
  `program_studi_ts` decimal(18,2) DEFAULT NULL,
  `rata_rata_2` decimal(18,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_4`
--

INSERT INTO `tabel_4` (`id`, `jenis_penggunaan`, `unit_pengelola_program_studi_ts_2`, `unit_pengelola_program_studi_ts_1`, `unit_pengelola_program_studi_ts`, `rata_rata_1`, `program_studi_ts_2`, `program_studi_ts_1`, `program_studi_ts`, `rata_rata_2`, `created_at`, `updated_at`) VALUES
(1, 'Biaya Dosen (Gaji, Honor)', NULL, NULL, NULL, 0.00, NULL, 1500000000.00, 1700000000.00, 1600000000.00, '2023-11-26 03:36:30', '2023-11-26 03:36:30'),
(2, 'Biaya Tenaga Kependidikan (Gaji, Honor)', NULL, NULL, NULL, 0.00, NULL, 816460641.00, 826360441.00, 821410541.00, '2023-11-26 03:44:11', '2023-11-26 03:44:11'),
(3, 'Biaya Operasional Pembelajaran (Bahan dan Peralatan Habis Pakai)', NULL, NULL, NULL, 0.00, NULL, 391123467.00, 446320000.00, 418721733.50, '2023-11-26 03:44:33', '2023-11-26 03:44:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_5_a`
--

CREATE TABLE `tabel_5_a` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester` int(11) NOT NULL,
  `kode_mata_kuliah` int(11) DEFAULT NULL,
  `nama_mata_kuliah` varchar(255) NOT NULL,
  `mata_kuliah_kompetensi` tinyint(4) NOT NULL,
  `sks_kuliah` int(11) NOT NULL,
  `sks_seminar` int(11) NOT NULL,
  `sks_praktikum` int(11) NOT NULL,
  `konversi_kredit_ke_jam` double(8,2) NOT NULL,
  `capaian_pembelajaran_sikap` tinyint(4) NOT NULL,
  `capaian_pembelajaran_pengetahuan` tinyint(4) NOT NULL,
  `capaian_pembelajaran_keterampilan_umum` tinyint(4) NOT NULL,
  `capaian_pembelajaran_keterampilan_khusus` tinyint(4) NOT NULL,
  `dokumen_rencana_pembelajaran` varchar(191) NOT NULL,
  `unit_penyelenggara` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_5_a`
--

INSERT INTO `tabel_5_a` (`id`, `semester`, `kode_mata_kuliah`, `nama_mata_kuliah`, `mata_kuliah_kompetensi`, `sks_kuliah`, `sks_seminar`, `sks_praktikum`, `konversi_kredit_ke_jam`, `capaian_pembelajaran_sikap`, `capaian_pembelajaran_pengetahuan`, `capaian_pembelajaran_keterampilan_umum`, `capaian_pembelajaran_keterampilan_khusus`, `dokumen_rencana_pembelajaran`, `unit_penyelenggara`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Pemrograman Dasar', 1, 2, 0, 0, 1.70, 1, 1, 1, 1, 'RPS', 'Prodi', NULL, NULL),
(2, 1, NULL, 'Prak. Pemrograman Dasar', 1, 0, 0, 1, 2.50, 1, 0, 1, 1, 'RPS', 'Prodi', NULL, NULL),
(3, 1, NULL, 'Matematika I', 1, 2, 0, 0, 1.70, 1, 1, 1, 0, 'RPS', 'Prodi', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_5_b`
--

CREATE TABLE `tabel_5_b` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_penelitian_pkm` text NOT NULL,
  `nama_dosen` varchar(191) NOT NULL,
  `mata_kuliah` varchar(191) NOT NULL,
  `bentuk_integrasi` varchar(191) NOT NULL,
  `tahun` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_5_b`
--

INSERT INTO `tabel_5_b` (`id`, `judul_penelitian_pkm`, `nama_dosen`, `mata_kuliah`, `bentuk_integrasi`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'Rancang bangun software sistem monitoring kemahasiswaan berbasis web untuk meningkatkan efektifitas dan produktivitas mahasiswa unesa', 'Dedy rahman prehanto,S.Kom.M.Kom, Ikadek dwi nuryana,SI.M.Kom., Aries Dwi Indriyanti.,S.Kom.,M.Kom', 'Pemrograman Web', 'Tambahan materi perkuliahan (bahan ajar)', '2019', '2023-11-26 04:01:10', '2023-11-26 04:01:10'),
(2, 'Pengembangan tata kelola keamanan informasi menggunakan indeks keamanan informasi(kami) untuk meningkatkan keamanan informasi pada pusat pengembangan teknologi informasi(PPTI) universitas negeri surabaya', 'Wiyli Yustanti, S.Si., M.Kom. Anita Qoiriah, S Kom., M.Kom. Agus Prihanto, S.T., M.Kom. Rahadian Bisma, S.Kom., M.Kom.', 'Keamanan SI', 'Tambahan materi perkuliahan (bahan ajar)', '2020', '2023-11-26 04:02:17', '2023-11-26 04:02:17'),
(3, 'Pemanfaatan Google Apps For Education (GAFE) untuk kolaborasi Onlene antar Guru di SMK Negeri 2 Magetan.', '1. Rahadian Bisma, S.Kom., M.Kom 2. I Made Suartana, S.Kom., M.Kom 3. Ibnu Febri Kurniawan, S.Kom., M.Se 4. Ricky Eka Putra, S.Kom., M.Kom', 'Pengantar Teknologi Informasi', 'Tambahan materi perkuliahan (bahan ajar)', '2019', '2023-11-26 04:02:48', '2023-11-26 04:02:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_5_c`
--

CREATE TABLE `tabel_5_c` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aspek_yang_diukur` varchar(191) NOT NULL,
  `tkm_sangat_baik` double(8,2) NOT NULL,
  `tkm_baik` double(8,2) NOT NULL,
  `tkm_cukup` double(8,2) NOT NULL,
  `tkm_kurang` double(8,2) NOT NULL,
  `rencana_tindak_lanjut_oleh_ps` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_5_c`
--

INSERT INTO `tabel_5_c` (`id`, `aspek_yang_diukur`, `tkm_sangat_baik`, `tkm_baik`, `tkm_cukup`, `tkm_kurang`, `rencana_tindak_lanjut_oleh_ps`, `created_at`, `updated_at`) VALUES
(1, 'Keandalan (reliability): kemampuan dosen, tenaga kependidikan, dan pengelola dalam memberikan pelayanan.', 39.74, 49.47, 10.14, 0.63, 'meningkatkan kemampuan dosen, tenaga kependidikan dan pengelola layanan  akademik dalam memberikan pelayanan  kepada mahasiswa', '2023-11-26 04:05:29', '2023-11-26 04:05:29'),
(2, 'Daya tanggap (responsiveness): kemauan dari dosen, tenaga kependidikan, dan pengelola dalam membantu mahasiswa dan memberikan jasa dengan cepat.', 34.82, 56.05, 8.49, 0.63, 'meningkatkan motivasi dosen, tenaga kependidikan dan pengelola layanan  akademik dalam memberikan jasa dengan cepat  kepada mahasiswa', '2023-11-26 04:07:49', '2023-11-26 04:07:49'),
(3, 'Kepastian (assurance): kemampuan dosen, tenaga kependidikan, dan pengelola untuk memberi keyakinan kepada mahasiswa bahwa pelayanan yang diberikan telah sesuai dengan ketentuan.', 40.57, 52.17, 6.62, 0.62, 'Melakukan survey monitoring secara berkala dan rapat', '2023-11-26 04:08:46', '2023-11-26 04:08:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_6_a`
--

CREATE TABLE `tabel_6_a` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dosen` varchar(191) NOT NULL,
  `tema_penelitian_sesuai_roadmap` varchar(191) NOT NULL,
  `nama_mahasiswa` varchar(191) NOT NULL,
  `judul_kegiatan` varchar(191) NOT NULL,
  `tahun` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_6_a`
--

INSERT INTO `tabel_6_a` (`id`, `nama_dosen`, `tema_penelitian_sesuai_roadmap`, `nama_mahasiswa`, `judul_kegiatan`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'I Kadek  Dwi Nuryana', 'Kajian Perkembangan RPL', 'Arisfi dan Elfal', 'Analisis Tingkat Kepuasan Mahasiswa Terhadap Sistem Pembelajaran Daring Saat Pandemi Covid-19', '2020', '2023-11-26 04:09:34', '2023-11-26 04:09:34'),
(2, 'Ghea Sekar Palupi, S.Kom., M.I.M.', 'Kajian Perkembangan RPL', 'Fahreza dan Wulan', 'Analisis Kesesuaian Tugas Teknologi Pembelajaran Daring Terhadap Lingkungan Sosial Pada Masa Pandemi Covid-19', '2020', '2023-11-26 04:10:00', '2023-11-26 04:10:00'),
(3, 'Dodik Arwin Dermawan', 'Kajian Perkembangan RPL', 'Farid dan Hafid Sukma', 'Analisis Penggunaan Virtual Meeting Dalam Pelaksanaan Ujian Proposal/Skripsi Ditengah Pandemi Covid-19', '2020', '2023-11-26 04:10:34', '2023-11-26 04:10:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_6_b`
--

CREATE TABLE `tabel_6_b` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dosen` varchar(191) NOT NULL,
  `tema_penelitian_sesuai_roadmap` varchar(191) NOT NULL,
  `nama_mahasiswa` varchar(191) NOT NULL,
  `judul_tesis` varchar(191) NOT NULL,
  `tahun` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_7`
--

CREATE TABLE `tabel_7` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dosen` varchar(191) NOT NULL,
  `tema_pkm_sesuai_roadmap` varchar(191) NOT NULL,
  `nama_mahasiswa` varchar(191) NOT NULL,
  `judul_kegiatan` varchar(191) NOT NULL,
  `tahun` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_7`
--

INSERT INTO `tabel_7` (`id`, `nama_dosen`, `tema_pkm_sesuai_roadmap`, `nama_mahasiswa`, `judul_kegiatan`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'Asmunin', 'Penguatan Arah Pengembangan RPL', 'Arisfi dan Elfal', 'Pembuatan Konten Video Berbasis Youtube sebagai Panduan bagi Pendidik dalam Mengembangkan Pembelajaran Daring di Era Pandemi Covid-19', '2020', '2023-11-26 04:11:15', '2023-11-26 04:11:15'),
(2, 'Dodik Arwin Dermawan', 'Penguatan Arah Pengembangan RPL', 'Fahreza dan Wulan', 'Kolaborasi dan Pembelajaran Digital bagi Guru dan Siswa untuk Mendukung Program Work From Home pada Masa Pandemi Covid-19', '2020', '2023-11-26 04:11:46', '2023-11-26 04:11:46'),
(3, 'Rindu Puspita Wibawa', 'Penguatan Arah Pengembangan RPL', 'Farid dan Hafid Sukma', 'Pembuatan Smart Hand Sanitizer Sebagai Pencegahan Dini Covid-19 di Universitas Negeri Surabaya', '2020', '2023-11-26 04:12:20', '2023-11-26 04:12:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_a`
--

CREATE TABLE `tabel_8_a` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_lulus` varchar(191) NOT NULL,
  `jumlah_lulusan` int(11) NOT NULL,
  `ipk_min` double(8,2) NOT NULL,
  `ipk_rata_rata` double(8,2) NOT NULL,
  `ipk_maks` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_8_a`
--

INSERT INTO `tabel_8_a` (`id`, `tahun_lulus`, `jumlah_lulusan`, `ipk_min`, `ipk_rata_rata`, `ipk_maks`, `created_at`, `updated_at`) VALUES
(1, 'TS-2', 0, 0.00, 0.00, 0.00, '2023-11-26 04:12:59', '2023-11-26 04:12:59'),
(2, 'TS-1', 0, 0.00, 0.00, 0.00, '2023-11-26 04:13:10', '2023-11-26 04:13:10'),
(3, 'TS', 0, 0.00, 0.00, 0.00, '2023-11-26 04:13:21', '2023-11-26 04:13:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_b_1`
--

CREATE TABLE `tabel_8_b_1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(191) NOT NULL,
  `waktu_perolehan` varchar(191) DEFAULT NULL,
  `tingkat` enum('internasional','nasional','lokal') NOT NULL,
  `prestasi_yang_dicapai` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_8_b_1`
--

INSERT INTO `tabel_8_b_1` (`id`, `nama_kegiatan`, `waktu_perolehan`, `tingkat`, `prestasi_yang_dicapai`, `created_at`, `updated_at`) VALUES
(1, 'Program mahasiswa wirausaha vokasi (PMWV )', '2021', 'nasional', 'Lolos Pendanaan', '2023-11-26 04:14:00', '2023-11-26 04:14:00'),
(2, 'Program mahasiswa wirausaha vokasi (PMWV )', '2021', 'nasional', 'Lolos Pendanaan', '2023-11-26 04:14:21', '2023-11-26 04:14:21'),
(3, 'Program mahasiswa wirausaha Universitas Negeri Surabaya (PMW Unesa)', NULL, 'lokal', 'Lolos Pendanaan', '2023-11-26 04:16:42', '2023-11-26 04:16:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_b_2`
--

CREATE TABLE `tabel_8_b_2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(191) NOT NULL,
  `waktu_perolehan` varchar(191) NOT NULL,
  `tingkat` enum('internasional','nasional','lokal') NOT NULL,
  `prestasi_yang_dicapai` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_8_b_2`
--

INSERT INTO `tabel_8_b_2` (`id`, `nama_kegiatan`, `waktu_perolehan`, `tingkat`, `prestasi_yang_dicapai`, `created_at`, `updated_at`) VALUES
(1, 'Pekan Olahraga Provinsi (PORPROV) Jawa Timur VI', '2019', 'lokal', 'JUARA 2 Catur Kilat beregu Putra', '2023-11-26 04:17:19', '2023-11-26 04:17:19'),
(2, 'Pekan Olahraga Provinsi (PORPROV) Jawa Timur VI', '2019', 'lokal', 'JUARA 2 Catur Standar beregu Putra', '2023-11-26 04:17:34', '2023-11-26 04:17:34'),
(3, 'Turnament Internal dalam rangka Dies Natalis UKMPC Unesa', '2020', 'lokal', 'JUARA 2', '2023-11-26 04:17:52', '2023-11-26 04:17:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_c_1`
--

CREATE TABLE `tabel_8_c_1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_masuk` varchar(191) NOT NULL,
  `jumlah_mahasiswa_diterima` int(11) NOT NULL,
  `jml_akhir_ts_4` int(11) NOT NULL,
  `jml_akhir_ts_3` int(11) NOT NULL,
  `jml_akhir_ts_2` int(11) NOT NULL,
  `jml_akhir_ts_1` int(11) NOT NULL,
  `jml_akhir_ts` int(11) NOT NULL,
  `jumlah_lulusan__akhir_ts` int(11) NOT NULL,
  `rata_rata_masa_studi` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_c_2`
--

CREATE TABLE `tabel_8_c_2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_masuk` varchar(191) NOT NULL,
  `jumlah_mahasiswa_diterima` int(11) NOT NULL,
  `jml_akhir_ts_6` int(11) NOT NULL,
  `jml_akhir_ts_5` int(11) NOT NULL,
  `jml_akhir_ts_4` int(11) NOT NULL,
  `jml_akhir_ts_3` int(11) NOT NULL,
  `jml_akhir_ts_2` int(11) NOT NULL,
  `jml_akhir_ts_1` int(11) NOT NULL,
  `jml_akhir_ts` int(11) NOT NULL,
  `jumlah_lulusan__akhir_ts` int(11) NOT NULL,
  `rata_rata_masa_studi` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_c_3`
--

CREATE TABLE `tabel_8_c_3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_masuk` varchar(191) NOT NULL,
  `jumlah_mahasiswa_diterima` int(11) NOT NULL,
  `jml_akhir_ts_3` int(11) NOT NULL,
  `jml_akhir_ts_2` int(11) NOT NULL,
  `jml_akhir_ts_1` int(11) NOT NULL,
  `jml_akhir_ts` int(11) NOT NULL,
  `jumlah_lulusan__akhir_ts` int(11) NOT NULL,
  `rata_rata_masa_studi` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_c_4`
--

CREATE TABLE `tabel_8_c_4` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_masuk` varchar(191) NOT NULL,
  `jumlah_mahasiswa_diterima` int(11) NOT NULL,
  `jml_akhir_ts_6` int(11) NOT NULL,
  `jml_akhir_ts_5` int(11) NOT NULL,
  `jml_akhir_ts_4` int(11) NOT NULL,
  `jml_akhir_ts_3` int(11) NOT NULL,
  `jml_akhir_ts_2` int(11) NOT NULL,
  `jml_akhir_ts_1` int(11) NOT NULL,
  `jml_akhir_ts` int(11) NOT NULL,
  `jumlah_lulusan__akhir_ts` int(11) NOT NULL,
  `rata_rata_masa_studi` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_d_1_a`
--

CREATE TABLE `tabel_8_d_1_a` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_lulus` varchar(191) NOT NULL,
  `jumlah_lulusan` int(11) NOT NULL,
  `jumlah_lulusan_yang_terlacak` int(11) NOT NULL,
  `jumlah_lulusan_yang_dipesan_sebelum_lulus` int(11) NOT NULL,
  `jltwtmp_wt_3_bulan` int(11) NOT NULL,
  `jltwtmp_3_wt_6_bulan` int(11) NOT NULL,
  `jltwtmp_wt_6_bulan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_d_1_b`
--

CREATE TABLE `tabel_8_d_1_b` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_lulus` varchar(191) NOT NULL,
  `jumlah_lulusan` int(11) NOT NULL,
  `jumlah_lulusan_yang_terlacak` int(11) NOT NULL,
  `jltwtmp_wt_6_bulan` int(11) NOT NULL,
  `jltwtmp_6_wt_18_bulan` int(11) NOT NULL,
  `jltwtmp_wt_18_bulan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_d_1_c`
--

CREATE TABLE `tabel_8_d_1_c` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_lulus` varchar(191) NOT NULL,
  `jumlah_lulusan` int(11) NOT NULL,
  `jumlah_lulusan_yang_terlacak` int(11) NOT NULL,
  `jltwtmp_wt_3_bulan` int(11) NOT NULL,
  `jltwtmp_3_wt_6_bulan` int(11) NOT NULL,
  `jltwtmp_wt_6_bulan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_d_2`
--

CREATE TABLE `tabel_8_d_2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_lulus` varchar(191) NOT NULL,
  `jumlah_lulusan` int(11) NOT NULL,
  `jumlah_lulusan_yang_terlacak` int(11) NOT NULL,
  `jlttkbk_rendah` int(11) NOT NULL,
  `jlttkbk_sedang` int(11) NOT NULL,
  `jlttkbk_tinggi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_e_1`
--

CREATE TABLE `tabel_8_e_1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_lulus` varchar(191) NOT NULL,
  `jumlah_lulusan` int(11) NOT NULL,
  `jumlah_lulusan_yang_terlacak` int(11) NOT NULL,
  `jltbbt_lokal` int(11) NOT NULL,
  `jltbbt_nasional` int(11) NOT NULL,
  `jltbbt_multinasional` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_e_2`
--

CREATE TABLE `tabel_8_e_2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_kemampuan` varchar(191) NOT NULL,
  `tkp_sangat_baik` double(8,2) NOT NULL,
  `tkp_baik` double(8,2) NOT NULL,
  `tkp_cukup` double(8,2) NOT NULL,
  `tkp_kurang` double(8,2) NOT NULL,
  `rencana_tindak_lanjut_oleh_ps` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_f_1_1`
--

CREATE TABLE `tabel_8_f_1_1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_publikasi` varchar(191) NOT NULL,
  `jumlah_judul_ts_2` int(11) NOT NULL,
  `jumlah_judul_ts_1` int(11) NOT NULL,
  `jumlah_judul_ts` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_f_1_2`
--

CREATE TABLE `tabel_8_f_1_2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_publikasi` varchar(191) NOT NULL,
  `jumlah_judul_ts_2` int(11) NOT NULL,
  `jumlah_judul_ts_1` int(11) NOT NULL,
  `jumlah_judul_ts` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_f_2`
--

CREATE TABLE `tabel_8_f_2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mahasiswa` varchar(191) NOT NULL,
  `judul_artikel_yang_disitasi` varchar(191) NOT NULL,
  `jumlah_sitasi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_f_3`
--

CREATE TABLE `tabel_8_f_3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mahasiswa` varchar(191) NOT NULL,
  `nama_produk_jasa` varchar(191) NOT NULL,
  `deskripsi_produk_jasa` text NOT NULL,
  `bukti` varchar(191) NOT NULL,
  `tahun` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_8_f_3`
--

INSERT INTO `tabel_8_f_3` (`id`, `nama_mahasiswa`, `nama_produk_jasa`, `deskripsi_produk_jasa`, `bukti`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'Dyahayu Retno Wulan', 'Programmer ERP', 'Memonitoring database, membuat program untuk kebutuhan perusahaan, dan memeperbaiki software yang digunakan.', 'Email dari perusahaan yang terkait', '2021', NULL, NULL),
(2, 'Hafidh Soekma Ardiansyah', 'AI Engineer', 'membangun atau mengoptimalkan sebuah proses AI pada suatu sistem', 'Email dari perusahaan yang terkait', '2021', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_f_4_1`
--

CREATE TABLE `tabel_8_f_4_1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `luaran_penelitian_dan_pkm` varchar(191) NOT NULL,
  `tahun` varchar(191) NOT NULL,
  `keterangan` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_8_f_4_1`
--

INSERT INTO `tabel_8_f_4_1` (`id`, `luaran_penelitian_dan_pkm`, `tahun`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'E-Monitoring Product And Creation', '2021', 'Pencipta Hafidh Ahmad Fauzan, Taufik Nurrahman dkk', NULL, NULL),
(2, 'Sistem Monitoring Siswa', '2021', 'Pencipta Mochamad Faridz Dwi Putra, Afida Kholifatus Zahro dkk', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_f_4_2`
--

CREATE TABLE `tabel_8_f_4_2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `luaran_penelitian_dan_pkm` varchar(191) NOT NULL,
  `tahun` varchar(191) NOT NULL,
  `keterangan` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_8_f_4_2`
--

INSERT INTO `tabel_8_f_4_2` (`id`, `luaran_penelitian_dan_pkm`, `tahun`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'E-Monitoring Product And Creation', '2021', 'Pencipta Hafidh Ahmad Fauzan, Taufik Nurrahman dkk', NULL, NULL),
(2, 'Sistem Monitoring Siswa', '2021', 'Pencipta Mochamad Faridz Dwi Putra, Afida Kholifatus Zahro dkk', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_f_4_3`
--

CREATE TABLE `tabel_8_f_4_3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `luaran_penelitian_dan_pkm` varchar(191) NOT NULL,
  `tahun` varchar(191) NOT NULL,
  `keterangan` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_8_f_4_3`
--

INSERT INTO `tabel_8_f_4_3` (`id`, `luaran_penelitian_dan_pkm`, `tahun`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'E-Monitoring Product And Creation', '2021', 'Pencipta Hafidh Ahmad Fauzan, Taufik Nurrahman dkk', NULL, NULL),
(2, 'Sistem Monitoring Siswa', '2021', 'Pencipta Mochamad Faridz Dwi Putra, Afida Kholifatus Zahro dkk', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_8_f_4_4`
--

CREATE TABLE `tabel_8_f_4_4` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `luaran_penelitian_dan_pkm` varchar(191) NOT NULL,
  `tahun` varchar(191) NOT NULL,
  `keterangan` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_ref_8_e_2`
--

CREATE TABLE `tabel_ref_8_e_2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_lulus` varchar(191) NOT NULL,
  `jumlah_lulusan` int(11) NOT NULL,
  `jumlah_tanggapan_kepuasan_pengguna_yang_terlacak` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `role` varchar(191) NOT NULL DEFAULT 'dosen',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$CWaOpa2tW.R/r5YczZY2QeZpZKcI31wvQL0H77SG3oBoIvk4bBk1G', 'admin', NULL, '2023-10-12 13:26:25', '2023-10-15 12:02:49'),
(2, 'Dosen', 'dosen@gmail.com', NULL, '$2y$10$UJ5znZNS9ti5aY1dSPp33eM4wMW6sv3k2ClRrKLyDlFfX2/YW/ssy', 'dosen', NULL, '2023-10-15 11:37:24', '2023-10-15 12:01:53');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tabel_1_1`
--
ALTER TABLE `tabel_1_1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_1_2`
--
ALTER TABLE `tabel_1_2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_1_3`
--
ALTER TABLE `tabel_1_3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_2_a`
--
ALTER TABLE `tabel_2_a`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_2_b`
--
ALTER TABLE `tabel_2_b`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_3_a_1`
--
ALTER TABLE `tabel_3_a_1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_3_a_2`
--
ALTER TABLE `tabel_3_a_2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_3_a_3`
--
ALTER TABLE `tabel_3_a_3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_3_a_4`
--
ALTER TABLE `tabel_3_a_4`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_3_a_5`
--
ALTER TABLE `tabel_3_a_5`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_3_b_1`
--
ALTER TABLE `tabel_3_b_1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_3_b_2`
--
ALTER TABLE `tabel_3_b_2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_3_b_3`
--
ALTER TABLE `tabel_3_b_3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_3_b_4_1`
--
ALTER TABLE `tabel_3_b_4_1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_3_b_4_2`
--
ALTER TABLE `tabel_3_b_4_2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_3_b_5`
--
ALTER TABLE `tabel_3_b_5`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_3_b_6`
--
ALTER TABLE `tabel_3_b_6`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_3_b_7_1`
--
ALTER TABLE `tabel_3_b_7_1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_3_b_7_2`
--
ALTER TABLE `tabel_3_b_7_2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_3_b_7_3`
--
ALTER TABLE `tabel_3_b_7_3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_3_b_7_4`
--
ALTER TABLE `tabel_3_b_7_4`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_4`
--
ALTER TABLE `tabel_4`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_5_a`
--
ALTER TABLE `tabel_5_a`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_5_b`
--
ALTER TABLE `tabel_5_b`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_5_c`
--
ALTER TABLE `tabel_5_c`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_6_a`
--
ALTER TABLE `tabel_6_a`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_6_b`
--
ALTER TABLE `tabel_6_b`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_7`
--
ALTER TABLE `tabel_7`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_a`
--
ALTER TABLE `tabel_8_a`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_b_1`
--
ALTER TABLE `tabel_8_b_1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_b_2`
--
ALTER TABLE `tabel_8_b_2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_c_1`
--
ALTER TABLE `tabel_8_c_1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_c_2`
--
ALTER TABLE `tabel_8_c_2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_c_3`
--
ALTER TABLE `tabel_8_c_3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_c_4`
--
ALTER TABLE `tabel_8_c_4`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_d_1_a`
--
ALTER TABLE `tabel_8_d_1_a`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_d_1_b`
--
ALTER TABLE `tabel_8_d_1_b`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_d_1_c`
--
ALTER TABLE `tabel_8_d_1_c`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_d_2`
--
ALTER TABLE `tabel_8_d_2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_e_1`
--
ALTER TABLE `tabel_8_e_1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_e_2`
--
ALTER TABLE `tabel_8_e_2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_f_1_1`
--
ALTER TABLE `tabel_8_f_1_1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_f_1_2`
--
ALTER TABLE `tabel_8_f_1_2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_f_2`
--
ALTER TABLE `tabel_8_f_2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_f_3`
--
ALTER TABLE `tabel_8_f_3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_f_4_1`
--
ALTER TABLE `tabel_8_f_4_1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_f_4_2`
--
ALTER TABLE `tabel_8_f_4_2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_f_4_3`
--
ALTER TABLE `tabel_8_f_4_3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_8_f_4_4`
--
ALTER TABLE `tabel_8_f_4_4`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_ref_8_e_2`
--
ALTER TABLE `tabel_ref_8_e_2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_1_1`
--
ALTER TABLE `tabel_1_1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_1_2`
--
ALTER TABLE `tabel_1_2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tabel_1_3`
--
ALTER TABLE `tabel_1_3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_2_a`
--
ALTER TABLE `tabel_2_a`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tabel_2_b`
--
ALTER TABLE `tabel_2_b`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_3_a_1`
--
ALTER TABLE `tabel_3_a_1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_3_a_2`
--
ALTER TABLE `tabel_3_a_2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_3_a_3`
--
ALTER TABLE `tabel_3_a_3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_3_a_4`
--
ALTER TABLE `tabel_3_a_4`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_3_a_5`
--
ALTER TABLE `tabel_3_a_5`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_3_b_1`
--
ALTER TABLE `tabel_3_b_1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_3_b_2`
--
ALTER TABLE `tabel_3_b_2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_3_b_3`
--
ALTER TABLE `tabel_3_b_3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_3_b_4_1`
--
ALTER TABLE `tabel_3_b_4_1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_3_b_4_2`
--
ALTER TABLE `tabel_3_b_4_2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_3_b_5`
--
ALTER TABLE `tabel_3_b_5`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_3_b_6`
--
ALTER TABLE `tabel_3_b_6`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_3_b_7_1`
--
ALTER TABLE `tabel_3_b_7_1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_3_b_7_2`
--
ALTER TABLE `tabel_3_b_7_2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_3_b_7_3`
--
ALTER TABLE `tabel_3_b_7_3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tabel_3_b_7_4`
--
ALTER TABLE `tabel_3_b_7_4`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_4`
--
ALTER TABLE `tabel_4`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_5_a`
--
ALTER TABLE `tabel_5_a`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_5_b`
--
ALTER TABLE `tabel_5_b`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_5_c`
--
ALTER TABLE `tabel_5_c`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_6_a`
--
ALTER TABLE `tabel_6_a`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_6_b`
--
ALTER TABLE `tabel_6_b`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_7`
--
ALTER TABLE `tabel_7`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_a`
--
ALTER TABLE `tabel_8_a`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_b_1`
--
ALTER TABLE `tabel_8_b_1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_b_2`
--
ALTER TABLE `tabel_8_b_2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_c_1`
--
ALTER TABLE `tabel_8_c_1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_c_2`
--
ALTER TABLE `tabel_8_c_2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_c_3`
--
ALTER TABLE `tabel_8_c_3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_c_4`
--
ALTER TABLE `tabel_8_c_4`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_d_1_a`
--
ALTER TABLE `tabel_8_d_1_a`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_d_1_b`
--
ALTER TABLE `tabel_8_d_1_b`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_d_1_c`
--
ALTER TABLE `tabel_8_d_1_c`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_d_2`
--
ALTER TABLE `tabel_8_d_2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_e_1`
--
ALTER TABLE `tabel_8_e_1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_e_2`
--
ALTER TABLE `tabel_8_e_2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_f_1_1`
--
ALTER TABLE `tabel_8_f_1_1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_f_1_2`
--
ALTER TABLE `tabel_8_f_1_2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_f_2`
--
ALTER TABLE `tabel_8_f_2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_f_3`
--
ALTER TABLE `tabel_8_f_3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_f_4_1`
--
ALTER TABLE `tabel_8_f_4_1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_f_4_2`
--
ALTER TABLE `tabel_8_f_4_2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_f_4_3`
--
ALTER TABLE `tabel_8_f_4_3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tabel_8_f_4_4`
--
ALTER TABLE `tabel_8_f_4_4`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_ref_8_e_2`
--
ALTER TABLE `tabel_ref_8_e_2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
