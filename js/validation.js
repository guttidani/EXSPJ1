const vezetekNev = document.getElementById('vezetekNev')
const keresztNev = document.getElementById('keresztNev')
const bruttoBer = document.getElementById('bruttoBer')
const adoAzon = document.getElementById('adoAzon')
const taj = document.getElementById('taj')
const bankSzamla = document.getElementById('bankSzamla')

form.addEventListener('submit', (e)=>{
    let messages = []
    if(vezetekNev.value === '' || vezetekNev.value == null){
        messages.push('A név kötelező')
    }
})