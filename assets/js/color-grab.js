
// https://stackoverflow.com/questions/12576084/getting-the-real-background-color-of-an-element
// https://stackoverflow.com/questions/4606133/jquery-each-and-attr-functions

function hexc(colorval) {
    var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
    delete(parts[0]);
    for (var i = 1; i <= 3; ++i) {
        parts[i] = parseInt(parts[i]).toString(16);
        if (parts[i].length == 1) parts[i] = '0' + parts[i];
    }
    color = '#' + parts.join('');
}

var color = '';
$('.color').each(function() {
    var x = $(this).css('backgroundColor');
    hexc(x);
    $(this).attr('data-sketch-color', color); //Set the generated hex value of each color div with the 'data-sketch-color' attribute
})