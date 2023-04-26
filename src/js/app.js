let head = new Vue({
    el: "#vue-managed",
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
        discord: config.DISCORD,
        socials: config.SOCIAL,
    }
});