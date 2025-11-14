CREATE DATABASE IF NOT EXISTS quan_ly_film_webfpt
USE quan_ly_web_film; 



CREATE TABLE nguoi_dung(
   UID CHAR(5) PRIMARY KEY,
   ten_dang_nhap VARCHAR(50),
   email VARCHAR(50), 
   sinh_nhat DATETIME,
   gioi_tinh ENUM('Nam','Nữ','Khác'),
   sdt VARCHAR(10),
   id_quyen INT,
   mat_khau VARCHAR(16),
   FOREIGN KEY(id_quyen) REFERENCES quyen(id_quyen) 
);
CREATE TABLE quyen(
    id_quyen INT,
    ten_quyen VARCHAR(20)
    
);

CREATE TABLE the_loai(
    id_the_loai CHAR(5) PRIMARY KEY,
    ten_the_loai VARCHAR(50)
);


#list film
CREATE TABLE list_film(
    FID CHAR(5) PRIMARY KEY,
    id_the_loai VARCHAR(50),
    ten_phim VARCHAR(100),
    dao_dien_id INT,
    thoi_luong INT,
    nam_phat_hanh YEAR,
    poster VARCHAR,
    id_quoc_gia CHAR(10),
    mo_ta TEXT,
    FOREIGN KEY (id_the_loai) REFERENCES the_loai(id_the_loai)
    
);

CREATE TABLE quoc_gia(
    id_quoc_gia CHAR(10),
    ten_quoc_gia VARCHAR(50)
);

CREATE TABLE 



#favorites
#ngon ngu
#danhgia
#tập phim