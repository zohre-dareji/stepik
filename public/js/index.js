var app = angular.module('ToDoApp', []);

app.directive('ngConfirmClick', [
    function () {
        return {
            link: function (scope, element, attr) {
                var msg = attr.ngConfirmClick || "Are you sure?";
                var clickAction = attr.confirmedClick;
                element.bind('click', function (event) {
                    if (window.confirm(msg)) {
                        scope.$eval(clickAction)
                    }
                });
            }
        };
    }]);

app.controller('MainController', function ($scope) {
    $scope.tabs = {
        'createTab':false,
        'indexxTab':false,
        'showTab':false,
        'editTab':false,
    };
    $scope.changeTab = function (tab, id = null) {
        if (id) {
            localStorage.setItem('id', id);
        }
        angular.forEach($scope.tabs, function (key, value) {
            $scope.tabs[value] = false;
        });
        angular.forEach($scope.tabs, function (key, value) {
            if (value === tab) {
                $scope.tabs[tab] = true;
            }
        });
    }
});

app.controller('profileController', function ($scope, $http) {
    let id =localStorage.getItem('id');
    $scope.submit = function () {
        $http.post("http://localhost:8000/api/profiles/", {
            name: $scope.name,
            lastname: $scope.lastname,
            gnsiat: $scope.gnsiat,
            madrak: $scope.madrak,
            aboutme:$scope.aboutme,
            doreh: $scope.doreh
        })
            .then(
                function successCallback(response) {

                    alert('اطلاعات باموفقیت ثبت شد')

                },
                function errorCallback(response) {
                    console.log('مشکلی در ارتباط با سرور پیش امده است');
                }
            );
    };

    $scope.getProfiles = function () {
        $http.get("http://localhost:8000/api/profile")
            .then(
                function successCallback(response) {
                    $scope.profiles = response.data;

                },
                function errorCallback(response) {
                    console.log("مشکلی در ارتباط با سرور پیش آمده است");
                }
            );
    };
    $scope.getProfiles();

    $scope.show = function () {
        $http.get("http://localhost:8000/api/profile/" + id)
            .then(
                function successCallback(response) {
                    $scope.name = response.data.name,
                        $scope.lastname = response.data.lastname,
                        $scope. gnsiat= response.data.gnsiat,
                        $scope. madrak= response.data.madrak,
                        $scope. aboutme= response.data.aboutme,
                        $scope. doreh= response.data.doreh
                },
                function errorCallback(response) {
                    console.log(response.data);
                }
            );
    };
    $scope.show();

    $scope.edit=function () {
        $http.put("http://localhost:8000/api/profiles/"+ id,{
            name: $scope.name,
            lastname : $scope.lastname,
            gnsiat: $scope.gnsiat,
            madrak: $scope. madrak,
            aboutme: $scope.aboutme,
            doreh: $scope.doreh
        })
            .then(
                function successCallback(response) {
                    console.log($scope.res);
                   // $scope.changeTab('create','0');
                    alert('اطلاعات با موفقیت ویرایش شد');
                },
                function errorCallback(response) {
                    console.log('مشکلی در ارتباط با سرور پیش امده است')
                }
            );
    };
    $scope.delete = function (id) {
        $http.delete("http://localhost:8000/api/profile/" + id)
            .then(
                function successCallback(response) {
                    $scope.getProfiles();
                },
                function errorCallback(response) {
                    console.log("مشکلی در ارتباط با سرور پیش آمده است");
                }
            );
    };

});











