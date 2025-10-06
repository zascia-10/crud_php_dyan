--Membuat database
CREATE DATABASE ID NOT EXISTS tugas (
    --membuat tabel tugas
    USE tugas;
) 

--membuat tabel buku 
CREATE TABLE IF NOT EXISTS tugas (
    id_tugas INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    tugas VARCHAR(100) NOT NULL,
    deadline DATE NOT NULL
    status ENUM('selesai','belum selesai') DEFAULT 'belum selesai'
);

--menambahkan data ke tabel tugas
INSERT INTO tugas(id_tugas, nama, tugas, deadline, status)
VALUES
('Ani', 'Mengerjakan Laporan', '2025-10-05', 'belum selesai'),
('Budi', 'Presentasi kelompok', '2025-10-07', 'belum selesai'),
('Citra', 'Revisi makalah', '2025-10-28', 'selesai'),
('Doni', 'Praktikum Jaringan', '2025-10-02', 'belum selesai'),