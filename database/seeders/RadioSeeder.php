<?php

namespace Database\Seeders;

use App\Models\Radio;
use Illuminate\Database\Seeder;

class RadioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "name" => "NCS 24/7",
                "url" =>
                    "https://stream-176.zeno.fm/ez4m4918n98uv?zs=3oZGF_f_Tbyup9CE7a-GIw",
                "icon" =>
                    "https://zeno.fm/_next/image/?url=https%3A%2F%2Fimages.zeno.fm%2F47sHHnIehZJ5eCN68MemCQGCI18awRN2aPXd5oSLNtY%2Frs%3Afit%3A240%3A240%2Fg%3Ace%3A0%3A0%2FaHR0cHM6Ly9zdHJlYW0tdG9vbHMuemVub21lZGlhLmNvbS9jb250ZW50L3N0YXRpb25zL2FneHpmbnBsYm04dGMzUmhkSE55TWdzU0NrRjFkR2hEYkdsbGJuUVlnSUNnLTdlaW9Rb01DeElPVTNSaGRHbHZibEJ5YjJacGJHVVlnSUR3N0xUQXpBb01vZ0VFZW1WdWJ3L2ltYWdlLz91cGRhdGVkPTE2NjExNTI4MzcwMDA.webp&w=128&q=100",
                "language" => "czech",
            ],
            [
                "name" => "Best Of Rock",
                "url" => "http://mp3stream4.abradio.cz/bestofrock128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Český Impuls",
                "url" => "http://icecast6.play.cz/cesky-impuls.mp3",
                "icon" =>
                    "https://mytuner.global.ssl.fastly.net/media/tvos_radios/4pn6k2gnfueh.jpg",
                "language" => "czech",
            ],
            [
                "name" => "Chat Rádio",
                "url" => "http://radio.chatujme.cz:8001/chatradio",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "City FM",
                "url" => "http://ice.abradio.cz/cityfm128.mp3",
                "icon" =>
                    "https://hitradiocity.cz/design/favicons/apple-icon-120x120.png",
                "language" => "czech,english",
            ],
            [
                "name" => "City Milenium",
                "url" => "http://ice.abradio.cz:8000/citymi128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Classic Praha",
                "url" => "http://icecast8.play.cz/classic128.mp3",
                "icon" => "http://www.classicpraha.cz/static/images/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "Color Music Radio",
                "url" => "http://icecast6.play.cz/color192.mp3",
                "icon" => "http://radiocolor.cz/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "Color Music Radio",
                "url" => "http://sc.ipip.cz:8206/;stream",
                "icon" => "https://radiocolor.cz/image/color_logo500x500.jpg",
                "language" => "czech,english",
            ],
            [
                "name" => "coloRadio+Zett",
                "url" => "http://studio.coloradio.org:8000/coloradio-a.mp3",
                "icon" =>
                    "https://coloradio.org/wp-content/uploads/2023/06/coloRadioZett-Geraet.jpg",
                "language" => "czech,deu,german,polish",
            ],
            [
                "name" => "Comedy Club R@dio DIANA",
                "url" => "https://westradio.cz/radio/8010/radio.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "COOP TIP Radio",
                "url" => "http://mp3stream4.abradio.cz:8000/coop128.mp3",
                "icon" => "https://radia.cz/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "COOP TIP Radio",
                "url" => "http://ice4.abradio.cz/coop128.mp3",
                "icon" => "https://radia.cz/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "Country Radio",
                "url" => "http://icecast2.play.cz:8000/country128aac",
                "icon" =>
                    "http://www.countryradio.cz/assets/favicon/apple-touch-icon.png",
                "language" => "czech",
            ],
            [
                "name" => "County",
                "url" => "http://icecast4.play.cz/country128.mp3",
                "icon" =>
                    "https://www.countryradio.cz/assets/favicon/apple-touch-icon.png",
                "language" => "czech",
            ],
            [
                "name" => "ČRo Dvojka",
                "url" => "http://icecast5.play.cz:8000/cro2-32.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "ČRo Dvojka",
                "url" => "http://icecast6.play.cz/cro2-128.mp3",
                "icon" =>
                    "https://dvojka.rozhlas.cz/sites/default/files/favicon_dvojka.ico",
                "language" => "czech",
            ],
            [
                "name" => "ČRo Dvojka",
                "url" => "http://icecast1.play.cz:8000/cro2-32aac",
                "icon" =>
                    "https://dvojka.rozhlas.cz/sites/default/files/favicon_dvojka.ico",
                "language" => "czech",
            ],
            [
                "name" => "ČRo Jazz",
                "url" => "http://amp.cesnet.cz:8000/cro-jazz.flac",
                "icon" =>
                    "https://jazz.rozhlas.cz/sites/default/files/favicon_jazz.ico",
                "language" => "czech",
            ],
            [
                "name" => "ČRo Ostrava",
                "url" => "https://rozhlas.stream/ostrava_high.aac",
                "icon" => "https://ostrava.rozhlas.cz/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "ČRo Plus",
                "url" => "https://rozhlas.stream/plus_mp3_128.mp3",
                "icon" => "http://plus.rozhlas.cz/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "ČRo Rádio Junior",
                "url" => "http://icecast3.play.cz:8000/crojuniormaxi32aac",
                "icon" => "https://junior.rozhlas.cz/sites/default/files/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "ČRo Radio Wave",
                "url" => "http://amp.cesnet.cz:8000/cro-radio-wave-256.ogg",
                "icon" =>
                    "https://wave.rozhlas.cz/sites/default/files/favicon_wave.ico",
                "language" => "czech",
            ],
            [
                "name" => "ČRo Radiožurnál",
                "url" => "http://icecast1.play.cz:8000/cro132aac",
                "icon" =>
                    "https://radiozurnal.rozhlas.cz/sites/default/files/favicon_radiozurnal.ico",
                "language" => "czech",
            ],
            [
                "name" => "ČRo Radiožurnál",
                "url" => "http://icecast8.play.cz/cro1-128.mp3",
                "icon" =>
                    "https://radiozurnal.rozhlas.cz/sites/default/files/favicon_radiozurnal.ico",
                "language" => "czech",
            ],
            [
                "name" => "ČRO Radiožurnál Sport",
                "url" => "https://rozhlas.stream/radiozurnal_sport_high.aac",
                "icon" =>
                    "https://portal.rozhlas.cz/sites/default/files/favicon_portal.ico",
                "language" => "czech",
            ],
            [
                "name" => "ČRo Vltava",
                "url" => "http://icecast2.play.cz:8000/cro3-32aac",
                "icon" =>
                    "https://vltava.rozhlas.cz/sites/default/files/favicon_vltava.ico",
                "language" => "czech",
            ],
            [
                "name" => "ČRo Vltava",
                "url" => "http://icecast5.play.cz/cro3-128.mp3",
                "icon" => "http://api.play.cz/static/radio_logo/t200/cro3.png",
                "language" => "czech",
            ],
            [
                "name" => "ČRo Wave",
                "url" => "https://rozhlas.stream/wave_mp3_256.mp3",
                "icon" => "https://api.play.cz/static/radio_logo/t200/crowave.png",
                "language" => "czech",
            ],
            [
                "name" => "ČRo Wave",
                "url" => "https://rozhlas.stream/wave_mp3_128.mp3",
                "icon" =>
                    "https://wave.rozhlas.cz/sites/default/files/favicon_wave.ico",
                "language" => "czech",
            ],
            [
                "name" => "Dance Club FM",
                "url" => "http://mp3stream4.abradio.cz/dance128.mp3",
                "icon" => "https://radia.cz/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "Dance Club Radio",
                "url" => "https://ice4.abradio.cz/dance128.mp3",
                "icon" => "https://radia.cz/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "DWG Radio Český",
                "url" => "https://server25530.streamplus.de/;stream.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Evropa 2",
                "url" => "https://ice.actve.net/fm-evropa2-128",
                "icon" => "https://m.actve.net/e2/favicon/favicon-32x32.png",
                "language" => "czech",
            ],
            [
                "name" => "Evropa 2",
                "url" => "https://ice.actve.net/fm-evropa2-128",
                "icon" => "https://m.actve.net/e2/favicon/apple-touch-icon.png",
                "language" => "czech",
            ],
            [
                "name" => "Evropa 2 CZ",
                "url" => "http://ice.actve.net/fm-evropa2-aac",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Evropa2 Youradio Flashbacky",
                "url" => "https://ice.actve.net/web-e2-flashback",
                "icon" => "https://m.actve.net/e2/favicon/apple-touch-icon.png",
                "language" => "czech",
            ],
            [
                "name" => "Expres FM",
                "url" => "http://icecast8.play.cz/expres128mp3",
                "icon" =>
                    "https://www.expresfm.cz/app/mu-plugins/expresfm/assets/favicons/apple-touch-icon.png",
                "language" => "czech,english",
            ],
            [
                "name" => "Expresradio",
                "url" => "http://icecast5.play.cz:8000/expres128mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Express FM",
                "url" => "http://icecast8.play.cz/expres128mp3",
                "icon" =>
                    "https://www.expresfm.cz/app/mu-plugins/expresfm/assets/favicons/apple-touch-icon.png",
                "language" => "czech",
            ],
            [
                "name" => "Fajn Fresh",
                "url" => "http://ice.abradio.cz/fajnfresh128.mp3",
                "icon" => "https://fajnradio.cz/design/favicons/apple-touch-icon.png",
                "language" => "czech",
            ],
            [
                "name" => "Fajn Fresh Radio",
                "url" => "http://mp3stream4.abradio.cz/fajnfresh64.mp3",
                "icon" => "https://radia.cz/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "Fajn Rádio",
                "url" => "http://ice.abradio.cz/fajn128.mp3",
                "icon" => "https://www.fajnradio.cz/design/favicons/mstile-70x70.png",
                "language" => "czech",
            ],
            [
                "name" => "Free Rádio 107,0 FM Brno",
                "url" => "http://icecast8.play.cz/freeradio128.mp3",
                "icon" => "http://www.freeradio.cz/img/ico_vcelka_32_32_6.png",
                "language" => "czech",
            ],
            [
                "name" => "Frekvence 1",
                "url" => "http://ice.actve.net/fm-frekvence1-aac",
                "icon" =>
                    "https://css.actve.net/frekvence1/img/favicons/mstile-150x150.png?v=jw63ApEelG",
                "language" => "czech",
            ],
            [
                "name" => "Frekvence 1 - Youradio Československé hity",
                "url" => "http://ice.actve.net/web-e2-csweb",
                "icon" =>
                    "https://www.frekvence1.cz/img/favicons/apple-touch-icon.png?v108",
                "language" => "czech",
            ],
            [
                "name" => "Frekvence 1 - Youradio Legendy",
                "url" => "http://ice.actve.net/web-f1-legendy",
                "icon" =>
                    "https://www.frekvence1.cz/img/favicons/apple-touch-icon.png?v130",
                "language" => "czech",
            ],
            [
                "name" => "Frekvence 1 - Youradio Osmdesátky",
                "url" => "http://ice.actve.net/web-80",
                "icon" =>
                    "https://www.frekvence1.cz/img/favicons/apple-touch-icon.png?v130",
                "language" => "czech",
            ],
            [
                "name" => "Fresh radio 103.6",
                "url" => "https://icecast.beatzone.cz/radio/8000/128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Helax 93,7",
                "url" => "http://ice.abradio.cz/helax128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "HEY rádio",
                "url" => "http://icecast3.play.cz/hey-radio128.mp3",
                "icon" => "http://heyradio.cz/favicon.ico",
                "language" => "czech,english",
            ],
            [
                "name" => "Hit FM Plus",
                "url" => "http://ice.abradio.cz:8000/fmplus64.aac",
                "icon" =>
                    "https://hitradiofmplus.cz/design/favicons/apple-icon-120x120.png",
                "language" => "czech",
            ],
            [
                "name" => "Hit PopRock",
                "url" => "http://ice.abradio.cz/hitpoprock128.mp3",
                "icon" => "https://radia.cz/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "HIT Rádio Orion",
                "url" => "http://ice.abradio.cz/orion128.mp3",
                "icon" => "http://www.hitradioorion.cz/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "Hitrádio City Brno",
                "url" => "http://ice.abradio.cz/magicbrno128.mp3",
                "icon" =>
                    "http://hitradiocitybrno.cz/design/favicons/apple-icon-120x120.png",
                "language" => "czech",
            ],
            [
                "name" => "hitradio City zona Lasky",
                "url" => "http://ice.abradio.cz/cityzl128.mp3",
                "icon" =>
                    "http://hitradiocity.cz/design/favicons/apple-icon-120x120.png",
                "language" => "czech",
            ],
            [
                "name" => "Hitrádio Contact",
                "url" => "https://ice3.abradio.cz/hitradiocontact128.mp3",
                "icon" =>
                    "https://hitradiocontact.cz/design/favicons/apple-icon-120x120.png",
                "language" => "czech",
            ],
            [
                "name" => "HITRADIO CORAX 95.9",
                "url" => "http://listen.radiocorax.de:8000/corax_256.mp3",
                "icon" =>
                    "https://i.ytimg.com/vi/0MM-iFPop38/hqdefault_1766000.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCcsJdy9W407TI7iBtyyS5F4X_k4w",
                "language" =>
                    "arabic,czech,english,french,german,persian,polish,russian,sorbian,turkish,ukrainian",
            ],
            [
                "name" => "Hitrádio Devadesátka",
                "url" => "http://ice.abradio.cz/hit90128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Hitrádio Faktor",
                "url" => "https://ice.abradio.cz/faktor128.mp3",
                "icon" => "https://cdn-profiles.tunein.com/s10545/images/logog.jpg",
                "language" => "czech",
            ],
            [
                "name" => "Hitrádio FM",
                "url" => "http://ice.abradio.cz/hitradiofm128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Hitrádio FM Crystal",
                "url" => "http://ice.abradio.cz/crystal128.mp3",
                "icon" =>
                    "https://hitradiofm.cz/design/favicons/apple-icon-120x120.png",
                "language" => "czech",
            ],
            [
                "name" => "Hitrádio Osmdesátka",
                "url" => "http://ice.abradio.cz/hit80128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Hitrádio PopRock",
                "url" => "http://ice.abradio.cz/hitpoprock128.mp3",
                "icon" => "https://radia.cz/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "Hitrádio Vysočina",
                "url" => "http://ice5.abradio.cz/hitvysocina128.mp3",
                "icon" =>
                    "http://hitradiovysocina.cz/design/favicons/favicon-32x32.png",
                "language" => "czech",
            ],
            [
                "name" => "Hot Dance Radio",
                "url" => "https://25323.live.streamtheworld.com/HOTDANCERADIO.mp3",
                "icon" =>
                    "https://hotdanceradio.com/wp-content/uploads/2022/03/cropped-new-art-hot-dance-radio-180x180.png",
                "language" => "czech",
            ],
            [
                "name" => "Impuls Ráááádio",
                "url" => "http://icecast5.play.cz/impuls128.mp3",
                "icon" => "https://1gr.cz/u/favicon/apple-touch-icon/impuls.png",
                "language" => "czech",
            ],
            [
                "name" => "Impuls Raaaadio 32k aac",
                "url" => "http://icecast1.play.cz:8000/impuls32aac",
                "icon" => "http://1gr.cz/u/favicon/apple-touch-icon/impuls.png",
                "language" => "czech",
            ],
            [
                "name" => "Kiss 98 FM",
                "url" => "http://icecast2.play.cz:8000/kiss128aac",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Kiss Delta",
                "url" => "http://icecast1.play.cz:8000/kissdelta192.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Kiss Hady",
                "url" => "http://icecast8.play.cz/kisshady128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Kiss proton",
                "url" => "http://icecast1.play.cz/kissproton128.mp3",
                "icon" => "http://kiss.cz/assets/favicon/apple-touch-icon.png",
                "language" => "czech",
            ],
            [
                "name" => "Kiss Publikum",
                "url" => "http://icecast1.play.cz:8000/kisspublikum128aac",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Kiss Radio",
                "url" => "http://icecast4.play.cz/kiss128.mp3",
                "icon" => "https://www.kiss.cz/assets/favicon/apple-touch-icon.png",
                "language" => "czech",
            ],
            [
                "name" => "Max Radio Online",
                "url" => "http://icecast9.play.cz/max-radio.mp3",
                "icon" =>
                    "https://test.maxradioonline.cz/wp-content/uploads/2023/05/cropped-max-180x180.png",
                "language" => "czech,slovak",
            ],
            [
                "name" => "METAL HEART RADIO ",
                "url" => "http://fr.radio-streamhosting.com:8000/metalheartradio128mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Metalománie",
                "url" => "http://ice.abradio.cz/metalomanie128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Netro Life Radio 100,8 FM",
                "url" => "https://icecast9.play.cz/netro-life-radio.mp3",
                "icon" =>
                    "https://www.netroliferadio.cz/files/resize/128/128/netro-favicon-top-0.png",
                "language" => "czech",
            ],
            [
                "name" => "Oldies Rádio",
                "url" => "http://ice.abradio.cz/oldiesradio128.mp3",
                "icon" =>
                    "https://www.oldiesradio.cz/wp-content/uploads/2021/01/cropped-oldies_favicon-180x180.png",
                "language" => "czech",
            ],
            [
                "name" => "Phonk Nation Radio",
                "url" => "https://radio.plainrock127.xyz/phonk/stream",
                "icon" => null,
                "language" => "czech,english",
            ],
            [
                "name" => "Pigy.cz – Disko Trysko",
                "url" => "http://ice.actve.net/web-pg-disko",
                "icon" =>
                    "https://www.pigy.cz/wp-content/themes/pigy/img/radio-diskotrisko-pigy.png",
                "language" => "czech",
            ],
            [
                "name" => "Pigy.cz – Písničky z pohádek",
                "url" => "http://ice.actve.net/web-pg-pisnicky",
                "icon" =>
                    "https://www.pigy.cz/wp-content/uploads/2021/05/cropped-android-chrome-384x384-1-139x139.png",
                "language" => "czech",
            ],
            [
                "name" => "Pigy.cz – Pohádky",
                "url" => "http://ice.actve.net/web-pg-pohadky",
                "icon" =>
                    "https://www.pigy.cz/wp-content/themes/pigy/img/radio-pohadky-pigy.png",
                "language" => "czech",
            ],
            [
                "name" => "povídka",
                "url" => "https://ice3.abradio.cz/povidka128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Queenradio.net",
                "url" => "http://stream.radiojar.com/4gw72qm8u68uv",
                "icon" => "http://www.queenradio.net/favicon.ico",
                "language" => "czech,english",
            ],
            [
                "name" => "RADIO 1",
                "url" => "http://icecast2.play.cz/radio1.mp3",
                "icon" => "http://www.radio1.cz/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "Radio 66",
                "url" => "http://ice3.abradio.cz/route128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Rádio 7",
                "url" => "http://icecast8.play.cz/radio7-128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Rádio 7 32kb",
                "url" => "http://icecast1.play.cz:8000/radio7cz32.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Rádio Applaus",
                "url" => "http://mp3stream3.abradio.cz/applaus128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Radio B",
                "url" => "https://stream.radiojar.com/9nayamd31tzuv?1660328034",
                "icon" => "https://www.radiob.cz//assets/favicon/apple-touch-icon.png",
                "language" => "czech",
            ],
            [
                "name" => "Radio Beat",
                "url" => "http://icecast2.play.cz/radiobeat128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Radio Beat",
                "url" => "http://icecast2.play.cz/radiobeat128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Rádio Beat (128 AAC)",
                "url" => "https://icecast2.play.cz/beat128aac",
                "icon" => "https://www.radiobeat.cz/img/logo@2x.png",
                "language" => "czech",
            ],
            [
                "name" => "Radio Blaník",
                "url" => "http://ice.abradio.cz/blanikfm64.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Rádio Blaník",
                "url" =>
                    "https://playerservices.streamtheworld.com/api/livestream-redirect/RADIO_BLANIK_128.mp3",
                "icon" =>
                    "https://radioblanik.cz/design/favicon/apple-icon-120x120.png",
                "language" => "czech",
            ],
            [
                "name" => "Rádio Blaník CZ Webové rádio",
                "url" => "http://ice.abradio.cz/blanikcz128.mp3",
                "icon" =>
                    "http://www.radioblanik.cz/design/favicon/apple-icon-120x120.png",
                "language" => "czech",
            ],
            [
                "name" => "Rádio Blaník Oldies",
                "url" => "https://ice.radia.cz/oldiesradio128.mp3",
                "icon" =>
                    "https://radioblanik.cz/design/favicon/apple-icon-120x120.png",
                "language" => "czech",
            ],
            [
                "name" => "Rádio Blaník živé",
                "url" => "http://ice.abradio.cz/blanikfm128.mp3",
                "icon" =>
                    "http://www.radioblanik.cz/design/favicon/apple-icon-120x120.png",
                "language" => "czech",
            ],
            [
                "name" => "Rádio Bonton",
                "url" => "http://ice.actve.net/fm-bonton-128",
                "icon" => "https://www.radiobonton.cz/favicons/apple-touch-icon.png",
                "language" => "czech",
            ],
            [
                "name" => "Radio Čas",
                "url" => "http://icecast6.play.cz/casradio128.mp3",
                "icon" =>
                    "https://casradio.cz/wp-content/themes/frontheme_woo/assets/img/logos/radio-cas5.png",
                "language" => "czech",
            ],
            [
                "name" => "Radio Cas Rock",
                "url" => "http://icecast6.play.cz/casrock128.mp3",
                "icon" =>
                    "https://casrock.cz/wp-content/themes/frontheme/assets/img/favicon/apple-touch-icon-120x120.png?v002=",
                "language" => "czech",
            ],
            [
                "name" => "Radio Cas Rock",
                "url" => "http://icecast6.play.cz/casrock128.mp3",
                "icon" =>
                    "https://casrock.cz/wp-content/themes/frontheme/assets/img/favicon/apple-touch-icon-120x120.png?v002=",
                "language" => "czech",
            ],
            [
                "name" => "Radio Čas Rock",
                "url" => "http://icecast6.play.cz/casrock128.mp3",
                "icon" =>
                    "https://casrock.cz/wp-content/themes/frontheme/assets/img/favicon/apple-touch-icon-120x120.png?v002=",
                "language" => "czech",
            ],
            [
                "name" => "Radio City FM",
                "url" => "http://ice.abradio.cz/cityfm128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Rádio Click & Country",
                "url" => "http://radio.clickandcountry.cz:8000/clickandcountry.mp3",
                "icon" =>
                    "https://www.clickandcountry.com/images/favicon/apple-icon-120x120.png",
                "language" => "czech",
            ],
            [
                "name" => "Rádio Dálnice",
                "url" => "http://icecast8.play.cz/radiodalnice.mp3",
                "icon" =>
                    "https://radiodalnice.cz/wp-content/uploads/2018/01/Logo-R%C3%A1dio-D%C3%A1lnice-18.png",
                "language" => "czech",
            ],
            [
                "name" => "Radio Dechovka 1233 Stredni Vlny",
                "url" => "http://icecast5.play.cz/dechovka128.mp3",
                "icon" => "http://api.play.cz/static/radio_logo/t200/radiodechovka.png",
                "language" => "czech",
            ],
            [
                "name" => "Radio Depeche Mode",
                "url" => "http://mp3stream4.abradio.cz/depeche128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Rádio Diana – Retro Club",
                "url" => "https://westradio.cz/radio/8000/radio.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Radio Dixie",
                "url" => "http://icecast8.play.cz/radiodixie192.mp3",
                "icon" => null,
                "language" => "czech,english",
            ],
            [
                "name" => "Rádio Dráťák",
                "url" => "http://dratak.cz:8000/dratak",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Radio Dychovka",
                "url" => "https://epanel.mediacp.eu:7661/stream",
                "icon" =>
                    "https://cdn.websupport.eu/odin/custom_error_pages/images/favicon.png",
                "language" => "czech,slovak",
            ],
            [
                "name" => "Rádio Energic",
                "url" => "https://icecast9.play.cz/energic.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Rádio Folk",
                "url" => "http://mp3stream2.abradio.cz:8000/folk320.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Radio FRM",
                "url" => "http://icecast1.play.cz/fajnrock128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Rádio Hády",
                "url" => "http://46.36.36.149:8000/live",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Radio Helax",
                "url" =>
                    "http://ice.abradio.cz:8000/helax128.mp3?type=.mp3/;stream.mp3",
                "icon" => "https://helax.cz/design/favicons/apple-icon-120x120.png",
                "language" => "czech",
            ],
            [
                "name" => "Radio Humor",
                "url" => "http://mp3stream4.abradio.cz:8000/humor128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Rádio humor 2",
                "url" =>
                    "https://playerservices.streamtheworld.com/api/livestream-redirect/RADIO_HUMOR.aac",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Radio Jazzinec",
                "url" => "http://ice3.abradio.cz/jazzinec128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Radio JIH Cimbalka",
                "url" => "http://icecast6.play.cz/jihcimbalka128.mp3",
                "icon" => "https://naladit.radiocimbalka.cz/icon-192x192.png?=v3",
                "language" => "czech",
            ],
            [
                "name" => "Rádio MB",
                "url" => "http://icecast3.play.cz/radiomb.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Radio Orlicko",
                "url" => "http://46.28.111.246/stream192.mp3",
                "icon" => "http://www.radioorlicko.cz/apple-touch-icon.png",
                "language" => "czech",
            ],
            [
                "name" => "Radio Ostravan",
                "url" => "http://icecast9.play.cz/radio-ostravan-256.mp3",
                "icon" => "http://www.radioostravan.cz/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "Rádio pohádka",
                "url" => "http://ice3.abradio.cz/pohadka128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Radio Ponte records",
                "url" => "http://ice3.abradio.cz/ponterec128.mp3",
                "icon" => "https://radioponterecords.cz/img/logo.png",
                "language" => "czech,english",
            ],
            [
                "name" => "Radio Proglas",
                "url" => "http://icecast2.play.cz/proglas128",
                "icon" => "http://icecast2.play.cz/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "Radio Prostor",
                "url" => "https://bcast.spmmedia.cz/prostor-mp3",
                "icon" => "https://radioprostor.cz/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "Rádio Relax",
                "url" => "http://icecast7.play.cz/relax128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Radio ROCK",
                "url" => "http://ice.abradio.cz/rockradio128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Radio Romper Čechoslovakia",
                "url" =>
                    "https://playerservices.streamtheworld.com/api/livestream-redirect/SAM05AAC415.aac",
                "icon" =>
                    "https://d1di2lzuh97fh2.cloudfront.net/files/24/241/241ygj.ico?ph=e7cd3d1306",
                "language" => "czech,slovak",
            ],
            [
                "name" => "Rádio Samson",
                "url" => "http://icecast8.play.cz/samsonfm128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Radio Sázava",
                "url" => "http://sc.ipip.cz:8224/;stream",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Radio SPIN 96.2 FM",
                "url" => "http://icecast-u2.play.cz:8000/spin128.mp3",
                "icon" =>
                    "https://www.radiospin.cz/assets/favicon/apple-touch-icon.png",
                "language" => "czech",
            ],
            [
                "name" => "Radio Timișoara 630 AM",
                "url" => "http://89.238.227.6:8352/",
                "icon" =>
                    "https://www.radiotimisoara.ro/wp-content/themes/radiotimisoara/images/favicons/favicon-96x96.png",
                "language" =>
                    "bulgarian,czech,german,hungarian,romani,romanian,serbian,slovak,ukrainian",
            ],
            [
                "name" => "Rádio Trojka",
                "url" => "http://12901.cloudrad.io:9306/live",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Radio Vaticana Čeština",
                "url" => "https://radio.vaticannews.va/stream-cs",
                "icon" =>
                    "https://www.vaticannews.va/etc/designs/vatican-news/release/library/main/images/favicons/apple-icon-120x120.png",
                "language" => "czech,latin",
            ],
            [
                "name" => "Radio Wave",
                "url" => "https://rozhlas.stream/wave_aac_32.aac",
                "icon" =>
                    "https://wave.rozhlas.cz/sites/default/files/favicon_wave.ico",
                "language" => "czech",
            ],
            [
                "name" => "Radio Wave",
                "url" => "http://rozhlas.stream/wave_mp3_256.mp3",
                "icon" => "http://api.play.cz/static/radio_logo/t200/crowave.png",
                "language" => "czech",
            ],
            [
                "name" => "Rádio Xaver",
                "url" => "https://icecast6.play.cz/radio-xaver.aac",
                "icon" => "https://radioxaver.cz/assets/img/Xradio-logo-x.svg",
                "language" => "czech",
            ],
            [
                "name" => "RETRO DJ RADIO - 128",
                "url" => "https://free.rcast.net/70814",
                "icon" =>
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5xJ9EZJOZcmcYPhidD1MZO_fYB4qnHamsyOA76xRbilYqyAmZomM_7HMFW7uqhgh0RA0&usqp=CAU",
                "language" => "czech",
            ],
            [
                "name" => "RETRO DJ Radio - HQ",
                "url" => "http://icecast1.play.cz/retrodjradio.mp3",
                "icon" => null,
                "language" => "czech,polish,slovak,slovenski,česky",
            ],
            [
                "name" => "RETRO DJ RADIO CZ",
                "url" => "https://free.rcast.net/70814.mp3",
                "icon" =>
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5xJ9EZJOZcmcYPhidD1MZO_fYB4qnHamsyOA76xRbilYqyAmZomM_7HMFW7uqhgh0RA0&usqp=CAU",
                "language" => "czech,slovak",
            ],
            [
                "name" => "ROCK MAX",
                "url" => "http://ice.abradio.cz/rockmax256.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Rock Radio",
                "url" =>
                    "https://playerservices.streamtheworld.com/api/livestream-redirect/ROCK_RADIO_128.mp3",
                "icon" => "https://rockovyradio.cz/design/img/logo.svg",
                "language" => "czech",
            ],
            [
                "name" => "Rock Rádio Šumava",
                "url" => "http://ice.abradio.cz/sumava128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Rock zábava",
                "url" => "http://mp3stream4.abradio.cz/rockzabava128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Rocková zábava",
                "url" => "http://ice.abradio.cz/rockzabava128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Rockzone",
                "url" => "http://icecast5.play.cz/rockzone128.mp3",
                "icon" => "http://www.rockzone.cz/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "RockZone 105,9 FM",
                "url" => "https://icecast5.play.cz/rockzone128.mp3",
                "icon" => "https://www.rockzone.cz/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "Signál Rádio",
                "url" => "http://icecast1.play.cz/signal128.mp3",
                "icon" =>
                    "http://www.signalradio.cz/assets/favicon/apple-touch-icon.png",
                "language" => "czech",
            ],
            [
                "name" => "Signál Rádio Brno",
                "url" => "http://icecast6.play.cz/signal-brno128.mp3",
                "icon" =>
                    "http://www.signalradio.cz/assets/favicon/apple-touch-icon.png",
                "language" => "czech",
            ],
            [
                "name" => "SKYROCK",
                "url" => "http://icecast8.play.cz/skyrock128.mp3",
                "icon" => "https://api.play.cz/static/radio_logo/t200/skyrock.png",
                "language" => "czech",
            ],
            [
                "name" => "svobodne-radio",
                "url" => "http://svobodneradio.radioca.st:8859/stream",
                "icon" => "http://www.svobodne-radio.cz/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "Svobodný vysílač",
                "url" => "http://stream.svobodny-vysilac.cz:8000/live.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Underground Radio",
                "url" => "http://icecast2.play.cz/Underground128.mp3",
                "icon" => "http://www.undergroundradio.cz/img/logo.png",
                "language" => "czech",
            ],
            [
                "name" => "WebRadio Epigon",
                "url" => "http://ice3.abradio.cz/epigon128.mp3",
                "icon" => null,
                "language" => "czech",
            ],
            [
                "name" => "Známka Punku",
                "url" => "https://ice.abradio.cz/znamkapunku128.mp3",
                "icon" => "https://radia.cz/favicon.ico",
                "language" => "czech",
            ],
            [
                "name" => "BB FM rádio",
                "url" => "http://stream.bbfm.sk/bbfm128.mp3",
                "icon" => "https://www.bbfm.sk/images/apple-icon-114x114.png",
                "language" => "slovak",
            ],
            [
                "name" => "Detské rádio",
                "url" => "https://stream.21.sk/detskeradio-192.mp3",
                "icon" => "https://detske.radio/apple-icon-120x120.png",
                "language" => "slovak",
            ],
            [
                "name" => "Detské Rádio",
                "url" => "http://stream.21.sk/detskeradio-192.mp3",
                "icon" => "https://www.detske.radio/favicon-32x32.png",
                "language" => "slovak",
            ],
            [
                "name" => "Dobré rádio",
                "url" => "http://stream.dobreradio.sk:8813/dobreradio.mp3",
                "icon" => "http://www.dobreradio.sk/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "Europa 2 ",
                "url" => "https://stream.bauermedia.sk/europa2.mp3",
                "icon" =>
                    "https://www.europa2.sk/wp-content/uploads/2023/05/cropped-favicon-128x128.png?w=128&h=128",
                "language" => "slovak",
            ],
            [
                "name" => "Fit Famili Rádio ",
                "url" => "https://solid1.streamupsolutions.com/proxy/utwrguip/stream",
                "icon" => "https://fitfamilyradio.com/templates/ja_podcast/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "Fit Famili Rádio ",
                "url" => "https://solid1.streamupsolutions.com/proxy/utwrguip/stream",
                "icon" => "https://fitfamilyradio.com/templates/ja_podcast/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "FRESH rádio",
                "url" => "https://icecast2.radionet.sk/freshradio.sk",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "Fun Radio",
                "url" => "http://stream.funradio.sk:8000/fun128.mp3",
                "icon" =>
                    "http://cdn.funradio.sk/img/logo/apple-icon-120x120.png?v=2022-05-26-1422",
                "language" => "slovak",
            ],
            [
                "name" => "Fun Radio  Chill",
                "url" => "https://stream.funradio.sk:8000/chill128.mp3",
                "icon" =>
                    "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.E65vroGDtTyTMl18lUuGuwHaHa%26pid%3DApi&f=1&ipt=8e1260db0157c0b572b4326122c7511e15bc8c6afb4e0423cd1b9bb620cf57f2&ipo=images",
                "language" => "slovak",
            ],
            [
                "name" => "Fun Radio 80&90",
                "url" => "http://stream.funradio.sk:8000/80-90-128.mp3",
                "icon" => "http://www.funradio.sk/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "Fun Radio CZ",
                "url" => "http://stream.funradio.sk:8000/cs128.mp3",
                "icon" =>
                    "http://cdn.funradio.sk/img/logo/apple-icon-120x120.png?v=2022-05-26-1422",
                "language" => "slovak",
            ],
            [
                "name" => "FUN RÁDIO DANCE",
                "url" => "http://stream.funradio.sk:8000/dance128.mp3",
                "icon" => "https://i.imgur.com/j51rcUO.png",
                "language" => "slovak",
            ],
            [
                "name" => "Fun Radio Dance",
                "url" => "http://stream.funradio.sk:8000/dance128.mp3",
                "icon" => "http://www.funradio.sk/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "FunRadio Live ",
                "url" => "http://stream.funradio.sk:8000/funpgm256.mp3",
                "icon" => "https://www.funradio.sk/img/logo.svg",
                "language" => "slovak",
            ],
            [
                "name" => "FunRadio Live (256kbps)",
                "url" => "https://stream.funradio.sk:8000/funpgm256.mp3",
                "icon" => "https://www.funradio.sk/img/logo.svg",
                "language" => "czech,english,hungarian,polish,slovak",
            ],
            [
                "name" => "G-Radio",
                "url" => "http://88.212.34.18:8050/mp3midband",
                "icon" => "http://gradio.sk/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "Hitrádio Slovakia",
                "url" => "https://hitradioslovakia.stream.laut.fm/hitradioslovakia",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "http://stream.infovojna.bz/live32",
                "url" => "http://stream.infovojna.bz/live32",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "http://stream.infovojna.bz/live32",
                "url" => "http://stream.infovojna.bz/live32",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "Info vojna",
                "url" => "http://stream.infovojna.bz/live",
                "icon" =>
                    "https://www.infovojna.bz/images/logos/android-icon-144x144.png",
                "language" => "slovak",
            ],
            [
                "name" => "INFOVOJNA",
                "url" => "http://stream.infovojna.bz/live",
                "icon" =>
                    "https://www.infovojna.bz/images/logos/android-icon-144x144.png",
                "language" => "slovak",
            ],
            [
                "name" => "INFOVOJNA",
                "url" => "http://stream.infovojna.bz/live",
                "icon" =>
                    "https://www.infovojna.bz/images/logos/android-icon-144x144.png",
                "language" => "slovak",
            ],
            [
                "name" => "Infovojna 128 kb/s",
                "url" => "http://stream.infovojna.bz/live",
                "icon" =>
                    "https://www.infovojna.bz/images/logos/android-icon-144x144.png",
                "language" => "slovak",
            ],
            [
                "name" => "Infovojna 128kb",
                "url" => "http://stream.infovojna.bz/live",
                "icon" =>
                    "https://www.infovojna.bz/images/logos/android-icon-144x144.png",
                "language" => "slovak",
            ],
            [
                "name" => "Kosice International ATC",
                "url" => "https://www.liveatc.net/play/lzkz.pls",
                "icon" => "https://www.liveatc.net/favicon.ico",
                "language" => "english,slovak",
            ],
            [
                "name" => "Max Radio Online",
                "url" => "http://icecast9.play.cz/max-radio.mp3",
                "icon" =>
                    "https://test.maxradioonline.cz/wp-content/uploads/2023/05/cropped-max-180x180.png",
                "language" => "czech,slovak",
            ],
            [
                "name" => "METALSCENA netRADIO",
                "url" => "https://listen.radioking.com/radio/263218/stream/308365",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "Pátria Rádió",
                "url" => "https://icecast.stv.livebox.sk/patria_128.mp3",
                "icon" => null,
                "language" => "hungarian,slovak",
            ],
            [
                "name" => "Radio 7",
                "url" => "https://play.radio7.sk/128",
                "icon" => "https://radio7.sk/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Aetter",
                "url" => "http://stream.aetter.sk:8000/aetter",
                "icon" =>
                    "https://aetter.sk/wp-content/uploads/2020/03/cropped-aetter_favicon_new-180x180.png",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Beta",
                "url" => "http://109.71.67.102:8000/beta_live_high.mp3",
                "icon" =>
                    "https://www.beta.sk/wp-content/uploads/2020/08/cropped-beta-radio-logo-512-180x180.png",
                "language" => "slovak",
            ],
            [
                "name" => "RÁDIO BETA - České a Slovenské hity",
                "url" => "http://109.71.67.102:8000/beta_cspop.mp3",
                "icon" => "https://i.imgur.com/JlQQvud.png",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Beta - České a Slovenské hity",
                "url" => "http://109.71.67.102:8000/beta_cspop.mp3",
                "icon" =>
                    "https://www.beta.sk/wp-content/uploads/2020/08/cropped-beta-radio-logo-512-180x180.png",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Beta - Hity 80\'s a 90\'s",
                "url" => "http://109.71.67.102:8000/beta_80a90.mp3",
                "icon" =>
                    "https://www.beta.sk/wp-content/uploads/2020/08/cropped-beta-radio-logo-512-180x180.png",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Beta - Hráme jubilantom",
                "url" => "http://109.71.67.102:8000/beta_jubilanti.mp3",
                "icon" =>
                    "https://www.beta.sk/wp-content/uploads/2020/08/cropped-beta-radio-logo-512-180x180.png",
                "language" => "slovak",
            ],
            [
                "name" => "RÁDIO BETA 80-90",
                "url" => "http://109.71.67.102:8000/beta_80a90.mp3",
                "icon" => "https://i.imgur.com/z9vmxbT.png",
                "language" => "slovak",
            ],
            [
                "name" => "RADIO BIBLIA SK",
                "url" => "http://radiobiblia.online:8000/stream.ogg",
                "icon" =>
                    "https://www.radiobiblia.online/wp-content/uploads/2018/06/cropped-biblia-1-270x270.png",
                "language" => "slovak",
            ],
            [
                "name" => "Radio Dychovka",
                "url" => "https://epanel.mediacp.eu:7661/stream",
                "icon" =>
                    "https://cdn.websupport.eu/odin/custom_error_pages/images/favicon.png",
                "language" => "czech,slovak",
            ],
            [
                "name" => "Radio Expres",
                "url" => "http://195.168.61.226:8000/96.mp3",
                "icon" =>
                    "https://www.expres.sk/wp-content/uploads/2015/06/cropped-favicon-1-128x128.png",
                "language" => "slovak",
            ],
            [
                "name" => "Radio Expres SK",
                "url" => "https://stream.expres.sk/128.mp3",
                "icon" =>
                    "https://www.expres.sk/wp-content/uploads/2015/06/cropped-favicon-1-128x128.png",
                "language" => "slovak",
            ],
            [
                "name" => "Radio Extra",
                "url" => "http://live.topradio.cz:8000/extra192",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "RÁDIO FM",
                "url" => "https://icecast.stv.livebox.sk/fm_128.mp3",
                "icon" => "https://i.imgur.com/mdT0UbB.png",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio FM",
                "url" => "https://icecast.stv.livebox.sk/fm_128.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "RÁDIO FRONTINUS",
                "url" => "http://stream.frontinus.sk:8000/frontinus128.mp3",
                "icon" => "https://i.imgur.com/1lXLnhr.png",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Frontinus",
                "url" => "http://stream.frontinus.sk:8000/frontinus128.mp3",
                "icon" => "http://frontinus.sk/images/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Janko Hraško",
                "url" => "http://78.24.9.110:31088/",
                "icon" =>
                    "https://jankohrasko.sk/wp-content/uploads/2022/01/cropped-janko-hrasko-180x180.png",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Janko Hraško",
                "url" => "http://78.24.9.110:31088/;",
                "icon" =>
                    "https://jankohrasko.sk/wp-content/uploads/2022/01/cropped-janko-hrasko-180x180.png",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Jazz",
                "url" => "http://stream.sepia.sk:8000/jazz128.mp3",
                "icon" => "https://radiojazz.sk/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Jupiter",
                "url" => "http://stream.radiojupiter.sk:8000/jupiter_64.aac",
                "icon" =>
                    "https://radiojupiter.sk/wp-content/uploads/2019/08/cropped-favicon-1-192x192.png",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio KIKS",
                "url" => "https://online.radiokiks.sk:8000/kiks_hq.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "Rádio KIKS",
                "url" => "https://online.radiokiks.sk:8000/kiks_hq.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "Rádio KIKS - Big 90s",
                "url" => "https://online.radiokiks.sk:8000/kiks_big90s.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "Rádio KIKS - Rock Music",
                "url" => "https://online.radiokiks.sk:8000/kiks_rock.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Košice",
                "url" => "http://stream.ecce.sk:8000/radiokosice-128.mp3",
                "icon" => "https://www.radiokosice.sk/assets/radio-ke.png",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Košice BA",
                "url" => "http://176.102.98.74:8000/radiokosice-ba-128.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Logos",
                "url" => "http://radioserver.online:8824/;",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Lumen",
                "url" => "http://audio.lumen.sk:8000/live128.mp3",
                "icon" =>
                    "https://www.lumen.sk/public/img/favicons/apple-icon-120x120.png",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Modra",
                "url" => "http://185.98.208.12:8000/",
                "icon" =>
                    "https://d1di2lzuh97fh2.cloudfront.net/files/1j/1j3/1j3767.ico?ph=c3d2c4efc8",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Muzika",
                "url" => "https://listen.radioking.com/radio/276343/stream/321988",
                "icon" =>
                    "https://radiomuzika.sk/wp-content/uploads/2020/09/apple-icon-114x114-1.png",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Paráda",
                "url" => "https://extra.mediacp.eu/stream/RadioParada,o.z.",
                "icon" => "https://www.radioparada.sk/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Piešťany",
                "url" => "http://live.radiopiestany.sk:8000/live.mp3",
                "icon" => "http://www.radiopiestany.sk/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Pohoda 2 ",
                "url" => "http://mpc1.mediacp.eu:18111/stream",
                "icon" => "https://radiopohoda.com/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio ROCK",
                "url" => "https://stream.bauermedia.sk/rock-hi.mp3",
                "icon" => "https://radiorock.sk/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Rock",
                "url" => "https://stream.bauermedia.sk/rock-hi.mp3",
                "icon" => "https://www.radiorock.sk/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "Radio Romper Čechoslovakia",
                "url" =>
                    "https://playerservices.streamtheworld.com/api/livestream-redirect/SAM05AAC415.aac",
                "icon" =>
                    "https://d1di2lzuh97fh2.cloudfront.net/files/24/241/241ygj.ico?ph=e7cd3d1306",
                "language" => "czech,slovak",
            ],
            [
                "name" => "Rádio Šírava",
                "url" => "http://radioserver.online:8804/;stream/1",
                "icon" =>
                    "https://www.radiosirava.sk/wp-content/uploads/2023/12/cropped-favicon-180x180.png",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Sity",
                "url" => "https://radiosity.online:8000/aac",
                "icon" =>
                    "https://radiosity.sk/wp-content/uploads/2021/12/cropped-favicon_radio_sity-180x180.png",
                "language" => "slovak",
            ],
            [
                "name" => "Radio TLIS",
                "url" => "https://stream.tlis.sk/tlis.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Topolčany",
                "url" => "http://80.242.44.249:8000/",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "Rádio v Nitre",
                "url" => "http://195.210.28.150:8932/radiovnitre_live.mp3",
                "icon" => "https://radiovnitre.sk/assets/images/apple-icon-120x120.png",
                "language" => "slovak",
            ],
            [
                "name" => "Radio Vaticana Solvenčina",
                "url" => "https://radio.vaticannews.va/stream-sk",
                "icon" =>
                    "https://www.vaticannews.va/etc/designs/vatican-news/release/library/main/images/favicons/apple-icon-120x120.png",
                "language" => "latin,slovak",
            ],
            [
                "name" => "Radio Vega",
                "url" => "http://stream.sepia.sk:8000/vega128.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "Radio Vega",
                "url" => "https://stream.sepia.sk:8000/vega128.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "Radio Vega Slovakia",
                "url" => "https://stream.sepia.sk:8000/vega128.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "RÁDIO VIVA",
                "url" => "http://stream.sepia.sk:8000/viva128.mp3",
                "icon" => "https://i.imgur.com/DExIeEb.png",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Viva",
                "url" => "http://stream.sepia.sk:8000/viva128.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "Radio Viva Metropol",
                "url" => "http://stream.sepia.sk:8000/viva128.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Vlna",
                "url" => "http://stream.radiovlna.sk/vlna-hi.mp3",
                "icon" => "http://cdn.radiovlna.sk/img/logo/apple-touch-icon.png?v=9",
                "language" => "slovak",
            ],
            [
                "name" => "RÁDIO VLNA 60-70",
                "url" => "https://stream.radiovlna.sk/gold-hi.mp3",
                "icon" => "https://i.imgur.com/XIRnWa2.png",
                "language" => "slovak",
            ],
            [
                "name" => "RÁDIO VLNA Classic Rock",
                "url" => "http://stream.radiovlna.sk:8000/rock-hi.mp3",
                "icon" => "https://i.imgur.com/9UvvAeL.png",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Vlna Golden hits",
                "url" => "https://stream.radiovlna.sk/gold-hi.mp3",
                "icon" => "https://cdn.radiovlna.sk/img/logo/apple-touch-icon.png?v=9",
                "language" => "slovak",
            ],
            [
                "name" => "Rádio Vlna Oldies Party",
                "url" => "https://stream.radiovlna.sk/party-hi.mp3",
                "icon" =>
                    "https://cdn.radiovlna.sk/img/logo/apple-touch-icon.png?v=2023-10-09-10-40",
                "language" => "slovak",
            ],
            [
                "name" => "radio WoW",
                "url" => "https://radioserver.online:9816/radiowow.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "Radio Zabava",
                "url" => "https://stream.zeno.fm/eyac00cx1nhvv",
                "icon" => "https://zeno.fm/static/icons/apple-icon-120x120.png",
                "language" => "slovak",
            ],
            [
                "name" => "RÁDIO_FM",
                "url" => "http://live.slovakradio.sk:8000/FM_256.mp3",
                "icon" =>
                    "https://ciernalabut.dennikn.sk/wp-content/uploads/radio-fm-logo.png",
                "language" => "slovak",
            ],
            [
                "name" => "RadioX",
                "url" => "http://158.193.82.41:8000/radiox_128.mp3",
                "icon" => "https://stream.radiox.sk/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "RadioX - Alternative X",
                "url" => "http://158.193.82.41:8000/alternative.mp3",
                "icon" => "https://stream.radiox.sk/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "RadioX - Chillout X",
                "url" => "http://158.193.82.41:8000/chillout.mp3",
                "icon" => "https://stream.radiox.sk/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "RadioX - Dance X",
                "url" => "http://158.193.82.41:8000/dance.mp3",
                "icon" => "https://stream.radiox.sk/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "RadioX - DnB X",
                "url" => "http://158.193.82.41:8000/dnb.mp3",
                "icon" => "https://stream.radiox.sk/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "RadioX - DnB X",
                "url" => "http://158.193.82.41:8000/dnb.mp3",
                "icon" => "https://stream.radiox.sk/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "RadioX - Folklore X",
                "url" => "http://158.193.82.41:8000/ludovky.mp3",
                "icon" => "https://stream.radiox.sk/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "RadioX - Metal X",
                "url" => "http://158.193.82.41:8000/metal.mp3",
                "icon" => "https://stream.radiox.sk/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "RadioX - Mood X",
                "url" => "http://158.193.82.41:8000/mood.mp3",
                "icon" => "https://stream.radiox.sk/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "RadioX - Oldies X",
                "url" => "http://158.193.82.41:8000/oldies.mp3",
                "icon" => "https://stream.radiox.sk/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "RETRO DJ Radio - HQ",
                "url" => "http://icecast1.play.cz/retrodjradio.mp3",
                "icon" => null,
                "language" => "czech,polish,slovak,slovenski,česky",
            ],
            [
                "name" => "RETRO DJ RADIO CZ",
                "url" => "https://free.rcast.net/70814.mp3",
                "icon" =>
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5xJ9EZJOZcmcYPhidD1MZO_fYB4qnHamsyOA76xRbilYqyAmZomM_7HMFW7uqhgh0RA0&usqp=CAU",
                "language" => "czech,slovak",
            ],
            [
                "name" => "RTVS Litera256",
                "url" => "http://live.slovakradio.sk:8000/Litera_256.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "RTVS Pyramida256",
                "url" => "http://live.slovakradio.sk:8000/Pyramida_128.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "RTVS Pyramida256",
                "url" => "http://live.slovakradio.sk:8000/Pyramida_256.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "RTVS Pyramida256",
                "url" => "http://live.slovakradio.sk:8000/Pyramida_256.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "RusynFM",
                "url" => "http://stream.rusyn.fm/rusyny.mp3",
                "icon" => "http://www.rusyn.fm/favicon.ico",
                "language" => "slovak",
            ],
            [
                "name" => "SKY Rádio",
                "url" => "http://stream.skyradio.sk:8000/sky128",
                "icon" => "http://www.skyradio.sk/img/fav.png",
                "language" => "slovak",
            ],
            [
                "name" => "SKY Rádio",
                "url" => "http://stream.skyradio.sk:8000/sky128",
                "icon" => "http://skyradio.sk/img/fav.png",
                "language" => "slovak",
            ],
            [
                "name" => "SLOBODNÝ VYSIELAČ",
                "url" => "http://vysielanie.online/radio/8020/SV128.mp3",
                "icon" => "https://i.imgur.com/1ytixYb.png",
                "language" => "slovak",
            ],
            [
                "name" => "Slobodný vysielač",
                "url" => "http://159.69.219.5:8010/mp3",
                "icon" =>
                    "https://slobodnyvysielac.sk/wp-content/uploads/2015/10/cropped-fav-150x150.png",
                "language" => "slovak",
            ],
            [
                "name" => "Slobodný vysielač",
                "url" => "http://vysielanie.online/radio/8020/SV128.mp3",
                "icon" =>
                    "https://slobodnyvysielac.b-cdn.net/wp-content/uploads/2015/10/cropped-fav-150x150.png",
                "language" => "slovak",
            ],
            [
                "name" => "SRo1 Rádio Slovensko",
                "url" => "http://live.slovakradio.sk:8000/Slovensko_128.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "SRo1 Rádio Slovensko (256k)",
                "url" => "http://live.slovakradio.sk:8000/Slovensko_256.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "SRo2 Rádio Regina Stred",
                "url" => "http://icecast.stv.livebox.sk/regina-bb_128.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "SRo2 Rádio Regina Východ",
                "url" => "http://icecast.stv.livebox.sk/regina-ke_128.mp3",
                "icon" =>
                    "https://www.rtvs.sk/media/images/radiostations/radio_regina.png",
                "language" => "slovak",
            ],
            [
                "name" => "SRo2 Rádio Regina Západ",
                "url" => "http://icecast.stv.livebox.sk/regina-ba_128.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "SRo3: Rádio Devín",
                "url" => "http://icecast.stv.livebox.sk/devin_128.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "SRo4 Rádio FM",
                "url" => "http://live.slovakradio.sk:8000/FM_256.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "SRo7 Rádio Pyramida",
                "url" => "http://live.slovakradio.sk:8000/Pyramida_128.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "SRo8 Rádio Litera",
                "url" => "http://icecast.stv.livebox.sk/litera_128.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "SRo9 Rádio Junior",
                "url" => "http://live.slovakradio.sk:8000/Junior_128.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "SRo9 Rádio Junior (256k)",
                "url" => "http://live.slovakradio.sk:8000/Junior_256.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "SUB:FM",
                "url" => "http://stream.subfm.sk/subfm",
                "icon" =>
                    "https://www.subfm.sk/wp-content/uploads/2021/11/cropped-android-chrome-512x512-1-32x32.png",
                "language" => "slovak",
            ],
            [
                "name" => "TLIS Rádio",
                "url" => "http://stream.tlis.sk/tlis.mp3",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "Top Rádio",
                "url" => "https://solid1.streamupsolutions.com/proxy/vhhggmih/stream",
                "icon" =>
                    "https://www.radiotop.sk/wp-content/uploads/2021/10/cropped-favico-180x180.png",
                "language" => "slovak",
            ],
            [
                "name" => "TRNAVSKÉ RÁDIO",
                "url" => "http://stream.trnavskeradio.sk/trnavske",
                "icon" => "https://imgur.com/X0gqKgE",
                "language" => "slovak",
            ],
            [
                "name" => "TRNAVSKÉ RÁDIO",
                "url" => "http://stream.trnavskeradio.sk/trnavske",
                "icon" => "https://i.imgur.com/ECVh6em.png",
                "language" => "slovak",
            ],
            [
                "name" => "Trnavské rádio",
                "url" => "http://stream.trnavskeradio.sk/trnavske",
                "icon" => null,
                "language" => "slovak",
            ],
            [
                "name" => "Záhorácke Rádio",
                "url" => "http://live.zahorackeradio.sk:8080/zr128.mp3",
                "icon" =>
                    "https://www.zahorackeradio.sk/i/show/256x0/logo/zahoracke_radio_02mwb.png",
                "language" => "slovak",
            ],
        ];

        foreach ($data as $radio) {
            // if langauges contains more than one language use first language
            $radio['language'] = explode(',', $radio['language'])[0];
            Radio::create($radio);
        }
    }
}
