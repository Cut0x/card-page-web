# Template site card
Voici un petit template d'une page de card (un peu comme LinkTree) !

Besoin d'aide ? <a href="https://github.com/Cut0x/card-page-web#pour-de-laide">CLIQUE ICI !</a>

# Ressources
`Vue@2`, `BootstrapIcons@1.10.4`, `HTML5`, `CSS3`

# Comment configurer ?
Dirigez vous sur le fichier **config.js** (`./src/js/config.js`) et mettez y vos informations !
```js
const config = {
    USERNAME: "Username",
    TAG: "0000",
    DESCRIPTION: "Votre description",
    PICTURE: "url_de_votre_pdp",
    ID: "votre_id",
    
    PROJECTS:  [
        {
            id: "p1",
            img: "url_de_la_pdp_du_projet",
            url: "url_du_projet",
            name: "nom_du_projet"
        },
    ],

    SOCIAL: [
        {
            class_name: "bi bi-twitter",
            link: "https://twitter.com/discord"
        },
        {
            class_name: "bi bi-github",
            link: "https://github.com/discordjs"
        },
        {
            class_name: "bi bi-twitch",
            link: "https://twitch.tv/discord"
        },
    ]
};
```

# Pour de l'aide
Je vous invite à me contacter sur mon <a href="https://twitter.com/Cut0x_" target="_blank">Twitter</a> ou mon <a href="https://instagram.com/valloic_" target="_blank">Instagram</a> par message privé.

# Apperçu
![image](https://user-images.githubusercontent.com/71967731/234621798-6f3f8f61-9a3c-46a8-894f-ac3cede07d3a.png)
