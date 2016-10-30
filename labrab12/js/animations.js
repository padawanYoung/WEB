function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min)
}

var photo=['WP004_01.jpeg','WP004_02.jpeg','WP004_03.jpeg','WP004_04.jpeg','WP004_05.jpeg','WP004_06.jpeg','WP004_07.jpeg','WP004_08.jpeg','WP004_09.jpeg','WP004_10.jpeg','WP004_11.jpeg','WP004_11.jpeg','WP004_12.jpeg','WP004_13.jpeg','WP004_14.jpeg','WP004_15.jpeg','WP004_16.jpeg','WP004_17.jpeg','WP004_18.jpeg','WP004_18.jpeg','WP004_19.jpeg','WP004_20.jpeg','WP004_21.jpeg','WP004_22.jpeg','WP004_23.jpeg'];

var im = '<img src=\"img/'+ photo[getRandomInt(0, photo.length)] + '">';
$('#photo').html('<img src=\"img/'+ photo[getRandomInt(0, photo.length)] + '">').fadeOut(3000, function (){
    $('#photo').html('<img src=\"img/'+ photo[getRandomInt(0, photo.length)] + '">').fadeIn(3000);
} );