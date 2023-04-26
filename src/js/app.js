let body = new Vue({
    el: '.profile',
    data: {
        username: config.USERNAME,
        profile_picture: config.PICTURE,
        description: config.DESCRIPTION,
    }
});

let head = new Vue({
    el: "#vue-managed",
    data: {
        username: config.USERNAME,
    }
});