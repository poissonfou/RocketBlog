const SECTIONS = document.createElement("div");
SECTIONS.classList = "sections";
SECTIONS.innerHTML = ` <p id="home"><span class="green-stripe">|</span>Home</p>
<p>Sobre</p>
<p>Categorias</p>
<p>Contato</p>`;

let title = document.getElementsByClassName("title")[0];
let header_top = document.getElementById("header-top");
let header_bottom = document.getElementById("header-bottom");

if (window.innerWidth < 800) {
  header_bottom.insertAdjacentElement("beforeend", SECTIONS);
} else {
  header_top.insertBefore(SECTIONS, header_top.children[1]);
}

window.addEventListener("resize", () => {
  if (window.innerWidth < 800 && !header_bottom.children.length) {
    SECTIONS.remove();
    header_bottom.insertAdjacentElement("beforeend", SECTIONS);
  } else if (window.innerWidth > 800 && header_top.children.length == 2) {
    SECTIONS.remove();
    header_top.insertBefore(SECTIONS, header_top.children[1]);
  }
});
