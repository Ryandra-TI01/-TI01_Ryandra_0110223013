function rupiahtodollar() {
    let inputdollar = document.getElementById('dollar').value

    let nilaidollartorupiah = inputdollar*14650
    console.log(nilaidollartorupiah);
    hasilrupiah.innerHTML = 'Rp '+nilaidollartorupiah
    hasildollar.innerHTML = '$ '+inputdollar
}