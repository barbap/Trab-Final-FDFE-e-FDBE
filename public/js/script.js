function e(e, parent, callback) {
    return parent.addEventListener(e, callback);
}

function query(tag) {
    return document.querySelector(tag);
}

function init() {
    fetch("/app/curso")
    .then((response) => response.json())
    .then((response) => {
        let html = "";
        for(let i = 0; i < response.length; i++) {
            html +=
            "<div class=\"course-col\">"
                + "<h3>" + response[i].Nome + "</h3>"
                + "<p>" + response[i].Descricao + "</p>"
            + "</div>";
        }
        query("#cursos").innerHTML = html;
    });
}

e("DOMContentLoaded", document, init);