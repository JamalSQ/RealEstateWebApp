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
