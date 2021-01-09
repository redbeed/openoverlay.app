export default class Nabvar {
    constructor() {
        this.button = document.getElementById('navbar-toggle');
        this.mobileMenu = document.getElementById('navbar-mobile-menu');

        this.initTrigger();
    }

    initTrigger() {
        this.button.addEventListener('click', () => {
            this.mobileMenu.classList.toggle('hidden');
        });
    }

}
