# Host: localhost  (Version: 5.6.21)
# Date: 2016-09-19 09:36:39
# Generator: MySQL-Front 5.3  (Build 4.271)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "detail_siswa"
#

DROP TABLE IF EXISTS `detail_siswa`;
CREATE TABLE `detail_siswa` (
  `nis` varchar(15) DEFAULT NULL,
  `idkelas` int(3) DEFAULT NULL,
  `idtahun` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "detail_siswa"
#

INSERT INTO `detail_siswa` VALUES ('111111',2,3),('222222',2,3),('333333',2,3),('444444',4,3),('555555',4,3),('333333',3,3),('999888',3,4),('222222',3,4),('111111',2,2);

#
# Structure for table "tb_jadwal"
#

DROP TABLE IF EXISTS `tb_jadwal`;
CREATE TABLE `tb_jadwal` (
  `idjadwal` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(15) DEFAULT NULL,
  `idkelas` int(11) DEFAULT NULL,
  `idtahun` int(11) DEFAULT NULL,
  `hari` varchar(8) DEFAULT NULL,
  `waktu` varchar(11) DEFAULT NULL,
  `semester` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`idjadwal`)
) ENGINE=InnoDB AUTO_INCREMENT=214 DEFAULT CHARSET=latin1;

#
# Data for table "tb_jadwal"
#

INSERT INTO `tb_jadwal` VALUES (106,'nik',2,5,'1','2','Ganjil'),(107,'guru',2,5,'1','3','Ganjil'),(108,'guru',2,5,'1','4','Ganjil'),(109,'12345',2,5,'1','5','Ganjil'),(110,'12345',2,5,'1','6','Ganjil'),(111,'12345',2,5,'1','7','Ganjil'),(112,'guru',2,5,'1','8','Ganjil'),(113,'admin',2,5,'1','9','Ganjil'),(114,'12345',2,5,'2','2','Ganjil'),(115,'12345',2,5,'2','3','Ganjil'),(116,'admin',2,5,'2','4','Ganjil'),(117,'admin',2,5,'2','5','Ganjil'),(118,'12345',2,5,'2','6','Ganjil'),(119,'12345',2,5,'2','7','Ganjil'),(120,'12345',2,5,'2','8','Ganjil'),(121,'nik',2,5,'2','9','Ganjil'),(122,'guru',2,5,'3','2','Ganjil'),(123,'12345',2,5,'3','3','Ganjil'),(124,'12345',2,5,'3','4','Ganjil'),(125,'12345',2,5,'3','5','Ganjil'),(126,'nik',2,5,'3','6','Ganjil'),(127,'guru',2,5,'3','7','Ganjil'),(128,'12345',2,5,'3','8','Ganjil'),(129,'guru',2,5,'3','9','Ganjil'),(130,'admin',2,5,'4','2','Ganjil'),(131,'guru',2,5,'4','3','Ganjil'),(132,'12345',2,5,'4','4','Ganjil'),(133,'12345',2,5,'4','5','Ganjil'),(134,'admin',2,5,'4','6','Ganjil'),(135,'12345',2,5,'4','7','Ganjil'),(136,'admin',2,5,'4','8','Ganjil'),(137,'12345',2,5,'4','9','Ganjil'),(138,'12345',2,5,'5','2','Ganjil'),(139,'admin',2,5,'5','3','Ganjil'),(140,'admin',2,5,'5','4','Ganjil'),(141,'admin',2,5,'5','5','Ganjil'),(142,'admin',2,5,'5','6','Ganjil'),(143,'guru',2,5,'5','7','Ganjil'),(144,'12345',2,5,'5','8','Ganjil'),(145,'12345',2,5,'5','9','Ganjil'),(146,'12345',2,5,'6','2','Ganjil'),(147,'admin',2,5,'6','3','Ganjil'),(148,'guru',2,5,'6','4','Ganjil'),(149,'12345',2,5,'6','5','Ganjil'),(150,'admin',2,5,'6','6','Ganjil'),(151,'12345',2,5,'6','7','Ganjil'),(152,'admin',2,5,'6','8','Ganjil'),(153,'guru',2,5,'6','9','Ganjil'),(154,'12345',3,5,'1','2','Ganjil'),(155,'20160913',3,5,'1','3','Ganjil'),(156,'12345',3,5,'1','4','Ganjil'),(157,'admin',3,5,'1','5','Ganjil'),(158,'guru',3,5,'1','6','Ganjil'),(159,'20160913',3,5,'1','7','Ganjil'),(160,'12345',3,5,'1','8','Ganjil'),(161,'admin',3,5,'1','9','Ganjil'),(162,'12345',3,5,'1','10','Ganjil'),(163,'guru',3,5,'1','11','Ganjil'),(164,'guru',3,5,'2','2','Ganjil'),(165,'12345',3,5,'2','3','Ganjil'),(166,'20160913',3,5,'2','4','Ganjil'),(167,'admin',3,5,'2','5','Ganjil'),(168,'guru',3,5,'2','6','Ganjil'),(169,'nik',3,5,'2','7','Ganjil'),(170,'20160913',3,5,'2','8','Ganjil'),(171,'12345',3,5,'2','9','Ganjil'),(172,'admin',3,5,'2','10','Ganjil'),(173,'guru',3,5,'2','11','Ganjil'),(174,'nik',3,5,'3','2','Ganjil'),(175,'20160913',3,5,'3','3','Ganjil'),(176,'12345',3,5,'3','4','Ganjil'),(177,'admin',3,5,'3','5','Ganjil'),(178,'guru',3,5,'3','6','Ganjil'),(179,'20160913',3,5,'3','7','Ganjil'),(180,'20160913',3,5,'3','8','Ganjil'),(181,'12345',3,5,'3','9','Ganjil'),(182,'admin',3,5,'3','10','Ganjil'),(183,'guru',3,5,'3','11','Ganjil'),(184,'12345',3,5,'4','2','Ganjil'),(185,'admin',3,5,'4','3','Ganjil'),(186,'admin',3,5,'4','4','Ganjil'),(187,'12345',3,5,'4','5','Ganjil'),(188,'20160913',3,5,'4','6','Ganjil'),(189,'admin',3,5,'4','7','Ganjil'),(190,'guru',3,5,'4','8','Ganjil'),(191,'20160913',3,5,'4','9','Ganjil'),(192,'12345',3,5,'4','10','Ganjil'),(193,'12345',3,5,'4','11','Ganjil'),(194,'admin',3,5,'5','2','Ganjil'),(195,'guru',3,5,'5','3','Ganjil'),(196,'12345',3,5,'5','4','Ganjil'),(197,'guru',3,5,'5','5','Ganjil'),(198,'nik',3,5,'5','6','Ganjil'),(199,'guru',3,5,'5','7','Ganjil'),(200,'12345',3,5,'5','8','Ganjil'),(201,'nik',3,5,'5','9','Ganjil'),(202,'admin',3,5,'5','10','Ganjil'),(203,'guru',3,5,'5','11','Ganjil'),(204,'nik',3,5,'6','2','Ganjil'),(205,'20160913',3,5,'6','3','Ganjil'),(206,'12345',3,5,'6','4','Ganjil'),(207,'admin',3,5,'6','5','Ganjil'),(208,'guru',3,5,'6','6','Ganjil'),(209,'nik',3,5,'6','7','Ganjil'),(210,'20160913',3,5,'6','8','Ganjil'),(211,'12345',3,5,'6','9','Ganjil'),(212,'admin',3,5,'6','10','Ganjil'),(213,'guru',3,5,'6','11','Ganjil');

#
# Structure for table "tb_kelas"
#

DROP TABLE IF EXISTS `tb_kelas`;
CREATE TABLE `tb_kelas` (
  `idkelas` int(11) NOT NULL AUTO_INCREMENT,
  `namakelas` varchar(10) NOT NULL DEFAULT '',
  `jurusan` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idkelas`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "tb_kelas"
#

/*!40000 ALTER TABLE `tb_kelas` DISABLE KEYS */;
INSERT INTO `tb_kelas` VALUES (3,'X AK 13','Rekayasa Perangkat Lunak'),(4,'XI AP 1','Administrasi Perkantoran'),(6,'XI RPL B','REkayasa perangkat lunak');
/*!40000 ALTER TABLE `tb_kelas` ENABLE KEYS */;

#
# Structure for table "tb_kelas_hapus"
#

DROP TABLE IF EXISTS `tb_kelas_hapus`;
CREATE TABLE `tb_kelas_hapus` (
  `idkelas` int(11) NOT NULL AUTO_INCREMENT,
  `namakelas` varchar(10) NOT NULL DEFAULT '',
  `jurusan` varchar(40) DEFAULT NULL,
  `tgl_perubahan` datetime DEFAULT NULL,
  `nama_user` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idkelas`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "tb_kelas_hapus"
#

/*!40000 ALTER TABLE `tb_kelas_hapus` DISABLE KEYS */;
INSERT INTO `tb_kelas_hapus` VALUES (2,'fauzan','Rekayasa Perangkat Lunak','2016-09-02 13:44:21','root@localhost'),(5,'XI IPS 1','Administrasi Perkantoran','2016-09-02 09:36:27','root@localhost');
/*!40000 ALTER TABLE `tb_kelas_hapus` ENABLE KEYS */;

#
# Structure for table "tb_kelas_history"
#

DROP TABLE IF EXISTS `tb_kelas_history`;
CREATE TABLE `tb_kelas_history` (
  `idkelas` int(11) NOT NULL AUTO_INCREMENT,
  `namakelas` varchar(10) NOT NULL DEFAULT '',
  `jurusan` varchar(40) DEFAULT NULL,
  `tgl_hapus` datetime DEFAULT NULL,
  `nama_user` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idkelas`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "tb_kelas_history"
#

/*!40000 ALTER TABLE `tb_kelas_history` DISABLE KEYS */;
INSERT INTO `tb_kelas_history` VALUES (2,'fauzan','Rekayasa Perangkat Lunak','2016-09-16 15:23:58','root@localhost');
/*!40000 ALTER TABLE `tb_kelas_history` ENABLE KEYS */;

#
# Structure for table "tb_kelas_update"
#

DROP TABLE IF EXISTS `tb_kelas_update`;
CREATE TABLE `tb_kelas_update` (
  `idkelas` int(11) NOT NULL AUTO_INCREMENT,
  `namakelas` varchar(10) NOT NULL DEFAULT '',
  `jurusan` varchar(40) DEFAULT NULL,
  `tgl_perubahan` datetime DEFAULT NULL,
  `nama_user` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idkelas`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "tb_kelas_update"
#

/*!40000 ALTER TABLE `tb_kelas_update` DISABLE KEYS */;
INSERT INTO `tb_kelas_update` VALUES (2,'X AK 1','Rekayasa Perangkat Lunak','2016-09-02 11:22:12','root@localhost');
/*!40000 ALTER TABLE `tb_kelas_update` ENABLE KEYS */;

#
# Structure for table "tb_kelas_updatea"
#

DROP TABLE IF EXISTS `tb_kelas_updatea`;
CREATE TABLE `tb_kelas_updatea` (
  `idkelas` int(11) NOT NULL AUTO_INCREMENT,
  `namakelas` varchar(10) NOT NULL DEFAULT '',
  `jurusan` varchar(40) DEFAULT NULL,
  `tgl_perubahan` datetime DEFAULT NULL,
  `nama_user` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idkelas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "tb_kelas_updatea"
#

/*!40000 ALTER TABLE `tb_kelas_updatea` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_kelas_updatea` ENABLE KEYS */;

#
# Structure for table "tb_mapel"
#

DROP TABLE IF EXISTS `tb_mapel`;
CREATE TABLE `tb_mapel` (
  `idmapel` int(11) NOT NULL AUTO_INCREMENT,
  `namamapel` varchar(40) NOT NULL DEFAULT '',
  `jenis` varchar(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idmapel`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

#
# Data for table "tb_mapel"
#

/*!40000 ALTER TABLE `tb_mapel` DISABLE KEYS */;
INSERT INTO `tb_mapel` VALUES (3,'PKN','Adaptif'),(4,'MYSQL','Produktif'),(5,'EKONOMI MAKRO','Produktif'),(6,'BAHASA SUNDA','Mulok'),(7,'BAHASA INGGRIS','Adaptif'),(9,'MATEMATIKA','Adaptif');
/*!40000 ALTER TABLE `tb_mapel` ENABLE KEYS */;

#
# Structure for table "tb_mapel_history"
#

DROP TABLE IF EXISTS `tb_mapel_history`;
CREATE TABLE `tb_mapel_history` (
  `idmapel` int(11) NOT NULL AUTO_INCREMENT,
  `namamapel` varchar(40) NOT NULL DEFAULT '',
  `jenis` varchar(11) NOT NULL DEFAULT '0',
  `tgl_hapus` datetime DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idmapel`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

#
# Data for table "tb_mapel_history"
#

/*!40000 ALTER TABLE `tb_mapel_history` DISABLE KEYS */;
INSERT INTO `tb_mapel_history` VALUES (1,'','0','2016-09-02 15:06:41','root@localhost'),(8,'AKUNTANSI 1','Produktif','2016-09-02 15:12:19','root@localhost');
/*!40000 ALTER TABLE `tb_mapel_history` ENABLE KEYS */;

#
# Structure for table "tb_siswa"
#

DROP TABLE IF EXISTS `tb_siswa`;
CREATE TABLE `tb_siswa` (
  `nis` varchar(10) NOT NULL DEFAULT '',
  `nisn` varchar(14) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `gender` varchar(9) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL DEFAULT 'Islam',
  `alamat` text,
  `nama_ortu` varchar(50) NOT NULL,
  `peker_ortu` varchar(20) DEFAULT NULL,
  `no_ijazah` varchar(50) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tb_siswa"
#

INSERT INTO `tb_siswa` VALUES ('111111','NASIONAL','Desi','Perempuan','JAKARTA','2016-07-09','Islam','CIPETE','DEDE','SOPIR','DN'),('222222','161111','Desi','Perempuan','Jakarta','2016-07-22','Islam','Surabaya','Aswww','Aswwww','18161751815'),('333333','677','dede','Laki-laki','Semarang','2016-07-05','Kristen','ddsdfdsf','garing','macul','999999'),('444444','677','Nur','Perempuan','Depok','2016-07-20','Kristen','ddsdfdsf','Rani Y','macul','999999'),('555555','8932992','Ageng Prasetyo','Laki-laki','Depok','2016-07-07','Kristen','Cipete','Aldika','Sopir','234234324'),('999888','677','werwer','Perempuan','BAndung','2016-07-05','Kristen','ddsdfdsf','garing','macul','999999');

#
# Structure for table "tb_staff"
#

DROP TABLE IF EXISTS `tb_staff`;
CREATE TABLE `tb_staff` (
  `nik` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `nama_lengkap` varchar(50) NOT NULL,
  `gender` varchar(9) NOT NULL,
  `nuptk` varchar(16) DEFAULT '',
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status` varchar(4) NOT NULL DEFAULT '0',
  `tmt_kerja` date NOT NULL,
  `jabatan` varchar(20) NOT NULL DEFAULT '0',
  `ijasah_tingkat` varchar(3) NOT NULL DEFAULT '',
  `ijasah_jurusan` varchar(20) NOT NULL,
  `ijasah_tahun` year(4) NOT NULL DEFAULT '2016',
  `idmapel` int(2) NOT NULL DEFAULT '0',
  `jlm_jam` int(2) NOT NULL,
  `alamat` text NOT NULL,
  `level` varchar(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tb_staff"
#

INSERT INTO `tb_staff` VALUES ('12345','827ccb0eea8a706c4c34a16891f84e7b','Indah Pratiwi,S.Kom','Pria','1243121-4','JAkarta','2016-07-15','GB','2009-09-12','Kurikulum','S1','Fisika',2005,2,21,'Jagakarsa, No. 271 C Ciganjur Jaksel','guru'),('32142','21232f297a57a5a743894a0e4a801fc3','Achmad Azizka,S.Pd','Laki-lak','54354353','','0000-00-00','0','0000-00-00','0','','',2016,3,31,'JAkarta','admin'),('32192','19a5d291267406b0f5fbe1704c88368d','Citra K,A.md','Wanita','370128302183','Jakarta','2016-07-21','GB','2014-09-21','Kurikulum','S1','Sistem Infromasi',2018,7,21,'Jakarta','guru'),('43332','1ae8299a2cdd5bad940c2294ce4cffd8','Wini Angraini,M.Pd','Wanita','rr4r','Banten','2016-07-06','GPT','2009-09-12','Kurikulum','S1','Sistem Infromasi',2014,3,18,'Jalan Raya Bogor Rt06','guru'),('45453','6a8b3dff6a764fe0512a4e31e9b8e133','Esa Sigit,SH','Pria','nuptk','tmpt','2016-07-14','GB','0000-00-00','Kurikulum','D3','Sistem Infromasi',2016,8,20,'deopk','admin');

#
# Structure for table "tb_tahun"
#

DROP TABLE IF EXISTS `tb_tahun`;
CREATE TABLE `tb_tahun` (
  `idtahun` int(11) NOT NULL AUTO_INCREMENT,
  `namatahun` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`idtahun`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

#
# Data for table "tb_tahun"
#

/*!40000 ALTER TABLE `tb_tahun` DISABLE KEYS */;
INSERT INTO `tb_tahun` VALUES (1,'2015/2016'),(2,'2016/2017'),(3,'2017/2018'),(4,'2018/2019');
/*!40000 ALTER TABLE `tb_tahun` ENABLE KEYS */;

#
# Trigger "delete_kelas"
#

DROP TRIGGER IF EXISTS `delete_kelas`;
CREATE DEFINER='root'@'localhost' TRIGGER `delete_kelas` BEFORE DELETE ON `tb_kelas`
  FOR EACH ROW INSERT INTO tb_kelas_history VALUES (
OLD.idkelas, OLD.namakelas,OLD.jurusan,SYSDATE(),CURRENT_USER);

#
# Trigger "delete_mapel"
#

DROP TRIGGER IF EXISTS `delete_mapel`;
CREATE DEFINER='root'@'localhost' TRIGGER `delete_mapel` BEFORE DELETE ON `tb_mapel`
  FOR EACH ROW insert into tb_mapel_history VALUES(OLD.idmapel,OLD.namamapel,OLD.jenis,SYSDATE(),CURRENT_USER);

#
# Trigger "edit_tb_kelas"
#

DROP TRIGGER IF EXISTS `edit_tb_kelas`;
CREATE DEFINER='root'@'localhost' TRIGGER `edit_tb_kelas` AFTER UPDATE ON `tb_kelas`
  FOR EACH ROW BEGIN
      INSERT INTO tb_kelas_update

      VALUES
            (       OLD.idkelas,
                    OLD.namakelas,
                    OLD.jurusan,
                    SYSDATE(),
                    CURRENT_USER
            );
    END;

#
# Trigger "hapus_tb_kelas"
#

DROP TRIGGER IF EXISTS `hapus_tb_kelas`;
CREATE DEFINER='root'@'localhost' TRIGGER `hapus_tb_kelas` AFTER DELETE ON `tb_kelas`
  FOR EACH ROW BEGIN
INSERT INTO tb_kelas_hapus(idkelas,namakelas,jurusan,tgl_perubahan,nama_user) 
VALUES (OLD.idkelas, OLD.namakelas, OLD.jurusan,SYSDATE(),CURRENT_USER);
END;

#
# Trigger "restore"
#

DROP TRIGGER IF EXISTS `restore`;
CREATE DEFINER='root'@'localhost' TRIGGER `restore` BEFORE DELETE ON `tb_kelas_history`
  FOR EACH ROW INSERT INTO tb_kelas VALUES(OLD.idkelas,OLD.namakelas,OLD.jurusan);
