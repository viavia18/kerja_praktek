-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 05:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database:`learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `title_ind` varchar(100) NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `content_ind` varchar(1000) NOT NULL,
  `content_en` varchar(1000) NOT NULL,
  `timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title_ind`, `title_en`, `video`, `image`, `content_ind`, `content_en`, `timestamp`) VALUES
(1, 'Kegiatan 1', 'Activities 1', '', '1c7f327876171545df0befde3cea453c.jpg', '<p>Ini adalah kegiatan 1</p>', '<p>This is an activity 1</p>', '2021-07-17'),
(2, 'Kegiatan 2', 'Activities 2', '', 'CCA_1_R.jpg', '<p>Ini adalah kegiatan 2\r\n</p>', '<p>This is an activity 2</p>', '2021-08-15'),
(3, 'Kegiatan 3', 'Activities 3', '', 'Feature-image-3.jpg', '<p>Ini adalah kegiatan 3</p>', '<p>This is an activity 3</p>', '2021-09-10'),
(4, 'Kegiatan 4', 'Activities 4', '', 'back-to-school-activities.jpg', '<p>Ini adalah kegiatan 4</p>', '<p>This is an activity 4</p>', '2021-06-05'),
(5, 'Kegiatan 5', 'Activities 5', '', 'back-to-school-activities-1024x683.jpg', '<p>Ini adalah kegiatan 5</p>', '<p>This is an activity 5</p>', '2021-10-10'),
(6, 'Kegiatan 6', 'Activities 6', '', '8 Social Situations to Role-Play With Your Middle-Schooler.jfif', '<p>Ini adalah kegiatan 6</p>', '<p>This is an activity 6</p>', '2021-09-23'),
(7, 'Kegiatan 7', 'Activities 7', '', 'DSC04496.jfif', '<p>Ini adalah kegiatan 7</p>', '<p>This is an activity 7</p>', '2021-11-10'),
(8, 'Kegiatan 8', 'Activities 8', '', '7-First-Day-of-School-Activities-Students-Love.jpg', '<p>Ini adalah kegiatan 8</p>', '<p>This is an activity 8</p>', '2021-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `option_ind` varchar(100) NOT NULL,
  `option_en` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `video_en` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_en` varchar(100) NOT NULL,
  `content_ind` varchar(5000) NOT NULL,
  `content_en` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `id_question`, `option_ind`, `option_en`, `video`, `video_en`, `image`, `image_en`, `content_ind`, `content_en`) VALUES
(1, 1, 'Bagong', 'Bagong', '', '', '', '', '', ''),
(2, 1, 'Petruk', 'Petruk', '', '', '', '', '<ul>\r\n	<li>Positif : memberi kesempatan bagi pihak lain yg ingin menjadi mitra (kurang modal tapi ingin menjadi pelaku usaha/bisnis).</li>\r\n	<li>Negatif : sbg pebisnis yg sukses tidak harus menghalalkan segala cara utk menjatuhkan pesaing.&nbsp;<br />\r\n	&nbsp;</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Positive : providing opportunities for other parties who want to become partners (less capital but want to become entrepreneurs/businesses).</li>\r\n	<li>Negative : as a successful businessman does not have to justify any means to bring down competitors.</li>\r\n</ul>\r\n'),
(3, 1, 'Togog', 'Togog', '', ' ', '', '', '', ''),
(4, 1, 'Gareng', 'Gareng', '', '', '', '', '', ''),
(5, 2, 'Setuju', 'Agree', '', '', '', '', '<p><span dir=\"ltr\">Anda, sebagai </span><span dir=\"ltr\">Pimpinan Rumah Sakit mungkin melakukan tindakan membiarkan praktik di </span><span dir=\"ltr\">lapangan terkait dengan pelapora</span><span dir=\"ltr\">n pasien Covid</span><span dir=\"ltr\">-</span><span dir=\"ltr\">19 dengan alasan untuk menjaga kelangsungan </span><span dir=\"ltr\">rumah sakit karena dengan menerima penggantian dari negara maka secara finansial, rumah </span><span dir=\"ltr\">sakit mampu menutup semua biaya</span><span dir=\"ltr\">-</span><span dir=\"ltr\">biaya operasional rumah sakit. </span><span dir=\"ltr\">Tetapi tindakan ini dapat </span><span dir=\"ltr\">berlawanan dengan et</span><span dir=\"ltr\">ika, sumpah jabatan dan peraturan yang ada.</span></p>\r\n', '<p><span dir=\"ltr\">The </span><span dir=\"ltr\">hospital </span><span dir=\"ltr\">C</span><span dir=\"ltr\">EO </span><span dir=\"ltr\">let the data </span><span dir=\"ltr\">manipulation </span><span dir=\"ltr\">to happen</span><span dir=\"ltr\"> </span><span dir=\"ltr\">for</span><span dir=\"ltr\"> </span><span dir=\"ltr\">reason</span><span dir=\"ltr\">, that is,</span><span dir=\"ltr\"> </span><span dir=\"ltr\">to maintain the </span><span dir=\"ltr\">continuity of t</span><span dir=\"ltr\">he hospital</span><span dir=\"ltr\">.</span><span dir=\"ltr\"> </span><span dir=\"ltr\">The government</span><span dir=\"ltr\"> </span><span dir=\"ltr\">reimbursement </span><span dir=\"ltr\">helps</span><span dir=\"ltr\"> </span><span dir=\"ltr\">cover all hospital operational </span><span dir=\"ltr\">costs. </span><span dir=\"ltr\">This</span><span dir=\"ltr\"> </span><span dir=\"ltr\">action</span><span dir=\"ltr\">, ho</span><span dir=\"ltr\">wever,</span><span dir=\"ltr\"> </span><span dir=\"ltr\">is unethical, </span><span dir=\"ltr\">contrary to ethics, </span><span dir=\"ltr\">official </span><span dir=\"ltr\">oath</span><span dir=\"ltr\">,</span><span dir=\"ltr\"> </span><span dir=\"ltr\">and existing regulations.</span><span dir=\"ltr\"> </span></p>\r\n'),
(6, 2, 'Tidak Setuju', 'Disagree', '', '', '', '', '<p>Sebagai Pimpinan Rumah Sakit, Anda telah melakukan tindakan yang benar karena Anda telah mempertimbangkan risiko yang nanti akan ditanggung jika salah dalam membuat laporan. Sebagai pimpinan, Anda memiliki integritas dan perilaku profesional. Anda terikat oleh sumpah jabatan bahwa Anda harus bekerja secara profesional dengan menaati segala peraturan bahwa harus ada pernyataan dari keluarga pasien bahwa pasien tersebut meninggal karena Covid-19.</p>\r\n', '<p><span dir=\"ltr\">The hospital</span><span dir=\"ltr\"> </span><span dir=\"ltr\">CEO </span><span dir=\"ltr\">ha</span><span dir=\"ltr\">s</span><span dir=\"ltr\"> </span><span dir=\"ltr\">don</span><span dir=\"ltr\">e the right thing </span><span dir=\"ltr\">for not taking</span><span dir=\"ltr\"> </span><span dir=\"ltr\">the risks </span><span dir=\"ltr\">should he</span><span dir=\"ltr\"> </span><span dir=\"ltr\">make a wrong </span><span dir=\"ltr\">report. As a </span><span dir=\"ltr\">person in</span><span dir=\"ltr\"> </span><span dir=\"ltr\">the helm of </span><span dir=\"ltr\">leadership</span><span dir=\"ltr\">,</span><span dir=\"ltr\"> </span><span dir=\"ltr\">s</span><span dir=\"ltr\">he</span><span dir=\"ltr\"> </span><span dir=\"ltr\">shows </span><span dir=\"ltr\">integrity</span><span dir=\"ltr\"> </span><span dir=\"ltr\">and professional behavior. </span><span dir=\"ltr\">She </span><span dir=\"ltr\">is</span><span dir=\"ltr\"> </span><span dir=\"ltr\">bound by an oath of office that </span><span dir=\"ltr\">she </span><span dir=\"ltr\">must work professionally by complying with a</span><span dir=\"ltr\">ll </span><span dir=\"ltr\">regulations</span><span dir=\"ltr\">. One of the reg</span><span dir=\"ltr\">ulati</span><span dir=\"ltr\">ons is</span><span dir=\"ltr\"> </span><span dir=\"ltr\">a statement from the patient&#39;s family that the patient died </span><span dir=\"ltr\">of Covid</span><span dir=\"ltr\">-</span><span dir=\"ltr\">19.</span><span dir=\"ltr\"> </span></p>\r\n'),
(7, 3, 'Setuju', 'Agree', '', '', '', '', '<p>Anda, sebagai Pimpinan Rumah Sakit mungkin melakukan tindakan agar supaya keluarga pasien juga mendapat &nbsp;penggantian biaya perawatan di rumah sakit dan bagi rumah sakit juga semakin mampu menutup semua biaya-biaya operasional rumah sakit.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Catatan:</p>\r\n\r\n<p>Tindakan seperti ini tidak memberikan contoh manajemen yang profesional. Seharusnya dokter menjelaskan fakta penyakit yang diderita oleh pasien.</p>\r\n', '<p><span dir=\"ltr\">The</span><span dir=\"ltr\"> </span><span dir=\"ltr\">h</span><span dir=\"ltr\">ospital</span><span dir=\"ltr\"> </span><span dir=\"ltr\">CEO</span><span dir=\"ltr\"> </span><span dir=\"ltr\">may take </span><span dir=\"ltr\">such an </span><span dir=\"ltr\">action </span><span dir=\"ltr\">in order</span><span dir=\"ltr\"> </span><span dir=\"ltr\">that the patient&#39;s family can also receive </span><span dir=\"ltr\">reimbursement for the cost of treatment at the hospital and </span><span dir=\"ltr\">for the hospital to be able to </span><span dir=\"ltr\">cover all operational costs</span></p>\r\n\r\n<p>Notes:<br />\r\n<span dir=\"ltr\">Such action</span><span dir=\"ltr\"> </span><span dir=\"ltr\">set</span><span dir=\"ltr\">s</span><span dir=\"ltr\"> </span><span dir=\"ltr\">no </span><span dir=\"ltr\">example of professional management. </span><span dir=\"ltr\">D</span><span dir=\"ltr\">octor should explain</span><span dir=\"ltr\"> </span><span dir=\"ltr\">to</span><span dir=\"ltr\"> </span><span dir=\"ltr\">t</span><span dir=\"ltr\">he </span><span dir=\"ltr\">patient</span><span dir=\"ltr\"> </span><span dir=\"ltr\">about the d</span><span dir=\"ltr\">isease</span><span dir=\"ltr\">.</span><span dir=\"ltr\"> </span></p>\r\n'),
(8, 3, 'Tidak Setuju', 'Disagree', '', '', '', '', '<p>Sebagai pimpinan, Anda memiliki integritas dan perilaku profesional. Anda terikat oleh sumpah jabatan bahwa Anda harus bekerja secara profesional dengan menaati segala peraturan bahwa harus jujur menjelaskan menjelaskan fakta penyakit yang diderita oleh pasien.</p>\r\n', '<p><span dir=\"ltr\">The C</span><span dir=\"ltr\">EO</span><span dir=\"ltr\"> </span><span dir=\"ltr\">ha</span><span dir=\"ltr\">s</span><span dir=\"ltr\"> </span><span dir=\"ltr\">integrity and pr</span><span dir=\"ltr\">ofessional behavior. </span><span dir=\"ltr\">She is</span><span dir=\"ltr\"> </span><span dir=\"ltr\">bound by an oath of office </span><span dir=\"ltr\">to</span><span dir=\"ltr\"> </span><span dir=\"ltr\">work </span><span dir=\"ltr\">professionally by complying with all regulations</span><span dir=\"ltr\">.</span><span dir=\"ltr\"> </span><span dir=\"ltr\">She</span><span dir=\"ltr\"> </span><span dir=\"ltr\">must honestly explain the facts of the </span><span dir=\"ltr\">disease suffered by the patient.</span></p>\r\n'),
(9, 4, 'Setuju', 'Agree', '', '', '', '', '<p>Anda, sebagai Pimpinan Rumah Sakit mungkin melakukan tindakan tersebut untuk meringankan beban keluarga pasien.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Catatan:<br />\r\nTindakan menolong ini bertentangan dengan asas kejujuran, kewajaran, dan perilaku profesional.</p>\r\n', '<p><span dir=\"ltr\">As the</span><span dir=\"ltr\"> </span><span dir=\"ltr\">Hospital Manager, </span><span dir=\"ltr\">she </span><span dir=\"ltr\">may take these actions to ease the </span><span dir=\"ltr\">financi</span><span dir=\"ltr\">al </span><span dir=\"ltr\">burden on the </span><span dir=\"ltr\">patient&#39;s family.</span></p>\r\n\r\n<p>Notes:<br />\r\n<span dir=\"ltr\">This act of helping is against the principles of honesty, fairness, </span><span dir=\"ltr\">and professional behavior.</span></p>\r\n'),
(10, 4, 'Tidak Setuju', 'Disagree', '', '', '', '', '<p>Sebagai Pimpinan Rumah Sakit, Anda telah melakukan menerapkan asas kejujuran, kewajaran, dan perilaku profesional.</p>\r\n', '<p><span dir=\"ltr\">As </span><span dir=\"ltr\">the </span><span dir=\"ltr\">Hospital Leader, </span><span dir=\"ltr\">she has</span><span dir=\"ltr\"> </span><span dir=\"ltr\">implemented the principles of honesty, fairness, and </span><span dir=\"ltr\">professional behavior.</span></p>\r\n'),
(11, 5, 'Setuju', 'Agree', '', '', '', '', '<p>Seperti pendapat Reno, untuk menyelamatkan korporasi perlu terobosan dengan kontrak kerjasama di luar operasi utama. Hal ini bisa menunjukkan kinerja manajemen yang baik, dan dapat mencegah PHK karyawan.</p>\r\n', '<p>Like Reno&#39;s opinion, to save the corporation it is necessary to make a breakthrough with a cooperation contract outside the main operation. This can show good management performance, and can prevent employee layoffs.</p>\r\n'),
(12, 5, 'Tidak Setuju', 'Not Agree', '', '', '', '', '<p>Informasi bisa menyesatkan investor, dan mengakibatkan harga saham naik sesaat dan bersifat sementara, dan seterusnya bisa mengakibatkan penurunan harga saham yang mengakibatkan kerugian pemegang saham.</p>\r\n', '<p>Information can mislead investors, and cause share prices to rise for a moment and be temporary, and so on can lead to a decrease in share prices resulting in shareholder losses.</p>\r\n'),
(13, 6, 'Setuju', 'Agree', '', '', '', '', '<p>PT. Garuda adalah merupakan klien besar bagi mereka, sehingga penghasilan KAP dari PT Garuda merupakan porsi yang sangat signifikan terhadap&nbsp; pendapatan KAP yang mempengaruhi keberlanjutan KAP.&nbsp; Hal ini, menjadi pertimbangan tersendiri, apabila KAP menolak memberikan opini&nbsp; WTP&nbsp; pada LK&nbsp; PT. Garuda.&nbsp; Jika menolak, akan dengan mudah PT&nbsp; Garuda mengganti auditornya.&nbsp; Demikian juga, KAP akan memecat auditor yang tidak mau mengikuti&nbsp; kemauan partner KAP.</p>\r\n', '<p>PT. Garuda is a big client for them, so that KAP&#39;s income from PT Garuda is a very significant portion of KAP&#39;s income which affects the sustainability of KAP. This is a separate consideration, if the KAP refuses to give an WTP opinion to the LK PT. Garuda. If they refuse, PT Garuda will easily change its auditor. Likewise, KAP will fire auditors who do not want to follow the wishes of KAP partners.</p>\r\n'),
(14, 6, 'Tidak Setuju', 'Not Agree', '', '', '', '', '<p>Jika laporan keuangan ternyata menyesatkan dan mengakibatkan kerugian bagi pengguna laporan, maka hal ini akam merusak tingkat kepercayaan publik terhadap reputasi Profesi Akuntan Public.</p>\r\n', '<p>If the financial statements are found to be misleading and result in losses for report users, then this will damage the level of public confidence in the reputation of the Public Accountant Profession.</p>\r\n'),
(15, 7, 'Setuju', 'Agree', '', '', '', '', '<p>Dewan Komisaris&nbsp; adalah wakil Pemegang Saham. Mereka melihat kasus ini bisa merugikan pemegang saham dalam periode mendatang</p>\r\n', '<p>The Board of Commissioners is the representative of the Shareholders. They see this case can be detrimental to shareholders in the future</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(11) NOT NULL,
  `title_ind` varchar(100) NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `content_ind` varchar(5000) NOT NULL,
  `content_en` varchar(5000) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `creator` int(11) NOT NULL,
  `timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `title_ind`, `title_en`, `image`, `content_ind`, `content_en`, `status`, `creator`, `timestamp`) VALUES
(0, 'Index ~ Jangan Dihapus ~', 'Index ~ Don\'t Delete ~', '', '', '', 0, 1, '2021-10-02'),
(1, 'Kasus 1 : Bisnis Peternakan Ayam Potong', 'Case 1 : Chicken Farm Business', '1.png', '<p>Dalam dunia bisnis dikenal istilah monopoli artinya menguasai seluruh jaringan dari hulu ke hilir. Dalam kasus peternakan ayam digambarkan bahwa ada pengusaha yang bisa membuat bibit ayam potong atau penetasan sendiri untuk diternakkan sendiri. Kalau ada kelebihan bibit ayam, kelebihan tersebut dijual ke masyarakat atau peternak-peternak kecil. Selain penetasan ayam, pengusaha juga memproduksi pakan ayam potong untuk kepentingan sendiri. Apabila produksi pakan berlebih, sisa produksi dijual kepada masyarakat atau peternak ayam. Pengusaha besar&nbsp; juga memiliki sumber daya manusia yang ahli di bidang peternakan ayam potong untuk membuat&nbsp; pakan yang berkualitas, memberikan pakan, membuat obat, memberikan obat pada ayam, dan pemasaran ayam ke pasar dan pengusaha lain yang membutuhkan ayam potong</p>\r\n\r\n<p>Untuk mengembangkan usahanya pengusaha besar bisa menjalin kerja sama atau sering disebut dengan istilah kemitraan dengan pengusaha kecil. Pengusaha kecil cukup menyediakan fasilitas kandang dan sumber daya manusia untuk memelihara, sedangkan bibit ayam, pakan, obat, dan pemasaran ditanggung oleh pengusaha besar. Dalam kemitraan ini biasanya diikuti dengan kontrak perjanjian harga jual ayam, baik harga jugal stabil, turun atau naik. Selain harga jual ayam, ada perjanjian bahwa pengusaha menjamin tersedianya bibit, pakan, dan obat-obat yang diperlukan untuk membesarkan ayam potong. Manfaat kemitraan bagi pengusaha besar yaitu tidak harus berinvestasi kandang dan produksi ayam meningkat tajam sedang bagi pengusaha kecil yang bermitra yaitu ada jaminan pasar atau tidak usaha memikirkan penjualan ayam potong atau tidak perlu pusing memikirkan fluktuasi harga</p>\r\n\r\n<p>Dalam peternakan ayam potong ini ada pengusaha mandiri. Pengusaha mandiri ini yang rentan dengan ketersediaan bibit, pakan, obat dan harga jual produksi ayam potong. Harga bibit ayam bisa mahal atau tidak tersedia, demikian juga harga pakan dan obat. Posisi pengusaha mandiri lebih banyak tidak diuntungkan.</p>\r\n\r\n<p>Dalam kasus ini, ada 4 tokoh yang menggambar seorang pengusaha besar yang sukses (petruk), seorang pedagang ayam (Gareng), mitra usaha (Bagong) yang bermitra dengan pengusaha besar, dan pengusaha mandiri (Togog)</p>\r\n\r\n<ul>\r\n	<li><strong>Petruk adalah menggambarkan (mewakili)&nbsp; </strong>seorang .pengusaha besar yang bergerak dalam bidang: pembuatan pakan, penyedia bibit, penyedia obat, mengolah daging ayam menjadi berbagai makanan dan menjadi pemasok ayam potong ke para pedagang ayam potong di pasar.Sebagai pengusaha besar Petruk bisa melakukan segalanya dan mampu menjatuhkan bisnis para pesaingnya</li>\r\n	<li><strong>Gareng adalah</strong> menggambarkan (mewakili) seorang pedagang ayam potong di pasar. Gareng adalah Mitra bisnis Petruk. Ayam potong yang dijual sebagian besar dipasok oleh Petruk dengan harga kontrak Rp 18.000 per kg.</li>\r\n	<li><strong>Bagong adalah menggambarkan (mewakili) </strong>seorang pengusaha kecil pembesaran ayam potong yang bermitra dengan Petruk. Petruk siap menyediakan bibit, pakan ayam, obat, tenaga penyuluh dan membeli semua ayam potong yang sudah besar dengan harga kontrak Rp 17.000 per kg. Pada hal biaya pembesaran ayam per kg Rp 14.000. Di atas kerta ada keuntungan Rp 3.000 per kg</li>\r\n	<li><strong>Togog adalah menggambarkan (mewakili) </strong>seorang pengusaha kecil mandiri yang membesarkan ayam poton. Togog tidak bermitra dengan Petruk tetapi Togog membeli bibit, pakan dan obat dari Petruk. Maksud hati ingin mendapatkan untung yang lebih dari pada bermitra bisnis dengan Petruk.</li>\r\n</ul>\r\n', '<p>Compared to other animal proteins, broiler chickens are the cheapest meat in Indonesia. Poultry business is therefore quite promising in a country with nearly 280 million people. The country&rsquo;s chicken consumption per capita has steadily grown over the past 14 years according to the 2021 Statistics Indonesia (BPS) data. Broiler chickens are easy to raise and ready to harvest within approximately 45 days. However, like any other business endeavors, monopoly in chicken farming industry occurs as big business owners craftily control the entire network from manufacturing chicken feed, medicine, supply of breeds, to marketing the live chickens to suppliers and food companies that regularly purchase fresh chicken meat. Here&rsquo;s the story of Petruk and his unfair business dealings with Gareng, Bagong, and Togog &ndash; all are punokawans or clown servants of the hero in Javanese shadow puppet.</p>\r\n', 1, 3, '2021-10-07'),
(2, 'Kasus 2 :   Kasus Rumah Sakit', 'Case 2 : Hospital Case', '2.png', '<p>Pada awal pandemi Covid-19 banyak beredar isu mengenai manipulasi data pasien yang meninggal karena Covid-19. Munculnya isu ini didasari oleh adanya berita-berita yang menayangkan beberapa anggota keluarga dari pasien yang dengan protokol Covid-19 padahal hasil pemeriksaan untuk mengidentifikasi penyebab meninggalnya pasien tersebut belum keluar. Di sisi lain, muncul berita bahwa ada rumah sakit &ldquo;nakal&rdquo; yang memang sengaja memanipulasi data kematian pasien dengan memperlakukan kematiannya sebagai kematian akibat Covid-19. Banyak informasi di medsos yang beredar viral ada masyarakat yang diminta menandatangani bahwa anggota keluarganya terkena Covid 19 dan diberi sejumlah uang oleh pihak rumah sakit. Hal ini dimungkinkan untuk dilakukan rumah sakit karena&nbsp; berdasarkan peraturan dari Kementerian Kesehatan RI, rumah sakit yang menangani pasien karena kasus Covid-19 akan mendapat penggantian biaya yang cukup besar dari Pemerintah.</p>\r\n\r\n<p>Akibat adanya isu ini maka Pemerintah akan melakukan revisi mengenai definisi pasien yang meninggal karena Covid-19. Pemerintah akan mengumumkan data kematian Covid-19 jika sudah terverifikasi bahwa pasien tersebut meninggal benar-benar karena terinfeksi Covid-19. Selain itu, Pemerintah juga sudah membuat peraturan yang ketat terkait dengan laporan rumah sakit mengenai pasien yang meninggal karena Covid-19.</p>\r\n\r\n<p>Dalam kasus ini, ada dua mahasiswa yang mendiskusikan berita tersebut. Mereka mendiskusikan bahwa potensi kecurangan itu ada tetapi sebenarnya Kementerian kesehatan sudah membuat aturan bahwa Pimpinan rumah sakit wajib menandatangani Surat Pernyataan Tanggung Jawab Mutlak (SPTJM), Pimpinan rumah sakit bertanggung jawab apabila dikemudian hari ditemukan kerugian negara karena ketidaksesuaian jumlah klaim pada pemeriksaan/audit dari Audit Aparat Internal Pemerintah (APIP)/BPK/BPKP/Inspektorat Jenderal.</p>\r\n', '<p>By September 2020, the Covid-19 pandemic in Indonesia was made worse by the circulation of rumors among news broadcasts and social media users. Hospitals and medical workers were accused of seeking to make profit from the outbreak by falsifying the data of patients infected with COVID-19. The hospital would reportedly receive tens or even hundreds of millions of rupiah from the government for treating COVID-19 patients, hence the false Covid-19 diagnoses to claim by uncooperative doctors or hospitals. More malicious news emerged that some hospitals deliberately manipulated the data by declaring the number of mortalities caused by or linked to coronavirus. Also circulating virally, were news about family members of the dead who had been asked to declare that the patient was infected by the virus and the hospital would then give compensation for this false, corrupt, and criminal countersigning.</p>\r\n\r\n<p>This issue was complicated by disagreements surrounding the COVID-19 funeral protocols. There were cases where the patients had been claimed dead of COVID-19 and buried under the COVID-19 protocols before the test results came out. Complaints often came from the victims&rsquo; family who refused Covid-19 protocols for fear of ostracization from their neighbors.</p>\r\n\r\n<p>Given the incident, the government revised the definition of a patient who died of Covid-19 or otherwise by applying stricter regulations and better verifications of the number and causes of mortalities in hospital reports.</p>\r\n\r\n<p>This case was perpetuated by the different interests between the hospital and the victim&#39;s family. One the one hand, death of COVID-19 is a stigma often hard to bear by the family and this psychological burden is more unpleasant than the disease itself. On the other hand, the government would pay for the entire cost from treatment to funeral cost should one die of COVID-19. Suspicion of each other frequently happened here. The patient&rsquo;s family alleged that the hospital had taken advantage of the situation.</p>\r\n\r\n<p>Meanwhile, the Ministry of Health had issued Statement of Absolute Responsibility (known as SPTJM) for the hospital management to sign in to avoid discrepancy in the number of claims and the examination/audit by the Government Internal Apparatus Audit. This is done in order to reduce moral hazard from referral hospitals in dealing with the COVID-19 patients.</p>\r\n\r\n<p>Presidential Chief of Staff Moeldoko following met Central Java Governor Ganjar Pranowo in Semarang to talk over this false claim and blaming game. Moeldoko was skeptical regarding the number of death declared to have been caused by COVOD-19. He was certain that not all deaths were caused by COVID-19.&nbsp; In search of clarification, he called for medical &ldquo;redefinition&rdquo; in order to avoid loopholes that could be exploited to the benefit of certain parties. In support of Moeldoko&rsquo;s claim, Ganjar reported that false COVID-19 diagnoses had been made in Central Java.</p>\r\n\r\n<p>&ldquo;Such a thing has happened in Central Java. There were people diagnosed for COVID-19 and then died before their test results came back,&rdquo; he said. &ldquo;It turned out that their test results came back negative. It was unfortunate, [&hellip;] we need to address this issue.&rdquo;</p>\r\n', 1, 3, '2021-10-02'),
(3, 'Kasus 3 : Kasus Garuda', 'Case 3: Garuda Case', '3.png', '<p>Kasus ini menceritakan tentang perlaku dilematis yaang sering dihadapi para profesional.</p>\r\n\r\n<p>Di satu sisi mereka harus menyelamatkan perusahaannya dari keterpurukan,namun disisi yang lain mereka harus tetap menjaga sikap etis dalam&nbsp; membuat keputusan, terutama keputusan yang juga mempengaruhi kepentingan publik.</p>\r\n\r\n<p>PT. Garuda adalah sebuah perusahaan negara (BUMN) yang sudah go publik di pasar modal Indonesia. Kinerja perusahaan ini mengalami kerugian dalam beberapa tahun terakhir. Manajemen PT Garuda berusaha memperbaiki kinerjanya dengan membuat kontrak kerjasama dengan perusahaan lain dalam pemasangan layanan konektivitas dan hiburan pada pesawat. Hasil kesepakatan ini menghasilkan kontrak kerja sama selama 15 tahun, dengan nilai kontrak sekitar&nbsp; US $ 212 juta (Dua ratus dua belas juta US $).</p>\r\n\r\n<p>Perusahaan melaporkan seluruh pendapatan kontrak ini dalam tahun 2018. Hal ini telah mendonkrak laporan kinerja PT Garuda secara signifikan sehingga mendapatkan respon positif dari pasar modal yang diindikasikan dari melesatnya harga saham perusahaan tersebut.</p>\r\n\r\n<p>Berkaitan dengan ini, PT&nbsp; Garuda diduga telah menggelembungkan pendapatan karena pendapatan dari hasil kontrak 15 tahun dilaporkan sekaligus dalam tahun 2018.</p>\r\n\r\n<p>Sebagai perusahaan publik, tentu saja kasus ini melibatkan beberapa profesional seperti Manajemen, Akuntan publik, Dewan komisaris serta lembaga lainnya.</p>\r\n\r\n<p>Kasus ini, mengajak mahasiswa untuk berpikir&nbsp; kritis dan solutif dalam menyikapi permasalahan ini.</p>\r\n', '<p>Professionals in all fields often face dilemmatic situations. On the one hand, they must save their company from harsh conditions. On the other hand, they must maintain an ethical attitude in making decisions, especially when such decisions may upset public interests.</p>\r\n\r\n<p>The world is a tough place right now. Things become tougher during the pandemics. The COVID-19 pandemic has given severe setbacks on almost all walks of life including the aviation and airlines business. Garuda Indonesia is the flag carrier of Indonesia. PT. Garuda is a state-owned company that has gone public in the Indonesian capital market. The company&#39;s performance has suffered losses in recent years. It is suspected that the company&rsquo;s 2018 financial report violated Financial Accounting Standard.</p>\r\n\r\n<p>Let&rsquo;s follow what the two students of accounting here have to say about the financial report flaws.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The management of PT Garuda has tried to improve its performance by making cooperation contracts with other companies. Among the business deal was the installation of connectivity and entertainment services on Garuda aircrafts. The result of this agreement resulted in a cooperation contract for 15 years, with a contract value of approximately US $ 212 million (Two hundred and twelve million US $).</p>\r\n\r\n<p>The flag carrier company reported all of this contract revenue in 2018. This has significantly boosted PT Garuda&#39;s performance report so that it received a positive response from the capital market as indicated by the skyrocketing increase of the company&#39;s stock price.</p>\r\n\r\n<p>But the report was flawed. PT Garuda was alleged to have inflated revenue by reporting the revenue of the 15-year contract all at once in 2018.</p>\r\n\r\n<p>Indeed, as a public company, this case involves several professionals such as management, public accountants, board of commissioners, and other related institutions.</p>\r\n\r\n<p>This case invites students to think critically and provide solutions in dealing with such problems.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Did the report meet the accountancy standard? Does it abide the existing regulations?</p>\r\n\r\n<p>PT Garuda argues no flaws in its 2018 financial reports.</p>\r\n', 1, 3, '2021-10-02'),
(4, 'asdasd', 'assdasd', '', '<p>sadada</p>\r\n', '<p>dassdada</p>\r\n', 0, 3, '2021-12-07'),
(5, 'faasd', 'asdasda', '', '<p>&nbsp;assa cas</p>\r\n', '<p>asdasdada</p>\r\n', 0, 3, '2021-12-07'),
(6, ' dasdassdad', 'asdasda', '', '<p>asdasdasd</p>\r\n', '<p>asdasda</p>\r\n', 0, 3, '2021-12-07'),
(7, 'adsa', 'dddd', '', '<p>dsadsa</p>\r\n', '<p>dasdada</p>\r\n', 0, 3, '2021-12-07'),
(8, 'adasda', 'asdasd', '', '<p>adasd</p>\r\n', '<p>asdasda</p>\r\n', 0, 3, '2021-12-07'),
(9, 'asdasdd', 'dsadad', '', '<p>sdsds</p>\r\n', '<p>asdasdada</p>\r\n', 0, 3, '2021-12-07'),
(10, 'dadadad', 'dddds', '', '<p>adadsa</p>\r\n', '<p>dasda</p>\r\n', 0, 3, '2021-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `id_case` int(11) NOT NULL,
  `video` varchar(100) NOT NULL,
  `video_en` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_en` varchar(100) NOT NULL,
  `content_ind` varchar(5000) NOT NULL,
  `content_en` varchar(5000) NOT NULL,
  `question_ind` varchar(1000) NOT NULL,
  `question_en` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `id_case`, `video`, `video_en`, `image`, `image_en`, `content_ind`, `content_en`, `question_ind`, `question_en`) VALUES
(1, 1, '8x49niTYU8o', '_N3B5kTbMCQ', '', '', '', '', 'Berdasarkan kasus tersebut di atas, tokoh mana yang paling mendekati karakter Anda? ', 'Based on the case above, which character is closest to your character?'),
(2, 2, 'lScUzVGJA98', 'lScUzVGJA98', '', '', '', '', 'Setujukah Anda dengan tindakan Pimpinan Rumah Sakit tersebut ?', 'Do you agree with the CEO’s decision?'),
(3, 2, 'kwYqRU8hV9c', 'kwYqRU8hV9c', '', '', '', '', 'Apabila Anda sebagai Pimpinan Rumah Sakit, apakah Anda akan membujuk keluarga pasien untuk menandatangani pernyataan bahwa pasien meninggal karena covid?', 'If you were a hospital CEO, would you persuade the patient&#39;s family to sign a statement  that the patient died of Covid-19?'),
(4, 2, 'Dq1lpAzozxc', 'Dq1lpAzozxc', '', '', '', '', 'Setujukah Anda dengan tindakan rumah sakit yang meng-“covid”-kan pasien yang meninggal, dengan tujuan agar keluarga pasien mendapatkan santunan dari pemerintah?', 'Do you agree with the hospital&#39;s actions in falsifying the mortality data of non-Covid patients with the aim to make their family get compensation from the government? '),
(5, 3, '5s8RTOb3ib8', '5s8RTOb3ib8', '', '', '', '', 'Jika anda sebagai manajemen PT Garuda, setujukah anda dengan tindakan tersebut?', 'If you are the management of PT Garuda, do you agree with this action?'),
(6, 3, 'OB1HMasC39o', 'OB1HMasC39o', '', '', '', '', 'Jika anda sebagai KAP PT garuda, setujukah anda dengan tindakan tersebut?', 'If you are the KAP of PT Garuda, do you agree with this action?'),
(7, 3, 'rIOoqltVnd4', 'rIOoqltVnd4', '', '', '', '', 'Jika anda sebagai Dewan Komisaris PT garuda, setujukah anda dengan tindakan tersebut?', 'If you are the Board of Commissioners of PT Garuda, do you agree with this action?'),
(8, 2, 'tFz7u7vo9XM', 'tFz7u7vo9XM', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `video` varchar(100) NOT NULL,
  `video_en` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_en` varchar(100) NOT NULL,
  `content_ind` varchar(5000) NOT NULL,
  `content_en` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `video`, `video_en`, `image`, `image_en`, `content_ind`, `content_en`) VALUES
(3, '', '', '', '', '<p><a href=\"https://kolom.tempo.co/read/1204727/kontrak-mahata-dalam-laporan-keuangan-garuda/full&amp;view=ok\">https://kolom.tempo.co/read/1204727/kontrak-mahata-dalam-laporan-keuangan-garuda/full&amp;view=ok</a></p>\r\n\r\n<p><a href=\"https://katadata.co.id/sortatobing/finansial/5e9a5182d82ea/sri-mulyani-jatuhkan-sanksi-kepada-auditor-laporan-keuangan-garuda\">https://katadata.co.id/sortatobing/finansial/5e9a5182d82ea/sri-mulyani-jatuhkan-sanksi-kepada-auditor-laporan-keuangan-garuda</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>CNBC Indonesia, Wah! Ada yang Aneh dari Laba Garuda pada 2018, </strong>CNBC Indonesia, 24 April 2019 18:14</p>\r\n', '<p><a href=\"https://kolom.tempo.co/read/1204727/kontrak-mahata-dalam-laporan-keuangan-garuda/full&amp;view=ok\">https://kolom.tempo.co/read/1204727/kontrak-mahata-dalam-laporan-keuangan-garuda/full&amp;view=ok</a></p>\r\n\r\n<p><a href=\"https://katadata.co.id/sortatobing/finansial/5e9a5182d82ea/sri-mulyani-jatuhkan-sanksi-kepada-auditor-laporan-keuangan-garuda\">https://katadata.co.id/sortatobing/finansial/5e9a5182d82ea/sri-mulyani-jatuhkan-sanksi-kepada-auditor-laporan-keuangan-garuda</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>CNBC Indonesia, Wah! Ada yang Aneh dari Laba Garuda pada 2018, </strong>CNBC Indonesia, 24 April 2019 18:14</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(128) CHARACTER SET latin1 NOT NULL,
  `nik` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `image` varchar(200) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nik`, `nama`, `email`, `image`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '-', 'Admin', 'admin@gmail.com', '', 0),
(3, 'polina', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1743', 'Agnes Maria Polina', 'a.m.polina@gmail.com', 'f99e488777a1c2b752c585eaaabbd677.jpg', 1),
(4, 'joko', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '123', 'Joko Siswanto', 'joko@gmail.com', '', 1),
(5, 'reni', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1', 'Reni', 'admin@segogaring.com', '', 1),
(7, '456', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '123', 'asd', 'email@domain.com', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id_case` int(11) NOT NULL,
  `AF` int(11) NOT NULL DEFAULT 0,
  `AX` int(11) NOT NULL,
  `AL` int(11) NOT NULL,
  `DZ` int(11) NOT NULL,
  `AS` int(11) NOT NULL,
  `AD` int(11) NOT NULL,
  `AO` int(11) NOT NULL,
  `AI` int(11) NOT NULL,
  `AG` int(11) NOT NULL,
  `AR` int(11) NOT NULL,
  `AM` int(11) NOT NULL,
  `AW` int(11) NOT NULL,
  `AU` int(11) NOT NULL,
  `AT` int(11) NOT NULL,
  `AZ` int(11) NOT NULL,
  `BH` int(11) NOT NULL,
  `BD` int(11) NOT NULL,
  `BB` int(11) NOT NULL,
  `BY` int(11) NOT NULL,
  `BE` int(11) NOT NULL,
  `BZ` int(11) NOT NULL,
  `BJ` int(11) NOT NULL,
  `BM` int(11) NOT NULL,
  `BT` int(11) NOT NULL,
  `BO` int(11) NOT NULL,
  `BA` int(11) NOT NULL,
  `BW` int(11) NOT NULL,
  `BR` int(11) NOT NULL,
  `IO` int(11) NOT NULL,
  `VG` int(11) NOT NULL,
  `BN` int(11) NOT NULL,
  `BG` int(11) NOT NULL,
  `BF` int(11) NOT NULL,
  `MM` int(11) NOT NULL,
  `BI` int(11) NOT NULL,
  `CV` int(11) NOT NULL,
  `KH` int(11) NOT NULL,
  `CM` int(11) NOT NULL,
  `CA` int(11) NOT NULL,
  `BQ` int(11) NOT NULL,
  `KY` int(11) NOT NULL,
  `CF` int(11) NOT NULL,
  `TD` int(11) NOT NULL,
  `CL` int(11) NOT NULL,
  `CN` int(11) NOT NULL,
  `CX` int(11) NOT NULL,
  `CO` int(11) NOT NULL,
  `KM` int(11) NOT NULL,
  `CK` int(11) NOT NULL,
  `CR` int(11) NOT NULL,
  `CI` int(11) NOT NULL,
  `HR` int(11) NOT NULL,
  `CU` int(11) NOT NULL,
  `CW` int(11) NOT NULL,
  `CY` int(11) NOT NULL,
  `CZ` int(11) NOT NULL,
  `CD` int(11) NOT NULL,
  `DK` int(11) NOT NULL,
  `DJ` int(11) NOT NULL,
  `DM` int(11) NOT NULL,
  `DO` int(11) NOT NULL,
  `EC` int(11) NOT NULL,
  `EG` int(11) NOT NULL,
  `SV` int(11) NOT NULL,
  `GQ` int(11) NOT NULL,
  `ER` int(11) NOT NULL,
  `EE` int(11) NOT NULL,
  `SZ` int(11) NOT NULL,
  `ET` int(11) NOT NULL,
  `FK` int(11) NOT NULL,
  `FO` int(11) NOT NULL,
  `FJ` int(11) NOT NULL,
  `FI` int(11) NOT NULL,
  `FR` int(11) NOT NULL,
  `GF` int(11) NOT NULL,
  `PF` int(11) NOT NULL,
  `GA` int(11) NOT NULL,
  `GE` int(11) NOT NULL,
  `DE` int(11) NOT NULL,
  `GH` int(11) NOT NULL,
  `GI` int(11) NOT NULL,
  `GR` int(11) NOT NULL,
  `GL` int(11) NOT NULL,
  `GD` int(11) NOT NULL,
  `GP` int(11) NOT NULL,
  `GU` int(11) NOT NULL,
  `GT` int(11) NOT NULL,
  `GG` int(11) NOT NULL,
  `GN` int(11) NOT NULL,
  `GW` int(11) NOT NULL,
  `GY` int(11) NOT NULL,
  `HT` int(11) NOT NULL,
  `HN` int(11) NOT NULL,
  `HK` int(11) NOT NULL,
  `HU` int(11) NOT NULL,
  `IS` int(11) NOT NULL,
  `IN` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `IR` int(11) NOT NULL,
  `IQ` int(11) NOT NULL,
  `IE` int(11) NOT NULL,
  `IM` int(11) NOT NULL,
  `IL` int(11) NOT NULL,
  `IT` int(11) NOT NULL,
  `JM` int(11) NOT NULL,
  `JP` int(11) NOT NULL,
  `JE` int(11) NOT NULL,
  `JO` int(11) NOT NULL,
  `KZ` int(11) NOT NULL,
  `KE` int(11) NOT NULL,
  `KI` int(11) NOT NULL,
  `XK` int(11) NOT NULL,
  `KW` int(11) NOT NULL,
  `KG` int(11) NOT NULL,
  `LA` int(11) NOT NULL,
  `LV` int(11) NOT NULL,
  `LB` int(11) NOT NULL,
  `LS` int(11) NOT NULL,
  `LR` int(11) NOT NULL,
  `LY` int(11) NOT NULL,
  `LI` int(11) NOT NULL,
  `LT` int(11) NOT NULL,
  `LU` int(11) NOT NULL,
  `MO` int(11) NOT NULL,
  `MG` int(11) NOT NULL,
  `MW` int(11) NOT NULL,
  `MY` int(11) NOT NULL,
  `MV` int(11) NOT NULL,
  `ML` int(11) NOT NULL,
  `MT` int(11) NOT NULL,
  `MH` int(11) NOT NULL,
  `MQ` int(11) NOT NULL,
  `MR` int(11) NOT NULL,
  `MU` int(11) NOT NULL,
  `YT` int(11) NOT NULL,
  `MX` int(11) NOT NULL,
  `FM` int(11) NOT NULL,
  `MD` int(11) NOT NULL,
  `MC` int(11) NOT NULL,
  `MN` int(11) NOT NULL,
  `ME` int(11) NOT NULL,
  `MS` int(11) NOT NULL,
  `MA` int(11) NOT NULL,
  `MZ` int(11) NOT NULL,
  `NA` int(11) NOT NULL,
  `NR` int(11) NOT NULL,
  `NP` int(11) NOT NULL,
  `NL` int(11) NOT NULL,
  `NC` int(11) NOT NULL,
  `NZ` int(11) NOT NULL,
  `NI` int(11) NOT NULL,
  `NE` int(11) NOT NULL,
  `NG` int(11) NOT NULL,
  `NU` int(11) NOT NULL,
  `NF` int(11) NOT NULL,
  `KP` int(11) NOT NULL,
  `MK` int(11) NOT NULL,
  `MP` int(11) NOT NULL,
  `NO` int(11) NOT NULL,
  `OM` int(11) NOT NULL,
  `PK` int(11) NOT NULL,
  `PW` int(11) NOT NULL,
  `PS` int(11) NOT NULL,
  `PA` int(11) NOT NULL,
  `PG` int(11) NOT NULL,
  `PY` int(11) NOT NULL,
  `PE` int(11) NOT NULL,
  `PH` int(11) NOT NULL,
  `PL` int(11) NOT NULL,
  `PT` int(11) NOT NULL,
  `PR` int(11) NOT NULL,
  `QA` int(11) NOT NULL,
  `CG` int(11) NOT NULL,
  `RE` int(11) NOT NULL,
  `RO` int(11) NOT NULL,
  `RU` int(11) NOT NULL,
  `RW` int(11) NOT NULL,
  `BL` int(11) NOT NULL,
  `SH` int(11) NOT NULL,
  `KN` int(11) NOT NULL,
  `LC` int(11) NOT NULL,
  `MF` int(11) NOT NULL,
  `PM` int(11) NOT NULL,
  `VC` int(11) NOT NULL,
  `WS` int(11) NOT NULL,
  `SM` int(11) NOT NULL,
  `ST` int(11) NOT NULL,
  `SA` int(11) NOT NULL,
  `SN` int(11) NOT NULL,
  `RS` int(11) NOT NULL,
  `SC` int(11) NOT NULL,
  `SL` int(11) NOT NULL,
  `SG` int(11) NOT NULL,
  `SX` int(11) NOT NULL,
  `SK` int(11) NOT NULL,
  `SI` int(11) NOT NULL,
  `SB` int(11) NOT NULL,
  `SO` int(11) NOT NULL,
  `ZA` int(11) NOT NULL,
  `KR` int(11) NOT NULL,
  `SS` int(11) NOT NULL,
  `ES` int(11) NOT NULL,
  `LK` int(11) NOT NULL,
  `SD` int(11) NOT NULL,
  `SR` int(11) NOT NULL,
  `SJ` int(11) NOT NULL,
  `SE` int(11) NOT NULL,
  `CH` int(11) NOT NULL,
  `SY` int(11) NOT NULL,
  `TW` int(11) NOT NULL,
  `TJ` int(11) NOT NULL,
  `TZ` int(11) NOT NULL,
  `TH` int(11) NOT NULL,
  `BS` int(11) NOT NULL,
  `GM` int(11) NOT NULL,
  `TL` int(11) NOT NULL,
  `TG` int(11) NOT NULL,
  `TK` int(11) NOT NULL,
  `TO` int(11) NOT NULL,
  `TT` int(11) NOT NULL,
  `TN` int(11) NOT NULL,
  `TR` int(11) NOT NULL,
  `TM` int(11) NOT NULL,
  `TC` int(11) NOT NULL,
  `TV` int(11) NOT NULL,
  `UG` int(11) NOT NULL,
  `UA` int(11) NOT NULL,
  `AE` int(11) NOT NULL,
  `GB` int(11) NOT NULL,
  `US` int(11) NOT NULL,
  `UY` int(11) NOT NULL,
  `UZ` int(11) NOT NULL,
  `VU` int(11) NOT NULL,
  `VA` int(11) NOT NULL,
  `VE` int(11) NOT NULL,
  `VN` int(11) NOT NULL,
  `VI` int(11) NOT NULL,
  `WF` int(11) NOT NULL,
  `EH` int(11) NOT NULL,
  `YE` int(11) NOT NULL,
  `ZM` int(11) NOT NULL,
  `ZW` int(11) NOT NULL,
  `OTHER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id_case`, `AF`, `AX`, `AL`, `DZ`, `AS`, `AD`, `AO`, `AI`, `AG`, `AR`, `AM`, `AW`, `AU`, `AT`, `AZ`, `BH`, `BD`, `BB`, `BY`, `BE`, `BZ`, `BJ`, `BM`, `BT`, `BO`, `BA`, `BW`, `BR`, `IO`, `VG`, `BN`, `BG`, `BF`, `MM`, `BI`, `CV`, `KH`, `CM`, `CA`, `BQ`, `KY`, `CF`, `TD`, `CL`, `CN`, `CX`, `CO`, `KM`, `CK`, `CR`, `CI`, `HR`, `CU`, `CW`, `CY`, `CZ`, `CD`, `DK`, `DJ`, `DM`, `DO`, `EC`, `EG`, `SV`, `GQ`, `ER`, `EE`, `SZ`, `ET`, `FK`, `FO`, `FJ`, `FI`, `FR`, `GF`, `PF`, `GA`, `GE`, `DE`, `GH`, `GI`, `GR`, `GL`, `GD`, `GP`, `GU`, `GT`, `GG`, `GN`, `GW`, `GY`, `HT`, `HN`, `HK`, `HU`, `IS`, `IN`, `ID`, `IR`, `IQ`, `IE`, `IM`, `IL`, `IT`, `JM`, `JP`, `JE`, `JO`, `KZ`, `KE`, `KI`, `XK`, `KW`, `KG`, `LA`, `LV`, `LB`, `LS`, `LR`, `LY`, `LI`, `LT`, `LU`, `MO`, `MG`, `MW`, `MY`, `MV`, `ML`, `MT`, `MH`, `MQ`, `MR`, `MU`, `YT`, `MX`, `FM`, `MD`, `MC`, `MN`, `ME`, `MS`, `MA`, `MZ`, `NA`, `NR`, `NP`, `NL`, `NC`, `NZ`, `NI`, `NE`, `NG`, `NU`, `NF`, `KP`, `MK`, `MP`, `NO`, `OM`, `PK`, `PW`, `PS`, `PA`, `PG`, `PY`, `PE`, `PH`, `PL`, `PT`, `PR`, `QA`, `CG`, `RE`, `RO`, `RU`, `RW`, `BL`, `SH`, `KN`, `LC`, `MF`, `PM`, `VC`, `WS`, `SM`, `ST`, `SA`, `SN`, `RS`, `SC`, `SL`, `SG`, `SX`, `SK`, `SI`, `SB`, `SO`, `ZA`, `KR`, `SS`, `ES`, `LK`, `SD`, `SR`, `SJ`, `SE`, `CH`, `SY`, `TW`, `TJ`, `TZ`, `TH`, `BS`, `GM`, `TL`, `TG`, `TK`, `TO`, `TT`, `TN`, `TR`, `TM`, `TC`, `TV`, `UG`, `UA`, `AE`, `GB`, `US`, `UY`, `UZ`, `VU`, `VA`, `VE`, `VN`, `VI`, `WF`, `EH`, `YE`, `ZM`, `ZW`, `OTHER`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10),
(1, 2100, 0, 0, 0, 0, 0, 0, 200, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 999, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `F_ANS_QUE` (`id_question`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `F_CASE_USER` (`creator`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `F_QUE_CASE` (`id_case`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id_case`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `F_ANS_QUE` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `F_CASE_USER` FOREIGN KEY (`creator`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `F_QUE_CASE` FOREIGN KEY (`id_case`) REFERENCES `cases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `F_REV_CASE` FOREIGN KEY (`id`) REFERENCES `cases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visitors`
--
ALTER TABLE `visitors`
  ADD CONSTRAINT `F_VISI_CASE` FOREIGN KEY (`id_case`) REFERENCES `cases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
