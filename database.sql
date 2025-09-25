--Membuat database
CREATE DATABASE ID NOT EXISTS buku (
    --membuat tabel buku
    USE perpustakaan;
) 

--membuat tabel buku 
CREATE TABLE IF NOT EXISTS buku (
    id_buku INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(100) NOT NULL,
    nama_pengarang VARCHAR(100) NOT NULL,
    penerbit VARCHAR(100),
    tahun_terbit YEAR,
);

--menambahkan data ke tabel buku
INSERT INTO buku(id_buku, judul, nama_pengarang, penerbit, tahun_terbit)
VALUES
('Laskar pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005),
('Negeri 5 Menara', 'Ahmad Fuadi', 'Gramedia', 2009),
('Bumi Manusia', 'Pramoedya Ananta Toer', 'Hasta Mitra', 1980),
('Dilan 1990', 'Pidi Baiq', 'Pastel Books', 2014),
('Rich Dad Poor Dad', 'Robert T. Kiyosaki', 'Plata Publishing', 1997)