const d = new Date();
let day = d.getDate();
let hours = String(d.getHours()).padStart(2, '0');
let minutes = String(d.getMinutes()).padStart(2, '0');
let formattedDate = `${day}${hours}${minutes}`;

document.getElementById('filling-time').value = formattedDate;

function resetValue() {
    document.getElementById('filing-time').value = formattedDate;
    // let nilai = document.getElementById('filing-time');
    // nilai.value = '';
}