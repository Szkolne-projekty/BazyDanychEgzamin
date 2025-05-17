function $(selector) {
    return document.querySelector(selector);
}

$(".script-4-text").addEventListener("click", function () {
    $(".script-4-text").textContent =
        "Znalazłeś ukryty rabat! Zadzwoń po więcej informacji";
});
