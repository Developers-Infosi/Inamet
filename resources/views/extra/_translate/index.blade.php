<style>
#google_translate_element {
    visibility: hidden; /* permite o carregamento do tradutor */
    height: 0;
}

.goog-te-banner-frame {
    display: none !important;
}

body {
    top: 0 !important;
}
</style>

<div id="google_translate_element"></div>

<script type="text/javascript">
    var comboGoogleTradutor = null;

    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'pt',
            includedLanguages: 'pt,en,ru,fr,zh-CN,de,es,it,ar,sw',
            layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
        }, 'google_translate_element');

        // espera até o widget estar carregado
        var interval = setInterval(function() {
            var combo = document.querySelector('.goog-te-combo');
            if (combo) {
                comboGoogleTradutor = combo;
                clearInterval(interval);
            }
        }, 500);
    }

    function changeEvent(el) {
        if (el.fireEvent) {
            el.fireEvent('onchange');
        } else {
            var evObj = document.createEvent('HTMLEvents');
            evObj.initEvent('change', false, true);
            el.dispatchEvent(evObj);
        }
    }

    function trocarIdioma(sigla) {
        if (comboGoogleTradutor) {
            comboGoogleTradutor.value = sigla;
            changeEvent(comboGoogleTradutor);
        } else {
            console.warn('Combo ainda não carregada');
        }
    }
</script>

<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
