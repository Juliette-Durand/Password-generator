function generatePassword(length, options) {
    var numbers = "0123456789";
    var lowerCaseLetters = "abcdefghijklmnopqrstuvwxyz";
    var upperCaseLetters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    var symbols = "!@#$%^&*()_+~`|}{[]:;?><,./-=";

    var allCharacters = "";
    if (options.includeNumbers) {
        allCharacters += numbers;
    }
    if (options.includeLowerCase) {
        allCharacters += lowerCaseLetters;
    }
    if (options.includeUpperCase) {
        allCharacters += upperCaseLetters;
    }
    if (options.includeSymbols) {
        allCharacters += symbols;
    }

    var password = "";
    for (var i = 0; i < length; i++) {
        var randomIndex = Math.floor(Math.random() * allCharacters.length);
        password += allCharacters[randomIndex];
    }

    return password;
}
var form = $("form");

form.on("submit", function(e){
    e.preventDefault();
   
    var numbers = $("#numbers");
    var capsletters = $("#capsletters");
    var symbols = $("#symbols");
    var how_many_glyphs = $("#how_many_glyphs");
    var result = $(".result");
    var btnCopy = $("#button_container_copy");
    const password = {
        includeNumbers: numbers.is(":checked"),
        includeLowerCase: true,
        includeUpperCase: capsletters.is(":checked"),
        includeSymbols: symbols.is(":checked"),
    };

    var passwordLength = how_many_glyphs.val();
    var newPassword = generatePassword(passwordLength, password);

    result.css( "display", "block" );
    btnCopy.css( "display", "block" );
    result.html(newPassword);
})

function copierTexte(){
    var txt = $(".result");
    console.log(txt.text());
    navigator.clipboard.writeText(txt.text())
}