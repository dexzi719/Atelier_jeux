function effacerTab() {
    const tbody = document.querySelector("#monTableau tbody");
    if (tbody) {
        tbody.innerHTML = "";
    }
}