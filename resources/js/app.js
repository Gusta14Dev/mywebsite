require('./bootstrap');

import TypeIt from "typeit";

new TypeIt("#typing", {
        speed: 250,
        waitUntilVisible: true,
        loop: true,
    })
    .type('WEB')
    .pause(1000)
    .delete(3)
    .type('PHP')
    .pause(1000)
    .delete(3)
    .type('LARAVEL')
    .pause(1000)
    .delete(7)
    .type('FULLSTACK')
    .pause(1000)
    .delete(9)
    .go();