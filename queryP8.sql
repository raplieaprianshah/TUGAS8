CREATE TABLE mie_instan(
  	id_mie INT PRIMARY KEY,
    nama VARCHAR(100),
    varian_mie VARCHAR(100)
);
INSERT INTO mie_instan (id_mie, nama, varian_mie) 
VALUES
(101, 'Indomie Mie Goreng', 'Mie Goreng'),
(102, 'Indomie Ayam Bawang', 'Mie Kuah'),
(103, 'Indomie Rendang', 'Mie Goreng'),
(104, 'Indomie Goreng Aceh', 'Mie Goreng');


INSERT INTO mie_instan (id_mie, nama, varian_mie) 
VALUES
(201, 'Mie Sedaap Goreng', 'Mie Goreng'),
(202, 'Mie Sedaap Soto', 'Mie Kuah');

SELECT*FROM mie_instan;