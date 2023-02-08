let editBtn = document.querySelectorAll('.edit');
let editField = document.querySelector('.update_user');
let editing = document.querySelector('.editing_user');


editBtn.forEach(btn => {
    btn.addEventListener('click', function () {
        editField.value = this.dataset.id
        editing.textContent = '';
        editing.textContent = 'Реадктируется пользователь # '+this.dataset.key;
    })
})
