var snowEditor = document.querySelectorAll(".snow-editor");
snowEditor &&
snowEditor.forEach(function (e) {
    var o = {};
    1 == e.classList.contains("snow-editor") &&
    ((o.theme = "snow"),
        (o.modules = {
            toolbar: [
                [{ font: [] }, { size: [] }],
                ["bold", "italic", "underline", "strike"],
                [{ color: [] }, { background: [] }],
                [{ script: "super" }, { script: "sub" }],
                [{ header: [!1, 1, 2, 3, 4, 5, 6] }, "blockquote", "code-block"],
                [{ list: "ordered" }, { list: "bullet" }, { indent: "-1" }, { indent: "+1" }],
                ["direction", { align: [] }],
                ["link", "image", "video"],
                ["clean"],
            ],
        })),
        new Quill(e, o);
});
