create database simtvkabel;
create table simtvkabel.layanan (kodelayanan int(2) not null auto_increment primary key, jenislayanan varchar(50) not null);
create table simtvkabel.pelanggan (nomorpelanggan varchar(10) not null primary key, namapelanggan varchar(50) not null, alamat text null, kodelayanan int(2) not null, tgldaftar date);
