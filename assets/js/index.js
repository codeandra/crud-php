// alert success 5 seconds

window.onload = function() {
    var alert = document.getElementById('message');
    if (alert) {
        setTimeout(function() {
            alert.style.display = 'none';
        }, 3000); 
    }
};