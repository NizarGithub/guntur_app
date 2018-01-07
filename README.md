# gntr_app_devel
Gntr App Devel

- Buat database baru, lalu import file sql "gntr_app.sql"
- Sesuaikan config setting database di file "root/application/config/database.php"

Update query :
ALTER TABLE `gntrapp_karyawan_gaji` ADD `kygj_periode_bulan` INT NOT NULL AFTER `kygj_changedate`, ADD `kygj_periode_tahun` INT NOT NULL AFTER `kygj_periode_bulan`;

ALTER TABLE `gntrapp_karyawan_gaji` ADD `kygj_type_gaji` TINYINT NOT NULL COMMENT '1=NON THR;2=THR' AFTER `kygj_periode_tahun`;