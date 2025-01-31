let table = new DataTable("#myTable");

// Function to calculate land price
function calculatePrice() {
    // Get the input values
    const sqft = parseFloat(document.getElementById("sqft").value);
    const pricePerSqft = parseFloat(
        document.getElementById("pricePerSqft").value
    );

    // Check if both values are provided and valid
    if (isNaN(sqft) || isNaN(pricePerSqft) || sqft <= 0 || pricePerSqft <= 0) {
        document.getElementById("result").innerHTML =
            "Please enter valid values for both fields.";
        document.getElementById("result").style.color = "red";
        return;
    }

    // Calculate the total price
    const totalPrice = sqft * pricePerSqft;

    // Display the result
    document.getElementById("result").innerHTML =
        "Total Land Price: " +
        totalPrice.toLocaleString("en-US", {
            style: "currency",
            currency: "USD",
        });
    document.getElementById("result").style.color = "green";
}

// wizord form js
const steps = document.querySelectorAll(".step");
const stepIndicators = document.querySelectorAll(".step-indicator-item");
let currentStep = 1;

function showStep(stepIndex) {
    steps.forEach((step, index) => {
        if (index === stepIndex - 1) {
            step.classList.add("active");
        } else {
            step.classList.remove("active");
        }
    });

    stepIndicators.forEach((indicator, index) => {
        if (index < stepIndex) {
            indicator.classList.add("completed"); // Add completed class FIRST
        } else {
            indicator.classList.remove("completed");
        }

        if (index === stepIndex - 1) {
            indicator.classList.add("active");
        } else {
            indicator.classList.remove("active");
        }
    });
}

showStep(currentStep); // Initialize the first step

document.querySelectorAll(".nextBtn").forEach((button) => {
    button.addEventListener("click", () => {
        currentStep = Math.min(currentStep + 1, steps.length);
        showStep(currentStep);
    });
});

document.querySelectorAll(".prevBtn").forEach((button) => {
    button.addEventListener("click", () => {
        currentStep = Math.max(currentStep - 1, 1);
        showStep(currentStep);
    });
});

stepIndicators.forEach((indicator) => {
    indicator.addEventListener("click", () => {
        const step = parseInt(indicator.dataset.step);
        currentStep = step;
        showStep(currentStep);
    });
});

document
    .getElementById("propertyForm")
    .addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent form submission for demo

        // Here you would typically handle form submission, e.g., using AJAX
        alert("Form submitted!"); // Placeholder for submission logic
    });
