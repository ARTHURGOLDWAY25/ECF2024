// forward-navigation.js

document.addEventListener('DOMContentLoaded', function() {
    // Handle navigation to Visitor Feedback
    const navigateToUserFeedback = document.getElementById("visitor-feedback");
    if (navigateToUserFeedback) {
        navigateToUserFeedback.addEventListener('click', function(event) {
            event.preventDefault();

            // Fetch JSON data
            fetch("js/projects_dynamic.json")
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    const currentPath = window.location.pathname;
                    const currentProject = currentPath.includes("index.html")
                        ? "ZOO_PROJECT"
                        : "Visitor-Feedback";

                    const targetProject = currentProject === "ZOO_PROJECT"
                        ? "Visitor-Feedback"
                        : "ZOO_PROJECT";

                    // Find the target project from the data
                    const target = data.find(project => project.name === targetProject);

                    if (target) {
                        // Navigate to the URL of the target project
                        window.location.href = target.url;
                    } else {
                        console.error('Target project not found');
                    }
                })
                .catch(error => {
                    console.error('Error fetching the JSON file:', error);
                });
        });
    }

});

