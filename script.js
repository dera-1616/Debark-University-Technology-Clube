function showSuccessMessage() {
    alert('Registration is Saved!');
    window.location.href = 'home.php';
}

function showErrorMessage(error) {
    alert('Error Registration: ' + error);
}