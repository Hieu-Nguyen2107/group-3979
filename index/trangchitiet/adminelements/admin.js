window.onload = function(){
    const inputElement = document.querySelector('#pimage');
    const resultElement = document.querySelector('.preview');

    inputElement.addEventListener("change",function(e){
        const files = e.target.files;
        const file = files[0];

        const fileReader = new FileReader();
        fileReader.readAsDataURL(file);
        fileReader.onload = function(){
            const url = fileReader.result
            resultElement.insertAdjacentHTML(
            'beforeend',
            `<img src="${url}" alt="${file.name}" class="preview-img" />`
            )
        }
    });
}