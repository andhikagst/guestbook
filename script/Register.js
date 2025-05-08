
document.getElementById('registerForm').addEventListener('submit', function(e) {
    e.preventDefault()
    console.log('masuk ke fungsi')

    const formData = new FormData(this)
    const messageArea = document.getElementById('messageArea')

    fetch('../database/Registerdb.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        messageArea.innerHTML = ''
        messageArea.innerHTML = data
    })
    .catch(error => console.error('Error: ', error))
})