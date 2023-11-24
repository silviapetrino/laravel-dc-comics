import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


const deleteButton = document.getElementById('delete-button');
console.log(deleteButton);

deleteButton.addEventListener('click', function(){
    alert('Do you really want to delete this?');
});
