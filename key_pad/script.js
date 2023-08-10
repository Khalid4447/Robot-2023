document.getElementById("forward").addEventListener("click", function() {
    sendButtonPress("forward");
});

document.getElementById("backward").addEventListener("click", function() {
    sendButtonPress("backward");
});

document.getElementById("left").addEventListener("click", function() {
    sendButtonPress("left");
});

document.getElementById("right").addEventListener("click", function() {
    sendButtonPress("right");
});

function sendButtonPress(button) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "process_button.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log("Button press logged successfully.");
            } else {
                console.error("Error logging button press.");
            }
        }
    };
    xhr.send("button=" + encodeURIComponent(button));
}

