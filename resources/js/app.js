import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const buttons = document.querySelectorAll(".cancel-button");
buttons.forEach((button) => {
    button.addEventListener("click", (event) => {
        //impedisco che il form venga inviato
        event.preventDefault();

        //prendo il titolo dell'item dal bottone
        const dataTitle = button.getAttribute("data-item-title");

        //prendo l'elemento con la modale
        const modal = document.getElementById("deleteModal");

        //creo nuova modale di bootstrap
        const bootstrapModal = new bootstrap.Modal(modal);

        //mostro la modale usando il metodo show
        bootstrapModal.show();

        //prendo l'elemento della modale dove voglio inserire il titolo
        const title = modal.querySelector("#modal-item-title");
        //inserisco il titolo nella modale
        title.textContent = dataTitle;

        //prendo dalla modale il bottone di conferma
        const buttonDelete = modal.querySelector("button.btn-primary");

        buttonDelete.addEventListener("click", (event) => {
            button.parentElement.submit();
        });
    });
});
