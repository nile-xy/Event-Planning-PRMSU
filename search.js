// Data containing texts to compare against
const originalTexts = [
    "This is the original text. It's unique.",
    "Another original text. Completely different from the first one.",
    // Add more original texts as needed
];

// Function to check plagiarism
function checkPlagiarism() {
    const textToCheck = document.getElementById("textToCheck").value.trim();
    if (textToCheck === "") {
        alert("Please enter text to check.");
        return;
    }

    // Check if the text matches any of the original texts
    for (const originalText of originalTexts) {
        if (compareTexts(textToCheck, originalText)) {
            document.getElementById("result").innerText = "Plagiarism detected!";
            return;
        }
    }

    document.getElementById("result").innerText = "No plagiarism detected.";
}

// Function to compare texts for similarity
function compareTexts(text1, text2) {
    // You would need to implement a suitable comparison algorithm here
    // This is a simple example just checking for exact match
    return text1 === text2;
}
