document.addEventListener('DOMContentLoaded', function() {
    const reverseNavigate = document.querySelector(".visit-zoo");

    if (reverseNavigate) {
        reverseNavigate.addEventListener("click", function(event) {
            event.preventDefault();

            fetch("js/reverse_navigate.json")
                .then(response => {
                    if (!response.ok) {
                        throw new Error("Failed to fetch JSON");
                    }
                    return response.json();
                })
                .then(data => {
                    const currentPath = window.location.pathname;
                    const currentPage = currentPath.includes("index.html") ? "DISPLAYFLEXFOOTER" : "ZOO_PROJECT";
                    const targetPage = currentPage === "DISPLAYFLEXFOOTER" ? "ZOO_PROJECT" : "DISPLAYFLEXFOOTER";

                    const target = data.find(project => project.name === targetPage);

                    if (target) {
                        window.location.href = target.url;
                    } else {
                        console.error("Target page could not be found.");
                    }
                })
                .catch(error => {
                    console.error("Error:", error.message);
                });
        });
    } else {
        console.error('Element with ID "visit-zoo" not found');
    }
});

