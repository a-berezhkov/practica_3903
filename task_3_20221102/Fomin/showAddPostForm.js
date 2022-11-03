let addPostBtn = document.getElementById("showAddPostForm");
let addPostForm = document.getElementById("addPostForm");

function showAddPostForm() {
    addPostBtn.classList.toggle("active-background");
    addPostForm.classList.toggle("show");
    // findCityBox.firstElementChild.value = "";
}