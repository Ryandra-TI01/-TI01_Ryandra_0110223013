function jumlah2bilangan() {
    let bilangan1 = parseInt(document.getElementById('bilangan1').value, 10);
    let bilangan2 = parseInt(document.getElementById('bilangan2').value, 10);

    let jawaban2bilangan = bilangan1+bilangan2
    let jawaban = document.getElementById('jawaban').value = jawaban2bilangan
}