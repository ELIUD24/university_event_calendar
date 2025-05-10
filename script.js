document.addEventListener("DOMContentLoaded", function () {
    let firstName = localStorage.getItem("user_first_name") || "Guest";
    document.getElementById("user-name").textContent = firstName;
});
