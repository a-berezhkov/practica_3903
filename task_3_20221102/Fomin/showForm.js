let addPostBtn = document.getElementById("showAddPostForm");
let addPostForm = document.getElementById("addPostForm");

let showEditProfileBtn = document.getElementById("showEditProfileBtn");
let editProfileForm = document.getElementById("editProfileForm");

function showAddPostForm() {
    addPostBtn.classList.toggle("active-background");
    addPostForm.classList.toggle("show");
}

function showEditProfileForm() {
    showEditProfileBtn.classList.toggle("active-background");
    editProfileForm.classList.toggle("show");
}