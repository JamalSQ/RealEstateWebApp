// Custome Toast

function showToast(message, type = "success") {
    // Create a new div element for the toast
    const toast = document.createElement("div");
    toast.classList.add("toast", `toast-${type}`);

    // Set the message inside the toast
    toast.textContent = message;

    console.log("the message is here " + message);

    // Append the toast to the container
    document.getElementById("toast-container").appendChild(toast);

    // Trigger the animation to show the toast
    setTimeout(() => {
        toast.classList.add("show");
    }, 10);

    // Play a sound based on the type of toast using the Audio API
    playToastSound(type);

    // Automatically hide the toast after 3 seconds
    setTimeout(() => {
        toast.classList.add("hide");
    }, 3000);

    // Remove the toast from the DOM after the animation is complete
    setTimeout(() => {
        toast.remove();
    }, 3500);
}

// Function to play sound based on the toast type
function playToastSound(type) {
    let sound;

    // Define the sound file for each toast type using the Audio API
    switch (type) {
        case "success":
            sound = new Audio("{{ asset('sounds/success.mp3') }}"); // Specify the path to your sound file
            break;
        case "error":
            sound = new Audio("{{ asset('sounds/error.mp3') }}"); // Specify the path to your sound file
            break;
        case "info":
            sound = new Audio("{{ asset('sounds/info.mp3') }}"); // Specify the path to your sound file
            break;
        case "warning":
            sound = new Audio("{{ asset('sounds/warning.mp3') }}"); // Specify the path to your sound file
            break;
        default:
            sound = new Audio("{{ asset('sounds/success.mp3') }}"); // Default sound if type is not recognized
            break;
    }

    // Play the sound
    sound.play().catch((err) => {
        console.error("Error playing the sound: ", err);
    });
}
