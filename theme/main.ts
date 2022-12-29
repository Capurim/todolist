window.addEventListener("load", () => {
  document.querySelectorAll(".notification").forEach((a) => {
    setTimeout(() => {
      a.setAttribute("style", "opacity:0");
      setTimeout(() => a.remove(), 500);
    }, 3500);
  });
});
