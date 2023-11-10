const searchItem = document.querySelector('#searchInput');

const searchBtn = document.querySelector('button#searchBtn');

const produits = document.querySelectorAll('.produit');

const mainSection = document.querySelector('.main-section');

function search() {
    console.log( produit); 
    if (!searchItem.value) return; 
    mainSection.innerHTML = ''; 
    let match = false; 
    produit.forEach(produit => { 
        let title = produit.querySelector('.card-title').innerText.toLowerCase(); 
        if (title.includes(searchItem.value.toLowerCase())) { 
            mainSection.appendChild(produit) 
            match = true; 
        }
    });
    if (!match) {
        mainSection.innerHTML = < div class = "d-flex mx-auto" >
            <h3 class="text-danger text-center">No '${searchItem.value}' Found</h3>
        </div>;
    }
    
}


searchBtn.addEventListener('click', search);


document.addEventListener('keyup', (e) => {
    if (e.keyCode !== 13) return; 
    let isFocused = (document.activeElement === searchItem); 
    if (isFocused) {
        this.search(); 
    }
});