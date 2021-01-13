import axios from 'axios';


const Overlay = (length, element ) => {
    if(length && element.classList.contains('hidden')) {
        element.classList.remove('hidden');
    } else if(length === 0 && !element.classList.contains('hidden')) {
        element.classList.add('hidden')
    }
}






const handleSearch = (e, overlay) => {
    const store = e.target.value;

    Overlay(store.length, overlay)


    axios.get(`http://webshop.local/wp-json/wp/v2/store?search=${store}`)
    .then(function(response) {
        console.log(response.data);
        if(response.data.length) {
            overlay.innerHTML = `
            <ul>${response.data.map
                (result =>(
                    `<li>
                    ${result.title.rendered}
                        </li>`
                
                    )).join("")}
            </ul>`
            
        } else {
            overlay.innerHTML = 'Geen resultaten'
        }

    })
    .catch(function(error) {
        alert(error)
    });
}





document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.querySelector('#js-search');
    const overlay = document.querySelector('#results');


    if(searchInput) {
        searchInput.addEventListener('input', e =>handleSearch(e,overlay));
    }
})