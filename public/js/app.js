document.addEventListener('DOMContentLoaded', function () {
    function showContent(contentId) {
        const sections = document.querySelectorAll('.col-xl-8.col-lg-8.col-md-12.col-12');
        sections.forEach(section => section.style.display = 'none');
        const selectedSection = document.getElementById(contentId);
        if (selectedSection) {
            selectedSection.style.display = 'block';
        }
    }
    const links = document.querySelectorAll('.sidebar__common__input');
    links.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const contentId = this.getAttribute('data-content');
            showContent(contentId);
        });
    });
    showContent(1);
});
