const myElement = document.getElementById('buttons');
for (const child of myElement.children) {
    var random = Math.random() * (360 - 0) + 0;
    child.style.transform = `rotate(${random}deg)`
    child.style.color = '#' + (Math.random() * 0xFFFFFF << 0).toString(16)
}

document.getElementById('image').style.transform = Math.random() * (360 - 0) + 0;

document.querySelectorAll(".survol").forEach(element => {
    element.onmouseover = function() {
        var random = Math.random() * (150 - 1) + 1
        element.style.color = '#' + (Math.random() * 0xFFFFFF << 0).toString(16)
        element.style.fontSize = `${random}px`
    }
    element.onmouseout = function() {
        element.style.color = '#' + (Math.random() * 0xFFFFFF << 0).toString(16)
        element.style.fontSize = `${random}px`
    };
})