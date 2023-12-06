function showbody(id,className){
    let parent = document.getElementById(id);
    var target = parent.querySelector('.'+className);

    target.style.display = "block";
}