/*
 Navicat Premium Data Transfer

 Source Server         : XAMPP
 Source Server Type    : MySQL
 Source Server Version : 100427 (10.4.27-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : db_lvrose

 Target Server Type    : MySQL
 Target Server Version : 100427 (10.4.27-MariaDB)
 File Encoding         : 65001

 Date: 19/06/2023 21:52:12
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_contact_us
-- ----------------------------
DROP TABLE IF EXISTS `t_contact_us`;
CREATE TABLE `t_contact_us`  (
  `id_customer` int NOT NULL AUTO_INCREMENT,
  `nama_pengirim` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `isi_pesan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `subjek_pesan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_customer`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of t_contact_us
-- ----------------------------
INSERT INTO `t_contact_us` VALUES (1, 'Nabilla', 'coba dulu aja ygy', 'test');
INSERT INTO `t_contact_us` VALUES (2, 'Zhang Hao', 'Menu Restoran', 'Menunya ditambah');
INSERT INTO `t_contact_us` VALUES (3, 'Revana', 'U & I', 'Kenapa upin ipin ga tumbuh besar?');
INSERT INTO `t_contact_us` VALUES (9, 'Zhang Hao', 'nabillasa sas', 'bn');

-- ----------------------------
-- Table structure for t_daftar
-- ----------------------------
DROP TABLE IF EXISTS `t_daftar`;
CREATE TABLE `t_daftar`  (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_telp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_daftar
-- ----------------------------
INSERT INTO `t_daftar` VALUES (1, 'bibil', 'haoo', 'nabilla', 'nassyfa@gmail.com', '0886878');
INSERT INTO `t_daftar` VALUES (2, 'rere', '12345', 'Zhang Hao', 'telkoom@gmail.com', '9876543');
INSERT INTO `t_daftar` VALUES (14, 'revana', 'salma', 'Revana', 'rere@gmail.com', '097765');
INSERT INTO `t_daftar` VALUES (15, 'John', 'John90', 'Jonathan', 'John90@gmail.com', '083169036701');
INSERT INTO `t_daftar` VALUES (16, 'rere', 'nab123', 'Zhang Hao', 'Jo0@gmail.com', '083169036701');

-- ----------------------------
-- Table structure for t_jenis_menu
-- ----------------------------
DROP TABLE IF EXISTS `t_jenis_menu`;
CREATE TABLE `t_jenis_menu`  (
  `id_jenis` int NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_jenis`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of t_jenis_menu
-- ----------------------------
INSERT INTO `t_jenis_menu` VALUES (1, 'Makanan');
INSERT INTO `t_jenis_menu` VALUES (2, 'Minuman');
INSERT INTO `t_jenis_menu` VALUES (3, 'Desert');

-- ----------------------------
-- Table structure for t_menu
-- ----------------------------
DROP TABLE IF EXISTS `t_menu`;
CREATE TABLE `t_menu`  (
  `id_menu` int NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `harga_menu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenis_menu` int NULL DEFAULT NULL,
  `keterangan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_menu`) USING BTREE,
  INDEX `id_jenis`(`jenis_menu` ASC) USING BTREE,
  CONSTRAINT `id_jenis` FOREIGN KEY (`jenis_menu`) REFERENCES `t_jenis_menu` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 32 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of t_menu
-- ----------------------------
INSERT INTO `t_menu` VALUES (1, 'Bibimbap 비빔밥', '30000', 1, 'Nasi, Syuran, Gochujang, telur');
INSERT INTO `t_menu` VALUES (8, 'Patbingsu 팥빙수', '18000', 2, 'Susu, Buah, Es');
INSERT INTO `t_menu` VALUES (11, 'Bulgogi 불고기', '30000', 1, 'Daging Sapi');
INSERT INTO `t_menu` VALUES (12, 'Hotteok 호떡', '10000', 3, 'Kacang, madu');
INSERT INTO `t_menu` VALUES (13, 'Soju 소주', '35000', 2, '!!!!Alkohol 16-20%!!!!');
INSERT INTO `t_menu` VALUES (14, 'Banana Milk 바나나 우유', '18000', 2, 'Susu, Pisang');
INSERT INTO `t_menu` VALUES (15, 'Makgeoli 막걸리', '20000', 2, '!!! Alkohol 6-8% !!!!');
INSERT INTO `t_menu` VALUES (16, 'Green Tea Latte 녹차 라떼', '25000', 2, 'Teh Hijau, Susu');
INSERT INTO `t_menu` VALUES (17, 'Yuja Ade 유자 에이드', '18000', 2, 'Jeru, Gula');
INSERT INTO `t_menu` VALUES (18, 'Dalgona Cofee 달고나 커피', '30000', 2, 'Permen dalgona dan kopi');
INSERT INTO `t_menu` VALUES (19, 'Youghurt Smoothie 요거트 스무디', '30000', 2, 'Youghurt');
INSERT INTO `t_menu` VALUES (20, 'Kimchi 김치', '20000', 1, 'Aneka Sayuran Fermentasi');
INSERT INTO `t_menu` VALUES (21, 'Kimbap 김밥', '20000', 1, 'Nasi Gulung, daging, telur, sayuran');
INSERT INTO `t_menu` VALUES (22, 'Tteokbokki 떡볶이', '24000', 3, 'Kue beras, odeng, gochujang');
INSERT INTO `t_menu` VALUES (23, 'Samkyeopsal 삼겹살', '50000', 1, 'Daging Sapi');
INSERT INTO `t_menu` VALUES (24, 'Japchae 잡채', '20000', 1, 'Mie Kaca, Sayuran');
INSERT INTO `t_menu` VALUES (25, 'Jjajangmyeon  짜장면', '30000', 1, 'MIe, Kedelai hitam');
INSERT INTO `t_menu` VALUES (26, 'Samgyetang 삼계탕', '45000', 1, 'Ayam, beras ketan, gingseng');
INSERT INTO `t_menu` VALUES (27, 'Bungeoppang 붕어빵', '30000', 3, 'Kue Ikan dengan isian pasta kacang');
INSERT INTO `t_menu` VALUES (28, 'Choco Pie 초코파이', '20000', 3, 'Pie Coklat');
INSERT INTO `t_menu` VALUES (29, 'Dakbal 닭발', '20000', 3, 'Ceker, Gochujang');
INSERT INTO `t_menu` VALUES (30, 'Dakganjeong 닭강정', '30000', 3, 'Ayam saus asam manis');
INSERT INTO `t_menu` VALUES (31, 'Odeng 오뎅', '20000', 3, 'Ikan kuah kaldu');

-- ----------------------------
-- Table structure for t_pesan
-- ----------------------------
DROP TABLE IF EXISTS `t_pesan`;
CREATE TABLE `t_pesan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_rekap` int NOT NULL,
  `id_menu` int NOT NULL,
  `nama_menu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah` int NOT NULL,
  `harga` decimal(10, 2) NOT NULL,
  `pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pengiriman` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_rkp`(`id_rekap` ASC) USING BTREE,
  INDEX `id_mn`(`id_menu` ASC) USING BTREE,
  CONSTRAINT `id_mn` FOREIGN KEY (`id_menu`) REFERENCES `t_menu` (`id_menu`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `id_rkp` FOREIGN KEY (`id_rekap`) REFERENCES `t_rekap` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_pesan
-- ----------------------------
INSERT INTO `t_pesan` VALUES (6, 6, 1, 'Bibimbap 비빔밥', 1, 30000.00, 'BNI', 'GOJEK', 'Pesanan Telah Selesai');
INSERT INTO `t_pesan` VALUES (7, 6, 8, 'Patbingsu', 1, 18000.00, 'BNI', 'GOJEK', 'Pesanan Telah Selesai');
INSERT INTO `t_pesan` VALUES (8, 7, 1, 'Bibimbap 비빔밥', 1, 30000.00, 'BRI', 'GOJEK', 'Pesanan Sedang di Jalan');
INSERT INTO `t_pesan` VALUES (9, 7, 11, 'Bulgogi 불고기', 1, 30000.00, 'BRI', 'GOJEK', 'Pesanan Sedang di Jalan');
INSERT INTO `t_pesan` VALUES (10, 7, 14, 'Banana Milk 바나나 우유', 1, 18000.00, 'BRI', 'GOJEK', 'Pesanan Sedang di Jalan');
INSERT INTO `t_pesan` VALUES (11, 7, 28, 'Choco Pie 초코파이', 1, 20000.00, 'BRI', 'GOJEK', 'Pesanan Sedang di Jalan');
INSERT INTO `t_pesan` VALUES (12, 8, 21, 'Kimbap 김밥', 1, 20000.00, 'MANDIRI', 'GRAB', 'Pesanan Sedang di Siapkan');
INSERT INTO `t_pesan` VALUES (13, 8, 18, 'Dalgona Cofee 달고나 커피', 1, 30000.00, 'MANDIRI', 'GRAB', 'Pesanan Telah Selesai');
INSERT INTO `t_pesan` VALUES (14, 8, 22, 'Tteokbokki 떡볶이', 1, 24000.00, 'MANDIRI', 'GRAB', 'Pesanan Telah Selesai');
INSERT INTO `t_pesan` VALUES (15, 9, 11, 'Bulgogi 불고기', 1, 30000.00, 'BCA', 'JNE', 'Pesanan Telah Selesai');
INSERT INTO `t_pesan` VALUES (16, 10, 8, 'Patbingsu 팥빙수', 1, 18000.00, 'BCA', 'JNE', 'Pesanan Telah Selesai');

-- ----------------------------
-- Table structure for t_rekap
-- ----------------------------
DROP TABLE IF EXISTS `t_rekap`;
CREATE TABLE `t_rekap`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_pesan` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_rekap
-- ----------------------------
INSERT INTO `t_rekap` VALUES (6, 'Revana', 'Jl. Setiabudi No. 200 Bandung jabar', '2023-06-19 11:03:00');
INSERT INTO `t_rekap` VALUES (7, 'Jonathan', 'Jln.Bahagia No.12 ', '2023-06-19 18:55:49');
INSERT INTO `t_rekap` VALUES (8, 'Zhang Hao', 'Jln.Bahagia No.12 ', '2023-06-19 21:08:26');
INSERT INTO `t_rekap` VALUES (9, 'Revana', 'Jl. Setiabudi No. 200 Bandung jabar', '2023-06-19 21:14:35');
INSERT INTO `t_rekap` VALUES (10, 'Rere', 'Setia Budi', '2023-06-19 21:35:42');

-- ----------------------------
-- Table structure for t_reservasi
-- ----------------------------
DROP TABLE IF EXISTS `t_reservasi`;
CREATE TABLE `t_reservasi`  (
  `id_pelanggan` int NOT NULL AUTO_INCREMENT,
  `nama_pelanggan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_telp_pelanggan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_meja` int NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_reservasi` date NULL DEFAULT current_timestamp,
  `jam_reservasi` time NULL DEFAULT current_timestamp,
  `jumlah_orang` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of t_reservasi
-- ----------------------------
INSERT INTO `t_reservasi` VALUES (1, 'Zhang Hao', '0865326191', 2, 'zhanggghaozb1@gmailcom', '2023-06-25', '07:00:53', 3);
INSERT INTO `t_reservasi` VALUES (8, 'nabilla', '098765432', 9, 'ab@gmail.com', '2023-06-19', '11:00:00', 2);

SET FOREIGN_KEY_CHECKS = 1;
