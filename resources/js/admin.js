const login = document.getElementById("login");
const signIn = document.getElementById("signin");
const forms = document.querySelectorAll("form");
console.log(login, signIn);

signIn.addEventListener("click", () => {
    swapForm();
});

login.addEventListener("click", () => {
    swapForm();
});

function swapForm() {
    forms.forEach((form) => {
        form.classList.toggle("hidden");
        form.classList.toggle("grid");
    });
}
