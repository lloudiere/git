function sendMail(form) {
    const nom = form.name.value;
    const mail = form.mail.value;
    const tel  = form.telephone.value;
    const message = form.message.value;

    const mailtoLink = `mailto:lloudiere@gmail.com?subject=Message de ${name}&body=Email: ${mail}%0A%0ATéléphone: ${tel}%0A%0AMessage:%0A${encodeURIComponent(message)}`;
    window.location.href = mailtoLink;
    
    // Afficher le message de confirmation
    const confirmationMessage = document.getElementById('confirmationMessage');
    confirmationMessage.style.display = 'block';
    confirmationMessage.style.visibility =  'visible';

    // Réinitialiser le formulaire après l'envoi
    form.reset();


    return false; // Empêche le rechargement de la page
}