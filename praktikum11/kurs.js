function rupiahtodollar() {
    let inputrupiah = document.getElementById('rupiah').value

    let nilaidrupiahtodollar= inputrupiah/14650
    hasilrupiah.innerHTML = 'Rp '+inputrupiah
    hasildollar.innerHTML = '$ '+nilaidrupiahtodollar.toFixed(2)
}