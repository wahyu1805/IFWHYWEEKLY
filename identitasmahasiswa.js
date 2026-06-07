// identitasmahasiswa.js - load students from localStorage and render table

const initialStudents = [
  {
    foto: 'https://i.pinimg.com/originals/f0/a2/8a/f0a28aaa06eb888a7172d2016f812b34.jpg',
    nama: 'Wahyu',
    nim: '13182420056',
    jurusan: 'Informatika'
  },
  {
    foto: 'https://i.pinimg.com/736x/f4/66/e6/f466e652615166b7c8072d41ec003f89.jpg',
    nama: 'nailong',
    nim: '1316242000',
    jurusan: 'Informatika'
  },
  {
    foto: 'https://i.pinimg.com/originals/b1/ef/fa/b1effac43bb053a95c307b52ff0cb196.jpg?nii=t',
    nama: 'Syaif',
    nim: '2026003',
    jurusan: 'Sistem Informasi'
  },
  {
    foto: 'https://tse1.mm.bing.net/th/id/OIP.8GfX4CvPEWL4rHKQrazwiwHaHa?pid=Api&P=0&h=180',
    nama: 'ombg',
    nim: '1318244000',
    jurusan: 'Teknik Komputer'
  }
];

function loadStudents() {
  const tbody = document.getElementById('studentBody');
  if (!tbody) return;

  tbody.innerHTML = ''; // Clear

  let students = JSON.parse(localStorage.getItem('mahasiswaData')) || [];

  // Merge initial if localStorage empty
  if (students.length === 0) {
    localStorage.setItem('mahasiswaData', JSON.stringify(initialStudents));
    students = initialStudents;
  }

  students.forEach((student, index) => {
    const row = tbody.insertRow();

    row.insertCell(0).textContent = index + 1;

    const fotoCell = row.insertCell(1);
    fotoCell.innerHTML = `<img src="${student.foto}" width="80">`;

    row.insertCell(2).textContent = student.nama;
    row.insertCell(3).textContent = student.nim;
    row.insertCell(4).textContent = student.jurusan;
  });
}

document.addEventListener('DOMContentLoaded', loadStudents);

