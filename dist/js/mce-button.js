(function() {
    tinymce.create('tinymce.plugins.cta_button', {
        init: function(ed, url) {
            ed.addButton('cta_button', {
                title: 'Indsæt CTA-knap',
                icon: false,
                classes: 'cta-icon-button',
                onclick: function() {
                    var ctaText = prompt("Indtast knaptekst:", "Book tid nu");
                    if (ctaText === null) return;

                    var ctaUrl = prompt("Indtast URL:", "https://bilglas.dk/forsikringsselskaber/gjensidige-forsikring");
                    if (ctaUrl === null) return;

                    var html = '<div class="btn-container">' +
                        '<a href="' + ctaUrl + '" class="btn bg-light-rose c-black-blue icon-after icon-bg-coral arrow-right-black-blue animate-right">' +
                        ctaText +
                        '</a>' +
                        '</div><p></p>';

                    ed.insertContent(html);
                }
            });
        },
        createControl: function(n, cm) {
            return null;
        }
    });

    tinymce.PluginManager.add('cta_button', tinymce.plugins.cta_button);
})();