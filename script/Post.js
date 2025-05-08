const postForm = document.getElementById('post-form');
const clearButton = document.getElementById('clear-button');
const guestbookList = document.getElementById('guestbook-list');

postForm.addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(postForm);
    formData.append('action', 'submit');

    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            guestbookList.innerHTML = xhr.responseText;
            postForm.reset();
        }
    };

    xhr.open('POST', '../database/Guestbookdb.php', true);
    xhr.send(formData);
});

clearButton.addEventListener('click', function(e) {
    e.preventDefault();

    const formData = new FormData();
    formData.append('action', 'clear');

    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            guestbookList.innerHTML = "";
            postForm.reset();
        }
    };

    xhr.open('POST', '../database/Guestbookdb.php', true);
    xhr.send(formData);
});
