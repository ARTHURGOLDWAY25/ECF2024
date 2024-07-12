// DOMLoading visit-store-button
document.addEventListener('DOMContentLoaded', function(){
    const onlineStoreVisit = document.getElementById('visit-store-button');


    onlineStoreVisit.addEventListener('click', function(event){
        event.preventDefault();

        window.location.href = 'online-store-index.html';
    })
})