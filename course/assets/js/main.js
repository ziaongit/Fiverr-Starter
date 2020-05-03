var b = 0;
b++;
function dragStart001(event) {
    event.dataTransfer.setData("choice001", event.target.id);
}

function dragStart002(event) {
    event.dataTransfer.setData("choice002", event.target.id);
}

function dragStart003(event) {
    event.dataTransfer.setData("choice003", event.target.id);
}

function dragStart004(event) {
    event.dataTransfer.setData("choice004", event.target.id);
}

function dragStart005(event) {
    event.dataTransfer.setData("choice005", event.target.id);
}

function allowDrop001(event) {
    event.preventDefault();
}

function allowDrop002(event) {
    event.preventDefault();
}

function allowDrop003(event) {
    event.preventDefault();
}

function allowDrop004(event) {
    event.preventDefault();
}

function allowDrop005(event) {
    event.preventDefault();
}

function drop006(event) {
    var data = event.dataTransfer.getData("choice001");
    event.target.appendChild(document.getElementById(data));
    score001.innerHTML = b++;
    place001.innerHTML = "<img src='assets/images/Assembly1.png' />";
}

function drop007(event) {
    var data = event.dataTransfer.getData("choice002");
    event.target.appendChild(document.getElementById(data));
    score001.innerHTML = b++;
    place002.innerHTML = "Image 2";
}

function drop008(event) {
    var data = event.dataTransfer.getData("choice003");
    event.target.appendChild(document.getElementById(data));
    score001.innerHTML = b++;
    place003.innerHTML = "Image 3";
}

function drop009(event) {
    var data = event.dataTransfer.getData("choice004");
    event.target.appendChild(document.getElementById(data));
    score001.innerHTML = b++;
    place004.innerHTML = "Image 4";
}

function drop010(event) {
    var data = event.dataTransfer.getData("choice005");
    event.target.appendChild(document.getElementById(data));
    score001.innerHTML = b++;
    place005.innerHTML = "Image 5";
}

function drop001(event) {
    event.preventDefault();
}

function drop002(event) {
    event.preventDefault();
}

function drop003(event) {
    event.preventDefault();

}

function drop004(event) {
    event.preventDefault();
}

function drop005(event) {
    event.preventDefault();
}

function submit001() {
    if (b > 5) {
        message001.innerHTML = "Congratulations.";
    }
}