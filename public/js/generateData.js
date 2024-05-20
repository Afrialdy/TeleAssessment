// Fungsi untuk menghasilkan nomor telepon acak
function generatePhoneNumber() {
    let phoneNumber = "08";
    for (let i = 0; i < 10; i++) {
        phoneNumber += Math.floor(Math.random() * 10);
        if (i == 1 || i == 5) {
            phoneNumber += "-";
        }
    }
    return phoneNumber;
}

// Fungsi untuk menghasilkan usia acak antara 18 dan 40 tahun
function generateAge() {
    return Math.floor(Math.random() * (40 - 18 + 1)) + 18;
}

// Fungsi untuk menghasilkan tanggal lahir acak antara 1970 dan 2004
function generateBirthDate() {
    const year = Math.floor(Math.random() * (2004 - 1970 + 1)) + 1970;
    const month = Math.floor(Math.random() * 12) + 1;
    const day = Math.floor(Math.random() * 28) + 1; // Anggap semua bulan memiliki 28 hari untuk sederhana
    return `${day < 10 ? '0' + day : day}/${month < 10 ? '0' + month : month}/${year}`;
}

// Fungsi untuk menghasilkan nama lengkap acak
function generateName() {
    const firstNames = ["John", "Jane", "David", "Emily", "Michael", "Emma", "Daniel", "Olivia", "James", "Sophia"];
    const lastNames = ["Smith", "Johnson", "Williams", "Brown", "Jones", "Garcia", "Miller", "Davis", "Rodriguez", "Martinez"];
    const randomFirstName = firstNames[Math.floor(Math.random() * firstNames.length)];
    const randomLastName = lastNames[Math.floor(Math.random() * lastNames.length)];
    return `${randomFirstName} ${randomLastName}`;
}

// Fungsi untuk menghasilkan email acak
function generateEmail(name) {
    const domains = ["gmail.com", "yahoo.com", "hotmail.com", "example.com", "outlook.com"];
    const randomIndex = Math.floor(Math.random() * domains.length);
    const randomNumber = Math.floor(Math.random() * 100);
    return `${name.toLowerCase().replace(' ', '')}${randomNumber}@${domains[randomIndex]}`;
}

// Fungsi untuk menghasilkan gender acak
function generateGender() {
    const genders = ["Male", "Female"];
    const randomIndex = Math.floor(Math.random() * genders.length);
    return genders[randomIndex];
}

// Fungsi untuk menghasilkan status acak (Aktif atau Tidak Aktif)
function generateStatus() {
    const statuses = ["Aktif", "Tidak Aktif"];
    const randomIndex = Math.floor(Math.random() * statuses.length);
    return statuses[randomIndex];
}

// Fungsi untuk menghasilkan ID unik acak dalam rentang 1 sampai 100
function generateID() {
    return Math.floor(Math.random() * 100) + 1;
}

// Fungsi untuk menghasilkan data kandidat secara dinamis
function generateData() {
    const dataContainer = document.getElementById("dataContainer");
    let html = "";
    for (let i = 1; i <= 10; i++) { // Ubah angka 10 sesuai dengan jumlah data yang diinginkan
        const id = generateID();
        const name = generateName();
        const gender = generateGender();
        const status = generateStatus();
        const randomImageId = Math.floor(Math.random() * 1000); // ID gambar acak antara 1 dan 1000
        const imageUrl = `https://picsum.photos/200/200?random=${randomImageId}`; // URL gambar acak dari Lorem Picsum
        html += `<tr>
                    <td class="profil d-flex">
                        <img src="${imageUrl}" class="avatar img-fluid" alt="avatar"> 
                        <div class="d-flex flex-column user ms-2">
                            <h5 class="mt-1">${name}</h5>
                            <p>${generateEmail(name)}</p>
                        </div>
                    </td>
                    <td style="padding-left: 6px;">${id}</td>
                    <td>${generatePhoneNumber()}</td>
                    <td style="padding-left: 10px;">${generateBirthDate()}</td>
                    <td style="padding-left: 10px;">${generateAge()}</td>
                    <td style="padding-left: ${gender === 'Female' ? '0' : '10'}px;">${gender}</td>
                    <td class="${status.toLowerCase() === 'aktif' ? 'actived' : 'no-actived'}">
                        <span class="${status.toLowerCase() === 'aktif' ? 'aktif' : 'tidak-aktif'} btn btn-primary">${status}</span>
                    </td>
                    <td>
                        <span class="edit btn btn-primary">Edit</span>
                    </td>
                    <td>
                        <span class="delete btn btn-primary">Delete</span>
                    </td>                                                                                    
                </tr>`;
    }
    dataContainer.innerHTML = html;
}

// Panggil fungsi generateData() untuk mengisi data
generateData();
