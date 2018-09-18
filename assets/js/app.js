var myApp = angular.module('myApp', ['ngRoute']);

myApp.config(function($routeProvider){

    $routeProvider
        .when('/', {

            templateUrl: 'pages/usuarios.html',

            controller: 'mainController'

        })
        .when('/clientes', {

            templateUrl: 'pages/clientes.html',

            controller: 'secondController'

        })
});

myApp.controller('mainController', ['$scope', '$location', '$log', '$http', function ($scope, $location, $log, $http){
    $scope.respostaCriarUsuario = null;
    $scope.buscarTodos = function(){
        $http({
            method: 'GET',
            url: "usuarios/buscarTodos",  /*You URL to post*/
            //data: $scope.cust  /*You data object/class to post*/
        }).then(function successCallback(response) {
            $scope.usuarios = response.data.data;
        }, function errorCallback(response) {
            console.error(response);
        });
    };

    $scope.enviar = function(usuario) {
        $http({
            method: 'POST',
            url: "usuarios/criar",  /*You URL to post*/
            data: usuario  /*You data object/class to post*/
        }).then(function successCallback(response) {
            if(response.data.sucesso){
                $scope.respostaCriarUsuario = "Usuário criado com o ID " + response.data.data.idusuario;
                $scope.buscarTodos();
            }else{
                $scope.respostaCriarUsuario = response.data.msg;
            }
        }, function errorCallback(response) {
            $scope.respostaCriarUsuario = "Houve um erro de conexão, por favor, tente novamente";
            console.error(response);
        });
    };

    $scope.excluir = function(nome, idusuario) {
        if(confirm("Você tem certeza que deseja excluir " + nome + "?") == true){
            $http({
                method: 'POST',
                url: "usuarios/excluir",  /*You URL to post*/
                data: {id: idusuario}  /*You data object/class to post*/
            }).then(function successCallback(response) {
                if(response.data.sucesso){
                    $scope.buscarTodos();
                    alert('O usuário ' + nome + ' foi excluido com sucesso!');
                }else{
                    alert(response.data.msg);
                }
            }, function errorCallback(response) {
                alert("Houve um erro de conexão, por favor, tente novamente");
                console.error(response);
            });
        }
    };

    $scope.editar = function (usuario) {
        $scope.usuario_editando = angular.copy(usuario);
        console.log(usuario, $scope.usuario_editando);
        $('#modal-editar').modal('show');
    };

    $scope.buscarTodos();
}]);

myApp.controller('secondController', ['$scope', '$location', '$log','$http', function ($scope, $location, $log, $http){

    $scope.frmToggle = function() {

        $('#blogForm').slideToggle();

    }

    $http.get('welcome/get').

    success(function(data) {

        $scope.posts = data;

    }).

    error(function(data, status) {

        $log.error(status);

    });

    $scope.criarPost = function(){

        $http.post('welcome/post',

            {

                'title' : $scope.title,

                'description' : $scope.description

            }

        ).success(function (data) {

            $scope.posts = data;

        });

    }

}]);