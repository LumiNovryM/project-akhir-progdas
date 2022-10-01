let preveiwContainer = document.querySelector('.products-preview');
let previewBox = preveiwContainer.querySelectorAll('.preview');

document.querySelectorAll('.products-container .product').forEach(product => {
    product.onclick = () => {
        preveiwContainer.style.display = 'flex';
        let name = product.getAttribute('data-name');
        previewBox.forEach(preview => {
            let target = preview.getAttribute('data-target');
            if (name == target) {
                preview.classList.add('active');
            }
        });
    };
});

previewBox.forEach(close => {
    close.querySelector('.bx-x').onclick = () => {
        close.classList.remove('active');
        preveiwContainer.style.display = 'none';
    };
});

var icon =document.getElementById("icon");

icon.onclick = function () {
    document.body.classList.toggle("dark-theme");
    if(document.body.classList.contains("dark-theme")) {
        icon.src = "img/sun.png";
    }else {
        icon.src = "img/moon.png"
    }
}