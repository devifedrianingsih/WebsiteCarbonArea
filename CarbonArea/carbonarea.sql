-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 05:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carbonarea`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `email`) VALUES
(1, 'deviFn', '12345678', 'Devi Fedrianingsih', 'devifn@gmail.com'),
(2, 'muthiahhumaira', '12345678', 'Muthiah Humaira', 'muthiahhumaira@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ahli_tanaman`
--

CREATE TABLE `ahli_tanaman` (
  `id_ahli` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ahli_tanaman`
--

INSERT INTO `ahli_tanaman` (`id_ahli`, `username`, `password`, `nama`, `email`) VALUES
(1, 'gilangrahmat', '12345678', 'Gilang Rahmat', 'gilang@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `judul_artikel` varchar(200) NOT NULL,
  `isi_artikel` text NOT NULL,
  `tahun_artikel` date NOT NULL,
  `penulis_artikel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`judul_artikel`, `isi_artikel`, `tahun_artikel`, `penulis_artikel`) VALUES
('Upaya Penanganan Ketahanan Pangan Indonesia', 'Ketersediaan pangan yang dapat dijangkau berbagai pihak mampu ikut menjaga stabilitas ekonomi nasional di tengah dinamika global. Maka dari itu, ketahanan pangan perlu menjadi fokus untuk ditingkatkan dengan mewujudkan pangan yang berdaulat (food sovereignty) dan mandiri (food resilience). Menteri Koordinator (Menko) Bidang Perekonomian Airlangga Hartarto dalam acara Diskusi Ekonomi Berdikari Kompas dengan tema “Ketahanan Pangan Kunci Hadapi Potensi Krisis Global”, Selasa (13/09), mengatakan Pemerintah juga melakukan upaya mendorong ketahanan pangan melalui berbagai bauran strategi dan kebijakan. “Ketahanan pangan bukan hanya menjadi prioritas tapi juga menjadi target kesejahteraan dan pemerataan kesejahteraan masyarakat, Pemerintah telah merumuskan dan mengimplementasikan kebijakan penguatan ketahanan pangan nasional,” kata Menko Airlangga secara virtual. Dari sisi pembiayaan, Pemerintah menyediakan bantuan Kredit Usaha Rakyat (KUR) yang dapat diakses oleh pelaku sektor pertanian dengan bunga yang hanya sebesar 3 persen hingga akhir tahun 2022. Selain itu, plafon kredit KUR pada tahun 2022 juga ditingkatkan hingga Rp373,17 triliun dan plafon KUR Mikro (tanpa agunan tambahan) yang sebelumnya di atas Rp10 juta hingga Rp50 juta, ditingkatkan menjadi di atas Rp10 juta hingga Rp100 juta. “Pemerintah telah meningkatkan plafon KUR menjadi sebesar Rp373,17 triliun pada tahun 2022 sehingga Pemerintah Daerah atau Kementerian bisa menggunakan baik untuk pengadaan alsintan maupun korporatisasi daripada pertanian,” ungkap Menko Airlangga. Sedangkan dari aspek kelembagaan, upaya yang dilakukan Pemerintah adalah dengan membentuk Badan Pangan Nasional melalui penerbitan Peraturan Presiden Nomor 66 Tahun 2021. Lembaga ini diberikan kewenangan terkait pengelolaan cadangan pangan Pemerintah, pelaksanaan kegiatan stabilisasi pasokan dan harga, penguatan sistem logistik pangan, pengentasan wilayah rentan rawan pangan, pengembangan penganekaragaman pangan dan pengembangan potensi pangan lokal. Untuk memperkuat Cadangan Beras Pemerintah (CBP), telah diterbitkan kebijakan pembelian gabah atau beras petani oleh Perum BULOG hingga stok CBP mencapai 1,2 juta ton setara beras. Penugasan ini ditujukan untuk memperluas kapasitas Perum BULOG dalam menyerap produksi petani pada musim gadu tahun 2022, sekaligus mencegah jatuhnya harga di tingkat petani. Selain itu, Pemerintah juga melakukan diversifikasi pangan lokal dengan meningkatkan produksi jagung, sorgum, sagu, dan singkong melalui perluasan lahan dan pembukaan area baru dalam rangka peningkatan produksi sebagai alternatif bahan pangan impor. Lebih lanjut, Menko Airlangga menjelaskan bahwa terkait ketersediaan pupuk bersubsidi, Pemerintah telah melakukan reformasi kebijakan pupuk bersubsidi dengan membatasi penyaluran pupuk bersubsidi untuk sembilan komoditas utama yakni padi, jagung, kedelai, cabai, bawang merah, bawang putih, tebu, kopi, dan kakao dengan jenis pupuk yang disalurkan adalah pupuk urea dan NPK. Pemerintah juga mengembangkan berbagai kawasan sentra mandiri pangan berbasis korporasi petani untuk meningkatkan efisiensi dan skala ekonomi produksi pertanian melalui Program Food Estate di beberapa wilayah yaitu Kalimantan Tengah, Sumatera Utara, Nusa Tenggara Timur, Jawa Tengah, Sulawesi Tengah, Papua, serta Program Closed Loop yang telah dikembangkan di Sukabumi, Garut, dan Sikka.', '2020-01-15', 'Pembangunan Nasional'),
('Antisipasi Kemarau, Kementan Susun Strategi Ketahanan Pangan', '', '0000-00-00', ''),
('Aplikasi Kemarau', '', '0000-00-00', ''),
('Upaya Penanganan Ketahanan Pangan Indonesia', 'Global Food Security Index (GFSI) atau Indeks Ketahanan Pangan Global yang dirilis The Economist dan Corteva—perusahaan sains bidang pangan—menempatkan Indonesia pada posisi 65 dari 113 negara. Di kawasan ASEAN, Indonesia bercokol di posisi kelima (per Oktober 2018).\r\n\r\nCapaian itu terbilang menggembirakan, sebetulnya, mengingat skor ketahanan pangan Indonesia—berdasar laporan yang sama—terus menunjukkan peningkatan dari tahun ke tahun. Di rentang 1-100, skor Indonesia merangkak dari 46,8 (2012) menjadi 54,8 (2018).\r\n\r\nLaporan GFSI dibuat berdasarkan empat aspek penilaian, yakni keterjangkauan, ketersediaan, kualitas dan keamanan, serta sumber daya. Untuk variabel pertama, skor yang didapat Indonesia adalah 55,2 (peringkat 63). Aspek ketersediaan meraih skor paling tinggi: 58,2; menempatkan Indonesia di posisi ke-58. Adapun perihal kualitas dan keamanan diberi skor 44,5 (peringkat 84), dan faktor sumber daya alam justru mendapatkan nilai 43,9 (peringkat 111).\r\n\r\nLepas dari catatan di atas, Menteri Pekerjaan Umum dan Perumahan Rakyat (PUPR) Basuki Hadimuljono menyatakan pihaknya akan terus berbenah demi menjawab tantangan kebutuhan pangan di masa depan.\r\n\r\n“Produksi pangan harus dua kali lipat pada 2050 untuk memenuhi permintaan populasi dunia yang terus bertambah, sementara daratan dan ketersediaan air menjadi terbatas,\" kata Basuki Hadimuljono, saat memberikan sambutan di 3rd World Irrigation Forum di Bali Nusa Dua Convention Center (BNDCC), Nusa Dua, Bali, Senin (2/9/2019).\r\n\r\nMenyimak pernyataan Basuki, adalah masuk akal bila sepanjang 2015-2019, sebagaimana yang tertuang dalam Rencana Strategis (Renstra) Kementerian PUPR, pemerintah menargetkan pembangunan 65 bendungan, 1.088 embung, 1 juta hektar pembangunan jaringan irigasi baru, 3 juta hektar rehabilitasi jaringan irigasi, 306 pengendali sedimen dan lahar, penyediaan air baku 67,52 m³/detik, hingga pengendali banjir dan pengaman pantai sepanjang 3.620 km.\r\n\r\n“Ketahanan pangan harus didukung oleh ketahanan air,” kata Dirjen Sumber Daya Air (SDA) Kementerian PUPR Hari Suprayogi, Rabu (20/11). Ia juga menyampaikan, semua upaya pemerintah dilakukan demi mewujudkan visium di tahun 2030 Indonesia punya pasokan air 120 meter kubik per kapita per tahun.\r\n\r\n“Saat ini Indonesia masih 58 meter kubik per kapita per tahun. Maka untuk memenuhi target itu pembangunan tampungan harus selalu dilakukan,” kata Hari.\r\n\r\nHari mengakui upaya mencapai target tidaklah mudah. Pembangunan 1 bendungan saja, misalnya, bisa menghabiskan waktu 4-5 tahun. Itu pula yang menyebabkan pemerintah baru membangun 61 bendungan—45 bendungan baru masih on going dan 16 bendungan sudah selesai—dari 65 yang ditargetkan. “Itu semua tergantung readiness criteria dari desain dan lahan,” kata Hari. Ia menjelaskan, dengan proses seperti itu, 65 bendungan yang ditargetkan pemerintah baru akan rampung pada 2023.\r\n\r\nMeski begitu, capaian pemerintah tidaklah mengecewakan. “Pembangunan jaringan irigasi baru targetnya 1 juta hektar dan saat ini sudah 1,8 juta hektar. Kemudian rehabilitasi jaringan irigasi ekstisting sebanyak 3 juta hektar, sekarang malah sudah terpenuhi 3 juta hektar lebih,” pungkas Hari. Untuk diketahui, proyek pembangunan 65 bendungan membutuhkan dana 73,81 triliun rupiah. Dengan capaian saat ini, diharapkan 17 miliar meter kubik air bisa ditampung dan dimanfaatkan, salah satunya, untuk irigasi.\r\n\r\nSebelumnya, Indonesia memiliki 231 bendungan besar yang mampu mengairi 11 persen dari luas total 7,1 juta hektar sawah. Dengan terbangunnya 65 bendungan pada 2024 mendatang, diharapkan total layanan air untuk irigasi meningkat menjadi 465 ribu hektar, atau setara 20 persen dari total sawah. Adapun pembangunan dan rehabilitasi jaringan irigasi yang saat ini dikerjakan pemerintah antara lain Daerah Irigasi (D.I.) Lhok Guci, Aceh (18.542 hektar), Jambo Aye Kanan, Aceh (3.028 hektar), Lematang, Sumatera Selatan (3.000 hektar), Umpu System/Wai Besai (7.500 hektar), Leuwigoong, Jawa Barat (5.313 hektar), Baliase, Sulawesi Selatan (21.925 hektar), dan Gumbasa, Sulawesi Tengah (8.103 hektar).\r\n\r\nDalam konteks ketahanan pangan, pembangunan bendungan dan saluran irigasi itu memungkinkan petani tetap mendapat pasokan air yang cukup di musim kemarau, sehingga kebutuhan konsumsi masyarakat tetap terpenuhi, bahkan panen bisa ditingkatkan hingga 3 kali lipat dalam setahun. Selain pembangunan infrastruktur, upaya meningkatkan ketahanan pangan juga dilakukan dengan modernisasi irigasi yang saat ini masih terus disosialisasikan kepada para petani. “Upaya itu mencakup lima pilar: Keandalan Suplai Air; Keandalan Jaringan/Infrastruktur Irigasi; Manajemen Air; Kelembagaan Petani; Peningkatan Kualitas SDM,” kata Direktur Irigasi dan Rawa, Ditjen SDA Kementerian PUPR, Mochammad Mazid.', '2020-01-15', 'Pembangunan Nasional'),
('Antisipasi Kemarau, Kementan Susun Strategi Ketahanan Pangan', 'Kementerian Pertanian (Kementan) akan mengantisipasi musim kemarau tahun ini melalui beberapa upaya. Apalagi, melihat Covid-19 sudah menjadi pandemik global, Indonesia harus menyusun strategi ketahanan pangan agar jangan sampai terjadi kelangkaan sebagai dampak Covid-19. \"Kita harus melakukan upaya antisipasi perubahan iklim terutama kemarau. Seperti memanfaatkan infrastruktur air seperti embung, dam parit maupun long storage saat kemarau datang,\" ujar Menteri Pertanian (Mentan) Syahrul Yasin Limpo (SYL). Kondisi iklim kedepan (musim kemarau), seperti yang sudah BMKG perkirakan, tidak terjadi kemarau yang ekstrim (el nino). Sehingga hal ini sedikit melegakan dari faktor pembatas produksi pangan. \"Kondisi kemarau tetap harus diwaspadai, karena bisa terjadi kekeringan dan meningkatnya beberapa OPT. Terutama pada bulan Agustus yang diprediksi menjadi puncak musim kemarau tahun ini,\" kata Mentan SYL. Kepala Pusat Informasi Perubahan Iklim BMKG juga menyatakan dalam Forum Iklim bahwa peringatan FAO terhadap potensi kelangkaan pangan bukanlah karena faktor kekeringan (iklim). Tetapi lebih ke food supply chain yang terganggu. Sementara, Direktur Jenderal Prasarana dan Sarana Pertanian (PSP), Kementan, Sarwo Edhy mengatakan, bangunan air seperti embung dan dam parit akan bermanfaat meskipun debit air kecil, air masih bisa dialirkan ke sawah-sawah petani. Sehingga petani bisa menambah pertanaman dalam setahun, dari satu kali menjadi dua kali. \"Infrastruktur air ini juga sangat berguna dalam pengelolaan air lahan kering maupun tadah hujan,\" kata Sarwo Edhy. Berbeda dengan embung, dam parit dibangun dengan membendung sungai kecil atau parit alami. Untuk pengembangan dam parit, sungai yang dibendung memiliki debit minimal 5 liter per detik dan dengan luas lahan usaha tani yang dapat diairi minimal 25 ha.\r\n\r\nTak hanya itu, agar dampak dam parit bisa lebih besar maka pembangunannya bisa secara bertingkat dari hulu ke hilir dalam satu aliran Daerah Aliran Sungai (DAS) mikro. \"Model pengembangan dam parit bertingkat di DAS hulu sangat ideal untuk dikombinasikan dengan pengelolaan air dan sedimen di waduk atau embung besar,\" jelas Sarwo Edhy. Contohnya dam parit yang dibangun Poktan Mappabengngae III di Kelurahan Tiroang, Kecamatan Tiroang, Kabupaten Pinrang, Sulawesi Selatan. Dam parit di sini luas layanannya hingga 75 Ha. Kemudian di Desa Tundagan, Kecamatan Watukumpul, Kabupaten Pemalang. Dam parit yang dibangun Poktan Maju Karya ini luas layanannya 32 ha. Sedangkan pembangunan embung di Desa Pangadegan, Kecamatan Majenang, Kabupaten Cilacap dibangun dengan dimensi 18×13×2,5 m3. Embung yang dibangun P3A Usaha Tani Makmur ini mampu melayani areal sawah seluas 31 ha. \"Dari pembangunan embung dan dam parit ini peningkatan IP yang diharapkan semula 200 menjadi 300,\" harap Sarwo Edhy. Namun, Sarwo Edhy memperingatkan agar pemeliharaan air sungai dan bangunan air tersebut harus dirawat. \"Biar saat musim kemarau debit air tidak kecil tapi musim hujan air meluap, sebaiknya perawatan, pemeliharaan dan konservasi harus dilakukan dari hulu ke hilir,\" tuturnya. Misalnya dengan pengerukan sedimen sungai yang sebaiknya dilakukan secara rutin sebelum musim penghujan datang. Kemudian perawatan rutin seperti membersihkan sampah yang menghalangi aliran air. \"Semuanya bisa dilakukan dengan komitmen bersama di desa setempat,\" pungkasnya.', '2020-04-19', 'Gilar Ramdhani'),
('Ketahanan Pangan Untuk Kesejahteraan Masyarakat Dan Petani', 'Ketersediaan pangan yang dapat dijangkau berbagai pihak mampu ikut menjaga stabilitas ekonomi nasional di tengah dinamika global. Maka dari itu, ketahanan pangan perlu menjadi fokus untuk ditingkatkan dengan mewujudkan pangan yang berdaulat (food sovereignty) dan mandiri (food resilience). Menteri Koordinator (Menko) Bidang Perekonomian Airlangga Hartarto dalam acara Diskusi Ekonomi Berdikari Kompas dengan tema “Ketahanan Pangan Kunci Hadapi Potensi Krisis Global”, Selasa (13/09), mengatakan Pemerintah juga melakukan upaya mendorong ketahanan pangan melalui berbagai bauran strategi dan kebijakan. “Ketahanan pangan bukan hanya menjadi prioritas tapi juga menjadi target kesejahteraan dan pemerataan kesejahteraan masyarakat, Pemerintah telah merumuskan dan mengimplementasikan kebijakan penguatan ketahanan pangan nasional,” kata Menko Airlangga secara virtual. Dari sisi pembiayaan, Pemerintah menyediakan bantuan Kredit Usaha Rakyat (KUR) yang dapat diakses oleh pelaku sektor pertanian dengan bunga yang hanya sebesar 3 persen hingga akhir tahun 2022. Selain itu, plafon kredit KUR pada tahun 2022 juga ditingkatkan hingga Rp373,17 triliun dan plafon KUR Mikro (tanpa agunan tambahan) yang sebelumnya di atas Rp10 juta hingga Rp50 juta, ditingkatkan menjadi di atas Rp10 juta hingga Rp100 juta. “Pemerintah telah meningkatkan plafon KUR menjadi sebesar Rp373,17 triliun pada tahun 2022 sehingga Pemerintah Daerah atau Kementerian bisa menggunakan baik untuk pengadaan alsintan maupun korporatisasi daripada pertanian,” ungkap Menko Airlangga. Sedangkan dari aspek kelembagaan, upaya yang dilakukan Pemerintah adalah dengan membentuk Badan Pangan Nasional melalui penerbitan Peraturan Presiden Nomor 66 Tahun 2021. Lembaga ini diberikan kewenangan terkait pengelolaan cadangan pangan Pemerintah, pelaksanaan kegiatan stabilisasi pasokan dan harga, penguatan sistem logistik pangan, pengentasan wilayah rentan rawan pangan, pengembangan penganekaragaman pangan dan pengembangan potensi pangan lokal. Untuk memperkuat Cadangan Beras Pemerintah (CBP), telah diterbitkan kebijakan pembelian gabah atau beras petani oleh Perum BULOG hingga stok CBP mencapai 1,2 juta ton setara beras. Penugasan ini ditujukan untuk memperluas kapasitas Perum BULOG dalam menyerap produksi petani pada musim gadu tahun 2022, sekaligus mencegah jatuhnya harga di tingkat petani. Selain itu, Pemerintah juga melakukan diversifikasi pangan lokal dengan meningkatkan produksi jagung, sorgum, sagu, dan singkong melalui perluasan lahan dan pembukaan area baru dalam rangka peningkatan produksi sebagai alternatif bahan pangan impor. Lebih lanjut, Menko Airlangga menjelaskan bahwa terkait ketersediaan pupuk bersubsidi, Pemerintah telah melakukan reformasi kebijakan pupuk bersubsidi dengan membatasi penyaluran pupuk bersubsidi untuk sembilan komoditas utama yakni padi, jagung, kedelai, cabai, bawang merah, bawang putih, tebu, kopi, dan kakao dengan jenis pupuk yang disalurkan adalah pupuk urea dan NPK. Pemerintah juga mengembangkan berbagai kawasan sentra mandiri pangan berbasis korporasi petani untuk meningkatkan efisiensi dan skala ekonomi produksi pertanian melalui Program Food Estate di beberapa wilayah yaitu Kalimantan Tengah, Sumatera Utara, Nusa Tenggara Timur, Jawa Tengah, Sulawesi Tengah, Papua, serta Program Closed Loop yang telah dikembangkan di Sukabumi, Garut, dan Sikka.', '2022-09-14', 'Kemenkeu'),
('Ragam Upaya Pemprov DKI Jakarta Jaga Ketahanan Pangan dan Inflasi', 'Di tengah berbagai tantangan pertanian yang dihadapi saat ini ataupun ke depan, Indonesia perlu mengembangkan sistem pangan nasional yang antisipatif untuk menjamin ketersediaan pangan. Hal ini perlu dilakukan dengan berbagai macam strategi, mulai dari pengembangan pangan lokal, peningkatan pertanian di lahan kering, hingga memperhatikan aspek penyuluh lapangan. Guru Besar Fakultas Pertanian IPB University Hadi Susilo Arifin menyampaikan, pertanian harus bisa menghadapi sejumlah tantangan saat ini ataupun masa depan, seperti peningkatan populasi manusia, perubahan pola hidup, dan kebutuhan akan sistem produksi ramah lingkungan. ”Adanya perdagangan bebas pada akhirnya membuat konsumen menentukan aturan dan regulasi kepada negara produsen. Begitu juga masyarakat kota yang sekarang tidak makan sembarangan karena sadar gaya hidup sehat,” ujarnya dalam webinar bertajuk ”Konsep Kemandirian Pangan Lokal untuk Meningkatkan Kesejahteraan Petani”, Sabtu (30/10/2021). Berkaca dari sejumlah tantangan tersebut, Hadi menyatakan perlu sistem pangan nasional yang antisipatif untuk menjamin ketersediaan pangan yang cukup. Hal ini diperlukan mengingat Indonesia menjadi salah satu negara yang rentan terhadap kekurangan pangan. Indeks ketahanan pangan global Indonesia tercatat berada pada peringkat ke-62 dari 113 negara.\r\n\r\nMenurut Hadi, menciptakan sistem pangan nasional yang antisipatif dapat dilakukan dengan mengembangkan keanekaragaman pangan lokal tidak hanya padi, tetapi juga sagu, singkong, talas, hingga ubi jalar. Pengembangan ragam pangan lokal ini harus inovatif mulai dari pascapanen, logistik, pemrosesan, pengiriman, hingga melakukan kampanye.\r\n\r\nUntuk mencapai ketahanan pangan, Indonesia juga perlu mengembangkan pertanian di lahan kering. Sebab, Indonesia memiliki lahan basah yang terbatas. Data menunjukkan, dari total 191,1 juta hektar daratan Indonesia, seluas 43,6 juta hektar merupakan lahan basah dan 144,5 juta hektar lahan kering. ”Sawah untuk komoditas padi dibangun di lahan basah. Jadi, jika kita terus mengonsumsi beras, akan membuka sawah baru dan ini tidak mudah. Kita memiliki lahan kering yang luas dan pangan lokal lebih banyak memanfaatkan lahan ini,” tuturnya. Baca juga : Tingkatkan Kesadaran Publik terhadap Pangan Lokal Strategi lain dalam mengembangkan pangan lokal, menurut Hadi, dengan meningkatkan dukungan logistik dari kebun hingga meja makan. Dukungan logistik ini salah satunya menyangkut penyediaan tempat penyimpanan yang layak untuk semua komoditas. Selain itu, pengembangan pangan lokal juga harus meningkatkan layanan ekstensi berupa penyuluh pertanian. Di beberapa daerah, penyuluh pertanian kurang mendapat perhatian karena keterbatasan jumlah sumber daya manusia dan pendapatan yang rendah. Padahal, kata Hadi, penyuluh pertanian merupakan aspek yang sangat penting agar petani bisa terus mengembangkan keterampilannya termasuk menggunakan internet.\r\n\r\nPotensi pangan lokal\r\nKepala Balai Pengkajian Teknologi Pertanian (BPTP) Maluku Procula Rudlof mengatakan, banyak potensi sumber daya pangan Indonesia dari daerah-daerah. Tercatat Indonesia memiliki 77 jenis sumber karbohidrat, 75 jenis sumber protein, 26 jenis kacang-kacangan, 228 jenis sayuran, serta 110 jenis rempah dan bumbu. Bahan pangan berpati seperti ubi kayu, jagung, dan sagu juga dapat diolah menjadi tepung sebagai substitusi terigu.\r\n\r\nRudlof menilai bahwa pangan lokal memiliki peran dalam memperkuat daya tahan produksi pangan nasional. Pangan lokal secara alamiah sudah beradaptasi dengan karakteristik sumber daya alam dan sosial budaya setempat. Di samping itu, produksi pangan lokal kerap dilakukan dengan menggunakan faktor-faktor produksi yang tersedia secara lokal sehingga mengurangi risiko terhambatnya pasokan produksi dari luar. Di sisi lain, pangan lokal juga telah dikonsumsi penduduk setempat yang terbatas sehingga mengurangi biaya dan risiko pemasaran. Baca juga : Mengapa Pangan Lokal Masa Depan Kita Rudlof menegaskan, upaya pengembangan pangan lokal sangat penting karena aspek geografi Indonesia sebagai negara kepulauan, pulau-pulau kecil, dan perbatasan. Pola makan pangan lokal juga sangat identik dengan pelestarian budaya, kearifan lokal, dan norma-norma sosial yang dibangun masyarakat setempat. ”Pengembangan pangan lokal juga sangat penting sebagai strategi kelangkaan pangan dunia akibat permasalahan produksi. Pangan lokal kita seperti porang bahkan terus berkembang ke industrialisasi dan menjadi kepentingan negara-negara yang membutuhkan,” ucapnya.\r\n\r\nMeski demikian, Rudlof mengakui bahwa pengembangan pangan lokal masih menemui sejumlah kendala dari aspek permintaan, preferensi, dan persaingan. Permintaan dan preferensi pangan lokal saat ini masih terbatas serta harus bersaing dengan beras atau produk impor lainnya. Terkait hal ini, Rudlof menyatakan, pemerintah telah menetapkan peta jalan penurunan konsumsi beras hingga 2024. Pada saat yang sama, konsumsi ubi kayu, jagung, sagu, kentang, pisang, dan talas akan ditingkatkan hingga 1,2 juta ton tahun 2024 di setiap provinsi. Adapun strategi pengembangan yang dilakukan mulai dari promosi melalui peraturan daerah hingga penguatan usaha mikro, kecil, dan menengah (UMKM).', '2021-10-30', 'Pradipta Pandu'),
('Antisipasi Kemarau, Kementan Susun Strategi Ketahanan Pangan', 'Berikut ini beberapa cara mengatasi krisis pangan\r\n1. Mengatasi perubahan iklim\r\nPerubahan iklim berdampak parah pada mata pencaharian dan produksi pangan kita. Jika kita melawan perubahan iklim dan beroperasi secara berkelanjutan, kita dapat memastikan cukup makanan untuk kita dan generasi mendatang. Ini adalah langkah lain dalam memerangi krisis pangan\r\n\r\n2. Mempromosikan keragaman pangan Berfokus pada satu tanaman pangan atau bahan pokok dapat menyebabkan hasil yang buruk dalam mengurangi krisis pangan. Oleh karena itu, pelatihan tentang pentingnya pola makan yang beragam dan sehat untuk perbaikan gizi perlu dilakukan dalam rangka meningkatkan ketahanan pangan.\r\n\r\n3. Tingkatkan produksi Tidak ada cara mudah untuk meningkatkan produksi pangan dalam negeri dalam jangka pendek, tetapi kita harus melakukan langkah-langkah untuk meningkatkan produksi pangan dalam negeri dalam jangka panjang.\r\n\r\n4. Kurangi Pemborosan Diperkirakan 20-30% dari semua makanan terbuang dari pertanian .Sayuran bisa rusak jika truk tidak datang cukup cepat, daging bisa rusak jika kulkas tidak cukup dingin, dan prasmanan juga bisa sangat boros. Oleh karena itu, kampanye pendidikan publik yang kuat untuk mengurangi limbah di rumah dan restoran diperlukan, dan mungkin larangan sementara makan prasmanan sampai situasi membaik\r\n\r\n5. Memberi Penghargaan Buat dampak negatif (atau biaya) produksi (misalnya hilangnya lahan) transparan sehingga semua biaya diperhitungkan, dan bukan untuk produksi secara keseluruhan, tetapi untuk penyerapan karbon tanah, meminimalkan input eksternal, mengurangi penggunaan energi menjadi sangat membantu.\r\n\r\n6. Sumber protein masa depan Ide pengembangbiakan serangga dan ubur-ubur hanyalah beberapa dari proposal inovatif yang dibuat untuk mendiversifikasi sumber protein di luar daging, kedelai, dll. Hal ini menyebabkan tingkat protein hewani yang lebih rendah di belahan bumi utara. belahan bumi bagian selatan.', '2023-07-18', 'Fai'),
('Ketahanan Pangan Untuk Kesejahteraan Masyarakat Dan Petani', 'Pangan dan pertanian merupakan sektor yang tidak luput terkena dampak pandemi Covid-19. Pada triwulan II 2020, sektor pertanian menyumbang 15,46 persen terhadap Produk Domestik Bruto (PDB) Indonesia. Nilai Tukar Petani (NTP) nasional juga tercatat masih cukup rendah. Selain isu tersebut, sampah makanan juga menjadi salah satu dampak pandemi. setiap tahunnya, satu orang menghasilkan 300 kilogram sampah makanan setara 13 juta ton. “Penting bagi kita untuk melakukan aksi untuk mengurangi akibat negatif dari pandemi Covid-19,” ujar Kepala Subdirektorat Peternakan Direktorat Pangan dan Pertanian Kementerian PPN/Bappenas Noor Avianto pada Webinar Reducing Food Loss and Waste During Covid-19, Selasa (29/9). Untuk mengatasi krisis pangan dan pertanian yang juga terjadi akibat perubahan iklim dan gejolak ekonomi global sebelum pandemi Covid-19, Kementerian PPN/Bappenas telah menyiapkan beberapa strategi. Pertama, meningkatkan penambahan nutrisi pangan. Kedua, meningkatkan ketersediaan bahan pangan dengan harga yang stabil dan keberlanjutan. Kedua strategi tersebut didukung dengan strategi ketiga, yaitu peningkatan sumber daya manusia untuk meningkatkan produktivitas pertanian dan kemudahan akses pasar. Keempat, peningkatan sumber daya alam di sektor pertanian. Strategi kelima adalah memperbaiki sistem pangan. Perbaikan sistem pangan ini sejalan dengan peningkatan produksi pangan domestik dan industri makanan lokal. Untuk itu, diperlukan stimulus ekonomi bagi pengusaha, baik penghasil makanan maupun petani untuk dapat menghasilkan produk dengan kualitas yang lebih baik. Akses pangan yang stabil juga diperlukan untuk menjamin distribusi merata ke semua lapisan masyarakat. “Bantuan pangan terhadap rumah tangga yang rentan juga penting. Pilar ini fokus untuk memberikan pangan yang memadai bagi semua orang. Bersamaan dengan hal itu, pilar ini diharapkan juga dapat mengurangi sampah makanan yang dihasilkan,” imbuh Noor. Berdasarkan asalnya, terdapat dua jenis sampah makanan. Sampah makanan yang berasal dari hasil produksi pertanian, perikanan, maupun peternakan, dan distribusi disebut food loss. Sedangkan sampah makanan yang dihasilkan dari konsumsi individu, memasak, dan makan disebut food waste. Untuk mengurangi food loss, diperlukan praktik pertanian dan distribusi yang baik. Saat ini, kehilangan bahan pangan banyak terjadi saat distribusi pengiriman barang. “Usaha mengurangi food loss dan food waste tidak hanya dilakukan oleh pemerintah dengan insentif fiskal, tetapi memerlukan kerja sama dari berbagai pihak, seperti komunitas dan sektor privat,” tandasnya.', '2020-09-29', 'Berita Pembangunan');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `ahli_tanaman` enum('Gilang','Putri','Reza','Julia') NOT NULL,
  `tanggal_konsultasi` date NOT NULL,
  `keluhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`nama`, `email`, `ahli_tanaman`, `tanggal_konsultasi`, `keluhan`) VALUES
('Budi Santoso', 'budisantoso@gmail.com', 'Gilang', '2023-10-27', 'Tanaman padi dan cabai saya mengalami serangan hama yang cukup parah dalam beberapa minggu terakhir. Saya sudah mencoba berbagai metode pengendalian hama yang umum, namun tampaknya tidak memberikan hasil yang memuaskan. Saya butuh saran dari Anda mengenai strategi yang lebih efektif dalam mengatasi masalah ini.'),
('Joko Pranoto', 'Joko Pranoto@gmail.com', 'Gilang', '2023-10-27', 'Saya memiliki lahan pertanian yang cukup besar...'),
('Mulyono Wibowo', 'mulyono@gmail.com', 'Gilang', '2023-10-27', 'Saya membutuhkan mimbingan lebih lanjut mengenai...'),
('Agus Setiawan', 'agussetiawan@gmail.com', 'Gilang', '2023-10-26', 'Saya sering bingung dalam memilih varietas ta...'),
('Hadi Nugroho', 'hadinugroho@gmail.com', 'Gilang', '2023-10-26', 'Saya Berharap anda dapat memberikan rekomendasi...'),
('Dian Purnama', 'dian@gmail.com', 'Gilang', '2023-10-25', 'Saya tidak yakin apakah komposisi tanah saya...'),
('Rina Indah', 'rina_indah@gmail.com', 'Gilang', '2023-10-22', 'Saya sudah mencoba berbagai metode penge...'),
('Jason Damono', 'jason@gmail.com', 'Gilang', '2023-10-22', '');

-- --------------------------------------------------------

--
-- Table structure for table `petani`
--

CREATE TABLE `petani` (
  `id_petani` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petani`
--

INSERT INTO `petani` (`id_petani`, `username`, `password`, `nama`, `email`) VALUES
(1, 'ranggapratama', '12345678', 'Rangga Pratama', 'rangga@gmail.com'),
(2, 'nurIlham123', '12345678', 'Ahmad Nur Ilham', 'burilham@gmail.com'),
(3, 'setiawan4gus', '123456kl', 'Agus Setiawan', 'setiawan@gmail.com'),
(4, 'alHabiburrahman', 'asdzxc', 'Mohamad Habiburrahman', 'habib345@gmail.com'),
(5, 'abdul4z1z', 'nmbjkl', 'Abdul Aziz', 'aziz@gmail.com'),
(6, 'ayuDew1', 'qweasd', 'Dewi Ayu', 'ayudewi@gmail.com'),
(7, 'hidayah_nurul', 'bnmjkl', 'Nurul Hidayah', 'nuroel@gmail.com'),
(8, 'madeInPutri', 'poeteri12', 'Ni Made Putri', 'madeputriin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `ahli_tanaman`
--
ALTER TABLE `ahli_tanaman`
  ADD PRIMARY KEY (`id_ahli`);

--
-- Indexes for table `petani`
--
ALTER TABLE `petani`
  ADD PRIMARY KEY (`id_petani`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ahli_tanaman`
--
ALTER TABLE `ahli_tanaman`
  MODIFY `id_ahli` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `petani`
--
ALTER TABLE `petani`
  MODIFY `id_petani` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
