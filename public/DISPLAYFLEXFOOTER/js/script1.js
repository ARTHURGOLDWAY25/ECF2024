document.addEventListener('DOMContentLoaded', function() {
  const links = [
    'hours-and-location-link',
    'things-todo-link',
    'things-todo-link-main',
    'shopping-link',
    'shopping-dining-container',
    'accessibility-link',
    'guest-guidelines-link',
    'visitor-faqs-link'
  ];
  
  links.forEach(linkId => {
    const linkElement = document.getElementById(linkId);
    linkElement.addEventListener('click', function(event) {
      event.preventDefault();
      
      // Hide all containers
      const containers = document.querySelectorAll('.col-12');
      containers.forEach(container => {
        container.classList.add('d-none');
      });
      
      // Show the selected container
      switch (linkId) {
        case 'hours-and-location-link':
          document.getElementById('welcome-container').classList.remove('d-none');
          break;
        case 'things-todo-link':
          document.getElementById('things-todo-container').classList.remove('d-none');
          break;
        case 'things-todo-link-main':
            document.getElementById('things-todo-container').classList.remove('d-none');
            break;  
        case 'shopping-link':
          document.getElementById('shopping-dining-container').classList.remove('d-none');
          break;
        case 'accessibility-link':
          document.getElementById('accessibility-container').classList.remove('d-none');
          break;
        case 'guest-guidelines-link':
          document.getElementById('guest-guidelines-container').classList.remove('d-none');
          break;
        case 'visitor-faqs-link':
          document.getElementById('visitor-faqs-container').classList.remove('d-none');
          break;
        default:
          console.log('Link ID not recognized');
          break;
      }
    });
  });
});

// integrate the window.location.href navigation to allow navigation from header item

document.addEventListener('DOMContentLoaded', function(){
  const shoppingPageNavigation = document.getElementById('shopping-link');

  shoppingPageNavigation.addEventListener('click', function(event) {
    event.preventDefault();

    window.location.href = 'Shopping-Dining.html';
  })
})


