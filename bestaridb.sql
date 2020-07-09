-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2016 at 03:23 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bestaridb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `content` varchar(9000) NOT NULL,
  `imgpath` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `content`, `imgpath`) VALUES
(1, 'E-learning plays an important role in the educational growth of any nation. Besides, E-learning is a changing trend from traditional learning to technological based teaching and learning. The Bestari e-Learning system is for UPSR student which consist of 4 different subject, English, Mathematics, Bahasa Melayu and Science. The system is friendly-use and flexible to uses for student.', 'logobanner.png');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `noteid` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `chapter` varchar(100) NOT NULL,
  `uploadby` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`noteid`, `subject`, `title`, `chapter`, `uploadby`, `file`) VALUES
(2, 'Bahasa Melayu', 'Bahasa Melayu Peribahasa', 'Peribahasa', 'Cikgu Suraya', 'bahasamelayu/files/BM1.pdf'),
(3, 'Bahasa Melayu', 'Bahasa Melayu Penjodoh Bilangan', 'Penjodoh Bilangan', 'Cikgu Suraya', 'bahasamelayu/files/BM2.pdf'),
(4, 'English', 'Introduction to English', 'Chapter 1 ', 'Teacher Katijah', 'english/files/ENG1.pdf'),
(5, 'English', 'English Chapter 2', 'Chapter 2', 'Teacher Katijah', 'english/files/ENG2.pdf'),
(6, 'Science', 'Introduction to Science', 'Chapter 1 ', 'Teacher Ahmad', 'science/files/SN1.pdf'),
(7, 'Science', 'Science Chapter 2 : Force', 'Chapter 2', 'Teacher Ahmad', 'science/files/SN2.pdf'),
(8, 'Mathematics', 'Introduction to Math', 'Chapter 1 ', 'Teacher Maimon', 'mathematics/files/MATH1.pdf'),
(9, 'Mathematics', 'Chapter 2 Math : Number', 'Chapter 2', 'Teacher Maimon', 'mathematics/files/MATH2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quizid` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `chapter` varchar(100) NOT NULL,
  `uploadby` varchar(255) NOT NULL,
  `option1` varchar(500) NOT NULL,
  `option2` varchar(500) NOT NULL,
  `option3` varchar(500) NOT NULL,
  `option4` varchar(500) NOT NULL,
  `answer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quizid`, `question`, `subject`, `chapter`, `uploadby`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(23, 'Nana membantu ibunya ______ adunan biskut gajus dengan acuan kuih berbentuk bunga.', 'Bahasa Melayu', 'Kata Kerja', 'Cikgu Suraya', 'Menekap', 'Mencanai', 'Menerap', 'Mencalit', 'B'),
(24, 'Ayam-ayam hutan itu ______ tanah untuk mencari makanan.', 'Bahasa Melayu', 'Kata Kerja', 'Cikgu Suraya', 'Menggali', 'Menanam', 'Menguis', 'Menimbus', 'C'),
(25, 'Farid membantu ayahnya _______ buah sukun yang sudah tua di dusun.', 'Bahasa Melayu', 'Kata Kerja', 'Cikgu Suraya', 'Mengait', 'Memotong', 'Mencantas', 'Memetik', 'D'),
(26, 'Sotong yang telah dibersihkan akan ______ di atas para-para sehingga kering.', 'Bahasa Melayu', 'Kata Kerja', 'Cikgu Suraya', 'Disimpan', 'Diperam', 'Dihimpun', 'Dijemur', 'D'),
(27, 'Mangsa peperangan itu tidur dengan ______ gebar usang.', 'Bahasa Melayu', 'Kata Kerja', 'Cikgu Suraya', 'Bertilamkan', 'Beratapkan', 'Berselimutkan', 'Berbantalkan', 'B'),
(28, 'Burung serindit itu _______ di atas bumbung rumah datuk', 'Bahasa Melayu', 'Kata Kerja', 'Cikgu Suraya', 'Hinggap', 'Duduk', 'Turun', 'Gugur', 'A'),
(29, 'Naim _______ tali kasutnya dengan kemas sebelum turun bermain bola di padang.', 'Bahasa Melayu', 'Kata Kerja', 'Cikgu Suraya', 'Menarik', 'Mengikat', 'Menyentuh', 'Memegang', 'B'),
(30, 'Lauk-pauk kenduri malam kelmarin telah ______ oleh ibu.', 'Bahasa Melayu', 'Kata Kerja', 'Cikgu Suraya', 'Dipersiap', 'Diperbuat', 'Diperoleh', 'Diperhangat', 'D'),
(31, 'Wahida _______ apabila dimarahi oleh wanita yang tidak dikenali semasa membeli buku.', 'Bahasa Melayu', 'Kata Kerja', 'Cikgu Suraya', 'Tergagap', 'Terlupa', 'Tercengang', 'Tersenyum', 'C'),
(32, 'Apabila hari petang, barulah petani itu ______ ke rumah masing-masing.', 'Bahasa Melayu', 'Kata Kerja', 'Cikgu Suraya', 'Pulang', 'Bangun', 'Runtuh', 'Duduk', 'A'),
(33, 'Siti disayangi oleh ibu dan bapanya kerana dia anak yang (patuh). ', 'Bahasa Melayu', 'Seerti', 'Cikgu Suraya', 'Sopan', 'Baik', 'Rajin', 'Taat', 'D'),
(34, 'Adi berasa (gerun) kerana sampan yang dinaikinya bergoyang-goyang.', 'Bahasa Melayu', 'Seerti', 'Cikgu Suraya', 'Mabuk', 'Bimbang', 'Takut', 'Penat', 'C'),
(35, 'Pengetua  (mendenda)  murid-murid itu kerana sering melanggar peraturan sekolah.', 'Bahasa Melayu', 'Seerti', 'Cikgu Suraya', 'Menyaman', 'Memukul', 'Menghukum', 'Memarahi', 'C'),
(36, 'Kain jarang ini tidak  (padan)  untuk dibuat baju kurung.', 'Bahasa Melayu', 'Seerti', 'Cikgu Suraya', 'Sesuai', 'Cantik', 'Cukup', 'Lengkap', 'A'),
(37, 'Sebuah jambatan yang (teguh) akan dibina merentangi sungai yang lebar  itu.', 'Bahasa Melayu', 'Seerti', 'Cikgu Suraya', 'Moden', 'Panjang', 'Kukuh', 'Indah', 'C'),
(38, 'Sudah saya  (duga)  Abu akan datang awal ke sekolah.', 'Bahasa Melayu', 'Seerti', 'Cikgu Suraya', 'Tahu', 'Jangka', 'Yakin', 'Sedar', 'B'),
(39, '(Sepatu) kulit Osman telah dibelikan oleh kakaknya di luar negeri.', 'Bahasa Melayu', 'Seerti', 'Cikgu Suraya', 'Setokin', 'Seluar', 'Capal', 'Kasut', 'D'),
(40, 'Makanan yang Cik Yati jual di pasar malam itu sungguh (laris).', 'Bahasa Melayu', 'Seerti', 'Cikgu Suraya', 'Habis', 'Laku', 'Lazat', 'Terkenal', 'B'),
(41, 'Datuk telah jatuh (sakit) setelah mendengar berita kehilangan cucu kesayangannya', 'Bahasa Melayu', 'Seerti', 'Cikgu Suraya', 'Derita', 'Pedih', 'Uzur', 'Perit', 'C'),
(42, 'Air (telaga) itu telah tercemar.', 'Bahasa Melayu', 'Seerti', 'Cikgu Suraya', 'Perigi', 'Tasik', 'Sungai', 'Kolam', 'A'),
(43, '__________ sesebuah negara banyak bergantung kepada faktor ekonomi,politik dan sosial', 'Bahasa Melayu', 'Imbuhan', 'Cikgu Suraya', 'Mensejahterakan', 'Sejahtera', 'Kesejahtera', 'Disejahterakan', 'C'),
(44, '__________ jelas terbayang pada wajah Maniam apabila dia teringatkan sikapnya yang biadab terhadap ibunya.', 'Bahasa Melayu', 'Imbuhan', 'Cikgu Suraya', 'Kesal', 'Kekesalan', 'Penyesalan', 'Menyesalan', 'B'),
(45, 'Kecantikan seseorang perempuan juga bergantung kepada __________ budi bahasanya.', 'Bahasa Melayu', 'Imbuhan', 'Cikgu Suraya', 'Terhalus', 'Menghaluskan', 'Kehalusan', 'Menghalusi', 'C'),
(46, 'Kolam renang itu kelihatan __________ apabila dilihat dari tingkat teratas hotel ini.', 'Bahasa Melayu', 'Imbuhan', 'Cikgu Suraya', 'Kebiru-biruan', 'Dibirukan', 'Membiru', 'Membirukan', 'A'),
(47, '__________ Pulau Kapas telah menarik minat ramai pelancong ke palau tersebut.\r\n', 'Bahasa Melayu', 'Imbuhan', 'Cikgu Suraya', 'Terindah', 'Mengindahkan', 'Keindahan', 'Pengindahan', 'C'),
(48, 'Masalah pengangkutan telah dapat diatasi dengan adanya __________ jalan raya ke kampung itu.', 'Bahasa Melayu', 'Imbuhan', 'Cikgu Suraya', 'Kemudahan', 'Memudahkan', 'Permudahan', 'Mudaham', 'A'),
(49, '__________ terbayang di muka pelajar itu sebaik sahaja dia menerima keputusan peperiksaan.', 'Bahasa Melayu', 'Imbuhan', 'Cikgu Suraya', 'Bersedih', 'Penyedih', 'Kesedihan', 'Menyedihkan', 'C'),
(50, 'Pelancong itu terpaksa pergi ke__________negaranya di Malaysia setelah dokumen perjalanannya hilang.', 'Bahasa Melayu', 'Imbuhan', 'Cikgu Suraya', 'Kediaman', 'Kemenyerian', 'Kedudukan', 'Kedutaan', 'A'),
(51, 'Mak Cik Milah tinggal__________ setelah anak-anaknya berhijrah ke bandar.', 'Bahasa Melayu', 'Imbuhan', 'Cikgu Suraya', 'Kesepian', 'Menyepi', 'Menyepikan', 'Sepi', 'B'),
(52, 'Julia menjerit __________ kerana terkejutkan seekor katak yang melompat di hadapannya.', 'Bahasa Melayu', 'Imbuhan', 'Cikgu Suraya', 'Takutkan', 'Penakut', 'Ditakutkan', 'Ketakutan', 'D'),
(53, 'Pak Mail  membawa se ............... pisang pulang dari kebunnya ', 'Bahasa Melayu', 'Penjodoh Bilangan', 'Cikgu Suraya', 'Buah', 'Tandan', 'Ekor', 'Biji', 'B'),
(54, 'Se .............. tembikai itu berharga RM6.00 ', 'Bahasa Melayu', 'Penjodoh Bilangan', 'Cikgu Suraya', 'Buah', 'Biji', 'Ekor', 'Pasang', 'B'),
(55, 'Juhaira ternampak beberapa .....................burung hinggap di atas pokok kelapa.', 'Bahasa Melayu', 'Penjodoh Bilangan', 'Cikgu Suraya', 'Tandan', 'Sikat', 'Potong', 'Ekor', 'D'),
(56, 'Dua ............... bas digunakan untuk  lawatan ke Kuala Terengganu.', 'Bahasa Melayu', 'Penjodoh Bilangan', 'Cikgu Suraya', 'Biji', 'Buah', 'Pasang', 'Ekor', 'B'),
(57, 'Se ................ kasut sukan Adidas berhargaRM200.00 ', 'Bahasa Melayu', 'Penjodoh Bilangan', 'Cikgu Suraya', 'Ekor', 'Pasang', 'Tandan', 'Keping', 'B'),
(58, 'Se .............. pisang itu berharga RM4.00', 'Bahasa Melayu', 'Penjodoh Bilangan', 'Cikgu Suraya', 'Tandan', 'Biji', 'Pokok', 'Sikat', 'D'),
(59, 'Emak menghadiahkan se ................... baju kurung untuk Nadia. ', 'Bahasa Melayu', 'Penjodoh Bilangan', 'Cikgu Suraya', 'Gulung', 'Keping', 'Lembar', 'Pasang', 'D'),
(60, 'Abang  menggali lubang dengan menggunakan se .................. cangkul.', 'Bahasa Melayu', 'Penjodoh Bilangan', 'Cikgu Suraya', 'Batang', 'Pucuk', 'Bilah', 'Urat', 'C'),
(61, 'Tiga ................... bunga ros menghiasi pasu kecil di atas meja itu. ', 'Bahasa Melayu', 'Penjodoh Bilangan', 'Cikgu Suraya', 'Jambak', 'Helai', 'Keping', 'Butir', 'A'),
(62, 'Dua .................. filem digunakan untuk mengambil gambar perkahwinan Haziah.', 'Bahasa Melayu', 'Penjodoh Bilangan', 'Cikgu Suraya', 'Lembar', 'Keping', 'Buah', 'Gulung', 'D'),
(63, '"Ibu, duit _______ hilang," kata Umair kepada ibunya.', 'Bahasa Melayu', 'Kata Ganti Nama', 'Cikgu Suraya', 'Kita', 'Kami', 'Saya', 'Mereka', 'C'),
(64, 'Darus dan Intan bersahabat karib. _______ tinggal sekampung', 'Bahasa Melayu', 'Kata Ganti Nama', 'Cikgu Suraya', 'Dia', 'Kita', 'Kami', 'Mereka', 'D'),
(65, '"Jika _______ ada masalah sila jumpa saya," kata Cikgu Sarah kepada saya.', 'Bahasa Melayu', 'Kata Ganti Nama', 'Cikgu Suraya', 'Mereka', 'Kamu', 'Kami', 'Dia', 'B'),
(66, 'Salmi murid tahun enam. _______ berazam untuk mencapai 5A dalam UPSR.', 'Bahasa Melayu', 'Kata Ganti Nama', 'Cikgu Suraya', 'Dia', 'Kami', 'Awak', 'Saya', 'A'),
(67, '5 Bangunan baru itu telah dirasmikan oleh _______.', 'Bahasa Melayu', 'Kata Ganti Nama', 'Cikgu Suraya', 'Dia', 'Kami', 'Kamu', 'Beliau', 'D'),
(68, '"Sebagai murid, _______ hendaklah belajar bersungguh-sungguh," kata cikgu.', 'Bahasa Melayu', 'Kata Ganti Nama', 'Cikgu Suraya', 'Dia', 'Kita', 'Kamu', 'Mereka', 'B'),
(69, 'Mari kita ikut _______ ke perpustakaan,” kata Siti kepada Nurul.', 'Bahasa Melayu', 'Kata Ganti Nama', 'Cikgu Suraya', 'Mereka', 'Awak', 'Saya', 'Kami', 'A'),
(70, '"Boleh _______ tumpang bertanya?" kata Suri dan Muna kepada pemuda itu.', 'Bahasa Melayu', 'Kata Ganti Nama', 'Cikgu Suraya', 'Kamu', 'Awak', 'Kami', 'Saya', 'D'),
(71, '"Ampun _______ tuanku," sembah Hang Tuah kepada raja.', 'Bahasa Melayu', 'Kata Ganti Nama', 'Cikgu Suraya', 'Beta', 'Patik', 'Hamba', 'Baginda', 'B'),
(72, '"Jika ________ ada masa lapang, jemputlah ke rumah saya," kata Ani kepada kawan-kawannya.', 'Bahasa Melayu', 'Kata Ganti Nama', 'Cikgu Suraya', 'Dia', 'Awak', 'Beliau', 'Kalian', 'D'),
(75, 'Vanessa : Oh, no! I cannot find ___ library card!\r\nDad : You should be more careful with ___ things, Vanessa.\r\n', 'English', 'Pronouns', 'Teacher Katijah', 'I , You', 'My, Our', 'My, Your', 'Their, your', 'C'),
(76, 'Alif and Amin are twins. ____ look alike.', 'English', 'Pronouns', 'Teacher Katijah', 'He', 'She', 'We', 'They', 'D'),
(77, '“The baby smiled at ____ just now,” said Johari.', 'English', 'Pronouns', 'Teacher Katijah', 'I', 'It', 'Me', 'Her', 'C'),
(78, 'Sheena is making a birthday card for her sister by_____.', 'English', 'Pronouns', 'Teacher Katijah', 'Myself', 'Herself', 'Yourself', 'Ourselves', 'B'),
(79, 'This is my ruler. It is ____.', 'English', 'Pronouns', 'Teacher Katijah', 'Its', 'His', 'Hers', 'Mine', 'D'),
(80, 'Murni : ____ are the children doing?\r\nDevi : They are helping to serve food for the fire victims.\r\n', 'English', 'Pronouns', 'Teacher Katijah', 'Why', 'When', 'What', 'Which', 'C'),
(81, '“Could ____ give ____ a glass of water, please,” I asked Gloria.', 'English', 'Pronouns', 'Teacher Katijah', 'She, I ', 'You , I', 'You, me', 'She, Me', 'C'),
(82, '____ blouse is this? It ____ beautiful!', 'English', 'Pronouns', 'Teacher Katijah', 'What, smells', 'Who, sounds', 'Whose, looks', 'Which, tatstes', 'C'),
(83, 'This is Mary’s house and the garden is also ____', 'English', 'Pronouns', 'Teacher Katijah', 'His', 'Hers', 'Ours', 'Yourself', 'B'),
(84, '_____ is she angry?', 'English', 'Adverbs', 'Teacher Katijah', 'Who', 'Why', 'What', 'Which', 'B'),
(85, 'Suhaila smiled ____ when she heard the good news.\r\n', 'English', 'Adverbs', 'Teacher Katijah', 'Shortly ', 'Happily', 'Regrefully', 'Unhappily', 'B'),
(86, '____ is she upset?', 'English', 'Adverbs', 'Teacher Katijah', 'Who', 'Why', 'What', 'Which', 'B'),
(87, 'Siao Wei danced so ____ that she won the competition.', 'English', 'Adverbs', 'Teacher Katijah', 'Happily', 'Clumsily', 'Boringly', 'Gracefefully', 'D'),
(88, 'Father buys the newspaper ____ . he reads the news every morning.', 'English', 'Adverbs', 'Teacher Katijah', 'Monthly', 'Weekly', 'Daily', 'Yearly', 'C'),
(89, 'He completed his test ____ since he had study hard.', 'English', 'Adverbs', 'Teacher Katijah', 'Slowly', 'Easily', 'Proudly', 'Clumsity', 'B'),
(90, 'Maria danced ____ at the correct.', 'English', 'Adverbs', 'Teacher Katijah', 'Clumsily', 'Gracefully', 'Sweetly', 'Heavily', 'B'),
(91, 'Azrul did his work ____ so that he could go to the concert early.', 'English', 'Adverbs', 'Teacher Katijah', 'Slowly', 'Quickly', 'Steadily', 'Carefully', 'B'),
(92, 'The old man walked ___ to the car.', 'English', 'Adverbs', 'Teacher Katijah', 'Speedily', 'Rapidly', 'Slowly', 'Swiftly', 'C'),
(93, 'You must stop your car if the traffic lights change to ____.', 'English', 'Adjectives', 'Teacher Katijah', 'Red', 'Green', 'Yellow', 'Magenta', 'A'),
(94, 'It is ___ and exciting to go on a school trip.', 'English', 'Adverbs', 'Teacher Katijah', 'Fun', 'Scary', 'Boring', 'Difficult', 'A'),
(95, 'The ____ soldier was given a medal by the king.', 'English', 'Adjectives', 'Teacher Katijah', 'Poor', 'Brave', 'Bored ', 'Scared', 'B'),
(96, 'Genting Highlands is a ____ holiday resort.', 'English', 'Adjectives', 'Teacher Katijah', 'Boring', 'Foreign', 'Suitable', 'Popular', 'D'),
(97, 'Aishah was _____ when she heard a loud explosion.', 'English', 'Adjectives', 'Teacher Katijah', 'Afraid', 'Bored', 'Excited', 'Interested', 'A'),
(98, 'My room is ____ than your room.', 'English', 'Adjectives', 'Teacher Katijah', 'Dark', 'Darker', 'Darkest', 'More Darker', 'D'),
(99, 'The movie was so ____ that I watched it several times.', 'English', 'Adjectives', 'Teacher Katijah', 'Dull', 'Boring', 'Interesting', 'Frightening', 'C'),
(100, 'We should help people who become ____ after a fire.', 'English', 'Adjectives', 'Teacher Katijah', 'Homeless', 'Careless', 'Sleepless', 'Tasteless', 'A'),
(101, 'Looking after my little sister is the ____ task I have ever done.', 'English', 'Adjectives', 'Teacher Katijah', 'Difficult', 'Less difficult', 'More difficult', 'Most difficult', 'D'),
(102, 'Zeti ____ her family are having a picnic at the park.', 'English', 'Conjunctions', 'Teacher Katijah', 'And', 'So', 'Or', 'Because', 'A'),
(103, 'Jamilah is hardworking ____ clever.', 'English', 'Conjunctions', 'Teacher Katijah', 'Or', 'But', 'And', 'Because', 'D'),
(104, 'Puan Rahmah wanted to bake a cake, ____ she did not have enough flour', 'English', 'Conjunctions', 'Teacher Katijah', 'Or', 'So', 'But', 'And', 'C'),
(105, 'Encik Mazlan has decided to have a glass of cold drink_____ it is a hot day.', 'English', 'Conjunctions', 'Teacher Katijah', 'Because', 'And', 'But', 'So', 'A'),
(106, 'The firemen took out the hose_____ put out the fire', 'English', 'Conjunctions', 'Teacher Katijah', 'Or', 'But', 'And', 'Because', 'C'),
(107, 'Hui Ling felt unwell,____ she did not go to netball practice', 'English', 'Conjunctions', 'Teacher Katijah', 'So', 'Or', 'And', 'Because', 'A'),
(108, 'Isyaq was absent _____ he was ill.', 'English', 'Conjunctions', 'Teacher Katijah', 'Or', 'So', 'And', 'Because', 'D'),
(109, 'Amir did not pass the test _____ he did not study hard enough', 'English', 'Conjunctions', 'Teacher Katijah', 'So', 'And', 'Or', 'Because', 'D'),
(110, 'Nobody was home ______ mom did not cook dinner.', 'English', 'Conjunctions', 'Teacher Katijah', 'Or', 'So', 'And', 'Because', 'B'),
(111, 'It was very late at night _____ Hana continued reading her book.', 'English', 'Conjunctions', 'Teacher Katijah', 'Or', 'So', 'But', 'And', 'D'),
(112, 'Choose the best answer with the correct punctuation', 'English', 'Punctuation', 'Teacher Katijah', 'Lisa’s family went to Penang during the last school holidays', 'Lisa’s family went to penang during the last school holidays.', 'lisa’s family went to penang during the last school holidays', 'Lisa family went to penang during the last school holidays.', 'A'),
(113, 'Choose the answer with the correct punctuation', 'English', 'Punctuation', 'Teacher Katijah', 'oh no. I lost my wallet.', 'Oh no? I lost my wallet.', 'Oh, no! I lost my wallet!', 'Oh, no? I lost my wallet?', 'C'),
(114, 'Choose the answer with the correct punctuation.', 'English', 'Punctuation', 'Teacher Katijah', 'How long is the rope?', 'How long is the rope.', 'How long is the rope!', 'How long is the Rope?', 'A'),
(115, 'Choose the answer with the correct punctuation.', 'English', 'Punctuation', 'Teacher Katijah', 'My mother grows Brinjals, long beans, chillies, and Tomatoes.', 'My mother grows brinjals, long beans, chillies, and tomatoes!', 'My mother grows brinjals, long beans, chillies, and tomatoes?', 'My mother grows brinjals, long beans, chillies, and tomatoes.', 'D'),
(116, 'Choose the answer with the correct punctuation.', 'English', 'Punctuation', 'Teacher Katijah', 'Oh, no! I lost my watch!', 'Oh. No. I lost my watch.', 'Oh, no? I lost my watch?', 'Oh! No? I lost my watch.', 'A'),
(117, 'Choose the answer with the correct punctuation.', 'English', 'Punctuation', 'Teacher Katijah', 'Could you help me to carry these pots.', 'Could you help me to carry these pots,', 'Could you help me to carry these pots?', 'Could you help me to carry these pots!', 'B'),
(118, 'Choose the answer with the correct punctuation', 'English', 'Punctuation', 'Teacher Katijah', 'Lina Sam and Sue have gone to the library', 'Lina Sam and Sue have gone to the library.', 'Lina, Sam and Sue have gone to the library.', 'Lina, Sam and Sue have gone to the library!', 'C'),
(119, 'Choose the answer with the correct punctuation.', 'English', 'Punctuation', 'Teacher Katijah', 'Jason and his family went to National Museum last weekend,', 'jason and his family went to National Museum last weekend.', 'jason and his family went to national museum last weekend.', 'Jason and his family went to National Museum last weekend.', 'D'),
(120, 'Choose the best answer with the correct punctuation.', 'English', 'Punctuation', 'Teacher Katijah', 'Wow, i like how you decorated your bedroom.', 'Wow, I like how you decorated your bedroom.', 'Wow! I like how you decorated your bedroom.', 'Wow? I like how you decorated your bedroom?', 'C'),
(121, 'Choose the answer with the correct punctuation.', 'English', 'Punctuation', 'Teacher Katijah', 'There’s about RM145 in our Nature Club fund.', 'There’s about RM145 in our Nature Club fund?', 'There’s about rm145 in our Nature Club fund.', 'Theres about RM145 in our Nature Club fund.', 'C'),
(122, 'Choose the word that has the opposite meaning in the bracket.\r\nIt was difficult to (push) the trolley because it was heavy.\r\n', 'English', 'Synonyms/Antonyms', 'Teacher Katijah', 'Use', 'Pull ', 'Move', 'Carry', 'B'),
(123, 'Choose the word that has the opposite meaning in the bracket\r\nAbdul is a (fast) runner, while Karim is a ____ runner.\r\n', 'English', 'Synonyms/Antonyms', 'Teacher Katijah', 'Tall', 'Slow', 'Short', 'Quick', 'B'),
(124, 'Choose the word that has the opposite meaning in the bracket.\r\nMy essay had a (happy) ending but hers had a _____ ending.\r\n', 'English', 'Synonyms/Antonyms', 'Teacher Katijah', 'Sad', 'Funny', 'Scary', 'Dangerous', 'A'),
(125, 'Choose the word that has the same meaning as the underlined word.\r\nThe bungalow in front my house so (big)', 'English', 'Synonyms/Antonyms', 'Teacher Katijah', 'Small', 'Tiny', 'Huge', 'Wide', 'C'),
(126, 'Choose the word that has the opposite meaning in the bracket.\r\nNina was (short) when she was young\r\n', 'English', 'Synonyms/Antonyms', 'Teacher Katijah', 'Tall', 'Thin', 'Long', 'Wide', 'A'),
(127, 'Choose the word that has the opposite meaning in the bracket.\r\nSalmiah (lost) her purse at the library.\r\n', 'English', 'Synonyms/Antonyms', 'Teacher Katijah', 'Gone ', 'Found', 'Missing', 'Misplaced', 'B'),
(128, 'Choose the word similar in meaning in the bracket.\r\nThe sky is (overcast). I think it might rain.\r\n', 'English', 'Synonyms/Antonyms', 'Teacher Katijah', 'Cloudy', 'Bright', 'Sunny ', 'Clear', 'A'),
(129, 'Choose the word similar in meaning in  the bracket.\r\nLisa was (very sure) that she would win the state championship.\r\n', 'English', 'Synonyms/Antonyms', 'Teacher Katijah', 'Worried', 'Uncertain', 'Confident', 'Unconvinced', 'C'),
(130, 'Choose the word similar in meaning in the bracket.\r\nSumithia saw a (thief) climbing her neighbour’s house at night and called the police.\r\n', 'English', 'Synonyms/Antonyms', 'Teacher Katijah', 'Burglar', 'Launder', 'Detective', 'Investigator', 'A'),
(131, 'Choose the word similar in meaning as in the bracket.\r\nHaslina was crying with joy when she (received) the scholarship to continue her studies.\r\n', 'English', 'Synonyms/Antonyms', 'Teacher Katijah', 'Gave up', 'Rejected', 'Accepted', 'Turned down', 'C'),
(132, 'Which of the following reasons is humans need food?', 'Science', 'Living things carry life process', 'Teacher Ahmad', 'To cool down body temperature', 'To protect themselves from danger.', 'To get energy', 'To breathe', 'C'),
(133, 'The following shows the breathing structures of two groups of animals.\r\n\r\nP - Lungs\r\nQ – Gills\r\nWhich of the following represents P and Q correctly?\r\n', 'Science', 'Living things carry life process', 'Teacher Ahmad', 'P-Crodcodile, Q-Bee', 'P-Buffalo, Q-Lizzard', 'P-Whale, Q-Salmon', 'P-Prawn, Q-Eagle', 'C'),
(134, 'Puan Salmiah has potted a plan in her car proch. The plant bends forward. Which of the following actions can help the plant to grow straight up?', 'Science', 'Living things carry life process', 'Teacher Ahmad', 'Water it', 'Fertilise it', 'Move it into the house', 'Place it in the garden', 'D'),
(135, 'The figure shows two group of plants.\r\n\r\nU-Papaya plant, Paddy plant\r\nP-Tapioca plant, Hibiscus plant\r\n\r\nWhich of the following represents the reproduction of the plants?\r\n', 'Science', 'Living things carry life process', 'Teacher Ahmad', 'U- Pores, P- Stem cutting', 'U- Seeds, P- Leaves', 'U- Stem cutting, P- Seeds', 'U- Seeds, P- Stem cutting', 'D'),
(136, 'The following describes an animal.\r\n\r\nI breathe through tracheal structure and air is taken in through tiny holes at the side of my body. I lay eggs in a special case. My young look like me.\r\nWhich of the following is the animal?\r\n', 'Science', 'Living things carry life process', 'Teacher Ahmad', 'Frog', 'Emu', 'Grasshopper', 'Cockroach', 'A'),
(137, 'Which of the following is humans need water?', 'Science', 'Living things have basic needs', 'Teacher Ahmad', 'To grow', 'To cool down body', 'To stay healthy', 'To get energy', 'D'),
(138, 'The following are the basic of plants, except', 'Science', 'Living things have basic needs', 'Teacher Ahmad', 'Sunlight', 'Water', 'Air ', 'Food', 'D'),
(139, 'A pupil puts a grasshopper in a small glass bottle and covers it tightly. Why does the grasshopper died after 2 hours?', 'Science', 'Living things have basic needs', 'Teacher Ahmad', 'It gomatees not get enough food.', 'It cannot breathe.', 'It does not get enouh water.', 'It does not get enough sunlight.', 'B'),
(140, 'Which of the following are the basic needs of a rubber tree?\r\n\r\nI.	Sunlight\r\nII.	Air\r\nIII.	Shelter\r\nIV.	Mate\r\n', 'Science', 'Living things have basic needs', 'Teacher Ahmad', 'I and II', 'I and III', 'II and IV', 'III and IV', 'B'),
(141, 'Which of the following apparatus can be used to view microorganism?', 'Science', 'Microorganism', 'Teacher Ahmad', 'Microscope', 'Telescope', 'Kaleidoscope', 'Projector', 'A'),
(142, 'Mother had heated a dough in an oven. Which of the following ingredients in the dough causes it to rise?', 'Science', 'Microorganism', 'Teacher Ahmad', 'Sugar', 'Flour', 'Yeast', 'Water', 'C'),
(143, 'Which of the following statements about yeast is correct?\r\n\r\nI.	Yeast can make their own food\r\nII.	Yeast makes dough to rise\r\nIII.	Yeast cannot breathe\r\nIV.	Yeast can grow\r\n', 'Science', 'Microorganism', 'Teacher Ahmad', 'I and II', 'I and III', 'II and IV', 'III and IV', 'C'),
(144, 'When microorganism breathe, they', 'Science', 'Microorganism', 'Teacher Ahmad', 'Take in oxygen and release carbon dioxide', 'Take in carbon dioxide and release oxygen', 'Take in air and release water', 'Take in oxygen and release air', 'A'),
(145, 'Microorganisms are called tiny living things because', 'Science', 'Microorganism', 'Teacher Ahmad', 'They are tiny', 'They carry out life processes', 'They do not excrete waste', 'They can move', 'A'),
(146, 'Which of the following is needed by bacteria to grow well?', 'Science', 'Microorganism', 'Teacher Ahmad', 'Ice', 'Food', 'Dry Soil', 'High Temperature', 'D'),
(147, 'A several number of rats are placed inside a cage. Which of the following will help reduce the competition among the rats?', 'Science', 'Interaction between living things', 'Teacher Ahmad', 'Give less food the rats', 'Change the cage to a smaller one', 'Remove a few rats from the cage', 'Add two more female rats into the cage', 'D'),
(148, 'The information bellows shows the characteristics of a fruit\r\n\r\nI.	Dry and explosive\r\nII.	With a hard shell\r\nThe fruits is dispersed by\r\n', 'Science', 'Interaction between living things', 'Teacher Ahmad', 'Wind', 'Animal', 'Water', 'Explosive Mechanism', 'D'),
(149, 'Which of the following is matched correctly?\r\nAnimal			Activity that causes it to be endangered\r\n', 'Science', 'Interaction between living things', 'Teacher Ahmad', 'African elephant	illegal logging', 'Tiger			excessive hunting', 'Orang-utan		illegal hunting', 'Rhinoceros		deforestation', 'C'),
(150, 'What is meant by extinction?', 'Science', 'Interaction between living things', 'Teacher Ahmad', 'Illegal hunting', 'No longer existing on the Earth', 'In danger of not existing on the Earth', 'To protect something from totally disappearing from the Earth', 'D'),
(151, 'Which of the following is an endangered?', 'Science', 'Interaction between living things', 'Teacher Ahmad', 'Bear', 'Flamingo', 'Bat', 'Kangaroo', 'A'),
(152, 'What is meant by conserving an endanger animals?', 'Science', 'Interaction between living things', 'Teacher Ahmad', 'A struggle to obtain the basic needs to survive', 'A condition where animals are becoming extinct', 'Preventing and protecting certain animals from extinction', 'Maintaining the conditions of habitats so that animals can live naturally', 'D'),
(153, 'Which of the following about a female chicken is true?', 'Science', 'Species independence', 'Teacher Ahmad', 'It does not take care of its eggs.', 'It does not take care of its young', 'It lays plenty of eggs at one time', 'It sits on its eggs to keep them warm', 'D'),
(154, 'Which of the following animals take care of its eggs?', 'Science', 'Species independence', 'Teacher Ahmad', 'Snake', 'Whale', 'Eagle', 'Monkey', 'A'),
(155, '-Mosquitoe\r\n-Frog\r\nTurtle\r\nWhich of the following is the common characteristics of these animals?\r\n', 'Science', 'Species independence', 'Teacher Ahmad', 'They lay eggs with hard shell', 'They lay plenty of eggs', 'They lay slimy eggs', 'They take care of their young', 'C'),
(156, 'Endangered animals		Non-endangered animals\r\nNon-endangered animals	endangered animals\r\n\r\nThe extinction of certain species can cause\r\nI- Shortage of foods resource\r\nII- A balance in nature\r\nIII- Better air quality\r\nIV-  The extinction of other species\r\n', 'Science', 'Species independence', 'Teacher Ahmad', 'I and III', 'I and IV', 'II and III', 'III and IV', 'B'),
(157, 'If the number if rats in paddy fields decreases,\r\nI- The number of snakes in the paddy field will increases\r\nII- The number of eagles in the paddy fields will decreases\r\nIII- The production of rice will increase\r\nIV- The paddy plants will all die\r\n', 'Science', 'Species independence', 'Teacher Ahmad', 'I and II', 'I and IV', 'II and III', 'III and IV', 'C'),
(158, 'Two million eighty thousand and thirty in numerals ', 'Mathematics', 'Number and Operation', 'Teacher Maimon', '2 008 030	', '2 080 003	', '2 080 030', '2 800 030', 'C'),
(159, '14 720 + 3 214 + 983  =', 'Mathematics', 'Number and Operation', 'Teacher Maimon', '46 860	             ', '18 917		', '17 917	', '15 703	', 'B'),
(160, '5 048 392 ÷ 4 =', 'Mathematics', 'Number and Operation', 'Teacher Maimon', '1 462 389', '1 262 198', '1 362 098', '1 262 098', 'D'),
(161, '6 048 370 – 22 800 – 317 650 =', 'Mathematics', 'Number and Operation', 'Teacher Maimon', '591 870', '5 707 920', '3 450 720', '5 502 720', 'B'),
(162, 'Estimate the multiply of  29 × 31 ', 'Mathematics', 'Number and Operation', 'Teacher Maimon', '900	', '1 000	', '1 010	', '1 020	', 'A'),
(163, '600 mm  ÷  10  =           ', 'Mathematics', 'Length and Mass', 'Teacher Maimon', '60 cm	', '6 cm		', '0.6 cm                                 ', '0. 06 cm', 'A'),
(164, 'What must be subtracted from 10.4kg to get 6.85kg?', 'Mathematics', 'Length and Mass', 'Teacher Maimon', '3kg 55g	', '3kg 550g	', '3kg 400g', '3kg 350g', 'A'),
(165, 'Hilmi drinks 2?345 l of water every day. Find the volume, in ml, of water he drinks in a week.', 'Mathematics', 'Length and Mass', 'Teacher Maimon', '16415 ', '1641. 5                                   ', '164.15', '16. 415', 'D'),
(166, 'A basin contains 7 l 300 ml of water. A pail contains 70 ml more water than the basin. \r\nFind the total volume, in ml, of water in two containers.\r\n', 'Mathematics', 'Length and Mass', 'Teacher Maimon', '15 300ml	', '14 670ml	', '8000ml', '7370ml', 'B'),
(167, 'RM54 627.95  +  RM20 695.30  =', 'Mathematics', 'Money', 'Teacher Maimon', 'RM75 303.55', 'RM75 323.25	', 'RM65 323.25', 'RM55 332.35', 'B'),
(168, 'Puan Siti gives RM112 to her two children', 'Mathematics', 'Money', 'Teacher Maimon', 'RM40 ', 'RM48 ', 'RM56', 'RM64', 'C'),
(169, 'Julie saves RM10 830 in a bank. Julie’s savings are 5 times as much as Alice’s savings.\r\nFind Alice’s savings. \r\n', 'Mathematics', 'Money', 'Teacher Maimon', 'RM2 106', 'RM54 015', 'RM2 166', 'RM54 150', 'B'),
(170, '( RM 112 ÷  7 ) -  ( RM 78.80  ÷  8 )  =', 'Mathematics', 'Money', 'Teacher Maimon', 'RM 6.15', 'RM 6.85', 'RM 7.15', 'RM 7.85', 'A'),
(171, 'RM 149 + RM 86 ÷  2  =', 'Mathematics', 'Money', 'Teacher Maimon', 'RM 117.50', 'RM 127.50', 'RM 182.00', 'RM 192.00', 'D'),
(172, '3 hours 45 minutes + 2 hours 25 minutes ', 'Mathematics', 'Time and Period', 'Teacher Maimon', '6 hours 10 minutes	', '6 hours 20 minutes', '5 hours 10 minutes', '5 hours 20 minutes', 'A'),
(173, 'The duration from March 2006 to January 2008 is', 'Mathematics', 'Time and Period', 'Teacher Maimon', '21 months', '22 months', '23 months', '24 months', 'A'),
(174, 'Calculate the duration in months from  July  2010 to March 2011.', 'Mathematics', 'Time and Period', 'Teacher Maimon', '6 months', '8 months', '9 months', '10 months', 'C'),
(175, 'How many months are there from April till September?', 'Mathematics', 'Time and Period', 'Teacher Maimon', '6 months	                                  ', '7 months', '8 months', '9 months', 'A'),
(176, 'The duration from July 2010 to January 2012 is', 'Mathematics', 'Time and Period', 'Teacher Maimon', '22 months', '21 months	', '20 months', '19 months', 'D'),
(177, 'Calculate the duration in years and months from October  2006 to April 2009.', 'Mathematics', 'Time and Period', 'Teacher Maimon', '2 year 6 months', '2 years 7 months', '3 years 6 months', '3 years 7 months', 'A'),
(178, 'The duration from June 2008 to March 2011 is', 'Mathematics', 'Time and Period', 'Teacher Maimon', '29 months	', '30 months	', '33 months', '34 months', 'C'),
(179, '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `quizscore`
--

CREATE TABLE `quizscore` (
  `scoreid` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `useric` varchar(255) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `chapter` varchar(100) NOT NULL,
  `totalquestion` int(50) NOT NULL,
  `rightanswer` int(100) NOT NULL,
  `wronganswer` int(100) NOT NULL,
  `score` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizscore`
--

INSERT INTO `quizscore` (`scoreid`, `user`, `useric`, `subject`, `chapter`, `totalquestion`, `rightanswer`, `wronganswer`, `score`, `time`) VALUES
(1, 'Kamal', '961010016060', 'Science', 'Living things carry life process', 5, 2, 3, '40', '2016-11-04 20:40:18'),
(2, 'Kamal', '961010016060', 'Mathematics', 'Number and Operation', 5, 2, 3, '40', '2016-11-04 20:40:42'),
(3, 'Kamal', '961010016060', 'English', 'Pronouns', 9, 2, 7, '22', '2016-11-04 20:41:05'),
(4, 'Kamal', '961010016060', 'Bahasa Melayu', 'Kata Kerja', 10, 1, 9, '10', '2016-11-04 20:41:24'),
(5, 'Neelofa', '990519015318', 'Bahasa Melayu', 'Kata Kerja', 10, 2, 8, '20', '2016-11-05 08:45:41'),
(6, 'Neelofa', '990519015318', 'Science', 'Living things carry life process', 5, 1, 4, '20', '2016-11-05 08:46:02'),
(7, 'Neelofa', '990519015318', 'Mathematics', 'Number and Operation', 5, 1, 4, '20', '2016-11-05 08:46:22'),
(8, 'Neelofa', '990519015318', 'English', 'Pronouns', 9, 2, 7, '22', '2016-11-05 08:46:37');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subid` int(11) NOT NULL,
  `subname` varchar(255) NOT NULL,
  `subcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subid`, `subname`, `subcode`) VALUES
(1, 'Mathematics', 'MATH01'),
(2, 'Science', 'SCN01'),
(3, 'English', 'ENG01'),
(4, 'Bahasa Melayu', 'BM01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `IC` varchar(50) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `PhoneNo` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`IC`, `Name`, `Address`, `PhoneNo`, `Email`, `Username`, `Password`, `Level`) VALUES
('760519015832', 'Teacher Maimon', 'Kuala Lumpur', 173334444, 'maimon@gmail.com', 'teacher4', 'teacher4', 'teacher'),
('801111012233', 'Teacher Ahmad', 'Batu Pahat Johor', 123334444, 'ahmad@gmail.com', 'teacher3', 'teacher3', 'teacher'),
('806654212541', 'Cikgu Suraya', 'Batu Pahat', 124541141, 'cikgusuraya@gmail.com', 'teacher', 'teacher123', 'teacher'),
('860519015832', 'Teacher Katijah', 'No 17 Jalan Ciku 6 Taman Kota Masai 81700\r\nPasir Gudang', 1977220181, 'katijah@gmail.com', 'teacher2', 'teacher1234', 'teacher'),
('871940148391', 'Amy Mastura', 'Haha. Kula Lumpur, 8300 ', 167564836, 'amymastura@gmail.com', 'student9', 'student9', 'student'),
('89521001564', 'Juliana Evans', 'No 4 Jalan Mati , Rumah tak jumpa', 197897359, 'juliana@gmail.com', 'student8', 'student8', 'student'),
('9146167141', 'Aaron aziz', 'Jalan Singapore, Ying sing 7 , Singapore', 127789132, 'aaronaziz@gmail.com', 'student7', 'student7', 'student'),
('920501064544', 'Nabil', 'No 1 , Jalan 2 , Taman 3', 198872641, 'nabil@gmail.com', 'student5', 'student5', 'student'),
('950501017536', 'Norman Hakim', 'No 1, Batu belah batu bertangkup 9 ,\r\nSepang.', 123482191, 'norman@gmail.com', 'student4', 'student4', 'student'),
('960215013185', 'Mira Filzah', 'No 9 Jalan Jalan Cari Makan', 139761385, 'mirafilzah@gmail.com', 'student3', 'student3', 'student'),
('961000004444', 'Head Admin', 'Batu Pahat', 123344444, 'headadmin@gmail.com', 'admin', 'admin123', 'admin'),
('961010016060', 'Kamal', 'Batu Pahat', 121112222, 'kamalstudent@gmail.com', 'student', 'student123', 'student'),
('970174054765', 'Erick', 'Sepang , Selangor , Darul Ehsan', 1977772164, 'erick@gmail.com', 'student1', 'student1', 'student'),
('976614013753', 'SpiderMan', 'Tingkat atas bangunan tabung Haji', 1293219543, 'spiderman@gmail.com', 'student6', 'student6', 'student'),
('990519015318', 'Neelofa', 'Taman Cahaya Masai, Pasir Gudang  Johor', 123339756, 'neelofa99@gmail.com', 'student2', 'student2', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`noteid`),
  ADD KEY `subject` (`subject`),
  ADD KEY `subject_2` (`subject`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quizid`);

--
-- Indexes for table `quizscore`
--
ALTER TABLE `quizscore`
  ADD PRIMARY KEY (`scoreid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `noteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quizid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;
--
-- AUTO_INCREMENT for table `quizscore`
--
ALTER TABLE `quizscore`
  MODIFY `scoreid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
