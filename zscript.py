from random import randint
from datetime import datetime
data = {
"0004508871" : ["ADELIA ANRIFA BELLA","Perempuan"],
"0008136152" : ["BUNGAWATI","Perempuan"],
"0002442180" : ["EBHY NURINZANI","Perempuan"],
"0006413382" : ["ERA AMALINA","Perempuan"],
"0006491203" : ["HASMIRA","Perempuan"],
"0000450880" : ["HUSNA","Perempuan"],
"0010805384" : ["MAGFIRAH CAHYANI PUTRI MARIF","Perempuan"],
"0008292126" : ["MARWAH ACHMAD","Perempuan"],
"0000450883" : ["MELANI","Perempuan"],
"0008136132" : ["NADHYA AZZAHRA SETIAWAN","Perempuan"],
"9990714560" : ["NUR FADILA","Perempuan"],
"0005917167" : ["NURINDAH SARI","Perempuan"],
"0008276048" : ["NURSAKINA","Perempuan"],
"0005748351" : ["NURUL AFIFAH","Perempuan"],
"0004946676" : ["NURUL ANNISA","Perempuan"],
"0005916985" : ["NURUL ANNISA","Perempuan"],
"9990363692" : ["PATRICIA MEGANANDA WIDYASARI","Perempuan"],
"0006413393" : ["RESTI AULIA PUTRI","Perempuan"],
"9992523512" : ["RISKA ASRIANTI","Perempuan"],
"0006491232" : ["SHOFURA QONITA","Perempuan"],
"9990714570" : ["ST.MARWAH","Perempuan"],
"0008273017" : ["SUCIATI FEBRIANA","Perempuan"],
"0008390441" : ["WAFIQ AZIZAH","Perempuan"],
"0006491158" : ["ARUSFAKHRIYAHANHAR","Laki-Laki"],
"0005916760" : ["AQIL SALIM","Laki-Laki"],
"0005124524" : ["CHAIRUL RIFKYALIMSYAH","Laki-Laki"],
"0008212105" : ["DICKY DARMADI ZAENAL","Laki-Laki"],
"0008276044" : ["EKA MANGGALA PUTRA","Laki-Laki"],
"9990289293" : ["MUHAJIR","Laki-Laki"],
"0005916395" : ["MUHAJIRATMA PUTRA","Laki-Laki"],
"9996705775" : ["MUHAMMAD FADLI","Laki-Laki"],
"0008136160" : ["MUHAMMAD KHISAN ANUGRAH","Laki-Laki"],
"0006334048" : ["FACHRI AZRA IRAWAN","Laki-Laki"],
"9990289361" : ["NURMUHAMMAD FAJRIN ZAINAL","Laki-Laki"],
"9996548741" : ["TEGAR YULIANTORO","Laki-Laki"],
"0008136129" : ["ZULKIFLI SYAHRUR","Laki-Laki"]
}

alamat = [
     "Jl. Paccerakkang",
     "Bumi Tamalantea Permai",
     "Jl. Mangga Tiga",
     "Jl. Berua",
     "Jl. Sudiang",
     "Jl. Kodam 2",
     "Jl. Manuruki",
     "Jl. Yayasan Gubernuran",
     "Jl. Sakina Baru",
     "Jl. Telkomas"
]

tmpat_lahir = [
     "Makassar",
     "Bone",
     "Takalar",
     "Bulukumba",
     "Bantaeng",
     "Maros",
]

th_lahir = [
     "2008",
     "2007",
     "2009",
     "2006"
]
bl_lahir = [
     "01",
     "02",
     "03",
     "04",
     "05",
     "06",
     "07",
     "08",
     "09",
     "10",
     "11",
     "12"
]

def generate_telp():
     st = ["0853","089","0812","0823","088","0857"]
     hasil = ""
     hasil += st[randint(0, len(st)-1)]
     while len(hasil) < 12:
          hasil += str(randint(0,9))
     return hasil

def filterday(n):
     if n < 10:
          return f"0{n}"
     else:
          return str(n)

day = [filterday(i) for i in range(1,30)]

id_us = 7
query = "INSERT INTO `user` (`id_user`, `nrp`, `username`, `password`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `alamat`, `telp`, `foto`, `level`) VALUES"
for key in data:
     query += f"\n({id_us}, '{key}', '{data[key][0].split()[0]}', '123456','{data[key][0]}','{tmpat_lahir[randint(0,len(tmpat_lahir)-1)]}', '{th_lahir[randint(0, len(th_lahir)-1)]}-{bl_lahir[randint(0,len(bl_lahir)-1)]}-{day[randint(0,len(day)-1)]}','{data[key][1]}','{alamat[randint(0, len(alamat)-1)]}','{generate_telp()}','default.jpg', '2'),"
     id_us += 1

print(query)
INSERT INTO `user` (`id_user`, `nrp`, `username`, `password`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `alamat`, `telp`, `foto`, `level`) VALUES
(7, '190102008', 'admin', 'admin123', 'Andi', 'Makassar', '1994-07-13', 'Laki-Laki', 'Perum Telkomnas', '089789567345', 'kemenistek.png', '1'),
(20, '444444', 'laenre123', '203032', 'Laenre', 'Makassar', '1978-03-23', 'Laki-Laki', 'Paccerekang', '08645345567', '', '3'),
(98, '203035', 'Nafasuci36@gmail.com', 'suci', 'Nafa Suci Ramadhani', 'Makassar', '2001-06-20', 'Perempuan', 'PERUMAHAN YAYASAN GUBERNUR', '082348908777', 'WhatsApp_Image_2024-02-21_at_06_46_25.jpeg', '2'),
(102, '203039', 'Nursafika04@gmail.com', 'fika123', 'NUR SAFIKA', 'PINRANG', '2002-04-04', 'Perempuan', 'PERINTIS KEMERDEKAAN VII', '085342541072', '3x4_Fika.jpeg', '2'),
(103, '203022', 'adianugrah2808@gmail.com', '203022', 'MUH ADI ANUGRAH', 'MAKASSAR', '2000-06-28', 'Laki-Laki', 'BTN KODAM 2', '089563774184', '3x4.jpg', '2');




INSERT INTO `user` (`id_user`, `nrp`, `username`, `password`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `alamat`, `telp`, `foto`, `level`) VALUES
(7, '0004508871', 'ADELIA', '123456','ADELIA ANRIFA BELLA','Bantaeng', '2009-02-23','Perempuan','Jl. Manuruki','081257572724','default.jpg', '2'),
(8, '0008136152', 'BUNGAWATI', '123456','BUNGAWATI','Bone', '2009-09-26','Perempuan','Jl. Paccerakkang','081292003288','default.jpg', '2'),
(9, '0002442180', 'EBHY', '123456','EBHY NURINZANI','Bantaeng', '2007-04-03','Perempuan','Bumi Tamalantea Permai','088460578809','default.jpg', '2'),
(10, '0006413382', 'ERA', '123456','ERA AMALINA','Maros', '2009-07-05','Perempuan','Jl. Paccerakkang','081214354370','default.jpg', '2'),
(11, '0006491203', 'HASMIRA', '123456','HASMIRA','Maros', '2009-07-09','Perempuan','Jl. Yayasan Gubernuran','088235428054','default.jpg', '2'),
(12, '0000450880', 'HUSNA', '123456','HUSNA','Takalar', '2008-08-15','Perempuan','Jl. Sakina Baru','088184820421','default.jpg', '2'),
(13, '0010805384', 'MAGFIRAH', '123456','MAGFIRAH CAHYANI PUTRI MARIF','Takalar', '2007-04-02','Perempuan','Jl. Manuruki','088859183045','default.jpg', '2'),      
(14, '0008292126', 'MARWAH', '123456','MARWAH ACHMAD','Maros', '2009-09-01','Perempuan','Bumi Tamalantea Permai','082388602047','default.jpg', '2'),
(15, '0000450883', 'MELANI', '123456','MELANI','Takalar', '2008-09-01','Perempuan','Jl. Manuruki','088943135849','default.jpg', '2'),
(16, '0008136132', 'NADHYA', '123456','NADHYA AZZAHRA SETIAWAN','Bantaeng', '2008-05-27','Perempuan','Jl. Yayasan Gubernuran','081238673973','default.jpg', '2'),  
(17, '9990714560', 'NUR', '123456','NUR FADILA','Bone', '2009-12-22','Perempuan','Jl. Manuruki','085717586101','default.jpg', '2'),
(18, '0005917167', 'NURINDAH', '123456','NURINDAH SARI','Bone', '2009-07-01','Perempuan','Jl. Paccerakkang','085730037484','default.jpg', '2'),
(19, '0008276048', 'NURSAKINA', '123456','NURSAKINA','Bone', '2009-09-14','Perempuan','Jl. Sudiang','088246540040','default.jpg', '2'),
(20, '0005748351', 'NURUL', '123456','NURUL AFIFAH','Bantaeng', '2008-06-19','Perempuan','Jl. Paccerakkang','088749551289','default.jpg', '2'),
(21, '0004946676', 'NURUL', '123456','NURUL ANNISA','Maros', '2008-04-21','Perempuan','Jl. Telkomas','089036543546','default.jpg', '2'),
(22, '0005916985', 'NURUL', '123456','NURUL ANNISA','Bulukumba', '2006-09-04','Perempuan','Jl. Sakina Baru','085714537039','default.jpg', '2'),
(23, '9990363692', 'PATRICIA', '123456','PATRICIA MEGANANDA WIDYASARI','Bulukumba', '2008-03-13','Perempuan','Jl. Paccerakkang','089778663277','default.jpg', '2'),
(24, '0006413393', 'RESTI', '123456','RESTI AULIA PUTRI','Bantaeng', '2006-06-01','Perempuan','Jl. Manuruki','088386398168','default.jpg', '2'),
(25, '9992523512', 'RISKA', '123456','RISKA ASRIANTI','Bantaeng', '2009-08-17','Perempuan','Jl. Sudiang','085366618346','default.jpg', '2'),
(26, '0006491232', 'SHOFURA', '123456','SHOFURA QONITA','Takalar', '2006-04-15','Perempuan','Jl. Sudiang','089003018832','default.jpg', '2'),
(27, '9990714570', 'ST.MARWAH', '123456','ST.MARWAH','Bulukumba', '2008-09-11','Perempuan','Jl. Berua','085745904706','default.jpg', '2'),
(28, '0008273017', 'SUCIATI', '123456','SUCIATI FEBRIANA','Bone', '2007-07-11','Perempuan','Jl. Berua','089013784563','default.jpg', '2'),
(29, '0008390441', 'WAFIQ', '123456','WAFIQ AZIZAH','Bantaeng', '2008-01-17','Perempuan','Jl. Kodam 2','088154006143','default.jpg', '2'),
(30, '0006491158', 'ARUSFAKHRIYAHANHAR', '123456','ARUSFAKHRIYAHANHAR','Bantaeng', '2009-04-21','Laki-Laki','Jl. Manuruki','089903472845','default.jpg', '2'),     
(31, '0005916760', 'AQIL', '123456','AQIL SALIM','Bone', '2006-01-24','Laki-Laki','Jl. Sakina Baru','085356277842','default.jpg', '2'),
(32, '0005124524', 'CHAIRUL', '123456','CHAIRUL RIFKYALIMSYAH','Makassar', '2007-08-04','Laki-Laki','Jl. Berua','082371624926','default.jpg', '2'),
(33, '0008212105', 'DICKY', '123456','DICKY DARMADI ZAENAL','Takalar', '2009-06-19','Laki-Laki','Jl. Kodam 2','081274975504','default.jpg', '2'),
(34, '0008276044', 'EKA', '123456','EKA MANGGALA PUTRA','Bone', '2008-08-03','Laki-Laki','Jl. Kodam 2','085711834807','default.jpg', '2'),
(35, '9990289293', 'MUHAJIR', '123456','MUHAJIR','Bantaeng', '2006-12-16','Laki-Laki','Jl. Sakina Baru','085352501092','default.jpg', '2'),
(36, '0005916395', 'MUHAJIRATMA', '123456','MUHAJIRATMA PUTRA','Takalar', '2009-07-27','Laki-Laki','Jl. Telkomas','081264180666','default.jpg', '2'),
(37, '9996705775', 'MUHAMMAD', '123456','MUHAMMAD FADLI','Makassar', '2006-08-25','Laki-Laki','Jl. Manuruki','085774104097','default.jpg', '2'),
(38, '0008136160', 'MUHAMMAD', '123456','MUHAMMAD KHISAN ANUGRAH','Bulukumba', '2009-01-18','Laki-Laki','Jl. Telkomas','088728272082','default.jpg', '2'),
(39, '0006334048', 'FACHRI', '123456','FACHRI AZRA IRAWAN','Maros', '2007-05-26','Laki-Laki','Jl. Telkomas','085311027208','default.jpg', '2'),
(40, '9990289361', 'NURMUHAMMAD', '123456','NURMUHAMMAD FAJRIN ZAINAL','Takalar', '2007-06-25','Laki-Laki','Jl. Yayasan Gubernuran','081213026009','default.jpg', '2'),
(41, '9996548741', 'TEGAR', '123456','TEGAR YULIANTORO','Bulukumba', '2007-05-07','Laki-Laki','Jl. Paccerakkang','089804715963','default.jpg', '2'),
(42, '0008136129', 'ZULKIFLI', '123456','ZULKIFLI SYAHRUR','Bulukumba', '2008-03-15','Laki-Laki','Jl. Kodam 2','085332481766','default.jpg', '2');