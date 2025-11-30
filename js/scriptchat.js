/*la div sort de coté*/
$(function () {
    // Sidebar toggle behavior
    $("#chatbot").on("click", function () {
      $("#sidebarch, #contentch").toggleClass("active");

      
    });
  });
  document.addEventListener('DOMContentLoaded', function() {
    const chatLog = document.getElementById('chatLog');
    const inputField = document.getElementById('userInput');
    const sendButton = document.getElementById('envcht');

    inputField.addEventListener('keydown', function(event) {
        if (event.keyCode === 13 && inputField.value.trim() !== '') {
            sendQuestion(inputField.value.trim());
            inputField.value = '';
        }
    });

    sendButton.addEventListener('click', function() {
        const userInput = inputField.value.trim();
        if (userInput !== '') {
            sendQuestion(userInput);
            inputField.value = '';
        }
    });

    window.sendQuestion = function(question) {
        updateChatLog(question, 'user');
        setTimeout(() => {
            let response = getResponse(question.toLowerCase());
            updateChatLog(response, 'bot');
        }, 1000);
    };

    function updateChatLog(message, sender) {
        const messageElement = document.createElement('p');
        messageElement.textContent = message;
        messageElement.classList.add(sender);
        chatLog.appendChild(messageElement);
        chatLog.scrollTop = chatLog.scrollHeight;
    }

    // Function to handle user input and provide responses
    function getResponse(userInput) {
        const responses = {
            "quis vous-êtes?":"je suis TripGénie l'assitante virtuel  de ce site ",
            "comment puis-je réserver un vol ?": "Pour réserver un vol, veuillez utiliser notre formulaire de recherche en haut de la page. Entrez vos villes de départ et d'arrivée, les dates de voyage, et le nombre de passagers, puis cliquez sur 'Chercher' pour voir les options disponibles.",
            "quelles méthodes de paiement acceptez-vous ?": "Nous acceptons plusieurs méthodes de paiement, y compris les cartes de crédit Visa, MasterCard, American Express, ainsi que PayPal et Apple Pay.",
            "puis-je annuler ma réservation et obtenir un remboursement ?": "Oui, vous pouvez annuler votre réservation. Si vous annulez plus de 24 heures avant le départ, vous pouvez obtenir un remboursement complet. Les annulations faites moins de 24 heures avant le départ peuvent être soumises à des frais d'annulation.",
            "comment puis-je modifier ma réservation ?": "Pour modifier votre réservation, accédez à la section 'Mes réservations' de notre site web, sélectionnez votre vol et cliquez sur 'Modifier'. Vous pourrez changer les dates, les destinations ou ajouter des services supplémentaires.",
            "quelles sont les restrictions de bagages pour mon vol ?": "Les restrictions de bagages varient selon la compagnie aérienne et la classe de billet. En général, vous avez droit à un bagage à main gratuit et un bagage enregistré. Veuillez vérifier les détails spécifiques de votre vol pour les restrictions exactes.",
            "y a-t-il des réductions pour les réservations de groupe ?": "Oui, nous offrons des tarifs de groupe avantageux pour les réservations de 10 personnes ou plus. Veuillez contacter notre service client pour plus d'informations et pour effectuer votre réservation de groupe.",
            "comment puis-je obtenir une facture pour ma réservation ?": "Vous pouvez obtenir une facture en vous connectant à votre compte sur notre site et en accédant à la section 'Mes réservations'. Sélectionnez votre réservation et vous aurez l'option de télécharger une facture.",
            "comment puis-je ajouter des services spéciaux à ma réservation ?": "Pour ajouter des services spéciaux comme des repas spécifiques, l'assistance pour personnes à mobilité réduite ou des services pour animaux de compagnie, veuillez contacter notre service clientèle ou ajouter ces services depuis la section 'Modifier ma réservation' sur notre site.",
            "que dois-je faire si mon vol est retardé ?": "En cas de retard de vol, nous vous informerons par SMS ou e-mail. Vous pouvez également consulter le statut de votre vol en temps réel sur notre site web dans la section 'Statut des vols'.",
            "est-il possible de réserver un vol de dernière minute ?": "Oui, vous pouvez réserver des vols de dernière minute. Veuillez vérifier la disponibilité sur notre site web ou contacter notre service client pour des options rapides."
        };

      
        if (!responses[userInput]) {
            return "Je suis désolé, je ne peux pas répondre à cette question. Merci de vous diriger vers la page Contact en cliquant sur le lien 'Contact' dans la barre de navigation. Un de nos agents recevra votre message et vous répondra dans les plus brefs délais.";
        }
        
            
    
    
        return responses[userInput];
    }
});

