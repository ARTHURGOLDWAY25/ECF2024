// ajax increment backend
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll(".view-button").forEach(button => {
        button.addEventListener('click', function() {
            const animalName = this.dataset.animal;

            fetch("./MONGODB_SCHEMA/increment.php", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ animal: animalName }),
            })
            .then(response => response.json())
            .then(data => {
                console.log("View count updated", data);
            })
            .catch(error => {
                console.error("Error:", error.message);
            });    
        });
    });
});
