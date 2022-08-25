window.onload = function () {
    const searchBy = document.querySelector('#search-by');
    const searchByI = document.querySelector('#search-byI');
    const categoryId = document.querySelector('#category_id');

    searchBy.addEventListener('change', (event) => {
        if(searchBy.value == 'title'){
            //searchByI.placeholder = 'Título y/o Descripción';
            categoryId.classList.add("hidden");
            searchByI.classList.remove("hidden");
            searchByI.classList.add("block");
        }
        else{
            //searchByI.placeholder = 'Categoría';
            searchByI.classList.add("hidden");
            categoryId.classList.remove("hidden");
            categoryId.classList.add("block");
        }
    });

    const params = window.location.search;

    if(params) {       
        const a = document.querySelector("#export-excel");
        a.href = a.href + params;
    }

}