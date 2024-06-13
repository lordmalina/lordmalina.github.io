document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    if (name && email && message) {
        alert('Děkujeme za vaši zprávu!');
        // Zde můžete přidat kód pro odeslání formuláře na server, pokud máte backend
        document.getElementById('contact-form').reset();
    } else {
        alert('Vyplňte prosím všechna pole.');
    }
});
