import Nabvar from "./components/Nabvar";
import AOS from 'aos';

new Nabvar();

AOS.init({
    easing: 'ease-in-out',
    duration: 500,
    once: true,
});
