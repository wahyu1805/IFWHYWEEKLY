// tambahdata.js - handle add student form and store to localStorage

const form = document.getElementById('studentForm');
const fotoInput = document.getElementById('foto');
const preview = document.getElementById('fotoPreview');

if (fotoInput && preview) {
  fotoInput.addEventListener('change', function (e) {
    const file = e.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function (ev) {
      preview.src = ev.target.result;
      preview.style.display = 'block';
    };
    reader.readAsDataURL(file);
  });
}

if (form && fotoInput) {
  form.addEventListener('submit', function (e) {
    e.preventDefault();

    if (!form.checkValidity()) {
      alert('Mohon isi semua field!');
      return;
    }

    const file = fotoInput.files[0];
    if (!file) {
      alert('Mohon pilih foto!');
      return;
    }

    const reader = new FileReader();
    reader.onload = function (ev) {
      const student = {
        foto: ev.target.result, // base64
        nama: document.getElementById('nama').value,
        nim: document.getElementById('nim').value,
        jurusan: document.getElementById('jurusan').value
      };

      let students = JSON.parse(localStorage.getItem('mahasiswaData')) || [];
      students.push(student);
      localStorage.setItem('mahasiswaData', JSON.stringify(students));

      alert('Data mahasiswa berhasil ditambahkan!');
      form.reset();
      preview.style.display = 'none';
    };

    reader.readAsDataURL(file);
  });
}

