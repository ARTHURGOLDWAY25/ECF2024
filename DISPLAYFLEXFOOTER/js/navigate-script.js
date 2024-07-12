// navigation code javascript
document.addEventListener('DOMContentLoaded', function() {
    const hoursAndLocationHeading = document.getElementById('hours-and-location-main');

    hoursAndLocationHeading.addEventListener('click', function(event) {
        event.preventDefault();

        window.location.href = 'location-index.html';
          
    });

    const shoppingAndDiningContainer = document.getElementById('shopping-dining-container-main');
    shoppingAndDiningContainer.addEventListener('click', function(event){
        event.preventDefault();

        window.location.href = 'Shopping-Dining.html';
    })

    // Add similar event listeners for other links if needed
});

