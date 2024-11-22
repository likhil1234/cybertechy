

document.addEventListener('DOMContentLoaded', function() {
    // FAQ toggle functionality
    let faqItems = document.querySelectorAll('.faq-item button');
    faqItems.forEach(item => {
        item.addEventListener('click', function() {
            let answer = this.nextElementSibling;
            if (answer.style.display === "block") {
                answer.style.display = "none";
            } else {
                answer.style.display = "block";
            }
        });
    });

    // Law Information Buttons Click Event Listeners
    document.getElementById("hacking-btn").addEventListener("click", function() {
        showLawInfo("hacking-info");
    });

    document.getElementById("theft-btn").addEventListener("click", function() {
        showLawInfo("theft-info");
    });

    document.getElementById("fraud-btn").addEventListener("click", function() {
        showLawInfo("fraud-info");
    });

    document.getElementById("stalking-btn").addEventListener("click", function() {
        showLawInfo("stalking-info");
    });

    document.getElementById("harassment-btn").addEventListener("click", function() {
        showLawInfo("harassment-info");
    });

    document.getElementById("punishments-btn").addEventListener("click", function() {
        showLawInfo("punishments-info");
    });

    // Function to show the selected law content
    function showLawInfo(infoId) {
        // Hide all law contents
        var contents = document.querySelectorAll(".law-content");
        contents.forEach(function(content) {
            content.classList.remove("active");
        });

        // Show the selected law content
        document.getElementById(infoId).classList.add("active");
    }
      // Tips array
      const tips = [
        "Stay safe online by using strong passwords and changing them regularly!",
        "Be cautious about sharing personal information on social media.",
        "Regularly update your software to protect against vulnerabilities.",
        "Use two-factor authentication for an extra layer of security.",
        "Report suspicious emails or messages instead of engaging with them."
    ];

    // Function to change the tip on button click
    document.getElementById('getTipsButton').addEventListener('click', function() {
        const randomIndex = Math.floor(Math.random() * tips.length);
        document.getElementById('tipDisplay').textContent = tips[randomIndex];
    });

});
