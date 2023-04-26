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
        tag: config.TAG,
        logo: config.PICTURE,
        description: config.DESCRIPTION,
        socials: config.SOCIAL,
    }
});

let projects = new Vue({
    el: '.projets',
    data: {
        projets: config.PROJECTS
    }
});