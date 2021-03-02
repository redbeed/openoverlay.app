import Nabvar from "./components/Nabvar";
import AOS from 'aos';

import hljs from 'highlight.js';

import hljsJavascript from 'highlight.js/lib/languages/javascript';
import hljsBash from 'highlight.js/lib/languages/bash';
import hljsPhp from 'highlight.js/lib/languages/php';
import hljsIni from 'highlight.js/lib/languages/ini';
import hljsShell from 'highlight.js/lib/languages/shell';

hljs.registerLanguage('bash', hljsBash);
hljs.registerLanguage('javascript', hljsJavascript);
hljs.registerLanguage('php', hljsPhp);
hljs.registerLanguage('dotenv', hljsIni);
hljs.registerLanguage('shell', hljsShell);
hljs.highlightAll();

new Nabvar();

AOS.init({
    easing: 'ease-in-out',
    duration: 500,
    once: true,
});
