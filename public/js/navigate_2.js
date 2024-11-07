document.addEventListener('DOMContentLoaded', function() {
    const navigateToDisplayFlex = document.getElementById('navigate-directory');

    if (navigateToDisplayFlex) {
        navigateToDisplayFlex.addEventListener('click', function(event) {
            event.preventDefault();

            fetch("js/projects.json")
                .then(response => {
                    if (!response.ok) {
                        throw new Error("Failed to fetch JSON");
                    }
                    return response.json();
                })
                .then(data => {
                    const currentPath = window.location.pathname;
                    const currentPage = currentPath.includes("index.html") ? "ZOO_PROJECT" : "DISPLAYFLEXFOOTER";
                    const targetPage = currentPage === "ZOO_PROJECT" ? "DISPLAYFLEXFOOTER" : "ZOO_PROJECT";

                    const target = data.find(projects => projects.name === targetPage);

                    if (target) {
                        window.location.href = target.url;
                    } else {
                        console.error("Target project not found");
                    }
                })
                .catch(error => {
                    console.error("Error:", error.message);
                });
        });
    } else {
        console.error('Element with ID "navigate-directory" not found');
    }
});

