document.addEventListener('DOMContentLoaded', function(){

    const navigateDashboard = document.getElementById("user-dashboard")

    if(navigateDashboard){
        navigateDashboard.addEventListener('click', function(event){
            event.preventDefault()

            fetch("js/dashboard.json")
                .then(response=>{
                    if(!response.ok){
                        throw new Error('Failed to fetch json.');
                    }

                    return response.json()
                })
                .then(data => {
                    const currentPath = window.location.pathname;
                    const currentPage = currentPath.includes("index.html") ? "ECF2024-main" : "UserAuth"
                    const targetPage = currentPage === "ECF2024-main" ? "UserAuth" : "ECF2024-main";

                    const target = data.find(projects => projects.name === targetPage);

                    if(target){
                        window.location.href=target.url;
                    } else{
                        return console.error('Target project not found.');  
                    }

                })

                .catch(error=>{
                    console.error("error", error)
                })
        })

    } else{
        console.error("Element with id user-dashboard not found.")
    }
    
})