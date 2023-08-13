var app = angular.module("ShoeShop", ["ngRoute"])
app.config(function ($routeProvider) {
    $routeProvider
        .when("/home", {
            templateUrl: "/pages/main.html"
        })
        .when("/product", {
            templateUrl: "/pages/product.html"
        })
        .otherwise({
            templateUrl: "/pages/main.html"
        })
})

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}