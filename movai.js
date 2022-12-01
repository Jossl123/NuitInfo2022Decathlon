const myElement = document.getElementById('buttons');
for (const child of myElement.children) {
    var random = Math.random() * (360 - 0) + 0;
    child.style.transform = `rotate(${random}deg)`
}