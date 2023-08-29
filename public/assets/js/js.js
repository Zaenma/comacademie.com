function getSubcategories(parentSelect, url, subSelect, table) {
    var categoryId = parentSelect.value;
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    var xhr = new XMLHttpRequest();
    xhr.open('POST', url + categoryId, true);
    xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var subcategories = JSON.parse(xhr.responseText);

            var enfantSelect = document.getElementById(subSelect);

            while (enfantSelect.firstChild) {
                enfantSelect.removeChild(enfantSelect.firstChild);
            }

            subcategories.forEach(subcategory => {
                const option = document.createElement('option');
                option.value = subcategory.id;
                option.textContent = subcategory.nom;
                enfantSelect.appendChild(option);

                console.log(option);
            });
        }
    };

    xhr.send();
}

