const namap = 'Ryandra'
const emailp = 'ryandra.athaya@gmail.com'
const jamp = '05:00'
const tujuanp = 'Aceh'
const tiketp = '1'

// let button = document.getElementById('button')
// button.addEventListener('onclick',validation)

function validation() {
  
    let nama_pelanggan = document.getElementById('pelanggan').value
    let email = document.getElementById('email').value
    let jam_keberangakatan = document.getElementById('jam').value
    let tujuan = document.getElementById('tujuan').value
    let tiket = document.getElementById('tiket').value
    let result = document.getElementById('result')
    let icon_nama = document.getElementById('icon_nama');
    let error_nama = document.getElementById('error_nama');
    let icon_email = document.getElementById('icon_email');
    let error_email = document.getElementById('error_email');
    let icon_waktu = document.getElementById('icon_waktu');
    let error_waktu = document.getElementById('error_waktu');
    let icon_tujuan = document.getElementById('icon_tujuan');
    let error_tujuan = document.getElementById('error_tujuan');
    let icon_jumlah = document.getElementById('icon_jumlah');
    let error_jumlah = document.getElementById('error_jumlah');
    

    if (nama_pelanggan == namap && email == emailp && jam_keberangakatan == jamp && tujuan == tujuanp &&tiket == tiketp) {
        alert('Terima kasih tiket anda valid !')
        error_jumlah.textContent = '';
        icon_jumlah.innerHTML = '';
        error_tujuan.textContent = '';
        icon_tujuan.innerHTML = '';
        error_waktu.textContent = '';
        icon_waktu.innerHTML = '';
        error_email.textContent = '';
        icon_email.innerHTML = '';
        error_nama.textContent = '';
        icon_nama.innerHTML = '';

            result.innerHTML =
             `<div id="page" class="position-absolute top-50 start-50 translate-middle">
             <div id="container">
              <div id="ring"></div>
              <div id="ring"></div>
              <div id="ring"></div>
              <div id="ring"></div>
              <div id="h3">loading</div>
            </div>
           </div>`
        
        setTimeout(function () {
            result.innerHTML = 
            `
            <div class="container mt-5 p-3 border border-primary" style="background-color: rgb(252, 252, 252); width:500px;margin-bottom:200px;">
            <h2 class='text-center text-primary'>
                Tiket Valid <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-checks" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12l5 5l10 -10" /><path d="M2 12l5 5m5 -5l5 -5" /></svg>
            </h2>
            <p>1. Nama Pelanggan : ${namap} </p> 
            <p>2. Email Pelanggan : ${emailp} </p>
            <p>3. Jam Keberangakatan : ${jamp} </p>
            <p>4. Tujuan Keberangakatan : ${tujuanp} </p>
            <p>5. Jumlah Tiket : ${tiketp} Tiket</p>
            </div>
            `;
            scrollDown();
        }, 1550);
        // Fungsi untuk melakukan scroll ke bawah
        function scrollDown() {
            window.scrollTo({
                top
                : document.body.scrollHeight,
                behavior
                : 'smooth'
            });
}
       
    }else {
        if (nama_pelanggan == '') {
            error_nama.textContent = 'Error: Nama tidak boleh kosong! nama tidak boleh melebihi 30 karakter';
            icon_nama.innerHTML = ' <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M12 8v4" /><path d="M12 16h.01" /></svg>';
            alert('Error: Nama tidak boleh kosong! nama tidak boleh melebihi 30 karakter');
        }else{
            error_nama.textContent = '';
            icon_nama.innerHTML = '';
        }
        if (email == '') {
            error_email.textContent = 'Email tidak boleh kosong!';
            icon_email.innerHTML = ' <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M12 8v4" /><path d="M12 16h.01" /></svg>';
            alert('Error: Email tidak boleh kosong!');
        }else{
            error_email.textContent = '';
            icon_email.innerHTML = '';
        }
        if (jam_keberangakatan == '') {
            error_waktu.textContent = 'Jam pemberangkatan tidak boleh kosong!';
            icon_waktu.innerHTML = ' <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M12 8v4" /><path d="M12 16h.01" /></svg>';
            alert('Error: Jam keberangkatan tidak boleh kosong!');
        }else{
            error_waktu.textContent = '';
            icon_waktu.innerHTML = '';
        }
        if (tujuan == '') {
            error_tujuan.textContent = 'Jam pemberangkatan tidak boleh kosong!';
            icon_tujuan.innerHTML = ' <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M12 8v4" /><path d="M12 16h.01" /></svg>';
            alert('Error: Tujuan Anda tidak boleh kosong');
        }else{
            error_tujuan.textContent = '';
            icon_tujuan.innerHTML = '';
        }
        if (tiket == '') {
            error_jumlah.textContent = 'Jam pemberangkatan tidak boleh kosong!';
            icon_jumlah.innerHTML = ' <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M12 8v4" /><path d="M12 16h.01" /></svg>';
            alert('Error: Jumlah tiket tidak boleh kosong!');
        }else{
            error_jumlah.textContent = '';
            icon_jumlah.innerHTML = '';
        }
        if (nama_pelanggan != namap || email != emailp || jam_keberangakatan != jamp || tujuan != tujuanp || tiket != tiketp) {
            alert('Error: Data tidak valid! \nMohon periksa kembali dan pastikan kolom terisi dengan benar');
        }
    }

} 