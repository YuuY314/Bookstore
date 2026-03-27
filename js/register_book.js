const inputFile = document.querySelector("#cover_img");
const fileNameSpan = document.querySelector("#file_name");

inputFile.addEventListener("change", () => {
    const fileName = this.files[0]?.name || "Nenhum arquivo escolhido";

})

document.querySelector('input[type="file"]').addEventListener('change', function() {
  const fileName = this.files[0]?.name || "Nenhum arquivo escolhido";
  fileNameSpan.textContent = fileName;
});