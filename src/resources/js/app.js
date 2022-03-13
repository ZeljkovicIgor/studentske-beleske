require("./bootstrap");

import Alpine from "alpinejs";
import app from "./datepicker";

window.Alpine = Alpine;

Alpine.data("modalDialog", () => ({
    openModal: false,
    hrefModal: "",
    elementTitle: "",

    modalBtn(hrefModal = "", elementTitle = "") {
        this.openModal = true;
        this.hrefModal = hrefModal;
        this.elementTitle = elementTitle;
    },
}));

Alpine.data("quillField", () => ({
    quillSubmit(refs) {
        var quill = new Quill("#editor");
        refs.contentField.value = quill.root.innerHTML;
    },
}));

Alpine.data("datepicker", app);

Alpine.start();
