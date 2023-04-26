let head = new Vue({
    el: "#vue-title",
    data: {
        logo: config.PICTURE,
        username: config.USERNAME,
    }
});

let body = new Vue({
    el: '.profile',
    data: {
        username: config.USERNAME,
        logo: config.PICTURE,
        description: config.DESCRIPTION,
        projets: config.PROJECTS,
        socials: config.SOCIAL,
    }
});