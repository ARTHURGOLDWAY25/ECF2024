document.addEventListener('DOMContentLoaded', function() {
    const navigateToFolder = document.getElementById('navigate-directory');

    navigateToFolder.addEventListener('click', function(event) {
        event.preventDefault();

        function navigate(currentProject, targetProject, page) {
            if (currentProject === 'ZOO_PROJECT' && targetProject === 'DISPLAYFLEXFOOTER') {
                window.location.href = './DISPLAYFLEXFOOTER/' + page;
            } else if (currentProject === 'DISPLAYFLEXFOOTER' && targetProject === 'ZOO_PROJECT') {
                window.location.href = '../' + page;
            } else {
                console.error('page load failed');
            }
        }

        const currentProject = window.location.pathname.includes('DISPLAYFLEXFOOTER') ? 'DISPLAYFLEXFOOTER' : 'ZOO_PROJECT';
        const targetProject = currentProject === 'ZOO_PROJECT' ? 'DISPLAYFLEXFOOTER' : 'ZOO_PROJECT';

        navigate(currentProject, targetProject, 'index.html');
    });
});






