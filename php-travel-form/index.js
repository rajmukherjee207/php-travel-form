document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const submitMsg = document.querySelector(".submitMsg");

    // Hide the success message after 3 seconds
    if (submitMsg) {
        setTimeout(() => {
            submitMsg.style.display = "none";
        }, 3000);
    }

    // Basic form validation before submission
    form.addEventListener("submit", function (event) {
        const name = document.getElementById("name").value.trim();
        const age = document.getElementById("age").value.trim();
        const gender = document.getElementById("gender").value.trim();
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("phone").value.trim();

        if (!name || !age || !gender || !email || !phone) {
            alert("Please fill in all required fields.");
            event.preventDefault(); // Stop form submission
        }
    });

    // Add focus effect to input fields
    const inputs = document.querySelectorAll("input, textarea");
    inputs.forEach((input) => {
        input.addEventListener("focus", function () {
            this.style.borderColor = "purple";
        });

        input.addEventListener("blur", function () {
            this.style.borderColor = "black";
        });
    });
});
